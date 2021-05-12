Nginx, PHP7.4, MySQL8 with Docker
===

**build project**
```
docker-compose up --build -d
```
**open container**
```
docker exec -it voting-app-php bash
```

**open app in browser**
```
127.0.0.1:8080
```

**connect your database**
```
DB_CONNECTION=mysql
DB_HOST=voting-app-mysql
DB_PORT=3306
DB_DATABASE=voting-app
DB_USERNAME=admin
DB_PASSWORD=secret
```

**create new project**
```
composer create-project --prefer-dist laravel/laravel ./
```

**create model**
```
php artisan make:model Item -m
```

**run migrations**
```
php artisan migrate
```

**create controller**
```
php artisan make:controller Itemcontroller --resource
```

### install breeze
https://github.com/laravel/breeze

npm install @tailwindcss/line-clamp

### install liveware
https://laravel-livewire.com/docs/2.x/quickstart

### install debugbar
https://github.com/barryvdh/laravel-debugbar

### other installations
this one creates model, migration and controller
```
php artisan make:model Idea -a
```

refresh migration
```
php artisan migrate:fresh --seed
```

Eloquent-Sluggable
```bigquery
https://github.com/cviebrock/eloquent-sluggable
```
