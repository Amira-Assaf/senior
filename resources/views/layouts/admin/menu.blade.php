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
            
                  @if (Auth::user()->hasPermission('users-read'))
                  <li class="active">
                    <a  href="/AdminUser" aria-expanded="false"><span class="educate-icon educate-department icon-wrap"></span> <span class="mini-click-non">@lang('site.list-user')</span></a>
                </li>
                @endif
             
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
                                  <li><a href="">Users List</a></li>
                              </ul>
                          </nav>
                      </div>
                  </div>
              </div>
          </div>
      </div>
      <!--/ Mobile Menu end -->

      