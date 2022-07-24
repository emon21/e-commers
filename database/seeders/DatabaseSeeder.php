<?php

namespace Database\Seeders;

use App\Models\Brand;
use App\Models\Product;
use App\Models\Slider;
use App\Models\Blog\BlogPost;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        $this->call([

            UserSeeder::class,
            BrandSeeder::class,
            CategorySeeder::class,
            SubCategorySeeder::class,
            SubSubCategorySeeder::class,
            // SliderSeeder::class,

            //Blog
            BlogCategorySeeder::class,
            BlogSubCategorySeeder::class,
          
        ]);

       // \App\Models\Product::factory(10)->create();
      // Brand::factory()->count(10)->create();
       Slider::factory()->count(5)->create();
       Product::factory()->count(10)->create();
      // BlogPost::factory()->count(5)->create();
    }
}
