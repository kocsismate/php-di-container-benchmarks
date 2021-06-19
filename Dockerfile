FROM php:8.0.7-fpm-alpine3.12
MAINTAINER Máté Kocsis <kocsismate@woohoolabs.com>

RUN docker-php-ext-install opcache

ADD ./ /code

WORKDIR /code

EXPOSE 9000

CMD php-fpm
