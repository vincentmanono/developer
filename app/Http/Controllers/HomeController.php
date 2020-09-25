<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Portfolio;
use App\Subscriber;
use App\User;
use App\Blog;
use App\Client;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $countportfolios= Portfolio::all()->count();
        $countnewsletters= Portfolio::all()->count();
        $countusers= User::all()->count();
        $countblog=Blog::all()->count();
        $countclient=Client::all()->count();
        $portfolios= Portfolio::orderBy('id','desc')->paginate(5);
        $newsletters = Subscriber::orderBy('id','desc')->paginate(5);
        $users=User::orderBy('id','desc')->paginate(8);

        return view('home',compact('countclient','countblog','users','countusers','portfolios','countportfolios','newsletters','countnewsletters'));
    }
}
