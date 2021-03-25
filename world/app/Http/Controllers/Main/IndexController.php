<?php

namespace App\Http\Controllers\Main;

use App\Models\Posts;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    public function index()
    {
        $posts = Posts::where('active', 1)
                    ->orderBy('created_at', 'desc')
                    ->paginate(18);

        return view("welcome", [
            'posts' => $posts
        ]);
    }
}
