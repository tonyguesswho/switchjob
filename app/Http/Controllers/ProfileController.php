<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Session;

class ProfileController extends Controller
{
    public function index()
    {
    	return view('profile.index');
    }


    public function developer()
    {
    	return view('profile.developer');
    }
}
