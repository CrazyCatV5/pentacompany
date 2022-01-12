<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class HotelFactory extends Factory
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
            'stars'=>$this->faker->numberBetween(0,5),
            'rating'=>$this->faker->numberBetween(0,10),
            'country'=>$this->faker->country(),
            'city'=>$this->faker->city(),
            'address'=>$this->faker->address(),
            'image'=>$this->faker->image('public/img',400,400, null,  false)
        ];
    }
}
