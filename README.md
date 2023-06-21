<p align="center">
<a href="https://larazeus.com"><img alt="lara zeus" src="https://larazeus.com/images/zeus-bannar.png" /></a>
</p>

# Laravel Zeus
provide you with a collection of Laravel packages, that helps you build your site faster and focus on your business

## Intro
this project is a standalone app. a Starter Kits, it's pre-configured to run all zeus packages and some extra perks.

- Layout and Widget manager using  [lara Zeus Rain](https://larazeus.com/rain)
- Posts and pages using  [lara Zeus Sky](https://larazeus.com/sky)
- FAQ and library (images, videos, and files) using  [lara Zeus Sky](https://larazeus.com/sky)
- Contact us form with departments using  [lara Zeus Wind](https://larazeus.com/wind)
- Forms builder using  [lara Zeus Bolt](https://larazeus.com/bolt)
- Login, registration, and profile using [Laravel Breeze](https://laravel.com/docs/master/starter-kits#laravel-breeze)

## Installations
you can start with
```
composer create-project lara-zeus/zeus
```

## Creating the database
Next, you must update the values of the DB_* entries in .env, so they match your db. After that run the migration.

```
php artisan migrate
```

## Create the first user:
you can create the admin user using the command:

```
php artisan make:filament-user
```

## Configuration:

### Layout
- create your first layout and set the slug in the 'zeus-rain' config file.
- create your navigation and set the slug in the 'zeus' config file.

### Build assets
run

```bash
npm i && npm run build
```

## Demo Data
optionally you can seed the database with default data.
```bash
php artisan db:seed
```

if you're using custom models you have to change the models calls `$model` in all the Factories.

## For more details

* github: https://github.com/lara-zeus
* website: https://larazeus.com
* demo: https://demo.larazeus.com
