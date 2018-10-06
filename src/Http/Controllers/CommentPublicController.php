<?php

namespace Litecms\News\Http\Controllers;

use App\Http\Controllers\PublicController as BaseController;
use Litecms\News\Interfaces\CommentRepositoryInterface;

class CommentPublicController extends BaseController
{
    // use CommentWorkflow;

    /**
     * Constructor.
     *
     * @param type \Litecms\Comment\Interfaces\CommentRepositoryInterface $comment
     *
     * @return type
     */
    public function __construct(CommentRepositoryInterface $comment)
    {
        $this->repository = $comment;
        parent::__construct();
    }

    /**
     * Show comment's list.
     *
     * @param string $slug
     *
     * @return response
     */
    protected function index()
    {
        $comments = $this->repository
        ->pushCriteria(app('Litepie\Repository\Criteria\RequestCriteria'))
        ->scopeQuery(function($query){
            return $query->orderBy('id','DESC');
        })->paginate();


        return $this->response->title(trans('news::comment.names'))
            ->view('news::public.comment.index')
            ->data(compact('comments'))
            ->output();
    }

    /**
     * Show comment's list based on a type.
     *
     * @param string $slug
     *
     * @return response
     */
    protected function list($type = null)
    {
        $comments = $this->repository
        ->pushCriteria(app('Litepie\Repository\Criteria\RequestCriteria'))
        ->scopeQuery(function($query){
            return $query->orderBy('id','DESC');
        })->paginate();


        return $this->response->title(trans('news::comment.names'))
            ->view('news::public.comment.index')
            ->data(compact('comments'))
            ->output();
    }

    /**
     * Show comment.
     *
     * @param string $slug
     *
     * @return response
     */
    protected function show($slug)
    {
        $comment = $this->repository->scopeQuery(function($query) use ($slug) {
            return $query->orderBy('id','DESC')
                         ->where('slug', $slug);
        })->first(['*']);

        return $this->response->title($$comment->name . trans('news::comment.name'))
            ->view('news::public.comment.show')
            ->data(compact('comment'))
            ->output();
    }

}
