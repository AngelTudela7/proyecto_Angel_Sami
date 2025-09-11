<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    protected $fillable = [

        "nombre_usuario",
        "email",
        "password",
        "descripcion_perfil",
        "foto_perfil",
        "telefono",
        "fecha_nacimiento"
    ];

public function eventos() {
    return $this->belongsToMany(Evento::class, 'usuarios_eventos')
                ->withPivot('estado_invitacion')
                ->withTimestamps();
}

public function mensajes() {
    return $this->hasMany(UsuarioMensajeEvento::class);
}

// Solicitudes enviadas
public function solicitudesEnviadas() {
    return $this->hasMany(UsuarioAmistad::class, 'usuario_id');
}

// Solicitudes recibidas
public function solicitudesRecibidas() {
    return $this->hasMany(UsuarioAmistad::class, 'amigo_id');
}


}

