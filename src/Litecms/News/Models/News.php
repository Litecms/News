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

class News extends Model
{
    use Filer, SoftDeletes, Hashids, Slugger, Trans, Revision, PresentableTrait;

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

    /**
     * date format
     * @param type $val
     * @return type
     */

    public function getPublishedOnAttribute($val)
    {

        if ($val == '0000-00-00' || empty($val)) {
            return '';
        }

        return $this->formatDate($val);
    }

    public function setPublishedOnAttribute($val)
    {

        if ($val == '') {
            return '';
        }

        return $this->attributes['published_on'] = date('Y-m-d', strtotime($val));
    }

    /**
     * format date.
     *
     * @param string $folder
     *
     * @return string
     */
    public function formatDate($date, $format = 'd M, Y')
    {

        return date($format, strtotime($date));
    }

    /**
     * format date time.
     *
     * @param string $folder
     *
     * @return string
     */
    public function formatDatetime($date, $format = 'd M, Y h:i A')
    {
        return date($format, strtotime($date));
    }

}
