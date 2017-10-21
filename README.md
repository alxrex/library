

Install

Configure the below files:

/.env

/config/app.php

/config/database.php



//Run next commands to install DB and seed

php artisan make:migration

php artisan db:seed --class=BookTableSeeder
