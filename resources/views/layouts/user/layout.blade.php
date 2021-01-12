<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link href="{{ asset('asset/img/express-favicon.png" type="image/x-icon') }}" rel="icon"  />

	<title>Senior Consulting</title>
	<!-- Menu links -->
	<!-- Icon css link -->
	<link href="{{ asset('asset/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css" >
	<!-- Bootstrap -->
	<link href="{{ asset('asset/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" >
	<link href="{{ asset('asset/css/bootstrap4/bootstrap.min.css') }}" rel="stylesheet" type="text/css" >
	<!-- CSS For Menu -->
	<link href="{{ asset('asset/css/style-menu.css') }}" rel="stylesheet" type="text/css"  />
	<!-- /Menu links -->
	<!-- CSS For Slider -->
	<link href="{{ asset('asset/plugins/font-awesome-4.7.0/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">
	<link href="{{ asset('asset/plugins/OwlCarousel2-2.2.1/owl.carousel.css') }}" rel="stylesheet" type="text/css" >
	<link href="{{ asset('asset/plugins/OwlCarousel2-2.2.1/owl.theme.default.css') }}" rel="stylesheet" type="text/css" >
	<link href="{{ asset('asset/plugins/OwlCarousel2-2.2.1/animate.css') }}" rel="stylesheet" type="text/css" >
	<link href="{{ asset('asset/plugins/video-js/video-js.css') }}" rel="css" type="text/css">
	<link href="{{ asset('asset/css/main_styles.css') }}" rel="stylesheet" type="text/css" >

	<link href="{{ asset('asset/css/responsive.css') }}" rel="stylesheet" type="text/css" >

	<!--CSS For Tabs-->
	<link href="{{ asset('asset/css/style-tabs.css') }}" rel="stylesheet" type="text/css" >
	<!--CSS For Trainer-->
	<link href="{{ asset('asset/css/advanced.css') }}" rel="stylesheet" type="text/css" >
	<!--Custom CSS-->
	<link href="{{ asset('asset/css/custom.css') }}" rel="stylesheet" type="text/css" >


</head>
<body>

