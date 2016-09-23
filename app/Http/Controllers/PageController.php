<?php

namespace App\Http\Controllers;


use Auth;
use Illuminate\Http\Request;
use App\Http\Requests;

class PageController extends Controller
{
    //

    function index()
    {
        if (Auth::user()) {
            return response()->redirectTo("/home");
        } else {
            return view('welcome');
        }
    }

    function home()
    {
        if (Auth::user()) {
            return view("home.index");
        } else {
            return view("welcome");
        }
    }
}
