<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Conversation;
use App\Message;
use App\User;


class MessageController extends Controller
{


    public function __construct()
    {
        $this->middleware('auth');

    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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

            $user = Auth::user();


            $conversation = new Conversation();
            $conversation->user_one_id=$user->id;
            $conversation->user_two_id=$request->friendid;
            // $conversation->save();

            // dd($conversation->id);
            $message = new Message();


            $message->message = $request->message;
            $message->conversation_id= $conversation->id;

            // $message->save();

           $friends=  User::all()->except(Auth::id());
           $messageList = Message::all();

           var_dump($user->conversations->messages);
           // var_dump($user->conversations);
           dd();


           // return view('message', ['friendsList'=>$friends, 'messageList'=>$messageList]);



    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
