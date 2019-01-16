<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ChatsController extends Controller
{
    //
    public function index()
	{
	  return view('chats.index');
	}

	public function fetchMessages()
	{
	  return Message::with('user')->get();
	}

	public function sendMessage(Request $request, User $user)
	{

	  $message = $user->messages()->create([
	    'message' => $request->input('message')
	  ]);

	  return ['status' => 'Message Sent!'];
	}
}
