@extends('layouts.switch')

@section('content')
<div class="wrapper clearfix animsition">
			<!--HEADER/HOME SECTION-->

			<header id="home" class="header">
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
								<img src="switch/assets/img/logos/switch_2.svg" alt="Switch DEV" style="max-height: 40px" class="logo-default">
								<img src="switch/assets/img/logos/switch_3.svg" alt="Switch DEV" style="max-height: 40px" class="logo-nav">
							</a>
						</div>

						<!-- Collect the nav links, forms, and other content for toggling -->
						<div class="collapse navbar-collapse navbar-ex1-collapse">
							<ul class="nav navbar-nav navbar-right main-nav-list">
								<li class="active animated"><a href="#home">Home</a></li>
								<li class="animated"><a href="#focus">How it works</a></li>
								<li class="animated"><a href="#team">Talent</a></li>
								<li class="animated"><a href="#aboutus">About Us</a></li>
								<li class="animated"><a href="#testimonials">Testimonials</a></li>
								<li class="animated"><a href="#signup">Sign Up</a></li>
								<li class="animated" onclick="document.location.href='/login';"><a href="">Sign In</a></li>
							</ul>
						</div><!-- /.navbar-collapse -->
					</div>
				</nav>
				<!--navbar ends here-->
				<!-- section contain call to action buttons -->
				<div class="container">

					<!-- HEADING -->
					<h1 class="welcome text-center animated">What is Lorem Ipsum?</h1>
					<h3 class="c-white">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</h3>
					<br>
					<br>
					<!-- CALL TO ACTION BUTTONS -->
					<div class="buttons animated">
						<a href="#signup" class="btn m-10 animated">Button 1</a>
						<a href="#testimonials" class="btn m-10">Button2</a>
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
						<h2 class="c-dark f-45 m-t-0">Why do we use it?</h2>

						<!-- SHORT DESCRIPTION ABOUT THE SECTION -->
						<p>
							It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.
						</p>
					</div>
					<!-- / END SECTION HEADER -->

					<!-- SECTION HEADER -->
					<div class="sub-sections">

						<!-- SECTION TITLE -->
						<h2 class="c-dark f-45 m-t-0">Where does it come from?</h2>

						<!-- SHORT DESCRIPTION ABOUT THE SECTION -->
						<h6>
							Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.
						</h6>
					</div>
					<!-- / END SECTION HEADER -->

					<!-- 4 FOCUS BOXES -->
					<div class="row">

						<!-- FIRST FOCUS BOXES -->
						<div class="col-lg-4 col-sm-4 ring red">
							<h5 class="red-border-bottom">Paragragh</h5> <!-- FOCUS HEADING -->
							<div class="service-icon">
								<i class="pixeden pd-icon-notes"></i> <!-- FOCUS ICON-->
							</div>

							<p>
								<!-- FOCUS DESCRIPTION -->
								"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua."
							</p>
						</div>
						<!-- / END FIRST FOCUS BOX. Other boxes has same format -->

						<div class="col-lg-4 col-sm-4 ring green">
							<h5 class="green-border-bottom">Indentation</h5>
							<div class="service-icon">
								<span class="pixeden pd-icon-user"></span>
							</div>

							<p>
								"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua."
							</p>
						</div>

						<div class="col-lg-4 col-sm-4 ring blue">
							<h5 class="blue-border-bottom">Margin</h5>
							<div class="service-icon">
								<i class="pixeden pd-icon-responsive"></i>
							</div>

							<p>
								"Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo
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
							<li><i class="icon-fontawesome-webfont-8"></i>WEB APPLICATIONS</li>
							<li><i class="icon-fontawesome-webfont-170"></i>SAAS PRODUCTS</li>
							<li><i class="icon-fontawesome-webfont-102"></i>IOS APPS</li>
							<li><i class="icon-fontawesome-webfont-328"></i>ANDROID APPS</li>
							<li><i class="icon-fontawesome-webfont-75"></i>MVP DEVELOPMENT</li>
							<li><i class="icon-fontawesome-webfont-358"></i>PROJECT MANAGEMENT</li>
							<li><i class="icon-fontawesome-webfont-195"></i>DESKTOP PROGRAMS</li>
							<li><i class="icon-fontawesome-webfont-172"></i>UX STRATEGY</li>
							<li><i class="icon-fontawesome-webfont-154"></i>SCRIPTING</li>
							<li><i class="icon-fontawesome-webfont-185"></i>SIDE PROJECTS</li>
						</ul>
					</div> <!-- / END OTHER FOCUS LIST -->
				</div> <!-- / END CONTAINER -->
			</section>
			<!-- END FOCUS SECTION -->

			<!--DIVIDER COMES NEXT -->
			<section class="divider text-center">
				<div class="container">
				    <div class="sub-sections m-b-40">
				      <h2 lang="en" class="f-45">Try Lorem IPSUP Today!</h2>
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
			<section class="our-team bg-white text-center" id="team">
				<div class="container">
				    <div class="sub-sections m-b-40">
					    <h2 lang="en" class="c-dark f-45 m-t-0">Meet The Team</h2>
					    <h3 lang="en">Folks who created this awesome product</h3>
				    </div>
				    <div class="row">
				      	<div class="col-sm-3">
					        <div class="team-details">
					          <figure><img src="switch/assets/img/team-1.jpg" alt="Team Member">
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
					          <figure><img src="switch/assets/img/team-1.jpg" alt="Team Member">
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
						        <figure><img src="switch/assets/img/team-2.jpg" alt="Team Member">
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
					          		<img src="switch/assets/img/team-3.jpg" alt="Team Member">
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
						<h2 class="f-45  m-t-0 white-text">About US</h2>

						<!-- SHORT DESCRIPTION ABOUT THE SECTION -->
						<h3 class="white-text">
							We're defining the future of Lorem Ipsum.
						</h3>
					</div>
					<!-- / END SECTION HEADER -->
					<br><br>
					<!-- 3 COLUMNS OF ABOUT US-->
					<div class="row m-b-40">
						<h3>OUR MISSON/VISION</h3><br>
						<!-- COLUMN 1 - BIG MESSAGE ABOUT THE COMPANY-->
						<div class="col-lg-12 col-md-12 column m-b-40">
							<div class="big-intro">
								<p class="align-justify">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>

							</div>
						</div>
						<!-- CLIENTS -->
						<div class="our-clients">
							<h3><span class="section-footer-title">OUR TRACK RECORDS</span></h3>
						</div>


						<!-- COLUMN 1 - SKILSS-->
						<div class="col-lg-12 col-md-12 column">
							<div class="skills clearfix">

								<!-- SKILL ONE -->
								<div class="skill clearfix col-md-3">
									<div class="skill-count">
										<input type="text" value="97" data-thickness=".2" class="skill1">
									</div>
									<div class="coller">
										<h6 class="f-20"><strong>What is Lorem Ipsum?</strong></h6>
										<p>
											Lorem Ipsum is simply dummy text of the printing and typesetting industry.
										</p>
									</div>


								</div>

								<!-- SKILL TWO -->
								<div class="skill clearfix col-md-3">
									<div class="skill-count">
										<input type="text" value="90" data-thickness=".2" class="skill2">
									</div>
									<h6 class="f-20"><strong>Why do we use it?</strong></h6>
									<p>
										It is a long established fact that a reader will be distracted .....
									</p>
								</div>

								<!-- SKILL THREE -->
								<div class="skill clearfix col-md-3">
									<div class="skill-count">
										<input type="text" value="95" data-thickness=".2" class="skill3">
									</div>
									<h6 class="f-20"><strong>Where does it come from?</strong></h6>
									<p>
										Contrary to popular belief, Lorem Ipsum is not simply random text.
									</p>
								</div>

								<!-- SKILL FOUR -->
								<div class="skill clearfix col-md-3">
									<div class="skill-count">
										<input type="text" value="99" data-thickness=".2" class="skill4">
									</div>
									<h6 class="f-20"><strong>Where can I get some?</strong></h6>
									<p>
										There are many variations of passages of Lorem Ipsum available,.,,
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
									<img alt="Switch Webworks" class="clients_showcase_row-logo" src="switch/assets/img/logos/switch 2.svg">
								</a>
							</li>
							<li class="clients_showcase_row-title is-airbnb">
								<a href="#" target="_blank" rel="noopener noreferrer">
									<img alt="Airbnb trusted Toptal to help hire programmers to support their Berlin office." class="clients_showcase_row-logo" src="switch/assets/img/logos/switch 2.svg">
								</a>
							</li>
							<li class="clients_showcase_row-title is-jpmorgan">
								<a href="#" target="_blank" rel="noopener noreferrer">
									<img alt="#" class="clients_showcase_row-logo" src="switch/assets/img/logos/switch 2.svg">
								</a>
							</li>
							<li class="clients_showcase_row-title is-emirates">
								<a href="#" target="_blank" rel="noopener noreferrer">
									<img alt="#" class="clients_showcase_row-logo" src="switch/assets/img/logos/switch 2.svg">
								</a>
							</li>
							<li class="clients_showcase_row-title is-zendesk">
								<a href="#" target="_blank" rel="noopener noreferrer">
									<img alt="#" src="switch/assets/img/logos/switch 2.svg">
								</a>
							</li>
							<li class="clients_showcase_row-title is-pfizer">
								<a href="#" target="_blank" rel="noopener noreferrer">
									<img alt="#" class="clients_showcase_row-logo" src="switch/assets/img/logos/switch 2.svg">
								</a>
							</li>
						</ul>
					</div> <!-- / END CLIENT LIST -->
				</div> <!-- / END CONTAINER -->

			</section>
			<!-- END ABOUT US SECTION -->

			<!--STATS
			<section class="stats">
				<div class="container">
				    STATS
				    <div class="row">

				         START COLUMN
				        <div class="col-lg-3 col-sm-3">
				            <div class="stat">
				                <div class="icon-top red-text">
				                    <i class="icon-design-graphic-tablet-streamline-tablet"></i>
				                </div>
				                <div class="stat-text">
				                <h2 class="white-text red-border-bottom">950+</h2>
				                <h6>Projects Built</h6>
				                </div>
				            </div>
				        </div>  / END COLUMN

				         START COLUMN
				        <div class="col-lg-3 col-sm-3">
				            <div class="stat">
				                <div class="icon-top blue-text">
				                    <i class="icon-man-people-streamline-user"></i>
				                </div>
				                <div class="stat-text">
				                <h2 class="white-text blue-border-bottom">950+</h2>
				                <h6>Happy Clients</h6>
				                </div>
				            </div>
				        </div>  / END COLUMN

				        START COLUMN
				        <div class="col-lg-3 col-sm-3">
				            <div class="stat">
				                <div class="icon-top green-text">
				                    <i class="icon-banknote"></i>
				                </div>
				                <div class="stat-text">
				                <h2 class="white-text green-border-bottom">$16+ mil</h2>
				                <h6>Developer Payouts</h6>
				                </div>
				            </div>
				        </div>  / END COLUMN

				         START COLUMN
				        <div class="col-lg-3 col-sm-3">
				            <div class="stat">
				                <div class="icon-top yellow-text">
				                    <i class="icon-speech-streamline-talk-user"></i>
				                </div>
				                <div class="stat-text">
				                <h2 class="white-text yellow-border-bottom">24,000+</h2>
				                <h6>Verified Freelancers</h6>
				                </div>
				            </div>
				        </div>  / END COLUMN
				    </div>
				</div>
			</section>
			END STATS -->

			<!--TESTIMONIAL SECTION-->
			<section class="testimonial bg-white text-center" id="testimonials">
				<div class="container">
				    <div class="sub-sections m-b-40">
				      <h2 lang="en" class="c-dark f-45 m-t-0">Testimonials</h2>
				      <h3 lang="en">What our users are saying about Lorem Ipsum</h3>
				    </div>
				    <div class="row">
				      	<div class="col-sm-4 reviewer">

					        <!--review 1-->

					        <figure class="text-center">
					        	<img src="switch/assets/img/review-1.jpg" alt="face" class="img-circle">
					        </figure>
					        <blockquote>
					          <p lang="en">"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus, repellat, voluptatem eveniet et illum itaque excepturi repudiandae officiis quibusdam deleniti."</p>
					          <cite lang="en">— John Doe, CEO Abc Organisation</cite>
					        </blockquote>

					        <!--review 1 end-->

				      	</div>
				      	<div class="col-sm-4 reviewer">

					        <!--review 2-->

					        <figure class="text-center"><img src="switch/assets/img/review-2.jpg" alt="face" class="img-circle"> </figure>
					        <blockquote>
					          <p lang="en">"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus, repellat, voluptatem eveniet et illum itaque excepturi repudiandae officiis quibusdam deleniti." </p>
					          <cite lang="en">— John Doe, CEO Abc Organisation</cite> </blockquote>

					        <!--review 2 end-->

				      	</div>
				      	<div class="col-sm-4 reviewer">

					        <!--review 3-->

					        <figure class="text-center">
					        	<img src="switch/assets/img/review-3.jpg" alt="face" class="img-circle">
					        </figure>
					        <blockquote>
					          	<p lang="en">"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus, repellat, voluptatem eveniet et illum itaque excepturi repudiandae officiis quibusdam deleniti."</p>
					          	<cite lang="en">— Michael Doe, CEO Xyz Organisation</cite>
					        </blockquote>
					        <!--review 3 end-->
				      	</div>
				    </div>
				</div>
			</section>
			<!--END TESTIMONIAL SECTION -->

			<!--PURCHASE NOW-->
			<section class="tour text-center">
				<div class="container">
					<div class="row">
						<div class="col-md-8 center-block">
							<h3 class="white-text">
								Are you a professional freelancer looking for better jobs?

							</h3><br><br>
							<div class="text-center">
								<a href="/social/login/github/" class="btn btn-transparent">Apply with Github</a>
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
						<h2 class="f-45 m-t-0">Let's Get Started!</h2>

						<!-- SHORT DESCRIPTION ABOUT THE SECTION -->
						<h3 class="">
							Tell us a few details about what you need and our team will start working for you immediately.
						</h3>
					</div>
					<!-- / END SECTION HEADER -->
					<br>
					<!-- CONTACT FORM-->
					<div class="row">
						<form role="form" action="" method="post" class="contact-form" data-validate="parsley">
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

			</footer>
		</div>
@endsection