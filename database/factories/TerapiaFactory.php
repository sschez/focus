<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\User;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class TerapiaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $userID = User::all();
        $doctores = ["Diego Bustamante", "Jorge Zapata", "Andrés Riveras"];
        $condiciones = ["Luxación de cadera", "Operación de rodilla", "Luxación de hombro", "Operación de hombro"];
        $ejercicios = ["Rotación de cadera", "Extensión de hombro"];
        $condicion =  $this->faker->numberBetween($min = 0, $max = 3);

        return [
            'doctor' => $doctores[$this->faker->numberBetween($min = 0, $max = 2)],
            'condicionMedica' => $condiciones[$condicion],
            'numSesiones' => $this->faker->numberBetween($min = 3, $max = 10),
            'ejercicio' => $ejercicios[$condicion/2],
            'user_id' => $userID[$this->faker->unique->numberBetween($min = 0, $max = 4)]
        ];
    }
}
