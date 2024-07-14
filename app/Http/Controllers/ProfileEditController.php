<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Auth;

class ProfileEditController extends Controller
{

    public function profileEdit()
    {
        $profile = DB::table('users')
        ->where('id', Auth::id())
        ->first();

  //  dd($profile);

        return view('profile.profileEdit',['profile' => $profile]);

    }

    public function updateForm($id){
    $post = DB::table('users')
        ->where('id', $id)
        ->first();
    return view('profile.profileEdit', ['id' => $id]);
}


}
