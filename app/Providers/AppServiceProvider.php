<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

Use Illuminate\Support\Facades\Blade;

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
        //

        Blade::directive('hello',function ($toto){
            return "<?php echo 'Bienvenue '.($toto);?>";
        });
    }
}
