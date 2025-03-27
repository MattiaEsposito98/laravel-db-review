<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    public function posts()
    {
        return $this->hasMany(Post::class);
    }
}
