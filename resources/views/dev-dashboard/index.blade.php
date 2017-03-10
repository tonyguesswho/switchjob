@extends('layouts.dev_dashboard')

@section('content')

    <body>
        <div class="wrapper clearfix animsition pos-rel">
          @include('dev-dashboard.navbar')

            <div class="main-panel">
                <!--cck -->
                <div class="p-0">
                    <div class="row">
                        <div class="col-md-3">
                            <span class="fa fa-briefcase pos-abs p-l-10 p-t-10 z-index c-white"></span>
                            <div class="card card-bg-dark text-center pos-rel p-15 dis-flex">
                                <div class="figures">
                                    <h3>22</h3>
                                    <p>PROJECTS</p>
                                    <hr class="width-50p m-auto">
                                    <small>Last Week: 5</small>
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
                                            <i class="fa fa-history"></i> Updated 3 minutes ago
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
                                @foreach($projects as $project)
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
                                                    <tr>
                                                        <td></td>
                                                        <td>{{$project->project}}</td>
                                                        <td>{{$project->cost}}</td>
                                                        <td>{{$project->company_name}}</td>
                                                        <td>{{$project->deadline}}</td>
                                                    </tr>       
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
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