#!/bin/bash
set -e

cd /var/www/html

if [ ! -f composer.json ]; then
    echo "composer.json not found in /var/www/html — is the bind mount configured?"
    exec "$@"
fi

if [ ! -d vendor ]; then
    echo "vendor/ missing, running composer install..."
    composer install --no-interaction --prefer-dist --optimize-autoloader
fi

if [ ! -f .env ] && [ -f .env.example ]; then
    cp .env.example .env
fi

if [ -f .env ] && grep -q "^APP_KEY=$" .env; then
    php artisan key:generate --ansi --force
fi

mkdir -p storage/framework/{cache,sessions,views} storage/logs bootstrap/cache
chown -R www-data:www-data storage bootstrap/cache 2>/dev/null || true

exec "$@"
