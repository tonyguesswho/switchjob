<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Proposal;
use App\User;
use Auth;

class ProposalController extends Controller
{
    


    public function create($id)
    {	
    	$this->validate(request(), [
    		'messaging' => 'required',
    		'question' => 'required',
    		'reason' => 'required',
    		]);

    	Proposal::create([	
    		'messaging' => request('messaging'),
    		'question' => request('question'),
    		'reason' => request('reason'),
            'user_id'=> Auth::user()->id,
            'company_id'=>$id
    		]);
    	return back();
    }
}
