<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\UsuariosEvento;
use App\Models\Usuario;
use App\Models\Evento;

class UsuariosEventoSeeder extends Seeder
{
    public function run()
    {
        $usuarios = Usuario::all();
        $eventos = Evento::all();

        foreach ($eventos as $evento) {
            $asistentes = $usuarios->random(rand(2,5));
            foreach ($asistentes as $usuario) {
                UsuariosEvento::create([
                    'usuario_id' => $usuario->id,
                    'evento_id' => $evento->id,
                    'estado_invitacion' => 'aceptado',
                ]);
            }
        }
    }
}