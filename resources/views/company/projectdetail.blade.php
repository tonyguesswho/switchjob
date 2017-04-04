<!DOCTYPE html>
<html>

    <head>
        <meta charset="UTF-8">
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <title>Company Dashboard</title>
        <!-- STYLESHEETS-->
        <link rel="stylesheet" href="/switch/assets/css/bootstrap.min.css">

        <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.4.1/css/simple-line-icons.css">
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.13/css/dataTables.bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="/switch/assets/css/animsition.min.css">
        <link rel="stylesheet" type="text/css" href="/switch/assets/css/animate.css">
        <!-- CUSTOM STYLES -->
        <link rel="stylesheet" href="/switch/assets/css/main.css">
        <link rel="stylesheet" href="/switch/assets/css/form2.css">
        <link rel="stylesheet" href="/switch/assets/css/dashboard.css">
        <!-- WEBFONT -->
        <link href='https://fonts.googleapis.com/css?family=Lato:300,400,700,400italic|Montserrat:700,400|Homemade+Apple' rel='stylesheet' type='text/css'>
        <style>
            /*hide all animated initially.....*/
            h3{
              line-height: 30px;
            }
            .animated {
              visibility: hidden;
            }
            .card .more{
              display: none;
            }
            .btn-brand{
              border-bottom-left-radius: 0px;
              width: 150px;
              background: #FFCC29;
              color: #FFF;
              font-weight: 900;
            }
            .btn-brand:hover, .btn-brand:active, .btn-brand:visited, .btn-brand.active, .btn-brand:focus{
              color: #FFF;
            }

            .footer .likes,
            .footer .dislikes{
              cursor: pointer;
            }

            /*Company Styles*/
            thead, th{
                background-color: #FFCC29;
                color: white !important;
            }
            th:first-child, th:nth-child(2), th:nth-child(3), th:nth-child(4), tr, td {
                text-align: left !important;
            }
            tr td:nth-child(4) p{
                border-radius: 40px;
                background-color: #e4e4e4;
                text-align: center;
                margin-bottom: 0px;
            }
            #sts {
                font-weight: normal !important;
                margin-bottom: 0;
            }
        </style>

    </head>

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
                        <li>
                            <a href="/company/dashboard">
                                <i class="icon-chart"></i>
                                <p>Dashboard</p>
                            </a>
                        </li>
                        <li class="active">
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
                            <a href="/Company/dev">
                                <i class="icon-grid"></i>
                                <p>Developers</p>
                            </a>
                        </li>
                        <li>
                            <a href="/Company/profile">
                                <i class="icon-user"></i>
                                <p>Account</p>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="main-panel dash">
              <div class="content">
                  <div class="p-0">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card clearfix">
                                <div class="content clearfix">
                                    <div class="row">
                                        <!-- The header part -->
                                        <div class="col-md-12">
                                            <div class="clearfix p-15 pos-rel">
                                                <div class="border-bottom">
                                                    <ul class="list-inline">
                                                        <li class="f-18 c-brand w-900">Project Milestones</li>
                                                        <li class="f-right">
                                                            <a class="btn btn-sm btn-brand" data-toggle="modal" href='#modal-id'><i class="fa fa-plus" aria-hidden="true"></i> Add Milestone</a>

                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="clearfix p-15 pos-rel">
                                                <div class="table-responsive">

                                                    <table class="table table-bordered comp-table" id="dTable" border="1">
                                                        <thead class="p-t-10 p-b-10">
                                                            <tr>
                                                                <th class="w-600 f-15">Title</th>
                                                                <th class="w-600 f-15">Start Date</th>
                                                                <th class="w-600 f-15">Deadline</th>
                                                                <th class="w-600 f-15">Progress</th>
                                                                <th class="w-600 f-15">Status</th>
                                                                <th class="w-600 f-15"><i class="fa fa-bars" aria-hidden="true"></i></th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                         @foreach($project_milestone as $milestone)
                                                             <tr>

                                                                <td>{{$milestone->milestone_title}}</td>
                                                                <td>{{$milestone->start_date}}</td>
                                                                <td>{{$milestone->deadline}}</td>
                                                                <td><p id="pro">0</p></td>
                                                                <td><p id="sts" class="align-center">In Progress</p></td>
                                                                <td>
                                                                    <div id="lst" class="align-center">
                                                                        <span class="bg-green p-5"><i class="fa fa-pencil" aria-hidden="true"></i></span>&nbsp;<a href="/company/deletemilestone/{{$milestone->id}}"><span class="bg-red p-5"><i class="fa fa-trash-o" aria-hidden="true"></i></span></a>
                                                                    </div>
                                                                </td>
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
                    </div>
                  </div>
              </div>
            </div>
          </div>


        </div>
        <div class="modal" id="modal-id">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title align-center uppercase">*Fill the fields below to add a new milestone</h4>
                    </div>
                    <div class="modal-body">
                        <form action="/company/addmilestone/{{$project_id}}" method="post" role="">
                         {{csrf_field()}}
                            <div class="form-group">
                               
                                <label for="">Title</label>
                                <input type="text" class="form-control" name="mTitle">
                                <label for="">Start Date</label>
                                <input type="date" class="form-control" name="sDate">
                                <label for="">Deadline</label>
                                <input type="date"  class="form-control" name="dLine">
                            </div>

                            <input type="Submit" class="btn btn-xs btn-brand" id ="fSubmit" value="Submit" />
                        </form>
                        
                    </div>
                </div>
            </div>
        </div>

        <!-- SCRIPTS -->
            <script src="/switch/assets/js/jquery.min.js"></script>
            <script src="/switch/assets/js/bootstrap.min.js"></script>
            <script src="/switch/assets/js/jquery.vegas.min.js"></script>
            <script src="/switch/assets/js/animisition.min.js"></script>
            <script src="/switch/assets/js/main2.js"></script>
            <script type="text/javascript" src="https://cdn.datatables.net/1.10.13/js/jquery.dataTables.min.js"></script>
            <script type="text/javascript" src="https://cdn.datatables.net/1.10.13/js/dataTables.bootstrap.min.js"></script>
            <script>
                $(document).ready(function(){
                    app.pageTransition();
                    app.stylishInput();
                    app.toggleCollapse();
                    app.likesController();
                    app.sidebarCtrl();
                });
            </script>

            <script>
                (function setup() {
                    "use strict";

                    var mTitleElem = document.getElementById("mTitle");
                    var sDateElem = document.getElementById("sDate");
                    var dLineElem = document.getElementById("dLine");
                    var dTableElem = document.getElementById("dTable");
                    var prog = document.getElementById("pro");
                    var stat = document.getElementById("sts");
                    var dList = document.getElementById("lst");

                    document.getElementById("fSubmit").addEventListener("click", function () {
                        var newRow = dTableElem.insertRow(-1);
                        var newCell = newRow.insertCell(0);
                        var clon = prog.cloneNode(true);
                        var clon1 = stat.cloneNode(true);
                        var clon2 = dList.cloneNode(true);
                        var newText = document.createTextNode(mTitleElem.value);
                        newCell.appendChild(newText);

                        newCell = newRow.insertCell(1);
                        newText = document.createTextNode(sDateElem.value);
                        newCell.appendChild(newText);

                        newCell = newRow.insertCell(2);
                        newText = document.createTextNode(dLineElem.value);
                        newCell.appendChild(newText);

                        newCell = newRow.insertCell(3);
                        newText = clon;
                        newCell.appendChild(newText);

                        newCell = newRow.insertCell(4);
                        newText = clon1;
                        newCell.appendChild(newText);

                        newCell = newRow.insertCell(5);
                        newText = clon2;
                        newCell.appendChild(newText);

                        mTitleElem.value = "";
                        sDateElem.value = "";
                        dLineElem.value = "";
                        dTableElem.value = "";
                    })
                })();

                $('#fSubmit').click(function(){
                    $('#modal-id').modal('hide');
                });

                $(document).ready(function() {
                    $('.comp-table').DataTable();
                } );
                
            </script>
    </body>

</html>
