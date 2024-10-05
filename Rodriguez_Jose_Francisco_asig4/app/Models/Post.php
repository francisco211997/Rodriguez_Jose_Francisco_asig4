<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    // 1. Deficcion de relacion belongsTo (muchos a uno) con el modelo User
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // 1.5 Deficcion de relacion belongsToMany (muchos a muchos) con el modelo tag.
    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }
}
