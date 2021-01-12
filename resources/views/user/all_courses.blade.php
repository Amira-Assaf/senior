@extends("layouts.user.layout")
@section('content')
<meta name="csrf-token" content="{{ csrf_token() }}">


<div class="home">
    <div class="home_background parallax_background parallax-window" data-parallax="scroll" data-image-src="images/courses.jpg" data-speed="0.8"style="max-height:200px"></div>
    <div class="home_container">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="home_content text-center">
                        <div class="home_title">Courses</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="courses">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 offset-lg-1">
                <div class="section_title text-center"><h2>Search Here By Course Name</h2></div>
                <div class="section_subtitle">Find Your Course Here Find Your Course Here Find Your Course Here Find Your Course Here</div>
            </div>
        </div>

        <!-- Course Search -->
        <div class="row">
            <div class="col">
                <div class="course_search">
                    <form action="#" class="d-flex flex-md-row flex-column align-items-start justify-content-between">
                        <div class="col-lg-10"><input type="text" class="course_input" placeholder="Course" required="required"></div>
                        <div class="col-lg-2"><button class="course_button"><span>Search course</span><span class="button_arrow"><i class="fa fa-angle-right" aria-hidden="true"></i></span></button></div>
                    </form>
                </div>
            </div>
        </div>
        
    </div>
</div>

<section>
    <div class="container">
        <div class="row">
            <div class="col-lg-10 offset-lg-1">
                <div class="section_title text-center"><h2>4 in 1 Course</h2></div>
                <div class="section_subtitle">Suspendisse tincidunt magna eget massa hendrerit efficitur. Ut euismod pellentesque imperdiet.</div>
                <br />
            </div>
        </div>
        <div class="row featured_row">
            <div class="col-lg-6 featured_col">
                <div class="featured_content" style="padding:5px 20px">
                    <div class="course_body prvt-course-bdy">
                        <div class="course_title"><h3><a href="#">4 in 1 Course</a></h3></div>
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
                <div class="featured_background" style="background-image:url(img/4course.jpg);border-bottom:solid black 3px"></div>
            </div>
        </div>
    </div>
</section>

