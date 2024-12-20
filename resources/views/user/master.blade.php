<!DOCTYPE html>
<html lang="en">

<head>
  <title>@yield('title')</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


  <link href="https://fonts.googleapis.com/css?family=Muli:300,400,700,900" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('fonts/icomoon/style.css') }}">

  <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ asset('css/jquery-ui.css') }}">
  <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
  <link rel="stylesheet" href="{{ asset('css/owl.theme.default.min.css') }}">
  <link rel="stylesheet" href="{{ asset('css/owl.theme.default.min.css') }}">

  <link rel="stylesheet" href="{{ asset('css/jquery.fancybox.min.css') }}">

  <link rel="stylesheet" href="{{ asset('css/bootstrap-datepicker.css') }}">

  <link rel="stylesheet" href="{{ asset('fonts/flaticon/font/flaticon.css') }}">

  <link rel="stylesheet" href="{{ asset('css/aos.css') }}">
  <link href="{{ asset('css/jquery.mb.YTPlayer.min.css') }}" media="all" rel="stylesheet" type="text/css">

  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
  <link rel="stylesheet" href="{{ asset('css/custom-style.css') }}">
  
  <link rel="icon" type="image/x-icon" href="{{ asset('images/LMS-icon.png') }}">


</head>

<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">

  <div class="site-wrap">

    <div class="site-mobile-menu site-navbar-target">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body">
        
      </div>
    </div>


    <div class="py-2 bg-light">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-9 d-none d-lg-block">
            <a href="{{ route('contact-us') }}" class="small mr-3"><span class="icon-question-circle-o mr-2"></span> Have a questions?</a> 
            <a href="" class="small mr-3"><span class="icon-phone2 mr-2"></span> +959 777 439 816</a> 
            <a href="" class="small mr-3"><span class="icon-envelope-o mr-2"></span> myatthukha000@gmail.com</a> 
          </div>
          <div class="col-lg-3 text-right">
            @if(Auth::guard('user')->check())
              <!-- Show profile picture and logout button if logged in -->
              <a href="{{ route('home') }}" class="small mr-3 user-dropdown-toggle" id="userDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Welcome! {{ Auth::guard('user')->user()->name }}
                <img src="{{ Auth::guard('user')->user()->avatar }}" class="rounded-circle profile-image" width="45" height="45">
                <span id="dropdown-arrow">▼</span>
              </a>
              <div class="user-dropdown-menu" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="{{ route('profile') }}#view">View Profile</a>
                <a class="dropdown-item" href="{{ route('profile') }}#view2">My Courses</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item logout" href="{{ route('logout') }}"  data-toggle="modal" data-target=".bd-example-modal-sm">
                  Log Out&nbsp;&nbsp;<span class="icon-sign-out"></span>
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST">
                  @csrf
                </form>
              </div>
             @else
              <!-- Show login and register links if not logged in -->
              <a href="{{ route('login') }}" class="small mr-3"><span class="icon-sign-in"></span>&nbsp;&nbsp;Log In</a>
              <a href="{{ route('register') }}" class="small btn btn-primary px-4 py-2 rounded-1"><span class="icon-users"></span>&nbsp;Register</a>
            @endif
          </div>
        </div>
      </div>
    </div>
    <header class="site-navbar py-4 js-sticky-header site-navbar-target" role="banner">

      <div class="container">
        <div class="d-flex align-items-center">
          <div class="site-logo">
            <a href="{{ route('home') }}" class="d-block">
              <img src="{{ asset('images/logo.png') }}" alt="Image" class="img-fluid">
            </a>
          </div>
          <div class="mr-auto">
            <nav class="site-navigation position-relative text-right" role="navigation">
              <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">
                <li class="{{ Request::is('/') ? 'active' : '' }}">
                  <a href="{{ route('home') }}" class="nav-link text-left">Home</a>
                </li>
                {{-- <li>
                  <a href="admissions.html" class="nav-link text-left">Admissions</a>
                </li> --}}
                <li class="{{ Request::is('courses') ? 'active' : '' }}">
                  <a href="{{ route('courses') }}" class="nav-link text-left">Courses</a>
                </li>
                <li class="has-children {{ Request::is('teachers') || Request::is('about') ? 'active' : '' }}">
                  <a href="{{ route('about') }}" class="nav-link text-left">About Us</a>
                  <ul class="dropdown">
                    <li><a href="{{ route('teachers') }}">Our Teacher</a></li>
                    <li><a href="{{ route('about') }}">Our School</a></li>
                  </ul>
                </li>
                <li class="{{ Request::is('contact-us') ? 'active' : '' }}">
                  <a href="{{ route('contact-us') }}" class="nav-link text-left">Contact</a>
                </li>
              </ul>
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

  @yield('main')

    <div class="footer">
      <div class="container">
        <div class="row">
          <div class="col-lg-3">
            <p class="mb-4"><img src="{{ asset('images/logo.png') }}" alt="Image" class="img-fluid"></p>
            <p>A comprehensive platform designed to facilitate course management, student engagement, and educational content delivery, streamlining the learning process for all users.</p>  
            <p><a href="{{ route('about') }}">Learn More</a></p>
          </div>
          <div class="col-lg-3">
            <h3 class="footer-heading"><span>Our Campus</span></h3>
            <ul class="list-unstyled">
                <li><a href="#">Acedemic</a></li>
                <li><a href="#">News</a></li>
                <li><a href="#">Our Interns</a></li>
                <li><a href="#">Our Leadership</a></li>
                <li><a href="#">Careers</a></li>
                <li><a href="#">Human Resources</a></li>
            </ul>
          </div>
          <div class="col-lg-3">
              <h3 class="footer-heading"><span>Our Courses</span></h3>
              <ul class="list-unstyled">
                  <li><a href="#">Math</a></li>
                  <li><a href="#">Science &amp; Engineering</a></li>
                  <li><a href="#">Arts &amp; Humanities</a></li>
                  <li><a href="#">Economics &amp; Finance</a></li>
                  <li><a href="#">Business Administration</a></li>
                  <li><a href="#">Computer Science</a></li>
              </ul>
          </div>
          <div class="col-lg-3">
              <h3 class="footer-heading"><span>Contact</span></h3>
              <ul class="list-unstyled">
                  <li><a href="#">Help Center</a></li>
                  <li><a href="#">Support Community</a></li>
                  <li><a href="#">Press</a></li>
                  <li><a href="#">Share Your Story</a></li>
                  <li><a href="#">Our Supporters</a></li>
              </ul>
          </div>
        </div>

        <div class="row">
          <div class="col-12">
            <div class="copyright">
                <p>
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved 
                    {{-- | This template is made with <i class="icon-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank" >Colorlib</a> --}}
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    </p>
            </div>
          </div>
        </div>
      </div>
    </div>
    

  </div>
  <!-- .site-wrap -->

  {{-- modal --}}
  <div class="modal fade bd-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Confirm Logout</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <p>Are you sure you want to log out?</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
          <button type="button" class="btn btn-primary" id="confirmLogout">Yes, Log Out</button>
        </div>
      </div>
    </div>
  </div>

  <!-- loader -->
  <div id="loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#51be78"/></svg></div>

  <script src="{{ asset('js/jquery-3.3.1.min.js') }}"></script>
  <script src="{{ asset('js/jquery-migrate-3.0.1.min.js') }}"></script>
  <script src="{{ asset('js/jquery-ui.js') }}"></script>
  <script src="{{ asset('js/popper.min.js') }}"></script>
  <script src="{{ asset('js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
  <script src="{{ asset('js/jquery.stellar.min.js') }}"></script>
  <script src="{{ asset('js/jquery.countdown.min.js') }}"></script>
  <script src="{{ asset('js/bootstrap-datepicker.min.js') }}"></script>
  <script src="{{ asset('js/jquery.easing.1.3.js') }}"></script>
  <script src="{{ asset('js/aos.js') }}"></script>
  <script src="{{ asset('js/jquery.fancybox.min.js') }}"></script>
  <script src="{{ asset('js/jquery.sticky.js') }}"></script>
  <script src="{{ asset('js/jquery.mb.YTPlayer.min.js') }}"></script>
  <script src="{{ asset('js/main.js') }}"></script>
  <script>
  document.addEventListener('DOMContentLoaded', function() {
    const userDropdownToggle = document.getElementById('userDropdown');
    const userDropdownMenu = document.querySelector('.user-dropdown-menu');
    const dropdownArrow = document.getElementById('dropdown-arrow');

    // Function to close the dropdown with fade-out animation
    function closeDropdown() {
        userDropdownMenu.classList.add('fade-out');
        dropdownArrow.textContent = '▼';

        // Wait for the fade-out animation to complete before hiding
        setTimeout(() => {
            userDropdownMenu.classList.remove('show', 'fade-out');
        }, 300); // Match the animation duration
    }

    // Toggle dropdown and arrow
    userDropdownToggle.addEventListener('click', function(event) {
        event.preventDefault();

        if (!userDropdownMenu.classList.contains('show')) {
            userDropdownMenu.classList.add('show');
            dropdownArrow.textContent = '▲';
        } else {
            closeDropdown();
        }
    });

    // Close dropdown if clicked outside
    document.addEventListener('click', function(event) {
        if (!userDropdownToggle.contains(event.target) && !userDropdownMenu.contains(event.target)) {
          if (userDropdownMenu.classList.contains('show')) {
              closeDropdown();
          }
        }
    });
  });


  $(document).ready(function() {
    // Prevent form submission when logout button is clicked
    $('#logout-form').submit(function(event) {
      event.preventDefault(); // Prevent immediate form submission
    });

    // Confirm logout when the user clicks "Yes, Log Out"
    $('#confirmLogout').click(function() {
      // Submit the form to log out
      document.getElementById('logout-form').submit();
    });
  });
  </script>
  @stack('scripts')
</body>
</html>