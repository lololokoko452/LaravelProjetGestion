<?php

namespace App\Providers;

// use Illuminate\Support\Facades\Gate;
use App\Models\User;
use Illuminate\Auth\Access\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     */
    public function boot(): void
    {
        $this->registerPolicies();

        Gate::before(function (User $user){
            return $user->hasRole('superadmin');
        });

        Gate::define("admin", function (User $user){
            return $user->hasRole("admin");
        });

        Gate::define("manager", function(User $user){
            return $user->hasRole("manager");
        });

        Gate::define("employe", function(User $user){
            return $user->hasRole("employe");
        });
    }
}
