<?php

namespace Litecms\News\Repositories\Eloquent;

use Litecms\News\Interfaces\CommentRepositoryInterface;
use Litepie\Repository\Eloquent\BaseRepository;

class CommentRepository extends BaseRepository implements CommentRepositoryInterface
{


    public function boot()
    {
        $this->fieldSearchable = config('litecms.news.comment.model.search');

    }

    /**
     * Specify Model class name.
     *
     * @return string
     */
    public function model()
    {
        return config('litecms.news.comment.model.model');
    }
}
