<?php

namespace Database\Factories;

use App\Models\Brand;
use App\Models\Category;
use App\Models\SubCategory;
use App\Models\SubSubCategory;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
      $product_name =  $this->faker->name();
     // $id = rand(30, 600);
    //  $image = 'https://picsum.photos/id/' . $id . '/700/600';
      return [

         'brand_id' =>  Brand::inRandomOrder()->value('id'),
         'category_id' => Category::inRandomOrder()->value('id'),
         'subcategory_id' => SubCategory::inRandomOrder()->value('id'),
         'subsubcategory_id' => SubSubCategory::inRandomOrder()->value('id'),
         'product_name_en' => $product_name,
         'product_slug_en' => Str::slug($product_name),
         'product_code' => 'product - 001',
         'product_qty' =>  15,
         'product_tags_en' =>  $this->faker->name(),
         'product_size_en' =>  $this->faker->name(),
         'product_color_en' =>  $this->faker->name(),
         'selling_price' =>  1250,
         'discount_price' =>  150,
         'short_desc_en' =>  $this->faker->text(),
         'long_desc_en' =>  $this->faker->text(),
         'product_thambnil' => 'upload/product/no_image.jpg',
         'hot_deals' =>  1,
         'featured' =>  1,
         'special_offer' =>  1,
         'special_deals' =>  1,
         'status' => 1,
         
     ];
    }
}
