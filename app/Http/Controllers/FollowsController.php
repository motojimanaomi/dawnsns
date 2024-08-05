<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Auth;

class FollowsController extends Controller
{

    public function follows()
    {
        $follows = DB::table('users')
        ->join('follows', 'users.id', '=', 'follows.user_id')
        ->where('follower_id', Auth::id())
        ->get();
        $posts = DB::table('posts')
        ->join('follows', 'posts.user_id', '=', 'follows.user_id')
        ->join('users', 'posts.user_id', '=', 'users.id')
        ->where('follower_id', Auth::id())
        ->get();
// dd($posts);

        return view('follows.follows',['follows' => $follows, 'posts' => $posts]);
    }

    public function followCreate(Request $request)
    {
        $targetUserId = $request->input('targetUserId');
        DB::table('follows')->insert([
            'user_id' => $id,
            'follower_id' => Auth::id(),
            'created_at' => now(),
        ]);
        return redirect('/search');
    }

    public function followDelete(Request $request)
    {
        $id = $request->input('id');
        DB::table('follows')
        ->where('user_id', $id)
        ->where('follower_id',Auth::id())
        ->delete();

        return redirect('/search');
    }


}
