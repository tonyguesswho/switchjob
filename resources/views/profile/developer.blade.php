@extends('layouts.profile_form')
@section('content')
<div class="wrapper clearfix animsition pos-rel">
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
                    <img src="/switch/assets/img/logos/switch_2.svg" alt="Switch DEV" style="max-height: 40px" class="logo-nav">
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
          <div class="p-t-140 text-center">
              <h2 lang="en" class="c-dark f-45 m-t-0 line-h-45">Developers' Form</h2>
          </div>
          <section class="form clearfix width-50p">

                <!--switch form here -->
                <form class="switch-form" action="/developers/{{$user->id}}" method="POST">
                    {{csrf_field()}}
                    <div class="groups first_group">
                        <fieldset name="first-fieldset[]" class="form-query required" data-type="MULTISELECT">
                            <legend class="question label" for="qstn-9640">Full Name</legend>
                                <div class="form-el-group">
                                    <div class="form-el">
                                        <label class="input-label" for="name"></label>
                                        <input type="text" value="{{$user->firstname}} {{$user->lastname}}" name="name" id="name" class="form form-control" placeholder="John Doe">
                                    </div>
                                </div>
                                <div id="qstn-9640-error" class="error-text">Please select at least one option.</div>
                                <div id="qstn-9640-error-other" class="other-error-text">Please enter a value for Other.</div>
                        </fieldset>
                        <fieldset name="first-fieldset[]" class="form-query required" data-type="MULTISELECT">
                            <legend class="question label" for="qstn-9640">Email address</legend>
                                <div class="form-el-group">
                                    <div class="form-el">
                                        <label class="input-label" for="email"></label>
                                        <input type="email" name="email" value="{{$user->email}}" id="email" class="form form-control" placeholder="someone@switch.ng">
                                    </div>
                                </div>
                                <div id="qstn-9640-error" class="error-text">Please select at least one option.</div>
                                <div id="qstn-9640-error-other" class="other-error-text">Please enter a value for Other.</div>
                        </fieldset>
                        <fieldset name="first-fieldset[]" class="form-query required" data-type="MULTISELECT">
                            <legend class="question label" for="qstn-9640">Phone Number</legend>
                                <div class="form-el-group">
                                    <div class="form-el">
                                        <label class="input-label" for="phone"></label>
                                        <input type="tel" name="phone"  id="phone" class="form form-control" placeholder="00000000000">
                                    </div>
                                </div>
                                <div id="qstn-9640-error" class="error-text">Please select at least one option.</div>
                                <div id="qstn-9640-error-other" class="other-error-text">Please enter a value for Other.</div>
                        </fieldset>
                        <fieldset name="first-fieldset[]" class="form-query required" data-type="MULTISELECT">
                            <legend class="question label" for="qstn-9640">Skill Level</legend>
                                <div class="form-el-group">

                                    <div class="form-el">
                                        <input type="radio" name="skill" value="beginner" class="check-box">
                                        <label class="input-label" for="skill">Beginner</label>
                                    </div>
                                    <div class="form-el">
                                        <input type="radio" name="skill" value="itermediate" class="check-box">
                                        <label class="input-label" for="skill">Intermediate</label>
                                    </div>
                                    <div class="form-el">
                                        <input type="radio" name="skill" value="expert" class="check-box">
                                        <label class="input-label" for="skill">Expert</label>
                                    </div>

                                </div>
                                <div id="qstn-9640-error" class="error-text">Please select at least one option.</div>
                                <div id="qstn-9640-error-other" class="other-error-text">Please enter a value for Other.</div>
                        </fieldset>
                        <fieldset name="first-fieldset[]" class="form-query required" data-type="MULTISELECT">
                            <legend class="question label" for="qstn-9640">How long have you been a professional freelancer?</legend>
                                <div class="form-el-group">

                                    <div class="form-el">
                                        <input type="radio" name="pro" value="0-1" class="check-box">
                                        <label class="input-label" for="pro">0-1 Year</label>
                                    </div>
                                    <div class="form-el">
                                        <input type="radio" name="pro" value="2-3" class="check-box">
                                        <label class="input-label" for="pro">2-3 Years</label>
                                    </div>
                                    <div class="form-el">
                                        <input type="radio" name="pro" value="4-5" class="check-box">
                                        <label class="input-label" for="pro">4-5 Years</label>
                                    </div>
                                    <div class="form-el other-el">
                                        <input type="radio" name="pro" data-required-input-id="qstn-other-input-9640" id="qstn-other-9640" class="check-box"><label class="input-label" for="qstn-other-9640"><span class="screen-reader-text">Other</span></label><input type="text" name="years_other" id="qstn-other-input-9640" class="input-text-other" placeholder="Other" maxlength="100">
                                    </div>
                                </div>
                                <div id="qstn-9640-error" class="error-text">Please select at least one option.</div>
                                <div id="qstn-9640-error-other" class="other-error-text">Please enter a value for Other.</div>
                        </fieldset>

                    </div>
                    <div class="groups second_group">
                        <fieldset name="first-fieldset[]" class="form-query required" data-type="MULTISELECT">
                            <legend class="question label" for="qstn-9640">What kind of language do you speak?</legend>
                            <div class="form-el-group">
                                <div class="form-el">
                                    <label class="input-label" for="qstn-9640-0"></label>
                                    <textarea placeholder="Javascript, PHP, Python" name="languages" class="form-control"></textarea>
                                </div>
                            </div>
                            <div id="qstn-9640-error" class="error-text">Please select at least one option.</div>
                            <div id="qstn-9640-error-other" class="other-error-text">Please enter a value for Other.</div>
                        </fieldset>
                        <fieldset name="first-fieldset[]" class="form-query required" data-type="MULTISELECT">
                            <legend class="question label" for="qstn-9640">What type of framework do you use?</legend>
                            <div class="form-el-group">
                                <div class="form-el">
                                    <label class="input-label" for="qstn-9640-0"></label>
                                    <textarea placeholder="Rails, Laravel, Django" name="frameworks" class="form-control"></textarea>
                                </div>
                            </div>
                            <div id="qstn-9640-error" class="error-text">Please select at least one option.</div>
                            <div id="qstn-9640-error-other" class="other-error-text">Please enter a value for Other.</div>
                        </fieldset>
                    </div>
                    <div class="groups third_group">
                        <fieldset name="first-fieldset[]" class="form-query required" data-type="MULTISELECT">
                        <legend class="question label" for="qstn-9640">What kind of jobs have you worked on in the past?</legend>
                        <div class="form-el-group">
                            <div class="form-el">
                                <label class="input-label" for="qstn-9640-0"></label>
                                <textarea name="pass_work" placeholder="Javascript, PHP, Python" class="form-control"></textarea>

                            </div>
                        </div>
                        <div id="qstn-9640-error" class="error-text">Please select at least one option.</div>
                        <div id="qstn-9640-error-other" class="other-error-text">Please enter a value for Other.</div>
                      </fieldset>
                        <fieldset name="first-fieldset[]" class="form-query required" data-type="MULTISELECT">
                          <legend class="question label" for="qstn-9640">How many hours can you devote to work per week?</legend>
                              <div class="form-el-group">
                                  <div class="form-el">
                                      <input type="radio" name="hours" value="2-3" id="qstn-9640-0" class="check-box">
                                      <label class="input-label" for="hours">2-3 hours </label>
                                  </div>
                                  <div class="form-el">
                                      <input type="radio" name="hours" value="4-7" id="qstn-9640-1" class="check-box">
                                      <label class="input-label" for="hours">4-7 hours </label>
                                  </div>
                                  <div class="form-el">
                                      <input type="radio" name="hours" value="8-10" id="qstn-9640-2" class="check-box">
                                      <label class="input-label" for="hours">8-10 hours </label>
                                  </div>
                                  <div class="form-el other-el">
                                      <input type="radio" name="hours" data-required-input-id="qstn-other-input-9640" id="qstn-other-9640" class="check-box"><label class="input-label" for="qstn-other-9640"><span class="screen-reader-text">Other</span></label><input type="text" name="hours_other" id="qstn-other-input-9640" class="input-text-other" placeholder="Other" maxlength="100">
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
                <!--switch form here -->

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