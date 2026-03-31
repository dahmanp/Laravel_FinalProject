<?php

namespace Database\Factories;

use App\Models\Model;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Model>
 */
class TaskFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake()->randomElement(['Walk', 'Medication', 'Play', 'Sleep']),
            'description' => fake()->sentence(),
            'notification_time' => fake()->time('H:i'),
            'days' => ['Monday', 'Friday'],
            'multiple_notifs' => $this->faker->boolean(),
        ];
    }
}
