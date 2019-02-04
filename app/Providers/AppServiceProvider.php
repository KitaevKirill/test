<?php

namespace App\Providers;

use App\Repositories\DBDubleUserRepository;
use App\Repositories\DBUserRepository;
use App\Repositories\UserRepository;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(
            UserRepository::class,
            DBDubleUserRepository::class,
            DBUserRepository::class
            );
    }
}
