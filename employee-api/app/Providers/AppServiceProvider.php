<?php

namespace App\Providers;

use App\Http\Repositories\Departments\DepartmentsRepository;
use App\Http\Repositories\Departments\Impl\DepartmentsRepositoryImp;
use App\Http\Repositories\User\Impl\UserRepositoryImpl;
use App\Http\Repositories\User\UserRepository;
use App\Service\Auth\AuthService;
use App\Service\Auth\Impl\AuthServiceImpl;
use App\Service\Departments\DepartmentsService;
use App\Service\Departments\Impl\DepartmentsServiceImpl;
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
        $this->app->bind(DepartmentsService::class, DepartmentsServiceImpl::class);

        //Repositories
        $this->app->bind(UserRepository::class, UserRepositoryImpl::class);
        $this->app->bind(DepartmentsRepository::class, DepartmentsRepositoryImp::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
