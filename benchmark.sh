#!/usr/bin/env bash
set -e

if [ "$1" == "docker" ]; then

    # Install composer dependencies
    docker run --rm --interactive --tty \
        --volume $PWD:/code \
        --user $(id -u):$(id -g) \
        composer install --no-suggest --no-interaction --working-dir=/code

    # Build DI containers
    docker-compose run --no-deps cli /code/bin/benchmark build

    # Dump autoloader
    docker run --rm --interactive --tty \
        --volume $PWD:/code \
        --user $(id -u):$(id -g) \
        composer dump-autoload --classmap-authoritative --no-interaction --working-dir=/code

    # Run the benchmark
    docker-compose up --build

elif [ "$1" == "host" ]; then

    composer install --no-suggest --no-interaction --working-dir=./

    ./bin/benchmark build

    composer dump-autoload --classmap-authoritative --no-interaction --working-dir=./

    VAR="$BENCHMARK_URL"
    if [ ! -z "$2" ]; then
        VAR="$2"
    fi

    ./bin/benchmark "$VAR"

else

    echo 'Either specify "docker" or "host" as the first parameter of the command!'
    exit -1

fi
