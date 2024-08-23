#!/bin/bash
echo "Executing migrations"
php artisan migrate --force
if [ ! -f ".env" ]; then
    echo "Moving .env.example to .env"
    cp .env.example .env
fi

if [ ! -f "storage/db_seeded" ]; then
    echo "Seeding database"
    php artisan db:seed
    touch "storage/db_seeded"
fi

php artisan optimize:clear
php artisan optimize
