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
                                                <th>Contact&nbsp;Phone&nbsp;No</th>
                                                <th>Date&nbsp;Created</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Switch</td>
                                                <td>info@switchng.com</td>
                                                <td>+23482003400673</td>
                                                <td>2016/07/12</td>                                                
                                                <!--<td class="center"><button class="btn-blue">View more</button></td>-->
                                                <td class="center"><a class="btn btn-outline blue" data-toggle="modal" href="#responsive"> View More </a></td>
                                                
                                            </tr>
                                            <tr>
                                                <td>Cc&nbsp;hub</td>
                                                <td>info@cocreation.com</td>
                                                <td>+23482003400673</td>
                                                <td>2016/01/8</td>                                                
                                                <!--<td class="center"><button class="btn-blue">View more</button></td>-->
                                                <td class="center"><a class="btn btn-outline blue" data-toggle="modal" href="#responsive"> View More </a></td>
                                            </tr>
                                        </tbody>
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
        <div id="responsive" class="modal fade in view col-md-8 side-pad" tabindex="-1" data-width="760">
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
                                <div><p id="name">Name:</p></div>
                                <div><p id="project_handled">Address:</p></div>
                                <div><p id="git">Git&nbsp;hub&nbsp;account:</p></div>
                                <div><p id="skype">Skype&nbsp;id:</p></div>
                            </div>
                            <div class="col-md-4 col-sm-6 col-xs-6">
                                <div><p>Switch</p></div>
                                <div><p>42 Montgomery,Yaba.</p></div>
                                <div><p>https://github.com/switch.git </p></div>
                                <div><p>Switchng</p></div>
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
