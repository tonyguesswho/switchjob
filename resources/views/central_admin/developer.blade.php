@extends('layouts.dashboard_master')
    @section('title')
        Getdev Dashboard | Developer
    @endsection

    @section('content')
         <!-- BEGIN CONTAINER -->
        <div class="page-container">
            <!-- BEGIN SIDEBAR -->
            <div class="page-sidebar-wrapper">
                <!-- BEGIN SIDEBAR -->
                <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
                <!-- DOC: Change data-auto-speed="200" to adjust the sub menu slide up/down speed -->
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
                        <li class="nav-item active open">
                            <a href="{{url('admin/developers')}}" class="nav-link ">
                                 <i class="icon-user-follow"></i>
                                <span class="title">Developer</span>
                                <span class="selected"></span>
                            </a>
                        </li>
                        <li class="nav-item  ">
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
                            <a href="{{url('admin/paymenet_management')}}" class="nav-link ">
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
                                        <i class="icon-user-follow font-dark"></i>
                                        <span class="caption-subject bold uppercase"> Developer</span>
                                    </div>
                                </div>
                                <div class="portlet-body">
                                    <div class="table-toolbar">
                                        <div class="row">     
                                            <div class="col-md-12">
                                                <div class="btn-group pull-left">
                                                    <input type="text" class="form-control form-control-solid input-circle btn-pull-left" placeholder="Search">   
                                                </div>
                                                <!--<a href="#" class="btn btn-circle green btn-outline btn-md btn-pull-left"><i class="fa fa-pencil"></i> Export </a>-->
                                                <div class="btn-group pull-right">
                                                    <button class="btn btn-circle green  btn-outline dropdown-toggle" data-toggle="dropdown" >Tools
                                                        <i class="fa fa-angle-down"></i>
                                                    </button>
                                                    <ul class="dropdown-menu pull-right">
                                                        <li>
                                                            <a href="javascript:;">
                                                                <i class="fa fa-print"></i> Print </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:;">
                                                                <i class="fa fa-file-pdf-o"></i> Save as PDF </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:;">
                                                                <i class="fa fa-file-excel-o"></i> Export to Excel </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div style="overflow-x:auto;">
                                        <table class="table table-striped table-bordered table-responsive table-hover order-column col-" id="sample_1">
                                            <thead>
                                                <tr>
                                                    <th>ID</th>
                                                    <th>Firtsname</th>
                                                    <th>Lastname</th>
                                                    <th>Email</th>
                                                    <th>Availability</th>
                                                    <th>Years of &nbsp;Experience</th>
                                                    <th>Completed Projects</th>
                                                    <th>Git Account</th>
                                                    <th>Skype ID</th>
                                                    <th>Date Registered</th>

                                                </tr>
                                            </thead>
                                            <tbody>
                                            <?php 
                                                $num = 1
                                            ?>
                                                @foreach($developers as $developer)
                                                    <tr>
                                                        <td>{{$num++}}</td>
                                                        <td>{{$developer->firstname}}</td>
                                                        <td>{{$developer->lastname}}</td>
                                                        <td>{{$developer->email}}
                                                        </td>
                                                        <td>{{$developer->available_hours}}</td>
                                                        <td>{{$developer->years_of_experience}}</td>
                                                        <td>{{$developer->completed}}</td> 
                                                        @if ( isset($developer->git_account))
                                                            <td>{{$developer->git_account}}</td>
                                                        @else
                                                            <td>{{ "No Url Specified" }}</td>
                                                        @endif   
                                                        <td>{{$developer->skype_id}}</td>
                                                        <td>{{$developer->created_at}}</td>    
                                                        <td class="center"><a class="btn btn-outline blue" data-toggle="modal" href="#responsive"> View More </a></td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
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
        </div>
        <!-- END CONTAINER -->
        <!-- END THEME LAYOUT SCRIPTS -->
        <div id="responsive" class="modal fade in view col-md-8 side-pad" tabindex="-1" data-width="760">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                <h4 class="modal-title">Developer's&nbsp;Profile</h4>
            </div>
            <div class="modal-body">
                <div class="row">
                    <!-- SIDEBAR USERPIC -->
                    <div class="col-lg-4 clearfix">
                        <div class="profile-userpic">
                            <img src="{{url('assets/assets/pages/media/profile/profile_user.jpg')}}" class="img-responsive" alt=""> 
                        </div>
                    </div>
                    <!-- END SIDEBAR USERPIC -->
                    <!-- SIDEBAR MENU -->
                    <div class="col-lg-8 clearfix write-up">
                        <div class="row">
                            <div class="col-md-4 col-sm-6 col-xs-6">
                                <div><p id="name">Name:</p></div>
                                <div><p id="project_handled">Number&nbsp;of&nbsp;project&nbsp;handled:</p></div>
                                <div><p id="project_delv">Number&nbsp;of&nbsp;project&nbsp;delivered:</p></div>
                                <div><p id="git">Git&nbsp;hub&nbsp;account:</p></div>
                                <div><p id="skype">Skype&nbsp;id:</p></div>
                                <div><p id="exp_level">Experience&nbsp;level:</p></div>
                            </div>
                            <div class="col-md-4 col-sm-6 col-xs-6">
                                <div><p> Bob </p></div>
                                <div><p> 10 </p></div>
                                <div><p> 5 </p></div>
                                <div><p> https://github.com/bob.git </p></div>
                                <div><p> bobby </p></div>
                                <div><p>
                                    <select class="form-control input-inline input-sm input-small">
                                        <option value="select" selected>None</option>
                                        <option value="ftime">Beginner</option>
                                        <option value="ptime">Intermediate</option>
                                        <option value="both">Expert</option>
                                    </select>
                                </p></div>
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
    @endsection
