<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class СategoryTourFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'tour_id'=>$this->faker->numberBetween(1,50),
            'сategory_id'=>$this->faker->numberBetween(1,10),
        ];
    }
}
