<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Terapia;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class SesionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $terapiaID = Terapia::all();

        return [
            'dolor' => $this->faker->numberBetween($min = 0, $max = 10),
            'caida' => $this->faker->numberBetween($min = 0, $max = 1),
            'numSesion' => 1,
            'series' => $this->faker->numberBetween($min = 2, $max = 4),
            'repRealizadas' => 3,
            'extensionMax' => 25.00,
            'rangos' => json_encode(['ejs' => [json_encode(['rep' =>'1', 'vals' => [0.00, 2.00, 3.00, 4.00, 5.00, 6.00, 8.00, 6.00, 10.00, 12.00, 13.00, 15.00, 17.00, 18.00, 20.00, 21.00, 23.00, 24.00, 25.00, 23.00, 22.00, 20.00, 21.00, 18.00, 17.00, 16.00, 15.00, 13.00, 11.00, 10.00, 9.00, 8.00, 7.00, 5.00, 3.00, 2.00, 0.00]]),
                                                json_encode(['rep' =>'1', 'vals' => [0.00, 2.00, 3.00, 4.00, 5.00, 6.00, 8.00, 6.00, 10.00, 12.00, 13.00, 15.00, 17.00, 18.00, 20.00, 21.00, 23.00, 24.00, 25.00, 23.00, 22.00, 20.00, 21.00, 18.00, 17.00, 16.00, 15.00, 13.00, 11.00, 10.00, 9.00, 8.00, 7.00, 5.00, 3.00, 2.00, 0.00]]),
                                                json_encode(['rep' =>'1', 'vals' => [0.00, 2.00, 3.00, 4.00, 5.00, 6.00, 8.00, 6.00, 10.00, 12.00, 13.00, 15.00, 17.00, 18.00, 20.00, 21.00, 23.00, 24.00, 25.00, 23.00, 22.00, 20.00, 21.00, 18.00, 17.00, 16.00, 15.00, 13.00, 11.00, 10.00, 9.00, 8.00, 7.00, 5.00, 3.00, 2.00, 0.00]])]]),
            'terapia_id' => $terapiaID[$this->faker->numberBetween($min = 0, $max = 4)]
        ];
    }
}
