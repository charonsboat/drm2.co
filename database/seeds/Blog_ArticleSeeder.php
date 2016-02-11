<?php

use Illuminate\Database\Seeder;
use App\Models\Blog\Article;

class Blog_ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $article = new Article();

        $article->title   = 'Hello, World!';
        $article->content = '# Hello';

        $article->save();
    }
}
