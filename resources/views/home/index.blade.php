@extends('layouts.switch')

@section('content')
<div class="wrapper clearfix animsition">
			<!--HEADER/HOME SECTION-->

			<header id="home" class="header h-min-100vh h-t-48 bg-opacity-50 pos-rel">
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
								<img src="/switch/assets/img/logos/switch_2.svg" alt="Switch DEV" style="max-height: 40px" class="logo-default">
								<img src="/switch/assets/img/logos/switch_3.svg" alt="Switch DEV" style="max-height: 40px" class="logo-nav">
							</a>
						</div>

						<!-- Collect the nav links, forms, and other content for toggling -->
						<div class="collapse navbar-collapse navbar-ex1-collapse">
							<ul class="nav navbar-nav navbar-right main-nav-list">
								<li class="active animated"><a href="#home">Home</a></li>
								<li class="animated"><a href="#how it works">How it works</a></li>
								<li class="animated"><a href="#team">Talent</a></li>
								<li class="animated"><a href="#aboutus">About Us</a></li>
								<li class="animated"><a href="#testimonials">Testimonials</a></li>
								<li class="animated"><a href="#signup">Sign Up</a></li>
								<li onclick="document.location.href='/login';" class="animated"><a href="">Sign In</a></li>
							</ul>
						</div><!-- /.navbar-collapse -->
					</div>
				</nav>
				<!--navbar ends here-->
				<!-- section contain call to action buttons -->
				<div class="container">

					<!-- HEADING -->
					<h1 class="welcome text-center animated">Employ and getdev </h1>
					<h3 class="c-white welcome_msg animated">You need experts and talented professional developers to enhance the success of your business.</h3>
					<br>
					<br>
					<!-- CALL TO ACTION BUTTONS -->
					<div class="buttons animated">
						<a href="/register" class="btn m-10">Devloper</a>
						<a href="#signup" class="btn m-10">GET-Developer</a>
					</div>
					<br>

				</div>
				<!-- end section contain call to action buttons  -->
			</header>

			<!--FOCUS -->
			<section class="focus bg-white text-center" id="focus">
				<div class="container">

					<div class="sub-sections">

						<!-- SECTION TITLE -->
						<!--h2 class="c-dark f-45 m-t-0">How it Works</h2>

						<!-- SHORT DESCRIPTION ABOUT THE SECTION -->
						<!--p>
							Our job is to develop exceptional applications and products for your organisation. We take into consideration exactly what you request for and then produce as requested. Here, you'll find the best freelancers and if you are agood developer yourself, this is the perfect place for you.
						</p>
					</div>
					<!-- / END SECTION HEADER -->

					<!-- SECTION HEADER -->
					<!--div class="sub-sections">

						<!-- SECTION TITLE -->
						<!--h2 class="c-dark f-45 m-t-0">About Us</h2>

						<!-- SHORT DESCRIPTION ABOUT THE SECTION -->
						<!--h6>
				      We can be referred to as just one word "DEVELOPERS". Here we help you to get great developers and also if you are freelance developer, this is the best place for you. “Computer science education cannot make anybody an expert programmer any more than studying brushes and pigment can make somebody an expert painter.”
						</h6>
					</div>
					<!-- / END SECTION HEADER -->

					<!-- 4 FOCUS BOXES -->
					<div class="row">

						<!-- FIRST FOCUS BOXES -->
						<div class="col-lg-4 col-sm-4 ring red">
							<h5 class="red-border-bottom">Determination</h5> <!-- FOCUS HEADING -->
							<div class="service-icon">

								<img src="/switch/assets/img/det_icon.png">

								<i class="pixeden pd-icon-notes"></i> <!-- FOCUS ICON-->
							</div>

							<p>
								<!-- FOCUS DESCRIPTION -->
								"Tell us about what you need and your requests, and we’ll tell you about our capabilities. We are certain about making the perfect product for you."
							</p>
						</div>
						<!-- / END FIRST FOCUS BOX. Other boxes has same format -->

						<div class="col-lg-4 col-sm-4 ring green">
							<h5 class="green-border-bottom">Efficiency</h5>
							<div class="service-icon">

								<img src="/switch/assets/img/eff_icon.png">

								<span class="pixeden pd-icon-user"></span>
							</div>

							<p>
								"We are only concerned about developing the best for you. Efficient and legit products for your company which you'll not regret getting from us is what we will build for you. "
							</p>
						</div>

						<div class="col-lg-4 col-sm-4 ring blue">
							<h5 class="blue-border-bottom">Execution</h5>
							<div class="service-icon">

								<img src="/switch/assets/img/exe_icon.png">

								<i class="pixeden pd-icon-responsive"></i>
							</div>

							<p>
								" We make sure to execute in time. We don’t introduce you to freelancers and disappear. Once work begins, Switch dev ensures that we stay on time and within budget."
							</p>
						</div>

					</div>


					<!-- OTHER FOCUSES -->
					<div class="sub-sections">
						<h2 class="c-dark f-45 m-t-0">Things We do for fun</h2>
					</div>

					<!-- OTHER FOCUS LIST -->
					<div class="job-list">
						<ul class="list-style-none">
							<li><i class="icon-fontawesome-webfont-180"></i>WEB APPLICATIONS</li>
							<li><i class="icon-fontawesome-webfont-170"></i>SAAS PRODUCTS</li>
							<!--li><i class="icon-fontawesome-webfont-102"></i>IOS APPS</li-->
							<li><i class="icon-fontawesome-webfont-328"></i>ANDROID APPS</li>
							<li><i class="icon-fontawesome-webfont-75"></i>MVP DEVELOPMENT</li>
							<li><i class="icon-fontawesome-webfont-358"></i>PROJECT MANAGER</li>
							<li><i class="icon-fontawesome-webfont-195"></i>DESKTOP PROGRAMS</li>
							<li><i class="icon-fontawesome-webfont-172"></i>UX STRATEGY</li>
							<!--li><i class="icon-fontawesome-webfont-154"></i>SCRIPTING</li-->
							<li><i class="icon-fontawesome-webfont-185"></i>SIDE PROJECTS</li>
							<li><i class="icon-fontawesome-webfont-145"></i>C++ DEVELOPERS</li>
							<li><i class="icon-fontawesome-webfont-176"></i>DATA SCIENTISTS</li>
							<li><i class="icon-fontawesome-webfont-185"></i>DevOps ENGINEERS</li>
							<li><i class="icon-fontawesome-webfont-185"></i>JAVA DEVELOPERS</li>
							<li><i class="icon-fontawesome-webfont-185"></i>WORDPRESS DEVELOPERS </li>
							<li><i class="icon-fontawesome-webfont-185"></i>JAVASCRIPT DEVELOPERS</li>
							<li><i class="icon-fontawesome-webfont-185"></i>IOS DEVELOPERS</li>
							<li><i class="icon-fontawesome-webfont-185"></i>WEB PROJECTS</li>
							<li><i class="icon-fontawesome-webfont-185"></i>SOFTWARE ENGINEERS</li>
							<li><i class="icon-fontawesome-webfont-185"></i>MAGENTO DEVELOPERS</li>
							<li><i class="icon-fontawesome-webfont-185"></i>FULL STACK DEVELOPERS</li>
							<li><i class="icon-fontawesome-webfont-185"></i>RUBY ON RAILS DEVELOPERS</li>
							<li><i class="icon-fontawesome-webfont-185"></i>CONTENT STRATEGISTS</li>
						</ul>
					</div> <!-- / END OTHER FOCUS LIST -->
				</div> <!-- / END CONTAINER -->
			</section>
			<!-- END FOCUS SECTION -->

			<!--DIVIDER COMES NEXT -->
			<!--section class="divider text-center">
				<div class="container">
				    <div class="sub-sections m-b-40">
				      <h2 lang="en" class="f-45">Try Get Developers Today!</h2>
				      <h3 lang="en">Limited signup only. Order today before the discount period ends.</h3>
				    </div>
				    <div class="row">
				      <div class="col-md-12">
				      	<a href="" class="btn btn-transparent" lang="en">GET STARTED</a>
				        <p lang="en" class="m-t-10 f-15">Have a question? Give us a call <a href="tel:+2348051319795" class="c-white"> 2348051319795</a>.</p>
				      </div>
				    </div>
				</div>
			</section>
			<!--DIVIDER ENDS HERE-->


			<!--TEAM SECTION -->
			<!--section class="our-team bg-white text-center" id="team">
				<div class="container">
				    <div class="sub-sections m-b-40">
					    <h2 lang="en" class="c-dark f-45 m-t-0">Meet The Team</h2>
					    <h3 lang="en">Folks who created this awesome product</h3>
				    </div>
				    <div class="row">
				      	<div class="col-sm-3">
					        <div class="team-details">
					          <figure><img src="assets/img/team-1.jpg" alt="Team Member">
					            <figcaption>
					              <div>
					                <p lang="en" class="c-white">Lorem ipsum dolor sit amet, consectetur adipiscing elit rutrum eleifend arcu. Lorem ipsum dolor sit amet consectetur.</p>
					                <ul class="social list-style-none">
					                  <li><a href="https://twitter.com/" target="_blank"><i class="fa fa-twitter"></i></a></li>
					                  <li><a href="https://www.facebook.com/" target="_blank"><i class="fa fa-facebook"></i></a></li>
					                </ul>
					              </div>
					            </figcaption>
					          </figure>
					          <div class="team-info">
					            <h4 lang="en">John Doe</h4>
					            <h5 lang="en">UI/UX Designer</h5>
					          </div>
					        </div>
				      	</div>
				      	<div class="col-sm-3">
					        <div class="team-details">
					          <figure><img src="assets/img/team-1.jpg" alt="Team Member">
					            <figcaption>
					              <div>
					                <p lang="en" class="c-white">Lorem ipsum dolor sit amet, consectetur adipiscing elit rutrum eleifend arcu. Lorem ipsum dolor sit amet consectetur.</p>
					                <ul class="social list-style-none">
					                  <li><a href="https://twitter.com/" target="_blank"><i class="fa fa-twitter"></i></a></li>
					                  <li><a href="https://www.facebook.com/" target="_blank"><i class="fa fa-facebook"></i></a></li>
					                </ul>
					              </div>
					            </figcaption>
					          </figure>
					          <div class="team-info">
					            <h4 lang="en">John Doe</h4>
					            <h5 lang="en">UI/UX Designer</h5>
					          </div>
					        </div>
				      	</div>
					    <div class="col-sm-3">
					        <div class="team-details">
						        <figure><img src="assets/img/team-2.jpg" alt="Team Member">
						            <figcaption>
						              <div>
						                <p lang="en" class="c-white">Lorem ipsum dolor sit amet, consectetur adipiscing elit rutrum eleifend arcu. Lorem ipsum dolor sit amet consectetur.</p>



						                <ul class="social list-style-none">
						                  <li><a href="https://twitter.com/" target="_blank"><i class="fa fa-twitter"></i></a></li>
						                  <li><a href="https://www.facebook.com/" target="_blank"><i class="fa fa-facebook"></i></a></li>
						                </ul>



						              </div>
						            </figcaption>
						        </figure>
						        <div class="team-info">
						            <h4 lang="en">Jessica Doe</h4>
						            <h5 lang="en">Front-end Programmer</h5>
						        </div>
					        </div>
					     </div>
				      	<div class="col-sm-3">
					        <div class="team-details">
					          	<figure>
					          		<img src="assets/img/team-3.jpg" alt="Team Member">
						            <figcaption>
						              <div>
						                <p lang="en" class="c-white">Lorem ipsum dolor sit amet, consectetur adipiscing elit rutrum eleifend arcu. Lorem ipsum dolor sit amet consectetur.
						                </p>
						                <ul class="social list-style-none">
						                  <li><a href="https://twitter.com/" target="_blank"><i class="fa fa-twitter"></i></a></li>
						                  <li><a href="https://www.facebook.com/" target="_blank"><i class="fa fa-facebook"></i></a></li>
						                </ul>


						              </div>
						            </figcaption>
					          	</figure>
						        <div class="team-info">
						            <h4 lang="en">Tom Doe</h4>
						            <h5 lang="en">Business Relations</h5>
						        </div>
					        </div>
				      </div>
				    </div>
				  </div>
			</section>
			<!-- END OUR TEAM SECTION -->

			<!--ABOUT US -->
			<section class="about-us bg-dark text-center" id="aboutus">
				<div class="container">

					<!-- SECTION HEADER -->
					<div class="sub-sections m-b-40">

						<!-- SECTION TITLE -->
						<h2 class="f-45  m-t-0 white-text">About Us</h2>

						<!-- SHORT DESCRIPTION ABOUT THE SECTION -->
						<h3 class="white-text">
							We're defining the future of Web Development.
							<h4>
								<p>We can be referred to as just one word "DEVELOPERS". Here we help you to get great developers and also if you are freelance developer, this is the best place for you. “Computer science education cannot make anybody an expert programmer any more than studying brushes and pigment can make somebody an expert painter.”</p>
              </h4>
					 </h3>
					</div>
					<!-- / END SECTION HEADER -->
					<br><br>
					<!-- 3 COLUMNS OF ABOUT US-->
					<div class="row m-b-40">
						<h3>OUR MISSION&VISION</h3><br>
						<!-- COLUMN 1 - BIG MESSAGE ABOUT THE COMPANY-->
						<div class="col-lg-12 col-md-12 column m-b-40">
							<div class="big-intro">
								<p class="align-justify"> Our Mission is simple "To make the best out of various talented web developers in the World". To enhancing the business growth of our customers with creative Design and Development to deliver market-defining high-quality solutions that create value and consistent competitive advantage for our clients around the world. Our Vision is To become a prime performer, in providing quality Web, Print and Software solutions in the competitive global market place.</p>

							</div>
						</div>
						<!-- CLIENTS -->
						<div class="our-clients">
							<h3><span class="section-footer-title">HOW IT WORKS</span></h3>
						</div>


						<!-- COLUMN 1 - SKILSS-->
						<div class="col-lg-12 col-md-12 column">
							<div class="skills clearfix">

								<!-- SKILL ONE -->
								<div class="skill clearfix col-md-3">
									<div class="skill-count">
										<!--input type="text" value="97" data-thickness=".2" class="skill1"-->

										<img src="/switch/assets/img/find2.png">

									</div>
									<div class="coller">
										<h6 class="f-20"><strong> FIND </strong></h6>
										<p>
											Lorem Ipsum is simply dummy text of the printing and typesetting industry.
										</p>
									</div>


								</div>

								<!-- SKILL TWO -->
								<div class="skill clearfix col-md-3">
									<div class="skill-count">

										<img src="/switch/assets/img/hire2.png">

									</div>
									<h6 class="f-20"><strong>HIRE</strong></h6>
									<p>
										It is a long established fact that a reader will be distracted .....
									</p>
								</div>

								<!-- SKILL THREE -->
								<div class="skill clearfix col-md-3">
									<div class="skill-count">

										<img src="/switch/assets/img/work2.png">

									</div>
									<h6 class="f-20"><strong>WORK</strong></h6>
									<p>
										Contrary to popular belief,  is not simply random text.
									</p>
								</div>

								<!-- SKILL FOUR -->
								<div class="skill clearfix col-md-3">
									<div class="skill-count">

										<img src="/switch/assets/img/pay2.png">

									</div>
									<h6 class="f-20"><strong>PAY</strong></h6>
									<p>
										There are many variations of passages of  available,.,,
									</p>
								</div>

							</div>
						</div> <!-- / END SKILLS COLUMN-->
					</div> <!-- / END 3 COLUMNS OF ABOUT US-->

					<!-- CLIENTS -->
					<div class="our-clients">
						<h3><span class="section-footer-title">OUR PARTNERS</span></h3>
					</div>
					<!-- CLIENT LIST -->
					<div class="client-list">
						<ul class="clients_showcase_row is-wide">
							<li class="clients_showcase_row-title is-hpenterprises">
								<a href="https://www.switch.com.ng" target="_blank" rel="noopener noreferrer">
									<img alt="Switch Webworks" class="clients_showcase_row-logo" src="/switch/assets/img/logos/switch_2.svg">
								</a>
							</li>
							<li class="clients_showcase_row-title is-airbnb">
								<a href="#" target="_blank" rel="noopener noreferrer">
									<img alt="Airbnb trusted Toptal to help hire programmers to support their Berlin office." class="clients_showcase_row-logo" src="/switch/assets/img/logos/switch_2.svg">
								</a>
							</li>
							<li class="clients_showcase_row-title is-jpmorgan">
								<a href="#" target="_blank" rel="noopener noreferrer">
									<img alt="#" class="clients_showcase_row-logo" src="/switch/assets/img/logos/switch_2.svg">
								</a>
							</li>
							<li class="clients_showcase_row-title is-emirates">
								<a href="#" target="_blank" rel="noopener noreferrer">
									<img alt="#" class="clients_showcase_row-logo" src="/switch/assets/img/logos/switch_2.svg">
								</a>
							</li>
							<li class="clients_showcase_row-title is-zendesk">
								<a href="#" target="_blank" rel="noopener noreferrer">
									<img alt="#" src="/switch/assets/img/logos/switch_2.svg">
								</a>
							</li>
							<li class="clients_showcase_row-title is-pfizer">
								<a href="#" target="_blank" rel="noopener noreferrer">

									<img alt="#" class="clients_showcase_row-logo" src="/switch/assets/img/logos/switch_2.svg">
								</a>
							</li>
						</ul>
					</div> <!-- / END CLIENT LIST -->
				</div> <!-- / END CONTAINER -->

			</section>

			<!--TESTIMONIAL SECTION-->
			<section class="testimonial bg-white text-center" id="testimonials">
				<div class="container">
				    <div class="sub-sections m-b-40">
				      <h2 lang="en" class="c-dark f-45 m-t-0">Testimonials</h2>
				      <h3 lang="en">What our users are saying about Switch Get Developers</h3>
				    </div>
				    <div class="row">
				      	<div class="col-sm-4 reviewer">

					        <!--review 1-->

					        <figure class="text-center">

					        	<img src="/switch/assets/img/face_one.jpeg" alt="face_one" class="img-circle">
					        </figure>
					        <blockquote>
					          <p lang="en">" "</p>

					          <cite lang="en">— Troye Sivan, CEO Garlands Organisation</cite>
					        </blockquote>

					        <!--review 1 end-->

				      	</div>
				      	<div class="col-sm-4 reviewer">

					        <!--review 2-->

					        <figure class="text-center"><img src="switch/assets/img/face2.JPEG" alt="face2" class="img-circle">
					        </figure>
					        <blockquote>

					          <p lang="en">" ." </p>

					          <cite lang="en">— Felicia Love, CEO Webnet Organisation</cite> </blockquote>

					        <!--review 2 end-->

				      	</div>
				      	<div class="col-sm-4 reviewer">

					        <!--review 3-->

					        <figure class="text-center">
					        	<img src="switch/assets/img/f.jpg" alt="f" class="img-circle">
					        </figure>
					        <blockquote>

					          	<p lang="en">"ti."</p>

					          	<cite lang="en">— Michael Waters, CEO Grey and Co.</cite>
					        </blockquote>
					        <!--review 3 end-->
				      	</div>
				    </div>
				</div>
			</section>
			<!--END TESTIMONIAL SECTION -->

			<!--PURCHASE NOW-->
			<section class="tour text-center" id="devApp">
				<div class="container">
					<div class="row">
						<div class="col-md-8 center-block">
							<h3 class="white-text">
								Are you a professional freelancer looking for better jobs?

							</h3><br><br>
							<div class="text-center">
								<a href="#" class="btn btn-transparent">Apply with Github</a>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- / END PURCHASE NOW SECTION-->

			<!-- CONTACT US -->
			<section class="contact-us text-center c-white" id="signup">
				<div class="container">

					<!-- SECTION HEADER -->
				    <div class="sub-sections m-b-80">

						<!-- SECTION TITLE -->
						<h2 class="f-45 m-t-0">HIRE EXPERT FOR YOUR JOB</h2>

						<!-- SHORT DESCRIPTION ABOUT THE SECTION -->
						<h3 class="">

						</h3>
					</div>
					<!-- / END SECTION HEADER -->
					<br>
					<!-- CONTACT FORM-->
					<div class="row">

						<form role="form" action="/profile/companies" method="post" class="contact-form" data-validate="parsley">
								{{csrf_field()}}

							<div class="row">
								<div class="col-lg-4 col-sm-4 m-auto" style="float: none !important;">
									<div class="col-lg-12 col-sm-12">
										<input type="text" name="company" id="id_company" placeholder="Your Name" class="form-control input-box">
									</div>

									<div class="col-lg-12 col-sm-12">
										<input type="email" id="id_email" name="email" placeholder="Your Email" class="form-control input-box" data-required="true">
									</div>
									<div class="col-lg-12 col-sm-12">
										<br>
									</div>
									<div class="col-lg-12 col-sm-12">
										<button class="btn btn-primary btn-block custom-button-no-margin green-btn" type="submit" data-scrollreveal="enter left after 0s over 1s">Get Started Now</button>
									</div>
								</div>
							</div>
							<br><br>
						</form>
					</div>
					<!-- / END CONTACT FORM-->
				</div> <!-- / END CONTAINER -->
			</section>
			<!-- / END CONTACT US SECTION-->

			<!--FOOTER SECTION-->
			<footer class="bg-white text-center">
				<div class="container">
				    <div class="sub-sections m-b-40">
				      <h2 class="c-dark f-45 m-t-0">Contact Us</h2>
				      <h3>Have any questions? Get in touch</h3>
				    </div>
				</div>

				<!--map-->
				<div class="map">
				    <div id="map-canvas"></div>
				</div>
				<!--map end-->
				<div class="footer width-100p m-auto p-r-30 p-l-30">
						<ul class="list-style-none text-left">
								<li><a href="#">Privacy<a></li>
								<li><a href="#">Terms<a></li>
								<li><a href="#">Security<a></li>
								<li class="f-right"><a href="#">&copy 2017 Switch Nigeria</a></li>
						</ul>
				</div>

			</footer>
		</div>
		@endsection