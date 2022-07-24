<?php

namespace Database\Factories;

use App\Models\Blog\BlogCategory;
use App\Models\Blog\BlogSubCategory;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

class BlogPostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
      $blog_title =  $this->faker->name();
      return [

         'category_id' => BlogCategory::inRandomOrder()->value('id'),
         'sub_category_id' => BlogSubCategory::inRandomOrder()->value('id'),
         'blog_title' => $blog_title,
         'blog_title_slug' => Str::slug($blog_title),
         'blog_description' => $this->faker->text(),
         'blog_img' => 'upload/product/no_image.jpg',
         'status' => 1,   
     ];
    }
}
