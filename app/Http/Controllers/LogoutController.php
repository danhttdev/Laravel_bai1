<?php

namespace App\Http\Controllers;
use Auth;
use Cookie;
use Illuminate\Http\Request;

class LogoutController extends Controller
{
    //
    public function __construct() {
    	$this->middleware('auth');
    }

    public function getLogout(){
        $rememberMeCookie = Auth::getRecallerName();
        $cookie = Cookie::forget($rememberMeCookie);
    
        
        session_start();
        session_destroy();
        // return redirect()->intended('/');
        return redirect()->intended('/')->withCookie($cookie);
        // return Redirect::to('/')->withCookie($cookie);

    }
}
