<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //Usuario Administrativo
        DB::table('users')->insert([
            'name' => 'Admon',
            'email' => 'admon@robotics.com',
            'password' => Hash::make('Adm@2022'),
            'role' => 'Administrativo',
        ]);

        //Usuario Docente
        DB::table('users')->insert([
            'name' => 'Tecmilenio',
            'email' => 'tecmilenio@robotics.com',
            'password' => Hash::make('Adm@2022'),
            'role' => 'Docente',
        ]);

        //Usuario Estudiante
        DB::table('users')->insert([
            'name' => 'Estudiante',
            'email' => 'estudiante@robotics.com',
            'password' => Hash::make('Adm@2022'),
            'role' => 'Estudiante',
        ]);
    }
}
