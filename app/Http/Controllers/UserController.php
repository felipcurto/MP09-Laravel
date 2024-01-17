<?php

namespace App\Http\Controllers;

use App\Models\User; // Import the User class

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        return view('users',[
            'users' => User::all()
        ]);
    }
}

