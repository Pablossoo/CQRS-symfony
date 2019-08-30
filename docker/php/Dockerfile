# ./docker/php/Dockerfile
FROM php:7.2-fpm

RUN apt-get -y update --fix-missing
RUN apt-get upgrade -y
RUN docker-php-ext-install pdo_mysql

RUN pecl install apcu

# Install useful tools
RUN apt-get -y install apt-utils nano wget dialog

# Install important libraries
RUN apt-get -y install --fix-missing apt-utils build-essential git libcurl3-dev  zip openssl


RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
RUN composer --version


# extension
RUN docker-php-ext-install curl
RUN docker-php-ext-install tokenizer
RUN docker-php-ext-install json

RUN apt-get -y install zlib1g-dev
RUN docker-php-ext-install zip

RUN apt-get -y install libicu-dev
RUN docker-php-ext-install -j$(nproc) intl

RUN docker-php-ext-install mbstring
RUN docker-php-ext-install gettext

RUN apt-get install -y libfreetype6-dev libjpeg62-turbo-dev libpng-dev
RUN docker-php-ext-configure gd --with-freetype-dir=/usr/include/ --with-jpeg-dir=/usr/include/
RUN docker-php-ext-install -j$(nproc) gd

RUN docker-php-ext-install exif
RUN docker-php-ext-enable apcu


WORKDIR /usr/src/app

COPY . /usr/src/app

RUN composer install --no-dev --no-interaction -o
RUN PATH=$PATH:/usr/src/apps/vendor/bin:bin