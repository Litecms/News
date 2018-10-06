<?php

namespace Litecms;

use DB;
use Illuminate\Database\Seeder;

class NewsTableSeeder extends Seeder
{
    public function run()
    {
        DB::table(config('litecms.news.news.model.table'))->insert([
            ['id' => '1', 'category_id' => '3', 'title' => 'FIFA to upgrade flights, raise prize money for Women’s World Cup', 'description' => '<p style="margin-bottom: 0px; padding: 0px 0px 20px; border: 0px; outline-style: initial; outline-width: 0px; font-size: 16px; vertical-align: baseline; color: rgb(62, 62, 62); font-family: &quot;Droid Serif&quot;, serif; line-height: 28px;">In a concession to women’s football, FIFA will start funding business-class flights for some 2019 Women’s World Cup teams’ travel to France.</p><p style="margin-bottom: 0px; padding: 0px 0px 20px; border: 0px; outline-style: initial; outline-width: 0px; font-size: 16px; vertical-align: baseline; color: rgb(62, 62, 62); font-family: &quot;Droid Serif&quot;, serif; line-height: 28px;">FIFA official Emily Shaw also tells a women’s sports law conference total prize money will “significantly increase” from $15 million shared among 24 teams at the 2015 edition.</p><p style="margin-bottom: 0px; padding: 0px 0px 20px; border: 0px; outline-style: initial; outline-width: 0px; font-size: 16px; vertical-align: baseline; color: rgb(62, 62, 62); font-family: &quot;Droid Serif&quot;, serif; line-height: 28px;">She says the total sum will be confirmed by the FIFA Council, which meets from Oct. 25-26 in Rwanda.</p><p style="margin-bottom: 0px; padding: 0px 0px 20px; border: 0px; outline-style: initial; outline-width: 0px; font-size: 16px; vertical-align: baseline; color: rgb(62, 62, 62); font-family: &quot;Droid Serif&quot;, serif; line-height: 28px;">FIFA has been urged to close an equality gap between women’s and men’s World Cups. The 32 men’s teams will share $440 million prize money in 2022.</p><p style="margin-bottom: 0px; padding: 0px 0px 20px; border: 0px; outline-style: initial; outline-width: 0px; font-size: 16px; vertical-align: baseline; color: rgb(62, 62, 62); font-family: &quot;Droid Serif&quot;, serif; line-height: 28px;">Currently, FIFA offers “business-class return flights for 50 people” to all men’s World Cup delegations.</p><p style="margin-bottom: 0px; padding: 0px 0px 20px; border: 0px; outline-style: initial; outline-width: 0px; font-size: 16px; vertical-align: baseline; color: rgb(62, 62, 62); font-family: &quot;Droid Serif&quot;, serif; line-height: 28px;">Shaw, FIFA’s head of women’s football governance, says flight upgrades will be paid except for team flights under four hours.</p>', 'images' => '[{"title":"Fifa womens world cup 2019 logo 1","caption":"Fifa womens world cup 2019 logo 1","url":"Fifa womens world cup 2019 logo 1","desc":null,"folder":"2018\\/09\\/21\\/080917346\\/images","time":"2018-09-21 08:09:22","path":"news\\/news\\/2018\\/09\\/21\\/080917346\\/images\\/fifa-womens-world-cup-2019-logo-1.jpg","file":"fifa-womens-world-cup-2019-logo-1.jpg"}]', 'tag' => '["Games"]', 'slug' => 'fifa-to-upgrade-flights-raise-prize-money-for-womens-world-cup', 'published' => 'Yes', 'status' => 'show', 'user_type' => 'App\\User', 'user_id' => '1', 'upload_folder' => null, 'deleted_at' => null, 'created_at' => '2018-09-21 07:39:03', 'updated_at' => '2018-09-21 08:09:23'],
            ['id' => '2', 'category_id' => '7', 'title' => 'Peeking into the future of surgery with Mixed Reality', 'description' => '<div><span style="color: rgb(34, 34, 34); font-family: Consolas, &quot;Lucida Console&quot;, &quot;Courier New&quot;, monospace; font-size: 12px; white-space: pre-wrap;">Oncologist Dr Vishal Rao feels the time has come to explore the potential of assisted technologies in surgery</span></div><div><span style="color: rgb(34, 34, 34); font-family: Consolas, &quot;Lucida Console&quot;, &quot;Courier New&quot;, monospace; font-size: 12px; white-space: pre-wrap;"> Dr Vishal Rao, oncologist and head and neck surgeon at HCG Cancer Centre in Bengaluru, dreams of mixed reality operating rooms in the future. The well-known health practitioner takes his first step in the direction with a pilot of mixed-reality spectacles in his OT for minor procedures. He discusses the invention in detail. Edited excerpts:</span></div><div><span style="color: rgb(34, 34, 34); font-family: Consolas, &quot;Lucida Console&quot;, &quot;Courier New&quot;, monospace; font-size: 12px; white-space: pre-wrap;"><br></span></div><div><span style="-webkit-font-smoothing: antialiased; font-family: TundraWeb-Bold; color: rgb(40, 40, 40); font-size: 18px; background-color: rgb(245, 245, 245); outline-style: initial !important; outline-width: 0px !important;">Can you describe the working of MR spectacles?</span></div><div><span style="-webkit-font-smoothing: antialiased; font-family: TundraWeb-Bold; color: rgb(40, 40, 40); font-size: 18px; background-color: rgb(245, 245, 245); outline-style: initial !important; outline-width: 0px !important;"><span style="color: rgb(34, 34, 34); font-family: Consolas, &quot;Lucida Console&quot;, &quot;Courier New&quot;, monospace; font-size: 12px; white-space: pre-wrap; background-color: rgb(255, 255, 255);"> We have currently started its use in simple minor procedures to pilot its utility. The surgeon mounts the MR spectacles with its hand-held processor and prepares for his surgical procedure. The OT technicians or assistants can then, through their own mobile phones, mirror any scan images as desired by the surgeon to reflect on his eye wear. Thus, while doing these minor procedures, the surgeon is able to get a comprehensive visualisation of the tumour and compare it with images.</span></span></div><div><span style="-webkit-font-smoothing: antialiased; font-family: TundraWeb-Bold; color: rgb(40, 40, 40); font-size: 18px; background-color: rgb(245, 245, 245); outline-style: initial !important; outline-width: 0px !important;"><span style="color: rgb(34, 34, 34); font-family: Consolas, &quot;Lucida Console&quot;, &quot;Courier New&quot;, monospace; font-size: 12px; white-space: pre-wrap; background-color: rgb(255, 255, 255);"><br></span></span></div><div><span style="-webkit-font-smoothing: antialiased; font-family: TundraWeb-Bold; color: rgb(40, 40, 40); font-size: 18px; background-color: rgb(245, 245, 245); outline-style: initial !important; outline-width: 0px !important;"><em style="-webkit-font-smoothing: antialiased; font-family: TundraWeb, serif; outline-style: initial !important; outline-width: 0px !important;">Simple and cost-effective</em></span></div><div><span style="-webkit-font-smoothing: antialiased; font-family: TundraWeb-Bold; color: rgb(40, 40, 40); font-size: 18px; background-color: rgb(245, 245, 245); outline-style: initial !important; outline-width: 0px !important;"><em style="-webkit-font-smoothing: antialiased; font-family: TundraWeb, serif; outline-style: initial !important; outline-width: 0px !important;"><em style="-webkit-font-smoothing: antialiased; outline-style: initial !important; outline-width: 0px !important;">a) Immersive VR (3D and 360-degree capability) can be a great tool for training surgeons on specific surgical techniques in courses. Often, most surgeons tend to learn new techniques on cadavers and hands-on training. But with AR and MR, this can get a lot easier.</em></em></span></div><div><span style="-webkit-font-smoothing: antialiased; font-family: TundraWeb-Bold; color: rgb(40, 40, 40); font-size: 18px; background-color: rgb(245, 245, 245); outline-style: initial !important; outline-width: 0px !important;"><em style="-webkit-font-smoothing: antialiased; font-family: TundraWeb, serif; outline-style: initial !important; outline-width: 0px !important;"><em style="-webkit-font-smoothing: antialiased; outline-style: initial !important; outline-width: 0px !important;"><em style="-webkit-font-smoothing: antialiased; outline-style: initial !important; outline-width: 0px !important;">b) You can have surgeons’ avatars as mentors. A surgeon can be present as a virtual guide while some surgeon in some other part of the country is performing a surgery in real time and guide him on finer tips and suggestions. This can be an assisted mentorship programme using AR.</em></em></em></span></div><div><span style="-webkit-font-smoothing: antialiased; font-family: TundraWeb-Bold; color: rgb(40, 40, 40); font-size: 18px; background-color: rgb(245, 245, 245); outline-style: initial !important; outline-width: 0px !important;"><em style="-webkit-font-smoothing: antialiased; font-family: TundraWeb, serif; outline-style: initial !important; outline-width: 0px !important;"><em style="-webkit-font-smoothing: antialiased; outline-style: initial !important; outline-width: 0px !important;"><em style="-webkit-font-smoothing: antialiased; outline-style: initial !important; outline-width: 0px !important;"><em style="-webkit-font-smoothing: antialiased; outline-style: initial !important; outline-width: 0px !important;">c) VILT (Virtual Instructor-Led Training) platforms allow us to use VR-AR interfaces for conducting online surgical classrooms and live relay of demonstration surgeries across the globe. Thus, we may not need to spend huge amounts to travel to another city or country, to attend a course or be present there in that operating room or auditorium; we could just teleport you in mixed reality.</em></em></em></em></span></div><div><span style="-webkit-font-smoothing: antialiased; font-family: TundraWeb-Bold; color: rgb(40, 40, 40); font-size: 18px; background-color: rgb(245, 245, 245); outline-style: initial !important; outline-width: 0px !important;"><em style="-webkit-font-smoothing: antialiased; font-family: TundraWeb, serif; outline-style: initial !important; outline-width: 0px !important;"><em style="-webkit-font-smoothing: antialiased; outline-style: initial !important; outline-width: 0px !important;"><em style="-webkit-font-smoothing: antialiased; outline-style: initial !important; outline-width: 0px !important;"><em style="-webkit-font-smoothing: antialiased; outline-style: initial !important; outline-width: 0px !important;"><em style="-webkit-font-smoothing: antialiased; outline-style: initial !important; outline-width: 0px !important;">d) Assisted AR for surgery can help build your patient’s reports, such as scans during surgery, which can help in planning and improving precision.</em><br></em><br></em><br></em></em><br><span style="color: rgb(34, 34, 34); font-family: Consolas, &quot;Lucida Console&quot;, &quot;Courier New&quot;, monospace; font-size: 12px; white-space: pre-wrap; background-color: rgb(255, 255, 255);"><br></span><br></span><span style="color: rgb(34, 34, 34); font-family: Consolas, &quot;Lucida Console&quot;, &quot;Courier New&quot;, monospace; font-size: 12px; white-space: pre-wrap;"><br></span><span style="color: rgb(34, 34, 34); font-family: Consolas, &quot;Lucida Console&quot;, &quot;Courier New&quot;, monospace; font-size: 12px; white-space: pre-wrap;"><br></span><br></div>', 'images' => '[{"title":"18bgmvrjpg","caption":"18bgmvrjpg","url":"18bgmvrjpg","desc":null,"folder":"2018\\/09\\/21\\/074839979\\/images","time":"2018-09-21 07:49:21","path":"news\\/news\\/2018\\/09\\/21\\/074839979\\/images\\/18bgmvrjpg.jpg","file":"18bgmvrjpg.jpg"}]', 'tag' => '["Health","Technologies"]', 'slug' => 'peeking-into-the-future-of-surgery-with-mixed-reality', 'published' => 'Yes', 'status' => 'show', 'user_type' => 'App\\User', 'user_id' => '1', 'upload_folder' => null, 'deleted_at' => null, 'created_at' => '2018-09-21 07:50:10', 'updated_at' => '2018-09-21 07:55:01'],
            ['id' => '3', 'category_id' => '1', 'title' => 'Flood frequency of Amazon River has increased fivefold', 'description' => '<p id="first" class="lead" style="font-size: 18px; color: rgb(51, 51, 51); font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; border-radius: 0px !important;">A recent study of more than 100 years of river level records from the Amazon shows a significant increase in frequency and severity of floods. The scientists\' analysis of the potential causes could contribute to more accurate flood prediction for the Amazon Basin.</p><div id="text" style="color: rgb(51, 51, 51); font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; border-radius: 0px !important;"><p style="border-radius: 0px !important;">Water levels of the Amazon River have been recorded daily in Port of Manaus, Brazil since the beginning of the last century. The team used 113 years of water level records and found extreme floods and droughts have become more frequent over the last two to three decades.</p><p style="border-radius: 0px !important;">Their findings show that in the first part of the 20th century, severe floods with water levels exceeding 29 metres -- the benchmark for a state of emergency in Manaus City -- occurred roughly every 20 years. Now, extreme floods occur on average every four years.</p><p style="border-radius: 0px !important;">Study lead author, Dr Jonathan Barichivich, from Universidad Austral de Chile and former Research Fellow from the University of Leeds, said: "Increases of severe droughts in the Amazon have received a lot of attention by researchers. However, what really stands out from this long-term river record is the increase in the frequency and severity of the floods. With a few minor exceptions, there have been extreme floods in the Amazon basin every year from 2009 to 2015."</p><p style="border-radius: 0px !important;">According to the study, the increased flooding is linked to a strengthening of the Walker circulation -- an ocean-powered system of air circulation caused by differences in temperature and pressure over the tropical oceans. This system influences weather patterns and rainfall across the tropics and beyond.</p><p style="border-radius: 0px !important;">Co-author Professor Manuel Gloor, from the School of Geography at Leeds, said: "This dramatic increase in floods is caused by changes in the surrounding seas, particularly the Pacific and Atlantic oceans and how they interact. Due to a strong warming of the Atlantic Ocean and cooling of the Pacific over the same period, we see changes in the so-called Walker circulation, which affects Amazon precipitation.</p><p style="border-radius: 0px !important;">"The effect is more or less the opposite of what happens during an El Niño event. Instead of causing drought, it results in more convection and heavy rainfall in the central and northern parts of the Amazon basin."</p><p style="border-radius: 0px !important;">The ultimate underlying cause for the warming of the Atlantic is not entirely clear. However, in addition to natural variability, global warming is at least partially responsible but in an unexpected and indirect way, according to the study.</p><p style="border-radius: 0px !important;">As a result of greenhouse warming, wind belts in mid to high latitudes in the Southern hemisphere have shifted further south, opening a window for transport of warm Indian ocean waters around the tip of Africa, via the Agulhas current, towards the tropical Atlantic.</p><p style="border-radius: 0px !important;">The changes to the Amazon Basin\'s water cycle have had severe consequences for people and livelihoods in Brazil, Peru, and other Amazonian nations.</p><p style="border-radius: 0px !important;">Co-author Dr Jochen Schöngart from the National Institute for Amazon Research in Manaus, has experienced Amazon River floods first-hand. He explained that these extreme flooding events last for many weeks and have disastrous consequences. Flooding can contaminate water supply and spread disease, as well as destroy homes and livelihoods. Economic activities in the floodplains such as agriculture a cattle ranching are strongly affected.</p><p style="border-radius: 0px !important;">The research indicates that these floods are not over yet. The year 2017, which was not included in the study, again saw water levels rise to over 29 meters. As the tropical Atlantic is expected to continue warming faster than the tropical Pacific over the next few decades scientists expect more of these high water levels. The findings of this study could help predict the probability of flooding extremes in the Amazon in advance and help mitigate the impacts for urban and rural Amazonian populations</p></div>', 'images' => '[{"title":"Cities brazilian amazon faces worst floods years","caption":"Cities brazilian amazon faces worst floods years","url":"Cities brazilian amazon faces worst floods years","desc":null,"folder":"2018\\/09\\/21\\/080639856\\/images","time":"2018-09-21 08:06:45","path":"news\\/news\\/2018\\/09\\/21\\/080639856\\/images\\/cities-brazilian-amazon-faces-worst-floods-years.jpg","file":"cities-brazilian-amazon-faces-worst-floods-years.jpg"}]', 'tag' => '["Health"]', 'slug' => 'flood-frequency-of-amazon-river-has-increased-fivefold', 'published' => 'Yes', 'status' => 'show', 'user_type' => 'App\\User', 'user_id' => '1', 'upload_folder' => null, 'deleted_at' => null, 'created_at' => '2018-09-21 07:58:45', 'updated_at' => '2018-09-21 08:06:45'],

        ]);

        DB::table('comments')->insert([

        ]);

        DB::table('categories')->insert([

        ]);

        DB::table('tags')->insert([

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
                'parent_id'   => 3,
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
                'parent_id'   => 1,
                'key'         => null,
                'url'         => 'admin/news/comment',
                'name'        => 'Comment',
                'description' => null,
                'icon'        => 'fa fa-newspaper-o',
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
