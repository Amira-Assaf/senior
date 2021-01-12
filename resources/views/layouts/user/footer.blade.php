        
        
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

