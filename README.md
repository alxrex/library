# How to Install

###
Requirements
* Apache Webserver or similar
* MySQL or MariaDB server


### Configure the below files:

Set the Database configuration, server/db/user.

* /.env

* /config/app.php

* /config/database.php



### Run next commands to install DB and seed

1. Create Database with name "library"

2. Run commands:
```
php artisan make:migration
```

```
php artisan db:seed --class=BookTableSeeder
```

3.  If you have cloned the repository from `git clone git@github.com:alxrex/library.git`, Brose: http://locahost/library/public