<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\LiveProject;
use Illuminate\Http\Request;
use Session;

class LiveProjectsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $liveprojects = LiveProject::paginate(25);

        return view('live-projects.index', compact('liveprojects'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('live-projects.create');
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
        
        $requestData = $request->all();
        
        LiveProject::create($requestData);

        Session::flash('flash_message', 'LiveProject added!');

        return redirect('live-projects');
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
        $liveproject = LiveProject::findOrFail($id);

        return view('live-projects.show', compact('liveproject'));
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
        $liveproject = LiveProject::findOrFail($id);

        return view('live-projects.edit', compact('liveproject'));
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
        
        $requestData = $request->all();
        
        $liveproject = LiveProject::findOrFail($id);
        $liveproject->update($requestData);

        Session::flash('flash_message', 'LiveProject updated!');

        return redirect('live-projects');
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
        LiveProject::destroy($id);

        Session::flash('flash_message', 'LiveProject deleted!');

        return redirect('live-projects');
    }
}
