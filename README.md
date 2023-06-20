<p align="center">
<a href="https://larazeus.com"><img alt="lara zeus" src="https://larazeus.com/images/zeus-bannar.png" /></a>
</p>

# Laravel Zeus
provide you with a collection of Laravel packages, that helps you build your site faster and focus on your business

## Intro
this project is a standalone app. it's pre configured to run all zeus packages and some extra perks.

## Installations
you can start with
```
composer create-project lara-zeus/zeus
```

## Creating the database
Next, you must update the values of the DB_* entries in .env so they match your db. After that run the migration.

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

## Demo Data
optionally you can seed the database with default data.
if you're using custom models you have to change the models calls `$model` in all the Factories.

## For more details

* website: https://larazeus.com/
* demo: https://demo.larazeus.com/
