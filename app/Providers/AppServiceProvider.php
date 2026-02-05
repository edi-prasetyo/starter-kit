<?php

namespace App\Providers;

use App\Models\EmailSetting;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Gate;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // Gate::before(function ($user, $ability) {
        //     if ($user->role?->name === 'superadmin') {
        //         return true;
        //     }

        //     return $user->hasPermission($ability) ?: null;
        // });

        Gate::before(function ($user, $ability) {
            return $user->hasPermission($ability) ?: null;
        });
    }
}
