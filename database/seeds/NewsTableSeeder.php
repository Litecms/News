<?php

namespace Litecms;

use DB;
use Illuminate\Database\Seeder;

class NewsTableSeeder extends Seeder
{
    public function run()
    {
        DB::table(config('litecms.news.news.model.table'))->insert([
            [
                'id'               => '1',
                'category_id'      => '3',
                'title'            => 'FIFA to upgrade flights, raise prize money for Women’s World Cup',
                'description'      => '<p>In a concession to women’s football, FIFA will start funding business-class flights for some 2019 Women’s World Cup teams’ travel to France. FIFA official Emily Shaw also tells a women’s sports law conference total prize money will “significantly increase” from $15 million shared among 24 teams at the 2015 edition. She says the total sum will be confirmed by the FIFA Council, which meets from Oct. 25-26 in Rwanda. FIFA has been urged to close an equality gap between women’s and men’s World Cups. The 32 men’s teams will share $440 million prize money in 2022. Currently, FIFA offers “business-class return flights for 50 people” to all men’s World Cup delegations. Shaw, FIFA’s head of women’s football governance, says flight upgrades will be paid except for team flights under four hours.<br></p>',
                'images'           => '[{"title":"Fifa womens world cup 2019 logo 1","caption":"Fifa womens world cup 2019 logo 1","url":"Fifa womens world cup 2019 logo 1","desc":null,"folder":"2018\\/09\\/21\\/080917346\\/images","time":"2018-09-21 08:09:22","path":"news\\/news\\/2018\\/09\\/21\\/080917346\\/images\\/fifa-womens-world-cup-2019-logo-1.jpg","file":"fifa-womens-world-cup-2019-logo-1.jpg"}]',
                'tag'              => '["Games","Business","Arts"]',
                'slug'             => 'fifa-to-upgrade-flights-raise-prize-money-for-womens-world-cup',
                'meta_title'       => 'FIFA to upgrade flights, raise prize money for Women’s World Cup',
                'meta_description' => null,
                'meta_keyword'     => null,
                'published'        => 'Yes',
                'status'           => 'Show',
                'user_type'        => 'App\\User',
                'user_id'          => '1',
                'upload_folder'    => null,
                'deleted_at'       => null,
                'created_at'       => '2018-09-21 07:39:03',
                'updated_at'       => '2018-10-15 10:23:13',
            ],
            [
                'id'               => '2',
                'category_id'      => '7',
                'title'            => 'Peeking into the future of surgery with Mixed Reality',
                'description'      => '<p>Oncologist Dr Vishal Rao feels the time has come to explore the potential of assisted technologies in surgery</p><p> Dr Vishal Rao, oncologist and head and neck surgeon at HCG Cancer Centre in Bengaluru, dreams of mixed reality operating rooms in the future. The well-known health practitioner takes his first step in the direction with a pilot of mixed-reality spectacles in his OT for minor procedures. He discusses the invention in detail. Edited excerpts:</p><p>Can you describe the working of MR spectacles?</p><p> We have currently started its use in simple minor procedures to pilot its utility. The surgeon mounts the MR spectacles with its hand-held processor and prepares for his surgical procedure. The OT technicians or assistants can then, through their own mobile phones, mirror any scan images as desired by the surgeon to reflect on his eye wear. Thus, while doing these minor procedures, the surgeon is able to get a comprehensive visualisation of the tumour and compare it with images.</p><p>Simple and cost-effective</p><p>a) Immersive VR (3D and 360-degree capability) can be a great tool for training surgeons on specific surgical techniques in courses. Often, most surgeons tend to learn new techniques on cadavers and hands-on training. But with AR and MR, this can get a lot easier.</p><p>b) You can have surgeons’ avatars as mentors. A surgeon can be present as a virtual guide while some surgeon in some other part of the country is performing a surgery in real time and guide him on finer tips and suggestions. This can be an assisted mentorship programme using AR.</p><p>c) VILT (Virtual Instructor-Led Training) platforms allow us to use VR-AR interfaces for conducting online surgical classrooms and live relay of demonstration surgeries across the globe. Thus, we may not need to spend huge amounts to travel to another city or country, to attend a course or be present there in that operating room or auditorium; we could just teleport you in mixed reality.</p><p>d) Assisted AR for surgery can help build your patient’s reports, such as scans during surgery, which can help in planning and improving precision.</p>',
                'images'           => '[{"title":"18bgmvrjpg","caption":"18bgmvrjpg","url":"18bgmvrjpg","desc":null,"folder":"2018\\/09\\/21\\/074839979\\/images","time":"2018-09-21 07:49:21","path":"news\\/news\\/2018\\/09\\/21\\/074839979\\/images\\/18bgmvrjpg.jpg","file":"18bgmvrjpg.jpg"}]',
                'tag'              => '["Health","Transportation","Shopping"]',
                'slug'             => 'peeking-into-the-future-of-surgery-with-mixed-reality',
                'meta_title'       => 'Peeking into the future of surgery with Mixed Reality',
                'meta_description' => null,
                'meta_keyword'     => null,
                'published'        => 'Yes',
                'status'           => 'Show',
                'user_type'        => 'App\\User',
                'user_id'          => '1',
                'upload_folder'    => null,
                'deleted_at'       => null,
                'created_at'       => '2018-09-21 07:50:10',
                'updated_at'       => '2018-10-15 09:43:32',
            ],
            [
                'id'               => '3',
                'category_id'      => '1',
                'title'            => 'Flood frequency of Amazon River has increased fivefold',
                'description'      => '<p style="border-radius: 0px !important;"><b>A recent study of more than 100 years of river level records from the Amazon shows a significant increase in frequency and severity of floods. The scientists analysis of the potential causes could contribute to more accurate flood prediction for the Amazon Basin.</b><br>Water levels of the Amazon River have been recorded daily in Port of Manaus, Brazil since the beginning of the last century. The team used 113 years of water level records and found extreme floods and droughts have become more frequent over the last two to three decades. Their findings show that in the first part of the 20th century, severe floods with water levels exceeding 29 metres -- the benchmark for a state of emergency in Manaus City -- occurred roughly every 20 years. Now, extreme floods occur on average every four years. Study lead author, Dr Jonathan Barichivich, from Universidad Austral de Chile and former Research Fellow from the University of Leeds, said: "Increases of severe droughts in the Amazon have received a lot of attention by researchers. However, what really stands out from this long-term river record is the increase in the frequency and severity of the floods. With a few minor exceptions, there have been extreme floods in the Amazon basin every year from 2009 to 2015." According to the study, the increased flooding is linked to a strengthening of the Walker circulation -- an ocean-powered system of air circulation caused by differences in temperature and pressure over the tropical oceans. This system influences weather patterns and rainfall across the tropics and beyond. Co-author Professor Manuel Gloor, from the School of Geography at Leeds, said: "This dramatic increase in floods is caused by changes in the surrounding seas, particularly the Pacific and Atlantic oceans and how they interact. Due to a strong warming of the Atlantic Ocean and cooling of the Pacific over the same period, we see changes in the so-called Walker circulation, which affects Amazon precipitation. "The effect is more or less the opposite of what happens during an El Niño event. Instead of causing drought, it results in more convection and heavy rainfall in the central and northern parts of the Amazon basin." The ultimate underlying cause for the warming of the Atlantic is not entirely clear. However, in addition to natural variability, global warming is at least partially responsible but in an unexpected and indirect way, according to the study. As a result of greenhouse warming, wind belts in mid to high latitudes in the Southern hemisphere have shifted further south, opening a window for transport of warm Indian ocean waters around the tip of Africa, via the Agulhas current, towards the tropical Atlantic. The changes to the Amazon Basins water cycle have had severe consequences for people and livelihoods in Brazil, Peru, and other Amazonian nations. Co-author Dr Jochen Schöngart from the National Institute for Amazon Research in Manaus, has experienced Amazon River floods first-hand. He explained that these extreme flooding events last for many weeks and have disastrous consequences. Flooding can contaminate water supply and spread disease, as well as destroy homes and livelihoods. Economic activities in the floodplains such as agriculture a cattle ranching are strongly affected. The research indicates that these floods are not over yet. The year 2017, which was not included in the study, again saw water levels rise to over 29 meters. As the tropical Atlantic is expected to continue warming faster than the tropical Pacific over the next few decades scientists expect more of these high water levels. The findings of this study could help predict the probability of flooding extremes in the Amazon in advance and help mitigate the impacts for urban and rural Amazonian populations</p>',
                'images'           => '[{"title":"Cities brazilian amazon faces worst floods years","caption":"Cities brazilian amazon faces worst floods years","url":"Cities brazilian amazon faces worst floods years","desc":null,"folder":"2018\\/09\\/21\\/080639856\\/images","time":"2018-09-21 08:06:45","path":"news\\/news\\/2018\\/09\\/21\\/080639856\\/images\\/cities-brazilian-amazon-faces-worst-floods-years.jpg","file":"cities-brazilian-amazon-faces-worst-floods-years.jpg"}]',
                'tag'              => '["Health","Education","Business"]',
                'slug'             => 'flood-frequency-of-amazon-river-has-increased-fivefold',
                'meta_title'       => 'Flood frequency of Amazon River has increased fivefold',
                'meta_description' => null,
                'meta_keyword'     => null,
                'published'        => 'Yes',
                'status'           => 'Show',
                'user_type'        => 'App\\User',
                'user_id'          => '1',
                'upload_folder'    => null,
                'deleted_at'       => null,
                'created_at'       => '2018-09-21 07:58:45',
                'updated_at'       => '2018-10-15 09:47:12'],

        ]);

        DB::table(config('litecms.news.category.model.table'))->insert([
            [
                'id'            => '1',
                'name'          => 'Weather',
                'slug'          => 'weather',
                'status'        => 'Show',
                'user_type'     => 'App\\User',
                'user_id'       => '1',
                'upload_folder' => null,
                'created_at'    => '2018-09-21 02:46:34',
                'updated_at'    => '2018-05-11 10:01:51',
                'deleted_at'    => null,
            ],
            [
                'id'            => '2',
                'name'          => 'Current Events',
                'slug'          => 'current-events',
                'status'        => 'Show',
                'user_type'     => 'App\\User',
                'user_id'       => '1',
                'upload_folder' => null,
                'created_at'    => '2018-05-11 06:00:06',
                'updated_at'    => '2018-05-11 10:00:06',
                'deleted_at'    => null,
            ],
            [
                'id'            => '3',
                'name'          => 'Sports',
                'slug'          => 'sports',
                'status'        => 'Show',
                'user_type'     => 'App\\User',
                'user_id'       => '1',
                'upload_folder' => null,
                'created_at'    => '2018-05-11 10:00:47',
                'updated_at'    => '2018-05-11 10:00:47',
                'deleted_at'    => null,
            ],
            [
                'id'            => '4',
                'name'          => 'Politics',
                'slug'          => 'politics',
                'status'        => 'Show',
                'user_type'     => 'App\\User',
                'user_id'       => '1',
                'upload_folder' => null,
                'created_at'    => '2018-05-11 10:00:56',
                'updated_at'    => '2018-05-11 10:00:56',
                'deleted_at'    => null,
            ],
            [
                'id'            => '5',
                'name'          => 'Breaking News',
                'slug'          => 'breaking-news',
                'status'        => 'Show',
                'user_type'     => 'App\\User',
                'user_id'       => '1',
                'upload_folder' => null,
                'created_at'    => '2018-05-11 10:01:15',
                'updated_at'    => '2018-05-11 10:01:15',
                'deleted_at'    => null,
            ],
            [
                'id'            => '6',
                'name'          => 'Environmental',
                'slug'          => 'environmental',
                'status'        => 'Show',
                'user_type'     => 'App\\User',
                'user_id'       => '1',
                'upload_folder' => null,
                'created_at'    => '2018-05-11 10:01:27',
                'updated_at'    => '2018-05-11 10:01:27',
                'deleted_at'    => null,
            ],
            [
                'id'            => '7',
                'name'          => 'Technology',
                'slug'          => 'technology',
                'status'        => 'Show',
                'user_type'     => 'App\\User',
                'user_id'       => '1',
                'upload_folder' => null,
                'created_at'    => '2018-09-21 03:48:31',
                'updated_at'    => '2018-09-21 07:48:23',
                'deleted_at'    => null],

        ]);
        DB::table(config('litecms.news.tag.model.table'))->insert([
            [
                'id'         => '1',
                'name'       => 'Games',
                'frequency'  => '1',
                'slug'       => 'games',
                'status'     => 'Show',
                'created_at' => '2018-05-11 06:07:10',
                'updated_at' => '2018-05-11 10:07:10',
                'deleted_at' => null,
            ],
            [
                'id'         => '2',
                'name'       => 'Health',
                'frequency'  => '2',
                'slug'       => 'health',
                'status'     => 'Show',
                'created_at' => '2018-05-11 10:07:22',
                'updated_at' => '2018-05-11 10:07:22',
                'deleted_at' => null,
            ],
            [
                'id'         => '3',
                'name'       => 'Finance',
                'frequency'  => '1',
                'slug'       => 'finance',
                'status'     => 'Show',
                'created_at' => '2018-05-11 10:07:33',
                'updated_at' => '2018-05-11 10:07:33',
                'deleted_at' => null,
            ],
            [
                'id'         => '4',
                'name'       => 'Education',
                'frequency'  => '1',
                'slug'       => 'education',
                'status'     => 'Show',
                'created_at' => '2018-05-11 10:07:50',
                'updated_at' => '2018-05-11 10:07:50',
                'deleted_at' => null,
            ],
            [
                'id'         => '5',
                'name'       => 'Business',
                'frequency'  => '1',
                'slug'       => 'business',
                'status'     => 'Show',
                'created_at' => '2018-05-11 10:08:04',
                'updated_at' => '2018-05-11 10:08:04',
                'deleted_at' => null,
            ],
            [
                'id'         => '6',
                'name'       => 'Arts',
                'frequency'  => '1',
                'slug'       => 'arts',
                'status'     => 'Show',
                'created_at' => '2018-05-11 10:08:12',
                'updated_at' => '2018-05-11 10:08:12',
                'deleted_at' => null,
            ],
            [
                'id'         => '7',
                'name'       => 'Transportation',
                'frequency'  => '1',
                'slug'       => 'transportation',
                'status'     => 'Show',
                'created_at' => '2018-05-11 10:08:27',
                'updated_at' => '2018-05-11 10:08:27',
                'deleted_at' => null,
            ],
            [
                'id'         => '8',
                'name'       => 'Shopping',
                'frequency'  => '1',
                'slug'       => 'shopping',
                'status'     => 'Show',
                'created_at' => '2018-05-11 10:08:39',
                'updated_at' => '2018-05-11 10:08:39',
                'deleted_at' => null,
            ],
            [
                'id'         => '9',
                'name'       => 'Technologies',
                'frequency'  => '2',
                'slug'       => 'technologies',
                'status'     => 'Show',
                'created_at' => '2018-09-21 07:54:52',
                'updated_at' => '2018-09-21 07:54:52',
                'deleted_at' => null
          ],

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
            [
                'slug' => 'news.comment.view',
                'name' => 'View Comment',
            ],
            [
                'slug' => 'news.comment.create',
                'name' => 'Create Comment',
            ],
            [
                'slug' => 'news.comment.edit',
                'name' => 'Update Comment',
            ],
            [
                'slug' => 'news.comment.delete',
                'name' => 'Delete Comment',
            ],
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
                'url'         => 'admin/news/news',
                'name'        => 'News',
                'description' => null,
                'icon'        => 'fa fa-newspaper-o',
                'target'      => null,
                'order'       => 190,
                'status'      => 1,
            ],
            [
                'parent_id'   => 4,
                'key'         => null,
                'url'         => 'news',
                'name'        => 'News',
                'description' => null,
                'icon'        => null,
                'target'      => null,
                'order'       => 190,
                'status'      => 1,
            ],
            [
                'parent_id'   => 5,
                'key'         => null,
                'url'         => 'news',
                'name'        => 'News',
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
        'module'    => 'News',
        'user_type' => null,
        'user_id'   => null,
        'key'       => 'news.news.key',
        'name'      => 'Some name',
        'value'     => 'Some value',
        'type'      => 'Default',
        'control'   => 'text',
        ],
         */
        ]);
    }
}
