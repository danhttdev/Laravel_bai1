<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class HomeController extends Controller
{
    
    public function __construct() {
    	// $this->middleware('auth');
    }

    public function getIndex() {

        $time = $_SERVER['REQUEST_TIME'];
        $timeout_duration = 1;
        if (isset($_SESSION['LAST_ACTIVITY']) && 
        ($time > $_SESSION['LAST_ACTIVITY']) ) {
            session_unset();
            session_destroy();
            session_start();
        }
        $_SESSION['LAST_ACTIVITY'] = 5;

        session_start();
        if (isset($_SESSION['password'])) return view('admin.home');
    	else return view('visitor.home');
    }
}