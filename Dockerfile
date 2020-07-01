FROM php:rc-fpm-alpine3.12
MAINTAINER Mate Kocsis <kocsismate@woohoolabs.com>

RUN docker-php-ext-install opcache

ADD ./ /code

WORKDIR /code

EXPOSE 9000

CMD php-fpm
