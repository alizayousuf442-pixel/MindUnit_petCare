@extends('user.master')
@section('content')

<div class="hero-wrap js-fullheight" id="hero" style="background-image: url('images/bg3.jpg');" data-stellar-background-ratio="0.5">
  <div class="overlay"></div>
  <div class="container">
    <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center" data-scrollax-parent="true">
      <div class="col-md-11 ftco-animate text-center">
        <h1 class="mb-4">Highest Quality Care For Pets You'll Love</h1>
        <p>
          <a href="{{ url('/about') }}" class="btn btn-warning mr-md-4 py-3 px-4">
            Learn more <span class="ion-ios-arrow-forward"></span>
          </a>
        </p>
      </div>
    </div>
  </div>
</div>


<!-- Services Section -->
<section class="ftco-section bg-light ftco-no-pt ftco-intro">
  <div class="container">
    <div class="row">
      
      <!-- Dog Walking -->
      <div class="col-md-4 d-flex align-self-stretch px-4 ftco-animate">
        <div class="d-block services active text-center">
          <div class="icon d-flex align-items-center justify-content-center">
            <span class="flaticon-blind"></span>
          </div>
          <div class="media-body">
            <h3 class="heading">Dog Walking</h3>
            <p>Our professional dog walkers ensure your furry friend gets daily exercise, socialization, and fresh air. Tailored walks for every breed and energy level.</p>
            <a href="#" class="btn-custom d-flex align-items-center justify-content-center"><span class="fa fa-chevron-right"></span><i class="sr-only">Read more</i></a>
          </div>
        </div>      
      </div>

      <!-- Pet Daycare -->
      <div class="col-md-4 d-flex align-self-stretch px-4 ftco-animate">
        <div class="d-block services text-center">
          <div class="icon d-flex align-items-center justify-content-center">
            <span class="flaticon-dog-eating"></span>
          </div>
          <div class="media-body">
            <h3 class="heading">Pet Daycare</h3>
            <p>Our safe and fun daycare programs keep your pets happy and active while you’re away. Supervised playtime, feeding, and cozy naps included.</p>
            <a href="#" class="btn-custom d-flex align-items-center justify-content-center"><span class="fa fa-chevron-right"></span><i class="sr-only">Read more</i></a>
          </div>
        </div>    
      </div>

      <!-- Pet Grooming -->
      <div class="col-md-4 d-flex align-self-stretch px-4 ftco-animate">
        <div class="d-block services text-center">
          <div class="icon d-flex align-items-center justify-content-center">
            <span class="flaticon-grooming"></span>
          </div>
          <div class="media-body">
            <h3 class="heading">Pet Grooming</h3>
            <p>Professional grooming for your pets including baths, haircuts, nail trims, and ear cleaning. Ensuring your pet looks great and feels comfortable.</p>
            <a href="#" class="btn-custom d-flex align-items-center justify-content-center"><span class="fa fa-chevron-right"></span><i class="sr-only">Read more</i></a>
          </div>
        </div>      
      </div>

    </div>
  </div>
</section>

<!-- Why Choose Us Section -->
<section class="ftco-section ftco-no-pt ftco-no-pb">
  <div class="container">
    <div class="row d-flex no-gutters">

      <!-- Image -->
      <div class="col-md-5 d-flex">
        <div class="img img-video d-flex align-self-stretch align-items-center justify-content-center justify-content-md-center mb-4 mb-sm-0" style="background-image:url(images/about-1.jpg);">
        </div>
      </div>

      <!-- Content -->
      <div class="col-md-7 pl-md-5 py-md-5">
        <div class="heading-section pt-md-5">
          <h2 class="mb-4">Why Choose Us?</h2>
        </div>
        <div class="row">
          
          <!-- Care Advices -->
          <div class="col-md-6 services-2 w-100 d-flex">
            <div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-stethoscope"></span></div>
            <div class="text pl-3">
              <h4>Care Advices</h4>
              <p>We provide personalized care tips for your pets, diet recommendations to exercise plans, ensuring they stay healthy and happy.</p>
            </div>
          </div>

          <!-- Customer Support -->
          <div class="col-md-6 services-2 w-100 d-flex">
            <div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-customer-service"></span></div>
            <div class="text pl-3">
              <h4>Customer Support</h4>
              <p>Our friendly support team is always available to answer your questions and guide you in choosing the best services for your pet.</p>
            </div>
          </div>

          <!-- Emergency Services -->
          <div class="col-md-6 services-2 w-100 d-flex">
            <div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-emergency-call"></span></div>
            <div class="text pl-3">
              <h4>Emergency Services</h4>
              <p>We offer 24/7 emergency care and immediate assistance to handle urgent situations and ensure your pet’s safety.</p>
            </div>
          </div>

          <!-- Veterinary Help -->
          <div class="col-md-6 services-2 w-100 d-flex">
            <div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-veterinarian"></span></div>
            <div class="text pl-3">
              <h4>Veterinary Help</h4>
              <p>Access professional veterinary care for check-ups, treatments, and vaccinations with experienced vets you can trust.</p>
            </div>
          </div>

        </div>
      </div>
      
    </div>
  </div>
</section>

<!-- Counters -->
<section class="ftco-counter" id="section-counter">
  <div class="container">
    <div class="row">
      <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
        <div class="block-18 text-center">
          <div class="text">
            <strong class="number" data-number="50">0</strong>
          </div>
          <div class="text">
            <span>Customer</span>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
        <div class="block-18 text-center">
          <div class="text">
            <strong class="number" data-number="8500">0</strong>
          </div>
          <div class="text">
            <span>Professionals</span>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
        <div class="block-18 text-center">
          <div class="text">
            <strong class="number" data-number="20">0</strong>
          </div>
          <div class="text">
            <span>Products</span>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
        <div class="block-18 text-center">
          <div class="text">
            <strong class="number" data-number="50">0</strong>
          </div>
          <div class="text">
            <span>Pets Hosted</span>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Testimonials -->
<section class="ftco-section testimony-section" style="background-image: url('images/pets image.jpg'); margin-top:50px;">
  <div class="overlay"></div>
  <div class="container">
    <div class="row justify-content-center pb-5 mb-3">
      <div class="col-md-7 heading-section text-center ftco-animate">
        <h2>Happy Clients &amp; Feedbacks</h2>
      </div>
    </div>
    <div class="row ftco-animate">
      <div class="col-md-12">
        <div class="carousel-testimony owl-carousel ftco-owl">
          <!-- Testimonial Items -->
          @foreach(range(1, 5) as $i)
          <div class="item">
            <div class="testimony-wrap py-4">
              <div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-quote-left"></span></div>
              <div class="text">
                <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                <div class="d-flex align-items-center">
                  <div class="user-img" style="background-image: url(images/person_{{$i}}.jpg)"></div>
                  <div class="pl-3">
                    <p class="name">Roger Scott</p>
                    <span class="position">Marketing Manager</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
          @endforeach
        </div>
      </div>
    </div>
  </div>
</section>


@endsection