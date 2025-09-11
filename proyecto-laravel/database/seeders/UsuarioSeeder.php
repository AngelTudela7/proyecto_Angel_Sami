<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Usuario;
use Illuminate\Support\Facades\Hash;
use Faker\Factory as Faker;

class UsuarioSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();

        for ($i = 0; $i < 10; $i++) {
            Usuario::create([
                'nombre_usuario' => $faker->name,
                'email' => $faker->unique()->safeEmail,
                'password' => Hash::make('password'),
                'descripcion_perfil' => $faker->sentence,
                'telefono' => $faker->phoneNumber,
                'fecha_nacimiento' => $faker->date('Y-m-d', '2005-01-01'),
            ]);
        }
    }
}