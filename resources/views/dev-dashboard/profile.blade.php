@extends('layouts.dev_dashboard')

@section('content')

    <body>
        <div class="wrapper clearfix animsition pos-rel">
         @include('dev-dashboard.navbar')
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
                                                <label>Company (disabled)</label>
                                                <input type="text" class="form-control" disabled="" placeholder="Company" value="Switch Nigeria.">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>Username</label>
                                                <input type="text" name="username" class="form-control" placeholder="Username" value="{{ old('username', $users->Userdetail->username)}}">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Email address</label>
                                                <input type="email" name="email" class="form-control" placeholder="Email" value="{{ old('email', $users->email) }}">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>First Name</label>
                                                <input type="text" name="firstname" class="form-control" placeholder="First Name" value="{{ old('firstname', $users->firstname) }}">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Last Name</label>
                                                <input type="text" name="lastname" class="form-control" placeholder="Last Name" value="{{old('lastname', $users->lastname)}}">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Address</label>
                                                <input type="text" name="address" class="form-control" placeholder="Home Address" value="{{old('address', $users->Userdetail->address)}}">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>City</label>
                                                <input type="text" name="city" class="form-control" placeholder="City" value="{{old('city', $users->City->city)}}">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Country</label>
                                                <input type="text" name="country" class="form-control" placeholder="Country" value="{{old('country', $users->Country->country)}}">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Postal Code</label>
                                                <input type="number" name="postal_code" class="form-control" placeholder="ZIP Code" value="{{old('postal_code', $users->Userdetail->postal_code)}}">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>About Me</label>
                                                <textarea rows="5" name="about_me" class="form-control" placeholder="Here can be your description" value="">{{old('about_me', $users->Userdetail->about_me)}}</textarea>
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
                <!-- jj -->
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
    </body>

</html>
@endsection