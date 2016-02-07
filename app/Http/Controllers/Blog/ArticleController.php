<?php

namespace App\Http\Controllers\Blog;

use App\Http\Controllers\Blog\BaseController; // make sure we're using the correct BaseController
use App\Services\Blog\BlogService;

class ArticleController extends BaseController
{
    // GET /blog/articles/{id}
    // Returns: Article
    public function getArticle($id)
    {
        $article = BlogService::GetArticle($id);

        // convert article to json data for transmission
        return response()->json($article);
    }
}
