<?php

namespace Litecms\News;

use User;

class News
{
    /**
     * $news object.
     */
    protected $news;

    /**
     * Constructor.
     */
    public function __construct(\Litecms\News\Interfaces\NewsRepositoryInterface $news)
    {
        $this->news = $news;
    }

    /**
     * Returns count of news.
     *
     * @param array $filter
     *
     * @return int
     */
    public function count()
    {

        if (User::hasRole('user')) {
            $this->news->pushCriteria(new \Litecms\News\Repositories\Criteria\NewsUserCriteria());
        }

        return $this->news
            ->scopeQuery(function ($query) {
                return $query;
            })->count();
    }

    /**
     * latest news.
     * @param int $count
     * @param string $view
     *
     * @return string
     */
    public function latest($count = 3, $view = 'public.news.latest')
    {

        $news = $this->news

            ->pushCriteria(new \Litecms\News\Repositories\Criteria\NewsPublicCriteria())
            ->scopeQuery(function ($query) use ($count) {
                return $query->orderBy('id', 'DESC')->take($count);
            })->all();

        return view('news::' . $view, compact('news'))->render();
    }

    /**
     * Display  gadget
     *
     * @param string $view
     *
     * @param int $count
     *
     * @return int
     */
    public function gadget($view = 'admin.news.gadget', $count = 10)
    {

        if (User::hasRole('user')) {
            $this->news->pushCriteria(new \Litecms\News\Repositories\Criteria\NewsUserCriteria());
        }

        $news = $this->news->scopeQuery(function ($query) use ($count) {
            return $query->orderBy('id', 'DESC')->take($count);
        })->all();

        return view('news::' . $view, compact('news'))->render();
    }

}
