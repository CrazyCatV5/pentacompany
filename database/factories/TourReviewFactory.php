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
            'user_id'=>$this->faker->numberBetween(1,10),
            'tour_id'=>$this->faker->numberBetween(1,10),
            'text'=>$this->faker->realText(),
            'rating'=>$this->faker->numberBetween(0,10),
            'like'=>$this->faker->boolean(),
            'dislike'=>$this->faker->boolean(),
        ];
    }
}
