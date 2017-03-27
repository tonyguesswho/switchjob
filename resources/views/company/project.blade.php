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
                                <a href="#">
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
                            <a href="/company/profile">
                                <i class="icon-wallet"></i>
                                <p>Transaction</p>
                            </a>
                        </li>
                        <li>
                            <a href="/company/dev">
                                <i class="icon-layers"></i>
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
                                                        <li class="f-18 c-brand w-900">Projects</li>
                                                        <li class="f-right">
                                                            <a class="btn btn-sm btn-brand" data-toggle="modal" href='#modal-id'><i class="fa fa-plus" aria-hidden="true"></i> Add Projects</a>

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
                                                                <th class="w-600 f-15">Project List</th>
                                                                <th class="w-600 f-15">Start Date</th>
                                                                <th class="w-600 f-15">Deadline</th>
                                                                <th class="w-600 f-15">Progress</th>
                                                                <th class="w-600 f-15">Status</th>
                                                                <th class="w-600 f-15">View/Edit</i></th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                        @foreach($projects as $project)
                                                        
                                                        
                                                           
                                                            <tr>
                                                                <td>{{$project->project_name}}</td>
                                                                <td>{{$project->created_at}}</td>
                                                                <td>{{$project->deadline}}</td>
                                                                <td>
                                                                    <div class="progress" id="pro">
                                                                      <div class="progress-bar" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%; color: white;">
                                                                        20%
                                                                      </div>
                                                                    </div>
                                                                </td>
                                                                <td><p id="sts" class="align-center">In Progress</p></td>
                                                                <td>
                                                                    <div id="lst" class="align-center">
                                                                        <a href="/company/projectdesc/{{$project->id}}"><i class="fa fa-eye" aria-hidden="true"></i></a>
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
                        <h4 class="modal-title align-center uppercase">Fill the fields below to add a new milestone</h4>
                    </div>
                    <div class="modal-body">
                    <form class="switch-form" method="post" action="/company/addproject">
                    
                        {{csrf_field()}}
                    <label for="">Project Name</label>
                                <input type="text" class="form-control" id="mTitle" name="mTitle" placeholder="Name of Project">
                                <label for="">Budget</label>
                                <input type="number" class="form-control" aria-label="Amount (to the nearest naira)" value="" name="budget">
                                <label for="">Project Description</label>
                                <textarea name="Pdes" id="inputPdes" class="form-control" rows="3" required="required" placeholder="Write your project description in details"></textarea>
                            
                                <input type="date" class="form-control" id="sDate" placeholder="" value="-" style="display: none;" name="sDate">

                                <label for="">Deadline</label>
                                <input type="date" class="form-control" id="dLine" name="dLine" placeholder="">

                                <label for="">Duration</label><br />
                                <input type="radio" name="opt" id="inputOpt1" value="Less than 1 week" checked="checked">
                                Less than 1 week <br />
                                <input type="radio" name="opt" id="inputOpt2" value="Less than 3 weeks">
                                Less than 3 weeks <br />
                                <input type="radio" name="opt" id="inputOpt3" value="Less than 1 month">
                                Less than 1 month <br />
                                <input type="radio" name="opt" id="inputOpt4" value="Within 6 months">
                                Within 6 months <br />

                                <label for="">Skills Set</label>
                                <textarea name="skills" id="inputskills" class="form-control" rows="3" required="required" placeholder="Seperate each skills with comma (,)"></textarea>

                                <label for="">Project Availability</label> <br />
                                <input type="radio" name="avail" id="inputavail1" value="Part-Time" checked="checked">Part-Time <br />
                                <input type="radio" name="avail" id="inputavail2" value="">
                                Full-Time <br />
                                 <input type="radio" name="avail" id="inputavail3" value="">
                                Always Available <br />
                    <br><br>
                    <button id="submit-form" class="btn btn-dark" type="submit">
                        <span class="ladda-label">Submit</span>
                    </button>
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
    <script type="text/javascript">
    

  
     $('#fSubmit').click(function(){
         $('#modal-id').modal('hide');
    });
      

    </script>



            
               
    @endsection


