<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Posts extends Model
{
    use HasFactory;

    protected $guarded = [];

    /**
     * Returns the comments of a post
     *
     * @return void
     */
    public function comments()
    {
        return $this->hasMany(Comments::class, 'on_post');
    }

    /**
     * Returns the author of a post
     *
     * @return void
     */
    public function author()
    {
        return $this->belongsTo(User::class, 'author_id');
    }
}
