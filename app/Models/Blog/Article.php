<?php

namespace App\Models\Blog;

use Illuminate\Database\Eloquent\Model;
use App\Models\BaseModel;

class Article extends BaseModel
{
    // set table name
    protected $table = 'blog_articles';
}
