<?php

namespace App\Http\Controllers\Guest;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;

class StaffController extends Controller
{
    public function staffDir(){
        return view('guest.staff-dir')->with('users', User::all());
    }
}
