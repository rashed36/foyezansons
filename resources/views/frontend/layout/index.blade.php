<!DOCTYPE html>
<html lang="zxx">
<head>
    <meta charset="UTF-8">
    <meta name="description" content=" Divisima | eCommerce Template">
    <meta name="keywords" content="divisima, eCommerce, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <!-- Favicon -->
    <link href="{{asset('public/assets/frontend')}}/img/favicon.ico" rel="shortcut icon"/>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans:300,300i,400,400i,700,700i" rel="stylesheet">
  <link href="{{asset('public/assets/backend')}}/css/sb-admin-2.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.css">

    @yield('style')
    <!-- Stylesheets -->
    <link rel="stylesheet" href="{{asset('public/assets/frontend')}}/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="{{asset('public/assets/frontend')}}/css/font-awesome.min.css"/>
    <link rel="stylesheet" href="{{asset('public/assets/frontend')}}/css/flaticon.css"/>
    <link rel="stylesheet" href="{{asset('public/assets/frontend')}}/css/slicknav.min.css"/>
    <link rel="stylesheet" href="{{asset('public/assets/frontend')}}/css/jquery-ui.min.css"/>
    <link rel="stylesheet" href="{{asset('public/assets/frontend')}}/css/owl.carousel.min.css"/>
    <link rel="stylesheet" href="{{asset('public/assets/frontend')}}/css/animate.css"/>
    <link rel="stylesheet" href="{{asset('public/assets/frontend')}}/css/style.css"/>
    <link rel="stylesheet" href="{{asset('public/assets/frontend')}}/css/external.css"/>
    <link rel="stylesheet" href="{{asset('public/assets/frontend')}}/css/navber.css"/>

</head>
<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Header section -->
    <header class="header-section">
        {{-- <div class="header-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-2 text-center text-lg-left">
                        <!-- logo -->
                        <a href="{{route('homefronted')}}" class="site-logo">
                            <img style="width:190px" src="{{asset('public/assets/frontend')}}/img/logo.png" alt="">
                        </a>
                    </div>
                    <div class="col-xl-8 col-lg-8">
                        <h2 style="color: blue"><marquee>Welcome to Foyez & Sons, the world’s leading manufacturers and suppliers of textiles and apparel</marquee></h2> 
                    </div>


                </div>
            </div>
        </div> --}}

        <section class="">
            <div class="">
                <nav style="border-radius: 0px;" class="navbar navbar-expand-lg ftco_navbar ftco-navbar-light" id="ftco-navbar">
                    <div class="containers">
                        <!-- <a class="navbar-brand" href="index.html">Digital</a> -->
                        <a href="{{route('homefronted')}}" class="site-logo">
                            <img style="width:120px" src="{{asset('public/assets/frontend')}}/img/logo.png" alt="">
                         </a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="fa fa-bars"></span> Menu
                        </button>
                        <div class="collapse navbar-collapse" id="ftco-nav">
                            <ul class="navbar-nav ml-auto main-menu">
                                <li class="nav-item"><a class="nav-link" href="{{route('homefronted')}}">HOME</a>
                                </li>
                                <li class="nav-item"><a class="nav-link" href="#">ABOUT COMPANY</a>
                                    <ul class="sub-menu">
                                        <li><a href="{{route('company_profile')}}">Company Profile</a></li>
                                        <li><a href="{{route('board_of_directors')}}">Board of Directors</a></li>
                                        <li><a href="{{route('our_services')}}">Our Services</a></li>
                                        <li><a href="{{route('responsibilities_and_capabilities')}}">Responsibilities and Capabilities</a></li>
                                        <li><a href="{{route('vision_miission_and_values')}}">Vision Mission and Values</a></li>
                                        <li><a href="{{route('staff_members')}}">Staff Members</a></li>
                                        <li><a href="{{route('work_with_us')}}">Work With Us</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item"><a class="nav-link" href="{{route('our_products')}}">PRODUCTS</a></li>
                                <li class="nav-item"><a class="nav-link" href="{{route('world_wide_office')}}">OFFICES WORLDWIDE</a></li>
                                <li class="nav-item"><a class="nav-link" href="{{route('home_contact')}}">CONTACT US</a></li>
                                <li class="nav-item"><a class="nav-link" href="{{route('carrier')}}">CAREER</a></li>
                            </ul>
                        </div>
                    </div>
                </nav>
                <!-- END nav -->
            </div>
    
        </section>

    </header>

    <!-- Header section end -->
            @yield('content')
    <!-- Footer section -->
    @extends('frontend.component.footer')
    <!-- Footer section end -->
    <!--====== Javascripts & Jquery ======-->
    @extends('frontend.assets.js')
  <script src="{{ asset('https://unpkg.com/sweetalert/dist/sweetalert.min.js')}}"></script>
    <!-- text bar js -->
  <script src="{{asset('public/assets/backend')}}/js/jquery.richtext.js"></script>
    <script>
        @if(Session::has('messege'))
          var type="{{Session::get('alert-type','info')}}"
          switch(type){
              case 'info':
                   toastr.info("{{ Session::get('messege') }}");
                   break;
              case 'success':
                  toastr.success("{{ Session::get('messege') }}");
                  break;
              case 'warning':
                 toastr.warning("{{ Session::get('messege') }}");
                  break;
              case 'error':
                  toastr.error("{{ Session::get('messege') }}");
                  break;
          }
        @endif
     </script>  
    </body>
</html>
