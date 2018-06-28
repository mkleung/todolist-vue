<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DateTime;
use Auth;
use App\User;

class UserController extends Controller
{
    public function logoutUser(Request $request){
        Auth::logout();
         return view('welcome');
    }

    public function editProfile(Request $request){
        $editUser = User::where('email', $request->email)->first();
        $editUser->name = $request->name;
        $editUser->save();
    }

}
