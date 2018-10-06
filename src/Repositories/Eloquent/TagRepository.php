<?php

namespace Litecms\News\Repositories\Eloquent;

use Litecms\News\Interfaces\TagRepositoryInterface;
use Litepie\Repository\Eloquent\BaseRepository;

class TagRepository extends BaseRepository implements TagRepositoryInterface
{


    public function boot()
    {
        $this->fieldSearchable = config('litecms.news.tag.model.search');

    }

    /**
     * Specify Model class name.
     *
     * @return string
     */
    public function model()
    {
        return config('litecms.news.tag.model.model');
    }

     public function selectTags()
    {
        return $this->pluck('name','slug');
    }
}
