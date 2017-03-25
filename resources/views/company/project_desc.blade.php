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
                            <a href="/company/profile">
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
                                                        <li class="f-18 c-brand w-900">Get - Dev</li>
                                                        <li class="f-right">
                                                            <a class="btn btn-sm btn-brand" href="/company/projectdetail/{{$project_id}}">View Milestone</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="clearfix p-15 pos-rel">
                                                <div class="content">
                                                    <form>
                                                        <div class="form-group">
                                                            <div class="row">
                                                                <div class="col-md-8">
                                                                    <label>Project Name</label>
                                                                    <input type="text" class="form-control" value="Lorem Ipsum">
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <label for="">Budget</label>
                                                                    <input type="number" class="form-control" aria-label="Amount (to the nearest naira)" value="6000">
                                                                </div>
                                                            </div>
                                                            <label>Project Description</label>
                                                            <textarea rows="5" class="form-control" placeholder="Here can be your description" value="Mike">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</textarea>
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label>Start Date</label>
                                                                        <input type="Date" class="form-control" placeholder="" value="2015-11-23">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label>Deadline</label>
                                                                        <input type="Date" class="form-control" placeholder="" value="2016-01-23">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6 p-l-15">
                                                                    <div class="form-group">
                                                                        <label>Duration</label> <br />
                                                                        <input type="radio" name="opt" id="inputOpt1" value="Less than 1 week" checked="checked">
                                                                        Less than 1 week <br />
                                                                        <input type="radio" name="opt" id="inputOpt2" value="Less than 3 weeks">
                                                                        Less than 3 weeks <br />
                                                                        <input type="radio" name="opt" id="inputOpt3" value="Less than 1 month">
                                                                        Less than 1 month <br />
                                                                        <input type="radio" name="opt" id="inputOpt4" value="Within 6 months">
                                                                        Within 6 months <br />
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6 p-l-15">
                                                                    <div class="form-group">
                                                                        <label>Availability</label>
                                                                        <br />
                                                                        <input type="radio" name="avail" id="inputavail1" value="Part-Time" checked="checked">Part-Time <br />
                                                                        <input type="radio" name="avail" id="inputavail2" value="">
                                                                        Full-Time <br />
                                                                         <input type="radio" name="avail" id="inputavail3" value="">
                                                                        Always Available <br />
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <label>Skills Set</label>
                                                            <textarea rows="5" class="form-control" placeholder="Here can be your description" value="">PHP, Javascript, Angular</textarea>
                                                        </div>

                                                        <button type="submit" class="btn btn-info pull-right">Update</button>
                                                        <div class="clearfix"></div>
                                                    </form>
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
       

        <!-- SCRIPTS -->
            <script src="/switch/assets/js/jquery.min.js"></script>
            <script src="/switch/assets/js/bootstrap.min.js"></script>
            <script src="/switch/assets/js/jquery.dataTables.min.js"></script>
            <script src="/switch/assets/js/dataTables.bootstrap.js"></script>
            <script src="/switch/assets/js/dataTables.tableTools.js"></script>
            <script src="/switch/assets/js/animisition.min.js"></script>
            <script src="/switch/assets/js/main2.js"></script>
            <script>
                $(document).ready(function(){
                    app.pageTransition();
                    app.stylishInput();
                    app.toggleCollapse();
                    app.likesController();
                    app.sidebarCtrl();
                });
            </script>
    @endsection


