<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class HotelReviewFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id'=>$this->faker->numberBetween(1,50),
            'hotel_id'=>$this->faker->numberBetween(1,50),
            'text'=>$this->faker->realText(),
            'name'=>$this->faker->name(),
            'rating'=>$this->faker->numberBetween(0,10),
            'like'=>$this->faker->boolean(),
            'dislike'=>$this->faker->boolean(),
        ];
    }
}
