FROM php:7.0-apache

COPY . /nevosoft_test

WORKDIR /nevosoft_test

#RUN docker-php-ext-install pdo pdo_pgsql pgsql

PHP_EXTENSION_PGSQL=1
