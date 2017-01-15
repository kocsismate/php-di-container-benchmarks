#!/usr/bin/env bash
set -e

envsubst < /code/build/container/fpm/custom-php.ini > /usr/local/etc/php/conf.d/zz-custom-php.ini

php-fpm
