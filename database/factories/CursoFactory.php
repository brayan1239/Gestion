<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Curso;

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
            'nombre_curso' => $this->faker->words(3, true),
            'ciclo' => $this->faker->randomElement(['Primer Ciclo', 'Segundo Ciclo', 'Tercer Ciclo','Cuarto Ciclo']),
            'creditos' => $this->faker->numberBetween(1, 5),
            'escuela_academica' => $this->faker->randomElement(['Escuela A', 'Escuela B', 'Escuela C']),
        ];
    }
}
