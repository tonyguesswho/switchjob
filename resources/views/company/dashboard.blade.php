
    @extends('layouts.company')
    @section('content')
       <div class="wrapper clearfix animsition pos-rel">
          <header>
            <nav class="navbar navbar-default navbar-fixed">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example-2">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand animated" href="../index.html">
                          <img src="/switch/assets/img/logos/switch_2.svg" alt="Switch DEV" style="max-height: 40px" class="logo-nav">

                        </a>
                    </div>
                    <div class="collapse navbar-collapse">
                        <ul class="nav navbar-nav navbar-right">
                            <li class="animated">
                                <a href="#">
                                   <p class="hidden-md hidden-lg"><i class="icon-badge"></i></p>
                                   <span>Account</span>
                                </a>
                            </li>
                            <li class="dropdown animated">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <p class="hidden-md hidden-lg"><i class="icon-bell"></i></p>
                                    <span>Dropdown
                                    <b class="caret"></b></span>
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Action</a></li>
                                    <li><a href="#">Another action</a></li>
                                    <li><a href="#">Something</a></li>
                                    <li><a href="#">Another action</a></li>
                                    <li><a href="#">Something</a></li>
                                    <li class="divider"></li>
                                    <li><a href="#">Separated link</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="/logout">
                                    <p class="hidden-md hidden-lg"><i class="icon-logout"></i></p>
                                    <span>Log out</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
          </header>
          <div class="pos-rel width-100p m-auto" style="height: calc(100% - 61px)">
            <div class="sidebar">
                <div class="sidebar-wrapper">
                    <ul class="nav">
                        <li class="active">
                            <a href="/company/dashboard">
                                <i class="icon-chart"></i>
                                <p>Dashboard</p>
                            </a>
                        </li>
                        <li>
                            <a href="/company/project">
                                <i class="icon-layers"></i>
                                <p>Projects</p>
                            </a>
                        </li>
                        <li>
                            <a href="/company/payment">
                                <i class="icon-wallet"></i>
                                <p>Transaction</p>
                            </a>
                        </li>
                        <li>
                            <a href="/company/dev">
                                <i class="icon-grid"></i>
                                <p>Developers</p>
                            </a>
                        </li>
                        <li>
                            <a href="/company/profile">
                                <i class="icon-user"></i>
                                <p>Account</p>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="main-panel">
                <!--cck -->
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="content">
                                <div class="row">
                                    <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                                        <h4 class="c-gray w-600 m-b-10">Payments</h4>
                                        <div class="row">
                                            <div class="col-md-12 col-sm-12">
                                                <div class="row">
                                                    <div class="col-md-6 col-sm-6 text-center p-r-0">
                                                        <div class="card card-bg-dark card-data-box-1 m-b-10 c-white no-bd">
                                                            <h3 class="uppercase w-600 f-18 p-t-3 p-b-3">today</h3>
                                                            <p class="p-t-3 p-b-3">&#8358; 0.00</p>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 col-sm-6 text-center p-l-0">
                                                        <div class="card card-bg-red card-data-box-2 m-b-10 c-white no-bd">
                                                            <h3 class="uppercase f-14 p-t-3 p-b-3">this month</h3>
                                                            <p class="p-t-3 p-b-3">&#8358; 0.00</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <h4 class="c-gray w-600 m-b-10">Invoices</h4>
                                        <div class="row">
                                            <div class="col-md-12 col-sm-12">
                                               <div class="row">
                                                    <div class="col-md-6 col-sm-6 text-center p-r-0">
                                                        <div class="card card-bg-green card-data-box-1 m-b-10 c-white no-bd">
                                                            <h3 class="uppercase w-600 f-18 p-t-3 p-b-3">due</h3>
                                                            <p class="p-t-3 p-b-3">&#8358; 0.00</p>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 col-sm-6 text-center p-l-0">
                                                        <div class="card card-bg-blue card-data-box-2 m-b-10 c-white no-bd">
                                                            <h3 class="uppercase f-14 p-t-3 p-b-3">overdue</h3>
                                                            <p class="p-t-3 p-b-3">&#8358; 0.00</p>
                                                        </div>
                                                    </div>
                                               </div>
                                            </div> 
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-3 hidden-sm hidden-xs">
                                        <h4 class="c-gray w-600 m-b-10">All Tasks</h4>
                                        <div>
                                            <div class="chart-container">
                                                <canvas id="allTasks" style="width: 100%;"></canvas>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-3 hidden-sm hidden-xs">
                                        <h4 class="c-gray w-600 m-b-10">All Projects</h4>
                                        <div>
                                            <div class="chart-container">
                                                <canvas id="allProjects" style="width: 100%;"></canvas>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 my-stats">
                                        <h4 class="c-gray w-600 m-b-10">My Stats</h4>
                                        <ul class="p-0">
                                            <li class="list-style-none clearfix bd-b-gray p-t-5 p-b-5">
                                                <div class="f-left">
                                                    <span class="fa fa-folder-open"></span>
                                                    Active Projects
                                                </div>

                                                <div class="f-right data-box card-bg-dark c-white">
                                                    <p class="data">{{$total_projects}}</p>
                                                </div>
                                            </li>
                                            <li class="list-style-none clearfix bd-b-gray p-t-5 p-b-5">
                                                <div class="f-left">
                                                    <span class="fa fa-tasks"></span>
                                                    Open Tasks
                                                </div>
                                                <div class="f-right data-box card-bg-red c-white">
                                                    <p class="data">{{$total_milestones}}</p>
                                                </div>
                                            </li>
                                            <li class="list-style-none clearfix bd-b-gray p-t-5 p-b-5">
                                                <div class="f-left">
                                                    <span class="fa fa-folder-open"></span>
                                                    Support Tickets
                                                </div>
                                                <div class="f-right data-box card-bg-green c-white">
                                                    <p class="data">0</p>
                                                </div>
                                            </li>
                                            <li class="list-style-none clearfix bd-b-gray p-t-5 p-b-5">
                                                <div class="f-left">
                                                    <span class="fa fa-clock-o"></span>
                                                    Active Timers
                                                </div>
                                                <div class="f-right data-box card-bg-blue c-white">
                                                    <p class="data">0</p>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-4 col-sm-12">
                                <div class="card">
                                    <div class="content">
                                        <div class="task-header m-b-10 clearfix">
                                            <h4 class="f-left c-gray w-600 p-b-10">Milestones</h4>
                                            <h4 class="f-right c-gray w-600 p-b-10">Status</h4>
                                        </div>
                                        <ul class="list-style-none all-tasks">
                                        
                                            @foreach($milestones as $milestone)
                                            <li class="clearfix p-t-10 p-b-10 bd-b-gray">
                                                <h4 class="f-left">{{$milestone->milestone_title}}</h4>
                                                <div class="f-right card-bg-green c-white line-h-22">
                                                    <p class="m-0 f-10 p-l-5 p-r-5 w-700">Pending</p>
                                                </div>
                                            </li>
                                            @endforeach
                                        
                                           
                                            
                                        </ul>
                                        <p class="text-center width-100p btn card-bg-blue">
                                        <a href="#" class="c-white">See More Tasks</a>  
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-12">
                                <div class="card">
                                    <div class="content proj-timeline">
                                        <div class="task-header m-b-10">
                                            <h4 class="c-gray w-600 p-b-10">Developers' Invites</h4>
                                        </div>
                                        <ul class="timeline">
                                            <li>
                                                <div class="activity bd-3 c-white animate">
                                                    <h4 class="w-600">Fred Marks</h4>
                                                    <p class="m-0">posted a message</p>
                                                    <div class="p-0 c-gray"><span class="fa fa-clock-o"></span><time datetime="2016-02-03">03-02-2016</time></div>
                                                    <p class="m-0"><span class="fa fa-external-link"></span>Hello, World</p>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="no-activity"></div>
                                            </li>
                                            
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-12">
                                <div class="row">
                                    @foreach($projects as $project)
                                    <div class="col-md-12">
                                        <div class="card">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="card card-bg-green m-0 content clearfix c-white">
                                                       <div class="f-left">
                                                            <p class="m-0 w-600 f-18"><span class="fa fa-user"></span>{{Auth::user()->firstname}}</p>
                                                            <p class="m-0">{{$project->project_name}}</p>
                                                        </div>
                                                        <div class="f-right">
                                                            <span class="fa fa-thumb-tack f-18" style="color: #FFF; opacity: 0.5"></span>
                                                         </div> 
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="card m-0">
                                                        <div class="col-md-4 content sm-bd-b-gray">
                                                            <div class="text-center">
                                                                <h4 class="w-600 f-18">0 %</h4>
                                                                <p class="uppercase m-0">complete</p>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4 content bd-l-gray sm-bd-b-gray">
                                                            <div class="text-center">
                                                           
                                                                <h4 class="w-600 f-18">

                                                                 
                                                              {{ count($project->milestones)}}
                                                                
                                                                </h4>
                                                           
                                                                <p class="uppercase m-0">my tasks</p>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4 content bd-l-gray">
                                                            <div class="text-center">
                                                                <h4 class="w-600 f-18">12</h4>
                                                                <p class="uppercase m-0">days due</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- jj -->
            </div>
          </div>


        </div>
         <script src="/switch/assets/js/jquery.min.js"></script>
            <script src="/switch/assets/js/bootstrap.min.js"></script>
            <script src="/switch/assets/js/animisition.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
            <script src="/switch/assets/js/main2.js"></script>
             <script>
                $(document).ready(function(){
                    app.pageTransition();
                    app.sidebarCtrl();
                    app.doughnutChart();
                    app.pieChart();
                    app.animateTimeline();
                });
        </script>
       
         @endsection

        


