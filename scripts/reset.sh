#!/bin/sh
# chmod u+x YourScript.sh

echo "\nReseting... \n"
echo "\nClearing The Cache... \n"

php artisan clear 
php artisan config:clear
php artisan cache:clear
php artisan view:clear
php artisan route:clear


echo "\nDropping/Recreating Database... \n"

php artisan migrate:fresh

echo "\nDONE :) ... \n"