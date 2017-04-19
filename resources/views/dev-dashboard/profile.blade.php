@extends('layouts.dev_dashboard')

@section('content')

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
                        <a class="navbar-brand animated" href="/home">
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
                            <a href="/dashboard">
                                <i class="icon-chart"></i>
                                <p>Dashboard</p>
                            </a>
                        </li>
                        <li>
                            <a href="/project">
                                <i class="icon-layers"></i>
                                <p>Projects</p>
                            </a>
                        </li>
                        <li>
                            <a href="/payment">
                                <i class="icon-wallet"></i>
                                <p>Transaction</p>
                            </a>
                        </li>
                        <li class="active">
                            <a href="/profile/{{Auth::user()->id}}">
                                <i class="icon-user"></i>
                                <p>Your Profile</p>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="main-panel">
                <!--cck -->
                <div class="p-0">
                <div class="row">
                    <div class="col-xs-12 col-md-4 col-md-push-8">
                        <div class="card card-user">
                            <div class="image">
                                <img src="https://ununsplash.imgix.net/photo-1431578500526-4d9613015464?fit=crop&amp;fm=jpg&amp" alt="...">
                            </div>
                            <div class="p-15">
                                <div class="author">
                                     <a href="#">
                                    <img class="avatar border-gray" src="/switch/assets/img/face_one.jpeg" alt="...">
                                      <h4 class="title c-brand w-900">{{$users->firstname}} {{$users->lastname}}</h4>
                                    </a>
                                </div>
                                <p class="description text-center"> 
                                    {{old('about_me', $users->Userdetail->about_me)}}
                                </p>
                            </div>
                            <hr>
                            <div class="text-center p-b-5">
                                <button href="#" class="btn btn-simple"><i class="fa fa-facebook-square"></i></button>
                                <button href="#" class="btn btn-simple"><i class="fa fa-twitter"></i></button>
                                <button href="#" class="btn btn-simple"><i class="fa fa-google-plus-square"></i></button>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-md-8 col-md-pull-4">
                        <div class="card">
                            <div class="header">
                                <h3 class="title c-brand w-900">Edit Profile</h3>
                            </div>
                            <div class="content">
                                <form action="/update/{{$users->id}}" method="POST">
                                {{csrf_field()}}
                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <label>Dev ID</label>
                                                <input type="text" class="form-control" disabled="" placeholder="Company" value="{{$users->id}}">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>Username</label>
                                                <input type="text" class="form-control" placeholder="Username" name="username" value="{{ old('username', $users->Userdetail->username)}}">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Email address</label>
                                                <input type="email" class="form-control" name="email" placeholder="Email" value="{{ old('email', $users->email) }}">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>First Name</label>
                                                <input type="text" class="form-control" name="firstname" placeholder="Company" value="{{ old('firstname', $users->firstname) }}">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Last Name</label>
                                                <input type="text" class="form-control" name="lastname" placeholder="Last Name" value="{{old('lastname', $users->lastname)}}">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Address</label>
                                                <input type="text" class="form-control" name="address" placeholder="Home Address" value=" {{old('address', $users->UserDetail->address)}}">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>City</label>
                                                <input type="text" class="form-control" name="city" placeholder="City" value="{{old('city', $users->City->city)}}">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Country</label>
                                                <input type="text" class="form-control" name="country" placeholder="Country" value="{{old('country', $users->Country->country)}}">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Postal Code</label>
                                                <input type="number" class="form-control" name="postal_code" placeholder="ZIP Code" value="{{old('postal_code', $users->UserDetail->postal_code)}}">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>About Me</label>
                                                <textarea rows="5" class="form-control" name="about_me" placeholder="Here can be your description" value="Mike">{{old('about_me', $users->UserDetail->about_me)}}</textarea>
                                            </div>
                                        </div>
                                    </div>


                                    <button type="submit" class="btn btn-brand pull-right">Update Profile</button>
                                    <div class="clearfix"></div>

                                </form>
                            </div>
                        </div>

                        <div class="card">
                            <div class="content">
                                <form method="POST" action="/developer/socials/{{$users->id}}" enctype="multipart/form-data">
                                    {{csrf_field()}}
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Git Account</label>
                                                <input type="text" class="form-control" name="git_account" placeholder="City" value="{{old('git_account', $users->DeveloperSocial->git_account)}}">
                                            </div> 
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Skype ID</label>
                                                <input type="text" class="form-control" name="skype_id" placeholder="Country" value="{{old('skype_id', $users->DeveloperSocial->skype_id)}}">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>LinkedIn ID</label>
                                                <input type="text" class="form-control" name="linkedin_id" placeholder="Country" value="{{old('linkedin_id', $users->DeveloperSocial->linkedin_id)}}">
                                            </div>
                                        </div>
                                    </div>

                                    <h4><strong><label>Skills:</label></strong></h4>
                                        @foreach($languages as $language)    
                                    <a href="#"><span class="label label skill">{{$language}}</span></a>
                                    
                                        @endforeach

                                    <div class="row">
                                        <div class="col-md-4">
                                            <input type="text" class="form-control" placeholder="Company" value="Javascript">
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Availability:</label>
                                                <br/>
                                                    <input type="radio" name="available" id="ava1" value="Part-Time" checked="checked">
                                                        Part-Time
                                                    <br/>
                                                    <input type="radio" name="available" id="ava2" value="Full-Time">
                                                        Full-Time
                                                    <br/>
                                                    <input type="radio" name="available" id="ava3" value="Always Available">
                                                        Always Available
                                            </div> 
                                        </div>
                                    </div>
                                    
                                    <label>Attached Your CV</label>
                                     <input type="file" name="cv" value="{{old('cv', $users->DeveloperSocial->cv)}}" >  
                                    

                                    <button type="submit" class="btn btn-brand pull-right">Update Profile</button>
                                    <div class="clearfix"></div>
                                </form>
                            </div>
                        </div>

                        <div class="card">
                            <div class="content">
                                <form method="POST" action="/developer/account/{{$users->id}}">
                                {{csrf_field()}}
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Account Number</label>
                                                <input type="text" name="account" class="form-control" placeholder="City" value="{{old('account',$users->DeveloperAccount->account)}}">
                                            </div> 
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Bank Choice</label>
                                                <input type="text" name="bank" class="form-control" placeholder="Country" value="{{old('account',$users->DeveloperAccount->bank)}}">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>BVN Number</label>
                                                <input type="text" name="bvn" class="form-control" placeholder="Country" value="{{old('account',$users->DeveloperAccount->bvn)}}">
                                            </div>
                                        </div>
                                    </div>

                                   
                                    <button type="submit" class="btn btn-brand pull-right">Update Profile</button>
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
                //app.likesController();
                app.sidebarCtrl();
            });
        </script>
    </body>

</html>
@endsection