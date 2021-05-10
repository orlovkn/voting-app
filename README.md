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
DB_HOST=lar-todo-app-mysql
DB_PORT=3306
DB_DATABASE=lar-todo-app
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

