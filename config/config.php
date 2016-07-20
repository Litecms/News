<?php

return [

    /**
     * Provider.
     */
    'provider' => 'dentist',

    /*
     * Package.
     */
    'package'  => 'news',

    /*
     * Modules.
     */
    'modules'  => ['news'],

    'news'     => [
        'model'         => 'Litecms\News\Models\News',
        'table'         => 'news',
        'presenter'     => \Litecms\News\Repositories\Presenter\NewsItemPresenter::class,
        'hidden'        => [],
        'visible'       => [],
        'guarded'       => ['*'],
        'slugs'         => ['slug' => 'title'],
        'dates'         => ['deleted_at'],
        'appends'       => [],
        'fillable'      => ['user_id', 'title', 'description', 'published_on', 'status', 'published'],

        'upload-folder' => '/uploads/news/news',
        'uploads'       => [
            'single'   => ['image'],
            'multiple' => ['images'],
        ],
        'casts'         => [
            'image'  => 'array',
            'images' => 'array',
        ],
        'revision'      => [],
        'perPage'       => '20',
        'search'        => [
            'title' => 'like',
            'status',
            'published',
            'published_on',
        ],
    ],
];
