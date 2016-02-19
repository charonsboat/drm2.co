<?php

use Illuminate\Database\Seeder;
use App\Services\Blog\BlogService;

class Blog_ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $title   = 'Hello, World!';
        $content = '## Hello again, world!';

        BlogService::CreateArticle($title, $content);
    }
}
