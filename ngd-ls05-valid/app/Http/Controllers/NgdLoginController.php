<?php

namespace App\Http\Controllers\NgdLoginController;

use Illuminate\Http\Request;

class NgdLoginCotroller extends Controller
{
    public function ngdindex(){
        return view('ngd-login');
    }
    public function ngdloginSubmit(Request $request)
    {
        //validation form
        $validation = $request->validate([
            'email'=>'requiredemail',
            'password'=>'required|min:6|max:12'
        ]);
        //lay gia tri tren cac dieu khien cua form
        $email=$request->input('email');
        $password=$request->input('password');
        return"Email:" . $email."password".$password;


    }
}