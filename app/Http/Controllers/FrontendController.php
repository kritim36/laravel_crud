<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    function index(){
       // $students = Student::all();
       $students = Student::orderBy('id','desc')->get();
        return view('welcome',compact('students'));
    }

    function about(){
        return view('about',compact('studentss'));
    }

    function contact(){
        return view('contact');
    }
}