<div class="super_container">
	<!-- Preloader -->
	<div id="preloader">
		<div class="loader absolute-center">
			<div class="loader__box"><b class="top"></b></div>
			<div class="loader__box"><b class="top"></b></div>
			<div class="loader__box"><b class="top"></b></div>
		</div>
	</div>
	<!-- /Preloader -->

	<!-- Header -->
	<header class="header" id="header">
		<!-- Top Bar -->
		<div class="top_bar">
			<div class="top_bar_container">
				<div class="container">
					<div class="row">
						<div class="col">
							<div class="top_bar_content d-flex flex-row align-items-center justify-content-start">
								<ul class="top_bar_contact_list">
									<li><a href="">Senior Consulting</a></li>
									<li>
										<a href=""><i class="fa fa-facebook"></i></a>
									</li>
									<li>
										<a href=""><i class="fa fa-twitter"></i></a>
									</li>
									<li>
										<a href=""><i class="fa fa-instagram"></i></a>
									</li>
									<li>
										<a href=""><i class="fa fa-youtube"></i></a>
									</li>
								</ul>
								<div class="top_bar_login ml-auto">
									<ul>
										<li><a href="#">Register</a></li>
										<li><a href="#">Login</a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Header Content -->
		<div class="header_container">
			<!-- NAV -->
			<div id="nav">
				<!-- Top Nav -->
				<div id="nav-top">
					<div class="container">
						<!-- logo -->
						<div class="nav-logo">
							<a href="index.html" class="logo"><img src="{{asset('asset/img/logo2.png')}}" alt="" style="z-index:999 !important"></a>
						</div>
						<!-- /logo -->
						<!-- social & search & aside toggle -->
						<div class="nav-btns">
							<div id="nav-search">
								<form>
									<input class="input" name="search" placeholder="Enter your search...">
								</form>
								<button class="nav-close search-close">
									<span></span>
								</button>
							</div>
							<button class="search-btn"><i class="fa fa-search"></i></button>

							<button class="aside-btn"><i class="fa fa-bars"></i></button>
						</div>
						<!-- /search & aside toggle -->
					</div>
				</div>
				<!-- /Top Nav -->
				<!-- Main Nav -->
				<div id="nav-bottom" class="">
					<div class="container">
						<img src="{{asset('asset/img/logo2.png')}}" alt="" style="position:absolute;top:5px;left:10px">
						<!-- nav -->
						<ul class="nav-menu">
							<li><a href="#" class="active">Home</a></li>
							<li class="has-dropdown">
								<a href="#">Services</a>
								<div class="dropdown">
									<div class="dropdown-body">
										<ul class="dropdown-list">
											<li><a href="">One</a></li>
											<li><a href="">Two</a></li>
											<li><a href="">Three</a></li>
										</ul>
									</div>
								</div>
							</li>
							<li class="has-dropdown">
								<a href="#">Industries</a>
								<div class="dropdown">
									<div class="dropdown-body">
										<ul class="dropdown-list">
											<li><a href="">One</a></li>
											<li><a href="">Two</a></li>
											<li><a href="">Three</a></li>
										</ul>
									</div>
								</div>
							</li>
							<li class="has-dropdown">
								<a href="index.html">Company</a>
								<div class="dropdown">
									<div class="dropdown-body">
										<ul class="dropdown-list">
											<li><a href="">One</a></li>
											<li><a href="">Two</a></li>
											<li><a href="">Three</a></li>
										</ul>
									</div>
								</div>
							</li>
							<li class="has-dropdown">
								<a href="index.html">Resources</a>
								<div class="dropdown">
									<div class="dropdown-body">
										<ul class="dropdown-list">
											<li><a href="">One</a></li>
											<li><a href="">Two</a></li>
											<li><a href="">Three</a></li>
										</ul>
									</div>
								</div>
							</li>
							<li><a href="#">Clients</a></li>
							<li class="has-dropdown megamenu">
								<a href="#">Courses</a>
								<div class="dropdown tab-dropdown">
									<div class="dropdown tab-dropdown">
										<div class="row">
											<div class="col-md-2">
												<ul class="tab-nav">
													<li class="active"><a data-toggle="tab" href="#tab1">System Administration</a></li>
													<li><a data-toggle="tab" href="#tab2">Web Development</a></li>
													<li><a data-toggle="tab" href="#tab3">Networking</a></li>
													<li><a data-toggle="tab" href="#tab4">Mobile Apps</a></li>
													<li><a data-toggle="tab" href="#tab">Security & Hacking</a></li>
													<li><a data-toggle="tab" href="#tab">Alex Courses</a></li>
													<li><a data-toggle="tab" href="#tab">Projects Courses</a></li>
												</ul>
											</div>
											<div class="col-md-10">
												<div class="dropdown-body tab-content">
													<!-- tab1 -->
													<div id="tab1" class="tab-pane fade in active">
														<div class="row">
															<!-- post -->
															<div class="col-md-12">
																<div class="post post-sm">
																	<a class="post-img" href="blog-post.html"><img src="{{asset('asset/img/menu-3.jpg')}}" alt="" style="max-height:250px;"></a>
																</div>
															</div>
															<!-- /post -->
														</div>
														<div class="row">
															<!-- post -->
															<div class="col-md-3">
																<div class="post post-sm">
																	<div class="post-body">
																		<div class="post-category">
																			<a>Course one</a>
																		</div>
																		<ul class="dropdown-list">
																			<li><a href="#">Training Objective</a></li>
																			<li><a href="#">Available Rounds</a></li>
																			<li><a href="#">Daily Agenda</a></li>
																		</ul>
																	</div>
																</div>
															</div>
															<!-- /post -->
															<!-- post -->
															<div class="col-md-3">
																<div class="post post-sm">
																	<div class="post-body">
																		<div class="post-category">
																			<a>Course two</a>
																		</div>
																		<ul class="dropdown-list">
																			<li><a href="#">Training Objective</a></li>
																			<li><a href="#">Available Rounds</a></li>
																			<li><a href="#">Daily Agenda</a></li>
																		</ul>
																	</div>
																</div>
															</div>
															<!-- /post -->
															<!-- post -->
															<div class="col-md-3">
																<div class="post post-sm">
																	<div class="post-body">
																		<div class="post-category">
																			<a>Course three</a>
																		</div>
																		<ul class="dropdown-list">
																			<li><a href="#">Training Objective</a></li>
																			<li><a href="#">Available Rounds</a></li>
																			<li><a href="#">Daily Agenda</a></li>
																		</ul>
																	</div>
																</div>
															</div>
															<!-- /post -->
															<!-- post -->
															<div class="col-md-3">
																<div class="post post-sm">
																	<div class="post-body">
																		<div class="post-category">
																			<a>Course four</a>
																		</div>
																		<ul class="dropdown-list">
																			<li><a href="#">Training Objective</a></li>
																			<li><a href="#">Available Rounds</a></li>
																			<li><a href="#">Daily Agenda</a></li>
																		</ul>
																	</div>
																</div>
															</div>
															<!-- /post -->
														</div>
													</div>
													<!-- /tab1 -->
													<!-- tab2 -->
													<div id="tab2" class="tab-pane fade in">
														<div class="row">
															<!-- post -->
															<div class="col-md-4">
																<div class="post post-sm">
																	<a class="post-img" href="blog-post.html"><img src="{{asset('asset/img/post-5.jpg')}}" alt=""></a>
																	<div class="post-body">
																		<div class="post-category">
																			<a href="category.html">Course Name</a>
																		</div>
																		<h3 class="post-title title-sm"><a href="blog-post.html">Course summary</a></h3>
																		<p><a href="author.html">Lorem Ipsum is simply dummy text of the printing and typesetting industry</a></p>
																		<ul class="post-meta">
																			<li><a href="author.html">Next Round</a></li>
																			<li>20 April 2021</li>
																		</ul>
																	</div>
																</div>
															</div>
															<!-- /post -->
															<!-- post -->
															<div class="col-md-4">
																<div class="post post-sm">
																	<a class="post-img" href="blog-post.html"><img src="{{asset('asset/img/post-8.jpg')}}" alt=""></a>
																	<div class="post-body">
																		<div class="post-category">
																			<a href="category.html">Course Name</a>
																		</div>
																		<h3 class="post-title title-sm"><a href="blog-post.html">Course summary</a></h3>
																		<p><a href="author.html">Lorem Ipsum is simply dummy text of the printing and typesetting industry</a></p>
																		<ul class="post-meta">
																			<li><a href="author.html">Next Round</a></li>
																			<li>20 April 2021</li>
																		</ul>
																	</div>
																</div>
															</div>
															<!-- /post -->
															<!-- post -->
															<div class="col-md-4">
																<div class="post post-sm">
																	<a class="post-img" href="blog-post.html"><img src="{{asset('asset/img/post-9.jpg')}}" alt=""></a>
																	<div class="post-body">
																		<div class="post-category">
																			<a href="category.html">Course Name</a>
																		</div>
																		<h3 class="post-title title-sm"><a href="blog-post.html">Course summary</a></h3>
																		<p><a href="author.html">Lorem Ipsum is simply dummy text of the printing and typesetting industry</a></p>
																		<ul class="post-meta">
																			<li><a href="author.html">Next Round</a></li>
																			<li>20 April 2021</li>
																		</ul>
																	</div>
																</div>
															</div>
															<!-- /post -->
														</div>
													</div>
													<!-- /tab2 -->
													<!-- tab3 .. -->
													<div id="tab3" class="tab-pane fade in">
														<div class="row">
															<!-- post -->
															<div class="col-md-3">
																<div class="post post-sm">
																	<div class="post-body">
																		<div class="post-category">
																			<a>Categories</a>
																		</div>
																		<ul class="dropdown-list">
																			<li><a href="#">Lorem Ipsum is simply</a></li>
																			<li><a href="#">Various versions evolved</a></li>
																			<li><a href="#">English Many desktop</a></li>
																		</ul>
																	</div>
																</div>
															</div>
															<!-- /post -->
															<!-- post -->
															<div class="col-md-3">
																<div class="post post-sm">
																	<div class="post-body">
																		<div class="post-category">
																			<a>Categories</a>
																		</div>
																		<ul class="dropdown-list">
																			<li><a href="#">Lorem Ipsum is simply</a></li>
																			<li><a href="#">Various versions evolved</a></li>
																			<li><a href="#">English Many desktop</a></li>
																		</ul>
																	</div>
																</div>
															</div>
															<!-- /post -->
															<!-- post -->
															<div class="col-md-3">
																<div class="post post-sm">
																	<div class="post-body">
																		<div class="post-category">
																			<a>Categories</a>
																		</div>
																		<ul class="dropdown-list">
																			<li><a href="#">Lorem Ipsum is simply</a></li>
																			<li><a href="#">Various versions evolved</a></li>
																			<li><a href="#">English Many desktop</a></li>
																		</ul>
																	</div>
																</div>
															</div>
															<!-- /post -->
															<!-- post -->
															<div class="col-md-3">
																<div class="post post-sm">
																	<div class="post-body">
																		<div class="post-category">
																			<a>Categories</a>
																		</div>
																		<ul class="dropdown-list">
																			<li><a href="#">Lorem Ipsum is simply</a></li>
																			<li><a href="#">Various versions evolved</a></li>
																			<li><a href="#">English Many desktop</a></li>
																		</ul>
																	</div>
																</div>
															</div>
															<!-- /post -->
														</div>
														<div class="row">
															<!-- post -->
															<div class="col-md-12">
																<div class="post post-sm">
																	<a class="post-img" href="blog-post.html"><img src="{{asset('asset/img/menu-3.jpg')}}" alt="" style="max-height:250px;"></a>
																</div>
															</div>
															<!-- /post -->
														</div>
													</div>
													<!-- /tab3 .. -->
													<!-- tab4 .. -->
													<div id="tab4" class="tab-pane fade in">
														<div class="row">
															<!-- post -->
															<div class="col-md-6">
																<div class="post post-sm">
																	<div class="post-body">
																		<div class="post-category">
																			<a>Course Name</a>
																		</div>
																		<ul class="dropdown-list">
																			<li><a href="#">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries</a></li>

																		</ul>
																	</div>
																</div>
															</div>
															<!-- /post -->
															<!-- post -->
															<div class="col-md-3">
																<div class="post post-sm">
																	<a class="post-img" href="blog-post.html"><img src="{{asset('asset/img/post-5.jpg')}}" alt=""></a>

																</div>
															</div>
															<!-- /post -->
															<!-- post -->
															<div class="col-md-3">
																<div class="post post-sm">
																	<a class="post-img" href="blog-post.html"><img src="{{asset('asset/img/post-8.jpg')}}" alt=""></a>

																</div>
															</div>
															<!-- /post -->
														</div>
														<div class="row">
															<!-- post -->
															<div class="col-md-6">
																<div class="post post-sm">
																	<div class="post-body">
																		<div class="post-category">
																			<a>Course Details</a>
																		</div>
																		<ul class="dropdown-list">
																			<li><a href="#">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text of the printing and typesetting industry.</a></li>

																		</ul>
																	</div>
																</div>
															</div>
															<!-- /post -->
															<!-- post -->
															<div class="col-md-6">
																<div class="post post-sm">
																	<a class="post-img" href="blog-post.html"><img src="{{asset('asset/img/menu-3.jpg')}}" alt="" style="max-height:250px;"></a>
																</div>
															</div>
															<!-- /post -->
														</div>
													</div>
													<!-- /tab4 .. -->
												</div>
											</div>
										</div>
									</div>
								</div>
							</li>
							<li class="has-dropdown">
								<a href="index.html"><i class="fa fa-globe"></i></a>
								<div class="dropdown">
									<div class="dropdown-body">
										<ul class="dropdown-list">
											<li><a href="">English</a></li>
											<li><a href="">Arabic</a></li>
										</ul>
									</div>
								</div>
							</li>
							<!--<li><a href="#" class="search-btn"><i class="fa fa-search"></i></a></li>-->
							<!--<li><button class="aside-btn"><i class="fa fa-bars"></i></button></li>-->
						</ul>
						<!-- /nav -->
					</div>
				</div>
				<!-- /Main Nav -->
				<!-- Aside Nav -->
				<div id="nav-aside">
					<ul class="nav-aside-menu">
						<li><a href="#">Home</a></li>
						<li class="has-dropdown">
							<a>Services</a>
							<ul class="dropdown">
								<li><a href="#">Services 1</a></li>
								<li><a href="#">Services 2</a></li>
								<li><a href="#">Services 3</a></li>
								<li><a href="#">Services 4</a></li>
								<li><a href="#">Services 5</a></li>
							</ul>
						</li>
						<li class="has-dropdown">
							<a>Industries</a>
							<ul class="dropdown">
								<li><a href="#">Industries 1</a></li>
								<li><a href="#">Industries 2</a></li>
								<li><a href="#">Industries 3</a></li>
								<li><a href="#">Industries 4</a></li>
								<li><a href="#">Industries 5</a></li>
							</ul>
						</li>
						<li class="has-dropdown">
							<a>Company</a>
							<ul class="dropdown">
								<li><a href="">About</a></li>
								<li><a href="">Team</a></li>
								<li><a href="">Gallery</a></li>
								<li><a href="">Careers</a></li>
								<li><a href="">Contact Us</a></li>
							</ul>
						</li>
						<li class="has-dropdown">
							<a>Resources</a>
							<ul class="dropdown">
								<li><a href="">Blog</a></li>
								<li><a href="">Insigths</a></li>
							</ul>
						</li>
						<li><a href="#">Clients</a></li>
						<li class="has-dropdown">
							<a>Courses</a>
							<ul class="dropdown">
								<li class="has-dropdown">
									<a>System Administration</a>
									<ul class="dropdown">
										<li><a href="">Course One</a></li>
										<li><a href="">Course Two</a></li>
										<li><a href="">Course Three</a></li>
									</ul>
								</li>
								<li class="has-dropdown">
									<a>Web Development</a>
									<ul class="dropdown">
										<li><a href="">Course One</a></li>
										<li><a href="">Course Two</a></li>
										<li><a href="">Course Three</a></li>
									</ul>
								</li>
								<li class="has-dropdown">
									<a>Networking</a>
									<ul class="dropdown">
										<li><a href="">Course One</a></li>
										<li><a href="">Course Two</a></li>
										<li><a href="">Course Three</a></li>
									</ul>
								</li>
								<li class="has-dropdown">
									<a>Mobile Apps</a>
									<ul class="dropdown">
										<li><a href="">Course One</a></li>
										<li><a href="">Course Two</a></li>
										<li><a href="">Course Three</a></li>
									</ul>
								</li>
								<li class="has-dropdown">
									<a>Security & Hacking</a>
									<ul class="dropdown">
										<li><a href="">Course One</a></li>
										<li><a href="">Course Two</a></li>
										<li><a href="">Course Three</a></li>
									</ul>
								</li>
								<li class="has-dropdown">
									<a>Alex Courses</a>
									<ul class="dropdown">
										<li><a href="">Course One</a></li>
										<li><a href="">Course Two</a></li>
										<li><a href="">Course Three</a></li>
									</ul>
								</li>
								<li class="has-dropdown">
									<a>Projects Courses</a>
									<ul class="dropdown">
										<li><a href="">Course One</a></li>
										<li><a href="">Course Two</a></li>
										<li><a href="">Course Three</a></li>
									</ul>
								</li>
							</ul>
						</li>
					</ul>
					<button class="nav-close nav-aside-close"><span></span></button>
				</div>
				<!-- /Aside Nav -->
			</div>
			<!-- /NAV -->
		</div>
	</header>
	<!-- /Header -->

		@yield('content')

		<!-- Newsletter  -->
	<div class="">
		<div class="container">
			<div class="row">
				<div class="col-lg-10 offset-lg-1" style="margin-top:170px">
					<div class="section_title text-center"><h2>Join Our Newsletter Today</h2></div>
					<div class="section_subtitle">Suspendisse tincidunt magna eget massa hendrerit efficitur. Ut euismod pellentesque imperdiet. Cras laoreet gravida lectus, at viverra lorem venenatis in. Aenean id varius quam. Nullam bibendum interdum dui, ac tempor lorem convallis ut</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-4 offset-lg-4" style="margin-bottom:70px">
					<div>
						<label>Email</label>
						<input type="email" class="form-control" placeholder="Email" required="required">
					</div>
					<div>
						<label>Job Category</label>
						<select class="form-control" style="min-height:35px">
							<option value="1">Select Category</option>
							<option value="1"> Category_01</option>
							<option value="1"> Category_02</option>
							<option value="1"> Category_03</option>
							<option value="1"> Category_04</option>
							<option value="1"> Category_05</option>
							<option value="1"> Category_06</option>
							<option value="1"> Category_07</option>
							<option value="1"> Category_08</option>
							<option value="1"> Category_09</option>
							<option value="1"> Category_10</option>
						</select>
					</div>
				</div>
			</div>
		</div>
		<div class="button join_button"><a href="#">register now<div class="button_arrow"><i class="fa fa-angle-right" aria-hidden="true"></i></div></a></div>
	</div>
	<!-- /Newsletter  -->

	<!-- Footer -->
	{{-- <footer class="footer bg-img bg-overlay" style="background: url('img/17.jpg')"> --}}
	<footer class="footer bg-img bg-overlay" style="background-image:url({{url('asset/img/17.jpg')}})">
		<div class="container">
			<div class="row">

				<!-- About -->
				<div class="col-lg-3 footer_col">
					<div class="footer_about">
						<div class="logo_container">
							<a href="#">
								<div class="logo_content d-flex flex-row align-items-end justify-content-start">
									<!--<div class="logo_img"><img src="img/logo2.png" alt=""></div>-->
									<div class="logo_text">Senior Steps</div>
								</div>
							</a>
						</div>
						<div class="footer_about_text">
							<p class="cl-wt">Maecenas rutrum viverra sapien sed fermentum. Morbi tempor odio eget lacus tempus pulvinar.</p>
							<p class="cl-wt">Maecenas rutrum viverra sapien sed.</p>
						</div>
						<div class="footer_social">
							<ul>
								<li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
								<li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
								<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
							</ul>
						</div>
					</div>
				</div>

				<div class="col-lg-3 footer_col">
					<div class="footer_links">
						<div class="footer_title">Quick menu</div>
						<ul class="footer_list">
							<li><a href="index.html">Home</a></li>
							<li><a href="about.html">About us</a></li>
							<li><a href="#">Testimonials</a></li>
							<li><a href="#">Services</a></li>
							<li><a href="contact.html">Contact</a></li>
							<li><a href="#">Facts</a></li>
						</ul>
					</div>
				</div>

				<div class="col-lg-3 footer_col">
					<div class="footer_links">
						<div class="footer_title">Useful Links</div>
						<ul class="footer_list">
							<li><a href="courses.html">Courses</a></li>
							<li><a href="#">Events</a></li>
							<li><a href="news.html">News</a></li>
							<li><a href="#">Teachers</a></li>
							<li><a href="#">Links</a></li>
							<li><a href="#">FAQ</a></li>
						</ul>
					</div>
				</div>

				<div class="col-lg-3 footer_col">
					<div class="footer_contact">
						<div class="footer_title">Contact Us</div>
						<div class="footer_contact_info">
							<div class="footer_contact_item">
								<div class="footer_contact_title">Address:</div>
								<div class="footer_contact_line">20 Makram Ebaid Nasr City Cairo, Egypt</div>
							</div>
							<div class="footer_contact_item">
								<div class="footer_contact_title">Phone:</div>
								<div class="footer_contact_line">+02 0100 123 4567</div>
							</div>
							<div class="footer_contact_item">
								<div class="footer_contact_title">Email:</div>
								<div class="footer_contact_line">info@seniorsteps.com</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</footer>
	<!-- /Footer -->
	
