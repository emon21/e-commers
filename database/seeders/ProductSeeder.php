<?php

namespace Database\Seeders;

use App\Models\Product;
use App\Models\Brand;
use App\Models\Category;
use App\Models\SubCategory;
use App\Models\SubSubCategory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

      $product_name =  'samsung Led Monitor';
        $product = [

         [
            'brand_id' =>  Brand::inRandomOrder()->value('id'),
            'category_id' => Category::inRandomOrder()->value('id'),
            'subcategory_id' => SubCategory::inRandomOrder()->value('id'),
            'subsubcategory_id' => SubSubCategory::inRandomOrder()->value('id'),
            'product_name_en' => $product_name,
            'product_slug_en' => Str::slug($product_name),
            'product_code' => 'product - 001',
            'product_qty' =>  15,
            'product_tags_en' =>  'small,large',
            'product_size_en' =>  'small',
            'product_color_en' => 'red,green,blue',
            'selling_price' =>  1250,
            'discount_price' =>  150,
            'short_desc_en' => 'this is test',
            'long_desc_en' => 'Product Description',
            'product_thambnil' => 'upload/product/p1.jpg',
            'hot_deals' =>  1,
            'featured' =>  1,
            'special_offer' =>  1,
            'special_deals' =>  1,
            'status' => 1,
          ],

          [
            'brand_id' =>  Brand::inRandomOrder()->value('id'),
            'category_id' => Category::inRandomOrder()->value('id'),
            'subcategory_id' => SubCategory::inRandomOrder()->value('id'),
            'subsubcategory_id' => SubSubCategory::inRandomOrder()->value('id'),
            'product_name_en' => $product_name,
            'product_slug_en' => Str::slug($product_name),
            'product_code' => 'product - 001',
            'product_qty' =>  15,
            'product_tags_en' =>  'small,large',
            'product_size_en' =>  'small',
            'product_color_en' => 'red,green,blue',
            'selling_price' =>  1250,
            'discount_price' =>  150,
            'short_desc_en' => 'this is test',
            'long_desc_en' => 'Product Description',
            'product_thambnil' => 'upload/product/p2.jpg',
            'hot_deals' =>  1,
            'featured' =>  1,
            'special_offer' =>  1,
            'special_deals' =>  1,
            'status' => 1,
          ],

          [
            'brand_id' =>  Brand::inRandomOrder()->value('id'),
            'category_id' => Category::inRandomOrder()->value('id'),
            'subcategory_id' => SubCategory::inRandomOrder()->value('id'),
            'subsubcategory_id' => SubSubCategory::inRandomOrder()->value('id'),
            'product_name_en' => $product_name,
            'product_slug_en' => Str::slug($product_name),
            'product_code' => 'product - 001',
            'product_qty' =>  15,
            'product_tags_en' =>  'small,large',
            'product_size_en' =>  'small',
            'product_color_en' => 'red,green,blue',
            'selling_price' =>  1250,
            'discount_price' =>  150,
            'short_desc_en' => 'this is test',
            'long_desc_en' => 'Product Description',
            'product_thambnil' => 'upload/product/p3.jpg',
            'hot_deals' =>  1,
            'featured' =>  1,
            'special_offer' =>  1,
            'special_deals' =>  1,
            'status' => 1,
          ],

          [
            'brand_id' =>  Brand::inRandomOrder()->value('id'),
            'category_id' => Category::inRandomOrder()->value('id'),
            'subcategory_id' => SubCategory::inRandomOrder()->value('id'),
            'subsubcategory_id' => SubSubCategory::inRandomOrder()->value('id'),
            'product_name_en' => $product_name,
            'product_slug_en' => Str::slug($product_name),
            'product_code' => 'product - 001',
            'product_qty' =>  15,
            'product_tags_en' =>  'small,large',
            'product_size_en' =>  'small',
            'product_color_en' => 'red,green,blue',
            'selling_price' =>  1250,
            'discount_price' =>  150,
            'short_desc_en' => 'this is test',
            'long_desc_en' => 'Product Description',
            'product_thambnil' => 'upload/product/p4.jpg',
            'hot_deals' =>  1,
            'featured' =>  1,
            'special_offer' =>  1,
            'special_deals' =>  1,
            'status' => 1,
          ],

          [
            'brand_id' =>  Brand::inRandomOrder()->value('id'),
            'category_id' => Category::inRandomOrder()->value('id'),
            'subcategory_id' => SubCategory::inRandomOrder()->value('id'),
            'subsubcategory_id' => SubSubCategory::inRandomOrder()->value('id'),
            'product_name_en' => $product_name,
            'product_slug_en' => Str::slug($product_name),
            'product_code' => 'product - 001',
            'product_qty' =>  15,
            'product_tags_en' =>  'small,large',
            'product_size_en' =>  'small',
            'product_color_en' => 'red,green,blue',
            'selling_price' =>  1250,
            'discount_price' =>  150,
            'short_desc_en' => 'this is test',
            'long_desc_en' => 'Product Description',
            'product_thambnil' => 'upload/product/p5.jpg',
            'hot_deals' =>  1,
            'featured' =>  1,
            'special_offer' =>  1,
            'special_deals' =>  1,
            'status' => 1,
          ],

          [
            'brand_id' =>  Brand::inRandomOrder()->value('id'),
            'category_id' => Category::inRandomOrder()->value('id'),
            'subcategory_id' => SubCategory::inRandomOrder()->value('id'),
            'subsubcategory_id' => SubSubCategory::inRandomOrder()->value('id'),
            'product_name_en' => $product_name,
            'product_slug_en' => Str::slug($product_name),
            'product_code' => 'product - 001',
            'product_qty' =>  15,
            'product_tags_en' =>  'small,large',
            'product_size_en' =>  'small',
            'product_color_en' => 'red,green,blue',
            'selling_price' =>  1250,
            'discount_price' =>  150,
            'short_desc_en' => 'this is test',
            'long_desc_en' => 'Product Description',
            'product_thambnil' => 'upload/product/p6.jpg',
            'hot_deals' =>  1,
            'featured' =>  1,
            'special_offer' =>  1,
            'special_deals' =>  1,
            'status' => 1,
          ],

          [
            'brand_id' =>  Brand::inRandomOrder()->value('id'),
            'category_id' => Category::inRandomOrder()->value('id'),
            'subcategory_id' => SubCategory::inRandomOrder()->value('id'),
            'subsubcategory_id' => SubSubCategory::inRandomOrder()->value('id'),
            'product_name_en' => $product_name,
            'product_slug_en' => Str::slug($product_name),
            'product_code' => 'product - 001',
            'product_qty' =>  15,
            'product_tags_en' =>  'small,large',
            'product_size_en' =>  'small',
            'product_color_en' => 'red,green,blue',
            'selling_price' =>  1250,
            'discount_price' =>  150,
            'short_desc_en' => 'this is test',
            'long_desc_en' => 'Product Description',
            'product_thambnil' => 'upload/product/p6.jpg',
            'hot_deals' =>  1,
            'featured' =>  1,
            'special_offer' =>  1,
            'special_deals' =>  1,
            'status' => 1,
          ],

          [
            'brand_id' =>  Brand::inRandomOrder()->value('id'),
            'category_id' => Category::inRandomOrder()->value('id'),
            'subcategory_id' => SubCategory::inRandomOrder()->value('id'),
            'subsubcategory_id' => SubSubCategory::inRandomOrder()->value('id'),
            'product_name_en' => $product_name,
            'product_slug_en' => Str::slug($product_name),
            'product_code' => 'product - 001',
            'product_qty' =>  15,
            'product_tags_en' =>  'small,large',
            'product_size_en' =>  'small',
            'product_color_en' => 'red,green,blue',
            'selling_price' =>  1250,
            'discount_price' =>  150,
            'short_desc_en' => 'this is test',
            'long_desc_en' => 'Product Description',
            'product_thambnil' => 'upload/product/p7.jpg',
            'hot_deals' =>  1,
            'featured' =>  1,
            'special_offer' =>  1,
            'special_deals' =>  1,
            'status' => 1,
          ],

          [
            'brand_id' =>  Brand::inRandomOrder()->value('id'),
            'category_id' => Category::inRandomOrder()->value('id'),
            'subcategory_id' => SubCategory::inRandomOrder()->value('id'),
            'subsubcategory_id' => SubSubCategory::inRandomOrder()->value('id'),
            'product_name_en' => $product_name,
            'product_slug_en' => Str::slug($product_name),
            'product_code' => 'product - 001',
            'product_qty' =>  15,
            'product_tags_en' =>  'small,large',
            'product_size_en' =>  'small',
            'product_color_en' => 'red,green,blue',
            'selling_price' =>  1250,
            'discount_price' =>  150,
            'short_desc_en' => 'this is test',
            'long_desc_en' => 'Product Description',
            'product_thambnil' => 'upload/product/p8.jpg',
            'hot_deals' =>  1,
            'featured' =>  1,
            'special_offer' =>  1,
            'special_deals' =>  1,
            'status' => 1,
          ],

          [
            'brand_id' =>  Brand::inRandomOrder()->value('id'),
            'category_id' => Category::inRandomOrder()->value('id'),
            'subcategory_id' => SubCategory::inRandomOrder()->value('id'),
            'subsubcategory_id' => SubSubCategory::inRandomOrder()->value('id'),
            'product_name_en' => $product_name,
            'product_slug_en' => Str::slug($product_name),
            'product_code' => 'product - 001',
            'product_qty' =>  15,
            'product_tags_en' =>  'small,large',
            'product_size_en' =>  'small',
            'product_color_en' => 'red,green,blue',
            'selling_price' =>  1250,
            'discount_price' =>  150,
            'short_desc_en' => 'this is test',
            'long_desc_en' => 'Product Description',
            'product_thambnil' => 'upload/product/p9.jpg',
            'hot_deals' =>  1,
            'featured' =>  1,
            'special_offer' =>  1,
            'special_deals' =>  1,
            'status' => 1,
          ],

          [
            'brand_id' =>  Brand::inRandomOrder()->value('id'),
            'category_id' => Category::inRandomOrder()->value('id'),
            'subcategory_id' => SubCategory::inRandomOrder()->value('id'),
            'subsubcategory_id' => SubSubCategory::inRandomOrder()->value('id'),
            'product_name_en' => $product_name,
            'product_slug_en' => Str::slug($product_name),
            'product_code' => 'product - 001',
            'product_qty' =>  15,
            'product_tags_en' =>  'small,large',
            'product_size_en' =>  'small',
            'product_color_en' => 'red,green,blue',
            'selling_price' =>  1250,
            'discount_price' =>  150,
            'short_desc_en' => 'this is test',
            'long_desc_en' => 'Product Description',
            'product_thambnil' => 'upload/product/p10.jpg',
            'hot_deals' =>  1,
            'featured' =>  1,
            'special_offer' =>  1,
            'special_deals' =>  1,
            'status' => 1,
          ],

          [
            'brand_id' =>  Brand::inRandomOrder()->value('id'),
            'category_id' => Category::inRandomOrder()->value('id'),
            'subcategory_id' => SubCategory::inRandomOrder()->value('id'),
            'subsubcategory_id' => SubSubCategory::inRandomOrder()->value('id'),
            'product_name_en' => $product_name,
            'product_slug_en' => Str::slug($product_name),
            'product_code' => 'product - 001',
            'product_qty' =>  15,
            'product_tags_en' =>  'small,large',
            'product_size_en' =>  'small',
            'product_color_en' => 'red,green,blue',
            'selling_price' =>  1250,
            'discount_price' =>  150,
            'short_desc_en' => 'this is test',
            'long_desc_en' => 'Product Description',
            'product_thambnil' => 'upload/product/p11.jpg',
            'hot_deals' =>  1,
            'featured' =>  1,
            'special_offer' =>  1,
            'special_deals' =>  1,
            'status' => 1,
          ],

          [
            'brand_id' =>  Brand::inRandomOrder()->value('id'),
            'category_id' => Category::inRandomOrder()->value('id'),
            'subcategory_id' => SubCategory::inRandomOrder()->value('id'),
            'subsubcategory_id' => SubSubCategory::inRandomOrder()->value('id'),
            'product_name_en' => $product_name,
            'product_slug_en' => Str::slug($product_name),
            'product_code' => 'product - 001',
            'product_qty' =>  15,
            'product_tags_en' =>  'small,large',
            'product_size_en' =>  'small',
            'product_color_en' => 'red,green,blue',
            'selling_price' =>  1250,
            'discount_price' =>  150,
            'short_desc_en' => 'this is test',
            'long_desc_en' => 'Product Description',
            'product_thambnil' => 'upload/product/p12.jpg',
            'hot_deals' =>  1,
            'featured' =>  1,
            'special_offer' =>  1,
            'special_deals' =>  1,
            'status' => 1,
          ],

          [
            'brand_id' =>  Brand::inRandomOrder()->value('id'),
            'category_id' => Category::inRandomOrder()->value('id'),
            'subcategory_id' => SubCategory::inRandomOrder()->value('id'),
            'subsubcategory_id' => SubSubCategory::inRandomOrder()->value('id'),
            'product_name_en' => $product_name,
            'product_slug_en' => Str::slug($product_name),
            'product_code' => 'product - 001',
            'product_qty' =>  15,
            'product_tags_en' =>  'small,large',
            'product_size_en' =>  'small',
            'product_color_en' => 'red,green,blue',
            'selling_price' =>  1250,
            'discount_price' =>  150,
            'short_desc_en' => 'this is test',
            'long_desc_en' => 'Product Description',
            'product_thambnil' => 'upload/product/p13.jpg',
            'hot_deals' =>  1,
            'featured' =>  1,
            'special_offer' =>  1,
            'special_deals' =>  1,
            'status' => 1,
          ],

          [
            'brand_id' =>  Brand::inRandomOrder()->value('id'),
            'category_id' => Category::inRandomOrder()->value('id'),
            'subcategory_id' => SubCategory::inRandomOrder()->value('id'),
            'subsubcategory_id' => SubSubCategory::inRandomOrder()->value('id'),
            'product_name_en' => $product_name,
            'product_slug_en' => Str::slug($product_name),
            'product_code' => 'product - 001',
            'product_qty' =>  15,
            'product_tags_en' =>  'small,large',
            'product_size_en' =>  'small',
            'product_color_en' => 'red,green,blue',
            'selling_price' =>  1250,
            'discount_price' =>  150,
            'short_desc_en' => 'this is test',
            'long_desc_en' => 'Product Description',
            'product_thambnil' => 'upload/product/p14.jpg',
            'hot_deals' =>  1,
            'featured' =>  1,
            'special_offer' =>  1,
            'special_deals' =>  1,
            'status' => 1,
          ],

          [
            'brand_id' =>  Brand::inRandomOrder()->value('id'),
            'category_id' => Category::inRandomOrder()->value('id'),
            'subcategory_id' => SubCategory::inRandomOrder()->value('id'),
            'subsubcategory_id' => SubSubCategory::inRandomOrder()->value('id'),
            'product_name_en' => $product_name,
            'product_slug_en' => Str::slug($product_name),
            'product_code' => 'product - 001',
            'product_qty' =>  15,
            'product_tags_en' =>  'small,large',
            'product_size_en' =>  'small',
            'product_color_en' => 'red,green,blue',
            'selling_price' =>  1250,
            'discount_price' =>  150,
            'short_desc_en' => 'this is test',
            'long_desc_en' => 'Product Description',
            'product_thambnil' => 'upload/product/p15.jpg',
            'hot_deals' =>  1,
            'featured' =>  1,
            'special_offer' =>  1,
            'special_deals' =>  1,
            'status' => 1,
          ],

          [
            'brand_id' =>  Brand::inRandomOrder()->value('id'),
            'category_id' => Category::inRandomOrder()->value('id'),
            'subcategory_id' => SubCategory::inRandomOrder()->value('id'),
            'subsubcategory_id' => SubSubCategory::inRandomOrder()->value('id'),
            'product_name_en' => $product_name,
            'product_slug_en' => Str::slug($product_name),
            'product_code' => 'product - 001',
            'product_qty' =>  15,
            'product_tags_en' =>  'small,large',
            'product_size_en' =>  'small',
            'product_color_en' => 'red,green,blue',
            'selling_price' =>  1250,
            'discount_price' =>  150,
            'short_desc_en' => 'this is test',
            'long_desc_en' => 'Product Description',
            'product_thambnil' => 'upload/product/p16.jpg',
            'hot_deals' =>  1,
            'featured' =>  1,
            'special_offer' =>  1,
            'special_deals' =>  1,
            'status' => 1,
          ],

          [
            'brand_id' =>  Brand::inRandomOrder()->value('id'),
            'category_id' => Category::inRandomOrder()->value('id'),
            'subcategory_id' => SubCategory::inRandomOrder()->value('id'),
            'subsubcategory_id' => SubSubCategory::inRandomOrder()->value('id'),
            'product_name_en' => $product_name,
            'product_slug_en' => Str::slug($product_name),
            'product_code' => 'product - 001',
            'product_qty' =>  15,
            'product_tags_en' =>  'small,large',
            'product_size_en' =>  'small',
            'product_color_en' => 'red,green,blue',
            'selling_price' =>  1250,
            'discount_price' =>  150,
            'short_desc_en' => 'this is test',
            'long_desc_en' => 'Product Description',
            'product_thambnil' => 'upload/product/p17.jpg',
            'hot_deals' =>  1,
            'featured' =>  1,
            'special_offer' =>  1,
            'special_deals' =>  1,
            'status' => 1,
          ],

          [
            'brand_id' =>  Brand::inRandomOrder()->value('id'),
            'category_id' => Category::inRandomOrder()->value('id'),
            'subcategory_id' => SubCategory::inRandomOrder()->value('id'),
            'subsubcategory_id' => SubSubCategory::inRandomOrder()->value('id'),
            'product_name_en' => $product_name,
            'product_slug_en' => Str::slug($product_name),
            'product_code' => 'product - 001',
            'product_qty' =>  15,
            'product_tags_en' =>  'small,large',
            'product_size_en' =>  'small',
            'product_color_en' => 'red,green,blue',
            'selling_price' =>  1250,
            'discount_price' =>  150,
            'short_desc_en' => 'this is test',
            'long_desc_en' => 'Product Description',
            'product_thambnil' => 'upload/product/p18.jpg',
            'hot_deals' =>  1,
            'featured' =>  1,
            'special_offer' =>  1,
            'special_deals' =>  1,
            'status' => 1,
          ],

          [
            'brand_id' =>  Brand::inRandomOrder()->value('id'),
            'category_id' => Category::inRandomOrder()->value('id'),
            'subcategory_id' => SubCategory::inRandomOrder()->value('id'),
            'subsubcategory_id' => SubSubCategory::inRandomOrder()->value('id'),
            'product_name_en' => $product_name,
            'product_slug_en' => Str::slug($product_name),
            'product_code' => 'product - 001',
            'product_qty' =>  15,
            'product_tags_en' =>  'small,large',
            'product_size_en' =>  'small',
            'product_color_en' => 'red,green,blue',
            'selling_price' =>  1250,
            'discount_price' =>  150,
            'short_desc_en' => 'this is test',
            'long_desc_en' => 'Product Description',
            'product_thambnil' => 'upload/product/p19.jpg',
            'hot_deals' =>  1,
            'featured' =>  1,
            'special_offer' =>  1,
            'special_deals' =>  1,
            'status' => 1,
          ],

          [
            'brand_id' =>  Brand::inRandomOrder()->value('id'),
            'category_id' => Category::inRandomOrder()->value('id'),
            'subcategory_id' => SubCategory::inRandomOrder()->value('id'),
            'subsubcategory_id' => SubSubCategory::inRandomOrder()->value('id'),
            'product_name_en' => $product_name,
            'product_slug_en' => Str::slug($product_name),
            'product_code' => 'product - 001',
            'product_qty' =>  15,
            'product_tags_en' =>  'small,large',
            'product_size_en' =>  'small',
            'product_color_en' => 'red,green,blue',
            'selling_price' =>  1250,
            'discount_price' =>  150,
            'short_desc_en' => 'this is test',
            'long_desc_en' => 'Product Description',
            'product_thambnil' => 'upload/product/p20.jpg',
            'hot_deals' =>  1,
            'featured' =>  1,
            'special_offer' =>  1,
            'special_deals' =>  1,
            'status' => 1,
          ],

          [
            'brand_id' =>  Brand::inRandomOrder()->value('id'),
            'category_id' => Category::inRandomOrder()->value('id'),
            'subcategory_id' => SubCategory::inRandomOrder()->value('id'),
            'subsubcategory_id' => SubSubCategory::inRandomOrder()->value('id'),
            'product_name_en' => $product_name,
            'product_slug_en' => Str::slug($product_name),
            'product_code' => 'product - 001',
            'product_qty' =>  15,
            'product_tags_en' =>  'small,large',
            'product_size_en' =>  'small',
            'product_color_en' => 'red,green,blue',
            'selling_price' =>  1250,
            'discount_price' =>  150,
            'short_desc_en' => 'this is test',
            'long_desc_en' => 'Product Description',
            'product_thambnil' => 'upload/product/p21.jpg',
            'hot_deals' =>  1,
            'featured' =>  1,
            'special_offer' =>  1,
            'special_deals' =>  1,
            'status' => 1,
          ],

          [
            'brand_id' =>  Brand::inRandomOrder()->value('id'),
            'category_id' => Category::inRandomOrder()->value('id'),
            'subcategory_id' => SubCategory::inRandomOrder()->value('id'),
            'subsubcategory_id' => SubSubCategory::inRandomOrder()->value('id'),
            'product_name_en' => $product_name,
            'product_slug_en' => Str::slug($product_name),
            'product_code' => 'product - 001',
            'product_qty' =>  15,
            'product_tags_en' =>  'small,large',
            'product_size_en' =>  'small',
            'product_color_en' => 'red,green,blue',
            'selling_price' =>  1250,
            'discount_price' =>  150,
            'short_desc_en' => 'this is test',
            'long_desc_en' => 'Product Description',
            'product_thambnil' => 'upload/product/p22.jpg',
            'hot_deals' =>  1,
            'featured' =>  1,
            'special_offer' =>  1,
            'special_deals' =>  1,
            'status' => 1,
          ],

          [
            'brand_id' =>  Brand::inRandomOrder()->value('id'),
            'category_id' => Category::inRandomOrder()->value('id'),
            'subcategory_id' => SubCategory::inRandomOrder()->value('id'),
            'subsubcategory_id' => SubSubCategory::inRandomOrder()->value('id'),
            'product_name_en' => $product_name,
            'product_slug_en' => Str::slug($product_name),
            'product_code' => 'product - 001',
            'product_qty' =>  15,
            'product_tags_en' =>  'small,large',
            'product_size_en' =>  'small',
            'product_color_en' => 'red,green,blue',
            'selling_price' =>  1250,
            'discount_price' =>  150,
            'short_desc_en' => 'this is test',
            'long_desc_en' => 'Product Description',
            'product_thambnil' => 'upload/product/p23.jpg',
            'hot_deals' =>  1,
            'featured' =>  1,
            'special_offer' =>  1,
            'special_deals' =>  1,
            'status' => 1,
          ],

          [
            'brand_id' =>  Brand::inRandomOrder()->value('id'),
            'category_id' => Category::inRandomOrder()->value('id'),
            'subcategory_id' => SubCategory::inRandomOrder()->value('id'),
            'subsubcategory_id' => SubSubCategory::inRandomOrder()->value('id'),
            'product_name_en' => $product_name,
            'product_slug_en' => Str::slug($product_name),
            'product_code' => 'product - 001',
            'product_qty' =>  15,
            'product_tags_en' =>  'small,large',
            'product_size_en' =>  'small',
            'product_color_en' => 'red,green,blue',
            'selling_price' =>  1250,
            'discount_price' =>  150,
            'short_desc_en' => 'this is test',
            'long_desc_en' => 'Product Description',
            'product_thambnil' => 'upload/product/p24.jpg',
            'hot_deals' =>  1,
            'featured' =>  1,
            'special_offer' =>  1,
            'special_deals' =>  1,
            'status' => 1,
          ],

          [
            'brand_id' =>  Brand::inRandomOrder()->value('id'),
            'category_id' => Category::inRandomOrder()->value('id'),
            'subcategory_id' => SubCategory::inRandomOrder()->value('id'),
            'subsubcategory_id' => SubSubCategory::inRandomOrder()->value('id'),
            'product_name_en' => $product_name,
            'product_slug_en' => Str::slug($product_name),
            'product_code' => 'product - 001',
            'product_qty' =>  15,
            'product_tags_en' =>  'small,large',
            'product_size_en' =>  'small',
            'product_color_en' => 'red,green,blue',
            'selling_price' =>  1250,
            'discount_price' =>  150,
            'short_desc_en' => 'this is test',
            'long_desc_en' => 'Product Description',
            'product_thambnil' => 'upload/product/p25.jpg',
            'hot_deals' =>  1,
            'featured' =>  1,
            'special_offer' =>  1,
            'special_deals' =>  1,
            'status' => 1,
          ],

          [
            'brand_id' =>  Brand::inRandomOrder()->value('id'),
            'category_id' => Category::inRandomOrder()->value('id'),
            'subcategory_id' => SubCategory::inRandomOrder()->value('id'),
            'subsubcategory_id' => SubSubCategory::inRandomOrder()->value('id'),
            'product_name_en' => $product_name,
            'product_slug_en' => Str::slug($product_name),
            'product_code' => 'product - 001',
            'product_qty' =>  15,
            'product_tags_en' =>  'small,large',
            'product_size_en' =>  'small',
            'product_color_en' => 'red,green,blue',
            'selling_price' =>  1250,
            'discount_price' =>  150,
            'short_desc_en' => 'this is test',
            'long_desc_en' => 'Product Description',
            'product_thambnil' => 'upload/product/p26.jpg',
            'hot_deals' =>  1,
            'featured' =>  1,
            'special_offer' =>  1,
            'special_deals' =>  1,
            'status' => 1,
          ],

          [
            'brand_id' =>  Brand::inRandomOrder()->value('id'),
            'category_id' => Category::inRandomOrder()->value('id'),
            'subcategory_id' => SubCategory::inRandomOrder()->value('id'),
            'subsubcategory_id' => SubSubCategory::inRandomOrder()->value('id'),
            'product_name_en' => $product_name,
            'product_slug_en' => Str::slug($product_name),
            'product_code' => 'product - 001',
            'product_qty' =>  15,
            'product_tags_en' =>  'small,large',
            'product_size_en' =>  'small',
            'product_color_en' => 'red,green,blue',
            'selling_price' =>  1250,
            'discount_price' =>  150,
            'short_desc_en' => 'this is test',
            'long_desc_en' => 'Product Description',
            'product_thambnil' => 'upload/product/p27.jpg',
            'hot_deals' =>  1,
            'featured' =>  1,
            'special_offer' =>  1,
            'special_deals' =>  1,
            'status' => 1,
          ],

          [
            'brand_id' =>  Brand::inRandomOrder()->value('id'),
            'category_id' => Category::inRandomOrder()->value('id'),
            'subcategory_id' => SubCategory::inRandomOrder()->value('id'),
            'subsubcategory_id' => SubSubCategory::inRandomOrder()->value('id'),
            'product_name_en' => $product_name,
            'product_slug_en' => Str::slug($product_name),
            'product_code' => 'product - 001',
            'product_qty' =>  15,
            'product_tags_en' =>  'small,large',
            'product_size_en' =>  'small',
            'product_color_en' => 'red,green,blue',
            'selling_price' =>  1250,
            'discount_price' =>  150,
            'short_desc_en' => 'this is test',
            'long_desc_en' => 'Product Description',
            'product_thambnil' => 'upload/product/p28.jpg',
            'hot_deals' =>  1,
            'featured' =>  1,
            'special_offer' =>  1,
            'special_deals' =>  1,
            'status' => 1,
          ],

          [
            'brand_id' =>  Brand::inRandomOrder()->value('id'),
            'category_id' => Category::inRandomOrder()->value('id'),
            'subcategory_id' => SubCategory::inRandomOrder()->value('id'),
            'subsubcategory_id' => SubSubCategory::inRandomOrder()->value('id'),
            'product_name_en' => $product_name,
            'product_slug_en' => Str::slug($product_name),
            'product_code' => 'product - 001',
            'product_qty' =>  15,
            'product_tags_en' =>  'small,large',
            'product_size_en' =>  'small',
            'product_color_en' => 'red,green,blue',
            'selling_price' =>  1250,
            'discount_price' =>  150,
            'short_desc_en' => 'this is test',
            'long_desc_en' => 'Product Description',
            'product_thambnil' => 'upload/product/p29.jpg',
            'hot_deals' =>  1,
            'featured' =>  1,
            'special_offer' =>  1,
            'special_deals' =>  1,
            'status' => 1,
          ],

          [
            'brand_id' =>  Brand::inRandomOrder()->value('id'),
            'category_id' => Category::inRandomOrder()->value('id'),
            'subcategory_id' => SubCategory::inRandomOrder()->value('id'),
            'subsubcategory_id' => SubSubCategory::inRandomOrder()->value('id'),
            'product_name_en' => $product_name,
            'product_slug_en' => Str::slug($product_name),
            'product_code' => 'product - 001',
            'product_qty' =>  15,
            'product_tags_en' =>  'small,large',
            'product_size_en' =>  'small',
            'product_color_en' => 'red,green,blue',
            'selling_price' =>  1250,
            'discount_price' =>  150,
            'short_desc_en' => 'this is test',
            'long_desc_en' => 'Product Description',
            'product_thambnil' => 'upload/product/p30.jpg',
            'hot_deals' =>  1,
            'featured' =>  1,
            'special_offer' =>  1,
            'special_deals' =>  1,
            'status' => 1,
          ],

        ];
        Product::insert($product);
    }
}
