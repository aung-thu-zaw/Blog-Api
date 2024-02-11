<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::factory()->create(["name" => "Lifestyle"]);
        Category::factory()->create(["name" => "Technology"]);
        Category::factory()->create(["name" => "Food and Cooking"]);
        Category::factory()->create(["name" => "Finance and Money Management"]);
        Category::factory()->create(["name" => "Travel"]);
        Category::factory()->create(["name" => "Health and Wellness"]);
        Category::factory()->create(["name" => "Parenting and Family"]);
        Category::factory()->create(["name" => "DIY and Crafts"]);
        Category::factory()->create(["name" => "Business and Entrepreneurship"]);
        Category::factory()->create(["name" => "Entertainment and Pop Culture"]);
    }
}
