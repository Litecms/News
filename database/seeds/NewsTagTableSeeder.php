<?php

namespace Litecms;

use DB;
use Illuminate\Database\Seeder;

class NewsTagTableSeeder extends Seeder
{
    public function run()
    {
        DB::table(config('litecms.news.tag.model.table'))->insert([
            ['id' => '1', 'name' => 'Games', 'frequency' => '1', 'slug' => 'games', 'published' => 'yes', 'created_at' => '2018-05-11 06:07:10', 'updated_at' => '2018-05-11 10:07:10', 'deleted_at' => null],
            ['id' => '2', 'name' => 'Health', 'frequency' => '2', 'slug' => 'health', 'published' => 'yes', 'created_at' => '2018-05-11 10:07:22', 'updated_at' => '2018-05-11 10:07:22', 'deleted_at' => null],
            ['id' => '3', 'name' => 'Finance', 'frequency' => '1', 'slug' => 'finance', 'published' => 'yes', 'created_at' => '2018-05-11 10:07:33', 'updated_at' => '2018-05-11 10:07:33', 'deleted_at' => null],
            ['id' => '4', 'name' => 'Education', 'frequency' => '1', 'slug' => 'education', 'published' => 'yes', 'created_at' => '2018-05-11 10:07:50', 'updated_at' => '2018-05-11 10:07:50', 'deleted_at' => null],
            ['id' => '5', 'name' => 'Business', 'frequency' => '1', 'slug' => 'business', 'published' => 'yes', 'created_at' => '2018-05-11 10:08:04', 'updated_at' => '2018-05-11 10:08:04', 'deleted_at' => null],
            ['id' => '6', 'name' => 'Arts', 'frequency' => '1', 'slug' => 'arts', 'published' => 'yes', 'created_at' => '2018-05-11 10:08:12', 'updated_at' => '2018-05-11 10:08:12', 'deleted_at' => null],
            ['id' => '7', 'name' => 'Transportation', 'frequency' => '1', 'slug' => 'transportation', 'published' => 'yes', 'created_at' => '2018-05-11 10:08:27', 'updated_at' => '2018-05-11 10:08:27', 'deleted_at' => null],
            ['id' => '8', 'name' => 'Shopping', 'frequency' => '1', 'slug' => 'shopping', 'published' => 'yes', 'created_at' => '2018-05-11 10:08:39', 'updated_at' => '2018-05-11 10:08:39', 'deleted_at' => null],
            ['id' => '9', 'name' => 'Technologies', 'frequency' => '2', 'slug' => 'technologies', 'published' => 'yes', 'created_at' => '2018-09-21 07:54:52', 'updated_at' => '2018-09-21 07:54:52', 'deleted_at' => null],

        ]);

        DB::table('permissions')->insert([
            [
                'slug' => 'news.tag.view',
                'name' => 'View Tag',
            ],
            [
                'slug' => 'news.tag.create',
                'name' => 'Create Tag',
            ],
            [
                'slug' => 'news.tag.edit',
                'name' => 'Update Tag',
            ],
            [
                'slug' => 'news.tag.delete',
                'name' => 'Delete Tag',
            ],

        ]);

        DB::table('menus')->insert([

            [
                'parent_id'   => 1,
                'key'         => null,
                'url'         => 'admin/news/tag',
                'name'        => 'Tag',
                'description' => null,
                'icon'        => 'fa fa-newspaper-o',
                'target'      => null,
                'order'       => 190,
                'status'      => 1,
            ],

            [
                'parent_id'   => 2,
                'key'         => null,
                'url'         => 'user/news/tag',
                'name'        => 'Tag',
                'description' => null,
                'icon'        => 'icon-book-open',
                'target'      => null,
                'order'       => 190,
                'status'      => 1,
            ],

            [
                'parent_id'   => 3,
                'key'         => null,
                'url'         => 'tag',
                'name'        => 'Tag',
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
        'module'    => 'Tag',
        'user_type' => null,
        'user_id'   => null,
        'key'       => 'news.tag.key',
        'name'      => 'Some name',
        'value'     => 'Some value',
        'type'      => 'Default',
        'control'   => 'text',
        ],
         */
        ]);
    }
}
