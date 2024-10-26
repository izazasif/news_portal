<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Category>
 */
class CategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
     protected $model = Category::class;

    public function definition()
    {
        $name = $this->faker->word;

        return [
            'name' => ucfirst($name),
            'slug' => Str::slug($name),
            'meta_title' => ucfirst($name),
            'meta_description' => $this->faker->sentence,
            'meta_keywords' => implode(',', $this->faker->words(5)),
        ];
    }
}
