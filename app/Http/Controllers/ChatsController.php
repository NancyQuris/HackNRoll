<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Events\ChatEvent;
use App\Events\MessageSent;
use Illuminate\Foundation\Auth;

class ChatsController extends Controller
{

	public function __construct() {
		$this->middleware('auth');
	}
    //
    public function index()
	{
	  	return view('chats.index');
	}

	public function fetchMessages()
	{
	  	return Message::with('user')->get();
	}

	public function sendMessage(Request $request)
	{
	  $user = Auth::user();

	  $message = $user->messages()->create([
	    'message' => $request->input('message')
	  ]);

	  broadcast(new MessageSent($user, $message))->toOthers();

	  return ['status' => 'Message Sent!'];
	}

	public function send(Request $request) 
	{
		//return $request->all();
		$user = auth()->user();
		//$this->saveToSession($request);
		event(new ChatEvent($request->message, $user));
	}

	public function saveToSession(Request $request)
    {
    	session()->put('chat', $request->chat);
    }

    public function getOldMessage()
    {
    	return session('chat');
    }

    public function deleteSession()
    {
    	session()->forget('chat');
    }
}
