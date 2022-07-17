<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\SubCategory;
use App\Models\SubSubCategory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

   //    $category = [
   //       'Fashion','Electronics','Sweet Home','Appliances','Beauty'
   //   ];

   //   $category_hin = [
   //    //       'फैशन','इलेक्ट्रानिक्स','प्यारा घर','उपकरण','सुंदरता'
   //    //   ];

       

        Category::insert(array(
         0 => 
         array (
            'id' => 1,
            'category_name_en' => 'Fashion',
            'category_name_hin' => 'फैशन',
            'category_slug_en' => Str::slug('Fashion'),
            'category_slug_hin' => 'फैशन',
            'category_icon' => 'fa fa-list',
        ),
       1 => 
         array (
            'id' => 2,
            'category_name_en' => 'Electronics',
            'category_name_hin' => 'इलेक्ट्रानिक्स',
            'category_slug_en' => Str::slug('Electronics'),
            'category_slug_hin' => 'इलेक्ट्रानिक्स',
            'category_icon' => 'fa fa-list',
        ),
       2 => 
         array (
            'id' => 3,
            'category_name_en' => 'Sweet Home',
            'category_name_hin' => 'प्यारा घर',
            'category_slug_en' => Str::slug('Sweet Home'),
            'category_slug_hin' => 'प्यारा घर',
            'category_icon' => 'fa fa-list',
        ),
       3 => 
         array (
            'id' => 4,
            'category_name_en' => 'Appliances',
            'category_name_hin' => 'उपकरण',
            'category_slug_en' => Str::slug('Appliances'),
            'category_slug_hin' => 'उपकरण',
            'category_icon' => 'fa fa-list',
        ),
       4 => 
         array (
            'id' => 5,
            'category_name_en' => 'Beauty',
            'category_name_hin' => 'सुंदरता',
            'category_slug_en' => Str::slug('Beauty'),
            'category_slug_hin' => 'सुंदरता',
            'category_icon' => 'fa fa-list',
        ),
      ));


      //sub category
      $subcategory = [
         ['category_id' => 1,'subcategory_name_en' => 'Mans Top Ware','subcategory_slug_en' => Str::slug('Mans Top Ware'),'subcategory_name_hin' => 'मैंस टॉप वेयर' ,'subcategory_slug_hin' => 'मैंस टॉप वेयर'],

         ['category_id' => 1,'subcategory_name_en' => 'Mans Bottom Ware','subcategory_slug_en' => Str::slug('Mans Bottom Ware'),'subcategory_name_hin' => 'मैन्स बॉटम वेयर' ,'subcategory_slug_hin' => 'मैन्स बॉटम वेयर'],

         ['category_id' => 1,'subcategory_name_en' => 'Mans Footwear','subcategory_slug_en' => Str::slug('Mans Footwear'),'subcategory_name_hin' => 'महिलाओं के जूते' ,'subcategory_slug_hin' => 'महिलाओं के जूते'],
         
      ];

     SubCategory::insert($subcategory);


      //subsub category
      $subsubcategory = [
         ['category_id' => 1,'subcategory_id' => 1,'sub_subcategory_name_en' => 'Mans Tshirt','sub_subcategory_slug_en' => Str::slug('Mans Tshirt'),'sub_subcategory_name_hin' => 'मैंस टीशर्ट' ,'sub_subcategory_slug_hin' => 'मैंस टॉप वेयर'],

         ['category_id' => 1,'subcategory_id' => 1,'sub_subcategory_name_en' => 'Mans Casual Shirts','sub_subcategory_slug_en' => Str::slug('Mans Casual Shirts'),'sub_subcategory_name_hin' => 'मैंस कैजुअल शर्ट्स' ,'sub_subcategory_slug_hin' => 'मैंस कैजुअल शर्ट्स'],
      ];

     SubSubCategory::insert($subsubcategory);
   
    }
}
