<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class BillFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'invoice'=> $this->faker->number(4),
            'installment'=>$this->faker->randomDigit(),
            'value'=>$this->faker->floatval(100),
            'client_id'=>$this->faker->randomNumber(),
            'due_date'=>$this->faker->unixTime(new DateTime('+1 weeks')),
            'payment_date'=>$this->dateTimeInInterval('-1 week')
        ];
    }
}
