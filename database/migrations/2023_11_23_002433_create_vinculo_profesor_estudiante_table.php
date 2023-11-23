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
            $table->id();
            $table->integer('documento_profesor');
            $table->integer('documento_estudiante');
            $table->integer('asignatura_id');
            $table->timestamps();

            $table->foreign('documento_profesor')->references('documento')->on('profesores');
            $table->foreign('documento_estudiante')->references('documento')->on('estudiantes');
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
