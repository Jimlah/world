<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comments extends Model
{
    use HasFactory;

    protected $guarded = [];

    /**
     * returns the author of the comment
     *
     * @return void
     */
    public function author()
    {
        return $this->belongsTo(User::class, 'from_user');
    }

    /**
     * returns the post of a comment
     *
     * @return void
     */
    public function post()
    {
        return $this->belongsTo(Posts::class, 'on_post');
    }
}
