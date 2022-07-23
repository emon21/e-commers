<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\SubSubCategory;
use Illuminate\Support\Str;
class SubSubCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      //sub sub category
      $subsubcategory = [

         // Category of Fashion -> sub Category -> Mans Top Ware
         
         [
            'category_id' => 1,
            'subcategory_id' => 1,
            'sub_subcategory_name_en' => 'Mans Tshirt',
            'sub_subcategory_slug_en' => Str::slug('Mans Tshirt'),
            'sub_subcategory_name_hin' => 'मैंस टीशर्ट',
            'sub_subcategory_slug_hin' => 'मैंस टॉप वेयर'
         ],

         [
            'category_id' => 1,
            'subcategory_id' => 1,
            'sub_subcategory_name_en' => 'Mans Casual Shirts',
            'sub_subcategory_slug_en' => Str::slug('Mans Casual Shirts'),
            'sub_subcategory_name_hin' => 'मैंस कैजुअल शर्ट्स',
            'sub_subcategory_slug_hin' => 'मैंस कैजुअल शर्ट्स'
         ],

         [
            'category_id' => 1,
            'subcategory_id' => 1,
            'sub_subcategory_name_en' => 'Mans Kurtas',
            'sub_subcategory_slug_en' => Str::slug('Mans Kurtas'),
            'sub_subcategory_name_hin' => 'मन्स कुर्ता',
            'sub_subcategory_slug_hin' => 'मन्स कुर्ता'
         ],

         // Category of Fashion -> sub Category -> Mans Bottom Ware 

         [
            'category_id' => 1,
            'subcategory_id' => 2,
            'sub_subcategory_name_en' => 'Mans Jeans',
            'sub_subcategory_slug_en' => Str::slug('Mans Jeans'),
            'sub_subcategory_name_hin' => 'मन्स कुर्ता',
            'sub_subcategory_slug_hin' => 'मन्स कुर्ता'
         ],

         [
            'category_id' => 1,
            'subcategory_id' => 2,
            'sub_subcategory_name_en' => 'Mans Trousers',
            'sub_subcategory_slug_en' => Str::slug('Mans Trousers'),
            'sub_subcategory_name_hin' => 'मन्स कुर्ता',
            'sub_subcategory_slug_hin' => 'मन्स कुर्ता'
         ],

         [
            'category_id' => 1,
            'subcategory_id' => 2,
            'sub_subcategory_name_en' => 'Mans Cargos',
            'sub_subcategory_slug_en' => Str::slug('Mans Cargos'),
            'sub_subcategory_name_hin' => 'मन्स कुर्ता',
            'sub_subcategory_slug_hin' => 'मन्स कुर्ता'
         ],

         // Category of Fashion -> sub Category -> Mans Footwear  

         [
            'category_id' => 1,
            'subcategory_id' => 3,
            'sub_subcategory_name_en' => 'Mans Sports Shoes',
            'sub_subcategory_slug_en' => Str::slug('Mans Sports Shoes'),
            'sub_subcategory_name_hin' => 'मन्स कुर्ता',
            'sub_subcategory_slug_hin' => 'मन्स कुर्ता'
         ],

         [
            'category_id' => 1,
            'subcategory_id' => 3,
            'sub_subcategory_name_en' => 'Mans Casual Shoes',
            'sub_subcategory_slug_en' => Str::slug('Mans Casual Shoes'),
            'sub_subcategory_name_hin' => 'मन्स कुर्ता',
            'sub_subcategory_slug_hin' => 'मन्स कुर्ता'
         ],
         
         [
            'category_id' => 1,
            'subcategory_id' => 3,
            'sub_subcategory_name_en' => 'Mans Formal Shoes',
            'sub_subcategory_slug_en' => Str::slug('Mans Formal Shoes'),
            'sub_subcategory_name_hin' => 'मन्स कुर्ता',
            'sub_subcategory_slug_hin' => 'मन्स कुर्ता'
         ],

         // Category of Fashion -> sub Category -> Women Footwear  

         [
            'category_id' => 1,
            'subcategory_id' => 4,
            'sub_subcategory_name_en' => 'Women Flats',
            'sub_subcategory_slug_en' => Str::slug('Women Flats'),
            'sub_subcategory_name_hin' => 'मन्स कुर्ता',
            'sub_subcategory_slug_hin' => 'मन्स कुर्ता'
         ],

         [
            'category_id' => 1,
            'subcategory_id' => 4,
            'sub_subcategory_name_en' => 'Women Heels',
            'sub_subcategory_slug_en' => Str::slug('Women Heels'),
            'sub_subcategory_name_hin' => 'मन्स कुर्ता',
            'sub_subcategory_slug_hin' => 'मन्स कुर्ता'
         ],

         [
            'category_id' => 1,
            'subcategory_id' => 4,
            'sub_subcategory_name_en' => 'Woman Sheakers',
            'sub_subcategory_slug_en' => Str::slug('Woman Sheakers'),
            'sub_subcategory_name_hin' => 'मन्स कुर्ता',
            'sub_subcategory_slug_hin' => 'मन्स कुर्ता'
         ],

         // Category of Electronics -> sub Category -> Computer Peripherals  

         [
            'category_id' => 2,
            'subcategory_id' => 5,
            'sub_subcategory_name_en' => 'Printers',
            'sub_subcategory_slug_en' => Str::slug('Printers'),
            'sub_subcategory_name_hin' => 'मन्स कुर्ता',
            'sub_subcategory_slug_hin' => 'मन्स कुर्ता'
         ],

         [
            'category_id' => 2,
            'subcategory_id' => 5,
            'sub_subcategory_name_en' => 'Monitors',
            'sub_subcategory_slug_en' => Str::slug('Monitors'),
            'sub_subcategory_name_hin' => 'मन्स कुर्ता',
            'sub_subcategory_slug_hin' => 'मन्स कुर्ता'
         ],

         [
            'category_id' => 2,
            'subcategory_id' => 5,
            'sub_subcategory_name_en' => 'Projectors',
            'sub_subcategory_slug_en' => Str::slug('Projectors'),
            'sub_subcategory_name_hin' => 'मन्स कुर्ता',
            'sub_subcategory_slug_hin' => 'मन्स कुर्ता'
         ],

         // Category of Electronics -> sub Category -> Mobile Accessory  

         [
            'category_id' => 2,
            'subcategory_id' => 6,
            'sub_subcategory_name_en' => 'Plain Cases',
            'sub_subcategory_slug_en' => Str::slug('Plain Cases'),
            'sub_subcategory_name_hin' => 'मन्स कुर्ता',
            'sub_subcategory_slug_hin' => 'मन्स कुर्ता'
         ],

         [
            'category_id' => 2,
            'subcategory_id' => 6,
            'sub_subcategory_name_en' => 'Plain Cases',
            'sub_subcategory_slug_en' => Str::slug('Plain Cases'),
            'sub_subcategory_name_hin' => 'मन्स कुर्ता',
            'sub_subcategory_slug_hin' => 'मन्स कुर्ता'
         ],

         [
            'category_id' => 2,
            'subcategory_id' => 6,
            'sub_subcategory_name_en' => 'Screen Guards',
            'sub_subcategory_slug_en' => Str::slug('Screen Guards'),
            'sub_subcategory_name_hin' => 'मन्स कुर्ता',
            'sub_subcategory_slug_hin' => 'मन्स कुर्ता'
         ],

         // Category of Electronics -> sub Category -> Gaming   

         [
            'category_id' => 2,
            'subcategory_id' => 7,
            'sub_subcategory_name_en' => 'Gaming Mouse',
            'sub_subcategory_slug_en' => Str::slug('Gaming Mouse'),
            'sub_subcategory_name_hin' => 'मन्स कुर्ता',
            'sub_subcategory_slug_hin' => 'मन्स कुर्ता'
         ],

         [
            'category_id' => 2,
            'subcategory_id' => 7,
            'sub_subcategory_name_en' => 'Gaming Keyboars',
            'sub_subcategory_slug_en' => Str::slug('Gaming Keyboars'),
            'sub_subcategory_name_hin' => 'मन्स कुर्ता',
            'sub_subcategory_slug_hin' => 'मन्स कुर्ता'
         ],

         [
            'category_id' => 2,
            'subcategory_id' => 7,
            'sub_subcategory_name_en' => 'Gaming Mousepads',
            'sub_subcategory_slug_en' => Str::slug('Gaming Mousepads'),
            'sub_subcategory_name_hin' => 'मन्स कुर्ता',
            'sub_subcategory_slug_hin' => 'मन्स कुर्ता'
         ],

         // Category of Sweet Home -> sub Category -> Home Furnishings    

         [
            'category_id' => 3,
            'subcategory_id' => 8,
            'sub_subcategory_name_en' => 'Bed Liners',
            'sub_subcategory_slug_en' => Str::slug('Bed Liners'),
            'sub_subcategory_name_hin' => 'मन्स कुर्ता',
            'sub_subcategory_slug_hin' => 'मन्स कुर्ता'
         ],

         [
            'category_id' => 3,
            'subcategory_id' => 8,
            'sub_subcategory_name_en' => 'Bedsheets',
            'sub_subcategory_slug_en' => Str::slug('Bedsheets'),
            'sub_subcategory_name_hin' => 'मन्स कुर्ता',
            'sub_subcategory_slug_hin' => 'मन्स कुर्ता'
         ],

         [
            'category_id' => 3,
            'subcategory_id' => 8,
            'sub_subcategory_name_en' => 'Blankets',
            'sub_subcategory_slug_en' => Str::slug('Blankets'),
            'sub_subcategory_name_hin' => 'मन्स कुर्ता',
            'sub_subcategory_slug_hin' => 'मन्स कुर्ता'
         ],

         // Category of Sweet Home -> sub Category -> Living Room    

         [
            'category_id' => 3,
            'subcategory_id' => 9,
            'sub_subcategory_name_en' => 'Tv Units',
            'sub_subcategory_slug_en' => Str::slug('Tv Units'),
            'sub_subcategory_name_hin' => 'मन्स कुर्ता',
            'sub_subcategory_slug_hin' => 'मन्स कुर्ता'
         ],

         [
            'category_id' => 3,
            'subcategory_id' => 9,
            'sub_subcategory_name_en' => 'Dining Sets',
            'sub_subcategory_slug_en' => Str::slug('Dining Sets'),
            'sub_subcategory_name_hin' => 'मन्स कुर्ता',
            'sub_subcategory_slug_hin' => 'मन्स कुर्ता'
         ],

         [
            'category_id' => 3,
            'subcategory_id' => 9,
            'sub_subcategory_name_en' => 'Coffee Tables',
            'sub_subcategory_slug_en' => Str::slug('Coffee Tables'),
            'sub_subcategory_name_hin' => 'मन्स कुर्ता',
            'sub_subcategory_slug_hin' => 'मन्स कुर्ता'
         ],

         // Category of Sweet Home -> sub Category -> Home Decor   

         [
            'category_id' => 3,
            'subcategory_id' => 10,
            'sub_subcategory_name_en' => 'Lightings',
            'sub_subcategory_slug_en' => Str::slug('Lightings'),
            'sub_subcategory_name_hin' => 'मन्स कुर्ता',
            'sub_subcategory_slug_hin' => 'मन्स कुर्ता'
         ],

         [
            'category_id' => 3,
            'subcategory_id' => 10,
            'sub_subcategory_name_en' => 'Clocks',
            'sub_subcategory_slug_en' => Str::slug('Clocks'),
            'sub_subcategory_name_hin' => 'मन्स कुर्ता',
            'sub_subcategory_slug_hin' => 'मन्स कुर्ता'
         ],

         [
            'category_id' => 3,
            'subcategory_id' => 10,
            'sub_subcategory_name_en' => 'Wall Decor',
            'sub_subcategory_slug_en' => Str::slug('Wall Decor'),
            'sub_subcategory_name_hin' => 'मन्स कुर्ता',
            'sub_subcategory_slug_hin' => 'मन्स कुर्ता'
         ],

         // Category of Appliances -> sub Category -> Televisions    

         [
            'category_id' => 4,
            'subcategory_id' => 11,
            'sub_subcategory_name_en' => 'Big Screen TVs',
            'sub_subcategory_slug_en' => Str::slug('Big Screen TVs'),
            'sub_subcategory_name_hin' => 'मन्स कुर्ता',
            'sub_subcategory_slug_hin' => 'मन्स कुर्ता'
         ],

         [
            'category_id' => 4,
            'subcategory_id' => 11,
            'sub_subcategory_name_en' => 'Smart TVs',
            'sub_subcategory_slug_en' => Str::slug('Smart TVs'),
            'sub_subcategory_name_hin' => 'मन्स कुर्ता',
            'sub_subcategory_slug_hin' => 'मन्स कुर्ता'
         ],

         [
            'category_id' => 4,
            'subcategory_id' => 11,
            'sub_subcategory_name_en' => 'OLED TVs',
            'sub_subcategory_slug_en' => Str::slug('OLED TVs'),
            'sub_subcategory_name_hin' => 'मन्स कुर्ता',
            'sub_subcategory_slug_hin' => 'मन्स कुर्ता'
         ],

         // Category of Appliances -> sub Category -> Washing Machines    

         [
            'category_id' => 4,
            'subcategory_id' => 12,
            'sub_subcategory_name_en' => 'Washer Dryers',
            'sub_subcategory_slug_en' => Str::slug('Washer Dryers'),
            'sub_subcategory_name_hin' => 'मन्स कुर्ता',
            'sub_subcategory_slug_hin' => 'मन्स कुर्ता'
         ],

         [
            'category_id' => 4,
            'subcategory_id' => 12,
            'sub_subcategory_name_en' => 'Washer Only',
            'sub_subcategory_slug_en' => Str::slug('Washer Only'),
            'sub_subcategory_name_hin' => 'मन्स कुर्ता',
            'sub_subcategory_slug_hin' => 'मन्स कुर्ता'
         ],

         [
            'category_id' => 4,
            'subcategory_id' => 12,
            'sub_subcategory_name_en' => 'Energy Efficient',
            'sub_subcategory_slug_en' => Str::slug('Energy Efficient'),
            'sub_subcategory_name_hin' => 'मन्स कुर्ता',
            'sub_subcategory_slug_hin' => 'मन्स कुर्ता'
         ],

         // Category of Appliances -> sub Category -> Refrigerators   

         [
            'category_id' => 4,
            'subcategory_id' => 13,
            'sub_subcategory_name_en' => 'Single Door',
            'sub_subcategory_slug_en' => Str::slug('Single Door'),
            'sub_subcategory_name_hin' => 'मन्स कुर्ता',
            'sub_subcategory_slug_hin' => 'मन्स कुर्ता'
         ],

         [
            'category_id' => 4,
            'subcategory_id' => 13,
            'sub_subcategory_name_en' => 'Double Door',
            'sub_subcategory_slug_en' => Str::slug('Double Door'),
            'sub_subcategory_name_hin' => 'मन्स कुर्ता',
            'sub_subcategory_slug_hin' => 'मन्स कुर्ता'
         ],

         [
            'category_id' => 4,
            'subcategory_id' => 13,
            'sub_subcategory_name_en' => 'Mini Rerigerators',
            'sub_subcategory_slug_en' => Str::slug('Mini Rerigerators'),
            'sub_subcategory_name_hin' => 'मन्स कुर्ता',
            'sub_subcategory_slug_hin' => 'मन्स कुर्ता'
         ],

         // Category of Beauty -> sub Category -> Beauty and Personal Care   

         [
            'category_id' => 5,
            'subcategory_id' => 14,
            'sub_subcategory_name_en' => 'Eys Makeup',
            'sub_subcategory_slug_en' => Str::slug('Eys Makeup'),
            'sub_subcategory_name_hin' => 'मन्स कुर्ता',
            'sub_subcategory_slug_hin' => 'मन्स कुर्ता'
         ],

         [
            'category_id' => 5,
            'subcategory_id' => 14,
            'sub_subcategory_name_en' => 'Lip Makeup',
            'sub_subcategory_slug_en' => Str::slug('Lip Makeup'),
            'sub_subcategory_name_hin' => 'मन्स कुर्ता',
            'sub_subcategory_slug_hin' => 'मन्स कुर्ता'
         ],

         [
            'category_id' => 5,
            'subcategory_id' => 14,
            'sub_subcategory_name_en' => 'Hair Care',
            'sub_subcategory_slug_en' => Str::slug('Hair Care'),
            'sub_subcategory_name_hin' => 'मन्स कुर्ता',
            'sub_subcategory_slug_hin' => 'मन्स कुर्ता'
         ],

         // Category of Beauty -> sub Category -> Food and Drinks   

         [
            'category_id' => 5,
            'subcategory_id' => 15,
            'sub_subcategory_name_en' => 'Beverages',
            'sub_subcategory_slug_en' => Str::slug('Beverages'),
            'sub_subcategory_name_hin' => 'मन्स कुर्ता',
            'sub_subcategory_slug_hin' => 'मन्स कुर्ता'
         ],

         [
            'category_id' => 5,
            'subcategory_id' => 15,
            'sub_subcategory_name_en' => 'Chocolates',
            'sub_subcategory_slug_en' => Str::slug('Chocolates'),
            'sub_subcategory_name_hin' => 'मन्स कुर्ता',
            'sub_subcategory_slug_hin' => 'मन्स कुर्ता'
         ],

         [
            'category_id' => 5,
            'subcategory_id' => 15,
            'sub_subcategory_name_en' => 'Snacks',
            'sub_subcategory_slug_en' => Str::slug('Snacks'),
            'sub_subcategory_name_hin' => 'मन्स कुर्ता',
            'sub_subcategory_slug_hin' => 'मन्स कुर्ता'
         ],

         // Category of Beauty -> sub Category -> Bady Care  

         [
            'category_id' => 5,
            'subcategory_id' => 16,
            'sub_subcategory_name_en' => 'Baby Diapers',
            'sub_subcategory_slug_en' => Str::slug('Baby Diapers'),
            'sub_subcategory_name_hin' => 'मन्स कुर्ता',
            'sub_subcategory_slug_hin' => 'मन्स कुर्ता'
         ],

         [
            'category_id' => 5,
            'subcategory_id' => 16,
            'sub_subcategory_name_en' => 'Baby Wipes',
            'sub_subcategory_slug_en' => Str::slug('Baby Wipes'),
            'sub_subcategory_name_hin' => 'मन्स कुर्ता',
            'sub_subcategory_slug_hin' => 'मन्स कुर्ता'
         ],

         [
            'category_id' => 5,
            'subcategory_id' => 16,
            'sub_subcategory_name_en' => 'Baby Food',
            'sub_subcategory_slug_en' => Str::slug('Baby Food'),
            'sub_subcategory_name_hin' => 'मन्स कुर्ता',
            'sub_subcategory_slug_hin' => 'मन्स कुर्ता'
         ],

      ];

     SubSubCategory::insert($subsubcategory);

    }
}
