<?php

namespace App\Models;

use IvoPetkov\HTML5DOMDocument;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

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

    public function image()
    {
        $html = $this->body;
        $dom = new HTML5DOMDocument();
        $dom->loadHTML($html);
        $img = $dom->querySelector('img');
        if ($img) {
            return $img->getAttribute('src');
        }
        return '';
    }
}
