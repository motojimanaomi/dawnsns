<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Auth;

class FollowersController extends Controller
{


    public function followers()
    {
        $followers = DB::table('users')
        ->join('follows', 'users.id', '=', 'follows.follower_id')
        ->where('user_id', Auth::id())
        ->get();
        // dd($followers);

        $posts = DB::table('posts')
        ->join('follows', 'posts.user_id', '=', 'follows.follower_id')
        ->join('users', 'posts.user_id', '=', 'users.id')
        ->where('follows.user_id', Auth::id())
        ->get();

        return view('followers.followers',['followers' => $followers, 'posts' => $posts]);
    }
}
