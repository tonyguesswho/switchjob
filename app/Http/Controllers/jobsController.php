<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\job;
use Illuminate\Http\Request;
use Session;

class jobsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $jobs = job::paginate(25);

        return view('jobs.index', compact('jobs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('jobs.create');
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
			'job_type_id' => 'required|integer',
			'job_description' => 'required|min:50',
			'job_scope' => 'required',
			'start_date' => 'required'
		]);
        $requestData = $request->all();
        
        job::create($requestData);

        Session::flash('flash_message', 'job added!');

        return redirect('jobs');
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
        $job = job::findOrFail($id);

        return view('jobs.show', compact('job'));
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
        $job = job::findOrFail($id);

        return view('jobs.edit', compact('job'));
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
			'job_type_id' => 'required|integer',
			'job_description' => 'required|min:50',
			'job_scope' => 'required',
			'start_date' => 'required'
		]);
        $requestData = $request->all();
        
        $job = job::findOrFail($id);
        $job->update($requestData);

        Session::flash('flash_message', 'job updated!');

        return redirect('jobs');
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
        job::destroy($id);

        Session::flash('flash_message', 'job deleted!');

        return redirect('jobs');
    }
    public function addjob(){
        
    }
}
