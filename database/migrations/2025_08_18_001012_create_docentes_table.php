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
        Schema::create('docentes', function (Blueprint $table) {
            $table->id();
            $table->string('nombre', 100);
            $table->string('dni'. 10)->unique();
            $table->date('fecha_nacimiento');
            $table->string('direccion', 100);
            $table->string('telefono', 20);
            $table->string('email', 100)->unique();
            $table->date('fecha_ingreso');
            $table->date('fecha_egreso')->nullable();
            $table->boolean('estado');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('docentes');
    }
};
