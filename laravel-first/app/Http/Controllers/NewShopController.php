<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewShopController extends Controller
{
    public function index(){
        return view('front-end.home.home');
    }

    public function categoryProduct(){
        return view('front-end.category.category-content');
    }

    public function mail(){
        return view('front-end.contact.mail');
    }
}
