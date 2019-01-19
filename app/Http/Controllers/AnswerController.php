<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AnswerController extends Controller
{
    public function analyze(Request $request){
        $count = 1;
        $answers = array();
        for($i = 0;$i<18;$i++){
            $answers[$i] = $request['q'.$count];
            $count++;
        }
    }
}
