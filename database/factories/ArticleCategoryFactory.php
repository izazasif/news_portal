<?php

namespace Database\Factories;

use App\Models\ArticleCategory;
use App\Models\NewsArticle;
use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ArticleCategory>
 */
class ArticleCategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = ArticleCategory::class;

    public function definition()
    {
        return [
            'article_id' => NewsArticle::inRandomOrder()->first()->id, // Use existing article
            'category_id' => Category::inRandomOrder()->first()->id,   // Use existing category
        ];
    }
}
