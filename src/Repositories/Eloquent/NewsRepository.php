<?php

namespace Litecms\News\Repositories\Eloquent;

use Litecms\News\Interfaces\NewsRepositoryInterface;
use Litepie\Repository\Eloquent\BaseRepository;

class NewsRepository extends BaseRepository implements NewsRepositoryInterface
{


    public function boot()
    {
        $this->fieldSearchable = config('litecms.news.news.model.search');

    }

    /**
     * Specify Model class name.
     *
     * @return string
     */
    public function model()
    {
        return config('litecms.news.news.model.model');
    }
}
