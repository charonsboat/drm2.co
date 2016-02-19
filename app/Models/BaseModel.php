<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BaseModel extends Model
{
    use \App\Models\Traits\UuidKey;
    use \Illuminate\Database\Eloquent\SoftDeletes;

    // disable auto-incrementing key generation for models
    public $incrementing = false;

    // make sure dates mutated into Carbon objects
    protected $dates = [ 'created_at', 'updated_at', 'deleted_at' ];
}
