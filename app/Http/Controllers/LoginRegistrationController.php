<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Laravel\Socialite\Facades\Socialite;
class LoginRegistrationController extends Controller
{

    public function CallGithub()
    {
       return Socialite::driver('github')->redirect();

    }
    public function logout(Request $request)
    {
        $request->session()->flush();
        return redirect('/');
    }
    public function GithubCallback()
    {
        $user = Socialite::driver('github')->stateless()->user();
//        dd($user);
        $token = $user->token;
        $user_id = $user->getId();
        $nickname = $user->getNickname();
        $name = $user->getName();
        $email = $user->getEmail();
        $image = $user->getAvatar();

        Session::put('token',$token);
        Session::put('user_id',$user_id);
        Session::put('nickname',$nickname);
        Session::put('name',$name);
        Session::put('email',$email);
        Session::put('image',$image);

        $count_value = DB::table('users')->where('email','=',$email)->count();

        if ($count_value == 0){
            DB::table('users')->insert([
                'name' => $name,
                'email' => $email,
                'user_id' => $user_id,
                'nick_name' => $nickname,
            ]);
            return redirect('/deshboard');
        }else{
            return redirect('/deshboard');
        }
    }

}
