<?php

namespace App\Http\Controllers;

use App\Mailbox;
use Illuminate\Http\Request;

class MailboxController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mailboxs =Mailbox::orderBy('id','Desc')->paginate(10);
        return view('admin.mails.sent',compact('mailboxs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()

    {

        $mailcount = Mailbox::all()->count();
        return view('admin.mails.compose',compact('mailcount'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

       // dd($request);
        $this->validate($request,[
            'name'=>[''],
            'subject'=>[''],
            'email'=>[''],
            'body'=>[''],
        ]);

        $post = new Mailbox();
        $post->name = $request->name;
        $post->subject =$request->subject;
        $post->email = $request->email;
        $post->body = $request->body;

        $validate =$post->save();
        if($validate){
            return redirect()->back()->with('success','Your mail was successfully sent');
        }
        else{
            return redirect()->back()->with('error','Sorry an error occured while sending the mail');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Mailbox  $mailbox
     * @return \Illuminate\Http\Response
     */
    public function show( $id)
    {
        $mailbox= Mailbox::where('id',$id)->first();
        return view('admin.mails.read',compact('mailbox'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Mailbox  $mailbox
     * @return \Illuminate\Http\Response
     */
    public function edit(Mailbox $mailbox)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Mailbox  $mailbox
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Mailbox $mailbox)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Mailbox  $mailbox
     * @return \Illuminate\Http\Response
     */
    public function destroy(Mailbox $mailbox)
    {
        //
    }
}
