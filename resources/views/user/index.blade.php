@extends("layouts.user.layout")

@section('header')

@endsection

@section('content')
<!-- Home Slider -->
<section>
    <div class="home">
        <div class="home_slider_container">
            <!-- Home Slider -->
            <div class="owl-carousel owl-theme home_slider">
                <!-- Slider Item -->
                <div class="owl-item">
                    <div class="home_slider_background overlay" style="background-image:url({{url('asset/images/index2.jpg')}})"></div>
                    <div class="home_container">
                        <div class="container">
                            <div class="row">
                                <div class="col">
                                    <div class="home_content text-center">
                                        <div class="home_logo">
                                            {{-- <img src="" alt=""> --}}
                                        </div>
                                        <div class="home_text">
                                            <div class="home_title">Online Courses</div>
                                            <div class="home_subtitle">Maecenas rutrum viverra sapien sed fermentum. Morbi tempor odio eget lacus tempus pulvinar. Praesent vel nisl fermentum, gravida augue ut, fermentum ipsum.</div>
                                        </div>
                                        <div class="home_buttons">
                                            <div class="button home_button"><a href="#">learn more<div class="button_arrow"><i class="fa fa-angle-right" aria-hidden="true"></i></div></a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Slider Item -->
                <div class="owl-item">
                    <div class="home_slider_background overlay" style="background-image:url({{url('asset/images/index3.jpg')}})"></div>
                    <div class="home_container">
                        <div class="container">
                            <div class="row">
                                <div class="col">
                                    <div class="home_content text-center">
                                        <div class="home_logo">
                                            {{-- <img src="" alt=""> --}}
                                        </div>
                                        <div class="home_text">
                                            <div class="home_title">Consulting Team</div>
                                            <div class="home_subtitle">Maecenas rutrum viverra sapien sed fermentum. Morbi tempor odio eget lacus tempus pulvinar. Praesent vel nisl fermentum, gravida augue ut, fermentum ipsum.</div>
                                        </div>
                                        <div class="home_buttons">
                                            <div class="button home_button"><a href="#">learn more<div class="button_arrow"><i class="fa fa-angle-right" aria-hidden="true"></i></div></a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Slider Item -->
                <div class="owl-item">
                    <div class="home_slider_background overlay" style="background-image:url({{url('asset/images/index4.jpg')}})"></div>
                    <div class="home_container">
                        <div class="container">
                            <div class="row">
                                <div class="col">
                                    <div class="home_content text-center">
                                        <div class="home_logo">
                                            {{-- <img src="" alt=""> --}}
                                        </div>
                                        <div class="home_text">
                                            <div class="home_title">Offline Courses</div>
                                            <div class="home_subtitle">Maecenas rutrum viverra sapien sed fermentum. Morbi tempor odio eget lacus tempus pulvinar. Praesent vel nisl fermentum, gravida augue ut, fermentum ipsum.</div>
                                        </div>
                                        <div class="home_buttons">
                                            <div class="button home_button"><a href="#">learn more<div class="button_arrow"><i class="fa fa-angle-right" aria-hidden="true"></i></div></a></div>
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
    <div class="featured">
        <div class="container">
            <div class="row">
                <div class="col">
                    <!-- Home Slider Nav -->
                    <div class="home_slider_nav_container d-flex flex-row align-items-start justify-content-between">
                        <div class="home_slider_nav home_slider_prev trans_200"><i class="fa fa-angle-left" aria-hidden="true"></i></div>
                        <div class="home_slider_nav home_slider_next trans_200"><i class="fa fa-angle-right" aria-hidden="true"></i></div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>
<!-- /Home Slider -->

<!-- Course -->
<div class="courses">
    <div class="container pb-50 pt-50">
        <div class="row">
            <div class="col-lg-10 offset-lg-1">
                <div class="section_title text-center"><h2>Find your course</h2></div>
                <div class="section_subtitle">Suspendisse tincidunt magna eget massa hendrerit efficitur. Ut euismod pellentesque imperdiet. Cras laoreet gravida lectus, at viverra lorem venenatis in. Aenean id varius quam. Nullam bibendum interdum dui, ac tempor lorem convallis ut</div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="course_search">
                    <form action="#" class="course_search_form d-flex flex-md-row flex-column align-items-start justify-content-between">
                        <div>
                            <select class="course_input">
                                <option value="1">Select Course Category</option>
                                <option value="1">Course Category_01</option>
                                <option value="1">Course Category_02</option>
                                <option value="1">Course Category_03</option>
                                <option value="1">Course Category_04</option>
                                <option value="1">Course Category_05</option>
                                <option value="1">Course Category_06</option>
                                <option value="1">Course Category_07</option>
                                <option value="1">Course Category_08</option>
                                <option value="1">Course Category_09</option>
                                <option value="1">Course Category_10</option>
                                <option value="1">Course Category_11</option>
                                <option value="1">Course Category_12</option>
                                <option value="1">Course Category_13</option>
                                <option value="1">Course Category_14</option>
                                <option value="1">Course Category_15</option>
                            </select>
                        </div>
                        <div>
                            <select class="course_input">
                                <option value="1">Select Course Name</option>
                                <option value="1">Course_01</option>
                                <option value="1">Course_02</option>
                                <option value="1">Course_03</option>
                                <option value="1">Course_04</option>
                                <option value="1">Course_05</option>
                                <option value="1">Course_06</option>
                                <option value="1">Course_07</option>
                                <option value="1">Course_08</option>
                                <option value="1">Course_09</option>
                                <option value="1">Course_10</option>
                                <option value="1">Course_11</option>
                                <option value="1">Course_12</option>
                                <option value="1">Course_13</option>
                                <option value="1">Course_14</option>
                                <option value="1">Course_15</option>
                            </select>
                        </div>
                        <!--<div><input type="text" class="course_input" placeholder="Course" required="required"></div>-->
                        <!--<div><input type="text" class="course_input" placeholder="Level" required="required"></div>-->
                        <button class="course_button"><span>search course</span><span class="button_arrow"><i class="fa fa-angle-right" aria-hidden="true"></i></span></button>
                    </form>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <!-- Courses Slider -->
                <div class="courses_slider_container">
                    <div class="owl-carousel owl-theme courses_slider">

                        <!-- Slider Item -->
                        <div class="owl-item">
                            <div class="course">
                                <div class="course_image"><img src="{{asset('asset/img/post-1.jpg')}}" alt="" /></div>
                                <div class="course_body">
                                    <div class="course_header d-flex flex-row align-items-center justify-content-start">
                                        <div class="course_tag"><a href="#">Book Now</a></div>
                                        <div class="course_price ml-auto">Price: <span>2500 LE</span></div>
                                    </div>
                                    <div class="course_title"><h3><a href="courses.html">Front End Course</a></h3></div>
                                    <div class="course_text">Lorem Ipsum is simply dummy text of the printing and typesetting industry standard dummy text ever </div>
                                    <div class="course_footer d-flex align-items-center justify-content-start">
                                        <div class="category">Category : <a href="#">Web Development</a></div>
                                    </div>
                                </div>
                                <div class="course_date"><a href="#">16 April</a></div>
                            </div>
                        </div>

                        <!-- Slider Item -->
                        <div class="owl-item">
                            <div class="course">
                                <div class="course_image"><img src="{{asset('asset/img/post-2.jpg')}}" alt=""></div>
                                <div class="course_body">
                                    <div class="course_header d-flex flex-row align-items-center justify-content-start">
                                        <div class="course_tag"><a href="#">Book Now</a></div>
                                        <div class="course_price ml-auto">Price: <span>2500 LE</span></div>
                                    </div>
                                    <div class="course_title"><h3><a href="courses.html">Front End Course</a></h3></div>
                                    <div class="course_text">Lorem Ipsum is simply dummy text of the printing and typesetting industry standard dummy text ever </div>
                                    <div class="course_footer d-flex align-items-center justify-content-start">
                                        <div class="category">Category : <a href="#">Web Development</a></div>
                                    </div>
                                </div>
                                <div class="course_date"><a href="#">19 April</a></div>
                            </div>
                        </div>

                        <!-- Slider Item -->
                        <div class="owl-item">
                            <div class="course">
                                <div class="course_image"><img  src="{{asset('asset/img/post-3.jpg')}}" alt=""></div>
                                <div class="course_body">
                                    <div class="course_header d-flex flex-row align-items-center justify-content-start">
                                        <div class="course_tag"><a href="#">Book Now</a></div>
                                        <div class="course_price ml-auto">Price: <span>2500 LE</span></div>
                                    </div>
                                    <div class="course_title"><h3><a href="courses.html">Front End Course</a></h3></div>
                                    <div class="course_text">Lorem Ipsum is simply dummy text of the printing and typesetting industry standard dummy text ever </div>
                                    <div class="course_footer d-flex align-items-center justify-content-start">
                                        <div class="category">Category : <a href="#">Web Development</a></div>
                                    </div>
                                </div>
                                <div class="course_date"><a href="#">20 May</a></div>
                            </div>
                        </div>

                        <!-- Slider Item -->
                        <div class="owl-item">
                            <div class="course">
                                <div class="course_image"><img src="{{asset('asset/img/post-4.jpg')}}" alt=""></div>
                                <div class="course_body">
                                    <div class="course_header d-flex flex-row align-items-center justify-content-start">
                                        <div class="course_tag"><a href="#">Book Now</a></div>
                                        <div class="course_price ml-auto">Price: <span>2500 LE</span></div>
                                    </div>
                                    <div class="course_title"><h3><a href="courses.html">Front End Course</a></h3></div>
                                    <div class="course_text">Lorem Ipsum is simply dummy text of the printing and typesetting industry standard dummy text ever </div>
                                    <div class="course_footer d-flex align-items-center justify-content-start">
                                        <div class="category">Category : <a href="#">Web Development</a></div>
                                    </div>
                                </div>
                                <div class="course_date"><a href="#">27 June</a></div>
                            </div>
                        </div>

                        <!-- Slider Item -->
                        <div class="owl-item">
                            <div class="course">
                                <div class="course_image"><img src="{{asset('asset/img/post-5.jpg')}}" alt=""></div>
                                <div class="course_body">
                                    <div class="course_header d-flex flex-row align-items-center justify-content-start">
                                        <div class="course_tag"><a href="#">Book Now</a></div>
                                        <div class="course_price ml-auto">Price: <span>2500 LE</span></div>
                                    </div>
                                    <div class="course_title"><h3><a href="courses.html">Front End Course</a></h3></div>
                                    <div class="course_text">Lorem Ipsum is simply dummy text of the printing and typesetting industry standard dummy text ever </div>
                                    <div class="course_footer d-flex align-items-center justify-content-start">
                                        <div class="category">Category : <a href="#">Web Development</a></div>
                                    </div>
                                </div>
                                <div class="course_date"><a href="#">05 July</a></div>
                            </div>
                        </div>

                        <!-- Slider Item -->
                        <div class="owl-item">
                            <div class="course">
                                <div class="course_image"><img src="{{asset('asset/img/post-6.jpg')}}" alt=""></div>
                                <div class="course_body">
                                    <div class="course_header d-flex flex-row align-items-center justify-content-start">
                                        <div class="course_tag"><a href="#">Book Now</a></div>
                                        <div class="course_price ml-auto">Price: <span>2500 LE</span></div>
                                    </div>
                                    <div class="course_title"><h3><a href="courses.html">Front End Course</a></h3></div>
                                    <div class="course_text">Lorem Ipsum is simply dummy text of the printing and typesetting industry standard dummy text ever </div>
                                    <div class="course_footer d-flex align-items-center justify-content-start">
                                        <div class="category">Category : <a href="#">Web Development</a></div>
                                    </div>
                                </div>
                                <div class="course_date"><a href="#">12 August</a></div>
                            </div>
                        </div>
                    </div>

                    <!-- Courses Slider Nav -->
                    <div class="courses_slider_nav courses_slider_prev trans_200"><i class="fa fa-angle-left" aria-hidden="false"></i></div>
                    <div class="courses_slider_nav courses_slider_next trans_200"><i class="fa fa-angle-right" aria-hidden="false"></i></div>

                </div>
            </div>
        </div>
        <div class="row pt-50">
            <div class="col text-center">
                <div class="button teachers_button"><a href="#">Courses Page<div class="button_arrow"><i class="fa fa-angle-right" aria-hidden="true"></i></div></a></div>
            </div>
        </div>
    </div>
