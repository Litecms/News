<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Language files for news in news package
    |--------------------------------------------------------------------------
    |
    | The following language lines are  for  news module in news package
    | and it is used by the template/view files in this module
    |
    */

    /**
     * Singlular and plural name of the module
     */
    'name'          => 'News',
    'names'         => 'News',
    
    /**
     * Singlular and plural name of the module
     */
    'title'         => [
        'main'  => 'News',
        'sub'   => 'News',
        'list'  => 'List of news',
        'edit'  => 'Edit news',
        'create'    => 'Create new news'
    ],

    /**
     * Options for select/radio/check.
     */
    'options'       => [
            'published'           => ['Yes' => 'Yes','No' => 'No'],
            'status'              => ['show' => 'show','hide' => 'hide'],
    ],

    /**
     * Placeholder for inputs
     */
    'placeholder'   => [
        'id'                         => 'Please enter id',
        'category_id'                => 'Please enter category id',
        'title'                      => 'Please enter title',
        'description'                => 'Please enter description',
        'images'                     => 'Please enter images',
        'tags'                       => 'Please enter tags',
        'slug'                       => 'Please enter slug',
        'published'                  => 'Please select published',
        'status'                     => 'Please select status',
        'user_type'                  => 'Please enter user type',
        'user_id'                    => 'Please enter user id',
        'upload_folder'              => 'Please enter upload folder',
        'deleted_at'                 => 'Please select deleted at',
        'created_at'                 => 'Please select created at',
        'updated_at'                 => 'Please select updated at',
    ],

    /**
     * Labels for inputs.
     */
    'label'         => [
        'id'                         => 'Id',
        'category_id'                => 'Category id',
        'title'                      => 'Title',
        'description'                => 'Description',
        'images'                     => 'Images',
        'tags'                       => 'Tags',
        'slug'                       => 'Slug',
        'published'                  => 'Published',
        'status'                     => 'Status',
        'user_type'                  => 'User type',
        'user_id'                    => 'User id',
        'upload_folder'              => 'Upload folder',
        'deleted_at'                 => 'Deleted at',
        'created_at'                 => 'Created at',
        'updated_at'                 => 'Updated at',
    ],

    /**
     * Columns array for show hide checkbox.
     */
    'cloumns'         => [
        'id'                         => ['name' => 'Id', 'data-column' => 1, 'checked'],
        'category_id'                => ['name' => 'Category id', 'data-column' => 2, 'checked'],
        'title'                      => ['name' => 'Title', 'data-column' => 3, 'checked'],
        'published'                  => ['name' => 'Published', 'data-column' => 4, 'checked'],
        'status'                     => ['name' => 'Status', 'data-column' => 5, 'checked'],
        'user_type'                  => ['name' => 'User type', 'data-column' => 6, 'checked'],
        'created_at'                 => ['name' => 'Created at', 'data-column' => 7, 'checked'],
    ],

    /**
     * Tab labels
     */
    'tab'           => [
        'name'  => 'News',
    ],

    /**
     * Texts  for the module
     */
    'text'          => [
        'preview' => 'Click on the below list for preview',
    ],
];
