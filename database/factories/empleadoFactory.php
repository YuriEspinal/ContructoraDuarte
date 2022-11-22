<?php

namespace Database\Factories;

use App\Models\empleado;
use Illuminate\Database\Eloquent\Factories\Factory;

class empleadoFactory extends Factory
{
    protected $model = empleado::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            'nombre'=>$this->faker->firstName(),
            'apellido'=>$this->faker->lastName(),
            'fecha-nacimiento'=>$this->faker->dateTimeBetween('-40 years','-16 years'),
            'identidad'=> $this->faker->numerify('###').$this->faker->numberBetween(1960, 2004).$this->faker->numerify('#####'),
            'telefono'=>$this->faker->phoneNumber()

        ];
    }
}
