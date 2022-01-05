<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class TourReviewFactory extends Factory
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
            'tour_id'=>$this->faker->numberBetween(1,50),
            'text'=>$this->faker->realText(),
            'rating'=>$this->faker->numberBetween(0,10),
            'likes'=>$this->faker->numberBetween(0,50),
            'dislikes'=>$this->faker->numberBetween(0,50),
        ];
    }
}
