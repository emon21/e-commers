<?php

namespace Database\Seeders;

use App\Models\Blog\BlogCategory;
use App\Models\Blog\BlogPost;
use App\Models\Blog\BlogSubCategory;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class BlogPostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $post_name =  'samsung Led Monitor';
      $post = [

       [
         
          'category_id' => BlogCategory::inRandomOrder()->value('id'),
          'sub_category_id' => BlogSubCategory::inRandomOrder()->value('id'),
          'tag_id' => 1,
          'blog_title' => $post_name,
          'blog_title_slug' => Str::slug($post_name),
          'blog_description' => 'this is test',
          'blog_img' => 'upload/blog/blog_big_01.jpg',
          'status' => 1,
        ],

        [
         'category_id' => BlogCategory::inRandomOrder()->value('id'),
         'sub_category_id' => BlogSubCategory::inRandomOrder()->value('id'),
         'tag_id' => 1,
         'blog_title' => $post_name,
         'blog_title_slug' => Str::slug($post_name),
         'blog_description' => 'this is test',
         'blog_img' => 'upload/blog/blog_big_02.jpg',
         'status' => 1,
        ],

        [
         'category_id' => BlogCategory::inRandomOrder()->value('id'),
         'sub_category_id' => BlogSubCategory::inRandomOrder()->value('id'),
         'tag_id' => 1,
         'blog_title' => $post_name,
         'blog_title_slug' => Str::slug($post_name),
         'blog_description' => 'this is test',
         'blog_img' => 'upload/blog/blog_big_03.jpg',
         'status' => 1,
        ],

        [
         'category_id' => BlogCategory::inRandomOrder()->value('id'),
         'sub_category_id' => BlogSubCategory::inRandomOrder()->value('id'),
         'tag_id' => 1,
         'blog_title' => $post_name,
         'blog_title_slug' => Str::slug($post_name),
         'blog_description' => 'this is test',
         'blog_img' => 'upload/blog/post1.jpg',
         'status' => 1,
        ],

        [
         'category_id' => BlogCategory::inRandomOrder()->value('id'),
         'sub_category_id' => BlogSubCategory::inRandomOrder()->value('id'),
         'tag_id' => 1,
         'blog_title' => $post_name,
         'blog_title_slug' => Str::slug($post_name),
         'blog_description' => 'this is test',
         'blog_img' => 'upload/blog/post2.jpg',
         'status' => 1,
        ],

      ];
      BlogPost::insert($post);
    }
}
