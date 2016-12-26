#!/usr/bin/env bash
set -e

export DOLLAR='$'
envsubst < /code/build/container/php/php.ini > /usr/local/etc/php.ini
envsubst < /code/build/container/php/custom-php.ini > /usr/local/etc/php/conf.d/zz-custom-php.ini

(cd /code && composer install --classmap-authoritative)

/code/bin/benchmark
