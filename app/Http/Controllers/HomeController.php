<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function storeIntro(Request $request) {
        $this->validate($request,[
            'self_introduction' => 'required',
        ]);
        $user = auth()->user();
        $user->self_introduction = $request->input('self_introduction');
        $user->save();
        return redirect('/home');
    }
}
