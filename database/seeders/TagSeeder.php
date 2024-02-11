<?php

namespace Database\Seeders;

use App\Models\Tag;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Tag::factory()->create(["name" => "#HealthyLiving"]);
        Tag::factory()->create(["name" => "#TravelTips"]);
        Tag::factory()->create(["name" => "#DIYProjects"]);
        Tag::factory()->create(["name" => "#FitnessGoals"]);
        Tag::factory()->create(["name" => "#FashionInspo"]);
        Tag::factory()->create(["name" => "#RecipeIdeas"]);
        Tag::factory()->create(["name" => "#TechTrends"]);
        Tag::factory()->create(["name" => "#PersonalFinance"]);
        Tag::factory()->create(["name" => "#SelfCare"]);
        Tag::factory()->create(["name" => "#BookReviews"]);
        Tag::factory()->create(["name" => "#Entrepreneurship"]);
        Tag::factory()->create(["name" => "#HomeDecor"]);
        Tag::factory()->create(["name" => "#ParentingHacks"]);
        Tag::factory()->create(["name" => "#AdventureTravel"]);
        Tag::factory()->create(["name" => "#WorkLifeBalance"]);
        Tag::factory()->create(["name" => "#DigitalMarketing"]);
        Tag::factory()->create(["name" => "#WellnessWednesday"]);
        Tag::factory()->create(["name" => "#BudgetTravel"]);
        Tag::factory()->create(["name" => "#MovieReviews"]);
        Tag::factory()->create(["name" => "#ProductivityHacks"]);
        Tag::factory()->create(["name" => "#HealthyRecipes"]);
        Tag::factory()->create(["name" => "#SocialMediaTips"]);
        Tag::factory()->create(["name" => "#GardeningTips"]);
        Tag::factory()->create(["name" => "#Mindfulness"]);
        Tag::factory()->create(["name" => "#PhotographyTips"]);
        Tag::factory()->create(["name" => "#CareerAdvice"]);
        Tag::factory()->create(["name" => "#FashionTrends"]);
        Tag::factory()->create(["name" => "#FinancialPlanning"]);
        Tag::factory()->create(["name" => "#MentalHealthAwareness"]);
        Tag::factory()->create(["name" => "#CreativeWriting"]);
        Tag::factory()->create(["name" => "#TravelPhotography"]);
        Tag::factory()->create(["name" => "#SmallBusinessTips"]);
        Tag::factory()->create(["name" => "#PlantBasedRecipes"]);
        Tag::factory()->create(["name" => "#ParentingAdvice"]);
        Tag::factory()->create(["name" => "#TravelDestinations"]);
        Tag::factory()->create(["name" => "#HomeOrganization"]);
        Tag::factory()->create(["name" => "#FreelancingTips"]);
        Tag::factory()->create(["name" => "#MovieRecommendations"]);
        Tag::factory()->create(["name" => "#SEOStrategy"]);
        Tag::factory()->create(["name" => "#HealthyEating"]);
        Tag::factory()->create(["name" => "#FashionStyle"]);
        Tag::factory()->create(["name" => "#InvestmentTips"]);
        Tag::factory()->create(["name" => "#YogaPractice"]);
        Tag::factory()->create(["name" => "#DIYHomeImprovement"]);
        Tag::factory()->create(["name" => "#FamilyFun"]);
        Tag::factory()->create(["name" => "#TravelInspiration"]);
        Tag::factory()->create(["name" => "#TimeManagement"]);
        Tag::factory()->create(["name" => "#PodcastRecommendations"]);
        Tag::factory()->create(["name" => "#MindsetShift"]);
        Tag::factory()->create(["name" => "#OnlineBusinessTips"]);
    }
}
