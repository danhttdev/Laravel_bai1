<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LogoutController extends Controller
{
    //
    public function __construct() {
    	$this->middleware('auth');
    }

    public function getLogout(){
        session_start();
        session_destroy();
        return redirect()->intended('/');

    }
}
