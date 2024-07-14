<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Auth;

class ProfileController extends Controller
{

    public function profile()
    {
        $profile = DB::table('users')
        ->where('id', Auth::id())
        ->get();

        $posts = DB::table('posts')
        ->where('user_id', Auth::id())
        ->get();

  //  dd($profile);

        return view('profile.profile',['profile' => $profile, 'posts' => $posts]);

    }



}
