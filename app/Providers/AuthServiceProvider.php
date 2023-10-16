<?php

namespace App\Providers;
use Illuminate\Support\Facades\Gate;
use App\Models\User;
use App\Policies\TrackPolicy;

// use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        //
        Track::class => TrackPolicy::class,
    ];

    /**
     * Register any authentication / authorization services.
     */
    public function boot(): void
    {
        //
        Gate::define('is-admin', function(User $user){
            return $user->role == "admin";
        });

        Gate::define('is-manager', function(User $user){
            return $user->role == "manager";
        });

        Gate::define('is-student', function(User $user){
            return $user->role == "student";
        });

        Gate::define('is-instructor', function(User $user){
            return $user->role == "instructor";
        });
    }
}
