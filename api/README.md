# Funcionarios API

Project to improve skills about API consumption using the framework Laravel.

## Technologies used
Laravel: 6.2.0.

## Getting Started
Perform configuration of the development environment using a web server, database, and PHP dependencies.

## Project installation

Perform cloning of the repository through GitHub:

```shell 
git clone https://github.com/oBrunoFreitas/api_laravel.git
```

Navigate through the folders on your computer until you reach the cloned folder:

```shell 
cd api_laravel/api
```

Use the *composer* to perform the installation:

```shell 
composer install
```

## Creating database:
Create the database in your MySQL database manager environment:

```sql
CREATE DATABASE test_api;
```

Config the .enf file with you db information 

```shell
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=test_api
DB_USERNAME=root
DB_PASSWORD=
```

## Starting server
Start displaying the application from the server:

```shell
php -S localhost:8000 -t public
```

If everything is correct, when running `php artisan serve` in the terminal, something like:

```shell
PHP 7.2.24-0ubuntu0.18.04.1 Development Server started at Thu Nov 28 16:14:13 2019
Listening on http://localhost:8000
Document root is /home/bruno.freitas/Document/projects/api_laravel/api/public/api
Press Ctrl-C to quit.
```

## End points

(GET) funcionarios/list - list all data.
```shell
public/api/funcionario/list
```    
(GET) funcionarios/show/id – return especific id data.
```shell
public/api/funcionario/show/1
```
(POST) funcionarios/create - create a new registre with post data.
```shell
public/api/funcionario/create
```
(POST) funcionarios/destroy – delete a specific record by id
```shell
public/api/funcionario/destroy/1
```
(POST) funcionarios/update – update a specific record by id
```shell
public/api/funcionario/update/1name=bruno
