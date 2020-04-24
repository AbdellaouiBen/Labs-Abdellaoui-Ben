<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Auth;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        // 'App\Model' => 'App\Policies\ModelPolicy',
        'App\User' => 'App\Policies\UserPolicy',
        'App\Article' => 'App\Policies\ArticlePolicy',
        'App\Commentaire' => 'App\Policies\CommentairePolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();
        Gate::define('isAdmin',function($user){
            if (Auth::check()) {
                if (Auth::user()->role_id==1 ) {
                    return  true;
                }
            } 
            
            
        });
        Gate::define('isAdminOrWebmaster',function($user){
            if ($user) {
                if (Auth::user()->role_id==1 || Auth::user()->role_id==3) {
                    return  true;
                }
            } 
        });
        Gate::define('isAdminOrWebmasterOrRedacteur',function($user){
            if ($user) {
                if (Auth::user()->role_id==1 || Auth::user()->role_id==3|| Auth::user()->role_id==5) {
                    return  true;
                }
            } 
        });

        //
    }
}
