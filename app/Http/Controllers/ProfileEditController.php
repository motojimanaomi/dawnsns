<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;

class ProfileEditController extends Controller
{

    public function profileEdit()
    {
        $profile = DB::table('users')
        ->where('id', Auth::id())
        ->first();

        return view('profile.profileEdit',['profile' => $profile]);
    }


    public function update(Request $request)
    {
        // dd($request);
        $request->validate([
            'name' => ['required', 'between:4,12','string'],
            'file' => ['image','max:20000'],
            'email' => ['required','max:255','regex:/^[0-9a-zA-Z!-~]+$/', 'unique:users,email,'.Auth::user()->email.',email'],
            'bio' => ['max:400'],
        ],
        [
            'name.required' => 'ユーザー名を入力してください。',
            'name.between' => 'ユーザー名は4文字以上12文字以内で入力してください。',
            'name.string' => 'ユーザー名には全角漢字カタカナひらがな数字記号もしくは半角英数記号を入力してください。',

            'file.image' => '画像形式のファイルをアップロードしてください。',
            'file.max' => 'アップロードするファイルは20MB以下にしてください。',

            'email.required' => 'メールアドレスを入力してください。',
            'email.max' => 'メールアドレスは255文字以内で入力してください。',
            'email.regex' => 'メールアドレスには利用可能な文字を入力してください。',
            'email.email' => 'メールアドレスは正しい形式で入力してください。',
            'email.unique' => '入力されたメールアドレスはすでに登録されています。別のメールアドレスを登録してください。',

            'bio.max' => 'メッセージは400文字以内で入力してください。',
        ]);

        if(!empty($request->file('file'))){
            $imagename = $request->file('file')->getClientOriginalName();
            // dd($imagename);
            $request->file('file')->storeAs('public/images',$imagename);
            DB::table('users')
            ->where('id', Auth::id())
            ->update(
                ['image' => $imagename]
            );
        }
        $name = $request->input('name');
        DB::table('users')
            ->where('id', Auth::id())
            // 更新しても変わらないものにする。idは変わらない
            ->update(
                ['name' => $name]
            );
        $email = $request->input('email');
        DB::table('users')
            ->where('id', Auth::id())
            ->update(
                ['email' => $email]
            );
        $password = $request->input('password');
        if(!empty($password)){
            $request->validate([
                'password' => ['required', 'between:8,128','regex:/^[!-~]+$/'],
                'password_confirmation' => ['required','same:password'],
            ],
            [
                'password.required' => 'パスワードを入力してください。',
                'password.between' => 'パスワードは8文字以上128文字以内で入力してください。',
                'password.regex' => 'パスワードには半角英数記号を入力してください。',

                'password_confirmation.required' => '確認用のパスワードを入力してください。',
                'password_confirmation.same:password' => 'パスワードと確認の入力が一致しません。',

                'password.required' => '必須項目です',
                'password.min' => '8文字以上で入力してください',
                'password-confirm.required' => '必須項目です',
                'password-confirm.min' => '8文字以上で入力してください',
                'password-confirm.same' => 'パスワードと確認用パスワードが一致していません',
            ]);

            $password =  Hash::make($password);
            DB::table('users')
                ->where('id', Auth::id())
                ->update(
                    ['password' => $password]
            );
        }
        $bio = $request->input('bio');
        DB::table('users')
            ->where('id', Auth::id())
            ->update(
                ['bio' => $bio]
            );
        // dd($imagename);
        return redirect('/profile');
    }

}
