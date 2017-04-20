<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Session;
use App\User;
use App\UserType;
use App\CompanyDetail;
use App\Developer;
use App\Userdetails;
use App\Invite;
<<<<<<< HEAD
use App\companyproject;
=======
use App\Companyproject;
>>>>>>> b899a271a4a0a73298577f11cd5cae1c310e8b80
use App\Milestone;
use Auth;
class CompanyController extends Controller
{   
    public function __construct()
        {
        $this->middleware('auth')->except('setup','store');
       }

    public function dashboard()
    {


    $projects = Companyproject::with('milestones')->where('company_id', Auth::user()->id)->get();
    
    
    $total_milestones = 0;
    $total_projects=0;
    

    
    

    foreach ($projects as $project) {
        $total_milestones += count($project->milestones);
        //$projectsInJson=$project->toJson();
        //dd($projectsInJson);
        $total_projects+=count($project);

        }
    

       $milestones=Milestone::where('company_id',Auth::user()->id)->get();
       
        
    return view('company.dashboard',compact('milestones','projects','projectn','total_milestones','total_projects','projectsInJson'));

    }

    public function dev()

    {   $developers = Developer::join('user_details','developers.id','=','user_details.user_id')->paginate(3);
        
        return view('company.dev',compact('developers'));

    }
    public function payment()
    {
        return view('company.payment');

    }
    public function profile()
    {
        return view('company.profile');

    }
    public function project()
    {
        return view('company.project');

    }
    public function projectdetail($id)
    {
        $project_id=$id;
        
    
        $project_milestone=milestone::where('companyproject_id',$id )->get();

    
    
        return view('company.projectdetail',compact('project_id','project_milestone'));

    }

    public function projectdesc($id){
       
        $project_id=$id;
        $project=Companyproject::where('id',$id)->get();

        return view('company.project_desc',compact('project_id','project'));
    }
    
    public function companyinvite(User $id){
        $companyInvite=invite::create([

            'company_name'=>Auth::user()->firstname,
           // 'company_id'=>Auth::user()->id,
            'email'=>Auth::user()->email,
            'user_id'=>$id->id,
            ]);
       return redirect()->to('company/dashboard');
        }

    
    public function setup()
    {
        return view('company.setup');
    }

    public function store(Request $request)
    {
        $this->validate(request(),[
            'company_name'=>'required',
            'company_email'=>'required|email',
            'company_password'=>'required',
            'company_phone'=>'required',
            'building'=>'required',
            'products'=>'required',
            'start_period'=>'required',
            'cost'=>'required',
            'aboutus'=>'required'



            ]);

        $company=User::create([

            'firstname'=>request('company_name'),
            'email'=>request('company_email'),
            'password'=>bcrypt(request('company_password')),
            'phone'=>request('company_phone'),
            'user_type' => 2,

            ]);
        
        auth()->login($company);

        $companyDetail = new CompanyDetail();
        $companyDetail->user_id = \Auth::user()->id;
        $companyDetail->building = $request->building;
        $companyDetail->products = $request->products;
        $companyDetail->start_period = $request->start_period;
        $companyDetail->cost = $request->cost;

        $companyDetail->save();

        return redirect()->to('company/dashboard');
    }
}