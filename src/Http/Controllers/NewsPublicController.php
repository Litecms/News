<?php

namespace Litecms\News\Http\Controllers;

use App\Http\Controllers\PublicController as BaseController;
use Litecms\News\Interfaces\NewsRepositoryInterface;
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
    public function __construct(NewsRepositoryInterface $news)
    {
        $this->repository = $news;
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
        ->scopeQuery(function($query){
            return $query->orderBy('id','DESC');
        })->paginate();


        return $this->response->title(trans('news::news.names'))
            ->view('news::public.news.index')
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


        return $this->response->title(trans('news::news.names'))
            ->view('news::public.news.index')
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

        return $this->response->title(trans('news::news.name'))
            ->view('news::public.news.show')
            ->data(compact('news'))
            ->output();
    }

    protected function categorydisplay($key)
    {
        
        $category_id = DB::table('news_categories')->select('id')->where('slug','=', $key)->get();
        foreach($category_id as $key)
        {
            $category_id = $key->id;
        }
        $news = $this->repository->scopeQuery(function($query) use ($category_id) {
            return $query->orderBy('id','DESC')
                         ->where('category_id', $category_id);
        })->paginate();

        return $this->response->title(trans('news::news.names'))
            ->view('news::public.news.index')
            ->data(compact('news'))
            ->output();
    }

    protected function tagdisplay($tag)
    {

        $news = $this->repository->scopeQuery(function($query) use ($tag) {
            return $query->orderBy('id','DESC')
                         ->where('tags', 'like', '%"'.$tag.'"%');
        })->paginate();

        return $this->response->title(trans('news::news.names'))
            ->view('news::public.news.index')
            ->data(compact('news'))
            ->output();
        
    }

}
