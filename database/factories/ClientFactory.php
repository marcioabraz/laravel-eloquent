<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ClientFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [

            'name' =>$this->faker->sentence(5),
            'email'  =>$this->faker->email(),
            'phone'  =>$this->faker->phoneNumber(),
            'id_number' =>$this->faker->uuid,
        ];
    }
}
