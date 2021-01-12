<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    @if (app()->getLocale()=='en')
    <title>EN DISTRIBUTORS</title>
        
    @else
    <title>AR DISTRIBUTORS</title>
    @endif
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon
		============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
    <!-- Google Fonts
		============================================ -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700,900" rel="stylesheet">
    <!-- Bootstrap CSS 
		============================================ -->
    <link rel="stylesheet" href="{{ asset('dashboard/css/bootstrap.min.css') }}">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('dashboard/css/font-awesome.min.css') }}">
    <!-- owl.carousel CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('dashboard/css/owl.carousel.css') }}">
    <link rel="stylesheet" href="{{ asset('dashboard/css/owl.theme.css') }}">
    <link rel="stylesheet" href="{{ asset('dashboard/css/owl.transitions.css') }}">
    <!-- animate CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('dashboard/css/animate.css') }}">
    <!-- normalize CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('dashboard/css/normalize.css') }}">
    <!-- meanmenu icon CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('dashboard/css/meanmenu.min.css') }}">
    <!-- main CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('dashboard/css/main.css') }}">
    <!-- educate icon CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('dashboard/css/educate-custon-icon.css') }}">
    <!-- morrisjs CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('dashboard/css/morrisjs/morris.css') }}">
    <!-- mCustomScrollbar CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('dashboard/css/scrollbar/jquery.mCustomScrollbar.min.css') }}">
    <!-- metisMenu CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('dashboard/css/metisMenu/metisMenu.min.css') }}">
    <link rel="stylesheet" href="{{ asset('dashboard/css/metisMenu/metisMenu-vertical.css') }}">
    <!-- calendar CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('dashboard/css/calendar/fullcalendar.min.css') }}">
    <link rel="stylesheet" href="{{ asset('dashboard/css/calendar/fullcalendar.print.min.css') }}">
    <!-- forms CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('dashboard/css/form/all-type-forms.css') }}">
	<!-- select2 CSS
		============================================ -->
	<link rel="stylesheet" href="{{ asset('dashboard/css/select2/select2.min.css') }}">
	<!-- chosen CSS
		============================================ -->
	<link rel="stylesheet" href="{{ asset('dashboard/css/chosen/bootstrap-chosen.css') }}">
	<!-- modals CSS
		============================================ -->
		<link rel="stylesheet" href="{{ asset('dashboard/css/modals.css') }}">
    <!-- style CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('dashboard/style.css') }}">
    <!-- responsive CSS
		============================================ -->
	<link rel="stylesheet" href="{{ asset('dashboard/css/responsive.css') }}">
	 <!-- Custom CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('dashboard/css/custom.css') }}">
    
 <!-- select2 CSS
		============================================ -->
		<link rel="stylesheet" href="{{ asset('dashboard/css/select2/select2.min.css') }}">
		<!-- chosen CSS
			============================================ -->
		<link rel="stylesheet" href="{{ asset('dashboard/css/chosen/bootstrap-chosen.css') }}">
    
    <!-- notifications CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('dashboard/css/notifications/Lobibox.min.css') }}">
    <link rel="stylesheet" href="{{ asset('dashboard/css/notifications/notifications.css') }}">

    <!-- DataTable CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('dashboard/css/data-table/bootstrap-table.css') }}">
    <link rel="stylesheet" href="{{ asset('dashboard/css/data-table/bootstrap-editable.css') }}">

    <!-- Noty (Notification)
		============================================ -->
    <link href="{{ asset('dashboard/css/noty/noty.css') }}" rel="stylesheet" >
    <script src="{{ asset('dashboard/css/noty/noty.min.js') }}"></script>
    <!-- modernizr JS
		============================================ -->
    <script src="{{ asset('dashboard/js/vendor/modernizr-2.8.3.min.js') }}"></script>

    
