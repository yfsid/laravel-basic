<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

## About Laravel
1. Install Laravel v9.22.1
   1. default port 8000 ```php php artisan serve```
   2. using port 8001 ```php php artisan serve --port:8001```
   3. development using apache ```php php -S 127.0.0.1:8001 -t public```
2. Config
   1. set timezone, change file ``` config\app.php``` change from ``` 'timezone' => 'UTC',``` to ``` 'timezone' => env('APP_TIMEZONE', 'UTC'),```, add new key in ``` .env``` key ``` APP_TIMEZONE='Asia/Jakarta'```
3. Make Component
   1. ``` php artisan make:component nameComponent```

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
