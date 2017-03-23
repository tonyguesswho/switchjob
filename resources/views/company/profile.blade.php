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
                        <li>
                            <a href="/comany/payment">
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
                        <li class="active">
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
                                <div class="p-15 clearfix">
                                    <div role="tabpanel">
                                        <!-- Nav tabs -->
                                        <ul class="nav nav-tabs" role="tablist">
                                            <li role="presentation" class="active">
                                                <a href="#General" aria-controls="home" role="tab" data-toggle="tab">General</a>
                                            </li>
                                            <li role="presentation" class="">
                                                <a href="#Company" aria-controls="home" role="tab" data-toggle="tab">Company</a>
                                            </li>
                                            <li role="presentation" class="">
                                                <a href="#Invoices" aria-controls="home" role="tab" data-toggle="tab">Invoices</a>
                                            </li>
                                            <li role="presentation" class="">
                                                <a href="#Paypal" aria-controls="home" role="tab" data-toggle="tab">Paypal</a>
                                            </li>
                                            <li role="presentation" class="">
                                                <a href="#Emailtemplates" aria-controls="home" role="tab" data-toggle="tab">Email templates</a>
                                            </li>
                                            <li role="presentation" class="">
                                                <a href="#SupportTickets" aria-controls="home" role="tab" data-toggle="tab">Support Tickets</a>
                                            </li>
                                            <li role="presentation" class="">
                                                <a href="#FormFields" aria-controls="home" role="tab" data-toggle="tab">Form Fields</a>
                                            </li>
                                            <li role="presentation" class="">
                                                <a href="#Cron" aria-controls="home" role="tab" data-toggle="tab">Cron</a>
                                            </li>
                                            <li role="presentation">
                                                <a href="#DBBackup" aria-controls="tab" role="tab" data-toggle="tab">DB Backup</a>
                                            </li>
                                            <li role="presentation">
                                                <a href="#Updates" aria-controls="tab" role="tab" data-toggle="tab">Updates</a>
                                            </li>
                                        </ul>
                                        <!-- Tab panes -->
                                        <div class="card box-sw-none">
                                            <div class="tab-content tabs-content">
                                                <div role="tabpanel" class="tab-pane active container-fluid tabpane" id="General">
                                                    <h1 class="settings">General Settings 1</h1>
                                                    <hr class="m-t-0">
                                                    <div class="table-responsive">
                                                        <table class="table profiletable">
                                                            <thead>
                                                                <tr>
                                                                    <th class="middleline">Item</th>
                                                                    <th>Value</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td class="middleline">Dashboard Title</td>
                                                                    <td>
                                                                        <input type="text" name="" id="input" class="form-control input" placeholder="Project Dashboard" value="" required="required" pattern="" title="">
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="middleline">Language</td>
                                                                    <td>
                                                                        <select name="" id="input" class="form-control select">
                                                                            <option value="">
                                                                                -- English --
                                                                            </option>
                                                                        </select>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="middleline">Theme</td>
                                                                    <td>
                                                                        <select name="" id="input" class="form-control select">
                                                                            <option value="">
                                                                                -- Default --
                                                                            </option>
                                                                        </select>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="middleline">Date Format</td>
                                                                    <td>
                                                                        <select name="" id="input" class="form-control select">
                                                                            <option value="">
                                                                                -- d-m-y --
                                                                            </option>
                                                                        </select>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="middleline">General Page Limits</td>
                                                                    <td>
                                                                        <input type="text" name="" id="input" class="form-control input" placeholder="25" value="" required="required" pattern="" title="">
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="middleline">Messages Page Limits</td>
                                                                    <td>
                                                                        <input type="text" name="" id="input" class="form-control input" placeholder="10" value="" required="required" pattern="" title="">
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="middleline">lang_timeline_diaplay_limits</td>
                                                                    <td>
                                                                        <input type="text" name="" id="input" class="form-control input" placeholder="100" value="" required="required" pattern="" title="">
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="middleline">Currency</td>
                                                                    <td>
                                                                        <input type="text" name="" id="input" class="form-control input" placeholder="USD" value="" required="required" pattern="" title="">
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="middleline">Currency Symbol</td>
                                                                    <td>
                                                                        <input type="text" name="" id="input" class="form-control input" placeholder="$" value="" required="required" pattern="" title="">
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="middleline">Show Information Tips</td>
                                                                    <td>
                                                                        <select name="" id="input" class="form-control select">
                                                                            <option value="">
                                                                                -- Yes --
                                                                            </option>
                                                                        </select>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="middleline">Allow Client Registration</td>
                                                                    <td>
                                                                        <select name="" id="input" class="form-control select">
                                                                            <option value="">
                                                                                -- Yes --
                                                                            </option>
                                                                        </select>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>


                                                <div role="tabpanel" class="tab-pane" id="Company">

                                                    <div class="table-responsive profile">
                                                        <div class="row">
                                                            <div class="col-xs-12 col-md-4 col-md-push-8 col8">
                                                                <div class="card-user">
                                                                    <div class="image">
                                                                        <img src="https://ununsplash.imgix.net/photo-1431578500526-4d9613015464?fit=crop&amp;fm=jpg&amp" alt="...">
                                                                    </div>
                                                                    <div class="p-15">
                                                                        <div class="author">
                                                                            <a href="#">
                                                                            <img class="avatar border-gray" src="../assets/img/face_one.jpeg" alt="...">
                                                                            <h4 class="title c-brand w-900">Usman Irale</h4>
                                                                            </a>
                                                                        </div>
                                                                        <p class="description text-center"> 
                                                                            lorem ipsum lorem ipsum lorem ipsum lorem ipsum
                                                                        </p>
                                                                    </div>
                                                                    <hr>
                                                                    <div class="text-center">
                                                                        <button href="#" class="btn btn-simple"><i class="fa fa-facebook-square"></i></button>
                                                                        <button href="#" class="btn btn-simple"><i class="fa fa-twitter"></i></button>
                                                                        <button href="#" class="btn btn-simple"><i class="fa fa-google-plus-square"></i></button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-xs-12 col-md-8 col-md-pull-4">
                                                                <div>
                                                                    <div class="header">
                                                                        <h3 class="title c-brand w-900">Edit Profile</h3>
                                                                    </div>
                                                                    <div class="content">
                                                                        <form>
                                                                            <div class="row">
                                                                                <div class="col-md-5">
                                                                                    <div class="form-group">
                                                                                        <label>Company (disabled)</label>
                                                                                        <input type="text" class="form-control" disabled="" placeholder="Company" value="Switch Nigeria.">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-md-3">
                                                                                    <div class="form-group">
                                                                                        <label>Username</label>
                                                                                        <input type="text" class="form-control" placeholder="Username" value="Usman Danfodio">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-md-4">
                                                                                    <div class="form-group">
                                                                                        <label for="exampleInputEmail1">Email address</label>
                                                                                        <input type="email" class="form-control" placeholder="Email">
                                                                                    </div>
                                                                                </div>
                                                                            </div>

                                                                            <div class="row">
                                                                                <div class="col-md-6">
                                                                                    <div class="form-group">
                                                                                        <label>First Name</label>
                                                                                        <input type="text" class="form-control" placeholder="Company" value="Usman">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-md-6">
                                                                                    <div class="form-group">
                                                                                        <label>Last Name</label>
                                                                                        <input type="text" class="form-control" placeholder="Last Name" value="Danfodio">
                                                                                    </div>
                                                                                </div>
                                                                            </div>

                                                                            <div class="row">
                                                                                <div class="col-md-12">
                                                                                    <div class="form-group">
                                                                                        <label>Address</label>
                                                                                        <input type="text" class="form-control" placeholder="Home Address" value="No 10 Alara street Sabo Yaba.">
                                                                                    </div>
                                                                                </div>
                                                                            </div>

                                                                            <div class="row">
                                                                                <div class="col-md-4">
                                                                                    <div class="form-group">
                                                                                        <label>City</label>
                                                                                        <input type="text" class="form-control" placeholder="City" value="Lagos">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-md-4">
                                                                                    <div class="form-group">
                                                                                        <label>Country</label>
                                                                                        <input type="text" class="form-control" placeholder="Country" value="Nigeria">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-md-4">
                                                                                    <div class="form-group">
                                                                                        <label>Postal Code</label>
                                                                                        <input type="number" class="form-control" placeholder="ZIP Code">
                                                                                    </div>
                                                                                </div>
                                                                            </div>

                                                                            <div class="row">
                                                                                <div class="col-md-12">
                                                                                    <div class="form-group">
                                                                                        <label>About Me</label>
                                                                                        <textarea rows="5" class="form-control" placeholder="Here can be your description" value="Mike">I am JS. </textarea>
                                                                                    </div>
                                                                                </div>
                                                                            </div>

                                                                            <button type="submit" class="btn btn-info pull-right">Update Profile</button>
                                                                            <div class="clearfix"></div>
                                                                        </form>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div role="tabpanel" class="tab-pane container-fluid tabpane" id="Invoices">
                                                    <h1 class="settings">General Settings 3</h1>
                                                    <hr class="m-t-0">
                                                    <div class="table-responsive">
                                                        <table class="table">
                                                            <thead>
                                                                <tr>
                                                                    <th class="middleline">Item</th>
                                                                    <th>Value</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td class="middleline">Dashboard Title</td>
                                                                    <td>
                                                                        <input type="text" name="" id="input" class="form-control input" placeholder="Project Dashboard" value="" required="required" pattern="" title="">
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="middleline">Language</td>
                                                                    <td>
                                                                        <select name="" id="input" class="form-control select">
                                                                            <option value="">
                                                                                -- English --
                                                                            </option>
                                                                        </select>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="middleline">Theme</td>
                                                                    <td>
                                                                        <select name="" id="input" class="form-control select">
                                                                            <option value="">
                                                                                -- Default --
                                                                            </option>
                                                                        </select>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="middleline">Date Format</td>
                                                                    <td>
                                                                        <select name="" id="input" class="form-control select">
                                                                            <option value="">
                                                                                -- d-m-y --
                                                                            </option>
                                                                        </select>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="middleline">General Page Limits</td>
                                                                    <td>
                                                                        <input type="text" name="" id="input" class="form-control input" placeholder="25" value="" required="required" pattern="" title="">
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="middleline">Messages Page Limits</td>
                                                                    <td>
                                                                        <input type="text" name="" id="input" class="form-control input" placeholder="10" value="" required="required" pattern="" title="">
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="middleline">lang_timeline_diaplay_limits</td>
                                                                    <td>
                                                                        <input type="text" name="" id="input" class="form-control input" placeholder="100" value="" required="required" pattern="" title="">
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="middleline">Currency</td>
                                                                    <td>
                                                                        <input type="text" name="" id="input" class="form-control input" placeholder="USD" value="" required="required" pattern="" title="">
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="middleline">Currency Symbol</td>
                                                                    <td>
                                                                        <input type="text" name="" id="input" class="form-control input" placeholder="$" value="" required="required" pattern="" title="">
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="middleline">Show Information Tips</td>
                                                                    <td>
                                                                        <select name="" id="input" class="form-control select">
                                                                            <option value="">
                                                                                -- Yes --
                                                                            </option>
                                                                        </select>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="middleline">Allow Client Registration</td>
                                                                    <td>
                                                                        <select name="" id="input" class="form-control select">
                                                                            <option value="">
                                                                                -- Yes --
                                                                            </option>
                                                                        </select>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                                <div role="tabpanel" class="tab-pane container-fluid tabpane" id="Paypal">
                                                    <h1 class="settings">General Settings 4</h1>
                                                    <hr class="m-t-0">
                                                    <div class="table-responsive">
                                                        <table class="table">
                                                            <thead>
                                                                <tr>
                                                                    <th class="middleline">Item</th>
                                                                    <th>Value</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td class="middleline">Dashboard Title</td>
                                                                    <td>
                                                                        <input type="text" name="" id="input" class="form-control input" placeholder="Project Dashboard" value="" required="required" pattern="" title="">
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="middleline">Language</td>
                                                                    <td>
                                                                        <select name="" id="input" class="form-control select">
                                                                            <option value="">
                                                                                -- English --
                                                                            </option>
                                                                        </select>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="middleline">Theme</td>
                                                                    <td>
                                                                        <select name="" id="input" class="form-control select">
                                                                            <option value="">
                                                                                -- Default --
                                                                            </option>
                                                                        </select>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="middleline">Date Format</td>
                                                                    <td>
                                                                        <select name="" id="input" class="form-control select">
                                                                            <option value="">
                                                                                -- d-m-y --
                                                                            </option>
                                                                        </select>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="middleline">General Page Limits</td>
                                                                    <td>
                                                                        <input type="text" name="" id="input" class="form-control input" placeholder="25" value="" required="required" pattern="" title="">
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="middleline">Messages Page Limits</td>
                                                                    <td>
                                                                        <input type="text" name="" id="input" class="form-control input" placeholder="10" value="" required="required" pattern="" title="">
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="middleline">lang_timeline_diaplay_limits</td>
                                                                    <td>
                                                                        <input type="text" name="" id="input" class="form-control input" placeholder="100" value="" required="required" pattern="" title="">
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="middleline">Currency</td>
                                                                    <td>
                                                                        <input type="text" name="" id="input" class="form-control input" placeholder="USD" value="" required="required" pattern="" title="">
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="middleline">Currency Symbol</td>
                                                                    <td>
                                                                        <input type="text" name="" id="input" class="form-control input" placeholder="$" value="" required="required" pattern="" title="">
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="middleline">Show Information Tips</td>
                                                                    <td>
                                                                        <select name="" id="input" class="form-control select">
                                                                            <option value="">
                                                                                -- Yes --
                                                                            </option>
                                                                        </select>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="middleline">Allow Client Registration</td>
                                                                    <td>
                                                                        <select name="" id="input" class="form-control select">
                                                                            <option value="">
                                                                                -- Yes --
                                                                            </option>
                                                                        </select>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                                <div role="tabpanel" class="tab-pane container-fluid tabpane" id="Emailtemplates">
                                                    <h1 class="settings">General Settings 5</h1>
                                                    <hr class="m-t-0">
                                                    <div class="table-responsive">
                                                        <table class="table">
                                                            <thead>
                                                                <tr>
                                                                    <th class="middleline">Item</th>
                                                                    <th>Value</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td class="middleline">Dashboard Title</td>
                                                                    <td>
                                                                        <input type="text" name="" id="input" class="form-control input" placeholder="Project Dashboard" value="" required="required" pattern="" title="">
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="middleline">Language</td>
                                                                    <td>
                                                                        <select name="" id="input" class="form-control select">
                                                                            <option value="">
                                                                                -- English --
                                                                            </option>
                                                                        </select>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="middleline">Theme</td>
                                                                    <td>
                                                                        <select name="" id="input" class="form-control select">
                                                                            <option value="">
                                                                                -- Default --
                                                                            </option>
                                                                        </select>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="middleline">Date Format</td>
                                                                    <td>
                                                                        <select name="" id="input" class="form-control select">
                                                                            <option value="">
                                                                                -- d-m-y --
                                                                            </option>
                                                                        </select>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="middleline">General Page Limits</td>
                                                                    <td>
                                                                        <input type="text" name="" id="input" class="form-control input" placeholder="25" value="" required="required" pattern="" title="">
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="middleline">Messages Page Limits</td>
                                                                    <td>
                                                                        <input type="text" name="" id="input" class="form-control input" placeholder="10" value="" required="required" pattern="" title="">
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="middleline">lang_timeline_diaplay_limits</td>
                                                                    <td>
                                                                        <input type="text" name="" id="input" class="form-control input" placeholder="100" value="" required="required" pattern="" title="">
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="middleline">Currency</td>
                                                                    <td>
                                                                        <input type="text" name="" id="input" class="form-control input" placeholder="USD" value="" required="required" pattern="" title="">
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="middleline">Currency Symbol</td>
                                                                    <td>
                                                                        <input type="text" name="" id="input" class="form-control input" placeholder="$" value="" required="required" pattern="" title="">
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="middleline">Show Information Tips</td>
                                                                    <td>
                                                                        <select name="" id="input" class="form-control select">
                                                                            <option value="">
                                                                                -- Yes --
                                                                            </option>
                                                                        </select>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="middleline">Allow Client Registration</td>
                                                                    <td>
                                                                        <select name="" id="input" class="form-control select">
                                                                            <option value="">
                                                                                -- Yes --
                                                                            </option>
                                                                        </select>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                                <div role="tabpanel" class="tab-pane container-fluid tabpane" id="SupportTickets">
                                                    <h1 class="settings">General Settings 6</h1>
                                                    <hr class="m-t-0">
                                                    <div class="table-responsive">
                                                        <table class="table">
                                                            <thead>
                                                                <tr>
                                                                    <th class="middleline">Item</th>
                                                                    <th>Value</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td class="middleline">Dashboard Title</td>
                                                                    <td>
                                                                        <input type="text" name="" id="input" class="form-control input" placeholder="Project Dashboard" value="" required="required" pattern="" title="">
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="middleline">Language</td>
                                                                    <td>
                                                                        <select name="" id="input" class="form-control select">
                                                                            <option value="">
                                                                                -- English --
                                                                            </option>
                                                                        </select>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="middleline">Theme</td>
                                                                    <td>
                                                                        <select name="" id="input" class="form-control select">
                                                                            <option value="">
                                                                                -- Default --
                                                                            </option>
                                                                        </select>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="middleline">Date Format</td>
                                                                    <td>
                                                                        <select name="" id="input" class="form-control select">
                                                                            <option value="">
                                                                                -- d-m-y --
                                                                            </option>
                                                                        </select>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="middleline">General Page Limits</td>
                                                                    <td>
                                                                        <input type="text" name="" id="input" class="form-control input" placeholder="25" value="" required="required" pattern="" title="">
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="middleline">Messages Page Limits</td>
                                                                    <td>
                                                                        <input type="text" name="" id="input" class="form-control input" placeholder="10" value="" required="required" pattern="" title="">
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="middleline">lang_timeline_diaplay_limits</td>
                                                                    <td>
                                                                        <input type="text" name="" id="input" class="form-control input" placeholder="100" value="" required="required" pattern="" title="">
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="middleline">Currency</td>
                                                                    <td>
                                                                        <input type="text" name="" id="input" class="form-control input" placeholder="USD" value="" required="required" pattern="" title="">
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="middleline">Currency Symbol</td>
                                                                    <td>
                                                                        <input type="text" name="" id="input" class="form-control input" placeholder="$" value="" required="required" pattern="" title="">
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="middleline">Show Information Tips</td>
                                                                    <td>
                                                                        <select name="" id="input" class="form-control select">
                                                                            <option value="">
                                                                                -- Yes --
                                                                            </option>
                                                                        </select>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="middleline">Allow Client Registration</td>
                                                                    <td>
                                                                        <select name="" id="input" class="form-control select">
                                                                            <option value="">
                                                                                -- Yes --
                                                                            </option>
                                                                        </select>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                                <div role="tabpanel" class="tab-pane container-fluid tabpane" id="FormFields">
                                                    <h1 class="settings">General Settings 7</h1>
                                                    <hr class="m-t-0">
                                                    <div class="table-responsive">
                                                        <table class="table">
                                                            <thead>
                                                                <tr>
                                                                    <th class="middleline">Item</th>
                                                                    <th>Value</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td class="middleline">Dashboard Title</td>
                                                                    <td>
                                                                        <input type="text" name="" id="input" class="form-control input" placeholder="Project Dashboard" value="" required="required" pattern="" title="">
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="middleline">Language</td>
                                                                    <td>
                                                                        <select name="" id="input" class="form-control select">
                                                                            <option value="">
                                                                                -- English --
                                                                            </option>
                                                                        </select>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="middleline">Theme</td>
                                                                    <td>
                                                                        <select name="" id="input" class="form-control select">
                                                                            <option value="">
                                                                                -- Default --
                                                                            </option>
                                                                        </select>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="middleline">Date Format</td>
                                                                    <td>
                                                                        <select name="" id="input" class="form-control select">
                                                                            <option value="">
                                                                                -- d-m-y --
                                                                            </option>
                                                                        </select>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="middleline">General Page Limits</td>
                                                                    <td>
                                                                        <input type="text" name="" id="input" class="form-control input" placeholder="25" value="" required="required" pattern="" title="">
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="middleline">Messages Page Limits</td>
                                                                    <td>
                                                                        <input type="text" name="" id="input" class="form-control input" placeholder="10" value="" required="required" pattern="" title="">
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="middleline">lang_timeline_diaplay_limits</td>
                                                                    <td>
                                                                        <input type="text" name="" id="input" class="form-control input" placeholder="100" value="" required="required" pattern="" title="">
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="middleline">Currency</td>
                                                                    <td>
                                                                        <input type="text" name="" id="input" class="form-control input" placeholder="USD" value="" required="required" pattern="" title="">
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="middleline">Currency Symbol</td>
                                                                    <td>
                                                                        <input type="text" name="" id="input" class="form-control input" placeholder="$" value="" required="required" pattern="" title="">
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="middleline">Show Information Tips</td>
                                                                    <td>
                                                                        <select name="" id="input" class="form-control select">
                                                                            <option value="">
                                                                                -- Yes --
                                                                            </option>
                                                                        </select>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="middleline">Allow Client Registration</td>
                                                                    <td>
                                                                        <select name="" id="input" class="form-control select">
                                                                            <option value="">
                                                                                -- Yes --
                                                                            </option>
                                                                        </select>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                                <div role="tabpanel" class="tab-pane container-fluid tabpane" id="Cron">
                                                    <h1 class="settings">General Settings 8</h1>
                                                    <hr class="m-t-0">


                                                    <div class="table-responsive">
                                                        <table class="table">
                                                            <thead>
                                                                <tr>
                                                                    <th class="middleline">Item</th>
                                                                    <th>Value</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td class="middleline">Dashboard Title</td>
                                                                    <td>
                                                                        <input type="text" name="" id="input" class="form-control input" placeholder="Project Dashboard" value="" required="required" pattern="" title="">
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="middleline">Language</td>
                                                                    <td>
                                                                        <select name="" id="input" class="form-control select">
                                                                            <option value="">
                                                                                -- English --
                                                                            </option>
                                                                        </select>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="middleline">Theme</td>
                                                                    <td>
                                                                        <select name="" id="input" class="form-control select">
                                                                            <option value="">
                                                                                -- Default --
                                                                            </option>
                                                                        </select>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="middleline">Date Format</td>
                                                                    <td>
                                                                        <select name="" id="input" class="form-control select">
                                                                            <option value="">
                                                                                -- d-m-y --
                                                                            </option>
                                                                        </select>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="middleline">General Page Limits</td>
                                                                    <td>
                                                                        <input type="text" name="" id="input" class="form-control input" placeholder="25" value="" required="required" pattern="" title="">
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="middleline">Messages Page Limits</td>
                                                                    <td>
                                                                        <input type="text" name="" id="input" class="form-control input" placeholder="10" value="" required="required" pattern="" title="">
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="middleline">lang_timeline_diaplay_limits</td>
                                                                    <td>
                                                                        <input type="text" name="" id="input" class="form-control input" placeholder="100" value="" required="required" pattern="" title="">
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="middleline">Currency</td>
                                                                    <td>
                                                                        <input type="text" name="" id="input" class="form-control input" placeholder="USD" value="" required="required" pattern="" title="">
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="middleline">Currency Symbol</td>
                                                                    <td>
                                                                        <input type="text" name="" id="input" class="form-control input" placeholder="$" value="" required="required" pattern="" title="">
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="middleline">Show Information Tips</td>
                                                                    <td>
                                                                        <select name="" id="input" class="form-control select">
                                                                            <option value="">
                                                                                -- Yes --
                                                                            </option>
                                                                        </select>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="middleline">Allow Client Registration</td>
                                                                    <td>
                                                                        <select name="" id="input" class="form-control select">
                                                                            <option value="">
                                                                                -- Yes --
                                                                            </option>
                                                                        </select>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                                <div role="tabpanel" class="tab-pane container-fluid tabpane" id="DBBackup">
                                                    <h1 class="settings">General Settings 9</h1>
                                                    <hr class="m-t-0">
                                                    <div class="table-responsive">
                                                        <table class="table">
                                                            <thead>
                                                                <tr>
                                                                    <th class="middleline">Item</th>
                                                                    <th>Value</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td class="middleline">Dashboard Title</td>
                                                                    <td>
                                                                        <input type="text" name="" id="input" class="form-control input" placeholder="Project Dashboard" value="" required="required" pattern="" title="">
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="middleline">Language</td>
                                                                    <td>
                                                                        <select name="" id="input" class="form-control select">
                                                                            <option value="">
                                                                                -- English --
                                                                            </option>
                                                                        </select>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="middleline">Theme</td>
                                                                    <td>
                                                                        <select name="" id="input" class="form-control select">
                                                                            <option value="">
                                                                                -- Default --
                                                                            </option>
                                                                        </select>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="middleline">Date Format</td>
                                                                    <td>
                                                                        <select name="" id="input" class="form-control select">
                                                                            <option value="">
                                                                                -- d-m-y --
                                                                            </option>
                                                                        </select>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="middleline">General Page Limits</td>
                                                                    <td>
                                                                        <input type="text" name="" id="input" class="form-control input" placeholder="25" value="" required="required" pattern="" title="">
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="middleline">Messages Page Limits</td>
                                                                    <td>
                                                                        <input type="text" name="" id="input" class="form-control input" placeholder="10" value="" required="required" pattern="" title="">
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="middleline">lang_timeline_diaplay_limits</td>
                                                                    <td>
                                                                        <input type="text" name="" id="input" class="form-control input" placeholder="100" value="" required="required" pattern="" title="">
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="middleline">Currency</td>
                                                                    <td>
                                                                        <input type="text" name="" id="input" class="form-control input" placeholder="USD" value="" required="required" pattern="" title="">
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="middleline">Currency Symbol</td>
                                                                    <td>
                                                                        <input type="text" name="" id="input" class="form-control input" placeholder="$" value="" required="required" pattern="" title="">
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="middleline">Show Information Tips</td>
                                                                    <td>
                                                                        <select name="" id="input" class="form-control select">
                                                                            <option value="">
                                                                                -- Yes --
                                                                            </option>
                                                                        </select>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="middleline">Allow Client Registration</td>
                                                                    <td>
                                                                        <select name="" id="input" class="form-control select">
                                                                            <option value="">
                                                                                -- Yes --
                                                                            </option>
                                                                        </select>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                                <div role="tabpanel" class="tab-pane container-fluid tabpane" id="Updates">
                                                    <h1 class="settings">General Settings 10</h1>
                                                    <hr class="m-t-0">
                                                    <div class="table-responsive">
                                                        <table class="table">
                                                            <thead>
                                                                <tr>
                                                                    <th class="middleline">Item</th>
                                                                    <th>Value</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td class="middleline">Dashboard Title</td>
                                                                    <td>
                                                                        <input type="text" name="" id="input" class="form-control input" placeholder="Project Dashboard" value="" required="required" pattern="" title="">
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="middleline">Language</td>
                                                                    <td>
                                                                        <select name="" id="input" class="form-control select">
                                                                            <option value="">
                                                                                -- English --
                                                                            </option>
                                                                        </select>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="middleline">Theme</td>
                                                                    <td>
                                                                        <select name="" id="input" class="form-control select">
                                                                            <option value="">
                                                                                -- Default --
                                                                            </option>
                                                                        </select>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="middleline">Date Format</td>
                                                                    <td>
                                                                        <select name="" id="input" class="form-control select">
                                                                            <option value="">
                                                                                -- d-m-y --
                                                                            </option>
                                                                        </select>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="middleline">General Page Limits</td>
                                                                    <td>
                                                                        <input type="text" name="" id="input" class="form-control input" placeholder="25" value="" required="required" pattern="" title="">
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="middleline">Messages Page Limits</td>
                                                                    <td>
                                                                        <input type="text" name="" id="input" class="form-control input" placeholder="10" value="" required="required" pattern="" title="">
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="middleline">lang_timeline_diaplay_limits</td>
                                                                    <td>
                                                                        <input type="text" name="" id="input" class="form-control input" placeholder="100" value="" required="required" pattern="" title="">
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="middleline">Currency</td>
                                                                    <td>
                                                                        <input type="text" name="" id="input" class="form-control input" placeholder="USD" value="" required="required" pattern="" title="">
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="middleline">Currency Symbol</td>
                                                                    <td>
                                                                        <input type="text" name="" id="input" class="form-control input" placeholder="$" value="" required="required" pattern="" title="">
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="middleline">Show Information Tips</td>
                                                                    <td>
                                                                        <select name="" id="input" class="form-control select">
                                                                            <option value="">
                                                                                -- Yes --
                                                                            </option>
                                                                        </select>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="middleline">Allow Client Registration</td>
                                                                    <td>
                                                                        <select name="" id="input" class="form-control select">
                                                                            <option value="">
                                                                                -- Yes --
                                                                            </option>
                                                                        </select>
                                                                    </td>
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
        </div>
        <!-- SCRIPTS -->
        <script src="/switch/assets/js/jquery.min.js"></script>
        <script src="/switch/assets/js/bootstrap.min.js"></script>
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


