<?php


namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Deporte;

class DeporteSeeder extends Seeder
{
    public function run()
    {
        $deportes = ['Futbol', 'Baloncesto', 'Padel', 'Tenis', 'Voleibol'];
        foreach ($deportes as $nombre) {
            Deporte::create(['nombre_deporte' => $nombre]);
        }
    }
}