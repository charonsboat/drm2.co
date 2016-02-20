<?php

namespace App\Http\Controllers\Blog;

use App\Http\Controllers\Blog\BaseController; // make sure we're using the correct BaseController
use App\Services\Blog\BlogService;
use Illuminate\Http\Request;

class ArticleController extends BaseController
{
    // POST /blog/articles
    // Returns: void
    public function createArticle(Request $request)
    {
        $data = $request->json();

        BlogService::CreateArticle($data->get('title'), $data->get('content'));
    }

    // GET /blog/articles/{id}
    // Returns: Article
    public function getArticle($id)
    {
        $article = BlogService::GetArticle($id);

        // convert article to json data for transmission
        return response()->json($article);
    }

    // PUT /blog/articles/{id}
    // Returns: void
    public function updateArticle($id, Request $request)
    {
        $data = $request->json();

        BlogService::UpdateArticle($id, $data->get('title'), $data->get('content'));
    }

    // DELETE /blog/articles/{id}
    // Returns: void
    public function deleteArticle($id)
    {
        BlogService::DeleteArticle($id);
    }
}
