<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\Content;
use App\Models\Tag;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Content>
 */
class ContentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $categories = Category::pluck('id')->toArray();
        $authors = User::where('role', 'admin')->pluck('id')->toArray();

        return [
            'category_id' => fake()->randomElement($categories),
            'author_id' => fake()->randomElement($authors),
            'title' => fake()->unique()->sentence(),
            'thumbnail' => fake()->imageUrl(),
            'content' => fake()->paragraph(12),
            'status' => 'published',
            'published_at' => fake()->dateTimeBetween('-4 months', now()),
            'created_at' => fake()->dateTimeBetween('-4 months', now()),
            'is_allowed_comment' => fake()->boolean()
        ];
    }

    public function configure()
    {
        return $this->afterCreating(function (Content $content) {
            $tags = Tag::inRandomOrder()->limit(rand(1, 3))->get();
            $content->tags()->attach($tags);
        });
    }
}
