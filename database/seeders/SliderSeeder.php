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
                     'slider_img' => 'upload/slider/01.jpg',
                     'title' => 'this is slider desc',
                     'description' => 'this is slider desc',
                     'status' => '1'

               ],

               
               [
                  'slider_img' => 'upload/slider/02.jpg',
                  'title' => 'this is slider desc',
                  'description' => 'this is slider desc',
                  'status' => '1'

               ]

          ];

       Slider::insert($slider);
    }
}
