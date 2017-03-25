@extends('layouts.profile_form')
@section('content')

<div class="wrapper clearfix animsition">
          <header id="home" class="header stuck">
            <!--navbar begins here-->
            <nav class="navbar navbar-default" role="navigation" id="main-nav">
              <div class="container animated">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                  </button>
                  <a class="navbar-brand animated" href="index.html">
                    <img src="/switch/assets/img/logos/switch_3.svg" alt="Switch DEV" style="max-height: 40px" class="logo-default">
                  </a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse navbar-ex1-collapse">
                  <ul class="nav navbar-nav navbar-right main-nav-list">
                    <li class="animated"><a href="/login">Sign In</a></li>
                  </ul>
                </div><!-- /.navbar-collapse -->
              </div>
            </nav>
            <!--navbar ends here-->
          </header>
          <div class="p-t-50 text-center">
              <h2 lang="en" class="c-dark f-45 m-t-0 line-h-45">Companies' Form</h2>
          </div>
          <section class="form clearfix width-50p p-t-100 p-r-20 p-b-20 p-l-20">

                <!--switch form here -->
                <form class="switch-form" method="post" action="/profile/setup">
                    
                    {{csrf_field()}}
                    
                    <button id="submit-form" class="btn btn-dark" type="submit">
                        <span class="ladda-label">Submit</span>
                    </button>
                </form>
                <!--company form here -->
          </section>
            <br>
          <div class="footer width-100p m-auto p-r-30 p-l-30">
                <ul class="float-left">
                  <li><a href="#">Privacy<a></li>
                  <li><a href="#">Terms<a></li>
                  <li><a href="#">Security<a></li>
                  <li style="float: right;"><a href="#">&copy 2017 Switch Nigeria</a></li>
                </ul>
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


@endsection