<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Asistencia>
 */
class AsistenciaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'asistencia'=>fake()->randomElement(["Temprano (A)", "Tarde (T)", "Falto (F)"]),
            'estudiante_id'=>fake()->numberBetween(1, 5)
        ];
    }
}
