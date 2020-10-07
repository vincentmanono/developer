<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Blog;

class UserController extends Controller
{
    public function index(){

        $users = User::orderBy('id','Desc')->paginate(9);

        return view ('admin.users.index',compact('users'));

    }
    public function show($id){

        $user = User::where('id',$id)->firstOrFail();
        return view('admin.users.show',compact('user'));
    }
    public function edit($id){

        $user = User::where('id',$id)->first();
        return view('admin.users.create',compact('user'))->with('param','edit');

    }
    public function create(){
        return view('admin.users.create')->with('param','create');
    }
    public function store(Request $request){
        $this->validate($request,[

            'name' => ['required', 'string', 'max:255'],
            'phone'=>['required','string'],
            'image'=>[''],

            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);

        $post = new User();

        $post->name = $request->name;
        $post->phone =$request->phone;
        $post->email = $request->email;
        $post->password =$request->password;
        


    }
}
