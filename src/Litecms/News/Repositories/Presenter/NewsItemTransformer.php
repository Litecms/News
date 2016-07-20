<?php

namespace Litecms\News\Repositories\Presenter;

use League\Fractal\TransformerAbstract;

class NewsItemTransformer extends TransformerAbstract
{
    public function transform(\Litecms\News\Models\News $news)
    {
        return [
            'id'           => $news->getRouteKey(),
            'title'        => $news->title,
            'description'  => $news->description,
            'image'        => $news->image,
            'images'       => $news->images,
            'published_on' => $news->published_on,
            'status'       => $news->status,
            'published'    => $news->published,
        ];
    }
}
