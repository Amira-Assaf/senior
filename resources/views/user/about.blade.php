@extends("layouts.user.layout")
@section('content')
<meta name="csrf-token" content="{{ csrf_token() }}">



<div class="home home-course">
    {{-- <div class="home_background parallax_background parallax-window" data-parallax="scroll" data-image-src="img/course-details-bg.jpg" data-speed="0.8" style="max-height:200px"></div> --}}
    <div class="home_background parallax_background parallax-window" data-parallax="scroll"  style="background-image:url({{url('asset/img/course-details-bg.jpg')}})" data-speed="0.8" style="max-height:200px"></div>
    <div class="home_container">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="home_content text-center">
                        <div class="home_title">About Us</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Video -->
<section class="mt-30">
    <div class="video">
        <div class="container">
            <div class="row	mb-20 ">
                <div class="col-lg-10 offset-lg-1">
                    <div class="section_title text-center mt-30"><h2>Who We Are</h2></div>
                    <div class="section_subtitle">Suspendisse tincidunt magna eget massa hendrerit efficitur. Ut euismod pellentesque imperdiet.</div>
                    <br />
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div>
                        <h3 class="cl-red">Few Words About Us</h3>
                        <p>We - a group of young senior engineers – made our decision to launch an experienced training center based on our own business experience in the IT Market. The idea evolved in building an integrated training center in the field of IT.This is to define a roadmap for students and fresh graduates in Egyptian’s education sector. Senior Steps is considered as your first step for Software Engineering and IT seniority level of professionalism.</p>
                    </div>
                    <div>
                        <h3 class="cl-red">Our Mission</h3>
                        <p>Using the latest technologies in the Information Technology Industry, We are to deliver training courses that qualify our trainees to compete in the IT Business Market.</p>
                    </div>
                    <div>
                        <h3 class="cl-red">Our Vission</h3>
                        <p>We believe that we are here in Egypt to make an effective difference in the IT Training Industry. We believe that we need to deliver the highest quality of training and learning aids to gain the difference of the IT Training Market. Applying such a vision, will make Senior Steps as an incubator for highly qualified calibers in various IT fields and Software Development Industry.</p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="row">
                        <div class="col">
                            <div class="video_container_outer">
                                <div class="video_container br-5">
                                    <!-- Video poster image artist: https://unsplash.com/@annademy -->
                                    <video id="vid1" class="video-js vjs-default-skin br-5" controls data-setup='{ "poster": "images/video3.jpg", "techOrder": ["youtube"], "sources": [{ "type": "video/youtube", "src": "https://youtu.be/Opz_66RlRYM"}], "youtube": { "iv_load_policy": 1 } }'></video>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- /Video -->

<!-- Sections -->

<div class="grouped_sections">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 offset-lg-1">
                <div class="section_title text-center"><h2>Our Journey</h2></div>
                <div class="section_subtitle">Suspendisse tincidunt magna eget massa hendrerit efficitur. Ut euismod pellentesque imperdiet.</div>
            </div>
        </div>
        <br />
        <div class="row">

            <ul class="list-step-numbers">
                <li>
                    <strong>2013</strong>
                    <p>Start point - Nasr City - a small lecture hall - simple propaganda in terms of cost - we were satisfied with distinguished trainers , strong content that qualify to the labour market, and the suitable cost for the university student at the beginning of his career - we started programming, database, and network courses.</p>
                </li>
                <li>
                    <strong>2014</strong>
                    <p>Propagation period - after taking the breaking ice period and getting the admiration of the customers and their recommendation to their colleagues to get our courses to benefit from the content and experience of the trainers, we came to the market strongly - we developed our headquarters and increase the number of halls for 3 halls were filled continually.</p>
                </li>
                <li>
                    <strong>2015</strong>
                    <p>Excellency period _ Cooperation with number of universities and companies in software solutions - Support student activities and increase training courses and content development to keep up with the change in the information technology market - The opening of the second branch of our company in Nasr City with one lecture hall.</p>
                </li>
                <li>
                    <strong>2016</strong>
                    <p>Renaissance period - thank God we have become one of the training centers affecting the Software market, Networking and System Engineering in Egypt - and the number of graduate students has doubled from our courses - and we seek to be the best soon.</p>
                </li>
                <li>
                    <strong>2017</strong>
                    <p>Software Solutions Period - We have been developing Senior Consultancy and Software Solutions to become the other arm of Senior Training Company and doubling the number of graduate students. Many halls were opened in Nasr City branches to welcome our students.</p>
                </li>

                <li>
                    <strong>2018</strong>
                    <p>Expanding period - we reached the Mediterranean bride (Alexandria) and offering our courses in the beautiful province putting in consideration the importance of connecting the information from our distinguished trainers in Cairo and providing the latest technology in our field in Alexandria.</p>
                </li>

                <li>
                    <strong>2019</strong>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </li>

                <li>
                    <strong>2020</strong>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </li>
            </ul>

        </div>
    </div>
</div>


@endsection

@section('scripts')


@endsection