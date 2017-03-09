@extends('layouts.form')
@section('content')
<body>
        <div class="wrapper clearfix animsition flex-container" style="background: #DFE5E9;">
            <div class="clearfix" style="width: 100%; height: 100%:">
              <div class="container clearfix" style="padding: 20px; width: 25%; margin: 0 auto; color: #222;">


                  <!--login box in here -->
                  <div class="login-box">
                    <!-- logo in here -->
                    <div class="logo">
                        <a href="index.html">
                           <img src="/switch/assets/img/logos/switch_2.svg" alt="Switch DEV" style="max-height: 100px">
                        </a>
                    </div>
                    <div><br><br></div>
                    <form action="/register" method="post" class="forms">
                          {{csrf_field()}}
                        <input type="text" placeholder="Full Name" class="input-field form-control form-control-bg user" />
                        <input type="email" placeholder="samson@yahoo.com" class="input-field form-control form-control-bg email" />
                        <input type="password" placeholder="Password" class="input-field form-control form-control-bg password" />
                        <input type="password" placeholder="Confirm Password" class="input-field form-control form-control-bg password" />
                        <button id="submit-form" class="btn btn-login btn-block ladda-button" data-style="expand-left"><span class="ladda-label">Sign Up</span></button>
                    </form>
                    <div class="login-links">
                        <a href="/login">Already have an account? <strong>Sign In</strong></a>
                    </div>
                    <hr class="opacity-50">
                    <!--social login here-->
                    <div class="social-login row">
                        <div class="fb-login col-lg-6 col-md-12 animated flipInX">
                            <a href="/social/login/github" class="btn btn-facebook btn-block"><strong>Github</strong></a>
                        </div>
                        <div class="twit-login col-lg-6 col-md-12 animated flipInX">
                            <a href="/social/login/twitter" class="btn btn-twitter btn-block"><strong>Twitter</strong></a>
                        </div>
                    </div>
                  </div>


              </div>

              <div class="footer pos-abs b-0 width-100p m-auto p-r-30 p-l-30">
                  <ul class="float-left">
                    <li><a href="#">Privacy<a></li>
                    <li><a href="#">Terms<a></li>
                    <li><a href="#">Security<a></li>
                    <li style="float: right;"><a href="#">&copy 2017 Switch Nigeria</a></li>
                  </ul>
              </div>
            </div>

        </div>

        <!-- SCRIPTS -->
            <script src="/switch/assets/js/jquery.min.js"></script>
            <script src="/switch/assets/js/bootstrap.min.js"></script>
            <script src="/switch/assets/js/jquery.vegas.min.js"></script>
            <script src="/switch/assets/js/animisition.min.js"></script>
            <script src="/switch/assets/js/main2.js"></script>
            <script>
                $(document).ready(function(){
                    app.pageTransition();
                    app.stylishInput();
                  //  app.vegasController();
                   // app.focusOnForm();
                });

            </script>
    </body>
@endsection
