<?php

namespace Litecms;

use DB;
use Illuminate\Database\Seeder;

class NewsCategoryTableSeeder extends Seeder
{
    public function run()
    {
        DB::table(config('litecms.news.category.model.table'))->insert([
            ['id' => '1', 'name' => 'Weather', 'slug' => 'weather', 'status' => 'show', 'user_type' => 'App\\User', 'user_id' => '1', 'upload_folder' => null, 'created_at' => '2018-09-21 02:46:34', 'updated_at' => '2018-05-11 10:01:51', 'deleted_at' => null],
            ['id' => '2', 'name' => 'Current Events', 'slug' => 'current-events', 'status' => 'show', 'user_type' => 'App\\User', 'user_id' => '1', 'upload_folder' => null, 'created_at' => '2018-05-11 06:00:06', 'updated_at' => '2018-05-11 10:00:06', 'deleted_at' => null],
            ['id' => '3', 'name' => 'Sports', 'slug' => 'sports', 'status' => 'show', 'user_type' => 'App\\User', 'user_id' => '1', 'upload_folder' => null, 'created_at' => '2018-05-11 10:00:47', 'updated_at' => '2018-05-11 10:00:47', 'deleted_at' => null],
            ['id' => '4', 'name' => 'Politics', 'slug' => 'politics', 'status' => 'show', 'user_type' => 'App\\User', 'user_id' => '1', 'upload_folder' => null, 'created_at' => '2018-05-11 10:00:56', 'updated_at' => '2018-05-11 10:00:56', 'deleted_at' => null],
            ['id' => '5', 'name' => 'Breaking News', 'slug' => 'breaking-news', 'status' => 'show', 'user_type' => 'App\\User', 'user_id' => '1', 'upload_folder' => null, 'created_at' => '2018-05-11 10:01:15', 'updated_at' => '2018-05-11 10:01:15', 'deleted_at' => null],
            ['id' => '6', 'name' => 'Environmental', 'slug' => 'environmental', 'status' => 'show', 'user_type' => 'App\\User', 'user_id' => '1', 'upload_folder' => null, 'created_at' => '2018-05-11 10:01:27', 'updated_at' => '2018-05-11 10:01:27', 'deleted_at' => null],
            ['id' => '7', 'name' => 'Technology', 'slug' => 'technology', 'status' => 'show', 'user_type' => 'App\\User', 'user_id' => '1', 'upload_folder' => null, 'created_at' => '2018-09-21 03:48:31', 'updated_at' => '2018-09-21 07:48:23', 'deleted_at' => null],

        ]);

        DB::table('permissions')->insert([
            [
                'slug' => 'news.category.view',
                'name' => 'View Category',
            ],
            [
                'slug' => 'news.category.create',
                'name' => 'Create Category',
            ],
            [
                'slug' => 'news.category.edit',
                'name' => 'Update Category',
            ],
            [
                'slug' => 'news.category.delete',
                'name' => 'Delete Category',
            ],

        ]);

        DB::table('menus')->insert([

            [
                'parent_id'   => 1,
                'key'         => null,
                'url'         => 'admin/news/category',
                'name'        => 'Category',
                'description' => null,
                'icon'        => 'fa fa-newspaper-o',
                'target'      => null,
                'order'       => 190,
                'status'      => 1,
            ],

            [
                'parent_id'   => 2,
                'key'         => null,
                'url'         => 'user/news/category',
                'name'        => 'Category',
                'description' => null,
                'icon'        => 'icon-book-open',
                'target'      => null,
                'order'       => 190,
                'status'      => 1,
            ],

            [
                'parent_id'   => 3,
                'key'         => null,
                'url'         => 'category',
                'name'        => 'Category',
                'description' => null,
                'icon'        => null,
                'target'      => null,
                'order'       => 190,
                'status'      => 1,
            ],

        ]);

        DB::table('settings')->insert([
            // Uncomment  and edit this section for entering value to settings table.
            /*
        [
        'pacakge'   => 'News',
        'module'    => 'Category',
        'user_type' => null,
        'user_id'   => null,
        'key'       => 'news.category.key',
        'name'      => 'Some name',
        'value'     => 'Some value',
        'type'      => 'Default',
        'control'   => 'text',
        ],
         */
        ]);
    }
}
