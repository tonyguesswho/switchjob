@extends('layouts.form')
@section('content')
<body>
        <div class="wrapper clearfix animsition flex-container" style="background: #DFE5E9;">
            <div class="clearfix" style="width: 100%; height: 100%;">
              <div class="container clearfix" style="padding: 20px; width: 30%; margin: 0 auto; color: #222;">
                  <!-- logo in here -->
                  <div class="logo">
                      <a href="index.html">
                         <img src="switch/assets/img/logos/switch_3.svg" alt="Switch DEV" style="max-height: 100px">
                      </a>
                  </div>

                  <div><br><br><br></div>
                  <!--login box in here -->
                  <div class="login-box">
                    <form action="/login" method="post" class="forms">
                    {{ csrf_field() }}
                        <input type="text" name="email" placeholder="Email" class="input-field form-control user" />

                        <input type="password" name="password" placeholder="Password" class="input-field form-control password" />
                        <div class="row">
                            <label for="rememberme" class="col-xs-6">Remember Me</label>
                            <!-- Rounded switch -->
                            <span class="col-xs-6 text-right">
                              <label class="switch">
                                <input type="checkbox" name="remember">
                                <div class="slider round"></div>
                              </label>
                            </span>
                        </div>
                        <button id="submit-form" class="btn btn-login btn-block ladda-button" data-style="expand-left"><span class="ladda-label">login</span></button>
                    </form>
                    <hr style="color: #fff; opacity: 0.1">
                    <div class="login-links">
                        <a href="/forgot">Forgot password?</a>
                        <br>
                        <a href="/register">Don't have an account? <strong>Sign Up</strong></a>
                    </div>
                  </div>
                  <hr style="color: #fff; opacity: 0.5">
                  <!--social login here-->
                 {{--  <div class="social-login row">
                      <div class="fb-login col-lg-6 col-md-12 animated flipInX">
                          <a href="#" class="btn btn-facebook btn-block"><strong>Facebook</strong></a>
                      </div>
                      <div class="twit-login col-lg-6 col-md-12 animated flipInX">
                          <a href="#" class="btn btn-twitter btn-block"><strong>Twitter</strong></a>
                      </div>
                  </div> --}}
                  <div class="social-login row">
                      <div class="fb-login col-lg-6 col-md-12 animated flipInX">
                          <a href="/social/login/github" class="btn btn-github btn-block"><strong>Github</strong></a>
                      </div>
                      <div class="twit-login col-lg-6 col-md-12 animated flipInX">
                          <a href="/social/login/twitter" class="btn btn-twitter btn-block"><strong>Twitter</strong></a>
                      </div>
                  </div>
              </div>
              <br>
              <div class="footer">
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
            <script src="switch/assets/js/jquery.min.js"></script>
            <script src="switch/assets/js/bootstrap.min.js"></script>
            <script src="switch/assets/js/jquery.vegas.min.js"></script>
            <script src="switch/assets/js/animisition.min.js"></script>
            <script src="switch/assets/js/main2.js"></script>
            <script>
                $(document).ready(function(){
                    app.pageTransition();
                    app.stylishInput();
                  //  app.vegasController();
                   // app.focusOnForm();
                });

            </script>
    </body>

</html>
@endsection