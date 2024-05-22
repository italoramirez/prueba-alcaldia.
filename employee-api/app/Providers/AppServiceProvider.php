<?php

namespace App\Providers;

use App\Http\Repositories\User\Impl\UserRepositoryImpl;
use App\Http\Repositories\User\UserRepository;
use App\Service\Auth\AuthService;
use App\Service\Auth\Impl\AuthServiceImpl;
use App\Service\User\Impl\UserServiceImpl;
use App\Service\User\UserService;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //Services
        $this->app->bind(AuthService::class, AuthServiceImpl::class);
        $this->app->bind(UserService::class, UserServiceImpl::class);

        //Repositories
        $this->app->bind(UserRepository::class, UserRepositoryImpl::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
