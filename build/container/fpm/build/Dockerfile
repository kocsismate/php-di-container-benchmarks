FROM php:7-fpm
MAINTAINER Mate Kocsis <kocsismate@woohoolabs.com>

COPY ./ /build

RUN chmod -R +x /build && \
    /build/build.sh && \
    rm -R /build

WORKDIR /code

EXPOSE 9000

CMD php-fpm
