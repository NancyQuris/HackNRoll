<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
//use \App\Http\Conrollers\AnswerController;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = AnswerController::findSimilarUsers(auth()->user());
        return view('user.index', compact("users"));
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
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show (User $user) {
        return view('user.info', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::find($id);
        return view('user.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     * @param  \Illuminate\Http\Request $request
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        $this->validate($request,[
            'name'=>'required',
            'email'=>'required',
            'self_introduction'=>'required',
        ]);
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->self_introduction = $request->input('self_introduction');
        $user->save();

        return redirect('/users/'.$user->id)->with('success','Profile updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        //
    }

    public function visitHome(Request $request){
        $userId = $_GET['userId'];
        $user = User::find($userId);
        return view('home')->with('user',$user);
    }
}
