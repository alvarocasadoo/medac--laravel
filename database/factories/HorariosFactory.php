<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Horarios>
 */
class HorariosFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'fecha'=>fake()->date($starDate='-5 days', $endDate='+5 days'),
            'hora'=>'08:00',
            'estado'=>'Disponible',
        ];
    }
}
