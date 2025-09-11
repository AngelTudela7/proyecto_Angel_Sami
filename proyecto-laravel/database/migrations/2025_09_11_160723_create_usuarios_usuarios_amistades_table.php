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
        Schema::create('usuarios_usuarios_amistades', function (Blueprint $table) {
            $table->id();
            $table->foreignId('usuario_id')->constrained('usuarios')->onDelete('cascade');
            $table->foreignId('amigo_id')->constrained('usuarios')->onDelete('cascade');
            $table->enum('estado', ['pendiente', 'aceptada', 'rechazada'])->default('pendiente');
            $table->timestamps();
            $table->unique(['usuario_id', 'amigo_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('usuarios_usuarios_amistades');
    }
};
