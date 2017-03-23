<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\companyproject;

class CompanyprojectController extends Controller
{
    public function projects(){
    	$projects=companyproject::all();
    	return view('company.project',compact('projects'));
    }
    public function addprojects(Request $request){

    	$companyproject= new companyproject() ;
    	$companyproject->project_name=$req->project_name;
    	$companyproject->save();
    	return response(->json($companyproject))
    }
}
