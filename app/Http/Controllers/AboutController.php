<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function about(){
    	return view('others.about');
    }

    public function contact(){
    	return view('others.contact');
    }

    public function wishlist(){
    	return view('others.wishlist');
    }



}
