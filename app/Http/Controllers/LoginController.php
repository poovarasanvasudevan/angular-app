<?php

namespace App\Http\Controllers;

use App\User;
use Auth;
use Illuminate\Http\Request;

use App\Http\Requests;

class LoginController extends Controller
{
    //
    function login()
    {
        if (Auth::user()) {
            return response()->redirectTo("/home");
        } else {
            $username = request()->input("username");
            $password = request()->input("password");

            $user = User::where("email", $username)
                ->where("password", md5($password));

            if ($user->count() == 1) {
                Auth::login($user->get()->first());

                return response()->redirectTo("/home");
            } else {
                flash("Invalid Username or password",'error');
                return response()->redirectTo("/");
            }
        }
    }

    function logout() {
        if(Auth::user()) {
            Auth::logout();
            return  response()->redirectTo("/");
        } else {
            return  response()->redirectTo("/");
        }
    }
}
