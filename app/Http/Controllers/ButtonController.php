<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Button;
use App\Models\User;
class ButtonController extends Controller
{
    public function addButton(){
        return view('Buttons/add new button');



    }





    public function StoreButton(Request $request){
        Button::insert([
            'Text'=>$request->Text,
            'URL'=>$request->URL,
            'user_id'=>Auth::user()->id
                      ]);
        return $request;
    }//end of method

    public function getUserButtons(Request $request){
        $userButtons=Button::where('user_id',$request->user_id)->get();
        return $userButtons;



    }
}
