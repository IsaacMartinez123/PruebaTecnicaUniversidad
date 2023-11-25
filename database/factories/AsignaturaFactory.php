<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Asignatura>
 */
class AsignaturaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'id' => $this->faker->unique()->randomNumber,
            'nombre' => $this->faker->name,
            'descripcion' => $this->faker->text(100),
            'creditos' => $this->faker->randomNumber(1,4),
            'area_conocimiento' => $this->faker->text(100),
            'tipo_materia' => $this->faker->randomElement(['Electiva', 'Obligatoria']),
        ];
    }
}
