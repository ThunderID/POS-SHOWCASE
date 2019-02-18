## I. Installation
```
// 1. download or clone
git clone https://github.com/ThunderID/POS-SHOWCASE.git
cd thunderlab-profile 

// 2. composer install
composer install
composer dump-autoload -o

// 3. npm's
npm install
npm run production
```

## II. Configs
1. configure .env file (template on .env.example)
3. generate key encryotion `php artisan key:generate`

## III. run
Run
```
//with hot reload
php artisan serve
npm run watch

// normal
php artisan serve
```