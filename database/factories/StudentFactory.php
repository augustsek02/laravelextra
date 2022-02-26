<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class StudentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'first_name' => $this->faker->firstName,
            'last_name' => $this->faker->lastName,
            'date_of_birth' => $this->faker->date('Y-m-d', $max='now'),
            'class' => $this->faker->randomElement(['P1', 'P2', 'P3', 'P4', 'P5', 'P6','p7']),
            'parent_name' => $this->faker->name,
            'home_address' => $this->faker->state,
        ];
    }
}
