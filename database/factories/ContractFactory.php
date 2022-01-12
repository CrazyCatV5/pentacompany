<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ContractFactory extends Factory
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
            'price'=>$this->faker->numberBetween(1000,100000),
            'start'=>$this->faker->date()
        ];
    }
}
