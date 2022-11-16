<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

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
        $id = ['cc', 'ti', 'otro'];
        return [
            'name' => $this->faker->name,
            'typedoc' => $id[$this->faker->numberBetween($min = 0, $max = 2)],
            'document' => $this->faker->numberBetween($min = 100000000, $max = 999999999),
            'nameem' => $this->faker->e164PhoneNumber,
            'numem' => $this->faker->name
        ];
    }
}
