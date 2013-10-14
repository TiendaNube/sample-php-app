Sample PHP App
==============

This is a sample app for the [Tienda Nube/Nuvem Shop API](https://github.com/TiendaNube/api-docs) using the official [SDK for PHP](https://github.com/TiendaNube/tiendanube-php-sdk).

This app was made using [Laravel](http://laravel.com/). Be sure to check [their documentation](laravel.com/docs).


Installation
------------
First, you will need to install [Composer](http://getcomposer.org/) following the instructions on their site.

Then, simply run the following command:

```sh
composer create-project tiendanube/sample-php-app sample-app --prefer-dist
```

Alternatively, you may download the [contents of this repository](https://github.com/TiendaNube/sample-php-app/archive/master.zip) and run `composer install` from your project's root directory.

Configuration
-------------
Make sure to define your database connection in `app/config/database.php`, then run the provided migration:

```sh
php artisan migrate
```

Then add your app_id and app_secret to `app/config/tiendanube.php`. You might also want to change the `auth` filter in `app/filters.php` to use the login URL in Spanish or Portuguese.

Now you can test your app! Just set your redirect_uri to `http://localhost:8000/auth` and run a PHP server:

```sh
php artisan serve
```

When you visit [http://localhost:8000](http://localhost:8000) you will be taken to Tienda Nube/Nuvem Shop's login page. Log into your store and you will be prompted to install your app. Install it and the provided auth route will take care of obtaining and storing an access token.
