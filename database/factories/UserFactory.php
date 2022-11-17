<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $id = ['cc', 'ti', 'ce'];

        return [
            'name' => $this->faker->name,
            'typedoc' => $id[$this->faker->numberBetween($min = 0, $max = 2)],
            'document' => $this->faker->numberBetween($min = 100000000, $max = 999999999),
            'nameem' => $this->faker->name,
            'numem' => $this->faker->e164PhoneNumber,
        ];
    }
}
