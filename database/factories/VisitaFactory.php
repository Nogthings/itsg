<?php

namespace Database\Factories;

use App\Models\Visita;
use Illuminate\Database\Eloquent\Factories\Factory;
use Carbon\Carbon;
use Carbon\CarbonInterval;
use Faker\Generator as Faker;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Visita>
 */
class VisitaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Visita::class;
    public function definition()
    {
        $fecha_creada = Carbon::now()->sub(CarbonInterval::days(rand(0, 30))); // Fecha aleatoria dentro del último mes
        return [
            //
            'alumno_id' => $this->faker->numberBetween(1, 5000),
            'created_at' => $fecha_creada,
            'updated_at' => $fecha_creada,
        ];
    }
}
