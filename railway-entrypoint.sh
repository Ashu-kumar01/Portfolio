#!/bin/bash

PORT=${PORT:-8080}

sed -i "s/Listen 80/Listen ${PORT}/g" /etc/apache2/ports.conf

sed -i "s/:80>/:${PORT}>/g" /etc/apache2/sites-available/000-default.conf

php artisan config:cache
php artisan route:cache
php artisan view:cache

exec "$@"