<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index() {
//        return "Hello From Controller";
        return view('home');
    }

    public function about() {
//        return "Hello From Controller";
        return view('about');
    }
}
