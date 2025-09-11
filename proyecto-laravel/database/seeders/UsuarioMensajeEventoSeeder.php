<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Usuario;
use App\Models\Evento;
use App\Models\UsuarioMensajeEvento;
use Faker\Factory as Faker;

class UsuarioMensajeEventoSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();
        $usuarios = Usuario::all();
        $eventos = Evento::all();

        foreach ($eventos as $evento) {
            $mensajeros = $usuarios->random(rand(2,4));
            foreach ($mensajeros as $usuario) {
                UsuarioMensajeEvento::create([
                    'evento_id' => $evento->id,
                    'usuario_id' => $usuario->id,
                    'mensaje' => $faker->sentence,
                ]);
            }
        }
    }
}