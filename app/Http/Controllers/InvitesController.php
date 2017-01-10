<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Invite;
use Illuminate\Http\Request;
use Session;

class InvitesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $invites = Invite::paginate(25);

        return view('invites.index', compact('invites'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('invites.create');
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
			'company_name' => 'required|min:3',
			'email' => 'required|min:10'
		]);
        $requestData = $request->all();
        
        Invite::create($requestData);

        Session::flash('flash_message', 'Invite added!');

        return redirect('invites');
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
        $invite = Invite::findOrFail($id);

        return view('invites.show', compact('invite'));
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
        $invite = Invite::findOrFail($id);

        return view('invites.edit', compact('invite'));
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
			'company_name' => 'required|min:3',
			'email' => 'required|min:10'
		]);
        $requestData = $request->all();
        
        $invite = Invite::findOrFail($id);
        $invite->update($requestData);

        Session::flash('flash_message', 'Invite updated!');

        return redirect('invites');
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
        Invite::destroy($id);

        Session::flash('flash_message', 'Invite deleted!');

        return redirect('invites');
    }
}