<!---Floating contact form-->
<div class='form-parent'>
	<form name="contact-form" class="cc-float-form">
		<p></p>
		Name:
		<span style="color:red;">*</span><br />
		<input class="contact-form-area" id="ContactForm1_contact-form-name" name="name" size="30" value="" type="text" />

		Phone:
		<span style="color:red;">*</span><br />
		<input class="contact-form-area" id="ContactForm1_contact-form-email" name="phone" size="30" value="" type="text" />

		<button class="btn btn-danger mt-10">Submit</button>
		<button class="btn btn-danger mt-10">Get Coupons Discount</button>

	</form>
</div>
<!--Floating contact form-->
<!------------------------------------->
</div>

<!-- jQuery Plugins For Menu -->
<script src="{{ asset('asset/js/jquery.min.js') }}"></script>
<script src="{{ asset('asset/js/main.js') }}"></script>
<!------------------------------------->
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="{{ asset('asset/js/jquery-2.1.4.min.js') }}"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="{{ asset('asset/js/bootstrap.min.js') }}"></script>


<script src="{{ asset('asset/js/jquery-3.2.1.min.js') }}"></script>
<script src="{{ asset('asset/css/bootstrap4/popper.js') }}"></script>
<script src="{{ asset('asset/css/bootstrap4/bootstrap.min.js') }}"></script>
<script src="{{ asset('asset/plugins/greensock/TweenMax.min.js') }}"></script>
<script src="{{ asset('asset/plugins/greensock/TimelineMax.min.js') }}"></script>
<script src="{{ asset('asset/plugins/scrollmagic/ScrollMagic.min.js') }}"></script>
<script src="{{ asset('asset/plugins/greensock/animation.gsap.min.js') }}"></script>
<script src="{{ asset('asset/plugins/greensock/ScrollToPlugin.min.js') }}"></script>
<script src="{{ asset('asset/plugins/OwlCarousel2-2.2.1/owl.carousel.js') }}"></script>
<script src="{{ asset('asset/plugins/easing/easing.js') }}"></script>
<script src="{{ asset('asset/plugins/video-js/video.min.js') }}"></script>
<script src="{{ asset('asset/plugins/video-js/Youtube.min.js') }}"></script>
<script src="{{ asset('asset/plugins/parallax-js-master/parallax.min.js') }}"></script>
<script src="{{ asset('asset/js/news.js') }}"></script>
<script src="{{ asset('asset/js/custom.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="{{ asset('asset/js/tabs.js') }}"></script>


<!-- Open menu tab on hover -->
<!--<script>
	$(document).on('mouseenter', '[data-toggle="tab"]', function () {
		$(this).tab('show');
	});
</script>-->

@yield('scripts')
		
    </body>
</html>