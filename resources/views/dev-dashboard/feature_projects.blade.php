<!DOCTYPE html>
<html>

    <head>
        <meta charset="UTF-8">
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <title>Devs Dashboard</title>
        <!-- STYLESHEETS-->
        <link rel="stylesheet" href="switch/assets/css/bootstrap.min.css">

        <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.4.1/css/simple-line-icons.css">
        <link rel="stylesheet" type="text/css" href="switch/assets/css/animsition.min.css">
        <link rel="stylesheet" type="text/css" href="switch/assets/css/animate.css">
        <!-- CUSTOM STYLES -->
        <link rel="stylesheet" href="switch/assets/css/main.css">
        <link rel="stylesheet" href="switch/assets/css/form2.css">
        <link rel="stylesheet" href="switch/assets/css/dashboard.css">
        <!-- WEBFONT -->
        <link href='https://fonts.googleapis.com/css?family=Lato:300,400,700,400italic|Montserrat:700,400|Homemade+Apple' rel='stylesheet' type='text/css'>
        <style>
            /*hide all animated initially.....*/
            h3{
              line-height: 30px;
            }
            .animated {
              visibility: hidden;
            }
            .card .more{
              display: none;
            }
            .btn-brand{
              border-bottom-left-radius: 0px;
              width: 150px;
              background: #FFCC29;
              color: #FFF;
              font-weight: 900;
            }
            .btn-brand:hover, .btn-brand:active, .btn-brand:visited, .btn-brand.active, .btn-brand:focus{
              color: #FFF;
            }

            .footer .likes,
            .footer .dislikes{
              cursor: pointer;
            }
        </style>

    </head>

    <body>
        <div class="wrapper clearfix animsition pos-rel">
          @include('layouts.dev_dashboard')
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
                                                    <p class="m-0"><strong>LOREM LAND</strong></p>
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
                                                                <input type="search" class="form-control" placeholder="What is it you are looking for? I can help"
                                                                style="background-color: rgba(243, 246, 248, 0.3);"/>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- add search bar input ends here -->
                                                @foreach($project as $projects)
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="card">
                                                            <div class="content clearfix">
                                                                <div class="dis-block clearfix p-t-15 p-b-15">
                                                                    <div class="col-md-3">
                                                                        <div class="thumbnail m-b-0 p-0 bd-4">
                                                                            <img src="switch/assets/img/face_one.jpeg" class="bd-4">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <h3 class="c-brand w-900">{{$projects->job_scope}}</h3>
                                                                        <p class="align-justify f-12"><strong>Switch</strong><span class="opacity-50"> Yaba, Lagos</span></p>
                                                                        <div class="less clearfix">
                                                                            <p class="align-justify f-12">Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                                                                               when an unknown printer took a galley of type and scrambled it to make a type
                                                                               specimen book.
                                                                             </p>
                                                                        </div>
                                                                        <div class="more clearfix">
                                                                            <h4><strong>Summary:</strong></h4>
                                                                            <p class="align-justify f-12">
                                                                                {{$projects->description}}
                                                                            </p>
                                                                            <h4><strong>Duration:</strong></h4>
                                                                            <p class="align-justify f-12">
                                                                                It is a long established fact that a reader will be distracted by the readable content
                                                                                of a page when looking at its layout.
                                                                            </p>
                                                                            <h4><strong>Availability:</strong></h4>
                                                                            <p class="align-justify f-12">
                                                                                Contrary to popular belief, Lorem Ipsum is not simply random text.
                                                                                It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.
                                                                            </p>
                                                                            <h4><strong>Brief Technical Overview:</strong></h4>
                                                                            <ul class="f-12">
                                                                                <li>What is Lorem Ipsum?</li>
                                                                                <li>Why do we use it?</li>
                                                                                <li>Where does it come from?</li>
                                                                                <li>Where can I get some?</li>
                                                                            </ul>
                                                                            <h4><strong>Submit A Proposal</strong></h4>
                                                                            <form method="POST" action="/proposal">
                                                                              {{csrf_field()}}
                                                                                <div class="form-group">
                                                                                    <label class="input-label" for="right_person">Describe why you are the right person for this job.</label>
                                                                                    <textarea placeholder="At least 100 words" class="form-control" name="reason" rows="10"></textarea>
                                                                                </div>
                                                                                <div class="form-group">
                                                                                    <label class="input-label" for="about_job">What question do you have about this job?</label>
                                                                                    <textarea placeholder="Common don't be shy." class="form-control" name="question"></textarea>
                                                                                </div>
                                                                                <div class="form-group">
                                                                                    <label class="input-label" for="contact_method">What's your preferred method of contact?</label>
                                                                                    <select class="form-control" name="messaging">
                                                                                      <option>Switch messaging</option>
                                                                                      <option value="Email">Email</option>
                                                                                      <option value="Skype">Skype</option>
                                                                                      <option value="Telephone">Telephone</option>
                                                                                    </select>
                                                                                </div>
                                                                                <button type="submit" class="btn btn-dark">Submit</button>
                                                                            </form>
                                                                            <br>
                                                                        </div>

                                                                         <p class="opacity-50 f-11">javascript, .net, php</p>
                                                                    </div>
                                                                    <div class="col-md-3">
                                                                        <h3 class="c-brand text-center w-900"><span class="m-r-5">&#8358;</span><span>6000</span></h3>
                                                                    </div>
                                                                </div>
                                                                <div class="footer">
                                                                    <hr>
                                                                    <div class="stats">
                                                                        <button class="btn btn-sm btn-brand">Interested</button>
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
                                                @endforeach
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="card">
                                                            <div class="content clearfix">
                                                                <div class="dis-block clearfix p-t-15 p-b-15">
                                                                    <div class="col-md-3">
                                                                        <div class="thumbnail m-b-0 p-0 bd-4">
                                                                            <img src="switch/assets/img/face_one.jpeg" class="bd-4">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <h3 class="c-brand w-900">Lorem Ipsum</h3>
                                                                        <p class="align-justify f-12"><strong>Switch</strong><span class="opacity-50"> Yaba, Lagos</span></p>
                                                                        <div class="less clearfix">
                                                                            <p class="align-justify f-12">Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                                                                               when an unknown printer took a galley of type and scrambled it to make a type
                                                                               specimen book.
                                                                             </p>
                                                                        </div>
                                                                        <div class="more clearfix">
                                                                            <h4><strong>Summary:</strong></h4>
                                                                            <p class="align-justify f-12">
                                                                                Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                                                                Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                                                                                when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                                                                                It has survived not only five centuries, but also the leap into electronic typesetting,
                                                                                remaining essentially unchanged.
                                                                            </p>
                                                                            <h4><strong>Duration:</strong></h4>
                                                                            <p class="align-justify f-12">
                                                                                It is a long established fact that a reader will be distracted by the readable content
                                                                                of a page when looking at its layout.
                                                                            </p>
                                                                            <h4><strong>Availability:</strong></h4>
                                                                            <p class="align-justify f-12">
                                                                                Contrary to popular belief, Lorem Ipsum is not simply random text.
                                                                                It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.
                                                                            </p>
                                                                            <h4><strong>Brief Technical Overview:</strong></h4>
                                                                            <ul class="f-12">
                                                                                <li>What is Lorem Ipsum?</li>
                                                                                <li>Why do we use it?</li>
                                                                                <li>Where does it come from?</li>
                                                                                <li>Where can I get some?</li>
                                                                            </ul>
                                                                            <h4><strong>Submit A Proposal</strong></h4>
                                                                            <form >
                                                                               
                                                                                <div class="form-group">
                                                                                    <label class="input-label" for="right_person">Describe why you are the right person for this job.</label>
                                                                                    <textarea placeholder="At least 100 words" class="form-control" name"right_person" rows="10"></textarea>
                                                                                </div>
                                                                                <div class="form-group">
                                                                                    <label class="input-label" for="about_job">What question do you have about this job?</label>
                                                                                    <textarea placeholder="Common don't be shy." class="form-control" name"about_job"></textarea>
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
                                                                        <h3 class="c-brand text-center w-900"><span class="m-r-5">&#8358;</span><span>6000</span></h3>
                                                                    </div>
                                                                </div>
                                                                <div class="footer">
                                                                    <hr>
                                                                    <div class="stats">
                                                                        <button class="btn btn-sm btn-brand">Interested</button>
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
                                                                            <img src="../assets/img/face_one.jpeg" class="bd-4">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <h3 class="c-brand w-900">Lorem Ipsum</h3>
                                                                        <p class="align-justify f-12"><strong>Switch</strong><span class="opacity-50"> Yaba, Lagos</span></p>
                                                                        <div class="less clearfix">
                                                                            <p class="align-justify f-12">Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                                                                               when an unknown printer took a galley of type and scrambled it to make a type
                                                                               specimen book.
                                                                             </p>
                                                                        </div>
                                                                        <div class="more clearfix">
                                                                            <h4><strong>Summary:</strong></h4>
                                                                            <p class="align-justify f-12">
                                                                                Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                                                                Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                                                                                when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                                                                                It has survived not only five centuries, but also the leap into electronic typesetting,
                                                                                remaining essentially unchanged.
                                                                            </p>
                                                                            <h4><strong>Duration:</strong></h4>
                                                                            <p class="align-justify f-12">
                                                                                It is a long established fact that a reader will be distracted by the readable content
                                                                                of a page when looking at its layout.
                                                                            </p>
                                                                            <h4><strong>Availability:</strong></h4>
                                                                            <p class="align-justify f-12">
                                                                                Contrary to popular belief, Lorem Ipsum is not simply random text.
                                                                                It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.
                                                                            </p>
                                                                            <h4><strong>Brief Technical Overview:</strong></h4>
                                                                            <ul class="f-12">
                                                                                <li>What is Lorem Ipsum?</li>
                                                                                <li>Why do we use it?</li>
                                                                                <li>Where does it come from?</li>
                                                                                <li>Where can I get some?</li>
                                                                            </ul>
                                                                            <h4><strong>Submit A Proposal</strong></h4>
                                                                            <form>
                                                                                <div class="form-group">
                                                                                    <label class="input-label" for="right_person">Describe why you are the right person for this job.</label>
                                                                                    <textarea placeholder="At least 100 words" class="form-control" name"right_person" rows="10"></textarea>
                                                                                </div>
                                                                                <div class="form-group">
                                                                                    <label class="input-label" for="about_job">What question do you have about this job?</label>
                                                                                    <textarea placeholder="Common don't be shy." class="form-control" name"about_job"></textarea>
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
                                                                        <h3 class="c-brand text-center w-900"><span class="m-r-5">&#8358;</span><span>6000</span></h3>
                                                                    </div>
                                                                </div>
                                                                <div class="footer">
                                                                    <hr>
                                                                    <div class="stats">
                                                                        <button class="btn btn-sm btn-brand">Interested</button>
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
            <script src="switch/assets/js/jquery.min.js"></script>
            <script src="switch/assets/js/bootstrap.min.js"></script>
            <script src="switch/assets/js/jquery.vegas.min.js"></script>
            <script src="switch/assets/js/animisition.min.js"></script>
            <script src="switch/assets/js/main2.js"></script>
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
