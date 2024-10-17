<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Project>
 */
class ProjectFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title'       => fake()->title,
            'description' => fake()->randomHtml(),
            'end_date'    => fake()->dateTimeBetween('+1 days', '+2 days')->format('Y-m-d'),
            'status'      => fake()->randomElement(['open', 'closed']),
            'tech_stack'  => fake()->randomElement(['php', 'java', 'python'], random_int(1, 3)),
            'created_by'  => User::factory()
        ];
    }
}
