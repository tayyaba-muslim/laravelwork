<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Route;

class customcontroller extends Controller
{
    function index(){
        return view('welcome');
    }
    function about(){
        return view('about');
    }
    function contact(){
        return view('contact');
    }
}


