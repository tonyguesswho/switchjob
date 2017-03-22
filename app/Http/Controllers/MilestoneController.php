<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MilestoneController extends Controller
{
    public function store(Request $request){
    	$this->validate(request(),[
            'mTitle'=>'required',
            'sDate'=>'required',
            'dLine'=>'reguired',





        )]
        $milestone=milestones::create([

            'mTitle'=>request('mTitle'),
            'sDate'=>request('sDate'),
            'dLine'=>request('dLine'),
            

            ]);



    }
}
