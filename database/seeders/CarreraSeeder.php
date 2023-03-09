<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class CarreraSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('carreras')->insert([
            'nombre_carrera' => 'INGENIERÍA INDUSTRIAL',
            'status' => '1'
        ]);

        DB::table('carreras')->insert([
            'nombre_carrera' => 'INGENIERÍA EN INDUSTRIAS ALIMENTARIAS',
            'status' => '1'
        ]);

        DB::table('carreras')->insert([
            'nombre_carrera' => 'INGENIERÍA EN GESTIÓN EMPRESARIAL',
            'status' => '1'
        ]);

        DB::table('carreras')->insert([
            'nombre_carrera' => 'INGENIERÍA EN SISTEMAS COMPUTACIONALES',
            'status' => '1'
        ]);

        DB::table('carreras')->insert([
            'nombre_carrera' => 'INGENIERÍA MECÁNICA',
            'status' => '1'
        ]);

        DB::table('carreras')->insert([
            'nombre_carrera' => 'INGENIERÍA EN INNOVACIÓN AGRÍCOLA SUSTENTABLE',
            'status' => '1'
        ]);
    }
}
