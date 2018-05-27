# https://store.docker.com/images/composer
FROM composer:latest as composer
WORKDIR /app/
COPY web/composer.json .
RUN composer install

# https://store.docker.com/images/php
FROM php:7.2-apache-stretch
WORKDIR /var/www/html/
COPY --from=composer /app/ .
COPY web/ .
