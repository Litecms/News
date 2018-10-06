<?php

namespace Litecms\News\Providers;

use Illuminate\Support\ServiceProvider;

class NewsServiceProvider extends ServiceProvider
{
    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;

    /**
     * Bootstrap the application events.
     *
     * @return void
     */
    public function boot()
    {
        // Load view
        $this->loadViewsFrom(__DIR__ . '/../../resources/views', 'news');

        // Load translation
        $this->loadTranslationsFrom(__DIR__ . '/../../resources/lang', 'news');

        // Load migrations
        $this->loadMigrationsFrom(__DIR__ . '/../../database/migrations');

        // Call pblish redources function
        $this->publishResources();

    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(__DIR__ . '/../../config/config.php', 'litecms.news');

        // Bind facade
        $this->app->bind('litecms.news', function ($app) {
            return $this->app->make('Litecms\News\News');
        });

        // Bind News to repository
        $this->app->bind(
            'Litecms\News\Interfaces\NewsRepositoryInterface',
            \Litecms\News\Repositories\Eloquent\NewsRepository::class
        );
        // Bind Category to repository
        $this->app->bind(
            'Litecms\News\Interfaces\CategoryRepositoryInterface',
            \Litecms\News\Repositories\Eloquent\CategoryRepository::class
        );
        // Bind Comment to repository
        $this->app->bind(
            'Litecms\News\Interfaces\CommentRepositoryInterface',
            \Litecms\News\Repositories\Eloquent\CommentRepository::class
        );
        // Bind Tag to repository
        $this->app->bind(
            'Litecms\News\Interfaces\TagRepositoryInterface',
            \Litecms\News\Repositories\Eloquent\TagRepository::class
        );

        $this->app->register(\Litecms\News\Providers\AuthServiceProvider::class);

        $this->app->register(\Litecms\News\Providers\RouteServiceProvider::class);

    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return ['litecms.news'];
    }

    /**
     * Publish resources.
     *
     * @return void
     */
    private function publishResources()
    {
        // Publish configuration file
        $this->publishes([__DIR__ . '/../../config/config.php' => config_path('litecms/news.php')], 'config');

        // Publish admin view
        $this->publishes([__DIR__ . '/../../resources/views' => base_path('resources/views/vendor/news')], 'view');

        // Publish language files
        $this->publishes([__DIR__ . '/../../resources/lang' => base_path('resources/lang/vendor/news')], 'lang');

        // Publish storage files
        $this->publishes([__DIR__ . '/../../storage' => base_path('storage')], 'storage');

        // Publish public files and assets.
        $this->publishes([__DIR__ . '/public/' => public_path('/')], 'public');
    }
}
