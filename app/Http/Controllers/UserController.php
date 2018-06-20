<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DateTime;
use Auth;

class UserController extends Controller
{
    public function logoutUser(Request $request){
        Auth::logout();
         return view('welcome');
    }

    public function getProfile() {
        
    }

}
