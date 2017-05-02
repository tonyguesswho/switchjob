<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Storage;
use App\User;
use App\Invite;
use App\LiveProject;
use App\CompanyDetail;
use App\DeveloperSocial;
use App\DeveloperTranction;
use App\DeveloperCompleted;
use App\DeveloperAccount;
use App\Developer;
use App\UserDetail;
use App\carbon;
use App\Country;
use App\City;
use App\job;
use Auth;

class Dev_dashboardController extends Controller
{   

     public function __construct()
        {
        $this->middleware('auth');
       }
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
                ->select(DB::raw('MONTH(created_at) month, MONTHNAME(created_at) month_name, count(*) month_count'))
                ->groupBy('month','month_name') 
                ->orderBy('month','month_name')->get()->toArray();
       
        $todayMinusOneWeekAgo = \Carbon\Carbon::today()->subWeek();
        $week = Invite::where('created_at', $todayMinusOneWeekAgo)->get();

        return view('dev-dashboard.index', compact('projects','week','completed'))->with('month',json_encode($month));
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {  
        $project = Job::join('users', 'jobs.user_id', '=', 'users.id' )
                ->join('job_type', 'jobs.job_type_id', '=','job_type.id' )
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
        $socialdetail->DeveloperSocial->user_id     = $user_id;
        $socialdetail->DeveloperSocial->git_account = request('git_account');
        $socialdetail->DeveloperSocial->skype_id    = request('skype_id');
        $socialdetail->DeveloperSocial->linkedin_id = request('linkedin_id');
        $socialdetail->DeveloperSocial->available   = request('available');
        //$socialdetail->DeveloperSocial->cv = Storage::disk('uploads', $request->file('cv'));
        $socialdetail->DeveloperSocial->save();

        return Back();
    }

     public function account_update(Request $request, $user_id)
    {
        $accountdetail = User::find($user_id);
        $accountdetail->update($request->all());
        $accountdetail->DeveloperAccount->user_id  = $user_id;
        $accountdetail->DeveloperAccount->account  = request('account');
        $accountdetail->DeveloperAccount->bank     = request('bank');
        $accountdetail->DeveloperAccount->bvn      = request('bvn');
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
        $transactions = LiveProject::where('developer_user_id', Auth::user()->id)
                       ->join('jobs', 'live_projects.job_id', '=', 'jobs.id' )
                       ->join('job_type','job_type.id', '=', 'jobs.job_type_id')
                       ->paginate(2);
                      
                        return view('dev-dashboard.payment', compact('transactions'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function progress()
    {
        $progress = DeveloperTranction::create([
                    'developer_id'  => Auth::user()->id,
                     'status'       => json_decode('response')
                    ]);
                return response()->json(['status' => 'data']);
                    
    }

    public function edit($id)
    {
        
        $users = User::with(['UserDetail', 'City', 'Country','DeveloperSocial','DeveloperAccount'])->find($id);
                UserDetail::where('user_id', $id)->get();
                $users->City::where('user_id', $id)->get();
                $users->Country::where('user_id', $id)->get();
                $users->DeveloperSocial::where('user_id',$id)->get();
                $users->DeveloperAccount::where('user_id', $id)->get();

            $skills = Developer::where('user_id',$id)->get();
            $skill = $skills->pluck('languages');
            $languages = explode(',' , $skill);
        
        

                return view('dev-dashboard.profile',compact('users', 'languages'));
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
        $users->firstname               = request('firstname');
        $users->lastname                = request('lastname');
        $users->email                   = request('email');
        $users->UserDetail->user_id     = Auth::user()->id;
        $users->UserDetail->address     = request('address');
        $users->UserDetail->username    = request('username');
        $users->UserDetail->postal_code = request('postal_code');
        $users->Country->country        = request('country');
        $users->City->city              = request('city');
        $users->UserDetail->about_me    = request('about_me');
        $users->UserDetail->save();
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
