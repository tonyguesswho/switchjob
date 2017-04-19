<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Auth;
use App\User;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
   // protected $redirectTo = '/account';
    
        public function redirectTo()
        {  
            if (Auth::user()->user_type == 1) 

        {
        return '/dashboard';

        } 
        elseif (Auth::user()->user_type == 2) 

        {
            return '/company/dashboard';
        }

        }

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest', ['except' => 'logout']);
    }

    public function create()
    {
        return view('auth.login');


    }

    public function logout(){
        Auth::logout();
        return redirect('/');
    }
}
