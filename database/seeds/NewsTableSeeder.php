<?php

use Illuminate\Database\Seeder;

class NewsTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('news')->insert([

            [
                'user_id'       => '1',
                'title'         => 'Lorem ipsum dolor sit amet text',
                'slug'          => 'lorem-ipsum-dolor-sit-amet',
                'description'   => 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit amet nibh. Donec sodales sagittis magna. Sed consequat',
                'image'         => '',
                'images'        => '[{"caption":"News2","efolder":"news\\/3PPRFPhXFEqr88\\/images","folder":"\\/uploads\\/news\\/2016\\/07\\/16\\/095737451\\/images\\/","time":"2016-07-16 09:57:44","file":"news2.jpg"},{"caption":"News1","efolder":"news\\/3PPRFPhXFEqr88\\/images","folder":"\\/uploads\\/news\\/2016\\/07\\/16\\/095737451\\/images\\/","time":"2016-07-16 09:57:48","file":"news1.jpg"},{"caption":"News3","efolder":"news\\/3PPRFPhXFEqr88\\/images","folder":"\\/uploads\\/news\\/2016\\/07\\/16\\/095737451\\/images\\/","time":"2016-07-16 09:57:52","file":"news3.jpg"}]',
                'published_on'  => '2016-07-16',
                'status'        => 'Show',
                'published'     => 'Yes',
                'upload_folder' => '',
                'created_at'    => '2016-07-16 17:58:53',
                'deleted_at'    => null, 'updated_at' => '2016-07-16 12:28:53'],
            [
                'user_id'       => '1',
                'title'         => 'Lorem ipsum dolor sit amet',
                'slug'          => 'lorem-ipsum-dolor-sit-amet-2',
                'description'   => 'Lorem ipsum dolor sit amet',
                'image'         => '',
                'images'        => '[{"folder":"\\/uploads\\/news\\/2016\\/07\\/16\\/122634221\\/images\\/","file":"blog1.jpg","caption":"Blog1","time":"2016-07-16 12:27:08","efolder":"news\\/Voo0S9hgFyVqk4\\/images"},{"folder":"\\/uploads\\/news\\/2016\\/07\\/16\\/122634221\\/images\\/","file":"blog2.jpg","caption":"Blog2","time":"2016-07-16 12:27:09","efolder":"news\\/Voo0S9hgFyVqk4\\/images"},{"folder":"\\/uploads\\/news\\/2016\\/07\\/16\\/122634221\\/images\\/","file":"blog3.jpg","caption":"Blog3","time":"2016-07-16 12:27:09","efolder":"news\\/Voo0S9hgFyVqk4\\/images"}]',
                'published_on'  => '2016-07-16',
                'status'        => 'Show',
                'published'     => 'Yes',
                'upload_folder' => '',
                'created_at'    => '2016-07-16 17:57:13',
                'deleted_at'    => null, 'updated_at' => '2016-07-16 12:27:13'],
            [
                'user_id'       => '1',
                'title'         => 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium',
                'slug'          => 'sed-ut-perspiciatis-unde-omnis-iste-natus-error-sit-voluptatem-accusantium',
                'description'   => '<span style="color: rgb(102, 102, 102); font-family: Verdana, Geneva, sans-serif; font-size: 10px; letter-spacing: normal; line-height: normal;">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur? At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere</span>',
                'image'         => '',
                'images'        => '[{"folder":"\\/uploads\\/news\\/2016\\/07\\/16\\/123836714\\/images\\/","file":"r1.jpg","caption":"R1","time":"2016-07-16 12:40:05","efolder":"news\\/kddAFdhoFP3PR1\\/images"},{"folder":"\\/uploads\\/news\\/2016\\/07\\/16\\/123836714\\/images\\/","file":"r2-copy.jpg","caption":"R2 copy","time":"2016-07-16 12:40:05","efolder":"news\\/kddAFdhoFP3PR1\\/images"},{"folder":"\\/uploads\\/news\\/2016\\/07\\/16\\/123836714\\/images\\/","file":"riyadh.jpg","caption":"Riyadh","time":"2016-07-16 12:40:06","efolder":"news\\/kddAFdhoFP3PR1\\/images"},{"folder":"\\/uploads\\/news\\/2016\\/07\\/16\\/123836714\\/images\\/","file":"ruhsa-phototour30.jpg","caption":"Ruhsa phototour30","time":"2016-07-16 12:40:06","efolder":"news\\/kddAFdhoFP3PR1\\/images"}]',
                'published_on'  => '2016-07-16',
                'status'        => 'Show',
                'published'     => 'Yes',
                'upload_folder' => '',
                'created_at'    => '2016-07-16 12:40:10',
                'deleted_at'    => null, 'updated_at' => '2016-07-16 12:40:10'],
        ]);

        DB::table('permissions')->insert([
            [
                'slug' => 'news.news.view',
                'name' => 'View News',
            ],
            [
                'slug' => 'news.news.create',
                'name' => 'Create News',
            ],
            [
                'slug' => 'news.news.edit',
                'name' => 'Update News',
            ],
            [
                'slug' => 'news.news.delete',
                'name' => 'Delete News',
            ],
        ]);

        DB::table('menus')->insert([

            [
                'parent_id'   => 1,
                'key'         => null,
                'url'         => 'admin/news/news',
                'name'        => 'News',
                'description' => null,
                'icon'        => 'fa fa-newspaper-o',
                'target'      => null,
                'order'       => 1,
                'status'      => 1,
            ],

            [
                'parent_id'   => 2,
                'key'         => null,
                'url'         => 'user/news/news',
                'name'        => 'News',
                'description' => null,
                'icon'        => 'icon-book-open',
                'target'      => null,
                'order'       => 1,
                'status'      => 1,
            ],

            [
                'parent_id'   => 3,
                'key'         => null,
                'url'         => 'news',
                'name'        => 'News',
                'description' => null,
                'icon'        => null,
                'target'      => null,
                'order'       => 1,
                'status'      => 1,
            ],

        ]);

        DB::table('settings')->insert([
            // Uncomment  and edit this section for entering value to settings table.
            /*
        [
        'key'      => 'news.news.key',
        'name'     => 'Some name',
        'value'    => 'Some value',
        'type'     => 'Default',
        ],
         */
        ]);
    }
}
