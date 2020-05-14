FROM php:7.2-apache

RUN apt update \
 && docker-php-ext-install pdo \
 && docker-php-ext-install pdo_mysql \
 && docker-php-ext-install mysqli

COPY . /var/www/html/

WORKDIR /var/www/html/

EXPOSE 80