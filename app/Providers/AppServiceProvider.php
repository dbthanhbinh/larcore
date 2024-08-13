<?php

namespace App\Providers;

use App\Repositories\ArticleRepository;
use App\Repositories\IArticleRepository;
use App\Repositories\ISessionRepository;
use App\Repositories\SessionRepository;
use App\Services\ArticleService;
use App\Services\SessionService;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(IArticleRepository::class, ArticleRepository::class);
        $this->app->bind(ArticleService::class, function ($app) {
            return new ArticleService($app->make(IArticleRepository::class));
        });

        $this->app->bind(ISessionRepository::class, SessionRepository::class);
        $this->app->bind(SessionService::class, function ($app) {
            return new SessionService($app->make(ISessionRepository::class));
        });
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
