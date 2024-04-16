<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    function index(){
        $data = 'Mitali';
        return view('welcome',compact('data'));
    }

    function about(){
        return view('about');
    }

    function contact(){
        return view('contact');
    }
}
