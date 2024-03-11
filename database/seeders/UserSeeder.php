<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //Usuario Administrativo
        DB::table('usuarios')->insert([
            'nombre' => 'Admon',
            'email' => 'admon@robotics.com',
            'contraseña' => Hash::make('Adm@2022'),
            'rol' => 'Administrativo',
        ]);

        //Usuario Docente
        DB::table('usuarios')->insert([
            'nombre' => 'Tecmilenio',
            'email' => 'tecmilenio@robotics.com',
            'contraseña' => Hash::make('Adm@2022'),
            'rol' => 'Docente',
        ]);

        //Usuario Estudiante
        DB::table('usuarios')->insert([
            'nombre' => 'Estudiante',
            'email' => 'estudiante@robotics.com',
            'contraseña' => Hash::make('Adm@2022'),
            'rol' => 'Estudiante',
        ]);
    }
}
