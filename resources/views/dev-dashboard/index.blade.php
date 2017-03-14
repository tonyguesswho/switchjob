@extends('layouts.dev_dashboard')

@section('content')

    <body>
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
                        <a class="navbar-brand animated" href="/">
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
                            <a href="/dashboard">
                                <i class="icon-chart"></i>
                                <p>Dashboard</p>
                            </a>
                        </li>
                        <li>
                            <a href="/project">
                                <i class="icon-layers"></i>
                                <p>Projects</p>
                            </a>
                        </li>
                        <li>
                            <a href="/payment">
                                <i class="icon-wallet"></i>
                                <p>Transaction</p>
                            </a>
                        </li>
                                <li>
                            <a href="/profile/{{auth::user()->id}}">
                                <i class="icon-user"></i>
                                <p>Your Profile</p>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>


            <div class="main-panel">
                <!--cck -->
                <div class="p-0">
                    <div class="row">
                        <div class="col-md-3">
                            <span class="fa fa-briefcase pos-abs p-l-10 p-t-10 z-index c-white"></span>
                            <div class="card card-bg-dark text-center pos-rel p-15 dis-flex">
                                <div class="figures">
                                    <h3>{{$projects->count()}}</h3>
                                    <p>PROJECTS</p>
                                    <hr class="width-50p m-auto">
                                    <small>Last Week:</small>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <span class="fa fa-folder-open pos-abs p-l-10 p-t-10 z-index c-white"></span>
                            <div class="card card-bg-red text-center pos-rel p-15 dis-flex">
                                <div class="figures">
                                    <h3>12</h3>
                                    <p>Active</p>
                                    <hr class="width-50p m-auto">
                                    <small>Last Week: 5</small>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <span class="fa fa-archive pos-abs p-l-10 p-t-10 z-index c-white"></span>
                            <div class="card card-bg-green text-center pos-rel p-15 dis-flex">
                                <div class="figures">
                                    <h3>2</h3>
                                    <p>Completed</p>
                                    <hr class="width-50p m-auto">
                                    <small>Last Week: 5</small>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <span class="fa fa-bookmark pos-abs p-l-10 p-t-10 z-index c-white"></span>
                            <div class="card card-bg-blue text-center pos-rel p-15 dis-flex">
                                <div class="figures">
                                    <h3>22</h3>
                                    <p>PENDING</p>
                                    <hr class="width-50p m-auto">
                                    <small>Last Week: 5</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="header">
                                    <h3 class="title c-brand w-900">Recent Activities</h3>
                                    <p class="category">Six month performance</p>
                                </div>
                                <div class="content">
                                    <div class="chart-container">
                                        <canvas id="myChart" style="width: 100%; height: 400px;"></canvas>
                                    </div>
                                    <div class="footer">
                                        <!--<div class="legend">
                                            <i class="fa fa-circle text-info"></i> Open
                                            <i class="fa fa-circle text-danger"></i> Click
                                            <i class="fa fa-circle text-warning"></i> Click Second Time
                                        </div>-->
                                        <br>
                                        <hr>
                                        <div class="stats">
                                        @foreach($projects as $project)
                                            <i class="fa fa-history"></i> {{$project->created_at->diffForHumans()}}
                                        @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="header">
                                    <h3 class="title c-brand w-900">On going projects</h3>
                                    <p class="category">Here is a subtitle for this table</p>
                                </div>
                                
                                <div class="content clearfix">
                                    <div class="col-md-12">
                                        <div class="table-responsive table-full-width">
                                            <table class="table table-hover table-striped">
                                                <thead>
                                                    <tr><th>ID</th>
                                                    <th>Project</th>
                                                    <th>Budgit</th>
                                                    <th>Company</th>
                                                    <th>Deadline</th>
                                                </tr></thead>
                                                <tbody>
                                                @foreach($projects as $key => $project)

                                                    <tr>
                                                        <td>{{$key+1}}</td>
                                                        <td>{{$project->project}}</td>
                                                        <td>{{$project->cost}}</td>
                                                        <td>{{$project->company_name}}</td>
                                                        <td>{{$project->deadline}}</td>
                                                    </tr>  
                                                    @endforeach     
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
                <!-- jj -->
            </div>
          </div>


        </div>

        <!-- SCRIPTS -->
            <script src="switch/assets/js/jquery.min.js"></script>
            <script src="switch/assets/js/bootstrap.min.js"></script>
            <script src="switch/assets/js/animisition.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
            <script src="switch/assets/js/main2.js"></script>
            <script>
                $(document).ready(function(){
                    app.pageTransition();
                    app.barChart();
                    app.sidebarCtrl();
                });
            </script>
    </body>

</html>
@endsection