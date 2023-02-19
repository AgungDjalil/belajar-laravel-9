<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use HasFactory;
    use softDeletes;

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    public function totalComments()
    {
        return $this->comments()->count();
    }

    public function scopeActive($query)
    {   
        return $query->where('active', true);
    }
}
