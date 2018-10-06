<?php

namespace Litecms\News\Repositories\Eloquent;

use Litecms\News\Interfaces\CategoryRepositoryInterface;
use Litepie\Repository\Eloquent\BaseRepository;

class CategoryRepository extends BaseRepository implements CategoryRepositoryInterface
{


    public function boot()
    {
        $this->fieldSearchable = config('litecms.news.category.model.search');

    }

    /**
     * Specify Model class name.
     *
     * @return string
     */
    public function model()
    {
        return config('litecms.news.category.model.model');
    }

    public function selectCategories()
    {
        return $this->pluck('name','slug');
    }
    public function selectadminCategories()
    {
        return $this->pluck('name','id');
    }
}
