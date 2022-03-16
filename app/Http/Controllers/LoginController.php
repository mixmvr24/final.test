<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(Request $request){
        if(Auth::check()){
            return redirect()->intended('user.private');
        }

        $formfield = $request->only(['email','password']);

        if(Auth::attempt($formfield)){
            return redirect()->intended('user.private');
        }

        return redirect(route('user.login'))->withErrors([
            'email' => 'Не удалось авторизировать'
        ]);
    }

}
