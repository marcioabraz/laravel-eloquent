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
            'invoice'=> $this->faker->randomNumber(4,true),
            'installment'=>$this->faker->randomDigit(),
            'client_id'=>$this->Client::factory()->create()->id,
            'value'=>$this->faker->randomFloat(0,0,100),
            'due_date'=>$this->faker->dateTimeBetween('now','+1 weeks'),
            'payment_date'=>$this->faker->dateTimeBetween('-1 week', 'now')
        ];
    }
}


// invoice: número de 4 dígitos aleatório
// installment: número de 1 dígito aleatório
// client_id: id de um cliente falso
// value: número float menor que 100 aleatório
// due_date: data entre 'now' e '+1 week'
// payment_date: data entre '-1 week' e 'now'