</div>
<!-- /Course -->

<!-- Services -->
<section class="feature_part">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-8">
                <div class="section_tittle text-center">
                    <h2>Our Services</h2>
                    <div class="section_subtitle">Suspendisse tincidunt magna eget massa hendrerit efficitur. Ut euismod pellentesque imperdiet. Cras laoreet gravida lectus, at viverra lorem venenatis in. Aenean id varius quam.</div>
                </div>
            </div>
        </div>
        <div class="row justify-content-between align-items-center">
            <div class="col-lg-3 col-sm-12">
                <div class="single_feature">
                    <div class="single_feature_part">
                        <span class="single_feature_icon"><img src="{{asset('asset/img/icon.png')}}" alt=""></span>
                        <h4>services</h4>
                        <p>
                            Darkness multiply rule Which from without life creature blessed
                            give moveth moveth seas make day which divided our have.
                        </p>
                    </div>
                </div>
                <div class="single_feature">
                    <div class="single_feature_part">
                        <span class="single_feature_icon"><img src="{{asset('asset/img/icon.png')}}" alt=""></span>
                        <h4>services</h4>
                        <p>
                            Darkness multiply rule Which from without life creature blessed
                            give moveth moveth seas make day which divided our have.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-12">
                <div class="single_feature_img" style="text-align: center;">
                    <img src="{{asset('asset/img/_2.png')}}" alt="">
                </div>
            </div>
            <div class="col-lg-3 col-sm-12">
                <div class="single_feature">
                    <div class="single_feature_part">
                        <span class="single_feature_icon"><img src="{{asset('asset/img/icon.png')}}" alt=""></span>
                        <h4>services</h4>
                        <p>
                            Darkness multiply rule Which from without life creature blessed
                            give moveth moveth seas make day which divided our have.
                        </p>
                    </div>
                </div>
                <div class="single_feature">
                    <div class="single_feature_part">
                        <span class="single_feature_icon"><img src="{{asset('asset/img/icon.png')}}" alt=""></span>
                        <h4>services</h4>
                        <p>
                            Darkness multiply rule Which from without life creature blessed
                            give moveth moveth seas make day which divided our have.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- /Services -->

