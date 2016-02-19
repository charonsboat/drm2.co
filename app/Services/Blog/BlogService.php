<?php

namespace App\Services\Blog;

use App\Models\Blog\Article;
use Cocur\Slugify\Slugify;
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
    public static function CreateArticle($title = '', $content = '')
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
     * Deletes the Article with the specified identifier.
     *
     * @param $id string
     * @return void
     */
    public static function DeleteArticle($id)
    {
        Article::destroy($id);
    }
}
