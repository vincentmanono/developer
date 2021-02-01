<?php

namespace App\Http\Controllers;

use App\Blog;
use App\Contact;
use App\Subscriber;
use App\portfolio;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\Cast\String_;

class PageController extends Controller
{
    public function index()
    {

        $bloggers = Blog::orderBy('id', 'Desc')->paginate(1);
        $blogs = Blog::orderBy('id', 'Desc')->paginate(3);
        return view('client.index', compact('blogs', 'bloggers'));
    }
    public function about()
    {
        return view('client.about_us');
    }

    public function blog()
    {
        $blogs = Blog::latest()->paginate(9);

        return view('client.blog')->with('blogs', $blogs);
    }
    public function singleblog($blog)
    {
        $blog = Blog::where('slug', $blog)->first();
        $topFiveBlog = Blog::latest()->paginate(5);
        return view("client.singleBlog", compact("blog", "topFiveBlog"));
    }
    public function blogmore($blogmore_slug)
    {


        $next = Blog::where('slug', '>', $blogmore_slug)->orderBy('id', 'Desc')->first();
        $previous = Blog::where('slug', '<', $blogmore_slug)->orderBy('id', 'Desc')->first();

        $recents = Blog::orderBy('id', 'Desc')->paginate(5);
        $blog = Blog::where('slug', $blogmore_slug)->firstOrFail();
        $blogs = Blog::orderBy('id', 'Desc')->paginate(10);
        return view('client.blogmore', compact('blog', 'blogs', 'recents', 'next', 'previous'));
    }

    public function portfolio()
    {

        $portfolios = Portfolio::orderBy('id', 'Desc')->paginate(9);
        return view('client.portfolio', compact('portfolios'));
    }
    public function services()
    {
        return view('client.services');
    }
    public function contact()
    {
        return view('client.contact');
    }
    public function faq()
    {
        return view('client.faq');
    }
}