<?php

namespace Database\Seeders;

use App\Models\Blog\BlogCategory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
class BlogCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $category = [

         //category Camera 

         [
            'category_name' => 'Camera',
         ],

         //category Desktops 

         [
            'category_name' => 'Desktops',
         ],

         //category Pants

         [
            'category_name' => 'Pants',
         ],

         //category Bags 
        
         [
            'category_name' => 'Bags',
         ],

         //category Hats 
         [
            'category_name' => 'Hats',
         ],

         //category Accessories 
         [
            'category_name' => 'Accessories',
         ],

      ];

     BlogCategory::insert($category);
    }
}
