<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AnswerController extends Controller
{
    public function analyze(Request $request){
        $i = 0;
        $n = 0;
        $f = 0;
        $j = 0;
        for($counter = 1;$counter<=16;$counter++){
            $answer = $request['q'.$counter];
            if($answer[0]=='I') $i+=(int)$answer[1];
            elseif($answer[0]=='N') $n+=(int)$answer[1];
            elseif($answer[0]=='F') $f+=(int)$answer[1];
            elseif($answer[0]=='J') $j+=(int)$answer[1];
        }
        $array = array($i,$n,$f,$j);
        return view('answer', compact('array'));
    }
}
