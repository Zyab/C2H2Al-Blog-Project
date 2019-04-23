<?php

namespace App\Providers;


use App\Repositories\Contracts\UserRepositoryInterface;
use App\Repositories\Eloquent\UserEloquentRepository;
use App\Services\Impl\UserService;
use App\Services\UserServiceInterface;
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
        $this->app->singleton(
            UserRepositoryInterface::class,
            UserEloquentRepository::class);

        $this->app->singleton(
            UserServiceInterface::class,
            UserService::class
        );
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
