<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        return view('client.index');
    }
    public function about(){
        return view('client.about');
    }

    public function blog(){
        return view('client.blog');
    }
    public function blogmore(){
        return view('client.blogmore');
    }
    public function portfolio(){
        return view('client.portfolio');
    }
    public function services(){
        return view('client.services');
    }
    public function contact(){
        return view('client.contact');
    }
}