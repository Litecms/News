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
     * $category object.
     */
    protected $category;
    /**
     * $comment object.
     */
    protected $comment;
    /**
     * $tag object.
     */
    protected $tag;

    /**
     * Constructor.
     */
    public function __construct(\Litecms\News\Interfaces\NewsRepositoryInterface $news,
        \Litecms\News\Interfaces\CategoryRepositoryInterface $category,
        \Litecms\News\Interfaces\CommentRepositoryInterface $comment,
        \Litecms\News\Interfaces\TagRepositoryInterface $tag)
    {
        $this->news = $news;
        $this->category = $category;
        $this->comment = $comment;
        $this->tag = $tag;
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
        return  0;
    }

    /**
     * Make gadget View
     *
     * @param string $view
     *
     * @param int $count
     *
     * @return View
     */
    // public function gadget($view = 'admin.news.gadget', $count = 10)
    // {

    //     if (User::hasRole('user')) {
    //         $this->news->pushCriteria(new \Litepie\Litecms\Repositories\Criteria\NewsUserCriteria());
    //     }

    //     $news = $this->news->scopeQuery(function ($query) use ($count) {
    //         return $query->orderBy('id', 'DESC')->take($count);
    //     })->all();

    //     return view('news::' . $view, compact('news'))->render();
    // }
    /**
     * Make gadget View
     *
     * @param string $view
     *
     * @param int $count
     *
     * @return View
     */
    public function gadget($view = 'admin.category.gadget', $count = 10)
    {

        if (User::hasRole('user')) {
            $this->category->pushCriteria(new \Litepie\Litecms\Repositories\Criteria\CategoryUserCriteria());
        }

        $category = $this->category->scopeQuery(function ($query) use ($count) {
            return $query->orderBy('id', 'DESC')->take($count);
        })->all();

        return view('news::' . $view, compact('category'))->render();
    }
    /**
     * Make gadget View
     *
     * @param string $view
     *
     * @param int $count
     *
     * @return View
     */
    // public function gadget($view = 'admin.comment.gadget', $count = 10)
    // {

    //     if (User::hasRole('user')) {
    //         $this->comment->pushCriteria(new \Litepie\Litecms\Repositories\Criteria\CommentUserCriteria());
    //     }

    //     $comment = $this->comment->scopeQuery(function ($query) use ($count) {
    //         return $query->orderBy('id', 'DESC')->take($count);
    //     })->all();

    //     return view('news::' . $view, compact('comment'))->render();
    // }
    /**
     * Make gadget View
     *
     * @param string $view
     *
     * @param int $count
     *
     * @return View
     */
    // public function gadget($view = 'admin.tag.gadget', $count = 10)
    // {

    //     if (User::hasRole('user')) {
    //         $this->tag->pushCriteria(new \Litepie\Litecms\Repositories\Criteria\TagUserCriteria());
    //     }

    //     $tag = $this->tag->scopeQuery(function ($query) use ($count) {
    //         return $query->orderBy('id', 'DESC')->take($count);
    //     })->all();

    //     return view('news::' . $view, compact('tag'))->render();
    // }

    public function selectadminCategories()
   {
       return $this->category->selectadminCategories();
   }

   public function selectCategories()
   {
      return $this->category->selectCategories();
       
   }

   public function selectTags()
   {
       return $this->tag->selectTags();
   }
}
