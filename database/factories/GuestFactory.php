<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Guest>
 */
class GuestFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'full_name' => fake()->name(),
            'phone_number' => fake()->numerify('############'),
            'email' => fake()->unique()->safeEmail(),
            'country_id' => fake()->numberBetween(1, 246),
            'gender' => fake()->randomElement(['M', 'F']),
            'date_of_birth' => fake()->date(),
        ];
    }
}
