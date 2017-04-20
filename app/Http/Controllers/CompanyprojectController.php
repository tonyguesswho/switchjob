<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Companyproject;
use Auth;

class CompanyprojectController extends Controller
{
    public function projects(){
    	$projects=Companyproject::where('company_id',Auth::user()->id)->get();
    	return view('company.project',compact('projects'));
    }
    
    public function addproject(Request $request){
    	$companyproject=Companyproject::create([

            'project_name'=>request('mTitle'),
            'budget'=>request('budget'),
            'project_description'=>request('Pdes'),
            'deadline'=>request('dLine'),
            'skill_set'=>request('skills'),
            'project_availability'=>request('avail'),
            'company_id'=>Auth::user()->id,
            
            

            ]);
    	return redirect()->to('company/project');

    	
    }
    public function update($id, Request $request)
    {
        
        $requestData = $request->except('opt','avail');
       // $input = $request->except('credit_card');
        
        $project = Companyproject::findOrFail($id);
        $project->update($requestData);
        return redirect()->to('company/project');

        

        
    }
}
