<?php

namespace App\Providers;

// use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use App\User;

class AuthServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->registerPolicies();

        Gate::define('admin',function($user){
            return $user->role === User::ROLE_ADMIN;
        });
        Gate::define('manager',function($user){
            return $user->role === User::ROLE_MANAGER;
        });
        Gate::define('user',function($user){
            return $user->role === User::ROLE_USER;
        });
    }
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        //
    ];

    /**
     * Register any authentication / authorization services.
     */

}