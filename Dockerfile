FROM php:7.2-apache

RUN apt update \
 && docker-php-ext-install pdo pdo_mysql mysqli json

COPY . /var/www/html/

WORKDIR /var/www/html/

EXPOSE 80