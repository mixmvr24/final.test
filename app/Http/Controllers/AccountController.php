<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AccountController extends Controller
{
    public  function info(){
        return view('user.profile');
    }

    public  function pm(){
        return view('user.pm');
    }

    public  function published(){
        return view('user.published');
    }

//    public  function moderated(){
//        return view('user.moderated');
//    }
//
//    public  function deleted(){
//        return view('user.deleted');
//    }

}
