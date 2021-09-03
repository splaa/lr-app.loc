<?php

namespace Database\Factories;

use App\Models\Tag;
use Illuminate\Database\Eloquent\Factories\Factory;

class TagFactory extends Factory
{
    /**
     * @var string
     */
    protected $model = Tag::class;

    public function definition(): array
    {
        return [
           'label' => $this->faker->unique->word,
        ];
    }
}
