<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Developer;
use Illuminate\Http\Request;
use Session;

class DevelopersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $developers = Developer::paginate(25);

        return view('developers.index', compact('developers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('developers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        $this->validate($request, [
			'name' => 'required|min:3',
			'email' => 'required|min:10',
			'phone' => 'required|min:11',
			'year_of_experience' => 'required',
			'pass_work' => 'required',
			'coolest_thing' => 'required'
		]);
        $requestData = $request->all();
        
        Developer::create($requestData);

        Session::flash('flash_message', 'Developer added!');

        return redirect('developers');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        $developer = Developer::findOrFail($id);

        return view('developers.show', compact('developer'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        $developer = Developer::findOrFail($id);

        return view('developers.edit', compact('developer'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update($id, Request $request)
    {
        $this->validate($request, [
			'name' => 'required|min:3',
			'email' => 'required|min:10',
			'phone' => 'required|min:11',
			'year_of_experience' => 'required',
			'pass_work' => 'required',
			'coolest_thing' => 'required'
		]);
        $requestData = $request->all();
        
        $developer = Developer::findOrFail($id);
        $developer->update($requestData);

        Session::flash('flash_message', 'Developer updated!');

        return redirect('developers');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        Developer::destroy($id);

        Session::flash('flash_message', 'Developer deleted!');

        return redirect('developers');
    }
}
