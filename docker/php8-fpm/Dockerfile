# Old: https://github.com/docker-library/php/blob/master/7.1/fpm/Dockerfile
# New: https://github.com/docker-library/php/blob/master/8.2/alpine3.17/fpm/Dockerfile
FROM php:8.2-fpm
ARG TIMEZONE

MAINTAINER Maxence POUTORD <maxence.poutord@gmail.com>

RUN apt-get update && apt-get install -y --force-yes \
    openssl \
    git \
    unzip

# Install Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer \
    && composer --version

#RUN composer self-update --1

# Set timezone
RUN ln -snf /usr/share/zoneinfo/${TIMEZONE} /etc/localtime && echo ${TIMEZONE} > /etc/timezone \
    && printf '[PHP]\ndate.timezone = "%s"\n', ${TIMEZONE} > /usr/local/etc/php/conf.d/tzone.ini \
    && "date"

# Type docker-php-ext-install to see available extensions
RUN docker-php-ext-install pdo pdo_mysql

RUN apt-get update && apt-get install -y --force-yes libpng-dev
RUN apt-get install -y --force-yes \
    libwebp-dev \
    libjpeg62-turbo-dev \
    libpng-dev libxpm-dev \
    libfreetype6-dev

RUN docker-php-ext-configure gd \
    --enable-gd \
    --with-webp \
    --with-jpeg \
    --with-xpm \
    --with-freetype

RUN docker-php-ext-install gd

RUN apt-get install -y --force-yes
## install xdebug
RUN pecl install xdebug-3.2.0 \
&& docker-php-ext-enable xdebug

RUN echo 'alias sf="php app/console"' >> ~/.bashrc \
    && echo 'alias sf3="php bin/console"' >> ~/.bashrc

WORKDIR /var/www/php
