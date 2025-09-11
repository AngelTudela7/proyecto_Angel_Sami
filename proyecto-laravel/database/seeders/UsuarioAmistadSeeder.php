<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Usuario;
use App\Models\UsuarioAmistad;

class UsuarioAmistadSeeder extends Seeder
{
    public function run()
    {
        $usuarios = Usuario::all();

        foreach ($usuarios as $usuario) {
            $amigos = $usuarios->where('id', '!=', $usuario->id)->random(2);
            foreach ($amigos as $amigo) {
                if (!UsuarioAmistad::where(['usuario_id'=>$usuario->id, 'amigo_id'=>$amigo->id])->exists()) {
                    UsuarioAmistad::create([
                        'usuario_id' => $usuario->id,
                        'amigo_id' => $amigo->id,
                        'estado' => 'aceptada',
                    ]);
                }
            }
        }
    }
}