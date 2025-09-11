<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Deporte extends Model
{

     protected $fillable = [

        "nombre_deporte",
   ];

public function eventos() {
    return $this->hasMany(Evento::class, 'eventos')
                ->withTimestamps();
}


}
