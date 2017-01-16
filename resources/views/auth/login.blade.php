@extends('layouts.form')

@section('content')
<body class="login-page">
        <div class="wrapper clearfix animsition flex-container">
            <div class="login-box">
                <div class="logo">
                    <a href="index.html">
                       <img src="switch/assets/img/logos/switch 3.svg" alt="Switch DEV" style="max-height: 100px">
                    </a>
                </div>
                <br>
                <div class="card">
                    <div class="body">
                        <form id="sign_in" method="POST" class="forms">
                            <div class="msg">Sign in to start your session</div>
                            <br>
                            <span class="input input-switch">
                                <input class="input-field input-field-switch" type="text" name="username"/>
                                <label class="input-label input-label-switch input-label-switch-color-1" for="input-4">
                                    <span class="input-label-content input-label-content-switch">Username</span>
                                </label>
                            </span>
                            <span class="input input-switch">
                                <input class="input-field input-field-switch" type="password"/>
                                <label class="input-label input-label-switch input-label-switch-color-1" for="input-5">
                                    <span class="input-label-content input-label-content-switch">Password</span>
                                </label>
                            </span>
                            <div><br></div>
                            <div class="row">
                                <div class="col-xs-6">
                                    <input type="checkbox" name="rememberme" id="rememberme" class="#">
                                    <label for="rememberme">Remember Me</label>
                                </div>
                                <div class="col-xs-6">
                                    <button class="btn btn-block" type="submit">SIGN IN</button>
                                </div>
                            </div>
                        </form>
                        <br>
                        <hr>
                        <div class="social-login>">
                            <div class="row">
                                <div class="col-xs-6">
                                    <a href="#" class="btn btn-facebook btn-block">Facebook</a>
                                </div>
                                <div class="col-xs-6 align-right">
                                    <a href="#" class="btn btn-twitter btn-block">Twitter</a>
                                 </div>
                             </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-6">
                        <a href="signup.html">Register Now!</a>
                    </div>
                    <div class="col-xs-6 align-right">
                        <a href="forgot-password.html">Forgot Password?</a>
                    </div>
                </div>

            </div>
        </div>

        <!-- SCRIPTS -->
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
            <script src="switch/assets/js/bootstrap.min.js"></script>
            <script src="switch/assets/js/animisition.min.js"></script>
            <script src="switch/assets/js/main2.js"></script>
            <script>
                $(document).ready(function(){
                    app.pageTransition();
                    app.stylishInput();
                   // app.focusOnForm();
                });

            </script>
    </body>
@endsection