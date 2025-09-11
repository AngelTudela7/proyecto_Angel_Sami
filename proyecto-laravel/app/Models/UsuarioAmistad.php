<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UsuarioAmistad extends Model
{

protected $table = 'usuarios_usuarios_amistades';

    protected $fillable = [
        "usuario_id",
        "amigo_id",
        "estado",
    ];

    // Usuario que envía la solicitud
    public function usuario() {
        return $this->belongsTo(Usuario::class, 'usuario_id');
    }

    // Usuario que recibe la solicitud
    public function amigo() {
        return $this->belongsTo(Usuario::class, 'amigo_id');
    }
}