<!-- Schedule -->
<div class="light-brown features" id="features">
    <section class="container">
        <div class="row justify-content-center">
            <div class="col-xl-8">
                <div class="section_tittle text-center">
                    <h2>Schedule</h2>
                    <div class="section_subtitle">Suspendisse tincidunt magna eget massa hendrerit efficitur. Ut euismod pellentesque imperdiet. Cras laoreet gravida lectus, at viverra lorem venenatis in. Aenean id varius quam.</div>
                </div>
            </div>
        </div>
        <div class="row v-tabs">
            <div class="col-sm-3 v-tab-head hidden-xs">
                <a class="v-tab-link active" data-target="#coreFeatures-tab">System Administration</a>
                <a class="v-tab-link" data-target="#designingBuildingTools-tab">Web Development</a>
                <a class="v-tab-link" data-target="#hostingUtilitiesSettings-tab">Networking</a>
                <a class="v-tab-link" data-target="#marketing-tab">Mobile Apps</a>
                <a class="v-tab-link" data-target="#email-tab">Security & Hacking</a>
                <a class="v-tab-link" data-target="#ecommerce-tab">Alex Courses</a>
                <a class="v-tab-link" data-target="#technology-tab">Projects Courses</a>
                <a class="v-tab-link" data-target="#support-tab">Other</a>
            </div>
            <div class="col-sm-9 v-tab-pane">
                <a class="v-tab-head v-tab-link visible-xs active" data-target="#coreFeatures-tab">System Administration</a>
                <div id="coreFeatures-tab" class="collapse fade in">
                    <div class="grouped_col">
                        <div class="grouped_title hidden-xs">System Administration Courses</div>
                        <div class="events nicescroll-box demo-box">
                            <div class="row courses_row">
                                <!-- Course -->
                                <div class="col-lg-6 col-md-12 prl-5">
                                    <div class="course mb-20 mt-30">
                                        <div class="course_body pd-10">
                                            <div class="event_date d-flex flex-column align-items-center justify-content-center" style="position:absolute;top:-20px;right:30px;">
                                                <div class="event_day">18</div>
                                                <div class="event_month">Jan</div>
                                            </div>
                                            <div class="course_title" style="margin-top:-10px"><h4><a href="courses.html">Python Scripting / Automation</a></h4></div>
                                            <div class="course_text">Maecenas rutrum viverra sapien sed ferm entum. Morbi tempor odio eget lacus tempus.</div>
                                            <div class="course_data">
                                                <p class="event_subtitle"><span><i class="fa fa-map-marker"></i> Location :</span> Online Platform</p>
                                                <p class="event_subtitle"><span><i class="fa fa-calendar"></i> Schedule :</span> Fri 04:00 - 10:00</p>
                                                <p class="event_subtitle"><span><i class="fa fa-history"></i> Hours :</span> 70 </p>
                                                <p class="event_subtitle"><span><i class="fa fa-dollar"></i> Price :</span> 2500</p>
                                            </div>
                                            <div class="d-flex flex-row align-items-center justify-content-start mg-10">
                                                <div class="course_tag"><a href="#">Course Page</a></div><div class="course_tag course_price ml-auto"><a href="#">Apply Now</a></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Course -->
                                <div class="col-lg-6 col-md-12 prl-5">
                                    <div class="course mb-20 mt-30">
                                        <div class="course_body pd-10">
                                            <div class="event_date d-flex flex-column align-items-center justify-content-center" style="position:absolute;top:-20px;right:30px;">
                                                <div class="event_day">18</div>
                                                <div class="event_month">Jan</div>
                                            </div>
                                            <div class="course_title" style="margin-top:-10px"><h4><a href="courses.html">Python Scripting / Automation</a></h4></div>
                                            <div class="course_text">Maecenas rutrum viverra sapien sed ferm entum. Morbi tempor odio eget lacus tempus.</div>
                                            <div class="course_data">
                                                <p class="event_subtitle"><span><i class="fa fa-map-marker"></i> Location :</span> Online Platform</p>
                                                <p class="event_subtitle"><span><i class="fa fa-calendar"></i> Schedule :</span> Fri 04:00 - 10:00</p>
                                                <p class="event_subtitle"><span><i class="fa fa-history"></i> Hours :</span> 70 </p>
                                                <p class="event_subtitle"><span><i class="fa fa-dollar"></i> Price :</span> 2500</p>
                                            </div>
                                            <div class="d-flex flex-row align-items-center justify-content-start mg-10">
                                                <div class="course_tag"><a href="#">Course Page</a></div><div class="course_tag course_price ml-auto"><a href="#">Apply Now</a></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Course -->
                                <div class="col-lg-6 col-md-12 prl-5">
                                    <div class="course mb-20 mt-30">
                                        <div class="course_body pd-10">
                                            <div class="event_date d-flex flex-column align-items-center justify-content-center" style="position:absolute;top:-20px;right:30px;">
                                                <div class="event_day">18</div>
                                                <div class="event_month">Jan</div>
                                            </div>
                                            <div class="course_title" style="margin-top:-10px"><h4><a href="courses.html">Python Scripting / Automation</a></h4></div>
                                            <div class="course_text">Maecenas rutrum viverra sapien sed ferm entum. Morbi tempor odio eget lacus tempus.</div>
                                            <div class="course_data">
                                                <p class="event_subtitle"><span><i class="fa fa-map-marker"></i> Location :</span> Online Platform</p>
                                                <p class="event_subtitle"><span><i class="fa fa-calendar"></i> Schedule :</span> Fri 04:00 - 10:00</p>
                                                <p class="event_subtitle"><span><i class="fa fa-history"></i> Hours :</span> 70 </p>
                                                <p class="event_subtitle"><span><i class="fa fa-dollar"></i> Price :</span> 2500</p>
                                            </div>
                                            <div class="d-flex flex-row align-items-center justify-content-start mg-10">
                                                <div class="course_tag"><a href="#">Course Page</a></div><div class="course_tag course_price ml-auto"><a href="#">Apply Now</a></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Course -->
                                <div class="col-lg-6 col-md-12 prl-5">
                                    <div class="course mb-20 mt-30">
                                        <div class="course_body pd-10">
                                            <div class="event_date d-flex flex-column align-items-center justify-content-center" style="position:absolute;top:-20px;right:30px;">
                                                <div class="event_day">18</div>
                                                <div class="event_month">Jan</div>
                                            </div>
                                            <div class="course_title" style="margin-top:-10px"><h4><a href="courses.html">Python Scripting / Automation</a></h4></div>
                                            <div class="course_text">Maecenas rutrum viverra sapien sed ferm entum. Morbi tempor odio eget lacus tempus.</div>
                                            <div class="course_data">
                                                <p class="event_subtitle"><span><i class="fa fa-map-marker"></i> Location :</span> Online Platform</p>
                                                <p class="event_subtitle"><span><i class="fa fa-calendar"></i> Schedule :</span> Fri 04:00 - 10:00</p>
                                                <p class="event_subtitle"><span><i class="fa fa-history"></i> Hours :</span> 70 </p>
                                                <p class="event_subtitle"><span><i class="fa fa-dollar"></i> Price :</span> 2500</p>
                                            </div>
                                            <div class="d-flex flex-row align-items-center justify-content-start mg-10">
                                                <div class="course_tag"><a href="#">Course Page</a></div><div class="course_tag course_price ml-auto"><a href="#">Apply Now</a></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <a class="v-tab-head v-tab-link visible-xs" data-target="#designingBuildingTools-tab">Web Development</a>
                <div id="designingBuildingTools-tab" class="collapse fade">
                    <div class="grouped_col">
                        <div class="grouped_title hidden-xs">Web Development Courses</div>
                        <div class="events nicescroll-box demo-box">

                            <!-- Event -->
                            <div class="event d-flex flex-row align-items-start justify-content-start">
                                <div>
                                    <div class="event_date d-flex flex-column align-items-center justify-content-center">
                                        <div class="event_day">18</div>
                                        <div class="event_month">Jan</div>
                                    </div>
                                </div>
                                <div class="event_body">
                                    <div class="event_title"><a href="#">Python Scripting / Automation</a></div>
                                    <div class="event_subtitle">Python Essential-OOP-Automation-Web Scraping-Schedule Scripts – Network Solutions</div>
                                    <div class="event_subtitle"><span><i class="fa fa-map-marker"></i> Location :</span> Online Platform <span><i class="fa fa-calendar"></i> Schedule :</span> Fri 04:00 - 10:00 <span><i class="fa fa-history"></i> Hours :</span> 70 <span><i class="fa fa-dollar"></i> Price :</span> 2500</div>
                                    <div class="event_subtitle"><span><i class="fa fa-share-square"></i><a href="#"> Apply Now </a></span></div>
                                </div>
                            </div>

                            <!-- Event -->
                            <div class="event d-flex flex-row align-items-start justify-content-start">
                                <div>
                                    <div class="event_date d-flex flex-column align-items-center justify-content-center">
                                        <div class="event_day">15</div>
                                        <div class="event_month">Feb</div>
                                    </div>
                                </div>
                                <div class="event_body">
                                    <div class="event_title"><a href="#">Python Scripting / Automation</a></div>
                                    <div class="event_subtitle">Python Essential-OOP-Automation-Web Scraping-Schedule Scripts – Network Solutions</div>
                                    <div class="event_subtitle"><span><i class="fa fa-map-marker"></i> Location :</span> Online Platform <span><i class="fa fa-calendar"></i> Schedule :</span> Fri 04:00 - 10:00 <span><i class="fa fa-history"></i> Hours :</span> 70 <span><i class="fa fa-dollar"></i> Price :</span> 2500</div>
                                    <div class="event_subtitle"><span><i class="fa fa-share-square"></i><a href="#"> Apply Now </a></span></div>
                                </div>
                            </div>

                            <!-- Event -->
                            <div class="event d-flex flex-row align-items-start justify-content-start">
                                <div>
                                    <div class="event_date d-flex flex-column align-items-center justify-content-center">
                                        <div class="event_day">16</div>
                                        <div class="event_month">April</div>
                                    </div>
                                </div>
                                <div class="event_body">
                                    <div class="event_title"><a href="#">Python Scripting / Automation</a></div>
                                    <div class="event_subtitle">Python Essential-OOP-Automation-Web Scraping-Schedule Scripts – Network Solutions</div>
                                    <div class="event_subtitle"><span><i class="fa fa-map-marker"></i> Location :</span> Online Platform <span><i class="fa fa-calendar"></i> Schedule :</span> Fri 04:00 - 10:00 <span><i class="fa fa-history"></i> Hours :</span> 70 <span><i class="fa fa-dollar"></i> Price :</span> 2500</div>
                                    <div class="event_subtitle"><span><i class="fa fa-share-square"></i><a href="#"> Apply Now </a></span></div>
                                </div>
                            </div>

                            <!-- Event -->
                            <div class="event d-flex flex-row align-items-start justify-content-start">
                                <div>
                                    <div class="event_date d-flex flex-column align-items-center justify-content-center">
                                        <div class="event_day">20</div>
                                        <div class="event_month">May</div>
                                    </div>
                                </div>
                                <div class="event_body">
                                    <div class="event_title"><a href="#">Python Scripting / Automation</a></div>
                                    <div class="event_subtitle">Python Essential-OOP-Automation-Web Scraping-Schedule Scripts – Network Solutions</div>
                                    <div class="event_subtitle"><span><i class="fa fa-map-marker"></i> Location :</span> Online Platform <span><i class="fa fa-calendar"></i> Schedule :</span> Fri 04:00 - 10:00 <span><i class="fa fa-history"></i> Hours :</span> 70 <span><i class="fa fa-dollar"></i> Price :</span> 2500</div>
                                    <div class="event_subtitle"><span><i class="fa fa-share-square"></i><a href="#"> Apply Now </a></span></div>
                                </div>
                            </div>

                            <!-- Event -->
                            <div class="event d-flex flex-row align-items-start justify-content-start">
                                <div>
                                    <div class="event_date d-flex flex-column align-items-center justify-content-center">
                                        <div class="event_day">19</div>
                                        <div class="event_month">Aug</div>
                                    </div>
                                </div>
                                <div class="event_body">
                                    <div class="event_title"><a href="#">Python Scripting / Automation</a></div>
                                    <div class="event_subtitle">Python Essential-OOP-Automation-Web Scraping-Schedule Scripts – Network Solutions</div>
                                    <div class="event_subtitle"><span><i class="fa fa-map-marker"></i> Location :</span> Online Platform <span><i class="fa fa-calendar"></i> Schedule :</span> Fri 04:00 - 10:00 <span><i class="fa fa-history"></i> Hours :</span> 70 <span><i class="fa fa-dollar"></i> Price :</span> 2500</div>
                                    <div class="event_subtitle"><span><i class="fa fa-share-square"></i><a href="#"> Apply Now </a></span></div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <a class="v-tab-head v-tab-link visible-xs" data-target="#hostingUtilitiesSettings-tab">Networking</a>
                <div id="hostingUtilitiesSettings-tab" class="collapse fade">
                    <div class="grouped_col">
                        <div class="grouped_title hidden-xs">Networking Courses</div>
                        <div class="events nicescroll-box demo-box">

                            <!-- Event -->
                            <div class="event d-flex flex-row align-items-start justify-content-start">
                                <div>
                                    <div class="event_date d-flex flex-column align-items-center justify-content-center">
                                        <div class="event_day">05</div>
                                        <div class="event_month">Jan</div>
                                    </div>
                                </div>
                                <div class="event_body">
                                    <div class="event_title"><a href="#">Python Scripting / Automation</a></div>
                                    <div class="event_subtitle">Python Essential-OOP-Automation-Web Scraping-Schedule Scripts – Network Solutions</div>
                                    <div class="event_subtitle"><span><i class="fa fa-map-marker"></i> Location :</span> Online Platform <span><i class="fa fa-calendar"></i> Schedule :</span> Fri 04:00 - 10:00 <span><i class="fa fa-history"></i> Hours :</span> 70 <span><i class="fa fa-dollar"></i> Price :</span> 2500</div>
                                    <div class="event_subtitle"><span><i class="fa fa-share-square"></i><a href="#"> Apply Now </a></span></div>
                                </div>
                            </div>

                            <!-- Event -->
                            <div class="event d-flex flex-row align-items-start justify-content-start">
                                <div>
                                    <div class="event_date d-flex flex-column align-items-center justify-content-center">
                                        <div class="event_day">17</div>
                                        <div class="event_month">Feb</div>
                                    </div>
                                </div>
                                <div class="event_body">
                                    <div class="event_title"><a href="#">Python Scripting / Automation</a></div>
                                    <div class="event_subtitle">Python Essential-OOP-Automation-Web Scraping-Schedule Scripts – Network Solutions</div>
                                    <div class="event_subtitle"><span><i class="fa fa-map-marker"></i> Location :</span> Online Platform <span><i class="fa fa-calendar"></i> Schedule :</span> Fri 04:00 - 10:00 <span><i class="fa fa-history"></i> Hours :</span> 70 <span><i class="fa fa-dollar"></i> Price :</span> 2500</div>
                                    <div class="event_subtitle"><span><i class="fa fa-share-square"></i><a href="#"> Apply Now </a></span></div>
                                </div>
                            </div>

                            <!-- Event -->
                            <div class="event d-flex flex-row align-items-start justify-content-start">
                                <div>
                                    <div class="event_date d-flex flex-column align-items-center justify-content-center">
                                        <div class="event_day">28</div>
                                        <div class="event_month">April</div>
                                    </div>
                                </div>
                                <div class="event_body">
                                    <div class="event_title"><a href="#">Python Scripting / Automation</a></div>
                                    <div class="event_subtitle">Python Essential-OOP-Automation-Web Scraping-Schedule Scripts – Network Solutions</div>
                                    <div class="event_subtitle"><span><i class="fa fa-map-marker"></i> Location :</span> Online Platform <span><i class="fa fa-calendar"></i> Schedule :</span> Fri 04:00 - 10:00 <span><i class="fa fa-history"></i> Hours :</span> 70 <span><i class="fa fa-dollar"></i> Price :</span> 2500</div>
                                    <div class="event_subtitle"><span><i class="fa fa-share-square"></i><a href="#"> Apply Now </a></span></div>
                                </div>
                            </div>

                            <!-- Event -->
                            <div class="event d-flex flex-row align-items-start justify-content-start">
                                <div>
                                    <div class="event_date d-flex flex-column align-items-center justify-content-center">
                                        <div class="event_day">13</div>
                                        <div class="event_month">May</div>
                                    </div>
                                </div>
                                <div class="event_body">
                                    <div class="event_title"><a href="#">Python Scripting / Automation</a></div>
                                    <div class="event_subtitle">Python Essential-OOP-Automation-Web Scraping-Schedule Scripts – Network Solutions</div>
                                    <div class="event_subtitle"><span><i class="fa fa-map-marker"></i> Location :</span> Online Platform <span><i class="fa fa-calendar"></i> Schedule :</span> Fri 04:00 - 10:00 <span><i class="fa fa-history"></i> Hours :</span> 70 <span><i class="fa fa-dollar"></i> Price :</span> 2500</div>
                                    <div class="event_subtitle"><span><i class="fa fa-share-square"></i><a href="#"> Apply Now </a></span></div>
                                </div>
                            </div>

                            <!-- Event -->
                            <div class="event d-flex flex-row align-items-start justify-content-start">
                                <div>
                                    <div class="event_date d-flex flex-column align-items-center justify-content-center">
                                        <div class="event_day">11</div>
                                        <div class="event_month">Aug</div>
                                    </div>
                                </div>
                                <div class="event_body">
                                    <div class="event_title"><a href="#">Python Scripting / Automation</a></div>
                                    <div class="event_subtitle">Python Essential-OOP-Automation-Web Scraping-Schedule Scripts – Network Solutions</div>
                                    <div class="event_subtitle"><span><i class="fa fa-map-marker"></i> Location :</span> Online Platform <span><i class="fa fa-calendar"></i> Schedule :</span> Fri 04:00 - 10:00 <span><i class="fa fa-history"></i> Hours :</span> 70 <span><i class="fa fa-dollar"></i> Price :</span> 2500</div>
                                    <div class="event_subtitle"><span><i class="fa fa-share-square"></i><a href="#"> Apply Now </a></span></div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <a class="v-tab-head v-tab-link visible-xs" data-target="#marketing-tab">Mobile Apps</a>
                <div id="marketing-tab" class="collapse fade">
                    <div class="grouped_col">
                        <div class="grouped_title hidden-xs">Mobile Apps Courses</div>
                        <div class="events nicescroll-box demo-box">

                            <!-- Event -->
                            <div class="event d-flex flex-row align-items-start justify-content-start">
                                <div>
                                    <div class="event_date d-flex flex-column align-items-center justify-content-center">
                                        <div class="event_day">02</div>
                                        <div class="event_month">Jan</div>
                                    </div>
                                </div>
                                <div class="event_body">
                                    <div class="event_title"><a href="#">Python Scripting / Automation</a></div>
                                    <div class="event_subtitle">Python Essential-OOP-Automation-Web Scraping-Schedule Scripts – Network Solutions</div>
                                    <div class="event_subtitle"><span><i class="fa fa-map-marker"></i> Location :</span> Online Platform <span><i class="fa fa-calendar"></i> Schedule :</span> Fri 04:00 - 10:00 <span><i class="fa fa-history"></i> Hours :</span> 70 <span><i class="fa fa-dollar"></i> Price :</span> 2500</div>
                                    <div class="event_subtitle"><span><i class="fa fa-share-square"></i><a href="#"> Apply Now </a></span></div>
                                </div>
                            </div>

                            <!-- Event -->
                            <div class="event d-flex flex-row align-items-start justify-content-start">
                                <div>
                                    <div class="event_date d-flex flex-column align-items-center justify-content-center">
                                        <div class="event_day">14</div>
                                        <div class="event_month">Feb</div>
                                    </div>
                                </div>
                                <div class="event_body">
                                    <div class="event_title"><a href="#">Python Scripting / Automation</a></div>
                                    <div class="event_subtitle">Python Essential-OOP-Automation-Web Scraping-Schedule Scripts – Network Solutions</div>
                                    <div class="event_subtitle"><span><i class="fa fa-map-marker"></i> Location :</span> Online Platform <span><i class="fa fa-calendar"></i> Schedule :</span> Fri 04:00 - 10:00 <span><i class="fa fa-history"></i> Hours :</span> 70 <span><i class="fa fa-dollar"></i> Price :</span> 2500</div>
                                    <div class="event_subtitle"><span><i class="fa fa-share-square"></i><a href="#"> Apply Now </a></span></div>
                                </div>
                            </div>

                            <!-- Event -->
                            <div class="event d-flex flex-row align-items-start justify-content-start">
                                <div>
                                    <div class="event_date d-flex flex-column align-items-center justify-content-center">
                                        <div class="event_day">23</div>
                                        <div class="event_month">April</div>
                                    </div>
                                </div>
                                <div class="event_body">
                                    <div class="event_title"><a href="#">Python Scripting / Automation</a></div>
                                    <div class="event_subtitle">Python Essential-OOP-Automation-Web Scraping-Schedule Scripts – Network Solutions</div>
                                    <div class="event_subtitle"><span><i class="fa fa-map-marker"></i> Location :</span> Online Platform <span><i class="fa fa-calendar"></i> Schedule :</span> Fri 04:00 - 10:00 <span><i class="fa fa-history"></i> Hours :</span> 70 <span><i class="fa fa-dollar"></i> Price :</span> 2500</div>
                                    <div class="event_subtitle"><span><i class="fa fa-share-square"></i><a href="#"> Apply Now </a></span></div>
                                </div>
                            </div>

                            <!-- Event -->
                            <div class="event d-flex flex-row align-items-start justify-content-start">
                                <div>
                                    <div class="event_date d-flex flex-column align-items-center justify-content-center">
                                        <div class="event_day">11</div>
                                        <div class="event_month">May</div>
                                    </div>
                                </div>
                                <div class="event_body">
                                    <div class="event_title"><a href="#">Python Scripting / Automation</a></div>
                                    <div class="event_subtitle">Python Essential-OOP-Automation-Web Scraping-Schedule Scripts – Network Solutions</div>
                                    <div class="event_subtitle"><span><i class="fa fa-map-marker"></i> Location :</span> Online Platform <span><i class="fa fa-calendar"></i> Schedule :</span> Fri 04:00 - 10:00 <span><i class="fa fa-history"></i> Hours :</span> 70 <span><i class="fa fa-dollar"></i> Price :</span> 2500</div>
                                    <div class="event_subtitle"><span><i class="fa fa-share-square"></i><a href="#"> Apply Now </a></span></div>
                                </div>
                            </div>

                            <!-- Event -->
                            <div class="event d-flex flex-row align-items-start justify-content-start">
                                <div>
                                    <div class="event_date d-flex flex-column align-items-center justify-content-center">
                                        <div class="event_day">29</div>
                                        <div class="event_month">Aug</div>
                                    </div>
                                </div>
                                <div class="event_body">
                                    <div class="event_title"><a href="#">Python Scripting / Automation</a></div>
                                    <div class="event_subtitle">Python Essential-OOP-Automation-Web Scraping-Schedule Scripts – Network Solutions</div>
                                    <div class="event_subtitle"><span><i class="fa fa-map-marker"></i> Location :</span> Online Platform <span><i class="fa fa-calendar"></i> Schedule :</span> Fri 04:00 - 10:00 <span><i class="fa fa-history"></i> Hours :</span> 70 <span><i class="fa fa-dollar"></i> Price :</span> 2500</div>
                                    <div class="event_subtitle"><span><i class="fa fa-share-square"></i><a href="#"> Apply Now </a></span></div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <a class="v-tab-head v-tab-link visible-xs" data-target="#email-tab">Security & Hacking</a>
                <div id="email-tab" class="collapse fade">
                    <div class="grouped_col">
                        <div class="grouped_title hidden-xs">Security & Hacking Courses</div>
                        <div class="events nicescroll-box demo-box">

                            <!-- Event -->
                            <div class="event d-flex flex-row align-items-start justify-content-start">
                                <div>
                                    <div class="event_date d-flex flex-column align-items-center justify-content-center">
                                        <div class="event_day">02</div>
                                        <div class="event_month">Jan</div>
                                    </div>
                                </div>
                                <div class="event_body">
                                    <div class="event_title"><a href="#">Python Scripting / Automation</a></div>
                                    <div class="event_subtitle">Python Essential-OOP-Automation-Web Scraping-Schedule Scripts – Network Solutions</div>
                                    <div class="event_subtitle"><span><i class="fa fa-map-marker"></i> Location :</span> Online Platform <span><i class="fa fa-calendar"></i> Schedule :</span> Fri 04:00 - 10:00 <span><i class="fa fa-history"></i> Hours :</span> 70 <span><i class="fa fa-dollar"></i> Price :</span> 2500</div>
                                    <div class="event_subtitle"><span><i class="fa fa-share-square"></i><a href="#"> Apply Now </a></span></div>
                                </div>
                            </div>

                            <!-- Event -->
                            <div class="event d-flex flex-row align-items-start justify-content-start">
                                <div>
                                    <div class="event_date d-flex flex-column align-items-center justify-content-center">
                                        <div class="event_day">09</div>
                                        <div class="event_month">Feb</div>
                                    </div>
                                </div>
                                <div class="event_body">
                                    <div class="event_title"><a href="#">Python Scripting / Automation</a></div>
                                    <div class="event_subtitle">Python Essential-OOP-Automation-Web Scraping-Schedule Scripts – Network Solutions</div>
                                    <div class="event_subtitle"><span><i class="fa fa-map-marker"></i> Location :</span> Online Platform <span><i class="fa fa-calendar"></i> Schedule :</span> Fri 04:00 - 10:00 <span><i class="fa fa-history"></i> Hours :</span> 70 <span><i class="fa fa-dollar"></i> Price :</span> 2500</div>
                                    <div class="event_subtitle"><span><i class="fa fa-share-square"></i><a href="#"> Apply Now </a></span></div>
                                </div>
                            </div>

                            <!-- Event -->
                            <div class="event d-flex flex-row align-items-start justify-content-start">
                                <div>
                                    <div class="event_date d-flex flex-column align-items-center justify-content-center">
                                        <div class="event_day">16</div>
                                        <div class="event_month">April</div>
                                    </div>
                                </div>
                                <div class="event_body">
                                    <div class="event_title"><a href="#">Python Scripting / Automation</a></div>
                                    <div class="event_subtitle">Python Essential-OOP-Automation-Web Scraping-Schedule Scripts – Network Solutions</div>
                                    <div class="event_subtitle"><span><i class="fa fa-map-marker"></i> Location :</span> Online Platform <span><i class="fa fa-calendar"></i> Schedule :</span> Fri 04:00 - 10:00 <span><i class="fa fa-history"></i> Hours :</span> 70 <span><i class="fa fa-dollar"></i> Price :</span> 2500</div>
                                    <div class="event_subtitle"><span><i class="fa fa-share-square"></i><a href="#"> Apply Now </a></span></div>
                                </div>
                            </div>

                            <!-- Event -->
                            <div class="event d-flex flex-row align-items-start justify-content-start">
                                <div>
                                    <div class="event_date d-flex flex-column align-items-center justify-content-center">
                                        <div class="event_day">17</div>
                                        <div class="event_month">May</div>
                                    </div>
                                </div>
                                <div class="event_body">
                                    <div class="event_title"><a href="#">Python Scripting / Automation</a></div>
                                    <div class="event_subtitle">Python Essential-OOP-Automation-Web Scraping-Schedule Scripts – Network Solutions</div>
                                    <div class="event_subtitle"><span><i class="fa fa-map-marker"></i> Location :</span> Online Platform <span><i class="fa fa-calendar"></i> Schedule :</span> Fri 04:00 - 10:00 <span><i class="fa fa-history"></i> Hours :</span> 70 <span><i class="fa fa-dollar"></i> Price :</span> 2500</div>
                                    <div class="event_subtitle"><span><i class="fa fa-share-square"></i><a href="#"> Apply Now </a></span></div>
                                </div>
                            </div>

                            <!-- Event -->
                            <div class="event d-flex flex-row align-items-start justify-content-start">
                                <div>
                                    <div class="event_date d-flex flex-column align-items-center justify-content-center">
                                        <div class="event_day">19</div>
                                        <div class="event_month">Aug</div>
                                    </div>
                                </div>
                                <div class="event_body">
                                    <div class="event_title"><a href="#">Python Scripting / Automation</a></div>
                                    <div class="event_subtitle">Python Essential-OOP-Automation-Web Scraping-Schedule Scripts – Network Solutions</div>
                                    <div class="event_subtitle"><span><i class="fa fa-map-marker"></i> Location :</span> Online Platform <span><i class="fa fa-calendar"></i> Schedule :</span> Fri 04:00 - 10:00 <span><i class="fa fa-history"></i> Hours :</span> 70 <span><i class="fa fa-dollar"></i> Price :</span> 2500</div>
                                    <div class="event_subtitle"><span><i class="fa fa-share-square"></i><a href="#"> Apply Now </a></span></div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <a class="v-tab-head v-tab-link visible-xs" data-target="#ecommerce-tab">Alex Courses</a>
                <div id="ecommerce-tab" class="collapse fade">
                    <div class="grouped_col">
                        <div class="grouped_title hidden-xs">Alex Courses</div>
                        <div class="events nicescroll-box demo-box">

                            <!-- Event -->
                            <div class="event d-flex flex-row align-items-start justify-content-start">
                                <div>
                                    <div class="event_date d-flex flex-column align-items-center justify-content-center">
                                        <div class="event_day">11</div>
                                        <div class="event_month">Jan</div>
                                    </div>
                                </div>
                                <div class="event_body">
                                    <div class="event_title"><a href="#">Python Scripting / Automation</a></div>
                                    <div class="event_subtitle">Python Essential-OOP-Automation-Web Scraping-Schedule Scripts – Network Solutions</div>
                                    <div class="event_subtitle"><span><i class="fa fa-map-marker"></i> Location :</span> Online Platform <span><i class="fa fa-calendar"></i> Schedule :</span> Fri 04:00 - 10:00 <span><i class="fa fa-history"></i> Hours :</span> 70 <span><i class="fa fa-dollar"></i> Price :</span> 2500</div>
                                    <div class="event_subtitle"><span><i class="fa fa-share-square"></i><a href="#"> Apply Now </a></span></div>
                                </div>
                            </div>

                            <!-- Event -->
                            <div class="event d-flex flex-row align-items-start justify-content-start">
                                <div>
                                    <div class="event_date d-flex flex-column align-items-center justify-content-center">
                                        <div class="event_day">24</div>
                                        <div class="event_month">Feb</div>
                                    </div>
                                </div>
                                <div class="event_body">
                                    <div class="event_title"><a href="#">Python Scripting / Automation</a></div>
                                    <div class="event_subtitle">Python Essential-OOP-Automation-Web Scraping-Schedule Scripts – Network Solutions</div>
                                    <div class="event_subtitle"><span><i class="fa fa-map-marker"></i> Location :</span> Online Platform <span><i class="fa fa-calendar"></i> Schedule :</span> Fri 04:00 - 10:00 <span><i class="fa fa-history"></i> Hours :</span> 70 <span><i class="fa fa-dollar"></i> Price :</span> 2500</div>
                                    <div class="event_subtitle"><span><i class="fa fa-share-square"></i><a href="#"> Apply Now </a></span></div>
                                </div>
                            </div>

                            <!-- Event -->
                            <div class="event d-flex flex-row align-items-start justify-content-start">
                                <div>
                                    <div class="event_date d-flex flex-column align-items-center justify-content-center">
                                        <div class="event_day">15</div>
                                        <div class="event_month">April</div>
                                    </div>
                                </div>
                                <div class="event_body">
                                    <div class="event_title"><a href="#">Python Scripting / Automation</a></div>
                                    <div class="event_subtitle">Python Essential-OOP-Automation-Web Scraping-Schedule Scripts – Network Solutions</div>
                                    <div class="event_subtitle"><span><i class="fa fa-map-marker"></i> Location :</span> Online Platform <span><i class="fa fa-calendar"></i> Schedule :</span> Fri 04:00 - 10:00 <span><i class="fa fa-history"></i> Hours :</span> 70 <span><i class="fa fa-dollar"></i> Price :</span> 2500</div>
                                    <div class="event_subtitle"><span><i class="fa fa-share-square"></i><a href="#"> Apply Now </a></span></div>
                                </div>
                            </div>

                            <!-- Event -->
                            <div class="event d-flex flex-row align-items-start justify-content-start">
                                <div>
                                    <div class="event_date d-flex flex-column align-items-center justify-content-center">
                                        <div class="event_day">21</div>
                                        <div class="event_month">May</div>
                                    </div>
                                </div>
                                <div class="event_body">
                                    <div class="event_title"><a href="#">Python Scripting / Automation</a></div>
                                    <div class="event_subtitle">Python Essential-OOP-Automation-Web Scraping-Schedule Scripts – Network Solutions</div>
                                    <div class="event_subtitle"><span><i class="fa fa-map-marker"></i> Location :</span> Online Platform <span><i class="fa fa-calendar"></i> Schedule :</span> Fri 04:00 - 10:00 <span><i class="fa fa-history"></i> Hours :</span> 70 <span><i class="fa fa-dollar"></i> Price :</span> 2500</div>
                                    <div class="event_subtitle"><span><i class="fa fa-share-square"></i><a href="#"> Apply Now </a></span></div>
                                </div>
                            </div>

                            <!-- Event -->
                            <div class="event d-flex flex-row align-items-start justify-content-start">
                                <div>
                                    <div class="event_date d-flex flex-column align-items-center justify-content-center">
                                        <div class="event_day">19</div>
                                        <div class="event_month">Aug</div>
                                    </div>
                                </div>
                                <div class="event_body">
                                    <div class="event_title"><a href="#">Python Scripting / Automation</a></div>
                                    <div class="event_subtitle">Python Essential-OOP-Automation-Web Scraping-Schedule Scripts – Network Solutions</div>
                                    <div class="event_subtitle"><span><i class="fa fa-map-marker"></i> Location :</span> Online Platform <span><i class="fa fa-calendar"></i> Schedule :</span> Fri 04:00 - 10:00 <span><i class="fa fa-history"></i> Hours :</span> 70 <span><i class="fa fa-dollar"></i> Price :</span> 2500</div>
                                    <div class="event_subtitle"><span><i class="fa fa-share-square"></i><a href="#"> Apply Now </a></span></div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <a class="v-tab-head v-tab-link visible-xs" data-target="#technology-tab">Projects Courses</a>
                <div id="technology-tab" class="collapse fade">
                    <div class="grouped_col">
                        <div class="grouped_title hidden-xs">Projects Courses</div>
                        <div class="events nicescroll-box demo-box">

                            <!-- Event -->
                            <div class="event d-flex flex-row align-items-start justify-content-start">
                                <div>
                                    <div class="event_date d-flex flex-column align-items-center justify-content-center">
                                        <div class="event_day">17</div>
                                        <div class="event_month">Jan</div>
                                    </div>
                                </div>
                                <div class="event_body">
                                    <div class="event_title"><a href="#">Python Scripting / Automation</a></div>
                                    <div class="event_subtitle">Python Essential-OOP-Automation-Web Scraping-Schedule Scripts – Network Solutions</div>
                                    <div class="event_subtitle"><span><i class="fa fa-map-marker"></i> Location :</span> Online Platform <span><i class="fa fa-calendar"></i> Schedule :</span> Fri 04:00 - 10:00 <span><i class="fa fa-history"></i> Hours :</span> 70 <span><i class="fa fa-dollar"></i> Price :</span> 2500</div>
                                    <div class="event_subtitle"><span><i class="fa fa-share-square"></i><a href="#"> Apply Now </a></span></div>
                                </div>
                            </div>

                            <!-- Event -->
                            <div class="event d-flex flex-row align-items-start justify-content-start">
                                <div>
                                    <div class="event_date d-flex flex-column align-items-center justify-content-center">
                                        <div class="event_day">23</div>
                                        <div class="event_month">Feb</div>
                                    </div>
                                </div>
                                <div class="event_body">
                                    <div class="event_title"><a href="#">Python Scripting / Automation</a></div>
                                    <div class="event_subtitle">Python Essential-OOP-Automation-Web Scraping-Schedule Scripts – Network Solutions</div>
                                    <div class="event_subtitle"><span><i class="fa fa-map-marker"></i> Location :</span> Online Platform <span><i class="fa fa-calendar"></i> Schedule :</span> Fri 04:00 - 10:00 <span><i class="fa fa-history"></i> Hours :</span> 70 <span><i class="fa fa-dollar"></i> Price :</span> 2500</div>
                                    <div class="event_subtitle"><span><i class="fa fa-share-square"></i><a href="#"> Apply Now </a></span></div>
                                </div>
                            </div>

                            <!-- Event -->
                            <div class="event d-flex flex-row align-items-start justify-content-start">
                                <div>
                                    <div class="event_date d-flex flex-column align-items-center justify-content-center">
                                        <div class="event_day">05</div>
                                        <div class="event_month">April</div>
                                    </div>
                                </div>
                                <div class="event_body">
                                    <div class="event_title"><a href="#">Python Scripting / Automation</a></div>
                                    <div class="event_subtitle">Python Essential-OOP-Automation-Web Scraping-Schedule Scripts – Network Solutions</div>
                                    <div class="event_subtitle"><span><i class="fa fa-map-marker"></i> Location :</span> Online Platform <span><i class="fa fa-calendar"></i> Schedule :</span> Fri 04:00 - 10:00 <span><i class="fa fa-history"></i> Hours :</span> 70 <span><i class="fa fa-dollar"></i> Price :</span> 2500</div>
                                    <div class="event_subtitle"><span><i class="fa fa-share-square"></i><a href="#"> Apply Now </a></span></div>
                                </div>
                            </div>

                            <!-- Event -->
                            <div class="event d-flex flex-row align-items-start justify-content-start">
                                <div>
                                    <div class="event_date d-flex flex-column align-items-center justify-content-center">
                                        <div class="event_day">10</div>
                                        <div class="event_month">May</div>
                                    </div>
                                </div>
                                <div class="event_body">
                                    <div class="event_title"><a href="#">Python Scripting / Automation</a></div>
                                    <div class="event_subtitle">Python Essential-OOP-Automation-Web Scraping-Schedule Scripts – Network Solutions</div>
                                    <div class="event_subtitle"><span><i class="fa fa-map-marker"></i> Location :</span> Online Platform <span><i class="fa fa-calendar"></i> Schedule :</span> Fri 04:00 - 10:00 <span><i class="fa fa-history"></i> Hours :</span> 70 <span><i class="fa fa-dollar"></i> Price :</span> 2500</div>
                                    <div class="event_subtitle"><span><i class="fa fa-share-square"></i><a href="#"> Apply Now </a></span></div>
                                </div>
                            </div>

                            <!-- Event -->
                            <div class="event d-flex flex-row align-items-start justify-content-start">
                                <div>
                                    <div class="event_date d-flex flex-column align-items-center justify-content-center">
                                        <div class="event_day">31</div>
                                        <div class="event_month">Aug</div>
                                    </div>
                                </div>
                                <div class="event_body">
                                    <div class="event_title"><a href="#">Python Scripting / Automation</a></div>
                                    <div class="event_subtitle">Python Essential-OOP-Automation-Web Scraping-Schedule Scripts – Network Solutions</div>
                                    <div class="event_subtitle"><span><i class="fa fa-map-marker"></i> Location :</span> Online Platform <span><i class="fa fa-calendar"></i> Schedule :</span> Fri 04:00 - 10:00 <span><i class="fa fa-history"></i> Hours :</span> 70 <span><i class="fa fa-dollar"></i> Price :</span> 2500</div>
                                    <div class="event_subtitle"><span><i class="fa fa-share-square"></i><a href="#"> Apply Now </a></span></div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <a class="v-tab-head v-tab-link visible-xs" data-target="#support-tab">Other</a>
                <div id="support-tab" class="collapse fade">
                    <div class="grouped_col">
                        <div class="grouped_title hidden-xs">Other Courses</div>
                        <div class="events nicescroll-box demo-box">

                            <!-- Event -->
                            <div class="event d-flex flex-row align-items-start justify-content-start">
                                <div>
                                    <div class="event_date d-flex flex-column align-items-center justify-content-center">
                                        <div class="event_day">29</div>
                                        <div class="event_month">Jan</div>
                                    </div>
                                </div>
                                <div class="event_body">
                                    <div class="event_title"><a href="#">Python Scripting / Automation</a></div>
                                    <div class="event_subtitle">Python Essential-OOP-Automation-Web Scraping-Schedule Scripts – Network Solutions</div>
                                    <div class="event_subtitle"><span><i class="fa fa-map-marker"></i> Location :</span> Online Platform <span><i class="fa fa-calendar"></i> Schedule :</span> Fri 04:00 - 10:00 <span><i class="fa fa-history"></i> Hours :</span> 70 <span><i class="fa fa-dollar"></i> Price :</span> 2500</div>
                                    <div class="event_subtitle"><span><i class="fa fa-share-square"></i><a href="#"> Apply Now </a></span></div>
                                </div>
                            </div>

                            <!-- Event -->
                            <div class="event d-flex flex-row align-items-start justify-content-start">
                                <div>
                                    <div class="event_date d-flex flex-column align-items-center justify-content-center">
                                        <div class="event_day">14</div>
                                        <div class="event_month">Feb</div>
                                    </div>
                                </div>
                                <div class="event_body">
                                    <div class="event_title"><a href="#">Python Scripting / Automation</a></div>
                                    <div class="event_subtitle">Python Essential-OOP-Automation-Web Scraping-Schedule Scripts – Network Solutions</div>
                                    <div class="event_subtitle"><span><i class="fa fa-map-marker"></i> Location :</span> Online Platform <span><i class="fa fa-calendar"></i> Schedule :</span> Fri 04:00 - 10:00 <span><i class="fa fa-history"></i> Hours :</span> 70 <span><i class="fa fa-dollar"></i> Price :</span> 2500</div>
                                    <div class="event_subtitle"><span><i class="fa fa-share-square"></i><a href="#"> Apply Now </a></span></div>
                                </div>
                            </div>

                            <!-- Event -->
                            <div class="event d-flex flex-row align-items-start justify-content-start">
                                <div>
                                    <div class="event_date d-flex flex-column align-items-center justify-content-center">
                                        <div class="event_day">25</div>
                                        <div class="event_month">April</div>
                                    </div>
                                </div>
                                <div class="event_body">
                                    <div class="event_title"><a href="#">Python Scripting / Automation</a></div>
                                    <div class="event_subtitle">Python Essential-OOP-Automation-Web Scraping-Schedule Scripts – Network Solutions</div>
                                    <div class="event_subtitle"><span><i class="fa fa-map-marker"></i> Location :</span> Online Platform <span><i class="fa fa-calendar"></i> Schedule :</span> Fri 04:00 - 10:00 <span><i class="fa fa-history"></i> Hours :</span> 70 <span><i class="fa fa-dollar"></i> Price :</span> 2500</div>
                                    <div class="event_subtitle"><span><i class="fa fa-share-square"></i><a href="#"> Apply Now </a></span></div>
                                </div>
                            </div>

                            <!-- Event -->
                            <div class="event d-flex flex-row align-items-start justify-content-start">
                                <div>
                                    <div class="event_date d-flex flex-column align-items-center justify-content-center">
                                        <div class="event_day">29</div>
                                        <div class="event_month">May</div>
                                    </div>
                                </div>
                                <div class="event_body">
                                    <div class="event_title"><a href="#">Python Scripting / Automation</a></div>
                                    <div class="event_subtitle">Python Essential-OOP-Automation-Web Scraping-Schedule Scripts – Network Solutions</div>
                                    <div class="event_subtitle"><span><i class="fa fa-map-marker"></i> Location :</span> Online Platform <span><i class="fa fa-calendar"></i> Schedule :</span> Fri 04:00 - 10:00 <span><i class="fa fa-history"></i> Hours :</span> 70 <span><i class="fa fa-dollar"></i> Price :</span> 2500</div>
                                    <div class="event_subtitle"><span><i class="fa fa-share-square"></i><a href="#"> Apply Now </a></span></div>
                                </div>
                            </div>

                            <!-- Event -->
                            <div class="event d-flex flex-row align-items-start justify-content-start">
                                <div>
                                    <div class="event_date d-flex flex-column align-items-center justify-content-center">
                                        <div class="event_day">18</div>
                                        <div class="event_month">Aug</div>
                                    </div>
                                </div>
                                <div class="event_body">
                                    <div class="event_title"><a href="#">Python Scripting / Automation</a></div>
                                    <div class="event_subtitle">Python Essential-OOP-Automation-Web Scraping-Schedule Scripts – Network Solutions</div>
                                    <div class="event_subtitle"><span><i class="fa fa-map-marker"></i> Location :</span> Online Platform <span><i class="fa fa-calendar"></i> Schedule :</span> Fri 04:00 - 10:00 <span><i class="fa fa-history"></i> Hours :</span> 70 <span><i class="fa fa-dollar"></i> Price :</span> 2500</div>
                                    <div class="event_subtitle"><span><i class="fa fa-share-square"></i><a href="#"> Apply Now </a></span></div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<!-- /Schedule -->

