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
        ->get();

   dd($profile);

        return view('profile.profileEdit',['profile' => $profile]);

    }

    public function updateForm($id){
    $user = DB::table('users')
        ->where('id', $id)
        ->first();
    return view('profile.profileEdit', ['profile' => $user]);
}

    public function update(Request $request){
        $id = $request->input('id');
        $up_post = $request->input('upPost');
        DB::table('users')
            ->where('id', $id)
            ->update(
                ['user' => $up_post]
            );

        return redirect('/index');
    }
}
