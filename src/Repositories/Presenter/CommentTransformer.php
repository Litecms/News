<?php

namespace Litecms\News\Repositories\Presenter;

use League\Fractal\TransformerAbstract;
use Hashids;

class CommentTransformer extends TransformerAbstract
{
    public function transform(\Litecms\News\Models\Comment $comment)
    {
        return [
            'id'                => $comment->getRouteKey(),
            'comment'           => $comment->comment,
            'author'            => $comment->author,
            'email'             => $comment->email,
            'mobile'            => $comment->mobile,
            'slug'              => $comment->slug,
            'published'         => $comment->published,
            'user_id'           => $comment->user_id,
            'user_type'         => $comment->user_type,
            'news_id'           => $comment->news_id,
            'created_at'        => $comment->created_at,
            'updated_at'        => $comment->updated_at,
            'deleted_at'        => $comment->deleted_at,
            'url'              => [
                'public' => trans_url('news/'.$comment->getPublicKey()),
                'user'   => guard_url('news/comment/'.$comment->getRouteKey()),
            ], 
            'status'            => trans('app.'.$comment->status),
            'created_at'        => format_date($comment->created_at),
            'updated_at'        => format_date($comment->updated_at),
        ];
    }
}