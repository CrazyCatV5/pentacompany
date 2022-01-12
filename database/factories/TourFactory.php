<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class TourFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name'=>$this->faker->name(),
            'rating'=>$this->faker->numberBetween(0,10),
            'country'=>$this->faker->country(),
            'city'=>$this->faker->city(),
            'image'=>$this->faker->image('public/img',400,400, null,  false),
            'vouchers_count'=>$this->faker->numberBetween(100,1000),
            'vouchers_sold'=>$this->faker->numberBetween(0,100),
            'cost'=>$this->faker->numberBetween(2000,100000),
            'start'=>$this->faker->date(),
            'finish'=>$this->faker->date(),
            'duration'=>$this->faker->numberBetween(0,10),
        ];
    }
}
