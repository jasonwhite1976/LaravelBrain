<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
              $table->increments('id');
              $table->string('title');
              $table->string('slug')->unique();
              $table->integer('post_homepage_position')->nullable();
              $table->text('post_date');
              $table->text('post_content');
              $table->text('post_excerpt');
              $table->string('post_image');
              $table->string('post_seo_title');
              $table->string('post_seo_description');
              $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */

    public function down()
    {
        Schema::dropIfExists('posts');
    }

}
