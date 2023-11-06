# FROM node:latest AS node
FROM php:8.2-apache

RUN apt-get update \
    && apt-get install -y libfreetype6-dev libjpeg62-turbo-dev libpng-dev libmcrypt-dev autoconf pkg-config libssl-dev zlib1g-dev libicu-dev g++ \
    && docker-php-ext-install mysqli pdo pdo_mysql gd iconv \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install -j$(nproc) gd

RUN docker-php-ext-configure intl
RUN docker-php-ext-install intl
RUN docker-php-ext-install bcmath
# RUN docker-php-ext-install sockets


RUN pecl install mongodb && docker-php-ext-enable mongodb
RUN pecl install redis && docker-php-ext-enable redis

# COPY --from=node /usr/local/lib/node_modules /usr/local/lib/node_modules
# COPY --from=node /usr/local/bin/node /usr/local/bin/node
# RUN ln -s /usr/local/lib/node_modules/npm/bin/npm-cli.js /usr/local/bin/npm
#RUN npm install

COPY php.ini /usr/local/etc/php/

RUN a2enmod rewrite
RUN a2enmod headers
RUN service apache2 restart
