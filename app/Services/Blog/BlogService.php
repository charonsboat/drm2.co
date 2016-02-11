<?php

namespace App\Services\Blog;

use App\Models\Blog\Article;
use Parsedown;

class BlogService
{
    /**
     * Returns the Article with the specified identifier.
     *
     * @param $id string
     * @return Article
     */
    public static function GetArticle($id)
    {
        $article = Article::find($id);

        return $article;
    }

    /**
     * Creates a new Article.
     *
     * @param $title string
     * @param $content string
     * @return void
     */
    public static function CreateArticle($title, $content)
    {
        $article = new Article();

        $article->title   = $title;
        $article->content = Parsedown::instance()
                            ->setMarkupEscaped(true)
                            ->text($content);

        $article->save();
    }
}
