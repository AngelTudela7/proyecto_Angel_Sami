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
        Schema::create('eventos', function (Blueprint $table) {
            $table->id();
            $table->string('titulo_evento');
            $table->string('descripcion_evento')->nullable();
            $table->dateTime('fecha_inicio_evento');
            $table->dateTime('fecha_fin_evento');
            $table->foreignId('creador_id')->constrained('usuarios')->onDelete('cascade');
            $table->foreignId('deporte_id')->constrained('deportes')->onDelete('cascade');
            $table->decimal('lat', 10, 7)->nullable();
            $table->decimal('lng', 10, 7)->nullable();
            $table->integer('max_jugadores');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('eventos');
    }
};
