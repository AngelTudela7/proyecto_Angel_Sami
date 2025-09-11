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
        Schema::create('usuarios_eventos', function (Blueprint $table) {
            $table->id();
    
    // FK hacia usuario
    $table->foreignId('usuario_id')->constrained('usuarios')->onDelete('cascade');
    
    // FK hacia evento
    $table->foreignId('evento_id')->constrained('eventos')->onDelete('cascade');
    
    // Estado de participación
    $table->enum('estado_invitacion', ['pendiente', 'aceptado', 'rechazado'])->default('pendiente')->nullable();
    
    $table->timestamps();
    
    // Evitar duplicados: un usuario no puede apuntarse dos veces al mismo evento
    $table->unique(['usuario_id', 'evento_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('usuarios_eventos');
    }
};
