[![Zeus Kit](https://larazeus.com/images/lara-zeus-zeus.webp?v=4)](https://github.com/lara-zeus/zeus)

<p align="center">

[![Latest Version on Packagist](https://img.shields.io/packagist/v/lara-zeus/zeus.svg?style=flat-square)](https://packagist.org/packages/lara-zeus/zeus)
[![Tests](https://img.shields.io/github/actions/workflow/status/lara-zeus/zeus/run-tests.yml?label=tests&style=flat-square&branch=main)](https://github.com/lara-zeus/zeus/actions?query=workflow%3Arun-tests+branch%3Amain)
[![Code Style](https://img.shields.io/github/actions/workflow/status/lara-zeus/zeus/fix-php-code-style-issues.yml?label=code-style&flat-square)](https://github.com/lara-zeus/zeus/actions?query=workflow%3Afix-php-code-style-issues+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/lara-zeus/zeus.svg?style=flat-square)](https://packagist.org/packages/lara-zeus/zeus)
[![Total Downloads](https://img.shields.io/github/stars/lara-zeus/zeus?style=flat-square)](https://github.com/lara-zeus/zeus)
<a href="https://herd.laravel.com/new/lara-zeus/zeus?name=zeus"><img src="https://img.shields.io/badge/Install%20with%20Herd-f55247?logo=laravel&logoColor=white"></a>

</p>

# Lara Zeus
provide you with a collection of Laravel packages and filament plugins that help you build your site faster and focus on your business

# Open in Herd:
if you;re using [laravel herd](https://herd.laravel.com/), [start creating using the link](https://herd.laravel.com/new/lara-zeus/zeus?name=zeus):
https://herd.laravel.com/new/lara-zeus/zeus?name=zeus

## Intro
This project is a standalone app, a Starter Kit; it's pre-configured to run all Zeus packages and some extra perks.

- Layout and Widget manager using  [lara Zeus dynamic dashboard](https://larazeus.com/dynamic-dashboard)
- Posts and pages using  [lara Zeus Sky](https://larazeus.com/sky)
- FAQ and library (images, videos, and files) using  [lara Zeus Sky](https://larazeus.com/sky)
- Contact us form with departments using  [lara Zeus Wind](https://larazeus.com/wind)
- Forms builder using  [lara Zeus Bolt](https://larazeus.com/bolt)
- Login, registration, and profile using [Laravel Breeze](https://laravel.com/docs/master/starter-kits#laravel-breeze)
- Users and permissions management using [Filament Shield](https://github.com/bezhanSalleh/filament-shield#shieldsuper-admin)

## Installations
you can start with

```
composer create-project Lara-zeus/zeus example-app
```

## Creating the database
Next, you must update the values of the DB_* entries in .env so they match your DB. After that, run the migration.

```
php artisan migrate
```

## Create the first user
you can create the admin user using the command:

```
php artisan make:filament-user
```

## Configuration

### Layout
- create your first layout and set the slug in the 'AdminPanelProvider' file:
    ```php
    DynamicDashboardPlugin::make()
        ->defaultLayout('new-page')
    ```
 the default is: `home-page`.

- create your navigation and set the slug in the 'zeus.php' config file. the default is: `home-nav`

### Build assets
run

```bash
npm i && npm run build
```

## Demo Data
optionally, you can seed the database with default data.
```bash
php artisan db:seed
```

If you're using custom models, you must change the models called `$model` in all the Factories.

### For more details

* Github: https://github.com/lara-zeus
* Website: https://larazeus.com
* demo: https://demo.larazeus.com