<!--Courses-->
<section class="pt-50 pb-50">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 offset-lg-1 pb-50">
                <div class="section_title text-center"><h2>Our Courses</h2></div>
                <div class="section_subtitle">Suspendisse tincidunt magna eget massa hendrerit efficitur. Ut euismod pellentesque imperdiet. Cras laoreet gravida lectus, at viverra lorem venenatis in. Aenean id varius quam. Nullam bibendum interdum dui, ac tempor lorem convallis ut</div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3">
                
                <!-- aside widget -->
                <div class="aside pb-20">
                    <h5 class="aside-title">Course Name</h5>
                    <div>
                        <input type="checkbox" /> Course Name 1
                    </div>
                    <div>
                        <input type="checkbox" /> Course Name 2
                    </div>
                    <div>
                        <input type="checkbox" /> Course Name 3
                    </div>
                    <div>
                        <input type="checkbox" /> Course Name 4
                    </div>
                    <div>
                        <input type="checkbox" /> Course Name 5
                    </div>
                    <div>
                        <input type="checkbox" /> Course Name 6
                    </div>
                    <div>
                        <input type="checkbox" /> Course Name 7
                    </div>
                    <div>
                        <input type="checkbox" /> Course Name 8
                    </div>
                    <!--<div class="select-list">
                        <div class="title">Select Course Name ...</div>
                        <div class="select-options">
                            <div class="option">
                                <input type="checkbox" name="vehicle" id="option1" value="" />
                                <label for="option1">Course Name 1</label>
                            </div>
                            <div class="option">
                                <input type="checkbox" name="vehicle" id="option2" />
                                <label for="option2">Course Name 2</label>
                            </div>
                            <div class="option">
                                <input type="checkbox" name="vehicle" id="option3" />
                                <label for="option3">Course Name 3</label>
                            </div>
                            <div class="option">
                                <input type="checkbox" name="vehicle" id="option4" />
                                <label for="option4">Course Name 4</label>
                            </div>
                            <div class="option">
                                <input type="checkbox" name="vehicle" id="option5" />
                                <label for="option5">Course Name 5</label>
                            </div>
                            <div class="option">
                                <input type="checkbox" name="vehicle" id="option6" />
                                <label for="option6">Course Name 6</label>
                            </div>
                        </div>
                    </div>-->
                </div>
                <!-- /aside widget -->
                <div class="aside pb-20">
                    <h5 class="aside-title">Course Type</h5>
                    <div>
                        <input type="checkbox" /> Course Type 1
                    </div>
                    <div>
                        <input type="checkbox" /> Course Type 2
                    </div>
                    <div>
                        <input type="checkbox" /> Course Type 3
                    </div>
                    <div>
                        <input type="checkbox" /> Course Type 4
                    </div>
                    <div>
                        <input type="checkbox" /> Course Type 5
                    </div>
                </div>
                <!-- /aside widget -->

                <!-- /aside widget -->
                <div class="aside pb-20">
                    <h5 class="aside-title">Course Location</h5>
                    <div>
                        <input type="checkbox" /> Course Location 1
                    </div>
                    <div>
                        <input type="checkbox" /> Course Location 2
                    </div>
                    <div>
                        <input type="checkbox" /> Course Location 3
                    </div>
                    <div>
                        <input type="checkbox" /> Course Location 4
                    </div>
                    <div>
                        <input type="checkbox" /> Course Location 5
                    </div>
                </div>
                <!-- /aside widget -->

                <!-- /aside widget -->
                <div class="aside pb-20">
                    <h5 class="aside-title">Course Vendor</h5>
                    <div>
                        <input type="checkbox" /> Course Vendor 1
                    </div>
                    <div>
                        <input type="checkbox" /> Course Vendor 2
                    </div>
                    <div>
                        <input type="checkbox" /> Course Vendor 3
                    </div>
                    <div>
                        <input type="checkbox" /> Course Vendor 4
                    </div>
                    <div>
                        <input type="checkbox" /> Course Vendor 5
                    </div>
                </div>
                <!-- /aside widget -->

                <!-- /aside widget -->
                <div class="aside pb-20">
                    <h5 class="aside-title">Course Category</h5>
                    <div>
                        <input type="checkbox" /> Course Category 1
                    </div>
                    <div>
                        <input type="checkbox" /> Course Category 2
                    </div>
                    <div>
                        <input type="checkbox" /> Course Category 3
                    </div>
                    <div>
                        <input type="checkbox" /> Course Category 4
                    </div>
                    <div>
                        <input type="checkbox" /> Course Category 5
                    </div>
                </div>
                <!-- /aside widget -->

                <!-- aside widget -->
                <!--<div class="aside pb-20">
                    <h5 class="aside-title">Course Type </h5>
                    <div class="select-list">
                        <div class="title">Select Course Vendor  ...</div>
                        <div class="select-options">
                            <div class="option">
                                <input type="checkbox" name="vehicle" id="option1" value="" />
                                <label for="option1">Personnel</label>
                            </div>
                            <div class="option">
                                <input type="checkbox" name="vehicle" id="option2" />
                                <label for="option2">Companies</label>
                            </div>
                            <div class="option">
                                <input type="checkbox" name="vehicle" id="option3" />
                                <label for="option3">Private</label>
                            </div>
                            <div class="option">
                                <input type="checkbox" name="vehicle" id="option4" />
                                <label for="option4">Graduation Project</label>
                            </div>
                        </div>
                    </div>
                </div>-->
                <!-- /aside widget -->

                <!-- aside widget -->
                <!--<div class="aside pb-20">
                    <h5 class="aside-title">Course Location</h5>
                    <div class="select-list">
                        <div class="title">Select Course Location ...</div>
                        <div class="select-options">
                            <div class="option">
                                <input type="checkbox" name="vehicle" id="option1" value="" />
                                <label for="option1">Location 1</label>
                            </div>
                            <div class="option">
                                <input type="checkbox" name="vehicle" id="option2" />
                                <label for="option2">Location 2</label>
                            </div>
                            <div class="option">
                                <input type="checkbox" name="vehicle" id="option3" />
                                <label for="option3">Location 3</label>
                            </div>
                            <div class="option">
                                <input type="checkbox" name="vehicle" id="option4" />
                                <label for="option4">Location 4</label>
                            </div>
                        </div>
                    </div>
                </div>-->
                <!-- /aside widget -->

                <!-- aside widget -->
                <!--<div class="aside pb-20">
                    <h5 class="aside-title">Course Vendor </h5>
                    <div class="select-list">
                        <div class="title">Select Course Vendor  ...</div>
                        <div class="select-options">
                            <div class="option">
                                <input type="checkbox" name="vehicle" id="option1" value="" />
                                <label for="option1">Vendor 1</label>
                            </div>
                            <div class="option">
                                <input type="checkbox" name="vehicle" id="option2" />
                                <label for="option2">Vendor 2</label>
                            </div>
                            <div class="option">
                                <input type="checkbox" name="vehicle" id="option3" />
                                <label for="option3">Vendor 3</label>
                            </div>
                            <div class="option">
                                <input type="checkbox" name="vehicle" id="option4" />
                                <label for="option4">Vendor 4</label>
                            </div>
                        </div>
                    </div>
                </div>-->
                <!-- /aside widget -->

                <!-- aside widget -->
                <!--<div class="aside pb-20">
                    <h5 class="aside-title">Course Category </h5>
                    <div class="select-list">
                        <div class="title">Select Course Category  ...</div>
                        <div class="select-options">
                            <div class="option">
                                <input type="checkbox" name="vehicle" id="option1" value="" />
                                <label for="option1">Category 1</label>
                            </div>
                            <div class="option">
                                <input type="checkbox" name="vehicle" id="option2" />
                                <label for="option2">Category 2</label>
                            </div>
                            <div class="option">
                                <input type="checkbox" name="vehicle" id="option3" />
                                <label for="option3">Category 3</label>
                            </div>
                            <div class="option">
                                <input type="checkbox" name="vehicle" id="option4" />
                                <label for="option4">Category 4</label>
                            </div>
                        </div>
                    </div>
                </div>-->
                <!-- /aside widget -->

                <!-- Top Requested -->
                <!--<div class="latest_posts">
                    <h4 class="aside-title">Top Requested Courses </h4>

                    <div class="latest_post d-flex flex-row align-items-start justify-content-start t-rate">
                        <div><div class="latest_post_image t-rate-img"><img src="img/rate1.jpg"></div></div>
                        <div class="latest_post_body">
                            <div class="latest_post_date"><a href="#">Front End Course </a></div>
                            <div class="latest_post_title"><p>Lorem Ipsum is simply</p></div>
                            <div class="latest_post_author">By <a href="#">Eng Abdallah Khalaf</a></div>
                        </div>
                    </div>

                    <div class="latest_post d-flex flex-row align-items-start justify-content-start t-rate">
                        <div><div class="latest_post_image t-rate-img"><img src="img/rate2.jpg"></div></div>
                        <div class="latest_post_body">
                            <div class="latest_post_date"><a href="#">Front End Course </a></div>
                            <div class="latest_post_title"><p>Lorem Ipsum is simply</p></div>
                            <div class="latest_post_author">By <a href="#">Eng Abdallah Khalaf</a></div>
                        </div>
                    </div>

                    <div class="latest_post d-flex flex-row align-items-start justify-content-start t-rate">
                        <div><div class="latest_post_image t-rate-img"><img src="img/rate3.jpg"></div></div>
                        <div class="latest_post_body">
                            <div class="latest_post_date"><a href="#">Front End Course </a></div>
                            <div class="latest_post_title"><p>Lorem Ipsum is simply</p></div>
                            <div class="latest_post_author">By <a href="#">Eng Abdallah Khalaf</a></div>
                        </div>
                    </div>
                    

                    <div class="latest_post d-flex flex-row align-items-start justify-content-start t-rate">
                        <div><div class="latest_post_image t-rate-img"><img src="img/rate4.jpg"></div></div>
                        <div class="latest_post_body">
                            <div class="latest_post_date"><a href="#">Front End Course </a></div>
                            <div class="latest_post_title"><p>Lorem Ipsum is simply</p></div>
                            <div class="latest_post_author">By <a href="#">Eng Abdallah Khalaf</a></div>
                        </div>
                    </div>
                    
                </div>-->
                <!-- /aside widget -->

            </div>
            <div class="col-lg-9 courses-area events nicescroll-box demo-box">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="course all-courses">
                            <div class="course_image"><img src="img/post-1.jpg" alt="" /></div>
                            <div class="course_body">
                                <div class="course_title"><h3><a href="courses.html">Front End Course</a></h3></div>
                                <div class="course_text">Lorem Ipsum is simply dummy text of the printing and typesetting industry standard dummy text ever </div>
                                <div class="course_header d-flex flex-row align-items-center justify-content-start mg-10">
                                    <div class="course_tag"><a href="#">Book Now</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="course all-courses">
                            <div class="course_image"><img src="img/post-2.jpg" alt="" /></div>
                            <div class="course_body">
                                <div class="course_title"><h3><a href="courses.html">Front End Course</a></h3></div>
                                <div class="course_text">Lorem Ipsum is simply dummy text of the printing and typesetting industry standard dummy text ever </div>
                                <div class="course_header d-flex flex-row align-items-center justify-content-start mg-10">
                                    <div class="course_tag"><a href="#">Book Now</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="course all-courses">
                            <div class="course_image"><img src="img/post-3.jpg" alt="" /></div>
                            <div class="course_body">
                                <div class="course_title"><h3><a href="courses.html">Front End Course</a></h3></div>
                                <div class="course_text">Lorem Ipsum is simply dummy text of the printing and typesetting industry standard dummy text ever </div>
                                <div class="course_header d-flex flex-row align-items-center justify-content-start mg-10">
                                    <div class="course_tag"><a href="#">Book Now</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="course all-courses">
                            <div class="course_image"><img src="img/post-4.jpg" alt="" /></div>
                            <div class="course_body">
                                <div class="course_title"><h3><a href="courses.html">Front End Course</a></h3></div>
                                <div class="course_text">Lorem Ipsum is simply dummy text of the printing and typesetting industry standard dummy text ever </div>
                                <div class="course_header d-flex flex-row align-items-center justify-content-start mg-10">
                                    <div class="course_tag"><a href="#">Book Now</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="course all-courses">
                            <div class="course_image"><img src="img/post-5.jpg" alt="" /></div>
                            <div class="course_body">
                                <div class="course_title"><h3><a href="courses.html">Front End Course</a></h3></div>
                                <div class="course_text">Lorem Ipsum is simply dummy text of the printing and typesetting industry standard dummy text ever </div>
                                <div class="course_header d-flex flex-row align-items-center justify-content-start mg-10">
                                    <div class="course_tag"><a href="#">Book Now</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="course all-courses">
                            <div class="course_image"><img src="img/post-6.jpg" alt="" /></div>
                            <div class="course_body">
                                <div class="course_title"><h3><a href="courses.html">Front End Course</a></h3></div>
                                <div class="course_text">Lorem Ipsum is simply dummy text of the printing and typesetting industry standard dummy text ever </div>
                                <div class="course_header d-flex flex-row align-items-center justify-content-start mg-10">
                                    <div class="course_tag"><a href="#">Book Now</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!--Upcoming Courses -->
