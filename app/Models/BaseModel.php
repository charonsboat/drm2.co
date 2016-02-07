<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BaseModel extends Model
{
    use \App\Models\Traits\UuidKey;

    // disable auto-incrementing key generation for models
    public $incrementing = false;
}
