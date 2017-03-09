<!DOCTYPE html>
<html>

    <head>
        <meta charset="UTF-8">
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <title>Your profile Dashboard</title>
        <!-- STYLESHEETS-->
        <link rel="stylesheet" href="/switch/assets/css/bootstrap.min.css">

        <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.4.1/css/simple-line-icons.css">
        <link rel="stylesheet" type="text/css" href="/switch/assets/css/animsition.min.css">
        <link rel="stylesheet" type="text/css" href="/switch/assets/css/animate.css">
        <!-- CUSTOM STYLES -->
        <link rel="stylesheet" href="/switch/assets/css/main.css">
        <link rel="stylesheet" href="/switch/assets/css/form2.css">
        <link rel="stylesheet" href="/switch/assets/css/dashboard.css">
        <!-- WEBFONT -->
        <link href='https://fonts.googleapis.com/css?family=Lato:300,400,700,400italic|Montserrat:700,400|Homemade+Apple' rel='stylesheet' type='text/css'>

    </head>
    <style>
            

            .bg-dk-blue{
                background: #1068DA !important;
                color: #FFFFFF !important;
            }

            .bg-lt-red{
                background: #E60000 !important;
                color: #FFFFFF !important;
            }

            .bg-dk-green{
                background: #558203 !important;
                color: #FFFFFF !important;
            }

            .bg-lt-green{
                background: #A4C639 !important;
            }

            .bg-dk-purple{
                background: #B57EE0 !important;
                color: #FFFFFF !important;
            }

            .bg-dk-orange{
                background: #EC8521 !important;
                color: #FFFFFF !important;
            }

            .bd-bt-grey{
                border-bottom: 1px solid #8F8F8F !important;
            }

            .bd-bt-grey3{
                border-bottom: 3px solid #8F8F8F !important;
            }

            .p-t-3 {
                padding-top:3px !important;
            }

            .p-b-3 {
                padding-bottom:3px !important;
            }

            .p-t-5 {
                padding-top:5px !important;
            }

            .p-b-5 {
                padding-bottom:5px !important;
            }

            .data-box{
                height: 20px;
                width: 20px;
                position: relative;
            }

            .data{
                position: absolute;
                top: 50%;
                margin-top: -12px;
                left: 50%;
                margin-left: -5px;
            }

            .data-box-dark{
                background: #2B2E33 !important;
            }

            .data-box-red{
                background: #C75757 !important;
            }

            .data-box-green{
                background: #18A689 !important;
            }

            .data-box-blue{
                background: #0090D9 !important;
            }

            .data-box-orange{
                background: #FFCC29 !important;
            }

            .timeline li{
                list-style-type: none;
                position: relative;
                width: 3px;
                background: #AFAFAF;
            }

            .timeline li::after {
                transition: background .5s ease-in-out;
            }

            .timeline li:nth-child(odd)::after{
                content: '';
                position: absolute;
                left: 50%;
                bottom: 50%;
                transform: translateX(-50%);
                width: 30px;
                height: 30px;
                border-radius: 50%;
                background-image: url(/switch/assets/img/avatar.png);
                background-position: center;
                background-repeat: no-repeat;
            }

            .timeline li div.activity{
                position: relative;
                bottom: 0;
                width: 170px;
                padding: 5px;
                left: 45px;
                background: rgba(255, 204, 41, 0.75);
                /*visibility: hidden;
                opacity: 0;*/
                transition: all .5s ease-in-out;
                /*transform: translate3d(100%, 0, 0);*/
            }

            .timeline li div.no-activity{
                position: relative;
                bottom: 0;
                height: 20px;
                padding: 15px;
                left: 45px;
            }

            .timeline li div.activity::before {
                content: '';
                position: absolute;
                bottom: 55%;
                width: 0;
                height: 0;
                border-style: solid;
                left: -15px;
                border-width: 8px 16px 8px 0;
                border-color: transparent rgba(255, 204, 41, 0.75) transparent transparent;
            }

            .timeline li div.in-view {
                transform: none;
                visibility: visible;
                opacity: 1;
            }

            .c-gray2{
                color: #5F5F5F !important;
            }

            .t-o-bd-4{
                border-top-left-radius: 4px;
                border-top-right-radius: 4px;
            }

            .bd-l-gray{
                border-left:1px solid #ECECEC;
            }

            .bd-b-gray{
                border-bottom:1px solid #ECECEC;
            }

            .f-10{
                font-size: 10px !important;
            }

            .line-h-22{
                line-height: 22px;
            }

            .bd-1 {
                border: 1px solid #ECECEC !important;
            }
            
            /*.hover-btn:hover{
                -webkit-box-shadow: 3px 3px 1px #5F5F5F;
                box-shadow: 3px 3px 1px #5F5F5F;
                transition: 0.5s all ease-in-out;
            }*/

            @media (max-width: 767px) {
                .card-data-box-1{
                    margin-right: 18px;
                }

                .card-data-box-2{
                    margin-right: 3px;
                    margin-left: 15px;
                }

                .sm-bd-b-gray{
                    border-bottom:1px solid #ECECEC;
                }
            }
        </style>

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
                        <a class="navbar-brand animated" href="/company/dashboard">
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
                            <div class="p-20">
                                <div class="row">
                                    <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                                        <h4 class="c-gray w-600 m-b-10">Payments</h4>
                                        <div class="row">
                                            <div class="col-md-12 col-sm-12">
                                                <div class="row">
                                                    <div class="col-md-6 col-sm-6 text-center p-r-0">
                                                        <div class="card data-box-dark card-data-box-1 m-b-10 c-white no-bd">
                                                            <h3 class="uppercase w-600 f-18 p-t-3 p-b-3">today</h3>
                                                            <p class="p-t-3 p-b-3">&#8358; 0.00</p>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 col-sm-6 text-center p-l-0">
                                                        <div class="card data-box-red card-data-box-2 m-b-10 c-white no-bd">
                                                            <h3 class="uppercase f-14 p-t-3 p-b-3">this month</h3>
                                                            <p class="p-t-3 p-b-3">&#8358; 1,395,770.00</p>
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
                                                        <div class="card data-box-green card-data-box-1 m-b-10 c-white no-bd">
                                                            <h3 class="uppercase w-600 f-18 p-t-3 p-b-3">due</h3>
                                                            <p class="p-t-3 p-b-3">&#8358; 289,381.00</p>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 col-sm-6 text-center p-l-0">
                                                        <div class="card data-box-blue card-data-box-2 m-b-10 c-white no-bd">
                                                            <h3 class="uppercase f-14 p-t-3 p-b-3">overdue</h3>
                                                            <p class="p-t-3 p-b-3">&#8358; 31,545.00</p>
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
                                    <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                                        <h4 class="c-gray w-600 m-b-10">My Stats</h4>
                                        <ul class="p-0">
                                            <li class="list-style-none clearfix bd-b-gray p-t-5 p-b-5">
                                                <div class="f-left">
                                                    <span class="fa fa-folder-open"></span>
                                                    Active Projects
                                                </div>
                                                <div class="f-right data-box data-box-dark c-white">
                                                    <p class="data">4</p>
                                                </div>
                                            </li>
                                            <li class="list-style-none clearfix bd-b-gray p-t-5 p-b-5">
                                                <div class="f-left">
                                                    <span class="fa fa-tasks"></span>
                                                    Open Tasks
                                                </div>
                                                <div class="f-right data-box data-box-red c-white">
                                                    <p class="data">0</p>
                                                </div>
                                            </li>
                                            <li class="list-style-none clearfix bd-b-gray p-t-5 p-b-5">
                                                <div class="f-left">
                                                    <span class="fa fa-folder-open"></span>
                                                    Support Tickets
                                                </div>
                                                <div class="f-right data-box data-box-green c-white">
                                                    <p class="data">4</p>
                                                </div>
                                            </li>
                                            <li class="list-style-none clearfix bd-b-gray p-t-5 p-b-5">
                                                <div class="f-left">
                                                    <span class="fa fa-clock-o"></span>
                                                    Active Timers
                                                </div>
                                                <div class="f-right data-box data-box-blue c-white">
                                                    <p class="data">4</p>
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
                                <div class="card p-20">
                                    <div class="bd-bt-grey3 m-b-10 clearfix">
                                        <h4 class="f-left c-gray w-600 p-b-10">My Tasks</h4>
                                        <h4 class="f-right c-gray w-600 p-b-10">Status</h4>
                                    </div>
                                    <ul class="list-style-none all-tasks">
                                        <li class="clearfix p-t-10 p-b-10 bd-b-gray">
                                            <h4 class="f-left">Design Home Page</h4>
                                            <div class="f-right data-box-green c-white line-h-22">
                                                <p class="m-0 f-10 p-l-5 p-r-5 w-700">Pending</p>
                                            </div>
                                        </li>
                                        <li class="clearfix p-t-10 p-b-10 bd-b-gray">
                                            <h4 class="f-left">Design Login Page</h4>
                                            <div class="f-right data-box-red c-white line-h-22">
                                                <p class="m-0 f-10 p-l-5 p-r-5 w-700">Behind</p>
                                            </div>
                                        </li>
                                        <li class="clearfix p-t-10 p-b-10 bd-b-gray">
                                            <h4 class="f-left">Add Better Validation Forms</h4>
                                            <div class="f-right data-box-green c-white line-h-22">
                                                <p class="m-0 f-10 p-l-5 p-r-5 w-700">Pending</p>
                                            </div>
                                        </li>
                                        <li class="clearfix p-t-10 p-b-10 bd-b-gray">
                                            <h4 class="f-left">Change Background Images</h4>
                                            <div class="f-right data-box-green c-white line-h-22">
                                                <p class="m-0 f-10 p-l-5 p-r-5 w-700">Pending</p>
                                            </div>
                                        </li>
                                        <li class="clearfix p-t-10 p-b-10 bd-b-gray">
                                            <h4 class="f-left">Change Background Images</h4>
                                            <div class="f-right data-box-green c-white line-h-22">
                                                <p class="m-0 f-10 p-l-5 p-r-5 w-700">Pending</p>
                                            </div>
                                        </li>
                                        <li class="clearfix p-t-10 p-b-10 bd-b-gray">
                                            <h4 class="f-left">Change Background Images</h4>
                                            <div class="f-right data-box-green c-white line-h-22">
                                                <p class="m-0 f-10 p-l-5 p-r-5 w-700">Pending</p>
                                            </div>
                                        </li>
                                        <li class="clearfix p-t-10 p-b-10 bd-b-gray">
                                            <h4 class="f-left">Design New Logo</h4>
                                            <div class="f-right data-box-red c-white line-h-22">
                                                <p class="m-0 f-10 p-l-5 p-r-5 w-700">Behind</p>
                                            </div>
                                        </li>
                                        <li class="clearfix p-t-10 p-b-10 bd-b-gray">
                                            <h4 class="f-left">Design Home Page</h4>
                                            <div class="f-right data-box-green c-white line-h-22">
                                                <p class="m-0 f-10 p-l-5 p-r-5 w-700">Pending</p>
                                            </div>
                                        </li>
                                    </ul>
                                    <p class="text-center width-100p btn data-box-blue">
                                      <a href="#" class="c-white">See More Tasks</a>  
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-12">
                                <div class="card p-20">
                                    <div class="bd-bt-grey3 m-b-10">
                                        <h4 class="c-gray w-600 p-b-10">My Projects - Events Timeline</h4>
                                    </div>
                                    <ul class="timeline">
                                        <li>
                                            <div class="activity bd-3 c-white animate">
                                                <h4 class="w-600">Fred Marks</h4>
                                                <p class="m-0">posted a message</p>
                                                <div class="p-0 c-gray2"><span class="fa fa-clock-o"></span><time datetime="2016-02-03">03-02-2016</time></div>
                                                <p class="m-0"><span class="fa fa-external-link"></span>Hello, World</p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="no-activity"></div>
                                        </li>
                                        <li>
                                            <div class="activity bd-3 c-white animate">
                                                <h4 class="w-600">Fred Marks</h4>
                                                <p class="m-0">posted a message</p>
                                                <div class="p-0 c-gray2"><span class="fa fa-clock-o"></span><time datetime="2016-02-03">03-02-2016</time></div>
                                                <p class="m-0"><span class="fa fa-external-link"></span>Hello, World</p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="no-activity"></div>
                                        </li>
                                        <li>
                                            <div class="activity bd-3 c-white animate">
                                                <h4 class="w-600">Fred Marks</h4>
                                                <p class="m-0">uploaded a new file</p>
                                                <div class="p-0 c-gray2"><span class="fa fa-clock-o"></span><time datetime="2016-02-03">03-02-2016</time></div>
                                                <p class="m-0"><span class="fa fa-external-link"></span>logo-1.png</p>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-12">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="card">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="card data-box-red m-0 p-15 clearfix c-white">
                                                       <div class="f-left">
                                                            <p class="m-0 w-600 f-18"><span class="fa fa-user"></span>Microsoft Inc</p>
                                                            <p class="m-0">Samsung Design Concepts</p>
                                                        </div>
                                                        <div class="f-right">
                                                            <span class="fa fa-thumb-tack f-18" style="color: #FFF; opacity: 0.5"></span>
                                                         </div> 
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="card m-0">
                                                        <div class="col-md-4 p-15 sm-bd-b-gray">
                                                            <div class="text-center">
                                                                <h4 class="w-600 f-18">44 %</h4>
                                                                <p class="uppercase m-0">complete</p>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4 p-15 bd-l-gray sm-bd-b-gray">
                                                            <div class="text-center">
                                                                <h4 class="w-600 f-18">3</h4>
                                                                <p class="uppercase m-0">my tasks</p>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4 p-15 bd-l-gray">
                                                            <div class="text-center">
                                                                <h4 class="w-600 f-18">689</h4>
                                                                <p class="uppercase m-0">days due</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="card">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="card data-box-green m-0 p-15 clearfix c-white">
                                                       <div class="f-left">
                                                            <p class="m-0 w-600 f-18"><span class="fa fa-user"></span>Microsoft Inc</p>
                                                            <p class="m-0">Nexus Design Concepts</p>
                                                        </div>
                                                        <div class="f-right">
                                                            <span class="fa fa-thumb-tack f-18" style="color: #FFF; opacity: 0.5"></span>
                                                         </div> 
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="card m-0">
                                                        <div class="col-md-4 p-15 sm-bd-b-gray">
                                                            <div class="text-center">
                                                                <h4 class="w-600 f-18">17 %</h4>
                                                                <p class="uppercase m-0">complete</p>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4 p-15 bd-l-gray sm-bd-b-gray">
                                                            <div class="text-center">
                                                                <h4 class="w-600 f-18">1</h4>
                                                                <p class="uppercase m-0">my tasks</p>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4 p-15 bd-l-gray">
                                                            <div class="text-center">
                                                                <h4 class="w-600 f-18">689</h4>
                                                                <p class="uppercase m-0">days due</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="card">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="card data-box-blue m-0 p-15 clearfix c-white">
                                                       <div class="f-left">
                                                            <p class="m-0 w-600 f-18"><span class="fa fa-user"></span>Apple Inc</p>
                                                            <p class="m-0">Iphone 8 Design Concepts</p>
                                                        </div>
                                                        <div class="f-right">
                                                            <span class="fa fa-thumb-tack f-18" style="color: #FFF; opacity: 0.5"></span>
                                                         </div> 
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="card m-0">
                                                        <div class="col-md-4 p-15 sm-bd-b-gray">
                                                            <div class="text-center">
                                                                <h4 class="w-600 f-18">17 %</h4>
                                                                <p class="uppercase m-0">complete</p>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4 p-15 bd-l-gray sm-bd-b-gray">
                                                            <div class="text-center">
                                                                <h4 class="w-600 f-18">1</h4>
                                                                <p class="uppercase m-0">my tasks</p>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4 p-15 bd-l-gray">
                                                            <div class="text-center">
                                                                <h4 class="w-600 f-18">689</h4>
                                                                <p class="uppercase m-0">days due</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
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
            <script src="/switch/assets/js/jquery.min.js"></script>
            <script src="/switch/assets/js/bootstrap.min.js"></script>
            <script src="/switch/assets/js/animisition.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
            <script src="/switch/assets/js/main2.js"></script>
            <script>
                $(document).ready(function(){
                    app.pageTransition();
                    app.barChart();
                    app.sidebarCtrl();
                });
                function doughnutChart() {
                if (document.getElementById("allTasks") == null) {
                    return;
                }
                let ctx = document.getElementById("allTasks").getContext("2d");
                let allTasks = new Chart(ctx, {
                    type: 'doughnut',
                    data: {
                        labels: [
                            "Pending",
                            "Behind",
                            "Completed"
                        ],
                        datasets: [{
                            // label: 'Total Projects',
                            data: [
                                9,
                                1,
                                6
                            ],
                            backgroundColor: [
                                'rgba(199, 87, 87, 1)',
                                'rgba(0, 144, 217, 1)',
                                'rgba(149, 165, 166, 1)'
                            ]
                        }]
                    }
                });
            }
            doughnutChart();

            function pieChart() {
                if (document.getElementById("allProjects") == null) {
                    return;
                }
                let ctx = document.getElementById("allProjects").getContext("2d");
                let allProjects = new Chart(ctx, {
                    type: 'pie',
                    data: {
                        labels: [
                            "Pending",
                            "Behind",
                            "Completed"
                        ],
                        datasets: [{
                            // label: 'Total Projects',
                            data: [
                                3,
                                1,
                                0
                            ],
                            backgroundColor: [
                                'rgba(199, 87, 87, 1)',
                                'rgba(0, 144, 217, 1)',
                                'rgba(149, 165, 166, 1)'
                            ]
                        }]
                    }
                });
            }
            pieChart();

            function animateTimeline() {
                let items = document.querySelectorAll(".timeline .activity");

                // check if an element is in viewport
                function isElementInViewport(elements) {
                    let rect = elements.getBoundingClientRect();
                    return (
                        rect.top >= 0 &&
                        rect.left >= 0 &&
                        rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
                        rect.right <= (window.innerWidth || document.documentElement.clientWidth)
                    );
                }

                function callbackFunc() {
                    for (let i = 0; i < items.length; i++) {
                        if (isElementInViewport(items[i])) {
                            items[i].classList.add("slideInRight");
                        }
                    };
                }

                // listen for events
                window.addEventListener("load", callbackFunc);
                window.addEventListener("scroll", callbackFunc);
                window.addEventListener("resize", callbackFunc);
            }
            animateTimeline();
            </script>
    </body>

</html>
