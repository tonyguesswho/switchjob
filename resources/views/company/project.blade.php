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
        <link rel="stylesheet" type="text/css" href="/switch/assets/css/animsition.min.css">
        <link rel="stylesheet" type="text/css" href="/switch/assets/css/animate.css">
        <link rel="stylesheet" href="/switch/assets/css/dataTables.css">
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
            .dataTables_filter {
                float: left;
            }
            .DTTT_container{
                display: none;
            }
            .form-control.small{
                width: 150px;
            }
            thead, th{
                background-color: #FFCC29;
                color: white !important;
            }
            input[type="search"] {
                 border: 1px solid #e4e4e4;
                 height: 30px;
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
                            <a href="/company/projects">
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
                                                        <li class="f-18 c-brand w-900">Projects</li>
                                                        <li class="f-right">
                                                            <a class="btn btn-sm btn-brand" id="table-edit_new"><i class="fa fa-plus"></i> Add Project</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="clearfix p-15 pos-rel">
                                                <div class="col-md-12 col-sm-12 col-xs-12 table-responsive table-red">
                                                    <table class="table table-striped table-bordered dataTable pro-table" id="table-editable" cellspacing="0" border="1">
                                                        <thead>
                                                            <tr>
                                                                <th>Projects</th>
                                                                <th>Start Date</th>
                                                                <th>Deadline</th>
                                                                <th>Status</th>
                                                                <th class="text-center">Action</th>
                                                                <th>Milestone</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>Smith</td>
                                                                <td>John</td>
                                                                <td>435</td>
                                                                <td>super Admin</td>
                                                                <td class="text-center"><a class="edit btn btn-dark" href="javascript:;"><i class="fa fa-pencil-square-o"></i>Edit</a><a class="delete btn" href="javascript:;"><i class="fa fa-times-circle"></i> Remove</a>
                                                                </td>
                                                                <td>
                                                                    <a href="/company/projectdetail">
                                                                        <i class="fa fa-eye" aria-hidden="true"></i>
                                                                    </a>
                                                                </td>
                                                                <!-- <td>
                                                                    <a class="btn" href="javascript:;">
                                                                        <i class="fa fa-plus"></i>Edit
                                                                    </a>
                                                                </td> -->
                                                            </tr>
                                                            <tr>
                                                                <td>Johnson</td>
                                                                <td>Alexa</td>
                                                                <td>220</td>
                                                                <td>super Admin</td>
                                                                <td class="text-center"><a class="edit btn btn-dark" href="javascript:;"><i class="fa fa-pencil-square-o"></i>Edit</a><a class="delete btn" href="javascript:;"><i class="fa fa-times-circle"></i> Remove</a>
                                                                </td>
                                                                <td>
                                                                    <a href="/company/projectdetail">
                                                                        <i class="fa fa-eye" aria-hidden="true"></i>
                                                                    </a>
                                                                </td>
                                                                <!-- <td>
                                                                    <a class="btn" href="javascript:;">
                                                                        <i class="fa fa-plus"></i>Edit
                                                                    </a>
                                                                </td> -->
                                                            </tr>
                                                            <tr>
                                                                <td>Paul</td>
                                                                <td>Billy</td>
                                                                <td>567</td>
                                                                <td class="center">nothing</td>
                                                                <td class="text-center">
                                                                    <a class="edit btn btn-dark" href="javascript:;">
                                                                        <i class="fa fa-pencil-square-o"></i>Edit
                                                                    </a>
                                                                    <a class="delete btn" href="javascript:;">
                                                                        <i class="fa fa-times-circle"></i> Remove
                                                                    </a>
                                                                </td>
                                                                <td>
                                                                    <a href="/company/projectdetail">
                                                                        <i class="fa fa-eye" aria-hidden="true"></i>
                                                                    </a>
                                                                </td>
                                                                <!-- <td>
                                                                    <a class="btn" href="javascript:;">
                                                                        <i class="fa fa-plus"></i>Edit
                                                                    </a>
                                                                </td> -->
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
                $(function () {

                    function editableTable() {

                        function restoreRow(oTable, nRow) {
                            var aData = oTable.fnGetData(nRow);
                            var jqTds = $('>td', nRow);

                            for (var i = 0, iLen = jqTds.length; i < iLen; i++) {
                                oTable.fnUpdate(aData[i], nRow, i, false);
                            }

                            oTable.fnDraw();
                        }

                        function editRow(oTable, nRow) {
                            var aData = oTable.fnGetData(nRow);
                            var jqTds = $('>td', nRow);
                            jqTds[0].innerHTML = '<input type="text" class="form-control small" value="' + aData[0] + '">';
                            jqTds[1].innerHTML = '<input type="text" class="form-control small" value="' + aData[1] + '">';
                            jqTds[2].innerHTML = '<input type="text" class="form-control small" value="' + aData[2] + '">';
                            jqTds[3].innerHTML = '<input type="text" class="form-control small" value="' + aData[3] + '">';
                            jqTds[4].innerHTML = '<div class="text-center"><a class="edit btn btn-success" href="">Save</a> <a class="delete btn" href=""><i class="fa fa-times-circle"></i> Remove</a></div>';
                        }

                        function saveRow(oTable, nRow) {
                            var jqInputs = $('input', nRow);
                            oTable.fnUpdate(jqInputs[0].value, nRow, 0, false);
                            oTable.fnUpdate(jqInputs[1].value, nRow, 1, false);
                            oTable.fnUpdate(jqInputs[2].value, nRow, 2, false);
                            oTable.fnUpdate(jqInputs[3].value, nRow, 3, false);
                            oTable.fnUpdate('<div class="text-center"><a class="edit btn btn-dark" href=""><i class="fa fa-pencil-square-o"></i>Edit</a> <a class="delete btn" href=""><i class="fa fa-times-circle"></i> Remove</a></div>', nRow, 4, false);
                            oTable.fnDraw();
                        }

                        function cancelEditRow(oTable, nRow) {
                            var jqInputs = $('input', nRow);
                            oTable.fnUpdate(jqInputs[0].value, nRow, 0, false);
                            oTable.fnUpdate(jqInputs[1].value, nRow, 1, false);
                            oTable.fnUpdate(jqInputs[2].value, nRow, 2, false);
                            oTable.fnUpdate(jqInputs[3].value, nRow, 3, false);
                            oTable.fnUpdate('<a class="edit btn btn-dark" href=""><i class="fa fa-pencil-square-o"></i>Edit</a>', nRow, 4, false);
                            oTable.fnDraw();
                        }

                        var oTable = $('#table-editable').dataTable({
                            "aLengthMenu": [
                                [5, 15, 20, -1],
                                [5, 15, 20, "All"] // change per page values here
                            ],
                            "sDom" : "<'row'<'col-md-6 filter-left'f><'col-md-6'T>r>t<'row'<'col-md-6'i><'col-md-6'p>>",
                            "oTableTools" : {
                                "sSwfPath": "/switch/assets/plugins/datatables/swf/copy_csv_xls_pdf.swf",
                                "aButtons":[
                                    {
                                        "sExtends":"pdf",
                                        "mColumns":[0, 1, 2, 3],
                                        "sPdfOrientation":"landscape"
                                    },
                                    {
                                        "sExtends":"print",
                                        "mColumns":[0, 1, 2, 3],
                                        "sPdfOrientation":"landscape"
                                    },{
                                        "sExtends":"xls",
                                        "mColumns":[0, 1, 2, 3],
                                        "sPdfOrientation":"landscape"
                                    },{
                                        "sExtends":"csv",
                                        "mColumns":[0, 1, 2, 3],
                                        "sPdfOrientation":"landscape"
                                    }
                                ]
                            },
                            // set the initial value
                            "iDisplayLength": 10,
                            "bPaginate": false,
                            "sPaginationType": "bootstrap",
                            "oLanguage": {
                                "sLengthMenu": "_MENU_ records per page",
                                "oPaginate": {
                                    "sPrevious": "Prev",
                                    "sNext": "Next"
                                },
                                "sSearch": "" 
                            },
                            "aoColumnDefs": [{
                                    'bSortable': false,
                                    'aTargets': [0]
                                }
                            ]
                        });

                        jQuery('#table-edit_wrapper .dataTables_filter input').addClass("form-control medium"); // modify table search input
                        jQuery('#table-edit_wrapper .dataTables_length select').addClass("form-control xsmall"); // modify table per page dropdown

                        var nEditing = null;

                        $('#table-edit_new').click(function (e) {
                            e.preventDefault();
                            var aiNew = oTable.fnAddData(['', '', '', '',
                                '<p class="text-center"><a class="edit btn btn-dark" href=""><i class="fa fa-pencil-square-o"></i>Edit</a> <a class="delete btn" href=""><i class="fa fa-times-circle"></i> Remove</a></p>',
                                '<p class="text-center"><a class="btn" href="project_details.html"><i class="fa fa-plus"></i>Edit</a></p>'
                            ]);
                            var nRow = oTable.fnGetNodes(aiNew[0]);
                            editRow(oTable, nRow);
                            nEditing = nRow;
                        });

                        $('#table-editable a.delete').live('click', function (e) {
                            e.preventDefault();

                            if (confirm("Are you sure to delete this row ?") == false) {
                                return;
                            }

                            var nRow = $(this).parents('tr')[0];
                            oTable.fnDeleteRow(nRow);

                            // alert("Deleted! Do not forget to do some ajax to sync with backend :)");
                        });

                        $('#table-editable a.cancel').live('click', function (e) {
                            e.preventDefault();
                            if ($(this).attr("data-mode") == "new") {
                                var nRow = $(this).parents('tr')[0];
                                oTable.fnDeleteRow(nRow);
                            } else {
                                restoreRow(oTable, nEditing);
                                nEditing = null;
                            }
                        });

                        $('#table-editable a.edit').live('click', function (e) {
                            e.preventDefault();
                            /* Get the row as a parent of the link that was clicked on */
                            var nRow = $(this).parents('tr')[0];

                            if (nEditing !== null && nEditing != nRow) {
                                restoreRow(oTable, nEditing);
                                editRow(oTable, nRow);
                                nEditing = nRow;
                            } else if (nEditing == nRow && this.innerHTML == "Save") {
                                /* This row is being edited and should be saved */
                                saveRow(oTable, nEditing);
                                nEditing = null;
                                // alert("Updated! Do not forget to do some ajax to sync with backend :)");
                            } else {
                                /* No row currently being edited */
                                editRow(oTable, nRow);
                                nEditing = nRow;
                            }
                        });

                        $('.dataTables_filter input').attr("placeholder", "Search a user...");

                    };

                    editableTable();

                });
                
            </script>
            <script>
                $(document).ready(function() {
                    $('.pro-table').DataTable();
                } );
            </script>
    </body>

</html>
