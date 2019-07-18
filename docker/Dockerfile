FROM php:7.2-alpine

RUN apk add --no-cache \
        curl \
        gnupg \
        git \
        imagemagick \
        icu-dev \
        zlib-dev \
        netcat-openbsd

RUN docker-php-ext-install pdo_mysql

COPY . /app
WORKDIR /app
