<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;
use Session;

class ProfileController extends Controller
{
    public function index()
    {	
    	$user = User::where('id', Auth::user()->id)->get();
    	//dd($users);
    	return view('profile.developer')->with('user', $user);
    }


    public function developer()
    {
    	return view('profile.index');
    }

    
}
