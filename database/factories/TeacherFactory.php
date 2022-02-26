<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class TeacherFactory extends Factory
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
            'phone_number' => $this->faker->unique()->e164PhoneNumber,
            'email' => $this->faker->unique()->safeEmail(),
            'address' => $this->faker->address,
            'age' => $this->faker->numberBetween(24, 50),
            'dob' => $this->faker->date('Y-m-d', $max='now'),
        ];
    }
}
