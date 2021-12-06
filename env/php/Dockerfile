FROM php:7.4-apache

RUN apt-get update \
  && apt-get install -y libfreetype6-dev libjpeg62-turbo-dev libpng-dev libmcrypt-dev autoconf pkg-config libssl-dev zlib1g-dev libicu-dev g++ \
  && docker-php-ext-install mysqli pdo pdo_mysql gd iconv

RUN docker-php-ext-configure intl
RUN docker-php-ext-install intl
RUN docker-php-ext-install sockets

RUN pecl install mongodb
RUN docker-php-ext-install bcmath
RUN pecl install redis && docker-php-ext-enable redis

COPY php.ini /usr/local/etc/php/

RUN a2enmod rewrite
RUN a2enmod headers
RUN service apache2 restart