<?php

return [

    /**
     * Provider.
     */
    'provider'  => 'litecms',

    /*
     * Package.
     */
    'package'   => 'news',

    /*
     * Modules.
     */
    'modules'   => ['news', 
'category', 
'comment', 
'tag'],

    'news'       => [
        'model' => [
            'model'                 => \Litecms\News\Models\News::class,
            'table'                 => 'news',
            'presenter'             => \Litecms\News\Repositories\Presenter\NewsPresenter::class,
            'hidden'                => [],
            'visible'               => [],
            'guarded'               => ['*'],
            'slugs'                 => ['slug' => 'title'],
            'dates'                 => ['deleted_at', 'created_at', 'updated_at'],
            'appends'               => [],
            'fillable'              => ['id',  'category_id',  'title',  'description',  'images',  'tag',  'slug',  'published',  'status',  'user_type',  'user_id',  'upload_folder',  'deleted_at',  'created_at',  'updated_at'],
            'translatables'         => [],
            'upload_folder'         => 'news/news',
            'uploads'               => [
            
                    'images' => [
                        'count' => 10,
                        'type'  => 'image',
                    ],
                    'file' => [
                        'count' => 1,
                        'type'  => 'file',
                    ],
            
            ],

            'casts'                 => [
            
                'images'    => 'array',
                'tag'      => 'array',
            
            ],

            'revision'              => [],
            'perPage'               => '20',
            'search'        => [
                'title'  => 'like',
                'status',
                'tag' => 'like',
            ]
        ],

        'controller' => [
            'provider'  => 'Litecms',
            'package'   => 'News',
            'module'    => 'News',
        ],

    ],

    'category'       => [
        'model' => [
            'model'                 => \Litecms\News\Models\Category::class,
            'table'                 => 'news_categories',
            'presenter'             => \Litecms\News\Repositories\Presenter\CategoryPresenter::class,
            'hidden'                => [],
            'visible'               => [],
            'guarded'               => ['*'],
            'slugs'                 => ['slug' => 'name'],
            'dates'                 => ['deleted_at', 'createdat', 'updated_at'],
            'appends'               => [],
            'fillable'              => ['id',  'name',  'slug',  'status',  'user_type',  'user_id',  'upload_folder',  'created_at',  'updated_at',  'deleted_at'],
            'translatables'         => [],
            'upload_folder'         => 'news/category',
            'uploads'               => [
            
                    'images' => [
                        'count' => 10,
                        'type'  => 'image',
                    ],
                    'file' => [
                        'count' => 1,
                        'type'  => 'file',
                    ],
            
            ],

            'casts'                 => [
            
                'images'    => 'array',
                'file'      => 'array',
            
            ],

            'revision'              => [],
            'perPage'               => '20',
            'search'        => [
                'name'  => 'like',
                'status',
            ]
        ],

        'controller' => [
            'provider'  => 'Litecms',
            'package'   => 'News',
            'module'    => 'Category',
        ],

    ],

    'comment'       => [
        'model' => [
            'model'                 => \Litecms\News\Models\Comment::class,
            'table'                 => 'news_comments',
            'presenter'             => \Litecms\News\Repositories\Presenter\CommentPresenter::class,
            'hidden'                => [],
            'visible'               => [],
            'guarded'               => ['*'],
            'slugs'                 => ['slug' => 'author'],
            'dates'                 => ['deleted_at', 'createdat', 'updated_at'],
            'appends'               => [],
            'fillable'              => ['id',  'comment',  'author',  'email',  'mobile',  'slug',  'published',  'user_id',  'user_type',  'news_id',  'created_at',  'updated_at',  'deleted_at'],
            'translatables'         => [],
            'upload_folder'         => 'news/comment',
            'uploads'               => [
            /*
                    'images' => [
                        'count' => 10,
                        'type'  => 'image',
                    ],
                    'file' => [
                        'count' => 1,
                        'type'  => 'file',
                    ],
            */
            ],

            'casts'                 => [
            /*
                'images'    => 'array',
                'file'      => 'array',
            */
            ],

            'revision'              => [],
            'perPage'               => '20',
            'search'        => [
                'name'  => 'like',
                'status',
            ]
        ],

        'controller' => [
            'provider'  => 'Litecms',
            'package'   => 'News',
            'module'    => 'Comment',
        ],

    ],

    'tag'       => [
        'model' => [
            'model'                 => \Litecms\News\Models\Tag::class,
            'table'                 => 'news_tags',
            'presenter'             => \Litecms\News\Repositories\Presenter\TagPresenter::class,
            'hidden'                => [],
            'visible'               => [],
            'guarded'               => ['*'],
            'slugs'                 => ['slug' => 'name'],
            'dates'                 => ['deleted_at', 'createdat', 'updated_at'],
            'appends'               => [],
            'fillable'              => ['id',  'name',  'frequency',  'slug',  'published',  'created_at',  'updated_at',  'deleted_at'],
            'translatables'         => [],
            'upload_folder'         => 'news/tag',
            'uploads'               => [
            /*
                    'images' => [
                        'count' => 10,
                        'type'  => 'image',
                    ],
                    'file' => [
                        'count' => 1,
                        'type'  => 'file',
                    ],
            */
            ],

            'casts'                 => [
            /*
                'images'    => 'array',
                'file'      => 'array',
            */
            ],

            'revision'              => [],
            'perPage'               => '20',
            'search'        => [
                'name'  => 'like',
                'status',
            ]
        ],

        'controller' => [
            'provider'  => 'Litecms',
            'package'   => 'News',
            'module'    => 'Tag',
        ],

    ],
];