<div class="courses">
    <div class="container pb-50 pt-50">
        <div class="row">
            <div class="col-lg-10 offset-lg-1">
                <div class="section_title text-center"><h2>Upcoming Courses</h2></div>
                <div class="section_subtitle">Suspendisse tincidunt magna eget massa hendrerit efficitur. Ut euismod pellentesque imperdiet. Cras laoreet gravida lectus, at viverra lorem venenatis in. Aenean id varius quam. Nullam bibendum interdum dui, ac tempor lorem convallis ut</div>
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
                                <div class="course_image"><img src="img/post-1.jpg" alt="" /></div>
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
                                <div class="course_image"><img src="img/post-2.jpg" alt=""></div>
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
                                <div class="course_image"><img src="img/post-3.jpg" alt=""></div>
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
                                <div class="course_image"><img src="img/post-4.jpg" alt=""></div>
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
                                <div class="course_image"><img src="img/post-5.jpg" alt=""></div>
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
                                <div class="course_image"><img src="img/post-6.jpg" alt=""></div>
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
    </div>
</div>
<!--/Upcoming Courses -->

<!--Top Rated Courses-->
<section class="">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 offset-lg-1">
                <div class="section_title text-center"><h2>Top Rated Courses</h2></div>
                <div class="section_subtitle">Suspendisse tincidunt magna eget massa hendrerit efficitur. Ut euismod pellentesque imperdiet. Cras laoreet gravida lectus, at viverra lorem venenatis in. Aenean id varius quam. Nullam bibendum interdum dui, ac tempor lorem convallis ut</div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-7">
                <div class="home t-rate-sldr">
                    <div class="home_slider_container">
                        <!-- Home Slider -->
                        <div class="owl-carousel owl-theme home_slider">
                            <!-- Slider Item -->
                            <div class="owl-item">
                                <div class="home_slider_background overlay" style="background-image:url(img/p-courses.jpg)"></div>
                                <div class="home_container">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col">
                                                <div class="home_content text-center">
                                                    <div class="home_logo"><img src="" alt=""></div>
                                                    <div class="home_text">
                                                        <div class="home_title">Android Course</div>
                                                        <div class="home_subtitle">Maecenas rutrum viverra sapien sed fermentum. Morbi tempor odio eget lacus tempus pulvinar. Praesent vel nisl fermentum, gravida augue ut, fermentum ipsum.</div>
                                                    </div>
                                                    <div class="home_buttons">
                                                        <div class="button home_button"><a href="#">Book Now<div class="button_arrow"><i class="fa fa-angle-right" aria-hidden="true"></i></div></a></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Slider Item -->
                            <div class="owl-item">
                                <div class="home_slider_background overlay" style="background-image:url(img/course-2.jpg)"></div>
                                <div class="home_container">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col">
                                                <div class="home_content text-center">
                                                    <div class="home_logo"><img src="" alt=""></div>
                                                    <div class="home_text">
                                                        <div class="home_title">Kids Courses</div>
                                                        <div class="home_subtitle">Maecenas rutrum viverra sapien sed fermentum. Morbi tempor odio eget lacus tempus pulvinar. Praesent vel nisl fermentum, gravida augue ut, fermentum ipsum.</div>
                                                    </div>
                                                    <div class="home_buttons">
                                                        <div class="button home_button"><a href="#">Book Now<div class="button_arrow"><i class="fa fa-angle-right" aria-hidden="true"></i></div></a></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Slider Item -->
                            <div class="owl-item">
                                <div class="home_slider_background overlay" style="background-image:url(img/post-9.jpg)"></div>
                                <div class="home_container">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col">
                                                <div class="home_content text-center">
                                                    <div class="home_logo"><img src="" alt=""></div>
                                                    <div class="home_text">
                                                        <div class="home_title">PHP Courses</div>
                                                        <div class="home_subtitle">Maecenas rutrum viverra sapien sed fermentum. Morbi tempor odio eget lacus tempus pulvinar. Praesent vel nisl fermentum, gravida augue ut, fermentum ipsum.</div>
                                                    </div>
                                                    <div class="home_buttons">
                                                        <div class="button home_button"><a href="#">Book Now<div class="button_arrow"><i class="fa fa-angle-right" aria-hidden="true"></i></div></a></div>
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
            <div class="col-lg-5 col-sm-12">
                <h4 class="aside-title">Top Rated Courses</h4>
                <div class="latest_posts">
                    <!-- Course -->
                    <div class="latest_post d-flex flex-row align-items-start justify-content-start t-rate">
                        <div><div class="latest_post_image t-rate-img"><img src="img/rate1.jpg"></div></div>
                        <div class="latest_post_body">
                            <div class="latest_post_date"><a href="#">Front End Course </a> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i></div>
                            <div class="latest_post_title"><p>Lorem Ipsum is simply dummy text of the printing</p></div>
                            <div class="latest_post_author">By <a href="#">Eng Abdallah Khalaf</a></div>
                        </div>
                    </div>
                    <!-- Course -->
                    <div class="latest_post d-flex flex-row align-items-start justify-content-start t-rate">
                        <div><div class="latest_post_image t-rate-img"><img src="img/rate2.jpg"></div></div>
                        <div class="latest_post_body">
                            <div class="latest_post_date"><a href="#">Front End Course </a> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i></div>
                            <div class="latest_post_title"><p>Lorem Ipsum is simply dummy text of the printing</p></div>
                            <div class="latest_post_author">By <a href="#">Eng Abdallah Khalaf</a></div>
                        </div>
                    </div>
                    <!-- Course -->
                    <div class="latest_post d-flex flex-row align-items-start justify-content-start t-rate">
                        <div><div class="latest_post_image t-rate-img"><img src="img/rate3.jpg"></div></div>
                        <div class="latest_post_body">
                            <div class="latest_post_date"><a href="#">Front End Course </a> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i></div>
                            <div class="latest_post_title"><p>Lorem Ipsum is simply dummy text of the printing</p></div>
                            <div class="latest_post_author">By <a href="#">Eng Abdallah Khalaf</a></div>
                        </div>
                    </div>
                    <!-- Course -->
                    <div class="latest_post d-flex flex-row align-items-start justify-content-start t-rate">
                        <div><div class="latest_post_image t-rate-img"><img src="img/rate4.jpg"></div></div>
                        <div class="latest_post_body">
                            <div class="latest_post_date"><a href="#">Front End Course </a> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i></div>
                            <div class="latest_post_title"><p>Lorem Ipsum is simply dummy text of the printing</p></div>
                            <div class="latest_post_author">By <a href="#">Eng Abdallah Khalaf</a></div>
                        </div>
                    </div>
                    <!-- Course -->
                    <div class="latest_post d-flex flex-row align-items-start justify-content-start t-rate">
                        <div><div class="latest_post_image t-rate-img"><img src="img/rate3.jpg"></div></div>
                        <div class="latest_post_body">
                            <div class="latest_post_date"><a href="#">Front End Course </a> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i></div>
                            <div class="latest_post_title"><p>Lorem Ipsum is simply dummy text of the printing</p></div>
                            <div class="latest_post_author">By <a href="#">Eng Abdallah Khalaf</a></div>
                        </div>
                    </div>
                    <!-- Course -->
                    <div class="latest_post d-flex flex-row align-items-start justify-content-start t-rate">
                        <div><div class="latest_post_image t-rate-img"><img src="img/rate2.jpg"></div></div>
                        <div class="latest_post_body">
                            <div class="latest_post_date"><a href="#">Front End Course </a> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i></div>
                            <div class="latest_post_title"><p>Lorem Ipsum is simply dummy text of the printing</p></div>
                            <div class="latest_post_author">By <a href="#">Eng Abdallah Khalaf</a></div>
                        </div>
                    </div>
                    <!-- Course -->
                    <div class="latest_post d-flex flex-row align-items-start justify-content-start t-rate">
                        <div><div class="latest_post_image t-rate-img"><img src="img/rate1.jpg"></div></div>
                        <div class="latest_post_body">
                            <div class="latest_post_date"><a href="#">Front End Course </a> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i></div>
                            <div class="latest_post_title"><p>Lorem Ipsum is simply dummy text of the printing</p></div>
                            <div class="latest_post_author">By <a href="#">Eng Abdallah Khalaf</a></div>
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
    </div>
