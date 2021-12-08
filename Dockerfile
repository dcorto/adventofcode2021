FROM php:8.0-cli

RUN apt-get update && apt-get install -y \
        libzip-dev \
    && docker-php-ext-install zip \
    && apt-get clean autoclean

RUN curl -sS https://getcomposer.org/installer | php -- \
--install-dir=/usr/bin --filename=composer