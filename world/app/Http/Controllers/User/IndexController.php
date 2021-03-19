<?php

namespace App\Http\Controllers\User;

use App\Models\Posts;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\User;

class IndexController extends Controller
{
    public function index()
    {
        $posts =  Posts::all();
        return view('dashboard.index',[
            'posts' => $posts
        ]);
    }
}
