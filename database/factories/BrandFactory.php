<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
class BrandFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */

    public function definition()
    {
      $brand_name_en =  $this->faker->name();

        return [
        
         'brand_name_en' => $brand_name_en,
         'brand_slug_en' => Str::slug($brand_name_en),

         'brand_name_hin' => $brand_name_en,
         'brand_slug_hin' => Str::slug($brand_name_en),
         'brand_image' =>  'upload/brand/no_image.jpg',

        ];
    }
}
