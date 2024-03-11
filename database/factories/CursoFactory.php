<?php

namespace Database\Factories;

use App\Models\Curso;
use Illuminate\Database\Eloquent\Factories\Factory;

class CursoFactory extends Factory
{
    protected $model = Curso::class;

    public function definition()
    {
        return [
            'id_curso' => $this->faker->unique()->randomNumber(),
            'titulo' => $this->faker->text(10), 
            'portada' => $this->faker->imageUrl(),
            'contenido' => $this->faker->text(20), 
            'material_didactico' => $this->faker->text(30), 
        ];
    }
}
