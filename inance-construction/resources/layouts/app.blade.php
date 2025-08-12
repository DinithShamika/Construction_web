<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>DINITH - @yield('title')</title>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
  <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}" />
  <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}" />
  <link rel="stylesheet" href="{{ asset('css/style.css') }}" />
  <link rel="stylesheet" href="{{ asset('css/responsive.css') }}" />
</head>

<body>
  <div class="hero_area">
    <!-- header section -->
    <header class="header_section">
      <div class="header_top">
        <div class="container-fluid">
          <div class="contact_nav">
            <a href="">
              <i class="fa fa-phone" aria-hidden="true"></i>
              <span>Call : +01 123455678990</span>
            </a>
            <a href="">
              <i class="fa fa-envelope" aria-hidden="true"></i>
              <span>Email : demo@gmail.com</span>
            </a>
          </div>
        </div>
      </div>
      <div class="header_bottom">
        <div class="container-fluid">
          <nav class="navbar navbar-expand-lg custom_nav-container">
            <a class="navbar-brand" href="{{ route('home') }}">
              <span>Inance</span>
            </a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent">
              <span class=""> </span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav">
                <li class="nav-item @if(Route::currentRouteName() == 'home') active @endif">
                  <a class="nav-link" href="{{ route('home') }}">Home</a>
                </li>
                <li class="nav-item @if(Route::currentRouteName() == 'about') active @endif">
                  <a class="nav-link" href="{{ route('about') }}">About</a>
                </li>
                <li class="nav-item @if(Route::currentRouteName() == 'services') active @endif">
                  <a class="nav-link" href="{{ route('services') }}">Services</a>
                </li>
                <li class="nav-item @if(Route::currentRouteName() == 'contact') active @endif">
                  <a class="nav-link" href="{{ route('contact') }}">Contact Us</a>
                </li>
              </ul>
            </div>
          </nav>
        </div>
      </div>
    </header>
    <!-- end header section -->
    
    @yield('hero_content')
  </div>

  @yield('content')

  <!-- info section -->
  <section class="info_section">
    <div class="container">
      <h4>Get In Touch</h4>
      <div class="row">
        <div class="col-lg-10 mx-auto">
          <div class="info_items">
            <div class="row">
              <div class="col-md-4">
                <a href="">
                  <div class="item">
                    <div class="img-box">
                      <i class="fa fa-map-marker" aria-hidden="true"></i>
                    </div>
                    <p>Lorem Ipsum is simply dummy text</p>
                  </div>
                </a>
              </div>
              <div class="col-md-4">
                <a href="">
                  <div class="item">
                    <div class="img-box">
                      <i class="fa fa-phone" aria-hidden="true"></i>
                    </div>
                    <p>+02 1234567890</p>
                  </div>
                </a>
              </div>
              <div class="col-md-4">
                <a href="">
                  <div class="item">
                    <div class="img-box">
                      <i class="fa fa-envelope" aria-hidden="true"></i>
                    </div>
                    <p>demo@gmail.com</p>
                  </div>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="social-box">
      <h4>Follow Us</h4>
      <div class="box">
        <a href=""><i class="fa fa-facebook" aria-hidden="true"></i></a>
        <a href=""><i class="fa fa-twitter" aria-hidden="true"></i></a>
        <a href=""><i class="fa fa-youtube" aria-hidden="true"></i></a>
        <a href=""><i class="fa fa-instagram" aria-hidden="true"></i></a>
      </div>
    </div>
  </section>

  <!-- footer section -->
  <footer class="footer_section">
    <div class="container">
      <p>
        &copy; <span id="displayDateYear"></span> All Rights Reserved By
        <a href="https://html.design/">Free Html Templates</a>
      </p>
    </div>
  </footer>

  <script src="{{ asset('js/jquery-3.4.1.min.js') }}"></script>
  <script src="{{ asset('js/bootstrap.js') }}"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
  <script src="{{ asset('js/custom.js') }}"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCh39n5U-4IoWpsVGUHWdqB6puEkhRLdmI&callback=myMap"></script>
</body>
</html>