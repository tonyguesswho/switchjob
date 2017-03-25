<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\companyproject;

class CompanyprojectController extends Controller
{
    public function projects(){
    	$projects=companyproject::all();
    	return view('company.project',compact('projects'));
    }
    
    public function addproject(Request $request){
    	$companyproject=companyproject::create([

            'project_name'=>request('mTitle'),
            'budget'=>request('budget'),
            'project_description'=>request('Pdes'),
            'deadline'=>request('dLine'),
            'skill_set'=>request('skills'),
            'project_availability'=>request('avail'),
            
            

            ]);
    	return redirect()->to('company/project');

    	
    }
}
