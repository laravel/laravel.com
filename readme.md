# laravel.com

The source code for [laravel.com](https://laravel.com/)

Design & Implementation provided by [@FocusLabLLC](https://twitter.com/FocusLabLLC)

### Setup locally

```bash
cd laravel.com

git clone git@github.com:laravel/laravel.com-next.git .

composer install

cp .env.example .env

php artisan key:generate

git clone git@github.com:laravel/docs.git resources/docs/5.8
```