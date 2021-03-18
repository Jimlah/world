<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\User\IndexController;
use App\Http\Controllers\User\PostsController;
use App\Http\Controllers\Auth\RegisterController;
use Illuminate\Routing\Router;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('login/', [LoginController::class, 'index'])->name('login');
Route::post('login/', [LoginController::class, 'login']);

Route::get('logout/', [LogoutController::class, 'logout']);

Route::get('register/', [RegisterController::class, 'index']);
Route::post('register/', [RegisterController::class, 'register']);

Route::get('dashboard/', [IndexController::class, 'index'])->name('dashboard');

Route::resource('dashboard/posts/', 'App\Http\Controllers\User\PostsController');

// Route::get('dashboard/posts/', [PostsController::class, 'index']);
// Route::get('dashboard/posts/create', [PostsController::class, 'create']);
// Route::post('dashboard/posts/', [PostsController::class, 'store']);
// Route::get('dashboard/posts/{id}', [PostsController::class, 'show']);
// Route::get('dashboard/posts/{id}/edit', [PostsController::class, 'edit']);
// Route::put('dashboard/posts/{id}/update', [PostsController::class, 'update']);
// Route::delete('dashboard/posts/{id}/destroy', [PostsController::class, 'destroy']);
