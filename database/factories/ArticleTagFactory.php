<?php

namespace Database\Factories;
use App\Models\ArticleTag;
use App\Models\NewsArticle;
use App\Models\Tag;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ArticleTag>
 */
class ArticleTagFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = ArticleTag::class;

    public function definition()
    {
        return [
            'article_id' => NewsArticle::inRandomOrder()->first()->id, // Use existing article
            'tag_id' => Tag::inRandomOrder()->first()->id,             // Use existing tag
        ];
    }
}
