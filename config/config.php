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

    'image'    => [

        'sm' => [
            'width'     => '140',
            'height'    => '140',
            'action'    => 'fit',
            'watermark' => 'img/logo/default.png',
        ],
        
        'md' => [
            'width'     => '370',
            'height'    => '420',
            'action'    => 'fit',
            'watermark' => 'img/logo/default.png',
        ],

        'lg' => [
            'width'     => '780',
            'height'    => '497',
            'action'    => 'fit',
            'watermark' => 'img/logo/default.png',
        ],
        'xl' => [
            'width'     => '800',
            'height'    => '530',
            'action'    => 'fit',
            'watermark' => 'img/logo/default.png',
        ],


    ],


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
        'fillable'      => ['user_id', 'title', 'description', 'published_on', 'status', 'published','upload_folder'],

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
