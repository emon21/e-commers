<?php

namespace Database\Seeders;

use App\Models\Category;
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

      $category = [
         'Clothing','Electronics','Health & Beauty','Watches','Jewellery','Kids and Babies','Sports','Shoes'
     ];

         foreach ($category as $value) {

        Category::create([
            'category_name_en' => $value,
            'category_name_hin' => $value,
            'category_slug_en' => Str::slug($value),
            'category_slug_hin' => Str::slug($value),
            'category_icon' => 'fa fa-list',
        ]);
    }
    }
}
