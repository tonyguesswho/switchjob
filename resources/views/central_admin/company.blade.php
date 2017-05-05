@extends('layouts.dashboard_master')
    @section('title')
        Getdev Dashboard | Companies
    @endsection 
    @section('content')
            <!-- BEGIN CONTAINER -->
        <div class="page-container">
            <!-- BEGIN SIDEBAR -->
            <div class="page-sidebar navbar-collapse collapse">
                    <ul class="page-sidebar-menu">
                        <li class="nav-item">
                            <a href="{{url('admin/index')}}" class="nav-link ">
                                <i class="icon-home"></i>
                                <span class="title">Dashboard</span>
                                <span class="selected"></span>
                            </a>
                        </li>
                        <li class="nav-item">
                                <a href="{{url('admin/users')}}" class="nav-link ">
                                    <i class="icon-user"></i>
                                    <span class="title">Users</span>
                                    <span class="selected"></span>
                                </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{url('admin/developers')}}" class="nav-link ">
                                 <i class="icon-user-follow"></i>
                                <span class="title">Developer</span>
                                <span class="selected"></span>
                            </a>
                        </li>
                        <li class="nav-item active open">
                            <a href="{{url('admin/company')}}" class="nav-link ">
                                <i class="icon-organization"></i>
                                <span class="title">Company</span>
                            </a>
                        </li>
                          <li class="nav-item  ">
                            <a href="{{url('admin/pairing_management')}}" class="nav-link ">
                                <i class="icon-graph"></i>
                                <span class="title">Pairing Management</span>
                            </a>
                        </li>
                        <li class="nav-item  ">
                            <a href="{{url('admin/payment_management')}}" class="nav-link ">
                                <i class="icon-wallet"></i>
                                <span class="title">Payment Management</span>
                            </a>
                        </li>
                        <li class="nav-item  ">
                            <a href="{{url('admin/transactions')}}" class="nav-link ">
                                <i class="icon-wallet"></i>
                                <span class="title">Transactions</span>
                            </a>
                        </li>
                    </ul>
                </div>
            <!-- END SIDEBAR -->
            <!-- BEGIN CONTENT -->
            <div class="page-content-wrapper">
                <!-- BEGIN CONTENT BODY -->
                <div class="page-content">
                    <!-- BEGIN PAGE HEAD-->
                    
                    <!-- END PAGE HEAD-->
                    <!-- BEGIN PAGE BREADCRUMB -->
                    
                    <!-- END PAGE BREADCRUMB -->
                    <!-- BEGIN PAGE BASE CONTENT -->
                    <div class="row">
                        <div class="col-md-12">
                            
                            <!-- Begin: life time stats -->
                            <div class="portlet light bordered">
                                <div class="portlet-title">
                                    <div class="caption font-dark">
                                        <i class="icon-organization font-dark"></i>
                                        <span class="caption-subject bold uppercase"> Company&nbsp;Profile</span>
                                    </div>
                                </div>
                                <div class="portlet-body">
                                    <table class="table table-striped table-bordered table-hover order-column" id="sample_1">
                                        <thead>
                                            <tr>
                                                <th>Company&nbsp;Name</th>
                                                <th>Email</th>
                                                <th>Phone&nbsp;No</th>
                                                <th>Projects</th>
                                                <th>Date&nbsp;Created</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($companies as $company)
                                                <tr>
                                                    <td>{{$company->user->firstname}}</td>
                                                    <td>{{$company->user->email}}</td>
                                                    <td>{{$company->user->phone}}</td>
                                                    <td>{{$company->products}}</td>
                                                    <td>{{$company->created_at}}</td>                                                
                                                    <!--<td class="center"><button class="btn-blue">View more</button></td>-->
                                                    <td class="center"><a class="btn btn-outline blue" data-toggle="modal" href="#responsive{{$company->id}}"> View More </a></td>
                                                </tr>
                                        @endforeach
                                    </table>
                                </div>
                            </div>
                            <!-- End: life time stats -->
                        </div>
                    </div>
                    
                    <!-- END PAGE BASE CONTENT -->
                </div>
                <!-- END CONTENT BODY -->
            </div>
            <!-- END CONTENT -->
            <!-- BEGIN QUICK SIDEBAR -->
            
            <!-- END QUICK SIDEBAR -->
        </div>
        <!-- END CONTAINER -->
    @foreach($companies as $company)
        <div id="responsive{{$company->id}}" class="modal fade in view col-md-8 side-pad" tabindex="-1" data-width="760">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                <h4 class="modal-title">Company's&nbsp;Profile</h4>
            </div>
            <div class="modal-body">
                <div class="row">
                    <!-- SIDEBAR USERPIC -->
                    <div class="col-lg-4 clearfix">
                        <div class="profile-userpic">
                            <img src="{{url('assets/assets/pages/media/profile/logo_metronic.jpg')}}" class="img-responsive company" alt=""> 
                        </div>
                    </div>
                    <!-- END SIDEBAR USERPIC -->
                    <!-- SIDEBAR MENU -->
                    <div class="col-lg-8 clearfix write-up">
                        <div class="row">
                            <div class="col-md-4 col-sm-6 col-xs-6">
                                <div><p id="name">Company Name:</p></div>
                                <div><p id="project_handled">Company Address:</p></div>
                                <div><p id="git">Telephone:</p></div>
                                 <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                       <table class="table table-hover table-bordered">
                                        <thead>
                                            <tr>
                                                <th>Project Names</th>
                                                <th>Budgets</th>
                                                <th>Deadlines</th>
                                                <th>Required Skills</th>
                                                <th>Availability</th>

{{-- //select tool html css jquery ajax php  --}}
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($company->companyProject as $project)
                                                <tr>
                                                    <td>
                                                        {{$project->project_name}}
                                                    </td>
                                                    <td>
                                                        &#x20A6;{{number_format($project->budget)}}
                                                    </td>
                                                    <td>
                                                        {{$project->deadline}}
                                                    </td>
                                                    <td>
                                                        {{$project->skill_set}}
                                                    </td>
                                                    @if(!empty($project->project_availability))
                                                        <td>
                                                            {{"Available"}}
                                                        </td>
                                                    @else
                                                        <td>
                                                            {{"Not Available"}}
                                                        </td>
                                                    @endif
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>  
                            </div>
                                   




                            </div>
                            <div class="col-md-4 col-sm-6 col-xs-6">
                                <div><p>{{$company->user->firstname}}</p></div>
                                @if(isset($company->city->city))
                                    <div><p>{{$company->city->city." ".$company->country->country}}</p></div>
                                @else
                                    <div><p>{{"No City"}}</p></div>
                                @endif
                                <div><p>{{$company->user->phone}}</p></div>
                                <div class="col-lg-12 col-sm-12">
                                   
                                </div>

                                
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END MENU -->        
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" data-dismiss="modal" class="btn btn-outline dark">Close</button>
                <button type="button" data-dismiss="modal" class="btn green butn">Save changes</button>
            </div>
          </div>
    @endforeach
@endsection
