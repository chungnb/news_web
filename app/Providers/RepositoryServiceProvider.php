<?php

namespace App\Providers;

use App\Repositories\BaseRepository;
use App\Repositories\RepositoryInterface;
use App\Repositories\Video\VideoRepositoryInterface;
use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->bind(BaseRepository::class, RepositoryInterface::class);
        $this->app->bind(VideoRepositoryInterface::class, \App\Repositories\Video\VideoRepository::class);
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
