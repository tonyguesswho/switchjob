@extends('layouts.dashboard_master')
    @section('title')
        Getdev Dashboard | Pairing Management
    @endsection

    @section('content')
        <!-- BEGIN CONTAINER -->
        <div class="page-container">
            <!-- BEGIN SIDEBAR -->
            <div class="page-sidebar-wrapper">
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
                                 <i class="icon-user"></i>
                                <span class="title">Developer</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{url('admin/company')}}" class="nav-link ">
                                <i class="icon-organization"></i>
                                <span class="title">Company</span>
                            </a>
                        </li>
                         <li class="nav-item active open">
                            <a href="{{url('admin/pairing_management')}}" class="nav-link ">
                                <i class="icon-people"></i>
                                <span class="title">Pairing Management</span>
                            </a>
                        </li>
                        <li class="nav-item">
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
                    <!-- END SIDEBAR MENU -->
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
                            <div class="portlet light bordered">
                                <div class="portlet-title">
                                    <div class="caption font-dark">
                                        <i class="icon-people font-dark"></i>
                                        <span class="caption-subject bold uppercase"> Pairing&nbsp;Management</span>
                                    </div>
                                </div>
                                <div class="portlet-body">
                                    <table class="table table-striped table-bordered table-hover order-column" id="sample_1">
                                        <thead>
                                            <tr>
                                                <th>Project&nbsp;Name</th>
                                                <th>Project&nbsp;Owner</th>
                                                <th>Budget</th>
                                                <th>Pairing&nbsp;A&nbsp;Dev</th>
                                                <th>Status</th>
                                                <th>Start Date</th>
                                                <th>End Date</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($pairing_details as $detail)

                                            <tr>
                                                {{-- <td>{{$detail->companyProject->}}</td>
                                                <td>{{$detail->user->firstname}}</td> --}}
                                                <td>&#x20A6;{{number_format($detail->budget)}}</td>
                                                <td>
                                                     <select class="form-control input-inline input-sm input-small">
                                                        <option value="select" selected>Select</option>
                                                        <option value="ftime">Beginner</option>
                                                        <option value="ptime">Intermediate</option>
                                                        <option value="both">Expert</option>
                                                    </select>
                                                </td> 
                                                <td>Yes</td> 
                                                <td>2017/01/01</td>
                                                <td>2017/03/31</td>
                                                <!--<td class="center"><button class="btn-blue">Send Message</button></td>-->
                                                <td class="center"><a class="btn btn-outline blue" data-toggle="modal" href="#responsive"> Send Message</a></td>                                           
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
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
        <!-- BEGIN FOOTER -->
@endsection