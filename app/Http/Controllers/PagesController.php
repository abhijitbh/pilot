<?php

namespace App\Http\Controllers;

class PagesController extends Controller
{

    public function getHome()
    {
    	//return view('auth.login');
        return view('pages.home');
        //return view('auth.login')

    }
}