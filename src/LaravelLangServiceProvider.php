<?php
namespace Alerrandrorm\LaravelLang;
use Illuminate\Support\ServiceProvider;
class LaravelLangServiceProvider extends ServiceProvider
{
    /**
    * Publishes translation files.
    *
    * @return  void
    */
    public function register()
    {
        $this->publishes([
            __DIR__ . '/pt_BR.json' => resource_path('lang/pt_BR.json'),
            __DIR__ . '/pt_BR' => resource_path('lang/pt_BR'),
        ], 'laravel-lang');
    }
}