<!--Coupon-->
<section>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <!--<h3></h3>-->
                <div class="coupon_area">
                    <div class="coupon_content">
                        <h4>It’s your Lucky Day!</h4>
                        <h2>Up To 20% Discount</h2>
                        <h3>On Your First Course</h3><br />
                        <!--<h3 class="code_text">code</h3>-->
                        <button class="course_button"><span>Check your luck</span><span class="button_arrow"><i class="fa fa-angle-right" aria-hidden="true"></i></span></button>
                        <!--<h2 class="code">Check your luck</h2>-->
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--/Coupon-->

<!-- Private Courses -->
<div class="courses">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 offset-lg-1">
                <div class="section_title text-center"><h2>Private Courses</h2></div>
                <div class="section_subtitle">Suspendisse tincidunt magna eget massa hendrerit efficitur. Ut euismod pellentesque imperdiet.</div>
                <br />
            </div>
        </div>



        <div class="row courses_row">

            <!-- Course -->
            <div class="col-lg-6 col-sm-12">
                <div class="course">
                    <div class="course_image"><img src="{{asset('asset/img/p-course1.jpg')}}" alt="" class="prvt-course-img"></div>
                    <div class="course_body prvt-course-bdy">
                        <div class="course_title"><h3><a href="#">Private Course For One Student</a></h3></div>
                        <div class="course_text">Maecenas rutrum viverra sapien sed ferm entum. Morbi tempor odio eget lacus tempus pulvinar.</div>
                        <div class="p-courses-lst">
                            <ul>
                                <li>Lorem Ipsum is simply dummy text</li>
                                <li>Lorem Ipsum is simply dummy text</li>
                                <li>Lorem Ipsum is simply dummy text</li>
                            </ul>
                        </div>
                        <div class="d-flex flex-row align-items-center justify-content-start mg-10">
                            <div class="course_tag course_price ml-auto"><a href="#">Apply Now</a></div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Course -->
            <div class="col-lg-6 col-sm-12">
                <div class="course">
                    <div class="course_image"><img src="{{asset('asset/img/p-course2.jpg')}}" alt="" class="prvt-course-img"></div>
                    <div class="course_body prvt-course-bdy">
                        <div class="course_title"><h3><a href="#">Private Course For Two to Five Student</a></h3></div>
                        <div class="course_text">Maecenas rutrum viverra sapien sed ferm entum. Morbi tempor odio eget lacus tempus pulvinar.</div>
                        <div class="p-courses-lst">
                            <ul>
                                <li>Lorem Ipsum is simply dummy text</li>
                                <li>Lorem Ipsum is simply dummy text</li>
                                <li>Lorem Ipsum is simply dummy text</li>
                            </ul>
                        </div>
                        <div class="d-flex flex-row align-items-center justify-content-start mg-10">
                            <div class="course_tag course_price ml-auto"><a href="#">Apply Now</a></div>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>
