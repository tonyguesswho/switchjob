@extends('layouts.dashboard_master')
    @section('title')
        Getdev Dashboard | Users 
    @endsection
    @section('content')
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
                        <li class="nav-item  active open">
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
                            </a>
                        </li>
                        <li class="nav-item">
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
                </div>
                <!-- END SIDEBAR -->
            </div>
            <!-- END SIDEBAR -->
            <!-- BEGIN CONTENT -->
            <div class="page-content-wrapper">
                <!-- BEGIN CONTENT BODY -->
                <div class="page-content">
                    <div class="row">
                        <div class="col-md-12">
                            <!-- BEGIN EXAMPLE TABLE PORTLET-->
                            <div class="portlet light bordered">
                                <div class="portlet-title">
                                    <div class="caption font-dark">
                                        <i class="icon-user font-dark"></i>
                                        <span class="caption-subject bold uppercase"> Users' Admin</span>
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
                                    <table class="table table-striped table-bordered table-hover order-column" id="sample_1">
                                        <thead>
                                            <tr>
                                                <th> <center></center>Firstname </th>
                                                <th>Lastname </th>
                                                <th>Email </th>
                                                <th>phone </th>
                                                <th>User&nbsp;Profile</th>
                                                <th>Registered</th>
                                                <th>Status</th>
                                                <th>Update Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <form method="POST" action="">

                                                @foreach($users as $user)
                                                    <td>{{$user->firstname}}</td>
                                                    <td>{{$user->lastname}}</td>
                                                    <td>{{$user->email}}</td>
                                                    <td>{{$user->phone}}</td>
                                                    <td>{{$user->name}}</td>
                                                    <td>{{$user->created_at}}</td>
                                                    @if($user->status == 0)
                                                        <td class="center"><button id="user_status{{$user->id}}" class="btn-blue" data-payload="{{$user->id}}">Active</button></td>
                                                    @else
                                                        <td class="center"><button id="user_status{{$user->id}}"  data-payload="{{$user->id}}" class="btn-danger">Locked</button></td>
                                                    @endif
                                                    <td class="center">
                                                    <select name="status" class="updateStatus form-control" id="input" required="required" data-payload="{{$user->id}}" placeholder="Choose...">
                                                        <option value="0">Active</option>
                                                        <option value="1">Locked</option>
                                                    </select></td>
                                                </tr>
                                               @endforeach
                                            </form>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <!-- END EXAMPLE TABLE PORTLET-->
                        </div>
                    </div>
                    <!-- END PAGE BASE CONTENT -->
                </div>
                <!-- END CONTENT BODY -->
            </div>
            <!-- END CONTENT -->
        </div>
        <!-- END CONTAINER -->
        <!-- BEGIN FOOTER -->
        

@endsection