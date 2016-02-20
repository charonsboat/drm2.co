<?php

namespace App\Services\Blog;

use App\Models\Blog\Article;
use Cocur\Slugify\Slugify;
use Parsedown;

class BlogService
{
    /**
     * Returns the specified Article.
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
        $slugify = new Slugify();
        $article = new Article();

        $article->title            = $title;
        $article->title_slug       = $slugify->slugify($title);
        $article->content_markdown = $content;
        $article->content          = Parsedown::instance()
                                     ->setMarkupEscaped(true)
                                     ->text($content);

        $article->save();
    }

    /**
     * Updates the specified Article.
     *
     * @param $id string
     * @param $title string
     * @param $content string
     * @return void
     */
    public static function UpdateArticle($id, $title, $content)
    {
        $slugify = new Slugify();
        $article = Article::find($id);

        $article->title            = $title;
        $article->title_slug       = $slugify->slugify($title);
        $article->content_markdown = $content;
        $article->content          = Parsedown::instance()
                                     ->setMarkupEscaped(true)
                                     ->text($content);

        $article->save();
    }

    /**
     * Deletes the specified Article.
     *
     * @param $id string
     * @return void
     */
    public static function DeleteArticle($id)
    {
        Article::destroy($id);
    }
}
