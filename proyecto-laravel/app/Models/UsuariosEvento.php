<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UsuariosEvento extends Model
{
    protected $table = 'usuarios_eventos'; // nombre de la tabla pivot

    protected $fillable = [
        'usuario_id',
        'evento_id',
        'estado_invitacion',
    ];

    // Relación hacia el usuario
    public function usuario() {
        return $this->belongsTo(Usuario::class, 'usuarios_id');
    }

    // Relación hacia el evento
    public function evento() {
        return $this->belongsTo(Evento::class, 'evento_id');
    }
}
