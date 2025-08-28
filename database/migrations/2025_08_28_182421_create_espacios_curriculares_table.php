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
        Schema::create('espacios_curriculares', function (Blueprint $table) {
            $table->id();
            $table->foreignId('docente_id')->constrained('docentes')->onDelete('cascade');
            $table->foreignId('asignacione_id')->constrained('asignaciones')->onDelete('cascade');
            $table->string('nombre');
            $table->string('curso');
            $table->string('division');
            $table->string('turno');
            $table->integer('horas_espacios');
            $table->string('cupof');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('espacios_curriculares');
    }
};
