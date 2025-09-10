<!DOCTYPE html>
<html lang="en">
  <head>
<title>PetCare Plus - Trusted Pet Sitting & Grooming Services</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Montserrat:200,300,400,500,600,700,800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- CSS -->
       <link rel="shortcut icon" href="{{ asset('images/bg3.jpg') }}" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset('css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap-datepicker.css') }}">
    <link rel="stylesheet" href="{{ asset('css/jquery.timepicker.css') }}">
    <link rel="stylesheet" href="{{ asset('css/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">


  </head>
  <body>

    <!-- Header -->
    <div class="wrap">
      <div class="container">
        <div class="row">
          <div class="col-md-6 d-flex align-items-center">
            <p class="mb-0 phone pl-md-2">
              <a href="#" class="mr-2"><span class="fa fa-phone mr-1"></span> +00 1234 567</a> 
              <a href="#"><span class="fa fa-paper-plane mr-1"></span> youremail@email.com</a>
            </p>
          </div>
          <div class="col-md-6 d-flex justify-content-md-end">
            <div class="social-media">
              <p class="mb-0 d-flex">
                <a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-facebook"><i class="sr-only">Facebook</i></span></a>
                <a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-twitter"><i class="sr-only">Twitter</i></span></a>
                <a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-instagram"><i class="sr-only">Instagram</i></span></a>
                <a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-dribbble"><i class="sr-only">Dribbble</i></span></a>
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
      <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}"><span class="flaticon-pawprint-1 mr-2"></span>Pet sitting</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="fa fa-bars"></span> Menu
        </button>
        <div class="collapse navbar-collapse" id="ftco-nav">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item"><a href="{{ url('/') }}" class="nav-link">Home</a></li>
            <li class="nav-item"><a href="{{ url('/about') }}" class="nav-link">About</a></li>
            <li class="nav-item"><a href="{{ url('/services') }}" class="nav-link">Services</a></li>
                        <li class="nav-item"><a href="{{ url('/vet') }}" class="nav-link">Veterinarian</a></li>

            <li class="nav-item"><a href="{{ url('/gallery') }}" class="nav-link">Gallery</a></li>
            <li class="nav-item"><a href="{{ url('/shop') }}" class="nav-link">Pricing</a></li>
            <li class="nav-item"><a href="{{ url('/blog') }}" class="nav-link">Blog</a></li>
            <li class="nav-item"><a href="{{ url('/contact') }}" class="nav-link">Contact</a></li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Page Content -->
    @yield('content')

 <!-- Footer -->
<footer class="footer pt-5" style="background-color: #1f1f1f; color: #f1f1f1;">
  <div class="container">

    <div class="row">

      <!-- About Section -->
      <div class="col-md-6 col-lg-3 mb-4">
        <h5 class="footer-heading mb-3">Petsitting</h5>
        <p>Providing loving, professional care for your pets. Every pet feels at home with us.</p>
        <div class="social-icons mt-3">
          <a href="#" class="text-white mr-3"><i class="fab fa-facebook-f"></i></a>
          <a href="#" class="text-white mr-3"><i class="fab fa-twitter"></i></a>
          <a href="#" class="text-white"><i class="fab fa-instagram"></i></a>
        </div>
      </div>

      <!-- Latest News -->
      <div class="col-md-6 col-lg-3 mb-4">
        <h5 class="footer-heading mb-3">Latest News</h5>
        <div class="footer-news d-flex mb-3">
          <div class="mr-3" style="width:60px; height:60px; background:url('{{ asset('images/image_1.jpg') }}'); background-size:cover; background-position:center; border-radius:8px;"></div>
          <div>
            <a href="#" class="text-white font-weight-bold small">Even the all-powerful Pointing has no control</a>
            <div class="small text-muted mt-1"><i class="far fa-calendar-alt mr-1"></i>April 7, 2020</div>
          </div>
        </div>
        <div class="footer-news d-flex mb-3">
          <div class="mr-3" style="width:60px; height:60px; background:url('{{ asset('images/image_2.jpg') }}'); background-size:cover; background-position:center; border-radius:8px;"></div>
          <div>
            <a href="#" class="text-white font-weight-bold small">Even the all-powerful Pointing has no control</a>
            <div class="small text-muted mt-1"><i class="far fa-calendar-alt mr-1"></i>April 7, 2020</div>
          </div>
        </div>
      </div>

      <!-- Quick Links -->
      <div class="col-md-6 col-lg-3 mb-4">
        <h5 class="footer-heading mb-3">Quick Links</h5>
        <ul class="list-unstyled">
          <li><a href="{{ url('/') }}" class="text-white d-block py-1">Home</a></li>
          <li><a href="{{ url('/about') }}" class="text-white d-block py-1">About</a></li>
          <li><a href="{{ url('/services') }}" class="text-white d-block py-1">Services</a></li>
          <li><a href="{{ url('/gallery') }}" class="text-white d-block py-1">Gallery</a></li>
          <li><a href="{{ url('/blog') }}" class="text-white d-block py-1">Blog</a></li>
          <li><a href="{{ url('/contact') }}" class="text-white d-block py-1">Contact</a></li>
        </ul>
      </div>

      <!-- Contact Info -->
      <div class="col-md-6 col-lg-3 mb-4">
        <h5 class="footer-heading mb-3">Have a Questions?</h5>
        <ul class="list-unstyled">
          <li class="mb-2"><i class="fas fa-map-marker-alt mr-2"></i>203 Fake St. Mountain View, SF, USA</li>
          <li class="mb-2"><i class="fas fa-phone mr-2"></i>+2 392 3929 210</li>
          <li class="mb-2"><i class="fas fa-envelope mr-2"></i>info@yourdomain.com</li>
        </ul>
      </div>

    </div>

    <!-- Footer Bottom -->
    <div class="row mt-5 pt-3 border-top border-secondary">
      <div class="col-md-12 text-center">
        <p class="mb-0 small">Copyright &copy;<script>document.write(new Date().getFullYear());</script>
          All rights reserved | Crafted with <i class="fa fa-heart text-danger"></i> by Aliza
        </p>
      </div>
    </div>
  </div>
</footer>


    <!-- Loader -->
    <div id="ftco-loader" class="show fullscreen">
      <svg class="circular" width="48px" height="48px">
        <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/>
        <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/>
      </svg>
    </div>

    <!-- JS -->
     <script src="https://cdnjs.cloudflare.com/ajax/libs/countup.js/2.0.8/countUp.min.js"></script>
<!-- Load Google Maps API only once, async + defer -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&callback=initMap"async defer></script>

    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/jquery-migrate-3.0.1.min.js') }}"></script>
    <script src="{{ asset('js/popper.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/jquery.easing.1.3.js') }}"></script>
    <script src="{{ asset('js/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('js/jquery.stellar.min.js') }}"></script>
    <script src="{{ asset('js/jquery.animateNumber.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap-datepicker.js') }}"></script>
    <script src="{{ asset('js/jquery.timepicker.min.js') }}"></script>
    <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('js/scrollax.min.js') }}"></script>
    <script src="{{ asset('js/google-map.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>
  </body>
</html>
