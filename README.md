<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>



## How run this project

Firt of all clone or download this project.




Go to `project` folder

`cd exenta/`

Done forget permission for

`chmod 777 storage`
`chmod 777 bootstrap/cache`

Run composer

`composer install`

Generate a KEY for `.env` file with artisan

`php artisan key:generate`

And start the server with
`php artisan serve`

Then install en run NPM

`npm install && npm run dev`

### Run migrations

`php artisan migrate`

### Run Seed in order to fill DB

`php artisan db:seed --class=DatabaseSeeder`


### Run tests

`php artisan test`

# User Test

You can create you own user to test the app, however you can use this user the has enoght information to test all features and it is included in the Seed

> Email: **admin@mail.com**

> Password: **12345678**


## Server Requirements

> PHP >= 5.4

> MCrypt PHP Extension

> MySQL 5.6+



