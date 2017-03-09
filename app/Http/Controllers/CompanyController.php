<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Session;
class CompanyController extends Controller
{

    public function dashboard()
    {
        return view('company.dashboard');

    }

    public function dev()
    {
        return view('company.dev');

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

    public function create()
    {
        return view('company.setup');
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

            'name'=>request('company_name'),
            'email'=>request('company_email'),
            'password'=>bcrypt(request('company_password')),
            'phone'=>request('company_phone'),

            ]);
        
        auth()->login($company);
        return redirect()->to('company/dashboard');
    }
}