<?php

namespace App\Http\Controllers;

use App\Portfolio;
use App\Client;

use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $portfolios= Portfolio::orderBy('id','desc')->get();
        return view('admin.portfolio.index')->with('portfolios',$portfolios);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $clients = Client::orderBy('id','desc')->get();
        return view('admin.portfolio.create',compact('clients'))->with('param','create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $this->validate($request,[

            'title' => 'max:500',
            'url'=> 'max:500',
            'description'=>'max:500',
            'image'=>'',
            'cpanelpassword'=>'max:500',
            'client_id' => 'max:500'
              ]);

              $post = new Portfolio();

              $post->title = $request->title;
              $post->url = $request->url;
              $post->description = $request->description;
              $post->cpanelpassword = $request->cpanelpassword;
              $post->client_id =$request->client_id;
              if (file_exists($request->file('image'))) {
               // dd($request);
                // Get filename with extension
                $filenameWithExt = $request->file('image')->getClientOriginalName();

                // Get just the filename
                $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);

                // Get extension
                $extension = $request->file('image')->getClientOriginalExtension();

                // Create new filename
                $filenameToStore = $filename . '_' . time() . '.' . $extension;

                // Uplaod image
                $path = $request->file('image')->storeAs('public/portfolio', $filenameToStore);
                $avatar  = $filenameToStore;
                $post->image = $avatar;
            }

            $validate = $post->save();

            if ($validate) {

                return redirect()->back()->with('success','You have successfully updated the portfolio');

            }
            else{
                return redirect('portfolio.create')->with('error','An error occured');
            }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Portfolio  $portfolio
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $portfolio =Portfolio::find($id);
        return view('admin.portfolio.show',compact('portfolio'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Portfolio  $portfolio
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $portfolioedit = Portfolio::where('id',$id)->first();
        $clients = Client::orderBy('id','desc')->get();
         return view('admin.portfolio.create',compact('portfolioedit','clients'))->with('param','edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Portfolio  $portfolio
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $this->validate($request,[

            'title' => 'max:500',
            'url'=> 'max:500',
            'description'=>'max:500',
            'image'=>'',
            'cpanelpassword'=>'max:500',
            'client_id' => 'max:500'
              ]);

              $post = Portfolio::where('id',$id)->firstOrFail();

              $post->title = $request->title;
              $post->url = $request->url;
              $post->description = $request->description;
              $post->cpanelpassword = $request->cpanelpassword;
              $post->client_id =$request->client_id;


        if (file_exists($request->file('image'))) {



            $old_avatar = $post->image;
            $avatar = $request->image;
            if ($old_avatar != 'avatar.png' && !Str::contains($avatar, 'http')) {
                $imagepath = public_path('/storage/portfolio') . '/' . $old_avatar;
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
            $path = $request->file('image')->storeAs('public/portfolio', $filenameToStore);

            // Upload image
            $post->image = $filenameToStore;
        }

            $validate = $post->save();

            if ($validate) {

                return redirect('portfolios')->with('success','You have successfully added a new client');

            }
            else{
                return redirect('portfolio.create')->with('error','An error occured');
            }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Portfolio  $portfolio
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        try {
            $del = Portfolio::where('id', $id)->firstOrFail();

            $old_avatar = $del->image;
            if ($old_avatar != 'avatar.png') {
                $imagepath = public_path('/storage/portfolio/')  . $old_avatar;
                File::delete($imagepath);
                // Storage::delete('news/'. $old_avatar );
            }

            if ($del->delete()) {

                return redirect()->route('portfolios.index')->with('success', "Portfolio removed successfully");
            } else {

                return back()->with('error', 'Error occurred please try gain!!');;
            }
        } catch (QueryException $ex) {

            return redirect()->back()->with('error','Portfolio could not be found');
        }
    }

    }

