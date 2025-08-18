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
        Schema::create('informes__docentes', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_docente')->constrained('docentes')->onDelete('cascade');
            $table->date('fecha');
            $table->text('descripcion')->nullable();
            $table->string('documento_url',255);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('informes__docentes');
    }
};
