<?php

namespace Litecms\News\Repositories\Eloquent;

use Litecms\News\Interfaces\NewsRepositoryInterface;
use Litepie\Repository\Eloquent\BaseRepository;

class NewsRepository extends BaseRepository implements NewsRepositoryInterface
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'title' => 'like',
    ];

    public function boot()
    {
        $this->pushCriteria(app('Litepie\Repository\Criteria\RequestCriteria'));
    }

    /**
     * Specify Model class name.
     *
     * @return string
     */
    public function model()
    {
        $this->fieldSearchable = config('package.news.news.search');
        return config('package.news.news.model');
    }

}