</div>
<!-- /Private Courses -->

<!-- Onsite for companies -->
<section>
    <div class="container">
        <div class="row">
            <div class="col-lg-10 offset-lg-1">
                <div class="section_title text-center"><h2>Onsite For Companies</h2></div>
                <div class="section_subtitle">Suspendisse tincidunt magna eget massa hendrerit efficitur. Ut euismod pellentesque imperdiet.</div>
                <br />
            </div>
        </div>
        <div class="row featured_row">
            <div class="col-lg-6 featured_col">
                <div class="featured_content" style="padding:5px 20px">
                    <div class="course_body prvt-course-bdy">
                        <div class="course_title"><h3><a href="#">Onsite for companies</a></h3></div>
                        <div class="course_text">Maecenas rutrum viverra sapien sed ferm entum. Morbi tempor odio eget lacus tempus pulvinar rutrum viverra sapien sed ferm entum.</div>
                        <div class="p-courses-lst">
                            <ul>
                                <li>Lorem Ipsum is simply dummy text</li>
                                <li>Lorem Ipsum is simply dummy text</li>
                                <li>Lorem Ipsum is simply dummy text</li>
                                <li>Lorem Ipsum is simply dummy text</li>
                                <li>Lorem Ipsum is simply dummy text</li>
                            </ul>
                        </div>
                        <div class="d-flex flex-row align-items-center justify-content-start mg-10">
                            <div class="course_tag course_price ml-auto"><a href="#">Apply Now</a></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 featured_col">
                <div class="featured_background" style="background-image:url({{url('asset/img/onsite.jpg')}})"></div>
            </div>
        </div>
    </div>
