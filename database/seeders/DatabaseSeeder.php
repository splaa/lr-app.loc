<?php

namespace Database\Seeders;

use App\Models\Article;
use App\Models\Comment;
use App\Models\State;
use App\Models\Tag;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        User::create([
            'name' => 'admin',
            'email' => 'admin@email.com',
            'email_verified_at' => now(),
            'password' => Hash::make('adminPassword'),
            'remember_token' => Str::random(10),
        ]);
         User::factory(10)->create();
        $tags = Tag::factory(10)->create();

        $articles = Article::factory(20)->create();
        $tags_id = $tags->pluck('id');

        $articles->each(function ($article) use ($tags_id){
            $article->tags()->attach($tags_id->random(3));
            Comment::factory(3)->create([
                'article_id' => $article->id
            ]);
            State::factory(1)->create([
               'article_id' => $article->id
            ]);
        });


    }
}
