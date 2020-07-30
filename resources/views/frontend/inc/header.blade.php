<!DOCTYPE html>
<html lang="en">

<head>
  <title>Online Notice Board &mdash;</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="{{asset('frontend')}}/images/icon.png">
  <link href="https://fonts.googleapis.com/css?family=Muli:300,400,700,900" rel="stylesheet">
  <link rel="stylesheet" href="{{asset('frontend')}}/fonts/icomoon/style.css">

  <link rel="stylesheet" href="{{asset('frontend')}}/css/bootstrap.min.css">
  <link rel="stylesheet" href="{{asset('frontend')}}/css/jquery-ui.css">
  <link rel="stylesheet" href="{{asset('frontend')}}/css/owl.carousel.min.css">
  <link rel="stylesheet" href="{{asset('frontend')}}/css/owl.theme.default.min.css">
  <link rel="stylesheet" href="{{asset('frontend')}}/css/owl.theme.default.min.css">

  <link rel="stylesheet" href="{{asset('frontend')}}/css/jquery.fancybox.min.css">

  <link rel="stylesheet" href="{{asset('frontend')}}/css/bootstrap-datepicker.css">

  <link rel="stylesheet" href="{{asset('frontend')}}/css/fontawesome/css/font-awesome.css">

  <link rel="stylesheet" href="{{asset('frontend')}}/fonts/flaticon/font/flaticon.css">

  <link rel="stylesheet" href="{{asset('frontend')}}/css/aos.css">
  <link href="{{asset('frontend')}}/css/jquery.mb.YTPlayer.min.css" media="all" rel="stylesheet" type="text/css">

  <link rel="stylesheet" href="{{asset('frontend')}}/css/style.css">
  <link rel="stylesheet" href="{{asset('frontend')}}/css/custom.css">



</head>

<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">

  <div class="site-wrap">

    <div class="site-mobile-menu site-navbar-target">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>


    <div class="py-2 bg-light">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-6 d-none d-lg-block">
            <a href="#" class="small mr-3"><span class="icon-question-circle-o mr-2"></span> Have a questions?</a>
            <a href="#" class="small mr-3"><span class="icon-phone2 mr-2"></span> 10 20 123 456</a>
            <a href="#" class="small mr-3"><span class="icon-envelope-o mr-2"></span> info@mydomain.com</a>
          </div>
          <div class="col-lg-6 text-right">
              <a href="{{route('register')}}" class="small btn btn-primary px-4 py-2 rounded-0"><span class="icon-users"></span> Register</a>
             @if((auth()->check()))

                  <a href="{{route('logout')}}" class="small mr-3"><span class="icon-unlock-alt"></span> Log Out</a>
              @else
            <a href="{{route('login')}}" class="small mr-3"><span class="icon-unlock-alt"></span> Log In</a>

               @endif

          </div>
        </div>
      </div>
    </div>
    <header class="site-navbar py-4 js-sticky-header site-navbar-target" role="banner">

      <div class="container">
        <div class="d-flex align-items-center">
          <div class="site-logo">
            <a href="{{route('homepage')}}" class="d-block">
              <img src="{{asset('frontend')}}/images/logo.png" alt="Image" class="img-fluid" style="width: 150px;">
            </a>
          </div>
          <div class="mr-auto">
            <nav class="site-navigation position-relative text-right" role="navigation">
              <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">
                <li class="active">
                  <a href="{{route('homepage')}}" class="nav-link text-left">Home</a>
                </li>
                <li class="has-children">
                  <a href="about.html" class="nav-link text-left">About Us</a>
                  <ul class="dropdown">
                    <li><a href="teachers.html">Our Teachers</a></li>
                    <li><a href="about.html">Our School</a></li>
                  </ul>
                </li>
                <li>
                  <a href="admissions.html" class="nav-link text-left">Admissions</a>
                </li>
                <li>
                  <a href="courses.html" class="nav-link text-left">Courses</a>
                </li>
                <li>
                    <a href="contact.html" class="nav-link text-left">Contact</a>
                  </li>
              </ul>                                                                                                                                                                                                                                                                                          </ul>
            </nav>

          </div>
          <div class="ml-auto">
            <div class="social-wrap">
              <a href="#"><span class="icon-facebook"></span></a>
              <a href="#"><span class="icon-twitter"></span></a>
              <a href="#"><span class="icon-linkedin"></span></a>

              <a href="#" class="d-inline-block d-lg-none site-menu-toggle js-menu-toggle text-black"><span
                class="icon-menu h3"></span></a>
            </div>
          </div>

        </div>
      </div>

    </header>
