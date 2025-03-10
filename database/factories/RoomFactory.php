<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Room>
 */
class RoomFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->sentence(5, false),
            'slug' => $this->faker->slug,
            'description' => $this->faker->text,
            'room_type_id' => $this->faker->numberBetween(1, 5),
            'status' => $this->faker->randomElement(['available', 'booked', 'maintenance']),
            'price' => $this->faker->randomNumber(5),
            'capacity' => $this->faker->numberBetween(1, 5),
            'created_by' => \App\Models\User::factory(),
        ];
    }
}