</section>
<!-- /Onsite for companies -->

<!--Trainers-->
<section class="iq-features">
    <div class="container">
        <div class="row justify-content-center mb-70">
            <div class="col-xl-8">
                <div class="section_tittle text-center">
                    <h2>Meet your Trainer</h2>
                    <div class="section_subtitle">Suspendisse tincidunt magna eget massa hendrerit efficitur. Ut euismod pellentesque imperdiet. Cras laoreet gravida lectus, at viverra lorem venenatis in. Aenean id varius quam.</div>
                </div>
            </div>
        </div>
        <div class="row align-items-center">
            <div class="col-lg-5 col-md-12 love-graphic mb-70">
                <h5>Our Trainers</h5>
                <p>
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries
                </p>
                <h5>Our Materials</h5>
                <p>
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries
                </p>
                <h5>Certificates</h5>
                <p>
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries
                </p>
                <img src="{{asset('asset/img/Line.png')}}" alt="line">
            </div>
            <div class="col-lg-7 col-md-12 circle-bg">
                <div class="holderCircle">
                    <div class="round"></div>
                    <div class="dotCircle" stylesa="transform: rotate(252deg); transition: all 2s ease 0s;">
                        <div class="itemDot itemDot1" data-tab="1">
                            <img src="{{asset('asset/img/team_1.jpg')}}" alt="ImageJethroBurnettThorburnMolo-Market">
                            <span class="forActive"></span>
                        </div>
                        <div class="itemDot itemDot2" data-tab="2">
                            <img src="{{asset('asset/img/team_2.jpg')}}" alt="heateher-min">
                            <span class="forActive"></span>
                        </div>
                        <div class="itemDot itemDot3" data-tab="3">
                            <img src="{{asset('asset/img/team_3.jpg')}}"  alt="richard">
                            <span class="forActive"></span>
                        </div>
                        <div class="itemDot itemDot4 active" data-tab="4">
                            <img src="{{asset('asset/img/team_4.jpg')}}" alt="JSimone">
                            <span class="forActive"></span>
                        </div>
                        <div class="itemDot itemDot5" data-tab="5">
                            <img src="{{asset('asset/img/team_5.jpg')}}"  alt="lola.">
                            <span class="forActive"></span>
                        </div>
                        <div class="itemDot itemDot6" data-tab="6">
                            <img src="{{asset('asset/img/team_6.jpg')}}"  alt="richard">
                            <span class="forActive"></span>
                        </div>
                        <div class="itemDot itemDot7" data-tab="7">
                            <img src="{{asset('asset/img/team_7.jpg')}}"  alt="heateher-min">
                            <span class="forActive"></span>
                        </div>
                        <div class="itemDot itemDot8" data-tab="8">
                            <img src="{{asset('asset/img/team_8.jpg')}}"  alt="heateher-min">
                            <span class="forActive"></span>
                        </div>
                        <div class="itemDot itemDot9" data-tab="9">
                            <img src="{{asset('asset/img/team_9.jpg')}}" alt="heateher-min">
                            <span class="forActive"></span>
                        </div>
                        <div class="itemDot itemDot10" data-tab="10">
                            <img src="{{asset('asset/img/team_10.jpg')}}"  alt="heateher-min">
                            <span class="forActive"></span>
                        </div>
                    </div>
                    <div class="content-star"></div>
                    <div class="contentCircle">
                        <div class="CirItem title-box CirItem1">
                            <h5 class="title">Eng. Ahmed Ali</h5>
                            <p>Sr. Java Android</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam in quam et quam molestie</p>
                            <i class="fa fa-clock-o"></i>
                        </div>
                        <div class="CirItem title-box CirItem2">
                            <h5 class="title">Eng. Mona Adel</h5>
                            <p>Sr. Java Android</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam in quam et quam molestie</p>
                            <i class="fa fa-comments"></i>
                        </div>
                        <div class="CirItem title-box CirItem3">
                            <h5 class="title">Eng. Laila Samy</h5>
                            <p>Sr. Java Android</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam in quam et quam molestie</p>
                            <i class="fa fa-user"></i>
                        </div>
                        <div class="CirItem title-box CirItem4 active">
                            <h5 class="title">Eng. Muhamad Sayed</h5>
                            <p>Sr. Java Android</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam in quam et quam molestie</p>
                            <i class="fa fa-tags"></i>
                        </div>
                        <div class="CirItem title-box CirItem5">
                            <h5 class="title">Eng. Samar Elsaid</h5>
                            <p>Sr. Java Android</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam in quam et quam molestie</p>
                            <i class="fa fa-upload"></i>
                        </div>
                        <div class="CirItem title-box CirItem6">
                            <h5 class="title">Eng. Khaled Eltayeb</h5>
                            <p>Sr. Java Android</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam in quam et quam molestie</p>
                            <i class="fa fa-briefcase"></i>
                        </div>
                        <div class="CirItem title-box CirItem7">
                            <h5 class="title">Eng. Sara Zakria</h5>
                            <p>Sr. Java Android</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam in quam et quam molestie</p>
                            <i class="fa fa-upload"></i>
                        </div>
                        <div class="CirItem title-box CirItem8">
                            <h5 class="title">Eng. Osama Fayez</h5>
                            <p>Sr. Java Android</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam in quam et quam molestie</p>
                            <i class="fa fa-upload"></i>
                        </div>
                        <div class="CirItem title-box CirItem9">
                            <h5 class="title">Eng. Amina Gamil</h5>
                            <p>Sr. Java Android</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam in quam et quam molestie</p>
                            <i class="fa fa-upload"></i>
                        </div>
                        <div class="CirItem title-box CirItem10">
                            <h5 class="title">Eng. Ibrahim Bakry</h5>
                            <p>Sr. Java Android</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam in quam et quam molestie</p>
                            <i class="fa fa-upload"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--/Trainers-->

