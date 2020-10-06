<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    public function index(){

        $users = User::orderBy('id','Desc')->paginate(9);

        return view ('admin.users.index',compact('users'));

    }
    public function show($id){
        $user = User::find(1);
        return view('admin.users.show',compact('user'));
    }
}
