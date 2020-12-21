# GGG-HotelRAD
A hotel management application built with [Laravel](https://laravel.com/ "Laravel").

## Features
It includes all BREAD (Browse, Read, Edit, Add, Delete) actions and views for:

- Room rates
- Feedback subjects
- Room statuses

## Setup instructions

Make sure you have installed Docker before proceeding.

### 1. Clone the repository

`git clone https://github.com/ggornes/GGG-HotelRAD.git`

### 2. Edit the .env file

```
...
DB_CONNECTION=mysql
DB_HOST=db
DB_PORT=3306
DB_DATABASE=hotel_rad
DB_USERNAME=hotel_rad_user
DB_PASSWORD=Secret1
...
```

### 3. Build the `app` image
```
docker-compose build app
```

When the build is finished, you can run the environment in background mode with:
```
docker-compose up -d
```

Now run `composer install` to install the application dependencies:
```
docker-compose exec app composer install
```

The last thing to do before testing the application 
The next thing to do is to generate a unique application key with the `artisan` Laravel command-line tool. This key is used to encrypt user sessions and other sensitive data:
```
docker-compose exec app php artisan key:generate
```

And finally, seed the database:
```
docker-compose exec app php artisan migrate:fresh --seed
```

Now go to your browser and access your server’s domain name or IP address on port 8000:
```
http://server_domain_or_IP:8000
```

Routes:
```
http://localhost:8000/home
http://localhost:8000/rates
http://localhost:8000/roomStatuses
http://localhost:8000/feedbackSubjects
```