<!--Kids Courses-->
<section class="login-block">
    <div class="container kds-sec">
        <div class="row">
            <div class="col-md-9 kds-sldr">

                <div class="home">
                    <div class="home_slider_container">
                        <!-- Home Slider -->
                        <div class="owl-carousel owl-theme home_slider">
                            <!-- Slider Item -->
                            <div class="owl-item">
                                <div class="home_slider_background overlay"  style="background-image:url({{url('asset/img/course-1.jpg')}})"></div>
                                <div class="home_container">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col">
                                                <div class="home_content text-center">
                                                    <div class="home_logo">
                                                        {{-- <img src="" alt=""> --}}
                                                    </div>
                                                    <div class="home_text">
                                                        <div class="home_title">Kids Courses</div>
                                                        <div class="home_subtitle">Maecenas rutrum viverra sapien sed fermentum. Morbi tempor odio eget lacus tempus pulvinar. Praesent vel nisl fermentum, gravida augue ut, fermentum ipsum.</div>
                                                    </div>
                                                    <!--<div class="home_buttons">
                                                        <div class="button home_button"><a href="#">Book Now<div class="button_arrow"><i class="fa fa-angle-right" aria-hidden="true"></i></div></a></div>
                                                    </div>-->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Slider Item -->
                            <div class="owl-item">
                                <div class="home_slider_background overlay" style="background-image:url({{url('asset/img/course-2.jpg')}})"></div>
                                <div class="home_container">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col">
                                                <div class="home_content text-center">
                                                    <div class="home_logo">
                                                        {{-- <img src="" alt=""> --}}
                                                    </div>
                                                    <div class="home_text">
                                                        <div class="home_title">Kids Courses</div>
                                                        <div class="home_subtitle">Maecenas rutrum viverra sapien sed fermentum. Morbi tempor odio eget lacus tempus pulvinar. Praesent vel nisl fermentum, gravida augue ut, fermentum ipsum.</div>
                                                    </div>
                                                    <!--<div class="home_buttons">
                                                        <div class="button home_button"><a href="#">Book Now<div class="button_arrow"><i class="fa fa-angle-right" aria-hidden="true"></i></div></a></div>
                                                    </div>-->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Slider Item -->
                            <div class="owl-item">
                                <div class="home_slider_background overlay" style="background-image:url({{url('asset/img/course-3.jpg')}})"></div>
                                <div class="home_container">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col">
                                                <div class="home_content text-center">
                                                    <div class="home_logo">
                                                        {{-- <img src="" alt=""> --}}
                                                    </div>
                                                    <div class="home_text">
                                                        <div class="home_title">Kids Courses</div>
                                                        <div class="home_subtitle">Maecenas rutrum viverra sapien sed fermentum. Morbi tempor odio eget lacus tempus pulvinar. Praesent vel nisl fermentum, gravida augue ut, fermentum ipsum.</div>
                                                    </div>
                                                    <!--<div class="home_buttons">
                                                        <div class="button home_button"><a href="#">Book Now<div class="button_arrow"><i class="fa fa-angle-right" aria-hidden="true"></i></div></a></div>
                                                    </div>-->
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

            <div class="col-md-3 col-sm-12 grouped_col login-sec">
                <div class="grouped_title pd-10 ">Senior Kids Courses</div>
                <div class="events">

                    <!-- Event -->
                    <div class="event d-flex flex-row align-items-start justify-content-start">
                        <div>
                            <div class="event_date d-flex flex-column align-items-center justify-content-center list">
                                <div class="event_day"></div>
                            </div>
                        </div>
                        <div class="event_body">
                            <div class="event_title"><a href="#">Students New Workshop</a></div>
                            <div class="event_subtitle">Location: Online Platform</div>
                            <div class="event_subtitle">Location: Online Platform</div>
                        </div>
                    </div>

                    <!-- Event -->
                    <div class="event d-flex flex-row align-items-start justify-content-start">
                        <div>
                            <div class="event_date d-flex flex-column align-items-center justify-content-center list">
                                <div class="event_day"></div>
                            </div>
                        </div>
                        <div class="event_body">
                            <div class="event_title"><a href="#">Students New Workshop</a></div>
                            <div class="event_subtitle">Location: Online Platform</div>
                            <div class="event_subtitle">Location: Online Platform</div>
                        </div>
                    </div>

                    <!-- Event -->
                    <div class="event d-flex flex-row align-items-start justify-content-start">
                        <div>
                            <div class="event_date d-flex flex-column align-items-center justify-content-center list">
                                <div class="event_day"></div>
                            </div>
                        </div>
                        <div class="event_body">
                            <div class="event_title"><a href="#">Students New Workshop</a></div>
                            <div class="event_subtitle">Location: Online Platform</div>
                            <div class="event_subtitle">Location: Online Platform</div>
                        </div>
                    </div>

                    <!-- Event -->
                    <div class="event d-flex flex-row align-items-start justify-content-start">
                        <div>
                            <div class="event_date d-flex flex-column align-items-center justify-content-center list">
                                <div class="event_day"></div>
                            </div>
                        </div>
                        <div class="event_body">
                            <div class="event_title"><a href="#">Students New Workshop</a></div>
                            <div class="event_subtitle">Location: Online Platform</div>
                            <div class="event_subtitle">Location: Online Platform</div>
                        </div>
                    </div>

                    <!-- Event -->
                    <div class="event d-flex flex-row align-items-start justify-content-start">
                        <div>
                            <div class="event_date d-flex flex-column align-items-center justify-content-center list">
                                <div class="event_day"></div>
                            </div>
                        </div>
                        <div class="event_body">
                            <div class="event_title"><a href="#">Students New Workshop</a></div>
                            <div class="event_subtitle">Location: Online Platform</div>
                        </div>
                    </div>

                    <div class="home_buttons">
                        <div class="button home_button"><a href="#">Apply Now<div class="button_arrow"><i class="fa fa-angle-right" aria-hidden="true"></i></div></a></div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>
