FROM php:8.2-fpm
RUN apt-get update && apt-get install -y git curl libpng-dev libonig-dev libxml2-dev zip unzip supervisor
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer
WORKDIR /app
COPY . /app
EXPOSE 8000
