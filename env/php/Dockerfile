FROM php:7.2-apache

RUN apt-get update \
  && apt-get install -y libfreetype6-dev libjpeg62-turbo-dev libpng-dev libmcrypt-dev autoconf pkg-config libssl-dev zlib1g-dev libicu-dev g++ \
  && docker-php-ext-install mysqli pdo pdo_mysql gd php5-gd iconv

RUN docker-php-ext-configure intl
RUN docker-php-ext-install intl

RUN pecl install mongodb
RUN docker-php-ext-install bcmath
RUN pecl install redis && docker-php-ext-enable redis

# install phpunit
RUN curl https://phar.phpunit.de/phpunit.phar -L > phpunit.phar \
  && chmod +x phpunit.phar \
  && mv phpunit.phar /usr/local/bin/phpunit \
  && phpunit --version


COPY php.ini /usr/local/etc/php/


RUN a2enmod rewrite
RUN a2enmod headers
RUN service apache2 restart