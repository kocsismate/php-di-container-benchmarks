FROM php:7-fpm
MAINTAINER Mate Kocsis <kocsismate@woohoolabs.com>

ENV COMPOSER_VERSION 1.3.1
ENV COMPOSER_ALLOW_SUPERUSER 1
ENV COMPOSER_HOME /composer
ENV PATH /composer/vendor/bin:/code:/code/vendor/bin:$PATH

COPY ./ /build

RUN chmod -R +x /build && \
    /build/build.sh && \
    rm -R /build

WORKDIR /code

CMD php-fpm
