<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cubiculos', function (Blueprint $table) {
            $table->id();
            $table->string('nombre_alumno');
            $table->string('control_alumno');
            $table->string('cubiculo');
            $table->string('genero');
            $table->date('fecha');
            $table->string('hora_inicio');
            $table->string('hora_fin');
            $table->foreignId('carrera_id')->constrained()->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cubiculos');
    }
};
