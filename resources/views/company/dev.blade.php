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
                        <a class="navbar-brand animated" href="/company/dashboard">
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
                            <a href="/company/payment">
                                <i class="icon-wallet"></i>
                                <p>Transaction</p>
                            </a>
                        </li>
                        <li class="active">
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
                                        <!--the header part of messages -->
                                        <div class="col-md-12">
                                            <div class="clearfix p-t-20 p-b-20 pos-rel" style="background: #FFCC29; border-top-left-radius : 0px; border-top-right-radius: 0px;">
                                                <h3 class="text-center c-white w-900">
                                                    <i class="fa fa-gear width-50 dis-flex pos-abs h-100p t-0 b-0 l-0"></i>
                                                    <p class="m-0"><strong>Developers Profile</strong></p>
                                                    <i class="fa fa-gear width-50 dis-flex pos-abs h-100p t-0 b-0 r-0"></i>
                                                </h3>
                                            </div>
                                        </div>
                                        <!--the list part of messages -->
                                        <div class="col-md-12">
                                            <div class="clearfix p-30">
                                                <!--add search bar input .. -->
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="card">
                                                            <div class="content clearfix">
                                                                <input type="search" class="form-control quick_search" placeholder="What is it you are looking for? I can help"
                                                                style="background-color: rgba(243, 246, 248, 0.3);"/>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- add search bar input ends here -->
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="card">
                                                            <div class="content clearfix">
                                                                <div class="dis-block clearfix p-t-15 p-b-15">
                                                                    <div class="col-md-3">
                                                                        <div class="thumbnail m-b-0 p-0 bd-4">
                                                                            <img src="/switch/assets/img/face_one.jpeg" class="bd-4">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <h3 class="c-brand w-900">Ryan Parman</h3>
                                                                        <p class="align-justify f-12"><strong>Surulere,</strong><span class="opacity-50"> Lagos</span></p>
                                                                        <div class="less clearfix">
                                                                            <p class="align-justify f-12">Ryan paramn is an end-to-end product developer (user experience, full-stack engineering) who takes a wide view of the whole system.
                                                                             </p>
                                                                        </div>
                                                                        <div class="more clearfix">
                                                                            <h4><strong>Bio:</strong></h4>
                                                                            <p class="align-justify f-12">
                                                                               Ryan Parman is an end-to-end product developer (user experience, full-stack engineering) who takes a wide view of the whole system.
                                                                            </p>
                                                                            
                                                                            <h4><strong>Skills Set:</strong></h4>
                                                                            
                                                                                <a href="#"><span class="label label skill">Javascript</span></a>
                                                                                <a href="#"><span class="label label skill">PHP</span></a>
                                                                                <a href="#"><span class="label label skill">SQL</span></a>
                                                                                <a href="#"><span class="label label skill">HTML</span></a>
                                                                                <a href="#"><span class="label label skill">Laravel</span></a>
                                                                                <a href="#"><span class="label label skill">Css</span></a>
                                                                                <p class="align-justify f-12">more...</p>
                                                                            
                                                                            <div>
                                                                                <div class="Expirence">
                                                                                    <h4><strong>Expirence:</strong></h4>
                                                                                    <ul class="f-12">
                                                                                        <li>Javascript, 6years</li>
                                                                                        <li>Html, 5years</li>
                                                                                        <li>SQL, 3years</li>
                                                                                        <li>PHP, 2years</li>
                                                                                        <li>Css,1year</li>
                                                                                    </ul>  
                                                                                </div>   
                                                                                <div class="Availability">
                                                                                    <h4><strong>Availability:</strong></h4>
                                                                                    <ul class="f-12">
                                                                                        <li>Full-time</li>
                                                                                        <li>Part-time</li>
                                                                                        <li>Weekly</li>
                                                                                    </ul>
                                                                                </div>
                                                                            </div>
                                                                            <div class="clearfix"></div>

                                                                            <h4><strong>Send Invite</strong></h4>
                                                                            <form>
                                                                                <div class="form-group">
                                                                                    <label class="input-label" for="right_person">Describe why you are the right person for this job.</label>
                                                                                    <textarea placeholder="At least 100 words" class="form-control" name"right_person" rows="10"></textarea>
                                                                                </div>
                                                                            
                                                                                <div class="form-group">
                                                                                    <label class="input-label" for="contact_method">What's your preferred method of contact?</label>
                                                                                    <select class="form-control" name="contact_method">
                                                                                      <option>Switch messaging</option>
                                                                                      <option>Email</option>
                                                                                      <option>Skype</option>
                                                                                      <option>Telephone</option>
                                                                                    </select>
                                                                                </div>
                                                                                <button type="submit" class="btn btn-dark">Submit</button>
                                                                            </form>
                                                                            <br>
                                                                        </div>

                                                                         <p class="opacity-50 f-11">javascript, .net, php</p>
                                                                    </div>
                                                                    <div class="col-md-3">
                                                                        <h3 class="c-brand text-center w-900"><span class="m-r-5">&#8358;</span><span>50 - 6000</span></h3>
                                                                    </div>
                                                                </div>
                                                                <div class="footer">
                                                                    <hr>
                                                                    <div class="stats">
                                                                        <button class="btn btn-sm btn-brand">Hire me</button>
                                                                    </div>
                                                                    <div class="stats f-right">
                                                                        <span class="m-r-10">
                                                                            <i class ="fa fa-thumbs-o-up m-r-3 likes"></i>
                                                                            <span class="figures">16</span>
                                                                        </span>
                                                                        <span class="m-r-10">
                                                                            <i class ="fa fa fa-thumbs-o-down m-r-3 dislikes"></i>
                                                                            <span class="figures">2</span>
                                                                        </span>
                                                                        <span class="m-r-10">
                                                                            <i class ="fa fa-eye m-r-3"></i>
                                                                            <span class="figures">20</span>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="card">
                                                            <div class="content clearfix">
                                                                <div class="dis-block clearfix p-t-15 p-b-15">
                                                                    <div class="col-md-3">
                                                                        <div class="thumbnail m-b-0 p-0 bd-4">
                                                                            <img src="/switch/assets/img/face_one.jpeg" class="bd-4">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <h3 class="c-brand w-900">Chad Wilborn</h3>
                                                                        <p class="align-justify f-12"><strong>Switch</strong><span class="opacity-50"> Yaba, Lagos</span></p>
                                                                        <div class="less clearfix">
                                                                            <p class="align-justify f-12">I am a modern magician, except I transform complicated technical ideas into user-friendly images before the eyes of your company's customers.
                                                                             </p>
                                                                        </div>
                                                                        <div class="more clearfix">
                                                                            <h4><strong>Bio:</strong></h4>
                                                                            <p class="align-justify f-12">
                                                                                I am a modern magician, except I transform complicated technical ideas into user-friendly images before the eyes of your company’s customers. I believe in telling relatable stories through graphics, so I’ve studied the basics of traditional advertising before working my magic on corporate marketing projects for companies along the West Coast.
                                                                            </p>
                                                                    
                                                                            <h4><strong>Skills Set:</strong></h4>
                                                                            <a href="#"><span class="label label skill">Javascript</span></a>
                                                                                <a href="#"><span class="label label skill">PHP</span></a>
                                                                                <a href="#"><span class="label label skill">SQL</span></a>
                                                                                <a href="#"><span class="label label skill">HTML</span></a>
                                                                                <a href="#"><span class="label label skill">Laravel</span></a>
                                                                                <a href="#"><span class="label label skill">Css</span></a>
                                                                                <p class="align-justify f-12">more...</p>
                                                                            
                                                                            <div>
                                                                                <div class="Expirence">
                                                                                    <h4><strong>Expirence:</strong></h4>
                                                                                    <ul class="f-12">
                                                                                        <li>Javascript, 6years</li>
                                                                                        <li>Html, 5years</li>
                                                                                        <li>SQL, 3years</li>
                                                                                        <li>PHP, 2years</li>
                                                                                        <li>Css,1year</li>
                                                                                    </ul>  
                                                                                </div>   
                                                                                <div class="Availability">
                                                                                    <h4><strong>Availability:</strong></h4>
                                                                                    <ul class="f-12">
                                                                                        <li>Full-time</li>
                                                                                        <li>Part-time</li>
                                                                                        <li>Weekly</li>
                                                                                    </ul>
                                                                                </div>
                                                                            </div>
                                                                            <div class="clearfix"></div>
                                                                            <h4><strong>Sand Invite</strong></h4>
                                                                            <form>
                                                                                <div class="form-group">
                                                                                    <label class="input-label" for="right_person">Describe why you are the right person for this job.</label>
                                                                                    <textarea placeholder="At least 100 words" class="form-control" name"right_person" rows="10"></textarea>
                                                                                </div>
                                                                                
                                                                                <div class="form-group">
                                                                                    <label class="input-label" for="contact_method">What's your preferred method of contact?</label>
                                                                                    <select class="form-control" name="contact_method">
                                                                                      <option>Switch messaging</option>
                                                                                      <option>Email</option>
                                                                                      <option>Skype</option>
                                                                                      <option>Telephone</option>
                                                                                    </select>
                                                                                </div>
                                                                                <button type="submit" class="btn btn-dark">Submit</button>
                                                                            </form>
                                                                            <br>
                                                                        </div>

                                                                         <p class="opacity-50 f-11">javascript, .net, php</p>
                                                                    </div>
                                                                    <div class="col-md-3">
                                                                        <h3 class="c-brand text-center w-900"><span class="m-r-5">&#8358;</span><span>50 - 6000</span></h3>
                                                                    </div>
                                                                </div>
                                                                <div class="footer">
                                                                    <hr>
                                                                    <div class="stats">
                                                                        <button class="btn btn-sm btn-brand">Hire me</button>
                                                                    </div>
                                                                    <div class="stats f-right">
                                                                        <span class="m-r-10">
                                                                            <i class ="fa fa-thumbs-o-up m-r-3 likes"></i>
                                                                            <span class="figures">16</span>
                                                                        </span>
                                                                        <span class="m-r-10">
                                                                            <i class ="fa fa fa-thumbs-o-down m-r-3 dislikes"></i>
                                                                            <span class="figures">2</span>
                                                                        </span>
                                                                        <span class="m-r-10">
                                                                            <i class ="fa fa-eye m-r-3"></i>
                                                                            <span class="figures">20</span>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="card">
                                                            <div class="content clearfix">
                                                                <div class="dis-block clearfix p-t-15 p-b-15">
                                                                    <div class="col-md-3">
                                                                        <div class="thumbnail m-b-0 p-0 bd-4">
                                                                            <img src="/switch/assets/img/face_one.jpeg" class="bd-4">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <h3 class="c-brand w-900">Kaysie</h3>
                                                                        <p class="align-justify f-12"><strong>Switch</strong><span class="opacity-50"> Yaba, Lagos</span></p>
                                                                        <div class="less clearfix">
                                                                            <p class="align-justify f-12">A Field Sales Manager with over 8 years of experience driving market share growth in designated territories,
                                                                             </p>
                                                                        </div>
                                                                        <div class="more clearfix">
                                                                            <h4><strong>Bio:</strong></h4>
                                                                            <p class="align-justify f-12">
                                                                                A Field Sales Manager with over 8 years of experience driving market share growth in designated territories, I have mastered the ins and outs of pharmaceutical sales and territorial prospecting.
                                                                            </p>
                                                                            
                                                                            <h4><strong>Skills Set:</strong></h4>
                                                                            <a href="#"><span class="label label skill">Javascript</span></a>
                                                                                <a href="#"><span class="label label skill">PHP</span></a>
                                                                                <a href="#"><span class="label label skill">SQL</span></a>
                                                                                <a href="#"><span class="label label skill">HTML</span></a>
                                                                                <a href="#"><span class="label label skill">Laravel</span></a>
                                                                                <a href="#"><span class="label label skill">Css</span></a>
                                                                                <p class="align-justify f-12">more...</p>
                                                                            
                                                                            <div>
                                                                                <div class="Expirence">
                                                                                    <h4><strong>Expirence:</strong></h4>
                                                                                    <ul class="f-12">
                                                                                        <li>Javascript, 6years</li>
                                                                                        <li>Html, 5years</li>
                                                                                        <li>SQL, 3years</li>
                                                                                        <li>PHP, 2years</li>
                                                                                        <li>Css,1year</li>
                                                                                    </ul>  
                                                                                </div>   
                                                                                <div class="Availability">
                                                                                    <h4><strong>Availability:</strong></h4>
                                                                                    <ul class="f-12">
                                                                                        <li>Full-time</li>
                                                                                        <li>Part-time</li>
                                                                                        <li>Weekly</li>
                                                                                    </ul>
                                                                                </div>
                                                                            </div>
                                                                            <div class="clearfix"></div>
                                                                            <h4><strong>Send Invite</strong></h4>
                                                                            <form>
                                                                                <div class="form-group">
                                                                                    <label class="input-label" for="right_person">Describe why you are the right person for this job.</label>
                                                                                    <textarea placeholder="At least 100 words" class="form-control" name"right_person" rows="10"></textarea>
                                                                                </div>
                                                                                
                                                                                <div class="form-group">
                                                                                    <label class="input-label" for="contact_method">What's your preferred method of contact?</label>
                                                                                    <select class="form-control" name="contact_method">
                                                                                      <option>Switch messaging</option>
                                                                                      <option>Email</option>
                                                                                      <option>Skype</option>
                                                                                      <option>Telephone</option>
                                                                                    </select>
                                                                                </div>
                                                                                <button type="submit" class="btn btn-dark">Submit</button>
                                                                            </form>
                                                                            <br>
                                                                        </div>

                                                                         <p class="opacity-50 f-11">javascript, .net, php</p>
                                                                    </div>
                                                                    <div class="col-md-3">
                                                                        <h3 class="c-brand text-center w-900"><span class="m-r-5">&#8358;</span><span>50 - 6000</span></h3>
                                                                    </div>
                                                                </div>
                                                                <div class="footer">
                                                                    <hr>
                                                                    <div class="stats">
                                                                        <button class="btn btn-sm btn-brand">Hire me</button>
                                                                    </div>
                                                                    <div class="stats f-right">
                                                                        <span class="m-r-10">
                                                                            <i class ="fa fa-thumbs-o-up m-r-3 likes"></i>
                                                                            <span class="figures">16</span>
                                                                        </span>
                                                                        <span class="m-r-10">
                                                                            <i class ="fa fa fa-thumbs-o-down m-r-3 dislikes"></i>
                                                                            <span class="figures">2</span>
                                                                        </span>
                                                                        <span class="m-r-10">
                                                                            <i class ="fa fa-eye m-r-3"></i>
                                                                            <span class="figures">20</span>
                                                                        </span>
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
              </div>
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
                    app.toggleCollapse();
                    app.likesController();
                    app.sidebarCtrl();
                });
            </script>
    @endsection


