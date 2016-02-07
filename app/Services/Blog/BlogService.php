<?php

namespace App\Services\Blog;

use App\Models\Blog\Article;

class BlogService
{
    public static function GetArticle($id)
    {
        $article = Article::find($id);

        return $article;
    }
}
