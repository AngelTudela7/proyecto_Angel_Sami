<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UsuarioMensajeEvento extends Model
{
protected $table = 'usuarios_usuarios_mensajes_eventos';

    protected $fillable = [

    "evento_id",
    "usuario_id",
    "mensaje"

    ];

  // Usuario que envía el mensaje
    public function usuario() {
        return $this->belongsTo(Usuario::class, 'usuario_id');
    }

    // Evento al que pertenece el mensaje
    public function evento() {
        return $this->belongsTo(Evento::class, 'evento_id');
    }

}
