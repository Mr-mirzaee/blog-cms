# CMS BackEnd

## 1. Set Database configuration in .env File

## 2. Project setup
```
composer install
```

## 3.Database setup
```
php artisan migrate:fresh
```

## 4.Seed Database
###### set Admin information in database/seeders/BaseSeeder.php
###### by default admin.mobile = 09031662231
###### by default admin.password = 09031662231
```
php artisan db:seed
```

### 5.link storage
```
php artisan storage:link
```

### 6.run BackEnd server
```
php artisan serve
```

### 7.Client Project setup by README.md in client Directory
```
cd client
```
