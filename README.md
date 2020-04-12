# Laravel Multi Auth
Laravel 6.0 Multi-auth

## Usage

## Installation

Install the dependencies

```sh
composer install
```

Copy ```sh .env.example ``` file to ```sh .env ``` on the root folder. You can type ```sh copy .env.example .env ``` if using command prompt Windows or ```sh cp .env.example .env ``` if using terminal, Ubuntu

After setting up DB to run migration👇

## Run Migrations
```sh 
$ php artisan migrate
```

### Add virtual host if using Apache
Serving Project
```sh 
php artisan serve 
```

### If you get an error about an encryption key
```sh 
php artisan key:generate
```

### Install JS Dependencies
```sh 
npm install && npm run dev
```



## More Info

### Author

Abdulfatai Suleman
[Website:](https://iamnotstatic.github.io/)

### Version

1.0.0

### License
MIT License
