<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Userdetail;
use App\Country;
use App\City;
use App\Job;
use Auth;

class Dev_dashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dev-dashboard.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {  
        $search = \Request::get('search');
        $project = Job::where('job_scope','like', '%'.$search.'%')
        ->latest()
        ->paginate(4);
        //$project-> 
        //dd($project);
        return view('dev-dashboard.feature_projects', compact('project'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
       
        $users = Userdetail::create(
            [
            'user_id' => Auth::user()->id,
            ]);

        $users = Country::create(
            [
            'user_id' => Auth::user()->id,
            ]);

        $users = City::create(
            [
            'user_id' => Auth::user()->id,
            ]);

        return redirect('/dashboard');
    
    }


    
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
        $users = User::find($id);
        $users->Userdetail::where('user_id', Auth::user()->id)->get();
        $users->City::where('user_id', Auth::user()->id )->get();
        $users->Country::where('user_id', Auth::user()->id )->get();
        return view('dev-dashboard.profile')->with('users', $users);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)

    {  
        $users = User::find($id);

        $users->update($request->all());
        $users->firstname = request('firstname');
        $users->lastname = request('lastname');
        $users->email = request('email');
        $users->Userdetail->user_id = Auth::user()->id;
        $users->Userdetail->address = request('address');
        $users->Userdetail->username = request('username');
        $users->Userdetail->postal_code = request('postal_code');
        $users->Country->country = request('country');
        $users->City->city = request('city');
        $users->Userdetail->about_me = request('about_me');
        $users->Userdetail->save();
        $users->City->save();
        $users->Country->save();
        return Back()->with('users', $users);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy()
    {
       auth()->logout();
      return redirect('/');
    }
}
