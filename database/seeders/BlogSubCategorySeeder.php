<?php

namespace Database\Seeders;

use App\Models\Blog\BlogSubCategory;
use Illuminate\Database\Seeder;

class BlogSubCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //sub category
      $subcategory = [
         
         // Category of Camera
         
         [
            'category_id' => 1,
            'sub_category_name' => 'gaming',
            
          ],

          [
            'category_id' => 1,
            'sub_category_name' => 'office',
            
          ],

          [
            'category_id' => 1,
            'sub_category_name' => 'kids',
            
          ],

          [
            'category_id' => 1,
            'sub_category_name' => 'for women',
            
          ],

         // Category of Desktops

         [
            'category_id' => 2,
            'sub_category_name' => 'gaming',
            
          ],

          [
            'category_id' => 2,
            'sub_category_name' => 'office',
            
          ],

          [
            'category_id' => 2,
            'sub_category_name' => 'kids',
            
          ],

          [
            'category_id' => 2,
            'sub_category_name' => 'for women',
            
          ],


         // Category of Pants

         [
            'category_id' => 3,
            'sub_category_name' => 'gaming',
            
          ],

          [
            'category_id' => 3,
            'sub_category_name' => 'office',
            
          ],

          [
            'category_id' => 3,
            'sub_category_name' => 'kids',
            
          ],

          [
            'category_id' => 3,
            'sub_category_name' => 'for women',
            
          ],

         // Category of Bags

         [
            'category_id' => 4,
            'sub_category_name' => 'gaming',
            
          ],

          [
            'category_id' => 4,
            'sub_category_name' => 'office',
            
          ],

          [
            'category_id' => 4,
            'sub_category_name' => 'kids',
            
          ],

          [
            'category_id' => 4,
            'sub_category_name' => 'for women',
            
          ],

         // Category of Hats 

         [
            'category_id' => 5,
            'sub_category_name' => 'gaming',
            
          ],

          [
            'category_id' => 5,
            'sub_category_name' => 'office',
            
          ],

          [
            'category_id' => 5,
            'sub_category_name' => 'kids',
            
          ],

          [
            'category_id' => 5,
            'sub_category_name' => 'for women',
            
          ],

         // Category of Accessories 

         [
            'category_id' => 6,
            'sub_category_name' => 'gaming',
            
          ],

          [
            'category_id' => 6,
            'sub_category_name' => 'office',
            
          ],

          [
            'category_id' => 6,
            'sub_category_name' => 'kids',
            
          ],

          [
            'category_id' => 6,
            'sub_category_name' => 'for women',
            
          ],

         
      ];

     BlogSubCategory::insert($subcategory);
    }
}
