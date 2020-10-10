<?php

namespace App\Http\Controllers;

use App\Blog;
use App\Contact;
use App\Subscriber;
use App\portfolio;
use Illuminate\Http\Request;


class PageController extends Controller
{
    public function index(){

        $bloggers =Blog::orderBy('id','Desc')->paginate(1);
        $blogs =Blog::orderBy('id','Desc')->paginate(3);
        return view('client.index',compact('blogs','bloggers'));
    }
    public function about(){
        return view('client.about');
    }

    public function blog(){
        $blogs = Blog::orderBy('id','Desc')->paginate(9);

        return view('client.blog')->with('blogs',$blogs);
    }
    public function blogmore($blogmore_slug){

        $blog = Blog::where('slug',$blogmore_slug)->firstOrFail();
        $blogs= Blog::orderBy('id','Desc')->paginate(10);
        return view('client.blogmore',compact('blog','blogs'));
    }
    public function portfolio(){

        $portfolios = Portfolio::orderBy('id','Desc')->paginate(9);
        return view('client.portfolio',compact('portfolios'));
    }
    public function services(){
        return view('client.services');
    }
    public function contact(){
        return view('client.contact');
    }


}
