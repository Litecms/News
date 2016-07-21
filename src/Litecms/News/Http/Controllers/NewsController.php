<?php

namespace Litecms\News\Http\Controllers;

use App\Http\Controllers\Controller as BaseController;
use Litecms\News\Interfaces\NewsRepositoryInterface;

class NewsController extends BaseController
{

    /**
     * Constructor.
     *
     * @param type \Litecms\News\Interfaces\NewsRepositoryInterface $news
     *
     * @return type
     */
    public function __construct(NewsRepositoryInterface $news)
    {
        $this->middleware('web');
        $this->setupTheme(config('theme.themes.public.theme'), config('theme.themes.public.layout'));
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
            ->pushCriteria(new \Litecms\News\Repositories\Criteria\NewsPublicCriteria())
            ->scopeQuery(function ($query) {
                return $query->orderBy('id', 'DESC');
            })->all();

        return $this->theme->of('news::public.news.index', compact('news'))->render();
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

        $news = $this->repository->scopeQuery(function ($query) use ($slug) {
            return $query->orderBy('id', 'DESC')
                ->where('slug', $slug);
        })->first(['*']);

        return $this->theme->of('news::public.news.show', compact('news'))->render();
    }

    /**
     * take news
     * @return type
     */

    protected function news()
    {
        $news = $this->repository
            ->pushCriteria(new \Litecms\News\Repositories\Criteria\NewsPublicCriteria())
            ->scopeQuery(function ($query) {
                return $query->orderBy('id', 'DESC')

                    ->take(4);
            })->all();

        return $this->theme->of('news::public.news.news', compact('news'))->render();
    }

}
