<?php

namespace App\Providers;

use App\Models\User;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\ServiceProvider;

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
        Paginator::useBootstrap();

        Gate::define('admin', function(User $user) {
            return $user->role_id === 3;
        });

        Gate::define('consultant', function(User $user) {
            return $user->role_id === 2 || $user->role_id === 3;
        });

        Gate::define('user', function(User $user) {
            return $user->role_id === 1 || $user->role_id === 3;
        });
    }
}
