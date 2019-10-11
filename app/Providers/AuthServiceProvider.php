<?php

namespace App\Providers;

use App\Models\Films;
use App\Policies\FilmsPolicy;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        // 'App\Model' => 'App\Policies\ModelPolicy',
        Films::class=>FilmsPolicy::class
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        //Gates portes d'accès
        Gate::define('insert-film',function ($user){
            return $user->isAdmin();
        });


        Gate::define('update-film',function ($user, $id){
            echo $user->id;
            $user_id=Films::find($id)->user_id;

            return $user->id==$user_id;
        });
        //
    }
}
