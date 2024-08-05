<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\FollowsController;
use App\Http\Controllers\FollowersController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProfileEditController;
use App\Http\Controllers\OtherProfileController;
use App\Http\Controllers\UploadController;

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

Route::get('register', [PostsController::class, 'register']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/top', [PostsController::class,'top']);

Route::get('/post/create-form', [PostsController::class,'createForm']);

Route::post('/post/create', [PostsController::class,'create']);

Route::get('post/{id}/update-form',[PostsController::class, 'updateForm']);

Route::put('post/update', [PostsController::class, 'update']);

Route::delete('post/delete', [PostsController::class, 'delete']);

Route::get('/search',[UsersController::class, 'search']);

Route::get('/search/result', [UsersController::class,'searchResult']);

Route::post('/follow/create',[FollowsController::class, 'followCreate']);

Route::get('/follow-list',[FollowsController::class, 'follows']);

Route::delete('/follow/delete', [FollowsController::class, 'followDelete']);

Route::get('/follower-list',[FollowersController::class, 'followers']);

Route::get('/profile',[ProfileController::class, 'profile']);

Route::get('/profile/edit',[ProfileEditController::class, 'profileEdit']);

Route::put('profile/update', [ProfileEditController::class, 'update']);

Route::get('/other/profile/{targetUserId}',[OtherProfileController::class, 'otherProfile']);
