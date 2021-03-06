<?php

namespace App\Http\Controllers;

use App\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $messages = Contact::orderBy('id','Desc')->get();
        return view('admin.message.index',compact('messages'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
            'name'=>['required'],
            'subject'=>['required'],
            'phone'=>['required'],
            'email'=>['required','email'],
            'message'=>['required']

        ]);

        $post = new Contact();
        $post->name =$request->name;
        $post->subject =$request->subject;
        $post->email =$request->email;
        $post->message =$request->message;
        $post->phone =$request->phone;

        $validate= $post->save();

        if($validate){
            return redirect()->back()->with('success','Your message has been successfully sent. We shall get back to you.');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function show( $id)
    {
        $message = Contact::where('id',$id)->first();
        return view('admin.message.show',compact('message'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function edit(Contact $contact)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Contact $contact)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $del = Contact::where('id',$id);
        $del->delete();

        if($del){
            return redirect()->route('contact.index')->with('success','You have successfully deleted the Message');
        }
    }
}
