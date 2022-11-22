<?php

namespace Database\Factories;

use App\Models\contratista;
use Illuminate\Database\Eloquent\Factories\Factory;

class contratistaFactory extends Factory
{
    protected $model = contratista::class;
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
            'telefono'=>$this->faker->phoneNumber()
        ];
    }
}
