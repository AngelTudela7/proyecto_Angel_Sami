<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Seeder;
use App\Models\Evento;
use App\Models\Usuario;
use App\Models\Deporte;
use Faker\Factory as Faker;

class EventoSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();
        $usuarios = Usuario::all();
        $deportes = Deporte::all();

        for ($i = 0; $i < 5; $i++) {
            Evento::create([
                'titulo_evento' => $faker->sentence(3),
                'descripcion_evento' => $faker->paragraph,
                'creador_id' => $usuarios->random()->id,
                'deporte_id' => $deportes->random()->id,
                'fecha_inicio_evento' => $faker->dateTimeBetween('now', '+10 days'),
                'fecha_fin_evento' => $faker->dateTimeBetween('+11 days', '+20 days'),
                'lat' => $faker->latitude(40.0, 41.0),
                'lng' => $faker->longitude(-4.0, -3.0),
                'max_jugadores' => $faker->numberBetween(5, 20),
            ]);
        }
    }
}