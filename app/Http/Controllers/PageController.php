<?php

namespace App\Http\Controllers;

use App\Blog;
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
        $blogs = Blog::orderBy('id','Desc')->paginate(9);

        return view('client.blog')->with('blogs',$blogs);
    }
    public function blogmore($id){

    $blog = Blog::where('id',$id)->firstOrFail();

        return view('client.blogmore',compact('blog'));
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
