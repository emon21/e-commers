<?php

namespace Database\Seeders;

use App\Models\Brand;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      
      //Brand category
      $brand = [
         [
         'brand_name_en' => 'Apple',
         'brand_slug_en' => Str::slug('Apple'),
         'brand_name_hin' => 'सेब',
         'brand_slug_hin' => 'सेब',
         'brand_image' => 'upload/brand/default.png'
         ],
         [
            'brand_name_en' => 'Oppo',
            'brand_slug_en' => Str::slug('Oppo'),
            'brand_name_hin' => 'विपक्ष',
            'brand_slug_hin' => 'विपक्ष',
            'brand_image' => 'upload/brand/default.png'
         ],
         [
            'brand_name_en' => 'samsung',
            'brand_slug_en' => Str::slug('samsung'),
            'brand_name_hin' => 'सैमसंग',
            'brand_slug_hin' => 'सैमसंग',
            'brand_image' => 'upload/brand/default.png'
         ],
         [
            'brand_name_en' => 'Vivo',
            'brand_slug_en' => Str::slug('Vivo'),
            'brand_name_hin' => 'विवो',
            'brand_slug_hin' => 'विवो',
            'brand_image' => 'upload/brand/default.png'
         ]

      ];

     Brand::insert($brand);
    }
}
