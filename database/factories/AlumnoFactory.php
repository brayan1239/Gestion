<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Alumno;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Alumno>
 */
class AlumnoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id'=>$this->faker->numberBetween(1, 20),
            'apellido' => $this->faker->lastName(),
            'celular' => $this->faker->phoneNumber(),
            'celular_2' => $this->faker->phoneNumber(),
            'dni' => $this->faker->randomNumber(8, true),
            'padre' => $this->faker->name($gender = 'male'),
            'madre' => $this->faker->name($gender = 'female'),
        ];
    }
}
