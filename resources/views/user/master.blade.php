<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Pet Sitting & Veterinary Services - Your Pet Care Partner</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Font Awesome 5 -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-dN2tzbVVcyl+U1Nk2sI9R+M1uYvR8lX3v3XkR5V3Yl7+SmTjUj8n5n7hQ8n3kmLrH+H1l3d3k6tE0Ff1sFg6GA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link href="https://fonts.googleapis.com/css?family=Montserrat:200,300,400,500,600,700,800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="{{ asset('css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap-datepicker.css') }}">
    <link rel="stylesheet" href="{{ asset('css/jquery.timepicker.css') }}">
    <link rel="stylesheet" href="{{ asset('css/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <!-- CSS: Add in your stylesheet or inside <style> -->


  </head>
  <body>

  
  <div class="wrap py-2" style="background-color:#f8f9fa;">
  <div class="container">
    <div class="row align-items-center">
      <!-- Left: Phone & Email -->
      <div class="col-12 col-md-6 d-flex justify-content-center justify-content-md-start mb-2 mb-md-0">
        <p class="mb-0">
          <a href="tel:+001234567" class="mr-3 text-white">
            <span class="fa fa-phone mr-1"></span> +00 1234 567
          </a> 
          <a href="mailto:youremail@email.com" class="text-white">
            <span class="fa fa-paper-plane mr-1"></span> youremail@email.com
          </a>
        </p>
      </div>

      <!-- Right: Social Media -->
      <div class="col-12 col-md-6 d-flex justify-content-center justify-content-md-end">
        <div class="social-media">
          <a href="#" class="text-white mr-2"><span class="fa fa-facebook"></span></a>
          <a href="#" class="text-white mr-2"><span class="fa fa-twitter"></span></a>
          <a href="#" class="text-white mr-2"><span class="fa fa-instagram"></span></a>
          <a href="#" class="text-white"><span class="fa fa-dribbble"></span></a>
        </div>
      </div>
    </div>
  </div>
</div>

<nav class="navbar navbar-expand-lg navbar-light bg-light text-dark">
  <div class="container">
    <!-- Brand -->
    <a class="navbar-brand" href="{{ url('/') }}">
      <span class="flaticon-pawprint-1 mr-2"></span>Pet Sitting
    </a>

    <!-- Toggler for small screens -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <!-- Navbar links + buttons -->
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ml-auto align-items-lg-center">
        <li class="nav-item"><a href="{{ url('/') }}" class="nav-link">Home</a></li>
        <li class="nav-item"><a href="{{ url('/about') }}" class="nav-link">About</a></li>
        <li class="nav-item"><a href="{{ url('/vet') }}" class="nav-link">Veterinarian</a></li>
        <li class="nav-item"><a href="{{ url('/services') }}" class="nav-link">Services</a></li>
        <li class="nav-item"><a href="{{ url('/gallery') }}" class="nav-link">Gallery</a></li>
        <li class="nav-item"><a href="{{ url('/shop') }}" class="nav-link">Pricing</a></li>
        <li class="nav-item"><a href="{{ url('/blog') }}" class="nav-link">Blog</a></li>
        <li class="nav-item"><a href="{{ url('/contact') }}" class="nav-link">Contact</a></li>
        <!-- Buttons inside collapse for small screens -->
        <li class="nav-item mt-2 mt-lg-0 ml-lg-3">
          <a href="{{ url('/login') }}" class="btn btn-warning btn-block btn-sm">Login</a>
        </li>
        <li class="nav-item mt-2 mt-lg-0 ml-lg-2">
          <a href="{{ url('/regis') }}" class="btn btn-warning btn-block btn-sm">Registration</a>
        </li>
      </ul>
    </div>
  </div>
</nav>









    
  
    <main>
      @yield('content')
    </main>

 <footer class="footer">
  <div class="container">
    <div class="row">
      
     
      <div class="col-md-6 col-lg-3 mb-4 mb-md-0">
        <h2 class="footer-heading">Petsitting</h2>
        <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
        <ul class="ftco-footer-social p-0">
          <li class="ftco-animate"><a href="#"><span class="fa fa-twitter"></span></a></li>
          <li class="ftco-animate"><a href="#"><span class="fa fa-facebook"></span></a></li>
          <li class="ftco-animate"><a href="#"><span class="fa fa-instagram"></span></a></li>
        </ul>
      </div>


      <div class="col-md-6 col-lg-3 mb-4 mb-md-0">
        <h2 class="footer-heading">Latest News</h2>

        <div class="block-21 mb-4 d-flex">
          <a class="img mr-4 rounded" style="background-image: url('{{ asset('images/image_1.jpg') }}');"></a>
          <div class="text">
            <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about</a></h3>
            <div class="meta">
              <div><a href="#"><span class="icon-calendar"></span> April 7, 2020</a></div>
              <div><a href="#"><span class="icon-person"></span> Admin</a></div>
              <div><a href="#"><span class="icon-chat"></span> 19</a></div>
            </div>
          </div>
        </div>

        <div class="block-21 mb-4 d-flex">
          <a class="img mr-4 rounded" style="background-image: url('{{ asset('images/image_2.jpg') }}');"></a>
          <div class="text">
            <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about</a></h3>
            <div class="meta">
              <div><a href="#"><span class="icon-calendar"></span> April 7, 2020</a></div>
              <div><a href="#"><span class="icon-person"></span> Admin</a></div>
              <div><a href="#"><span class="icon-chat"></span> 19</a></div>
            </div>
          </div>
        </div>
      </div>

  
      <div class="col-md-6 col-lg-3 pl-lg-5 mb-4 mb-md-0">
        <h2 class="footer-heading">Quick Links</h2>
        <ul class="list-unstyled">
          <li><a href="{{ url('/') }}" class="py-2 d-block">Home</a></li>
          <li><a href="{{ url('/about') }}" class="py-2 d-block">About</a></li>
          <li><a href="{{ url('/services') }}" class="py-2 d-block">Services</a></li>
          <li><a href="{{ url('/gallery') }}" class="py-2 d-block">Gallery</a></li>
          <li><a href="{{ url('/blog') }}" class="py-2 d-block">Blog</a></li>
          <li><a href="{{ url('/contact') }}" class="py-2 d-block">Contact</a></li>
        </ul>
      </div>

     
      <div class="col-md-6 col-lg-3 mb-4 mb-md-0">
        <h2 class="footer-heading">Have a Questions?</h2>
        <div class="block-23 mb-3">
          <ul>
            <li><span class="icon fa fa-map"></span><span class="text">203 Fake St. Mountain View, San Francisco, California, USA</span></li>
            <li><a href="#"><span class="icon fa fa-phone"></span><span class="text">+2 392 3929 210</span></a></li>
            <li><a href="#"><span class="icon fa fa-paper-plane"></span><span class="text">info@yourdomain.com</span></a></li>
          </ul>
        </div>
      </div>

    </div>

  
    <div class="row mt-5">
      <div class="col-md-12 text-center">
        <p class="copyright">
          Copyright &copy;<script>document.write(new Date().getFullYear());</script>
          All rights reserved | Made with <i class="fa fa-heart" aria-hidden="true"></i> by 
          <a href="https://colorlib.com" target="_blank">Colorlib</a>
        </p>
      </div>
    </div>
  </div>
</footer>


    {{-- 🔹 Scripts --}}
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
    <script src="{{ asset('js/main.js') }}"></script>
  </body>
</html>
