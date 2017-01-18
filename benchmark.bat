@echo off

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
