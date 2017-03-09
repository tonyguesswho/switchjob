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
                    <li class="animated"><a href="signIn.html">Sign In</a></li>
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
                <form class="switch-form">
                    <div class="groups first_group">
                        <fieldset name="first-fieldset[]" class="form-query required" data-type="MULTISELECT">
                            <legend class="question label" for="company_name">Company Name</legend>
                                <div class="form-el-group">
                                    <div class="form-el">
                                        <label class="input-label" for="company_name"></label>
                                        <input type="text" name="company_name"  id="name" class="form form-control" placeholder="John Doe">
                                    </div>
                                </div>
                                <div id="qstn-9640-error" class="error-text">Please select at least one option.</div>
                                <div id="qstn-9640-error-other" class="other-error-text">Please enter a value for Other.</div>
                        </fieldset>
                        <fieldset name="first-fieldset[]" class="form-query required" data-type="MULTISELECT">
                            <legend class="question label" for="company_email">Email address</legend>
                                <div class="form-el-group">
                                    <div class="form-el">
                                        <label class="input-label" for="company_email"></label>
                                        <input type="email" name="company_email"  id="email" class="form form-control" placeholder="someone@switch.ng">
                                    </div>
                                </div>
                                <div id="qstn-9640-error" class="error-text">Please select at least one option.</div>
                                <div id="qstn-9640-error-other" class="other-error-text">Please enter a value for Other.</div>
                        </fieldset>
                        <fieldset name="first-fieldset[]" class="form-query required" data-type="MULTISELECT">
                            <legend class="question label" for="company_phone">Phone Number</legend>
                                <div class="form-el-group">
                                    <div class="form-el">
                                        <label class="input-label" for="company_phone"></label>
                                        <input type="tel" name="company_phone"  id="phone" class="form form-control" placeholder="00000000000">
                                    </div>
                                </div>
                                <div id="qstn-9640-error" class="error-text">Please select at least one option.</div>
                                <div id="qstn-9640-error-other" class="other-error-text">Please enter a value for Other.</div>
                        </fieldset>
                        <fieldset name="first-fieldset[]" class="form-query required" data-type="MULTISELECT">
                            <legend class="question label" for="company_userame">Username</legend>
                            <div class="form-el-group">
                                <div class="form-el">
                                    <label class="input-label" for="company_username"></label>
                                    <input type="text" name="company_username"  id="name" class="form form-control" placeholder="John Doe">
                                </div>
                            </div>
                            <div id="qstn-9640-error" class="error-text">Please select at least one option.</div>
                            <div id="qstn-9640-error-other" class="other-error-text">Please enter a value for Other.</div>
                        </fieldset>
                        <fieldset name="first-fieldset[]" class="form-query required" data-type="MULTISELECT">
                            <legend class="question label" for="company_password">Password</legend>
                            <div class="form-el-group">
                                <div class="form-el">
                                    <label class="input-label" for="company_password"></label>
                                    <input type="password" name="company_password"  id="name" class="form form-control">
                                </div>
                            </div>
                            <div id="qstn-9640-error" class="error-text">Please select at least one option.</div>
                            <div id="qstn-9640-error-other" class="other-error-text">Please enter a value for Other.</div>
                        </fieldset>
                    </div>
                    <div class="groups second_group">
                        <fieldset name="first-fieldset[]" class="form-query required" data-type="MULTISELECT">
                            <legend class="question label" for="building">What are you building?</legend>
                            <div class="form-el-group">
                                <div class="form-el">
                                    <label class="input-label" for="building"></label>
                                    <textarea placeholder="please tell us your project description" class="form-control" name="building"></textarea>
                                </div>
                            </div>
                            <div id="qstn-9640-error" class="error-text">Please select at least one option.</div>
                            <div id="qstn-9640-error-other" class="other-error-text">Please enter a value for Other.</div>
                        </fieldset>
                        <fieldset name="first-fieldset[]" class="form-query required" data-type="MULTISELECT">
                          <legend class="question label" for="products">Is this a new Product?</legend>
                              <div class="form-el-group">
                                  <div class="form-el">
                                      <input type="radio" name="products" value="Desktop / web application" id="qstn-9640-0" class="check-box">
                                      <label class="input-label" for="products">New Product </label>
                                  </div>
                                  <div class="form-el">
                                      <input type="radio" name="products">
                                      <label class="input-label" for="products">Existing Product </label>
                                  </div>
                              </div>
                              <div id="qstn-9640-error" class="error-text">Please select at least one option.</div>
                              <div id="qstn-9640-error-other" class="other-error-text">Please enter a value for Other.</div>
                        </fieldset>
                        <fieldset name="first-fieldset[]" class="form-query required" data-type="MULTISELECT">
                          <legend class="question label" for="start_period">How soon do you want to start?</legend>
                              <div class="form-el-group">
                                  <div class="form-el">
                                      <input type="radio" name="start_period">
                                      <label class="input-label" for="start_period">Immediately </label>
                                  </div>
                                  <div class="form-el">
                                      <input type="radio" name="start_period">
                                      <label class="input-label" for="start_period">~ 1 Week </label>
                                  </div>
                                  <div class="form-el">
                                      <input type="radio" name="start_period">
                                      <label class="input-label" for="start_period">~ 1 Month </label>
                                  </div>
                                  <div class="form-el">
                                      <input type="radio" name="start_period">
                                      <label class="input-label" for="start_period">~ 3 Months </label>
                                  </div>
                                  <div class="form-el other-el">
                                      <input type="radio" name="start_period" value="OTHER-OPTION" data-required-input-id="qstn-other-input-9640" id="qstn-other-9640" class="check-box">
                                        <label class="input-label" for="qstn-other-9640"><span class="screen-reader-text">Other</span></label>
                                        <input type="text" name="qstn-other-input-964" id="qstn-other-input-9640" class="input-text-other" placeholder="Other" maxlength="100">
                                  </div>
                              </div>
                              <div id="qstn-9640-error" class="error-text">Please select at least one option.</div>
                              <div id="qstn-9640-error-other" class="other-error-text">Please enter a value for Other.</div>
                        </fieldset>
                    </div>
                    <div class="groups third_group">
                        <fieldset name="first-fieldset[]" class="form-query required" data-type="MULTISELECT">
                            <legend class="question label" for="cost">Are you comfortable spending $16000 on this project?</legend>
                            <div class="form-el-group">
                                <div class="form-el">
                                    <input type="radio" name="cost">
                                    <label class="input-label" for="cost">Yes </label>
                                </div>
                                <div class="form-el">
                                    <input type="radio" name="cost">
                                    <label class="input-label" for="cost">No </label>
                                </div>
                            </div>
                            <div id="qstn-9640-error" class="error-text">Please select at least one option.</div>
                            <div id="qstn-9640-error-other" class="other-error-text">Please enter a value for Other.</div>
                        </fieldset>
                        <fieldset name="first-fieldset[]" class="form-query required" data-type="MULTISELECT">
                            <legend class="question label" for="aboutus">How did you hear about us?</legend>
                            <div class="form-el-group">
                                <div class="form-el">
                                    <label class="input-label" for="aboutus"></label>
                                    <input type="text" name="aboutus" class="form form-control" placeholder="John Doe">
                                </div>
                            </div>
                            <div id="qstn-9640-error" class="error-text">Please select at least one option.</div>
                            <div id="qstn-9640-error-other" class="other-error-text">Please enter a value for Other.</div>
                        </fieldset>
                    </div>
                    <br><br>
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