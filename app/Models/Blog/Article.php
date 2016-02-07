<?php

namespace App\Models\Blog;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use \App\Models\Traits\UuidKey;

    // set table name
    protected $table = 'blog_articles';

    // disable auto-incrementing key generation for model
    public $incrementing = false;
}
