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
        $this->loadViewsFrom(__DIR__ . '/../../../../resources/views', 'news');

        // Load translation
        $this->loadTranslationsFrom(__DIR__ . '/../../../../resources/lang', 'news');

        // Call pblish redources function
        $this->publishResources();

        include __DIR__ . '/../Http/routes.php';
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        // Bind facade
        $this->app->bind('news', function ($app) {
            return $this->app->make('Litecms\News\News');
        });

        // Bind News to repository
        $this->app->bind(
            \Litecms\News\Interfaces\NewsRepositoryInterface::class,
            \Litecms\News\Repositories\Eloquent\NewsRepository::class
        );

        $this->app->register(\Litecms\News\Providers\AuthServiceProvider::class);
        $this->app->register(\Litecms\News\Providers\EventServiceProvider::class);
        $this->app->register(\Litecms\News\Providers\RouteServiceProvider::class);
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return ['news'];
    }

    /**
     * Publish resources.
     *
     * @return void
     */
    private function publishResources()
    {
        // Publish configuration file
        $this->publishes([__DIR__ . '/../../../../config/config.php' => config_path('package/news.php')], 'config');

        // Publish admin view
        $this->publishes([__DIR__ . '/../../../../resources/views' => base_path('resources/views/vendor/news')], 'view');

        // Publish language files
        $this->publishes([__DIR__ . '/../../../../resources/lang' => base_path('resources/lang/vendor/news')], 'lang');

        // Publish migrations
        $this->publishes([__DIR__ . '/../../../../database/migrations/' => base_path('database/migrations')], 'migrations');

        // Publish seeds
        $this->publishes([__DIR__ . '/../../../../database/seeds/' => base_path('database/seeds')], 'seeds');

         // Publish public
        $this->publishes([__DIR__ . '/../../../../public/' => public_path('/')], 'uploads');
    }
}
