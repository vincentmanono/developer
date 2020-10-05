<?php

namespace App\Http\Controllers;

use App\Client;
use App\Portfolio;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $clients = Client::orderBy('id','desc')->get();
         return view('admin.clients.index',compact('clients'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.clients.create')->with('param','create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate
        ($request,[

            'name'=>'required|max:300',
            'phone'=>'required',
            'email'=>'required|email'

        ]);

        $post = new Client();

        $post->name= $request->name;
        $post->phone=$request->phone;
        $post->email=$request->email;

        $validate = $post->save();

        if($validate){
            return redirect()->back()->with('success','Client Added Successfully');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $countprojects = Portfolio::where('id',$id)->count();
        $client = Client::where('id',$id)->first();
        return view('admin.clients.show',compact('client','countprojects'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function edit(Client $client)
    {
        $clientedit = Client::find(1);
        return view('admin.clients.create',compact('clientedit'))->with('param','edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate
        ($request,[

            'name'=>'required|max:300',
            'phone'=>'required',
            'email'=>'required|email'

        ]);

        $post = Client::find($id);


        $post->name= $request->name;
        $post->phone=$request->phone;
        $post->email=$request->email;

        $validate = $post->save();

        if($validate){
            return redirect()->back()->with('success','Client Details Updated Successfully!');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $del = Client::findOrFail($id);
        $del->delete();


            return redirect('/clients')->with('success','You have successfully deleted the client and the related projets');


    }
}
