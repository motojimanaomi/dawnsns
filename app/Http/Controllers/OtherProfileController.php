<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Auth;

class OtherProfileController extends Controller
{

    public function otherProfile($targetUserId)
    {
        $profile = DB::table('users')
        ->where('id', $targetUserId)
        ->get();
        // 同じ箱の中の＄は使えない。＄profileはだめ
//    dd($profile);

        $posts = DB::table('posts')
        ->where('user_id', $targetUserId)
        ->get();

        return view('profile.otherProfile',['profile' => $profile, 'posts' => $posts]);

    }


}
