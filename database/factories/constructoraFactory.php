<?php

namespace Database\Factories;

use App\Models\constructora;
use Illuminate\Database\Eloquent\Factories\Factory;

class constructoraFactory extends Factory
{
    protected $model = constructora::class;
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
            'telefono'=>$this->faker->phoneNumber()
        ];
    }
}
