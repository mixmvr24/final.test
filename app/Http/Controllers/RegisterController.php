<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    public function save(Request $request){
        if (Auth::check()){
            return redirect(route('user.private'));
        }

        $validateFields = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required'
        ]);

/*        if (User::where('email' , $validateFields['email'])->exist()){
            return redirect(route('user.login'))->withErrors([
                'name' => 'Такой логин уже используется',
                'email' => 'Такой пользователь уже зарегистрирован'
                ]);
        }*/

        $user = User::create($validateFields);
        if($user){
            Auth::login($user);
            return redirect(route('user.private'));
        }

        return redirect(route('user.login'))->withErrors([
            'formError' => 'Произошла ошибка при сохранении пользователя'
        ]);
    }
}
