<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class HotelNutritionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'hotel_id'=>$this->faker->numberBetween(1,50),
            'nutrition_id'=>$this->faker->numberBetween(1,10),
        ];
    }
}
