<?php

namespace Litecms\News\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Litepie\Database\Model;
use Litepie\Database\Traits\Slugger;
use Litepie\Filer\Traits\Filer;
use Litepie\Hashids\Traits\Hashids;
use Litepie\Repository\Traits\PresentableTrait;
use Litepie\Revision\Traits\Revision;
use Litepie\Trans\Traits\Trans;
use Litepie\User\Traits\UserModel;

class News extends Model
{
    use Filer, SoftDeletes, Hashids, Slugger, Trans, Revision, PresentableTrait, UserModel;

    /**
     * Configuartion for the model.
     *
     * @var array
     */
    protected $config = 'package.news.news';

    public function user()
    {

        return $this->belongsTo('App\User', 'user_id');
    }

    public function getDefaultImageAttribute()
    {

        if (empty($this->attributes['images'])) {
            return '';
        }

        $images = json_decode($this->attributes['images'], true);
        $image = end($images);

        return @$image['efolder'] . '/' . @$image['file'];
    }

}
