<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBlogPostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blog_posts', function (Blueprint $table) {
         $table->id();
         $table->integer('category_id');
         $table->integer('sub_category_id');
         $table->integer('tag_id')->nullable();
         $table->string('blog_title')->nullable();
         $table->string('blog_title_slug')->nullable();
         $table->text('blog_description')->nullable();
         $table->string('blog_img');
         $table->integer('status')->nullable();
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
        Schema::dropIfExists('blog_posts');
    }
}
