<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Docentes>
 */
class DocentesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'dni'=> $this->faker->numerify('########'),
            'nombre'=> $this->faker->firstName,
            'apellido'=> $this->faker->lastName,
            'correo'=> $this->faker->safeEmail,
        ];
    }
}
