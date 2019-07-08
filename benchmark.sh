#!/usr/bin/env bash
set -e

PROJECT_ROOT=$( cd "$( dirname "${BASH_SOURCE[0]}" )" && pwd )

if [[ "$1" == "docker" ]]; then

    # Install composer dependencies
    docker run --rm --interactive --tty \
        --volume $PROJECT_ROOT:/code \
        --user $(id -u):$(id -g) \
        composer install --prefer-dist --no-suggest --no-interaction --working-dir=/code

    # Build DI containers
    docker-compose run --no-deps benchmark-cli /code/bin/benchmark build

    # Dump autoloader
    docker run --rm --interactive --tty \
        --volume $PROJECT_ROOT:/code \
        --user $(id -u):$(id -g) \
        composer dump-autoload --classmap-authoritative --no-interaction --working-dir=/code

    # Run the benchmark
    docker-compose up --build

elif [[ "$1" == "aws" ]]; then

    cd $PROJECT_ROOT/build/infrastructure/aws/

    terraform get -update
    terraform init -backend=true -get=false

    echo "TERRAFORM PLAN:";

    terraform plan \
        -input=false \
        -out="$PROJECT_ROOT/build/infrastructure/aws/aws.tfplan" \
        -refresh=true \
        -var "project_root=\"$PROJECT_ROOT\"" \
        -var-file="$PROJECT_ROOT/build/infrastructure/config/aws.tfvars"

    echo "TERRAFORM APPLY:";

    terraform apply \
        -auto-approve \
        -input=false \
        "$PROJECT_ROOT/build/infrastructure/aws/aws.tfplan"

    BENCHMARK_URL=`terraform output dns`

    echo "RUNNING BENCHMARK: $BENCHMARK_URL"

    $PROJECT_ROOT/bin/benchmark "$BENCHMARK_URL"

    echo "TERRAFORM DESTROY"

    terraform destroy \
        -var "project_root=\"$PROJECT_ROOT\"" \
        -var-file="$PROJECT_ROOT/build/infrastructure/config/aws.tfvars"

    cd $PROJECT_ROOT

elif [[ "$1" == "host" ]]; then

    composer install --prefer-dist --no-suggest --no-interaction --working-dir=$PROJECT_ROOT

    $PROJECT_ROOT/bin/benchmark build

    composer dump-autoload --classmap-authoritative --no-interaction --working-dir=$PROJECT_ROOT

    VAR="$BENCHMARK_URL"
    if [ ! -z "$2" ]; then
        VAR="$2"
    fi

    $PROJECT_ROOT/bin/benchmark "$VAR"

else

    echo 'Available options: "docker", "aws", "host"!'
    exit -1

fi
