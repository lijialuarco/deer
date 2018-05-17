<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $guarded = [];

    public function cate()
    {
        return $this->hasOne(Category::class, 'id', 'cate_id');
    }
}
