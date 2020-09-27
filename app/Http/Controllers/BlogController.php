<?php

namespace App\Http\Controllers;

use App\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blogs = Blog::orderBy('id','desc')->get();
        return view('admin.blog.index',compact('blogs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.blog.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request )
    {
        //dd($request);
      // dd($request->all(), user()->id);
        $this->validate($request,[
'title'=>'required',
'subtitle'=>'required',
'image'=>'required',
'body'=>'required'
        ]);

        $post = new Blog();
        $post->title = $request->title;
        $post->subtitle =$request->subtitle;
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
            $path = $request->file('image')->storeAs('storage/blog', $filenameToStore);
            $avatar  = $filenameToStore;
            $post->image = $avatar;
        }
        $post->body = $request->body;
        $post->slug = $request->title;
        $post->user_id=auth()->user()->id;


        $validate = $post->save();

        if ($validate) {

            return redirect('home')->with('success','You have successfully added a new blog');

        }
        else{
            return redirect('blog.create')->with('error','An error occured');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $blogs = Blog::orderBy('id','desc')->get();
        $blog = Blog::where('id',$id)->first();
        return view('admin.blog.show',compact('blog','blogs'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function edit(Blog $blog)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Blog $blog)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function destroy(Blog $blog)
    {
        //
    }
}
