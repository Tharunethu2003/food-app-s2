<?php

namespace App\Providers;

use Filament\Facades\Filament;
use Illuminate\Support\ServiceProvider;

class FilamentServiceProvider extends ServiceProvider
{
    public function boot()
    {
        Filament::serving(function () {
            Filament::auth(function () {
                // Only allow the user with email 'admin@example.com' to log in
                return auth()->user() && auth()->user()->email === 'admin@example.com';
            });
        });
    }
}
