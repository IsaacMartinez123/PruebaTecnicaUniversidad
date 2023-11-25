<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('vinculo_profesor_estudiante', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('profesor_id');
            $table->unsignedBigInteger('estudiante_id');
            $table->unsignedBigInteger('asignatura_id');
            $table->timestamps();

            $table->foreign('profesor_id')->references('id')->on('profesores');
            $table->foreign('estudiante_id')->references('id')->on('estudiantes');
            $table->foreign('asignatura_id')->references('id')->on('asignaturas');
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vinculo_profesor_estudiante');
    }
};
