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
                    <li>
                        <a href="/company/project">
                            <i class="icon-layers"></i>
                            <p>Projects</p>
                        </a>
                    </li>
                    <li  class="active">
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
          <div class="p-0">
            <div class="row">
              <div class="col-md-12">
                <div class="card clearfix">
                  <div class="col-xs-12 col-md-12 col-lg-12 invoice">
                    <div>
                      <h4 class="pull-left invoiceLetter">Payment #1</h4>
                    </div>
                    <div class="pull-right">
                      <button class="btn info-button">
                        <span>
                          <i class="fa fa-check-square-o" aria-hidden="true"></i>
                          Publish Payment
                        </span>
                      </button>
                      <button class="btn info-button">
                        <span>
                        <i class="fa fa-envelope-o" aria-hidden="true"></i>  Resend Payment
                        </span>
                      </button>
                      <button class="btn info-button">
                        <span>
                        <i class="fa fa-download" aria-hidden="true"></i>    Pdf (Printable) Payment
                        </span>
                      </button>
                    </div>
                    </div>
                    <div class="col-xs-12 col-md-12 col-lg-12">
                      <table class="table table-responsive table-bordered">
                        <thead>
                          <tr class="bg-brand">
                            <td colspan="5" class="col">
                                <span class="pull-left abc"><b>Company ABC Limited<b></span>
                                <button class="btn btn-default pull-right">
                                  <span>
                                  <i class="fa fa-plus" aria-hidden="true"></i>
                                  Edit Payment
                                  </span>
                                </button>
                            </td>
                          </tr>
                        </thead>
                        <tbody>
                          <tr class="active">
                            <td><strong>Date Started:</strong></td>
                            <td class="invoiceLetter">16-12-2014</td>
                            <td><strong>Status:</strong></td>
                            <td>
                              <i class="fa fa-circle text-success">
                            </td>
                          </tr>
                          <tr class="active">
                            <td><strong>Date Due:</strong></td>
                            <td class="invoiceLetter">31-12-2014</td>
                            <td><strong>Initial Payment:</strong></td>
                            <td>...</td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                    <div class="col-xs-12 col-md-12 col-lg-12">
                      <table class="table table-responsive table-bordered">
                        <thead>
                          <tr class="bg-brand-lg">
                            <td>S/N</td>
                            <td><strong>Progress(%)</strong></td>
                            <td><strong>Stage</strong></td>
                            
                            <td><strong>Status</strong></td>
                            <td><strong>Amount (&#8358;)</strong></td>
                            <td><strong>Payment</strong></td>
                          </tr>
                        </thead>
                        <tbody>
                            <tr>
                              <td>1</td>
                              <td class="invoiceLetter">20</td>
                              <td class="invoiceLetter">Rate per Hour</td>
                              <td class="invoiceLetter">
                                done
                              </td>
                              <td class="invoiceLetter">50</td>
                              <td class="invoiceLetter">
                                <i class="fa fa-circle text-success">
                              </td>
                            </tr>
                            <tr>
                              <td>2</td>
                              <td class="invoiceLetter">NA</td>
                              <td class="invoiceLetter">Rate per Hour</td>
                              
                              <td class="invoiceLetter">
                                in progress
                              </td>
                              <td class="invoiceLetter">50</td>
                              <td class="invoiceLetter">
                                <i class="fa fa-circle text-info">
                              </td>
                            </tr>
                            <tr>
                              <td>3</td>
                              <td class="invoiceLetter">NA</td>
                              <td class="invoiceLetter">Rate per Hour</td>
                              
                              <td class="invoiceLetter">
                                in progress
                              </td>
                              <td class="invoiceLetter">50</td>
                              <td class="invoiceLetter">
                                <i class="fa fa-circle text-info">
                              </td>
                            </tr>
                            <tr>
                              <td>4</td>
                              <td class="invoiceLetter">NA</td>
                              <td class="invoiceLetter">Rate per Hour</td>
                              
                              <td class="invoiceLetter">
                                in progress
                              </td>
                              <td class="invoiceLetter">50</td>
                              <td class="invoiceLetter">
                                <i class="fa fa-circle text-info">
                              </td>
                            </tr>
                        </tbody>
                        <tfoot>
                          <tr>
                            <td class="invoiceLetter lastInvoice" >Total</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td class="invoiceLetter lastInvoice" >&#8358; 750.00</td>
                            <td></td>
                          </tr>
                        </tfoot>
                      </table>
                    </div>
                    <div class="col-xs-12 col-md-12 col-lg-12 ">
                      <p class="text-center payment"> Payment History </p>
                    </div>
                    <div class="col-xs-12 col-md-12 col-lg-12 table2">
                      <table class="table table-responsive table-bordered" id="example">
                        <thead>
                          <tr class="bg-brand-lg">
                            <td>S/N</td>
                            <td><strong>Progress(%)</strong>
                            </td>
                            <td><strong>Stage</strong></td>
                            <td><strong>Status</strong></td>
                            <td><strong>Amount (&#8358;)</strong></td>
                            <td><strong>Payment</strong></td>
                          </tr>
                        </thead>
                        <tbody>
                            <tr>
                              <td>1</td>
                              <td class="invoiceLetter">20</td>
                              <td class="invoiceLetter">Rate per Hour</td>
                              
                              <td class="invoiceLetter">
                                done
                              </td>
                              <td class="invoiceLetter">50</td>
                              <td class="invoiceLetter">
                                <i class="fa fa-circle text-success">
                              </td>
                            </tr>
                            <tr>
                              <td>2</td>
                              <td class="invoiceLetter">NA</td>
                              <td class="invoiceLetter">Rate per Hour</td>
                            
                              <td class="invoiceLetter">
                                in progress
                              </td>
                              <td class="invoiceLetter">50</td>
                              <td class="invoiceLetter">
                                <i class="fa fa-circle text-info">
                              </td>
                            </tr>
                            <tr>
                              <td>3</td>
                              <td class="invoiceLetter">NA</td>
                              <td class="invoiceLetter">Rate per Hour</td>
                              
                              <td class="invoiceLetter">
                                in progress
                              </td>
                              <td class="invoiceLetter">50</td>
                              <td class="invoiceLetter">
                                <i class="fa fa-circle text-info">
                              </td>
                            </tr>
                            <tr>
                              <td>4</td>
                              <td class="invoiceLetter">NA</td>
                              <td class="invoiceLetter">Rate per Hour</td>
                              
                              <td class="invoiceLetter">
                                in progress
                              </td>
                              <td class="invoiceLetter">50</td>
                              <td class="invoiceLetter">
                                <i class="fa fa-circle text-info">
                              </td>
                            </tr>
                        </tbody>
                        <tfoot>
                          <tr>
                            <td class="invoiceLetter lastInvoice">Total</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td class="invoiceLetter lastInvoice" >&#8358; 750.00</td>
                            <td></td>
                          </tr>
                        </tfoot>
                      </table>
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
    <script src="/switch/assets/js/animisition.min.js"></script>
    <script src="/switch/assets/js/jquery.dataTables.min.js"></script>
    <script src="/switch/assets/js/dataTables.bootstrap.js"></script>
    <script src="/switch/assets/js/dataTables.tableTools.js"></script> 
    <script src="/switch/assets/js/main2.js"></script>
    <script>
      $(document).ready(function(){
          app.pageTransition();
          app.stylishInput();
          app.toggleCollapse();
          app.sidebarCtrl();
      });
    </script>
    @endsection


