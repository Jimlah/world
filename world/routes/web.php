<?php

use App\Http\Controllers\Admin\IndexController;
use App\Http\Controllers\Admin\PostsController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use Illuminate\Support\Facades\Route;

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

Route::get('register/', [RegisterController::class, 'index']);
Route::post('register/', [RegisterController::class, 'register']);

Route::get('admin/', [IndexController::class, 'index']);

Route::get('admin/posts/', [PostsController::class, 'index']);
Route::get('admin/posts/create', [PostsController::class, 'create']);
Route::post('admin/posts/', [PostsController::class, 'store']);
Route::get('admin/posts/{id}', [PostsController::class, 'show']);
Route::get('admin/posts/{id}/edit', [PostsController::class, 'edit']);
Route::put('admin/posts/{id}/update', [PostsController::class, 'update']);
Route::delete('admin/posts/{id}/destroy', [PostsController::class, 'destroy']);
