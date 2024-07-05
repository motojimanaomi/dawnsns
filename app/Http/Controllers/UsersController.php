<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Auth;

class UsersController extends Controller
{

    public function search()
    {
        $users = DB::table('users')->get();
        // dd($users);

        return view('follows.search',['users' => $users]);
    }

    public function searchResult(Request $request)
    {
        $keyword = $request->input('keyword');

        $users = DB::table('users')
            ->where("name", "LIKE", "%".$keyword."%")
            ->get();

        return view('follows.search',['users' => $users]);
    }



}
