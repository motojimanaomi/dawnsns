<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Auth;
use Illuminate\Support\Facades\Validator;

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
              dd($request);

      $request->file('file')->store('');
        $name = $request->input('name');
        DB::table('users')
            ->where('id', Auth::id())
            // 更新しても変わらないものにする。idは変わらない
            ->update(
                ['name' => $name]
            );
        $image = $request->input('image');
        DB::table('users')
            ->where('id', Auth::id())
            ->update(
                ['image' => $image]
            );
        $email = $request->input('email');
        DB::table('users')
            ->where('id', Auth::id())
            ->update(
                ['email' => $email]
            );
        $password = $request->input('password');
        DB::table('users')
            ->where('id', Auth::id())
            ->update(
                ['password' => $password]
            );
        $password_confirmation = $request->input('password_confirmation');
        DB::table('users')
            ->where('id', Auth::id())
            ->update(
                ['password_confirmation' => $password_confirmation]
            );
        $bio = $request->input('bio');
        DB::table('users')
            ->where('id', Auth::id())
            ->update(
                ['bio' => $bio]
            );

        return redirect('/profile');
    }

    protected function validator(array $request)
    {
        return Validator::make($request,
        [
        'name' => ['required', 'between:4,12','"/^[ぁ-んァ-ヶ一-龥々]+$/u"'],
        'image' => ['required'],
        'email' => ['required','max:255','"/^[!-~]+$/"','email','unique'],
        'password' => ['required', 'min:8'],
        'password_confirmation' => ['required', 'min:8', 'same:password'],
        'bio' => ['max:400'],
        ],

        [
        'name.required' => 'ユーザー名を入力してください。',
        'name.between:4,12' => 'ユーザー名は4文字以上12文字以内で入力してください。',
        'name.^[ぁ-んァ-ヶ一-龥々]+$/u' => 'ユーザー名には全角漢字カタカナひらがな数字記号もしくは半角英数記号を入力してください。',

        'email.required' => 'メールアドレスを入力してください。',
        'email.max:255' => 'メールアドレスは255文字以内で入力してください。',
        'email."/^[!-~]+$/"' => 'メールアドレスには利用可能な文字を入力してください。',
        'email.email' => 'メールアドレスは正しい形式で入力してください。',
        'email.unique' => '入力されたメールアドレスはすでに登録されています。別のメールアドレスを登録してください。',

        'email.email' => 'メールアドレスではありません',
        'password.required' => '必須項目です',
        'password.min' => '8文字以上で入力してください',
        'password-confirm.required' => '必須項目です',
        'password-confirm.min' => '8文字以上で入力してください',
        'password-confirm.same' => 'パスワードと確認用パスワードが一致していません',

        'bio.max:400' => 'メッセージは400文字以内で入力してください。',

        ]);
        // dd($name);
    }

}
