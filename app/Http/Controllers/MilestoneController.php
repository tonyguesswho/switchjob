<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\milestone;
use Auth;

class MilestoneController extends Controller
{
    public function store($id, Request $request){
    	
       $milestone=Milestone::create([

           'milestone_title'=>request('mTitle'),
            'start_date'=>request('sDate'),
           'deadline'=>request('dLine'),
           'companyproject_id'=>$id,
            'company_id'=>Auth::user()->id,
            'developer_id'=>'33',
            ]);
       return redirect()->back();
    }

    public function destroy($id)
    {
        Milestone::destroy($id);

        

        return redirect()->back();
    }

  
}
