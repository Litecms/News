<?php

namespace Litecms\News\Providers;

use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;
use Illuminate\Routing\Router;
use Litecms\News\Models\News;
use Request;
use Route;

class RouteServiceProvider extends ServiceProvider
{
    /**
     * This namespace is applied to the controller routes in your routes file.
     *
     * In addition, it is set as the URL generator's root namespace.
     *
     * @var string
     */
    protected $namespace = 'Litecms\News\Http\Controllers';

    /**
     * Define your route model bindings, pattern filters, etc.
     *
     * @param   \Illuminate\Routing\Router  $router
     * @return void
     */
    public function boot()
    {
        parent::boot();

        if (Request::is('*/news/news/*')) {
            Route::bind('news', function ($news) {
                $newsrepo = $this->app->make('Litecms\News\Interfaces\NewsRepositoryInterface');
                return $newsrepo->findorNew($news);
            });
        }

        if (Request::is('*/news/category/*')) {
            Route::bind('category', function ($category) {
                $categoryrepo = $this->app->make('Litecms\News\Interfaces\CategoryRepositoryInterface');
                return $categoryrepo->findorNew($category);
            });
        }

        if (Request::is('*/news/comment/*')) {
            Route::bind('comment', function ($comment) {
                $commentrepo = $this->app->make('Litecms\News\Interfaces\CommentRepositoryInterface');
                return $commentrepo->findorNew($comment);
            });
        }

        if (Request::is('*/news/tag/*')) {
            Route::bind('tag', function ($tag) {
                $tagrepo = $this->app->make('Litecms\News\Interfaces\TagRepositoryInterface');
                return $tagrepo->findorNew($tag);
            });
        }

    }

    /**
     * Define the routes for the package.
     *
     * @return void
     */
    public function map()
    {
        $this->mapWebRoutes();
    }

    /**
     * Define the "web" routes for the package.
     *
     * These routes all receive session state, CSRF protection, etc.
     *
     * @return void
     */
    protected function mapWebRoutes()
    {
        if (request()->segment(1) == 'api' || request()->segment(2) == 'api') {
            return;
        }
        
        Route::group([
            'middleware' => 'web',
            'namespace'  => $this->namespace,
            'prefix'     => trans_setlocale(),
        ], function ($router) {
            require (__DIR__ . '/../../routes/web.php');
        });
    }

}