</section>
<!--Top Rated Courses-->

<!--Coupon-->
<section>
    <div class="news">
        <div class="container">
            <div class="row">
                <!-- Sidebar -->
                <div class="col-lg-10 offset-lg-1">
                    <div class="sidebar">
                        <div class="sidebar_elearn">
                            <div class="elearn">
                                <div class="elearn_background" style="background-image:url(images/elearn.jpg)"></div>
                                <div class="elearn_content d-flex flex-column align-items-center justify-content-end">
                                    <div class="elearn_line">Get a 20% Discount</div>
                                    <div class="elearn_link"><a href="#">Register now</a></div>
                                    <div class="dcount">
                                        <div class="dcount_content d-flex flex-column align-items-center justify-content-center">
                                            <div class="dcount_value">20%</div>
                                            <div class="dcount_text">off</div>
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
    <!--<div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="coupon_area">
                    <div class="coupon_content">
                        <h4>It’s your Lucky Day!</h4>
                        <h2>Up To 20% Discount</h2>
                        <h3>On Your First Course</h3><br />
                        <button class="course_button"><span>Check your luck</span><span class="button_arrow"><i class="fa fa-angle-right" aria-hidden="true"></i></span></button>
                    </div>
                </div>
            </div>
        </div>
    </div>-->
</section>
<!--/Coupon-->




@endsection

@section('scripts')


@endsection