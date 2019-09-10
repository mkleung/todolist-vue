<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DateTime;
use Auth;
use Illuminate\Support\Facades\Hash;

use App\User;

class UserController extends Controller
{
    public function logoutUser(Request $request){
        Auth::logout();
         return view('welcome');
    }


    public function loginUser(Request $request){
       dd($request->email);
    }

    public function register(Request $request){

        $myUser = new User;
        $myUser->name = $request->name;
        $myUser->email = $request->email;
        $myUser->password = bcrypt($request->password);
        $myUser->save();
    }


    public function editProfile(Request $request){
         $editUser = User::where('email', $request->email)->first();

        if (Hash::check($request->oldpassword, $editUser->password)) {
            $editUser->password = $request->newpassword;
        }
        else {
           return "invalid password";
        }

        $editUser->name = $request->name;
        $editUser->save();

        //dd($editUser->password);
        // if (Hash::check($request->oldpassword, $editUser->password)) {
        //     dd("password correct");
        // }
        // else {
        //     dd('password fail');
        // }

        // $editUser->name = $request->name;
        // $editUser->save();
    }

}
