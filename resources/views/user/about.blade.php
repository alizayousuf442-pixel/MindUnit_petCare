@extends('user.master')
@section('content')

<!-- Root Colors -->
<style>

</style>

<!-- Hero Section -->
<section class="hero-wrap hero-wrap-2" style="background-image: url('{{ asset('images/about-2.jpg') }}'); height:70vh; position:relative;">
    <div class="overlay" style="background: var(--main-gradient); opacity:0.6; position:absolute; width:100%; height:100%; top:0; left:0;"></div>
    <div class="container h-100 d-flex justify-content-center align-items-center">
        <div class="text-center text-white"  style="position: relative; z-index: 2;">
            <h1 class="display-4 animate__animated animate__fadeInDown postion-absolute">Compassionate Care for Your Pets</h1>
            <p class="lead animate__animated animate__fadeInUp mb-4 postion-absolute text-white">Trusted by pet owners for over 10 years</p>
            <a href="{{ url('/book-pet') }}" class="btn btn-warning btn-lg animate__animated animate__fadeInUp animate__delay-1s">Book Now</a>
        </div>
    </div>
</section>



<section class="py-5" style="background-color:#fff8f0;">
    <div class="container text-center">
        <h2 class="mb-4" style="color:#8B4513;">Our Mission & Values</h2>
        <p class="mb-5">We provide loving, professional, and safe care for your pets.</p>
        <div class="row justify-content-center">

            <div class="col-md-3 mb-4">
                <div class="p-4 rounded shadow-sm text-center" style="background: linear-gradient(45deg, #D4AF37, #FF8C00); color:white;">
                    <i class="fas fa-heart fa-3x mb-3"></i>
                    <h5>Compassion</h5>
                </div>
            </div>

            <div class="col-md-3 mb-4">
                <div class="p-4 rounded shadow-sm text-center" style="background: linear-gradient(45deg, #D4AF37, #FF8C00); color:white;">
                    <i class="fas fa-dog fa-3x mb-3"></i>
                    <h5>Care</h5>
                </div>
            </div>

            <div class="col-md-3 mb-4">
                <div class="p-4 rounded shadow-sm text-center" style="background: linear-gradient(45deg, #D4AF37, #FF8C00); color:white;">
                    <i class="fas fa-shield-alt fa-3x mb-3"></i>
                    <h5>Safety</h5>
                </div>
            </div>

            <div class="col-md-3 mb-4">
                <div class="p-4 rounded shadow-sm text-center" style="background: linear-gradient(45deg, #D4AF37, #FF8C00); color:white;">
                    <i class="fas fa-certificate fa-3x mb-3"></i>
                    <h5>Professionalism</h5>
                </div>
            </div>

        </div>
    </div>
</section>



<!-- Our Story -->
<section class="py-5">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6 mb-4 mb-md-0">
                <div class="story-img rounded shadow" style="background-image: url('{{ asset('images/about-story.jpg') }}'); height:400px; background-size: cover; background-position:center; transition: transform 0.5s;"></div>
            </div>
            <div class="col-md-6">
                <h2 class="text-brown">Our Story</h2>
                <p>Founded in 2015, we started with a simple mission: to provide loving and professional care for every pet. From a small daycare to a full-service pet care center, we have grown with our community of pet lovers.</p>
                <p>Our team is passionate about pets and committed to making every visit a joyful experience for your furry friends.</p>
            </div>
        </div>
    </div>
</section>

<!-- Team Section -->
<section class="py-5 bg-light">
    <div class="container text-center">
        <h2 class="mb-4 text-brown">Meet Our Team</h2>
        <p class="mb-5">Experienced and caring professionals who love pets as much as you do.</p>
        <div class="row justify-content-center">
           @php
    $team = [
        ['img'=>'person_5.jpg','name'=>'John Doe','role'=>'Head Groomer'],
        ['img'=>'person_6.jpg','name'=>'Jane Smith','role'=>'Veterinarian'],
        ['img'=>'person_1.jpg','name'=>'Emily Johnson','role'=>'Pet Trainer'],
        ['img'=>'person-7.jpg','name'=>'Michael Lee','role'=>'Daycare Manager'],
    ];
