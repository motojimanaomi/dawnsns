<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Auth;

class PostsController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function top()
    {
        $posts = DB::table('posts')->get();
        return view('posts.top', ['posts' => $posts]);
    }

    public function createForm()
    {
        return view('posts.createForm');
    }

    public function create(Request $request)
    {
        $post = $request->input('newPost');
        DB::table('posts')->insert([
            'post' => $post,
            'user_id' => Auth::id(),
            'created_at' => now(),
        ]);
        return redirect('/top');
    }

    public function updateForm($id){
    $post = DB::table('posts')
        ->where('id', $id)
        ->first();
    return view('posts.updateForm', ['post' => $post]);
    }

     public function update(Request $request){
        $id = $request->input('id');
        $up_post = $request->input('upPost');
        DB::table('posts')
            ->where('id', $id)
            ->update(
                ['post' => $up_post]
            );

        return redirect('/top');
    }

    public function delete(Request $request)
    {$id = $request->input('id');
    DB::table('posts')
        ->where('id', $id)
        ->delete();

    return redirect('/top');
    }


}
