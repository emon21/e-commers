<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class SliderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [

         'slider_img' => 'upload/slider/default.jpg',
         'title' =>  $this->faker->name(),
         'description' =>  $this->faker->text(),
         'status' => '1'
        ];
        
    }
}
