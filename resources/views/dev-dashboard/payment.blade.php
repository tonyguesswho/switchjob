@extends('layouts.dev_dashboard')

@section('content')

    <body>
        <div class="wrapper clearfix animsition pos-rel">
           @include('dev-dashboard.navbar')
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
                            <button class="btn">
                              <span>
                                <i class="fa fa-check-square-o" aria-hidden="true"></i>
                                Publish Payment
                              </span>
                            </button>
                            <button class="btn">
                              <span>
                              <i class="fa fa-envelope-o" aria-hidden="true"></i>  Resend Payment
                              </span>
                            </button>
                            <button class="btn">
                              <span>
                              <i class="fa fa-download" aria-hidden="true"></i>    Pdf (Printable) Payment
                              </span>
                            </button>
                          </div>
                        </div>
                        <div class="col-xs-12 col-md-12 col-lg-12">
                          <table class="table table-responsive table-bordered">
                            <thead>
                              <tr>
                                <td colspan="5" class="col">
                                    <span class="pull-left"><b>Company ABC Limited<b></span>
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
                                  <button class="btn btn-success newButton">New</button>
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
                              <tr>
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
                                    <button class="btn btn-success">
                                      success
                                    </button>
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
                                    <button class="btn btn-info">
                                      on hold
                                    </button>
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
                                    <button class="btn btn-info">
                                      on hold
                                    </button>
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
                                    <button class="btn btn-info">
                                      on hold
                                    </button>
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
                              <tr>
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
                                    <button class="btn btn-success">
                                      success
                                    </button>
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
                                    <button class="btn btn-info">
                                      on hold
                                    </button>
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
                                    <button class="btn btn-info">
                                      on hold
                                    </button>
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
                                    <button class="btn btn-info">
                                      on hold
                                    </button>
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
                <!-- jj -->
            </div>
          </div>


        </div>

        <!-- SCRIPTS -->
            <script src="../assets/js/jquery.min.js"></script>
            <script src="../assets/js/bootstrap.min.js"></script>
            <script src="../assets/js/animisition.min.js"></script>
            <script src="../assets/js/jquery.dataTables.min.js"></script>
            <script src="../assets/js/dataTables.bootstrap.js"></script>
            <script src="../assets/js/dataTables.tableTools.js"></script> 
            <script src="../assets/js/main2.js"></script>
            <script>
                $(document).ready(function(){
                    app.pageTransition();
                    app.stylishInput();
                    app.toggleCollapse();
                    app.likesController();
                    app.sidebarCtrl();
                });

                $(document).ready(function() {
                    var table = $('#example').DataTable();
                     
                    
                } );


            </script>
    </body>

</html>
@endsection