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

    public function editProfile(Request $request){
         $editUser = User::where('email', $request->email)->first();

        $oldPass = Hash::make($request->oldpassword);

        dd($request->oldpassword);
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
