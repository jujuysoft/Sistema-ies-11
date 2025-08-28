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
        Schema::create('asignaciones', function (Blueprint $table) {
            $table->id();
            $table->foreignId('Icl_id')->constrained('icls')->onDelete('cascade');
            $table->string('dia_semana');
            $table->date('hora_inicio');
            $table->date('hora_fin');
            $table->date('fecha_inicio');
            $table->date('fecha_fin');
            $table->string('estado',150);
            $table->string('motivo',255);
            $table->string('caracter',255);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('asignaciones');
    }
};