</head>
<div class="left-sidebar-pro">
  <nav id="sidebar" class="">
      <div class="sidebar-header">
          <a href="index.html"><img class="main-logo" src="{{ asset('dashboard/img/logo/logo.png') }}" alt="" /></a>
          <strong><a href="index.html"><img src="{{ asset('dashboard/img/logo/logosn.png') }}" alt="" /></a></strong>
      </div>
      <div class="left-custom-menu-adp-wrap comment-scrollbar">
          <nav class="sidebar-nav left-sidebar-menu-pro">
              <ul class="metismenu" id="menu1">
                <li class="">
                  <a  a class="has-arrow" href="#" aria-expanded="false"><img src="{{ asset('dashboard/img/user.jpg') }}" alt="" style="border-radius: .5rem" /> <span class="mini-click-non"> {{Auth::user()->name}}</span></a>
                  <ul class="submenu-angle" aria-expanded="false">
                      <li>
                        <a class="dropdown-item" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                        <span class="mini-sub-pro">Logout</span></a></li>
                        




                  </ul>
              </li>
                  <li class="">
                      <a class="has-arrow" href="all-courses.html" aria-expanded="false"><span class="educate-icon educate-department icon-wrap"></span> <span class="mini-click-non">@lang('site.lang')</span></a>
                      <ul class="submenu-angle" aria-expanded="false">
                          @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                              <li>
                                  <a rel="alternate" hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                                      {{ $properties['native'] }}
                                  </a>
                              </li>
                          @endforeach
                      </ul>
                  </li>
                  <li>
                    <a  href="/captionDistributor" aria-expanded="false"><span class="educate-icon educate-department icon-wrap"></span> <span class="mini-click-non">@lang('site.caption')</span></a>
                </li>
                  @if (Auth::user()->hasPermission('users-read'))
                  <li class="active">
                    <a  href="/AdminUser" aria-expanded="false"><span class="educate-icon educate-department icon-wrap"></span> <span class="mini-click-non">@lang('site.list-user')</span></a>
                </li>
                @endif
                  <li>
                      <a  href="/adminDistributor" aria-expanded="false"><span class="educate-icon educate-department icon-wrap"></span> <span class="mini-click-non">@lang('site.list-distributor')</span></a>
                      {{-- <ul class="submenu-angle" aria-expanded="false">
                          <li><a title="Distributors List" href=""><span class="mini-sub-pro">@lang('site.distributors')</span></a></li>
                          <li><a title="Add Distributors" href="add-distributors.html"><span class="mini-sub-pro">Add Distributors</span></a></li>
                          <li><a title="Edit Distributors" href="edit-distributors.html"><span class="mini-sub-pro">Edit Distributors</span></a></li>
                      </ul> --}}
                  </li>
                  <li>
                    <a  href="/RequestDistributor" aria-expanded="false"><span class="educate-icon educate-department icon-wrap"></span> <span class="mini-click-non">@lang('site.request-distributor')</span></a>
                </li>
              </ul>
          </nav>
      </div>
  </nav>
</div>
<!-- End Left menu area -->
<!-- Start Welcome area -->
<div class="all-content-wrapper">
  <div class="container-fluid">
      <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
              <div class="logo-pro">
                  <a href="index.html"><img class="main-logo" src="{{ asset('dashboard/img/logo/logo.png') }}" alt="" /></a>
              </div>
          </div>
      </div>
  </div>
  <div class="header-advance-area">
      <div class="header-top-area">
          <div class="container-fluid">
              <div class="row">
                  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                      <div class="header-top-wraper">
                          <div class="row">
                              <div class="col-lg-1 col-md-0 col-sm-1 col-xs-12">
                                  <div class="menu-switcher-pro">
                                      <button type="button" id="sidebarCollapse" class="btn bar-button-pro header-drl-controller-btn btn-info navbar-btn">
                                          <i class="educate-icon educate-nav"></i>
                                      </button>
                                  </div>
                              </div>
                              <div class="col-lg-6 col-md-7 col-sm-6 col-xs-12">

                              </div>
                              <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">

                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
      <!-- Mobile Menu start -->
      <div class="mobile-menu-area">
          <div class="container">
              <div class="row">
                  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                      <div class="mobile-menu">
                          <nav id="dropdown">
                              <ul class="mobile-menu-nav">
                                  <li><a href="distributors.html">Distributors List</a></li>
                                  <li><a href="add-distributors.html">Add Distributors</a></li>
                                  <li><a href="edit-distributors.html">Edit Distributors</a></li>
                              </ul>
                          </nav>
                      </div>
                  </div>
              </div>
          </div>
      </div>
      <!--/ Mobile Menu end -->

      

  @yield('admin-content')
  @include('partials._session')

  <div class="footer-copyright-area">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="footer-copy-right">
                    <p>Copyright © 2020. All rights reserved by <a href="#">Ultimatrue</a></p>
                </div>
            </div>
        </div>
    </div>
</div>
</div>


