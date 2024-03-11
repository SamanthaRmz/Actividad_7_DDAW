<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoboticaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('roboticas')->insert([
            [
                'nombre' => 'starterKit',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nombre' => 'Educational Robotics kit',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nombre' => 'Kit5',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
