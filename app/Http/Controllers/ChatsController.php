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

	public function send(Request $request) 
	{
		//return $request->all();
		$user = auth()->user();
		$this->saveToSession($request);
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
