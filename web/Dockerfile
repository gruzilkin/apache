FROM php:8.1-apache

RUN apt-get update && apt-get install -y libpq-dev libmemcached-dev zlib1g-dev \
	&& apt-get clean && rm -rf /var/lib/apt/lists/*

RUN docker-php-ext-install pdo_pgsql

RUN pecl install memcached-3.2.0 && docker-php-ext-enable memcached