<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Curso>
 */
class CursoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nombre_del_curso'=>fake()->randomElement(["Matematicas", "Ingles", "Español", "Desarrollo Front-End", "Fullstack"]),
            'estudiante_id'=>fake()->numberBetween(1, 5)
        ];
    }
}
