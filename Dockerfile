FROM php:8.2-cli

WORKDIR /var/www/html

RUN apt-get update && apt-get install -y \
    git \
    unzip \
    libzip-dev \
    && docker-php-ext-install pdo_mysql zip

COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

COPY . .

RUN composer install --no-dev --optimize-autoloader

RUN apt-get update && apt-get install -y nodejs npm

RUN npm install
RUN npm run build


EXPOSE 10000

CMD php artisan serve --host=0.0.0.0 --port=10000