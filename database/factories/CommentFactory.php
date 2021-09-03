<?php

namespace Database\Factories;

use App\Models\Comment;
use Illuminate\Database\Eloquent\Factories\Factory;

class CommentFactory extends Factory
{
    /**
     * @var string
     */
    protected $model = Comment::class;

    public function definition(): array
    {
        return [
            'subject' => $this->faker->sentence('3'),
            'body' => $this->faker->paragraph(3, true),
        ];
    }
}
