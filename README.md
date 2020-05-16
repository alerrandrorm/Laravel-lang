# Laravel-lang
Repository translate Português Brazil (pt-BR), [Laravel 5/6/7](https://laravel.com).

## Install Composer
1. Install package
  ```shell
  $ composer require alerrandrorm/laravel-lang
  ```
2. Publish the package
  ```shell
  $ php artisan vendor:publish --tag=laravel-lang
  ```
3. Dump composer Laravel
  ```shell
  $ composer dump-autoload
  ```
4. Config translate framework
  ```
  Open file config/app.php
  Search and change 'locale' => 'pt_BR',
  ```
## Version Laravel Supported
* 5.8
* 6.x
* 7.x

## Projects based on this package and Credits
* [Laravel-Lang by caouecs](https://github.com/caouecs/Laravel-lang)
* [laravel-pt-BR-localization by lucascudo](https://github.com/lucascudo/laravel-pt-BR-localization)
