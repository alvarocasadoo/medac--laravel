<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class TarjetasFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'numero'=>$this->faker->creditCardNumber,
            'fecha'=>$this->faker->creditCardExpirationDate,
            'cvv'=>$this->faker->creditCardExpirationDateString,
        ];
    }
}
