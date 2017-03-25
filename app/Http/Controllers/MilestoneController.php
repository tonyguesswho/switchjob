<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\milestone;
use Auth;

class MilestoneController extends Controller
{
    public function store($id, Request $request){
    	
       $milestone=milestone::create([

           'milestone_title'=>request('mTitle'),
            'start_date'=>request('sDate'),
           'deadline'=>request('dLine'),
           'project_id'=>$id,
            'company_id'=>'2',
            'developer_id'=>'33',
            ]);
       return redirect()->back();
    }

    public function destroy($id)
    {
        milestone::destroy($id);

        

        return redirect()->back();
    }

  
}
