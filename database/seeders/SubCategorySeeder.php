<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\SubCategory;
use Illuminate\Support\Str;
class SubCategorySeeder extends Seeder
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
         
         [
            'category_id' => 1,
            'subcategory_name_en' => 'Mans Top Ware',
            'subcategory_slug_en' => Str::slug('Mans Top Ware'),
            'subcategory_name_hin' => 'मैंस टॉप वेयर',
            'subcategory_slug_hin' => 'मैंस टॉप वेयर'
          ],

         [
            'category_id' => 1,
            'subcategory_name_en' => 'Mans Bottom Ware',
            'subcategory_slug_en' => Str::slug('Mans Bottom Ware'),
            'subcategory_name_hin' => 'मैन्स बॉटम वेयर',
            'subcategory_slug_hin' => 'मैन्स बॉटम वेयर'
          ],

         [
            'category_id' => 1,
            'subcategory_name_en' => 'Mans Footwear',
            'subcategory_slug_en' => Str::slug('Mans Footwear'),
            'subcategory_name_hin' => 'महिलाओं के जूते',
            'subcategory_slug_hin' => 'महिलाओं के जूते'
          ],

         [
            'category_id' => 1,
            'subcategory_name_en' => 'Women Footwear',
            'subcategory_slug_en' => Str::slug('Women Footwear'),
            'subcategory_name_hin' => 'महिलाओं के जूते',
            'subcategory_slug_hin' => 'महिलाओं के जूते'
         ],
         
      ];

     SubCategory::insert($subcategory);
    }
}
