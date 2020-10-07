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
        return view('admin.users.create',compact('user'));

    }
}
