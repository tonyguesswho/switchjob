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
    	$user = User::where('id', Auth::user()->id)->first();
    	//dd($user);
    	return view('profile.developer', compact('user'));
    }


    public function developer()
    {
    	return view('profile.index');
    }

    
}
