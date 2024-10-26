<?php

namespace Database\Factories;
use App\Models\Comment;
use App\Models\NewsArticle;
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
    protected $model = Comment::class;

    public function definition()
    {
        return [
            'article_id' =>  NewsArticle::inRandomOrder()->first()->id,
            'user_id' => User::factory(),
            'content' => $this->faker->paragraph,
            'likes' => $this->faker->numberBetween(0, 100),
        ];
    }
}
