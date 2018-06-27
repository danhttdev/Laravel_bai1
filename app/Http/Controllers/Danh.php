<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Danh extends Controller
{
    //
    public function index(){
        return "xin chao danh";
    }

    public function index2($value){
        return "xin chao danh=>>>".$value;
    }

    public function index3(){
        return view('welcome');
    }

    public function welcome($name =null, $age=null)
    {
        return "Xin chao ".$name.', tuoi: '.$age;
        # code...
    }
}
