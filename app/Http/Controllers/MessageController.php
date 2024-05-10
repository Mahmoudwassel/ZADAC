<?php

namespace App\Http\Controllers;

use App\Models\message;
use App\Http\Requests\StoremessageRequest;
use App\Http\Requests\UpdatemessageRequest;

class MessageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $message = message::all();
        return view('Admin.show_message',['message'=>$message]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoremessageRequest $request)
    {
        request()->validate([
            'name'=> 'required',
            'email'=>'required',
            'text'=> 'required',
            'title'=>'required',
        ]);
        $message = new message;
        $name = request()->name;
        $email= request()->email;
        $text = request()->text;
        $title= request()->title;

        $message->name=$name;
        $message->email=$email;
        $message->title=$title;
        $message->message=$text;
        
        $message->save();
        return redirect()->back()->with('success' , 'message uploaded successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(message $message)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(message $message)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatemessageRequest $request, message $message)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $message = message::where('id',$id)->first();
        $message->delete();
        return back()->with('sucsessful',' *your item is delete successfully');
    }
}
