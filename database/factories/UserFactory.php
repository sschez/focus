<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class UserFactory extends Factory

{
   
    public function definition()
    {
        $id = ['cc', 'ti', 'ce'];
        $recomenda = ["Bien", "Regular", "No tan bien", "Mal"];
        $antece = ["Si", "No", "Luxación de hombro", "Operación de hombro"];
        $recomend =  $this->faker->numberBetween($min = 0, $max = 1);
        $antec =  $this->faker->numberBetween($min = 0, $max = 3);

        return [
            'name' => $this->faker->name,
            'typedoc' => $id[$this->faker->numberBetween($min = 0, $max = 2)],
            'document' => $this->faker->numberBetween($min = 100000000, $max = 999999999),
            'recomend' => $recomenda[$recomend],
            'antec' => $antece[$antec],
            'edad' => $id[$this->faker->numberBetween($min = 0, $max = 85)],
        ];
    }
}
