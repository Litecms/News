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
class News extends Model
{
    use Filer, SoftDeletes, Hashids, Slugger, Translatable, DateFormatter,  PresentableTrait;


    /**
     * Configuartion for the model.
     *
     * @var array
     */
     protected $config = 'litecms.news.news.model';


    /**
     * The category that belong to the news.
     */
    public function category(){
        return $this->belongsTo('Litecms\News\Models\Category');
    }


    /**
     * The comments that belong to the news.
     */
    public function comments(){
        return $this->hasMany('Litecms\News\Models\Comment');
    }

    public function setTagAttribute($tag)
    {
        if (is_array($tag)) {
            return $this->attributes['tag'] = $tag;
        }

        return $this->attributes['tag'] = json_encode(explode(',', $tag));
    }

    /**
     * The tags that belong to the news.
     */
    public function tags(){
        return $this->hasMany('Litecms\News\Models\Tag');
    }

    public function user(){
        return $this->belongsTo('App\User', 'user_id');
    }
}
