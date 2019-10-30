<?php

namespace App\Providers;

use App\Observers\RosterObserver;
use App\Roster;
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
        Roster::observe(RosterObserver::class);
    }
}
