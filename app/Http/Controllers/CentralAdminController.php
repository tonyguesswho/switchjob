<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CompanyDetail;
use App\Developer;
use App\LiveProject;
use App\DeveloperTranction;
use App\Companyproject;
use DB;
use App\User;


class CentralAdminController extends Controller
{
    public function index()
    {
        $companies = CompanyDetail::count();
        $developers = Developer::count();
        $projects = Companyproject::count();
        $amount = DeveloperTranction::count();
    	return view('central_admin.index', compact('companies', 'developers', 'projects', 'amount'));
    }

    public function users(Request $request)
    {
    	$method = $request->isMethod('post');
    	switch ($method) {
    		case true:

    			break;
    		case false:
                $users = DB::select("Select u.firstname, u.lastname, u.email, u.phone, u.created_at, u.status, u.id, u_type.name from users u JOIN user_types u_type ON u.user_type = u_type.id GROUP By u.id,u.firstname, u.lastname, u.email, u.phone, u.created_at, u_type.name, u.status");
    			return view('central_admin.users', compact('users'));
    		default:
	   			return view('central_dashboard.users');
    			break;
    	}
    }

    public function developers(Request $request)
    {
    	$method = $request->isMethod('post');
    	switch ($method) {
    		case true:

    			break;
    		case false:
                $developers = DB::select("Select u.firstname, u.lastname, u.email, u.phone, u.created_at, u_type.name, dev.available_hours, dev.years_of_experience, d_completeds.completed, dev_soc.git_account, dev_soc.skype_id, u.id from users u LEFT JOIN user_types u_type ON u.user_type = u_type.id LEFT JOIN developers dev ON dev.user_id = u.id LEFT JOIN developer_completeds d_completeds ON d_completeds.user_id = u.id LEFT JOIN developer_socials dev_soc ON dev_soc.user_id = u.id WHERE u.user_type = 1 GROUP By u.id,u.firstname, u.lastname, u.email, u.phone, u.created_at, dev.available_hours, dev.years_of_experience, d_completeds.completed, dev_soc.git_account, dev_soc.skype_id, u_type.name
                            ");
                // dd($developers); exit;
    			return view('central_admin.developer', compact('developers'));
    		default:
	   			return view('central_dashboard.developer');
    			break;
                // Select u.firstname, u.lastname, u.email, u.phone, u.created_at, u_type.name, dev.available_hours, dev.years_of_experience, d_completeds.completed, dev_soc.git_account, dev_soc.skype_id, dev_lev.user_id, s_lev.id u.id from users u LEFT JOIN user_types u_type ON u.user_type = u_type.id LEFT JOIN developers dev ON dev.user_id = u.id LEFT JOIN developer_completeds d_completeds ON d_completeds.user_id = u.id LEFT JOIN developer_socials dev_soc ON dev_soc.user_id = u.id LEFT JOIN developer_skill_levels dev_lev ON dev_lev.user_id = s_lev.id WHERE u.user_type = 1 GROUP By u.id,u.firstname, u.lastname, u.email, u.phone, u.created_at, dev.available_hours, dev.years_of_experience, d_completeds.completed, dev_soc.git_account, dev_soc.skype_id, u_type.name
    	}
    }

    public function company(Request $request)
    {
    	$method = $request->isMethod('post');
    	switch ($method) {
    		case true:

    			break;
    		case false:
    			return view('central_admin.company');
    		default:
	   			return view('central_dashboard.company');
    			break;
    	}
    }

    public function pairingManagement(Request $request)
    {
    	$method = $request->isMethod('post');
    	switch ($method) {
    		case true:

    			break;
    		case false:
    			return view('central_admin.pairing_mgt');
    		default:
	   			return view('central_dashboard.pairing_mgt');
    			break;
    	}
    }

    public function paymentManagement(Request $request)
    {
    	$method = $request->isMethod('post');
    	switch ($method) {
    		case true:

    			break;
    		case false:
    			return view('central_admin.payment_mgt');
    		default:
	   			return view('central_dashboard.payment_mgt');
    			break;
    	}
    }

    public function transactions(Request $request)
    {
    	$method = $request->isMethod('post');
    	switch ($method) {
    		case true:

    			break;
    		case false:
    			return view('central_admin.transactions');
    		default:
	   			return view('central_dashboard.transactions');
    			break;
    	}
    }

    public function updateStatus(Request $request, $id)
    {
        if ($request->ajax()) {

           $user = User::where('id', $id)->update($request->all());
           dd($user);exit;
           return "something";

       }else{
            return;
       }
    }

}
