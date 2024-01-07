<?php

namespace App\Providers;
use App\Repository\DBUsersRepository;
use Illuminate\Support\ServiceProvider;
use App\RepositoryInterfaces\UserRepositoryInterface;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->bind(UserRepositoryInterface::class, DBUsersRepository::class);
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
