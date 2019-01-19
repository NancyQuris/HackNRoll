<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

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
        $total = $i+$n+$f+$j;
        $iPct = $i/$total;
        $nPct = $n/$total;
        $fPct = $f/$total;
        $jPct = $j/$total;
        $array = array($i,$n,$f,$j);
        $this-> store($iPct,$nPct,$fPct,$jPct);
        $similarUsers = $this->findSimilarUsers(auth()->user());
        $number = count($similarUsers);
        $array[4] = $number;
        return view('answer', compact('array'));
    }

    public function store($iPct,$nPct,$fPct,$jPct){
        $user = auth()->user();
        $user->iPct = $iPct;
        $user->nPct = $nPct;
        $user->fPct = $fPct;
        $user->jPct = $jPct;
        $user->save();
    }

    static public function findSimilarUsers(User $thisUser){
        $users = User::all()->except(auth()->user()->id);
        $similarUser = array();
        $counter = 0;
        if(count($users)>0){
            foreach($users as $user){
                $useriPct = round($user->iPct,1);
                $usernPct = round($user->nPct,1);
                $userfPct = round($user->fPct,1);
                $userjPct = round($user->jPct,1);
                if($useriPct==round($thisUser->iPct,1)&&$usernPct==round($thisUser->nPct,1)&&$userfPct==round($thisUser->fPct,1)&&$userjPct==round($thisUser->jPct,1)){
                    $similarUser[$counter] = $user;
                    $counter++;
                }
            }
        }
        return $similarUser;
    }
}
