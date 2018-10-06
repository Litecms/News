<?php

namespace Litecms\News\Repositories\Presenter;

use League\Fractal\TransformerAbstract;
use Hashids;

class NewsTransformer extends TransformerAbstract
{
    public function transform(\Litecms\News\Models\News $news)
    {
        return [
            'id'                => $news->getRouteKey(),
            'category_id'       => $news->category_id,
            'title'             => $news->title,
            'description'       => $news->description,
            'images'            => $news->images,
            'tag'              => $news->tag,
            'slug'              => $news->slug,
            'published'         => $news->published,
            'status'            => $news->status,
            'user_type'         => $news->user_type,
            'user_id'           => $news->user_id,
            'upload_folder'     => $news->upload_folder,
            'deleted_at'        => $news->deleted_at,
            'created_at'        => $news->created_at,
            'updated_at'        => $news->updated_at,
            'url'              => [
                'public' => trans_url('news/'.$news->getPublicKey()),
                'user'   => guard_url('news/news/'.$news->getRouteKey()),
            ], 
            'status'            => trans('app.'.$news->status),
            'created_at'        => format_date($news->created_at),
            'updated_at'        => format_date($news->updated_at),
        ];
    }
}