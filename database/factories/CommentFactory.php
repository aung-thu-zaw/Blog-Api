<?php

namespace Database\Factories;

use App\Models\Content;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Comment>
 */
class CommentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $contents = Content::pluck('id')->toArray();
        $users = User::where('role', 'user')->pluck('id')->toArray();

        return [
            'content_id' => fake()->randomElement($contents),
            'user_id' => fake()->randomElement($users),
            'comment' => fake()->paragraph(),
            'created_at' => fake()->dateTimeBetween('-1 months', now()),
        ];
    }
}
