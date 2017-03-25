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
use App\companyproject;
use App\milestone;
use Auth;
class CompanyController extends Controller
{

    public function dashboard()
    {
        return view('company.dashboard');

    }

    public function dev()

    {   $developers = Developer::join('userdetails','developers.id','=','userdetails.user_id')->paginate(2);
        //dd($developers);
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
        
    
        $project_milestone=milestone::where('project_id',$id )->get();

    
    
        return view('company.projectdetail',compact('project_id','project_milestone'));

    }

    public function projectdesc($id){
       
        $project_id=$id;

        return view('company.project_desc',compact('project_id'));
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

        $company=user::create([

            'firstname'=>request('company_name'),
            'email'=>request('company_email'),
            'password'=>bcrypt(request('company_password')),
            'phone'=>request('company_phone'),
            

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