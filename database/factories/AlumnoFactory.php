<?php

namespace Database\Factories;
use App\Models\Alumno;
use Faker\Generator as Faker;
use Illuminate\Database\Eloquent\Factories\Factory;

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
    protected $model = Alumno::class;

    public function definition()
    {
        $faker = app(Faker::class);
        return [
            //
            'nombre' => $faker->name(),
            'control' => function () use ($faker) {
                return $faker->unique()->randomNumber(8);
            },
            'credencial' => function () use ($faker) {
                return $faker->unique()->randomNumber(8);
            },
            'genero' => $faker->randomElement(['Masculino', 'Femenino']),
            'carrera_id' => $faker->numberBetween(1, 6),
        ];
    }
}
