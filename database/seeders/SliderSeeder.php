<?php

namespace Database\Seeders;

use App\Models\Slider;
use Illuminate\Database\Seeder;

class SliderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $slider = [

               [
                     'slider_img' => 'upload/slider/default.jpg',
                     'title' => 'this is slider desc',
                     'description' => 'this is slider desc',
                     'status' => '1'

                  ]

          ];

       Slider::insert($slider);
    }
}
