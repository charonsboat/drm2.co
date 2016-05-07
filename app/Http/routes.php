<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$app->group([ 'prefix' => '/' ], function () use ($app)
{
    $app->get('/', function () use ($app) {
        return view('home');
    });

    $app->group([ 'prefix' => '/security' ], function () use ($app)
    {
        $app->get('/tabnabbing', function ()
        {
            return view('security.tabnabbing');
        });
    });
});





// // ANY /blog/?
// $app->group(['prefix' => '/blog'], function () use ($app)
// {
//     // GET /blog
//     $app->get('/', function ()
//     {
//         return view('blog.home');
//     });
//
//     // ANY /blog/articles/?
//     $app->group(['prefix' => '/articles'], function () use ($app)
//     {
//         // POST /blog/articles
//         $app->post('/', 'App\Http\Controllers\Blog\ArticleController@createArticle');
//
//         // GET /blog/articles/{id}
//         $app->get('/{id}', 'App\Http\Controllers\Blog\ArticleController@getArticle');
//
//         // PUT /blog/articles/{id}
//         $app->put('/{id}', 'App\Http\Controllers\Blog\ArticleController@updateArticle');
//
//         // DELETE /blog/articles/{id}
//         $app->delete('/{id}', 'App\Http\Controllers\Blog\ArticleController@deleteArticle');
//     });
// });
