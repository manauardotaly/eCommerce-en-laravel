<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class userController extends Controller
{
    function login(Request $request){
        $user = User::where(['email' => $request->email])
                ->where(['password' => MD5($request->password)])
                ->first();
        if($user){
            $request->session()->put('user', $user);
            return redirect('/');
        }else{
            return 'not matched';
        }
    }
}
