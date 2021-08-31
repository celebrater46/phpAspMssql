FROM php:7.4-apache

RUN a2enmod rewrite

RUN apt-get update \
&& apt-get install -y libzip-dev git wget --no-install-recommends \
&& apt-get clean \
&& rm -rf /var/lib/apt/lists/* /tmp/* /var/tmp/*

RUN docker-php-ext-install pdo mysqli pdo_mysql mbstring zip;

WORKDIR /var/www/html

EXPOSE 80