<!--Kids Courses-->

<!-- Why Senior -->
<section class="">
    <div class="container">
        <div class="row">
            <div class="why-senior">
                <div class="col-lg-7">
                    <div class=""><h3>Why Senior Steps</h3></div>
                    <br />
                    <h5> Our Mission</h5>
                    <div class="featured_text">Maecenas rutrum viverra sapien sed fermentum. Morbi tempor odio eget lacus tempus pulvinar. Donec vehicula efficitur nibh, in pretium nulla interdum lacus vehicula efficitur nibh.</div>
                    <br />
                    <h5> Our Mission</h5>
                    <div class="featured_text">Maecenas rutrum viverra sapien sed fermentum. Morbi tempor odio eget lacus tempus pulvinar. Donec vehicula efficitur nibh.</div>
                    <br />
                    <h5> Our Mission</h5>
                    <div class="featured_text">Maecenas rutrum viverra sapien sed fermentum. Morbi tempor odio eget lacus tempus pulvinar Donec vehicula efficitur nibh.</div>
                </div>
                <div class="col-lg-5">
                    <div class="">
                        <iframe width="400" height="400" src="https://www.youtube.com/embed/Opz_66RlRYM" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- /Why Senior -->

<!-- Sponser -->
<div class="home height-500">
    {{-- <div class="home_background parallax_background parallax-window" data-parallax="scroll" data-image-src="images/about.jpg" data-speed="0.8"></div> --}}
    <div class="home_background parallax_background parallax-window" data-parallax="scroll" style="background-image:url({{url('asset/images/about.jpg')}})" data-speed="0.8"></div>
    <div class="home_container">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-8">
                    <div class="section_tittle text-center">
                        <h2 class="font-white">We Can Sponser you</h2>
                        <div class="section_subtitle subtitle">We appreciate you considering us as a partner for your project or your student activity and would be pleased to take the time to look at your application</div>
                    </div>
                </div>
            </div>
            <div class="row mt-30">
                <div class="col text-center">
                    <div class="button teachers_button"><a href="#">Apply Now<div class="button_arrow"><i class="fa fa-angle-right" aria-hidden="true"></i></div></a></div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /Sponser -->

<!--Success Stories-->
<section id="testim" class="testim">
    <div class="container">
        <div class="row justify-content-center mb-70">
            <div class="col-xl-8">
                <div class="section_tittle text-center">
                    <h2>Success Stories</h2>
                    <div class="section_subtitle">Suspendisse tincidunt magna eget massa hendrerit efficitur.</div>
                </div>
            </div>
        </div>
    </div>
    <div class="wrap">

        <span id="right-arrow" class="arrow right fa fa-chevron-right"></span>
        <span id="left-arrow" class="arrow left fa fa-chevron-left "></span>
        <ul id="testim-dots" class="dots">
            <li class="dot active"></li>
            <li class="dot"></li>
            <li class="dot"></li>
            <li class="dot"></li>
            <li class="dot"></li>
        </ul>
        <div id="testim-content" class="cont">

            <div class="active">
                <div class="img"><img src="https://image.ibb.co/hgy1M7/5a6f718346a28820008b4611_750_562.jpg" alt=""></div>
                <h2>Lorem P. Ipsum</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
            </div>

            <div>
                <div class="img"><img src="https://image.ibb.co/cNP817/pexels_photo_220453.jpg" alt=""></div>
                <h2>Mr. Lorem Ipsum</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
            </div>

            <div>
                <div class="img"><img src="https://image.ibb.co/iN3qES/pexels_photo_324658.jpg" alt=""></div>
                <h2>Lorem Ipsum</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
            </div>

            <div>
                <div class="img"><img src="https://image.ibb.co/kL6AES/Top_SA_Nicky_Oppenheimer.jpg" alt=""></div>
                <h2>Lorem De Ipsum</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
            </div>

            <div>
                <div class="img"><img src="https://image.ibb.co/gUPag7/image.jpg" alt=""></div>
                <h2>Ms. Lorem R. Ipsum</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
            </div>

        </div>

    </div>
</section>
<!--/Success Stories-->

<!-- Counter -->
<div class="milestones">
    {{-- <div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="img/bg-6.jpg" data-speed="0.8"></div> --}}
    <div class="parallax_background parallax-window" data-parallax="scroll"style="background-image:url({{url('asset/img/bg-6.jpg')}})" data-speed="0.8"></div>
      <div class="container">
        <div class="row milestones_container">

            <!-- Milestone -->
            <div class="col-lg-3 milestone_col">
                <div class="milestone text-center">
                    <div class="milestone_icon"><img src="{{asset('asset/images/milestone_1.svg')}}" alt=""></div>
                    <div class="milestone_counter" data-end-value="500">0</div>
                    <div class="milestone_text">Online Courses</div>
                </div>
            </div>

            <!-- Milestone -->
            <div class="col-lg-3 milestone_col">
                <div class="milestone text-center">
                    <div class="milestone_icon"><img src="{{asset('asset/images/milestone_2.svg')}}" alt=""></div>
                    <div class="milestone_counter" data-end-value="20000">0</div>
                    <div class="milestone_text">Students</div>
                </div>
            </div>

            <!-- Milestone -->
            <div class="col-lg-3 milestone_col">
                <div class="milestone text-center">
                    <div class="milestone_icon"><img src="{{asset('asset/images/milestone_3.svg')}}" alt=""></div>
                    <div class="milestone_counter" data-end-value="100">0</div>
                    <div class="milestone_text">Teachers</div>
                </div>
            </div>

            <!-- Milestone -->
            <div class="col-lg-3 milestone_col">
                <div class="milestone text-center">
                    <div class="milestone_icon"><img src="{{asset('asset/images/milestone_4.svg')}}" alt=""></div>
                    <div class="milestone_counter" data-end-value="250">0</div>
                    <div class="milestone_text">Projects</div>
                </div>
            </div>

        </div>
    </div>
</div>
<!-- /Counter -->

@endsection

@section('scripts')

@endsection