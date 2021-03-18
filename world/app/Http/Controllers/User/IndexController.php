<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\User;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        return view('dashboard.index');
    }
}
