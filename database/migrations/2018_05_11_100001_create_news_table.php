<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;

class CreateNewsTable extends Migration
{
    /*
     * Run the migrations.
     *
     * @return void
     */

    public function up()
    {

        /*
         * Table: news
         */
        Schema::create(config('litecms.news.news.model.table'), function ($table) {
            $table->increments('id');
            $table->integer('category_id')->nullable();
            $table->string('title', 250)->nullable();
            $table->text('description')->nullable();
            $table->text('images')->nullable();
            $table->text('tag', 255)->nullable();
            $table->string('slug', 200)->nullable();
            $table->enum('published', ['Yes','No'])->nullable();
            $table->enum('status', ['show','hide'])->nullable();
            $table->string('user_type', 200)->nullable();
            $table->integer('user_id')->nullable();
            $table->string('upload_folder', 100)->nullable();
            $table->softDeletes();
            $table->nullableTimestamps();
        });

        
    }

    /*
    * Reverse the migrations.
    *
    * @return void
    */

    public function down()
    {
        Schema::drop(config('litecms.news.news.model.table'));
    }
}
