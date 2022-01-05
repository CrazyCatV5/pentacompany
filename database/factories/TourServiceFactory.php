<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class TourServiceFactory extends Factory
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
            'service_id'=>$this->faker->numberBetween(1,10),
        ];
    }
}
