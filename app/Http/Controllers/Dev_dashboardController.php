<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use App\User;
use App\Invite;
use App\CompanyDetail;
use App\DeveloperSocial;
use App\DeveloperCompleted;
use App\DeveloperAccount;
use App\Developer;
use App\Userdetail;
use App\carbon;
use App\Country;
use App\City;
use App\Job;
use Auth;

class Dev_dashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $projects = Invite::where('developer_id', Auth::user()->id)->get();
        $completed = DeveloperCompleted::where('user_id',Auth::user()->id)->get();
      
        $month = Invite::where('developer_id', Auth::user()->id)
        ->select(DB::raw('MONTH(created_at) month, count(*) month_count'))
        ->groupBy('month') 
        ->orderBy('month')->get();
        
        $todayMinusOneWeekAgo = \Carbon\Carbon::today()->subWeek();
        $week = Invite::where('created_at', $todayMinusOneWeekAgo)->get();

        return view('dev-dashboard.index', compact('projects','week','month','completed'));
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {  
        $project = Job::join('users', 'jobs.user_id', '=', 'users.id' )
                ->join('company_details','jobs.user_id', '=', 'company_details.user_id')
                ->paginate(4);
                
       // $project = Job::latest()->paginate(4);

        return view('dev-dashboard.feature_projects', compact('project'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function socialdetails_update(Request $request, $user_id)
    {
        $socialdetail = User::find($user_id);
        

        $socialdetail->update($request->all());
        $socialdetail->DeveloperSocial->user_id = $user_id;
        $socialdetail->DeveloperSocial->git_account= request('git_account');
        $socialdetail->DeveloperSocial->skype_id = request('skype_id');
        $socialdetail->DeveloperSocial->linkedin_id = request('linkedin_id');
        $socialdetail->DeveloperSocial->available = request('available');
       // $socialdetail->DeveloperSocial->cv = Storage::putFile('cv', $request->file('cv'));;
        $socialdetail->DeveloperSocial->save();

        return Back();
    }

     public function account_update(Request $request, $user_id)
    {
        $accountdetail = User::find($user_id);
        
        $accountdetail->DeveloperAccount()->save(new DeveloperAccount(['user_id' => Auth::id()]));
        $accountdetail->update($request->all());
        $accountdetail->DeveloperAccount->user_id = $user_id;
        $accountdetail->DeveloperAccount->account= request('account');
        $accountdetail->DeveloperAccount->bank = request('bank');
        $accountdetail->DeveloperAccount->bvn = request('bvn');
       // $socialdetail->DeveloperSocial->cv = Storage::putFile('cv', $request->file('cv'));;
        $accountdetail->DeveloperAccount->save();

        return Back();
    }

    
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function payment()
    {
        return view('dev-dashboard.payment');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
        $users = User::find($id);
        $users->Userdetail::where('user_id', Auth::user()->id)->get();
        $users->City::where('user_id', Auth::user()->id )->get();
        $users->Country::where('user_id', Auth::user()->id )->get();
        $users->DeveloperSocial::where('user_id', Auth::user()->id)->get();
        $users->DeveloperAccount::where('user_id', Auth::user()->id)->get();
        return view('dev-dashboard.profile')->with('users', $users);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)

    {  
        $users = User::find($id);
        
        $users->update($request->all());
        $users->firstname = request('firstname');
        $users->lastname = request('lastname');
        $users->email = request('email');
        $users->Userdetail->user_id = Auth::user()->id;
        $users->Userdetail->address = request('address');
        $users->Userdetail->username = request('username');
        $users->Userdetail->postal_code = request('postal_code');
        $users->Country->country = request('country');
        $users->City->city = request('city');
        $users->Userdetail->about_me = request('about_me');
        $users->Userdetail->save();
        $users->City->save();
        $users->Country->save();

        return Back()->with('users', $users);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    
}
