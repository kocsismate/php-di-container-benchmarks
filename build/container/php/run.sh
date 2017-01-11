#!/usr/bin/env bash
set -e

export DOLLAR='$'
envsubst < /code/build/container/php/custom-php.ini > /usr/local/etc/php/conf.d/zz-custom-php.ini

composer install --working-dir=/code --no-interaction --no-suggest

/code/bin/benchmark
