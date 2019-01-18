<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Events\MessageSent;

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
		$user = auth()->user();
	  	$message = $user->messages()->create([
	  	  'message' => $request->input('message')
	  	]);

		broadcast(new MessageSent($user, $message))->toOthers();
	  	return ['status' => 'Message Sent!'];
	}
}