<?php

namespace Database\Factories;

use App\Models\NewsArticle;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\NewsArticle>
 */
class NewsArticleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = NewsArticle::class;

    public function definition()
    {
        return [
            'user_id' => User::factory(),
            'title' => $this->faker->sentence,
            'slug' => Str::slug($this->faker->sentence),
            'content' => $this->faker->paragraphs(3, true),
            'main_image' => $this->faker->imageUrl(),
            'views' => $this->faker->numberBetween(0, 1000),
            'meta_title' => $this->faker->sentence,
            'meta_description' => $this->faker->sentence,
            'meta_keywords' => implode(',', $this->faker->words(5)),
            'published_at' => $this->faker->dateTimeBetween('-1 year', 'now'),
            'status' => 'published',
        ];
    }
}
