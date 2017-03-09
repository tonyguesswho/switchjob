<!DOCTYPE html>
<html>

    <head>
        <meta charset="UTF-8">
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <title>Your profile Dashboard</title>
        <!-- STYLESHEETS-->
        <link rel="stylesheet" href="switch/assets/css/bootstrap.min.css">

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.4.1/css/simple-line-icons.css">
        <link rel="stylesheet" href="switch/assets/css/animsition.min.css">
        <link rel="stylesheet"  href="switch/assets/css/animate.css">
        <!-- CUSTOM STYLES -->
        <link rel="stylesheet" href="switch/assets/css/main.css">
        <link rel="stylesheet" href="switch/assets/css/form2.css">
        <link rel="stylesheet" href="switch/assets/css/dashboard.css">
        <!-- WEBFONT -->
        <link href='https://fonts.googleapis.com/css?family=Lato:300,400,700,400italic|Montserrat:700,400|Homemade+Apple' rel='stylesheet' type='text/css'>
        <style>
            .card-bg-red,.card-bg-dark,
            .card-bg-green, .card-bg-blue

            {
                min-height: 150px;
                color: #fff;
            }
            .card-bg-green{
                background: #18a689 !important;
            }
            .card-bg-dark{
               background: #2B2E33 !important;
            }
            .card-bg-red{
                background: #C75757 !important;
            }
            .card-bg-blue{
                background: #0090D9 !important;
            }
            .figures{
                font-weight: 900;
            }
            .figures h3{
                font-size: 40px;
                line-height: 40px;
            } 
            .figures p{
                letter-spacing: 5px;
                text-transform: uppercase;
            }
           
            .table-striped>tbody>tr:nth-child(odd)>td, .table-striped>tbody>tr:nth-child(odd)>th,.table-hover>tbody>tr:hover>td, .table-hover>tbody>tr:hover>th {
                background: rgba(243, 246, 248, 0.5);
            }
        </style>

    </head>

    <body>
        <div class="wrapper clearfix animsition pos-rel">
          @include('layouts.dev_dashboard')

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
                                                        <td>1</td>
                                                        <td>CMS</td>
                                                        <td>$36,738</td>
                                                        <td>ABC company</td>
                                                        <td>Jan 17 2017</td>
                                                    </tr>
                                                    <tr>
                                                        <td>2</td>
                                                        <td>CMS</td>
                                                        <td>$36,738</td>
                                                        <td>ABC company</td>
                                                        <td>Jan 17 2017</td>
                                                    </tr>
                                                    <tr>
                                                        <td>3</td>
                                                        <td>CMS</td>
                                                        <td>$36,738</td>
                                                        <td>ABC company</td>
                                                        <td>Jan 17 2017</td>
                                                    </tr>
                                                    <tr>
                                                        <td>4</td>
                                                        <td>CMS</td>
                                                        <td>$36,738</td>
                                                        <td>ABC company</td>
                                                        <td>Jan 17 2017</td>
                                                    </tr>
                                                    <tr>
                                                        <td>5</td>
                                                        <td>CMS</td>
                                                        <td>$36,738</td>
                                                        <td>ABC company</td>
                                                        <td>Jan 17 2017</td>
                                                    </tr>
                                                    <tr>
                                                        <td>6</td>
                                                        <td>CMS</td>
                                                        <td>$36,738</td>
                                                        <td>ABC company</td>
                                                        <td>Jan 17 2017</td>
                                                    </tr>
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
