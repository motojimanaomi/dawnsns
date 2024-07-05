<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\FollowsController;

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

Route::get('register', [PostsController::class, 'register']);//追記

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/top', [PostsController::class,'top']);

Route::get('/post/create-form', [PostsController::class,'createForm']);

Route::post('/post/create', [PostsController::class,'create']);

Route::get('post/{id}/update-form',[PostsController::class, 'updateForm']);

Route::put('post/update', [PostsController::class, 'update']);

Route::delete('post/delete', [PostsController::class, 'delete']);

Route::get('/search',[UsersController::class, 'search']);

Route::post('/search/result', [UsersController::class,'searchResult']);

Route::post('/follow/create',[FollowsController::class, 'followCreate']);

Route::get('/follow-list',[FollowsController::class, 'follows']);

Route::delete('/follow/delete', [FollowsController::class, 'followDelete']);
