<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;

class CompanyController extends Controller
{
    public function create()
    {
    	return view('company.setup');
    }

    public function setup(Request $request)
    {

    	if($request->method('post')){

    		$data = $request->all();

    		session(['email' => $data['email'], 'company' => $data['company'] ]);

    		return redirect('profile/company');
    	}

    	return view('company.setup');
    }


    public function store(Request $request)
    {

        dd($request->all());

        Session::flash('flash_message', 'Company added!');

        //login developer
        auth()->login(Session::get('user'));
        return redirect()->to('company/dashboard');
    }
}
