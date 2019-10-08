<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Blade; 
class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        // creation de la directive hello

        Blade::directive('hello', function($name){


            return "<?php  echo 'Bienvenue '.{$name};  ?>";
        });


    }
}
