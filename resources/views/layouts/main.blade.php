<!doctype html>
<html lang="en">

   <head>
      <!-- CSRF Token -->
      <meta name="csrf-token" content="{{ csrf_token() }}">
      <title>{{ config('app.name', 'Laravel') }}</title>
      <meta charset="utf-8" />
      <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('theme/img/apple-icon.png') }}" />
      <link rel="icon" type="image/png" href="{{ asset('theme/img/favicon.png') }}" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
      {{-- <title>Material Dashboard PRO by Creative Tim | Premium Bootstrap Admin Template</title> --}}
      <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
      <meta name="viewport" content="width=device-width" />
      <!-- Canonical SEO -->
      <link rel="canonical" href="http://www.creative-tim.com/product/material-dashboard-pro" />
      <!--  Social tags      -->
      <meta name="keywords" content="material dashboard, bootstrap material admin, bootstrap material dashboard, material design admin, material design, creative tim, html dashboard, html css dashboard, web dashboard, freebie, free bootstrap dashboard, css3 dashboard, bootstrap admin, bootstrap dashboard, frontend, responsive bootstrap dashboard, premiu material design admin">
      <meta name="description" content="Material Dashboard PRO is a Premium Material Bootstrap Admin with a fresh, new design inspired by Google's Material Design.">
      <!-- Schema.org markup for Google+ -->
      <meta itemprop="name" content="Material Dashboard PRO by Creative Tim | Premium Bootstrap Admin Template">
      <meta itemprop="description" content="Material Dashboard PRO is a Premium Material Bootstrap Admin with a fresh, new design inspired by Google's Material Design.">
      <meta itemprop="image" content="http://s3.amazonaws.com/creativetim_bucket/products/51/opt_mdp_thumbnail.jpg">
      <!-- Twitter Card data -->
      <meta name="twitter:card" content="summary_large_image">
      <meta name="twitter:site" content="@creativetim">
      <meta name="twitter:title" content="Material Dashboard PRO by Creative Tim | Premium Bootstrap Admin Template">
      <meta name="twitter:description" content="Material Dashboard PRO is a Premium Material Bootstrap Admin with a fresh, new design inspired by Google's Material Design.">
      <meta name="twitter:creator" content="@creativetim">
      <meta name="twitter:image" content="http://s3.amazonaws.com/creativetim_bucket/products/51/opt_mdp_thumbnail.jpg">
      <!-- Open Graph data -->
      <meta property="fb:app_id" content="655968634437471">
      <meta property="og:title" content="Material Dashboard PRO by Creative Tim | Premium Bootstrap Admin Template" />
      <meta property="og:type" content="article" />
      <meta property="og:url" content="http://www.creative-tim.com/product/material-dashboard-pro" />
      <meta property="og:image" content="http://s3.amazonaws.com/creativetim_bucket/products/51/opt_mdp_thumbnail.jpg" />
      <meta property="og:description" content="Material Dashboard PRO is a Premium Material Bootstrap Admin with a fresh, new design inspired by Google's Material Design." />
      <meta property="og:site_name" content="Creative Tim" />
      
      <link href="{{ asset('css/app.css') }}" rel="stylesheet" />
      
      <!-- Bootstrap core CSS     -->
      <link href="{{ asset('theme/css/bootstrap.min.css') }}" rel="stylesheet" />
      <!--  Material Dashboard CSS    -->
      <link href="{{ asset('theme/css/material-dashboard.css?v=1.2.0') }}" rel="stylesheet" />
      <!--  CSS for Demo Purpose, don't include it in your project     -->
      <link href="{{ asset('theme/css/demo.css') }}" rel="stylesheet" />
      <!--     Fonts and icons     -->
      <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
      <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Material+Icons" />
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

      <link href="{{ asset('css/main.css') }}" rel="stylesheet" />
   </head>


   <body>

      <div class="wrapper">
         @include('layouts.sidebar')
         <div class="main-panel">

            <nav class="navbar navbar-transparent navbar-absolute">
               <div class="container-fluid">
                  <div class="navbar-minimize">
                     <button id="minimizeSidebar" class="btn btn-round btn-white btn-fill btn-just-icon">
                     <i class="material-icons visible-on-sidebar-regular">more_vert</i>
                     <i class="material-icons visible-on-sidebar-mini">view_list</i>
                     </button>
                  </div>
                  <div class="navbar-header">
                     <button type="button" class="navbar-toggle" data-toggle="collapse">
                     <span class="sr-only">Toggle navigation</span>
                     <span class="icon-bar"></span>
                     <span class="icon-bar"></span>
                     <span class="icon-bar"></span>
                     </button>
                     <a class="navbar-brand" href="#"> {{ env('APP_NAME') }} / {{ request()->path() }}</a>
                  </div>
                  <div class="collapse navbar-collapse">
                     <ul class="nav navbar-nav navbar-right">
                        @auth
                        <li>
                           <a href="{{ url('dashboard') }}" class="dropdown-toggle" data-toggle="dropdown_icon">
                              <i class="material-icons">dashboard</i>
                              <p class="hidden-lg hidden-md">Dashboard</p>
                           </a>
                        </li>
                        
                        <li class="dropdown" id="dropdown_icon">
                           <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                              <i class="material-icons">notifications</i>
                              <span class="notification">5</span>
                              <p class="hidden-lg hidden-md">
                                 Notifications
                                 <b class="caret"></b>
                              </p>
                           </a>
                           <ul class="dropdown-menu">
                              <li>
                                 <a href="#">Mike John responded to your email</a>
                              </li>
                              <li>
                                 <a href="#">You have 5 new tasks</a>
                              </li>
                              <li>
                                 <a href="#">You're now friend with Andrew</a>
                              </li>
                              <li>
                                 <a href="#">Another Notification</a>
                              </li>
                              <li>
                                 <a href="#">Another One</a>
                              </li>
                           </ul>
                        </li>
                        @endauth

                        <li>
                           <div class="collapse navbar-collapse" id="app-navbar-collapse">
                              <!-- Left Side Of Navbar -->
                              <ul class="nav navbar-nav">
                                 &nbsp;
                              </ul>
                              <!-- Right Side Of Navbar -->
                              <ul class="nav navbar-nav navbar-right">
                                 <!-- Authentication Links -->
                                 @guest
                                 <li><a href="{{ route('login') }}">Login</a></li>
                                 <li><a href="{{ route('register') }}">Register</a></li>
                                 @else
                                 <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown_menu" role="button"
                                       aria-expanded="false" aria-haspopup="true">
                                       {{ Auth::user()->name }} <span class="caret"></span>
                                    </a>
                                    <div class="dropdown-menu" id="dropdown_menu">
                                       
                                    <ul>
                                       <li>
                                          <a href="{{ route('logout') }}"
                                             onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                          Logout
                                          </a>
                                          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                             {{ csrf_field() }}
                                          </form>
                                       </li>
                                    </ul>
                                    </div>

                                       <li>
                                          <a href="{{ route('logout') }}"
                                             onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                          Logout
                                          </a>
                                          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                             {{ csrf_field() }}
                                          </form>
                                       </li>
                                       
                                 @endguest
                              </ul>
                           </div>
                        </li>
                        {{-- 
                        <li class="separator hidden-lg hidden-md"></li>
                     </ul>
                     <form class="navbar-form navbar-right" role="search">
                        <div class="form-group form-search is-empty">
                           <input type="text" class="form-control" placeholder="Search">
                           <span class="material-input"></span>
                        </div>
                        <button type="submit" class="btn btn-white btn-round btn-just-icon">
                           <i class="material-icons">search</i>
                           <div class="ripple-container"></div>
                        </button>
                     </form>
                     --}}
                 </ul>
                  </div>
               </div>
            </nav>
            @yield('content')
            <footer class="footer">
               <div class="container-fluid">
                  <nav class="pull-left">
                     <ul>
                        <li>
                           <a href="#">
                           Home
                           </a>
                        </li>
                        <li>
                           <a href="#">
                           Company
                           </a>
                        </li>
                        <li>
                           <a href="#">
                           Portfolio
                           </a>
                        </li>
                        <li>
                           <a href="#">
                           Blog
                           </a>
                        </li>
                     </ul>
                  </nav>
                  <p class="copyright pull-right">
                     &copy;
                     <script>
                        document.write(new Date().getFullYear())
                     </script>
                     <a href="http://www.creative-tim.com">Creative Tim</a>, made with love for a better web
                  </p>
               </div>
            </footer>
         </div>
      </div>
   </body>
   <!--   Core JS Files   -->
   <script src="{{ mix('js/app.js') }}"></script>

   <script src="{{ asset('theme/js/jquery-3.2.1.min.js') }}" type="text/javascript"></script>
   <script src="{{ asset('theme/js/bootstrap.min.js') }}" type="text/javascript"></script>
   <script src="{{ asset('theme/js/material.min.js') }}" type="text/javascript"></script>
   <script src="{{ asset('theme/js/perfect-scrollbar.jquery.min.js') }}" type="text/javascript"></script>
   <!-- Library for adding dinamically elements -->
   <script src="{{ asset('theme/js/arrive.min.js') }}" type="text/javascript"></script>
   <!-- Forms Validations Plugin -->
   <script src="{{ asset('theme/js/jquery.validate.min.js') }}"></script>
   <!-- Promise Library for SweetAlert2 working on IE -->
   <script src="{{ asset('theme/js/es6-promise-auto.min.js') }}"></script>
   <!--  Plugin for Date Time Picker and Full Calendar Plugin-->
   <script src="{{ asset('theme/js/moment.min.js') }}"></script>
   <!--  Charts Plugin, full documentation here: https://gionkunz.github.io/chartist-js/ -->
   <script src="{{ asset('theme/js/chartist.min.js') }}"></script>
   <!--  Plugin for the Wizard, full documentation here: https://github.com/VinceG/twitter-bootstrap-wizard -->
   <script src="{{ asset('theme/js/jquery.bootstrap-wizard.js') }}"></script>
   <!--  Notifications Plugin, full documentation here: http://bootstrap-notify.remabledesigns.com/    -->
   <script src="{{ asset('theme/js/bootstrap-notify.js') }}"></script>
   <!--   Sharrre Library    -->
   <script src="{{ asset('theme/js/jquery.sharrre.js') }}"></script>
   <!--  Plugin for the DateTimePicker, full documentation here: https://eonasdan.github.io/bootstrap-datetimepicker/ -->
   <script src="{{ asset('theme/js/bootstrap-datetimepicker.js') }}"></script>
   <!-- Vector Map plugin, full documentation here: http://jvectormap.com/documentation/ -->
   <script src="{{ asset('theme/js/jquery-jvectormap.js') }}"></script>
   <!-- Sliders Plugin, full documentation here: https://refreshless.com/nouislider/ -->
   <script src="{{ asset('theme/js/nouislider.min.js') }}"></script>
   <!--  Google Maps Plugin    -->
   {{-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAFPQibxeDaLIUHsC6_KqDdFaUdhrbhZ3M"></script> --}}
   <!--  Plugin for Select, full documentation here: http://silviomoreto.github.io/bootstrap-select -->
   <script src="{{ asset('theme/js/jquery.select-bootstrap.js') }}"></script>
   <!--  DataTables.net Plugin, full documentation here: https://datatables.net/    -->
   <script src="{{ asset('theme/js/jquery.datatables.js') }}"></script>
   <!-- Sweet Alert 2 plugin, full documentation here: https://limonte.github.io/sweetalert2/ -->
   <script src="{{ asset('theme/js/sweetalert2.js') }}"></script>
   <!-- Plugin for Fileupload, full documentation here: http://www.jasny.net/bootstrap/javascript/#fileinput -->
   <script src="{{ asset('theme/js/jasny-bootstrap.min.js') }}"></script>
   <!--  Full Calendar Plugin, full documentation here: https://github.com/fullcalendar/fullcalendar    -->
   <script src="{{ asset('theme/js/fullcalendar.min.js') }}"></script>
   <!-- Plugin for Tags, full documentation here: https://github.com/bootstrap-tagsinput/bootstrap-tagsinputs  -->
   <script src="{{ asset('theme/js/jquery.tagsinput.js') }}"></script>
   <!-- Material Dashboard javascript methods -->
   <script src="{{ asset('theme/js/material-dashboard.js?v=1.2.0') }}"></script>
   <!-- Material Dashboard DEMO methods, don't include it in your project! -->
   <script src="{{ asset('theme/js/demo.js') }}"></script>
   {{-- <script src="[ckeditor-build-path]/ckeditor.js"></script> --}}

    <script src="{{ asset('CKEditor/ckeditor/ckeditor.js')}}"></script>
    {{-- <script src="//cdn.ckeditor.com/4.6.2/standard/ckeditor.js"></script> --}}

   <script type="text/javascript">
      $(document).ready(function() {
          // Javascript method's body can be found {{ asset('theme/js/demos.js')}}
          demo.initDashboardPageCharts();
          demo.initVectorMap();
      });
   </script>
   @yield('scripts')
</html>