<body>



    <!-- jquery
		============================================ -->
    <script src="{{ asset('dashboard/js/vendor/jquery-1.12.4.min.js') }}"></script>
    <!-- bootstrap JS
		============================================ -->
    <script src="{{ asset('dashboard/js/bootstrap.min.js') }}"></script>
    <!-- wow JS
		============================================ -->
    <script src="{{ asset('dashboard/js/wow.min.js') }}"></script>
    <!-- price-slider JS
		============================================ -->
    <script src="{{ asset('dashboard/js/jquery-price-slider.js') }}"></script>
    <!-- meanmenu JS
		============================================ -->
    <script src="{{ asset('dashboard/js/jquery.meanmenu.js') }}"></script>
    <!-- owl.carousel JS
		============================================ -->
    <script src="{{ asset('dashboard/js/owl.carousel.min.js') }}"></script>
    <!-- sticky JS
		============================================ -->
    <script src="{{ asset('dashboard/js/jquery.sticky.js') }}"></script>
    <!-- scrollUp JS
		============================================ -->
    <script src="{{ asset('dashboard/js/jquery.scrollUp.min.js') }}"></script>
    <!-- mCustomScrollbar JS
		============================================ -->
    <script src="{{ asset('dashboard/js/scrollbar/jquery.mCustomScrollbar.concat.min.js') }}"></script>
    <script src="{{ asset('dashboard/js/scrollbar/mCustomScrollbar-active.js') }}"></script>
    <!-- metisMenu JS
		============================================ -->
    <script src="{{ asset('dashboard/js/metisMenu/metisMenu.min.js') }}"></script>
    <script src="{{ asset('dashboard/js/metisMenu/metisMenu-active.js') }}"></script>

	<!-- chosen JS
		============================================ -->
	<script src="{{ asset('dashboard/js/chosen/chosen.jquery.js') }}"></script>
	<script src="{{ asset('dashboard/js/chosen/chosen-active.js') }}"></script>
	<!-- select2 JS
		============================================ -->
	<script src="{{ asset('dashboard/js/select2/select2.full.min.js') }}"></script>
	<script src="{{ asset('dashboard/js/select2/select2-active.js') }}"></script>
    <!-- morrisjs JS
		============================================ -->
    <script src="{{ asset('dashboard/js/sparkline/jquery.sparkline.min.js') }}"></script>
    <script src="{{ asset('dashboard/js/sparkline/jquery.charts-sparkline.js') }}"></script>
    <!-- calendar JS
		============================================ -->
    <script src="{{ asset('dashboard/js/calendar/moment.min.js') }}"></script>
    <script src="{{ asset('dashboard/js/calendar/fullcalendar.min.js') }}"></script>
    <script src="{{ asset('dashboard/js/calendar/fullcalendar-active.js') }}"></script>
    <!-- form validate JS
		============================================ -->
    <script src="{{ asset('dashboard/js/form-validation/jquery.form.min.js') }}"></script>
    <script src="{{ asset('dashboard/js/form-validation/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('dashboard/js/form-validation/form-active.js') }}"></script>
    <!-- tab JS
		============================================ -->
    <script src="{{ asset('dashboard/js/tab.js') }}"></script>
    <!-- plugins JS
		============================================ -->
    <script src="{{ asset('dashboard/js/plugins.js') }}"></script>
    <!-- main JS
		============================================ -->
    <script src="{{ asset('dashboard/js/main.js') }}"></script>
    <!-- tawk chat JS
		============================================ -->
    {{-- <script src="{{ asset('dashboard/js/tawk-chat.js') }}"></script> --}}

    <!-- notification JS
		============================================ -->
    <script src="{{ asset('dashboard/js/notifications/Lobibox.js') }}"></script>
    <script src="{{ asset('dashboard/js/notifications/notification-active.js') }}"></script>

    <!-- data table JS
		============================================ -->
	<script src="{{ asset('dashboard/js/data-table/bootstrap-table.js') }}"></script>
	<script src="{{ asset('dashboard/js/data-table/tableExport.js') }}"></script>
	<script src="{{ asset('dashboard/js/data-table/data-table-active.js') }}"></script>
	<script src="{{ asset('dashboard/js/data-table/bootstrap-table-editable.js') }}"></script>
	<script src="{{ asset('dashboard/js/data-table/bootstrap-editable.js') }}"></script>
	<script src="{{ asset('dashboard/js/data-table/bootstrap-table-resizable.js') }}"></script>
	<script src="{{ asset('dashboard/js/data-table/colResizable-1.5.source.js') }}"></script>
	<script src="{{ asset('dashboard/js/data-table/bootstrap-table-export.js') }}"></script>

  <script>
    $(document).ready(function () {

        // $('.sidebar-menu').tree();

        //icheck
        // $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
        //     checkboxClass: 'icheckbox_minimal-blue',
        //     radioClass: 'iradio_minimal-blue'
        // });

        //delete
        $('.delete').click(function (e) {

            var that = $(this)

            e.preventDefault();

            var n = new Noty({
                text: "@lang('site.confirm_delete')",
                type: "warning",
                killer: true,
                buttons: [
                    Noty.button("@lang('site.yes')", 'btn btn-success mr-2', function () {
                        that.closest('form').submit();
                    }),

                    Noty.button("@lang('site.no')", 'btn btn-primary mr-2', function () {
                        n.close();
                    })
                ]
            });

            n.show();

        });//end of delete

        // // image preview
        // $(".image").change(function () {
        //
        //     if (this.files && this.files[0]) {
        //         var reader = new FileReader();
        //
        //         reader.onload = function (e) {
        //             $('.image-preview').attr('src', e.target.result);
        //         }
        //
        //         reader.readAsDataURL(this.files[0]);
        //     }
        //
        // });

        // CKEDITOR.config.language =  "{{ app()->getLocale() }}";

    });//end of ready
    
</script>

    @yield('admin-scripts')

</body>

</html>