@endphp
            @foreach($team as $member)
                <div class="col-md-3 mb-4">
                    <div class="card border-0 shadow hover-scale">
                        <img src="{{ asset('images/'.$member['img']) }}" class="card-img-top rounded-top" alt="{{$member['name']}}">
                        <div class="card-body">
                            <h5 class="card-title text-brown">{{$member['name']}}</h5>
                            <p class="card-text text-gold">{{$member['role']}}</p>
                        </div>
                    </div>
                </div>
            @endforeach
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
<!-- FAQ Section -->
<section class="ftco-section" style="background-color:#fff8f0; padding:60px 0;">
  <div class="container">
    <div class="row justify-content-center mb-5">
      <div class="col-md-8 text-center">
        <h2 style="color: var(--main-brown); font-weight:700;">Got Questions? We Have Answers!</h2>
        <p style="color: #555;">Everything you need to know about our pet care services.</p>
      </div>
    </div>

    <div class="row justify-content-center">
      <div class="col-md-10">
        <div id="faqAccordion">
          <!-- FAQ Item 1 -->
          <div class="card mb-3" style="border-radius:15px; border:2px solid var(--main-gold);">
            <div class="card-header" id="faq1" style="background-color:#fff4e6; border-radius:15px; cursor:pointer;">
              <h5 class="mb-0 d-flex justify-content-between align-items-center" data-toggle="collapse" data-target="#collapse1" aria-expanded="true" aria-controls="collapse1">
                <span><i class="fas fa-paw" style="color:var(--main-gold); margin-right:10px;"></i> How do you keep pets safe?</span>
                <i class="fas fa-plus"></i>
              </h5>
            </div>
            <div id="collapse1" class="collapse" aria-labelledby="faq1" data-parent="#faqAccordion">
              <div class="card-body" style="color:#444; font-size:16px;">
                We provide a safe, supervised environment for every pet. Our team follows strict care protocols and every pet is monitored at all times.
              </div>
            </div>
          </div>

          <!-- FAQ Item 2 -->
          <div class="card mb-3" style="border-radius:15px; border:2px solid var(--main-gold);">
            <div class="card-header" id="faq2" style="background-color:#fff4e6; border-radius:15px; cursor:pointer;">
              <h5 class="mb-0 d-flex justify-content-between align-items-center" data-toggle="collapse" data-target="#collapse2" aria-expanded="false" aria-controls="collapse2">
                <span><i class="fas fa-dog" style="color:var(--main-orange); margin-right:10px;"></i> What services do you offer?</span>
                <i class="fas fa-plus"></i>
              </h5>
            </div>
            <div id="collapse2" class="collapse" aria-labelledby="faq2" data-parent="#faqAccordion">
              <div class="card-body" style="color:#444; font-size:16px;">
                From grooming and training to daycare, walking, and pet sitting, we offer all services to keep your furry friends happy and healthy.
              </div>
            </div>
          </div>

          <!-- FAQ Item 3 -->
          <div class="card mb-3" style="border-radius:15px; border:2px solid var(--main-gold);">
            <div class="card-header" id="faq3" style="background-color:#fff4e6; border-radius:15px; cursor:pointer;">
              <h5 class="mb-0 d-flex justify-content-between align-items-center" data-toggle="collapse" data-target="#collapse3" aria-expanded="false" aria-controls="collapse3">
                <span><i class="fas fa-cat" style="color:var(--main-brown); margin-right:10px;"></i> How do I book a consultation?</span>
                <i class="fas fa-plus"></i>
              </h5>
            </div>
            <div id="collapse3" class="collapse" aria-labelledby="faq3" data-parent="#faqAccordion">
              <div class="card-body" style="color:#444; font-size:16px;">
                You can book online, call us, or visit our center. We’ll make sure your appointment fits your schedule perfectly.
              </div>
            </div>
          </div>

          <!-- FAQ Item 4 -->
          <div class="card mb-3" style="border-radius:15px; border:2px solid var(--main-gold);">
            <div class="card-header" id="faq4" style="background-color:#fff4e6; border-radius:15px; cursor:pointer;">
              <h5 class="mb-0 d-flex justify-content-between align-items-center" data-toggle="collapse" data-target="#collapse4" aria-expanded="false" aria-controls="collapse4">
                <span><i class="fas fa-heart" style="color:var(--main-gold); margin-right:10px;"></i> Are pets treated with love?</span>
                <i class="fas fa-plus"></i>
              </h5>
            </div>
            <div id="collapse4" class="collapse" aria-labelledby="faq4" data-parent="#faqAccordion">
              <div class="card-body" style="color:#444; font-size:16px;">
                Absolutely! Every pet is treated like family. Our staff loves pets and ensures every visit is full of care and happiness.
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>
</section>







@endsection
