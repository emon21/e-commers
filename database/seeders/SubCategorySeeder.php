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
         
         // Category of Fashion
         
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

         // Category of Electronics

         [
            'category_id' => 2,
            'subcategory_name_en' => 'Computer Peripherals',
            'subcategory_slug_en' => Str::slug('Computer Peripherals'),
            'subcategory_name_hin' => 'मैंस टॉप वेयर',
            'subcategory_slug_hin' => 'मैंस टॉप वेयर'
          ],

         [
            'category_id' => 2,
            'subcategory_name_en' => 'Mobile Accessory',
            'subcategory_slug_en' => Str::slug('Mobile Accessory'),
            'subcategory_name_hin' => 'मैन्स बॉटम वेयर',
            'subcategory_slug_hin' => 'मैन्स बॉटम वेयर'
          ],

         [
            'category_id' => 2,
            'subcategory_name_en' => 'Gaming',
            'subcategory_slug_en' => Str::slug('Gaming'),
            'subcategory_name_hin' => 'महिलाओं के जूते',
            'subcategory_slug_hin' => 'महिलाओं के जूते'
          ],


         // Category of Sweet Home

         [
            'category_id' => 3,
            'subcategory_name_en' => 'Home Furnishings',
            'subcategory_slug_en' => Str::slug('Home Furnishings'),
            'subcategory_name_hin' => 'मैंस टॉप वेयर',
            'subcategory_slug_hin' => 'मैंस टॉप वेयर'
          ],

         [
            'category_id' => 3,
            'subcategory_name_en' => 'Living Room',
            'subcategory_slug_en' => Str::slug('Living Room'),
            'subcategory_name_hin' => 'मैन्स बॉटम वेयर',
            'subcategory_slug_hin' => 'मैन्स बॉटम वेयर'
          ],

         [
            'category_id' => 3,
            'subcategory_name_en' => 'Home Decor',
            'subcategory_slug_en' => Str::slug('Home Decor'),
            'subcategory_name_hin' => 'महिलाओं के जूते',
            'subcategory_slug_hin' => 'महिलाओं के जूते'
          ],

         // Category of Appliances

         [
            'category_id' => 4,
            'subcategory_name_en' => 'Televisions',
            'subcategory_slug_en' => Str::slug('Televisions'),
            'subcategory_name_hin' => 'मैंस टॉप वेयर',
            'subcategory_slug_hin' => 'मैंस टॉप वेयर'
          ],

         [
            'category_id' => 4,
            'subcategory_name_en' => 'Washing Machines',
            'subcategory_slug_en' => Str::slug('Washing Machines'),
            'subcategory_name_hin' => 'मैन्स बॉटम वेयर',
            'subcategory_slug_hin' => 'मैन्स बॉटम वेयर'
          ],

         [
            'category_id' => 4,
            'subcategory_name_en' => 'Refrigerators',
            'subcategory_slug_en' => Str::slug('Refrigerators'),
            'subcategory_name_hin' => 'महिलाओं के जूते',
            'subcategory_slug_hin' => 'महिलाओं के जूते'
          ],

         // Category of Beauty 

         [
            'category_id' => 5,
            'subcategory_name_en' => 'Beauty and Personal Care',
            'subcategory_slug_en' => Str::slug('Beauty and Personal Care'),
            'subcategory_name_hin' => 'मैंस टॉप वेयर',
            'subcategory_slug_hin' => 'मैंस टॉप वेयर'
          ],

         [
            'category_id' => 5,
            'subcategory_name_en' => 'Food and Drinks',
            'subcategory_slug_en' => Str::slug('Food and Drinks'),
            'subcategory_name_hin' => 'मैन्स बॉटम वेयर',
            'subcategory_slug_hin' => 'मैन्स बॉटम वेयर'
          ],

         [
            'category_id' => 5,
            'subcategory_name_en' => 'Bady Care',
            'subcategory_slug_en' => Str::slug('Bady Care'),
            'subcategory_name_hin' => 'महिलाओं के जूते',
            'subcategory_slug_hin' => 'महिलाओं के जूते'
          ],

         
      ];

     SubCategory::insert($subcategory);
    }
}
