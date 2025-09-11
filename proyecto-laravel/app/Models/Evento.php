<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Evento extends Model
{
    
   protected $fillable = [

        "titulo_evento",
        "descripcion_evento",
        "fecha_inicio_evento",
        "fecha_fin_evento",
        "creador_id",
        "deporte_id",
        "lat",
        "lng",
        "max_jugadores"
    ];

public function jugadores() {
    return $this->belongsToMany(Usuario::class, 'usuarios_eventos')
                ->withPivot('estado_invitacion')
                ->withTimestamps();
    
}

public function creador() {
    return $this->belongsTo(Usuario::class, 'creador_id');
}
public function deporte() {
    return $this->belongsTo(Deporte::class);
}

 // Tos los mensajes del evento
public function mensajes() {
    return $this->hasMany(UsuarioMensajeEvento::class);
}



}