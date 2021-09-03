<?php

namespace Database\Factories;

use App\Models\Article;
use Illuminate\Database\Eloquent\Factories\Factory;
use Str;

class ArticleFactory extends Factory
{
    /**
     * @var string
     */
    protected $model = Article::class;

    public function definition(): array
    {
        $title = $this->faker->sentence(6, true);
        $slug = Str::slug($title);
        return [
            'title' => $title,
            'slug' => $slug,
            'body' => $this->faker->paragraph(100, true),
            'img' => 'https://via.placeholder.com/600/5F1138/FFFFFF/?text=Laravel:8.*',
            'created_at' => $this->faker->dateTimeBetween('-1 year'),
        ];
    }
}
