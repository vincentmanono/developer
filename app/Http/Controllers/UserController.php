<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\File;
use Illuminate\Database\QueryException;
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
     //   dd($request);
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
        if($request->type !=''){
            $post->type= $request->type;
        }
       if($request->password !=''){

        $password = Hash::make($request->password);

        $post->password = $password;
       }

       if (file_exists($request->file('image'))) {

        // Get filename with extension
        $filenameWithExt = $request->file('image')->getClientOriginalName();

        // Get just the filename
        $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);

        // Get extension
        $extension = $request->file('image')->getClientOriginalExtension();

        // Create new filename
        $filenameToStore = $filename . '_' . time() . '.' . $extension;

        // Uplaod image
        $path = $request->file('image')->storeAs('public/user', $filenameToStore);
        $avatar  = $filenameToStore;
        $post->image = $avatar;
    }



        if ($post->save()) {

            return redirect()->back()->with('success','User created successfully');
        } else {
            return redirect()->back()->with('error','An error occured while creating user');
        }


    }
    public function update(Request $request,$id){
        $this->validate($request,[

            'name' => ['required', 'string', 'max:255'],
            'phone'=>['required','string'],
            'image'=>[''],

            'email' => ['required', 'string', 'email', 'max:255', ],
            'password' => [ 'string', 'min:8', 'confirmed'],
        ]);

        $post = User::where('id',$id)->firstOrFail();

        $post->name = $request->name;
        $post->phone =$request->phone;
        $post->email = $request->email;
        $post->type= $request->type;
        $post->password =$request->password;
        $password = Hash::make($request->password);
        $post->password = $password;




        if (file_exists($request->file('image'))) {



            $old_avatar = $post->image;
            $avatar = $request->image;
            if ($old_avatar != 'avatar.png' && !Str::contains($avatar, 'http')) {
                $imagepath = public_path('/storage/user') . '/' . $old_avatar;
                File::delete($imagepath);
            }



            // Get filename with extension
            $filenameWithExt = $request->file('image')->getClientOriginalName();

            // Get just the filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);

            // Get extension
            $extension = $request->file('image')->getClientOriginalExtension();

            // Create new filename
            $filenameToStore = $filename . '_' . time() . '.' . $extension;

            // Uplaod image
            $path = $request->file('image')->storeAs('public/user', $filenameToStore);

            // Upload image
            $post->image = $filenameToStore;
        }





        if ($post->save()) {

            return redirect()->back()->with('success','User details updated successfully');
        } else {
            return redirect()->back()->with('error','An error occured while updating the user details');
        }

    }
    public function destroy($id){
        try {
            $del = User::where('id', $id)->firstOrFail();

            $old_avatar = $del->image;
            if ($old_avatar != 'avatar.png') {
                $imagepath = public_path('/storage/user/')  . $old_avatar;
                File::delete($imagepath);
                // Storage::delete('news/'. $old_avatar );
            }

            if ($del->delete()) {

                return redirect()->route('users.index')->with('success', "User removed successfully");;
            } else {

                return back()->with('error', 'Error occurred please try gain!!');;
            }
        } catch (QueryException $ex) {

            return redirect()->back()->with('error','User could not be found');
        }
    }
}
