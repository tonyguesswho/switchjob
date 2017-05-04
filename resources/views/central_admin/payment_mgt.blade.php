@extends('layouts.dashboard_master')
    @section('title')
        Getdev Dashboard | Payment Management
    @endsection

    @section('content')
        <!-- BEGIN CONTAINER -->
        <div class="page-container">
            <!-- BEGIN SIDEBAR -->
            <div class="page-sidebar-wrapper">
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
                        <li class="nav-item  ">
                            <a href="{{url('admin/pairingManagement')}}" class="nav-link ">
                                <i class="icon-graph"></i>
                                <span class="title">Pairing Management</span>
                            </a>
                        </li>
                        <li class="nav-item   active open">
                            <a href="{{url('admin/paymentManagement')}}" class="nav-link ">
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
                                        <i class="icon-wallet font-dark"></i>
                                        <span class="caption-subject bold uppercase"> Payment&nbsp;Management</span>
                                    </div>
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
                                <div class="portlet-body">
                                    <table class="table table-striped table-bordered table-hover order-column" id="sample_1">
                                        <thead>
                                            <tr>
                                                <th>Company&nbsp;Name</th>
                                                <th>Project&nbsp;Name</th>
                                                <th>Payment&nbsp;Status</th>
                                                <th>Paired Developer</th>
                                                <th>Milestone</th>
                                                <th>Amount</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Switch</td>
                                                <td>Sarelo</td>
                                                <td>Yes</td>
                                                <td>Yes</td>                                         
                                                <!--<td class="center"><button class="btn-blue">View&nbsp;details</button></td>-->
                                                <td class="center"><a class="btn btn-outline blue" data-toggle="modal" href="">View&nbsp;details</a></td>
                                                <td class="center"><a class="btn btn-outline blue" data-toggle="modal" href="#responsive">View&nbsp;details</a></td>
                                                
                                            </tr>
                                            <tr>
                                                <td>Switch</td>
                                                <td>Wazobia FX</td>
                                                <td>Yes</td>
                                                <td>No</td>
                                                <td class="center"><a class="btn btn-outline blue" data-toggle="modal" href="">View&nbsp;details</a></td>
                                                <td class="center"><a class="btn btn-outline blue" data-toggle="modal" href="#responsive">View&nbsp;details</a></td>
                                                
                                            </tr>
                                             <tr>
                                                <td>Hello</td>
                                                <td>Yase</td>
                                                <td>No</td>
                                                <td>No</td>
                                                <td class="center"><a class="btn btn-outline blue" data-toggle="modal" href="">View&nbsp;details</a></td>
                                                <td class="center"><a class="btn btn-outline blue" data-toggle="modal" href="#responsive">View&nbsp;details</a></td>
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
        </div>
        <!-- END CONTAINER -->
        <div id="responsive" class="modal fade in view col-md-8 side-pad" tabindex="-1" data-width="760">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                <h4 class="modal-title">Switch</h4>
            </div>
            <div class="modal-body">
                <div style="overflow-x:auto;">
                    <table class="table table-striped table-bordered table-responsive table-hover order-column col-" id="sample_1">
                        <thead>
                            <tr>
                                <th>Reference&nbsp;Number</th>
                                <th>Date&nbsp;paid</th>
                                <th>Payer</th>
                                <th>Account&nbsp;Number</th>
                                <th>Bank</th>
                                <th>Amount</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>102547283823898</td>
                                <td>20/04/2017</td>
                                <td>Switch</td>
                                <td>1026742865</td>
                                <td>UBA</td>
                                <td>2,000,000</td>
                            </tr>
                            <tr>
                                <td>244889522366998</td>
                                <td>05/10/2016</td>
                                <td>Privinto</td>
                                <td>2054698855</td>
                                <td>GTB</td>
                                <td>5,000,000</td>
                            </tr>
                            <tr>
                                <td>124216980036126</td>
                                <td>28/05/2016</td>
                                <td>Co-creation</td>
                                <td>1452779956</td>
                                <td>First&nbsp;Bank</td>
                                <td>1,500,000</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" data-dismiss="modal" class="btn green butn">Close</button>
            </div>
        </div>
@endsection