## Main

### Project title:<br>

• Test api

### Project description:<br>

This API provides you to get some information from the virtual library by requesting data.

•	Author: rk-pol

## Requirements
•	PHP 8.1 or higher
•   Laravel 9
• 	Mysql 8.0

## Usage <br>
Setting up your development environment on your local machine: <br>
```
git clone https://github.com/rk-pol/test-api.git
composer install
php artisan serve
```

## Before starting <br>
Create a database <br>
```
mysql
create database api_library;
exit;
```

Set up the database credentials in the .env file <br>

Database:
```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=api_library
DB_USERNAME={USERNAME}
DB_PASSWORD={PASSWORD}
```
Migrate the tables
```
php artisan migrate
```	

Seed the tables
```
php artisan db:seed
```	
