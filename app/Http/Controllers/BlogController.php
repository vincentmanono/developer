<?php

namespace App\Http\Controllers;

use App\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;
use Illuminate\Database\QueryException;

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
        return view('admin.blog.create')->with('param','create');
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
            $path = $request->file('image')->storeAs('public/blog', $filenameToStore);
            $avatar  = $filenameToStore;
            $post->image = $avatar;
        }
        $post->body = $request->body;
        $post->slug = Str::of($request->title)->slug();
        $post->user_id=auth()->user()->id;


        $validate = $post->save();

        if ($validate) {

            return redirect('blog')->with('success','You have successfully added a new blog');

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
    public function show($slug)
    {
        $blogs = Blog::orderBy('id','desc')->get();
        $blog = Blog::where('slug',$slug)->first();
        return view('admin.blog.show',compact('blog','blogs'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function edit($slug)
    {
        $editblog = Blog::where('slug',$slug)->first();
        return view('admin.blog.create',compact('editblog'))->with('param','edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request ,$slug)
    {

        request()->validate(array(
            'title' => 'required|string',
            'subtitle'=> 'required',
            'image' => 'image',
            'body' => 'required|string',
        ));
        $upd = Blog::where('slug', $slug)->firstOrFail();
        $slug = Str::of($request->title)->slug();
        $upd->title = $request->input('title');
        $upd->subtitle =$request->input('subtitle');
        $upd->slug = $slug;



        if (file_exists($request->file('image'))) {



            $old_avatar = $upd->image;
            $avatar = $request->image;
            if ($old_avatar != 'avatar.png' && !Str::contains($avatar, 'http')) {
                $imagepath = public_path('/storage/blog') . '/' . $old_avatar;
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
            $path = $request->file('image')->storeAs('public/blog', $filenameToStore);

            // Upload image
            $upd->image = $filenameToStore;
        }


        $upd->body = $request->input('body');
        if ($upd->save()) {

            return redirect()->route('blog.show', $upd->slug)->with('success','Successfully updated the blog');
        } else {
            return redirect()->route('blog.show', $upd->slug)->with('error','An error occured while udating your blog');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function destroy($slug)
    {
        //
        try {
            $del = Blog::where('slug', $slug)->firstOrFail();

            $old_avatar = $del->image;
            if ($old_avatar != 'avatar.png') {
                $imagepath = public_path('/storage/news/')  . $old_avatar;
                File::delete($imagepath);
                // Storage::delete('news/'. $old_avatar );
            }

            if ($del->delete()) {

                return redirect()->route('blog.index')->with('success', "Blog removed successfully");;
            } else {

                return back()->with('error', 'Error occurred please try gain!!');;
            }
        } catch (QueryException $ex) {

            return redirect()->back()->with('error','Blog could not be found');
        }
    }
}
