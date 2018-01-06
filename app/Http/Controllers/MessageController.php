<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;
use App\Conversation;
use App\Message;
use App\User;


class MessageController extends Controller
{

    private $user ;

    public function __construct()
    {
        $this->middleware('auth');
        $user= Auth::User();

    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $user = Auth::user();   
        // dd($user->conversations);
         $list =$user->conversations;

         dd($list);
           
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = $this->user;
        
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
            // dd($conversation->id);
            $message = new Message();
            $message->message = $request->message;
            $message->save();

            $conversation = new Conversation();
            $conversation->user_one_id=$user->id;
            $conversation->user_two_id=$request->friendid;
            $conversation->message_id = $message->id;
            $conversation->save();

           $friends=  User::all()->except(Auth::id());

           $messageList = ($user->messages);

            
            foreach ($messageList   as $message) 
            {
                echo $message->message;
           }           


           exit();
           return view('message', ['friendsList'=>$friends, 'messageList'=>$messageList]);



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
