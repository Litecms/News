<?php

namespace Litecms\News\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Litepie\Database\Model;
use Litepie\Database\Traits\Slugger;
use Litepie\Database\Traits\DateFormatter;
use Litepie\Filer\Traits\Filer;
use Litepie\Hashids\Traits\Hashids;
use Litepie\Repository\Traits\PresentableTrait;
use Litepie\Trans\Traits\Translatable;
class Tag extends Model
{
    use Filer, SoftDeletes, Hashids, Slugger, Translatable, DateFormatter, PresentableTrait;


    /**
     * Configuartion for the model.
     *
     * @var array
     */
     protected $config = 'litecms.news.tag.model';

public function tags(){
        return $this->hasMany('Litecms\News\Models\Tag');
    }
}
