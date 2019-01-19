<?php namespace App\Http\Controllers;

use Illuminate\Support\Facades\Input as Input;

class UploadController extends Controller {

	public function uploadBackground(){
        $user = auth()->user();

		if(Input::hasFile('file')){
            echo "<script language=\"JavaScript\">alert(\"upload successful\");</script>";

			$file = Input::file('file');
			$file->move('backgrounds', $user->name.'.jpg');

            return redirect('/homeForm');
		} else {
            echo "<script language=\"JavaScript\">alert(\"upload unsuccessful\");</script>";
            return redirect('/user/editBackground');
        }
        

	}

    public function uploadPhoto(){
        $user = auth()->user();

        if(Input::hasFile('file')){
            echo "<script language=\"JavaScript\">alert(\"upload successful\");</script>";

            $file = Input::file('file');
            $file->move('photos', $user->name.'.jpg');

            return redirect('/homeForm');
        } else {
            echo "<script language=\"JavaScript\">alert(\"upload unsuccessful\");</script>";
            return redirect('/user/editPhoto');
        }
        

    }

}