#!/bin/sh
set -e

cp /code/build/container/fpm/custom-php.ini /usr/local/etc/php/conf.d/zz-custom-php.ini

sed -i "s/OPCACHE_ENABLED/$OPCACHE_ENABLED/g" /usr/local/etc/php/conf.d/zz-custom-php.ini

php-fpm
