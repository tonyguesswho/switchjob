<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\DeveloperSkill;
use Illuminate\Http\Request;
use Session;

class DeveloperSkillsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $developerskills = DeveloperSkill::paginate(25);

        return view('developer-skills.index', compact('developerskills'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('developer-skills.create');
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
        
        DeveloperSkill::create($requestData);

        Session::flash('flash_message', 'DeveloperSkill added!');

        return redirect('developer-skills');
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
        $developerskill = DeveloperSkill::findOrFail($id);

        return view('developer-skills.show', compact('developerskill'));
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
        $developerskill = DeveloperSkill::findOrFail($id);

        return view('developer-skills.edit', compact('developerskill'));
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
        
        $developerskill = DeveloperSkill::findOrFail($id);
        $developerskill->update($requestData);

        Session::flash('flash_message', 'DeveloperSkill updated!');

        return redirect('developer-skills');
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
        DeveloperSkill::destroy($id);

        Session::flash('flash_message', 'DeveloperSkill deleted!');

        return redirect('developer-skills');
    }
}
