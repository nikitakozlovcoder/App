<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Articles extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
//        if (!Auth::check())
//        {
//            return redirect() -> back();
//        }
    }

    public function ShowAll()
    {
        return view('Articles.index');
    }
    public function Show()
    {

    }

    public function Add()
    {

    }

    public function Update()
    {

    }
    public function Delete()
    {

    }
}
