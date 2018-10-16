<?php

namespace Litecms\News\Http\Controllers;

use App\Http\Controllers\PublicController as BaseController;
use Litecms\News\Interfaces\NewsRepositoryInterface;
use Litecms\News\Interfaces\CategoryRepositoryInterface;
use Illuminate\Support\Facades\DB;

class NewsPublicController extends BaseController
{
    // use NewsWorkflow;

    /**
     * Constructor.
     *
     * @param type \Litecms\News\Interfaces\NewsRepositoryInterface $news
     *
     * @return type
     */
    public function __construct(NewsRepositoryInterface $news, CategoryRepositoryInterface $category)
    {
        $this->repository = $news;
        $this->category = $category;
        parent::__construct();
    }

    /**
     * Show news's list.
     *
     * @param string $slug
     *
     * @return response
     */
    protected function index()
    {
        $news = $this->repository
        ->pushCriteria(app('Litepie\Repository\Criteria\RequestCriteria'))
        ->pushCriteria(\Litecms\News\Repositories\Criteria\NewsPublicCriteria::class)
        ->scopeQuery(function($query){
            return $query->orderBy('id','DESC');
        })->paginate();


        return $this->response->setMetaTitle(trans('news::news.names'))
            ->view('news::news.index')
            ->data(compact('news'))
            ->output();
    }

    /**
     * Show news's list based on a type.
     *
     * @param string $slug
     *
     * @return response
     */
    protected function list($type = null)
    {
        $news = $this->repository
        ->pushCriteria(app('Litepie\Repository\Criteria\RequestCriteria'))
        ->scopeQuery(function($query){
            return $query->orderBy('id','DESC');
        })->paginate();


        return $this->response->setMetaTitle(trans('news::news.names'))
            ->view('news::news.index')
            ->data(compact('news'))
            ->output();
    }

    /**
     * Show news.
     *
     * @param string $slug
     *
     * @return response
     */
    protected function show($slug)
    {
        $news = $this->repository->scopeQuery(function($query) use ($slug) {
            return $query->orderBy('id','DESC')
                         ->where('slug', $slug);
        })->first(['*']);

        return $this->response->setMetaTitle(trans('news::news.name'))
            ->view('news::news.show')
            ->data(compact('news'))
            ->output();
    }

    protected function categorydisplay($slug)
    {
        
        $category = $this->category->findBySlug($slug);
        
        $news = $this->repository->scopeQuery(function($query) use ($category) {
            return $query->orderBy('id','DESC')
                         ->where('category_id', $category['id']);
        })->paginate();

        return $this->response->setMetaTitle(trans('news::news.names'))
            ->view('news::news.index')
            ->data(compact('news'))
            ->output();
    }

    protected function tagdisplay($tag)
    {

        $news = $this->repository->scopeQuery(function($query) use ($tag) {
            return $query->orderBy('id','DESC')
                         ->where('tag', 'like', '%"'.$tag.'"%');
        })->paginate();

        return $this->response->setMetaTitle(trans('news::news.names'))
            ->view('news::news.index')
            ->data(compact('news'))
            ->output();
        
    }

}
