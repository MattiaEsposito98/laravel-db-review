<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public function client()
    {
        return $this->belongsTo(Client::class);
    }
}
