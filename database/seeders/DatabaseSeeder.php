<?php

namespace Database\Seeders;

use App\Models\Article;
use App\Models\Comment;
use App\Models\Episode;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder {
    /**
     * Seed the application's database.
     */
    protected array $articles = ['Article One'];
    protected array $episodes = ['Episode One'];
    public function run(): void {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
        ]);
        User::factory()->create([
            'name' => 'selia',
            'email' => 'selia@gmail.com',
        ]);
        collect($this->articles)->each(function (string $article) {
            Article::create([
                'name' => $article,
                'slug' => str($article)->slug(),
            ]);
        });
        collect($this->episodes)->each(function (string $episode) {
            Episode::create([
                'name' => $episode,
                'slug' => str($episode)->slug(),
            ]);
        });
        $comment = Comment::create([
            'user_id' => 1,
            'body' => 'Root Comment',
            'commentable_type' => Article::class,
            'commentable_id' => 1,
        ]);
        Comment::create([
            'user_id' => 1,
            'parent_id' => $comment->id,
            'body' => 'Reply Comment',
            'commentable_type' => Article::class,
            'commentable_id' => 1,
        ]);
        Comment::create([
            'user_id' => 1,
            'parent_id' => $comment->id,
            'body' => 'Another Reply Comment',
            'commentable_type' => Article::class,
            'commentable_id' => 1,
        ]);
        Comment::create([
            'user_id' => 1,
            'body' => 'Another Root Comment',
            'commentable_type' => Article::class,
            'commentable_id' => 1,
        ]);
    }
}
