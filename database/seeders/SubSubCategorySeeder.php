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


      ];

     SubSubCategory::insert($subsubcategory);

    }
}
