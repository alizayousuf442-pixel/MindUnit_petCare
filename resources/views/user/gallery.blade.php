@extends('user.master')
@section('content')

<!-- Hero Section -->
<section class="hero-wrap hero-wrap-2" style="background-image: url('images/bg_2.jpg'); height:60vh; position:relative;">
  <div class="overlay" style="background: var(--main-gradient); opacity:0.6; position:absolute; width:100%; height:100%; top:0; left:0; z-index:1;"></div>
  <div class="container h-100 d-flex justify-content-center align-items-center" style="position: relative; z-index:2;">
    <div class="text-center text-white">
      <h1 class="display-4 animate__animated animate__fadeInDown">Gallery</h1>
      <p class="lead animate__animated animate__fadeInUp">See our adorable pets and happy moments</p>
      <div class="mt-3 animate__animated animate__fadeInUp">
        <a href="{{ url('/contact') }}" class="btn px-4 py-2 mr-2" style="background-color: var(--main-brown); color:white; border-radius: 50px;">Contact Us</a>
        <a href="{{ url('/shop') }}" class="btn px-4 py-2" style="background-color: var(--main-gold); color: var(--main-brown); border-radius: 50px;">Buy Pet Food</a>
      </div>
    </div>
  </div>
</section>

<!-- Gallery Section -->
<section class="ftco-section bg-light py-5">
  <div class="container">
    <div class="row">

      @php
        $gallery = [
          ['img'=>'gallery-1.jpg','type'=>'Cat','name'=>'Persian Cat'],
          ['img'=>'gallery-2.jpg','type'=>'Dog','name'=>'Pomeranian'],
          ['img'=>'gallery-3.jpg','type'=>'Cat','name'=>'Sphynx Cat'],
          ['img'=>'pets image.jpg','type'=>'Cat','name'=>'British Shorthair'],
          ['img'=>'gallery-5.jpg','type'=>'Dog','name'=>'Beagle'],
          ['img'=>'gallery-6.jpg','type'=>'Dog','name'=>'Pug'],
          ['img'=>'gallery-7.jpg','type'=>'Cat','name'=>'British Shorthair'],
          ['img'=>'image_4.jpg','type'=>'Dog','name'=>'Beagle'],
          ['img'=>'image_1.jpg','type'=>'Dog','name'=>'Pug'],
        ];
      @endphp

    @foreach($gallery as $item)
<div class="col-md-4 mb-4 ftco-animate">
  <div class="gallery-card position-relative overflow-hidden rounded shadow-sm">
    <img src="{{ asset('images/'.$item['img']) }}" alt="{{ $item['name'] }}" class="img-fluid w-100 gallery-img">
    <div class="gallery-overlay d-flex flex-column justify-content-center align-items-center">
      <h5 class="text-gold mb-1">{{ $item['type'] }}</h5>
      <h4 class="text-white mb-3">{{ $item['name'] }}</h4>
      <a href="{{ asset('images/'.$item['img']) }}" class="btn btn-gold px-3 py-2">
        <i class="fa fa-expand mr-1"></i> View
      </a>
    </div>
  </div>
</div>
@endforeach


    </div>

    <!-- Pagination -->
<div class="row mt-5">
  <div class="col text-center">
    <ul class="pagination justify-content-center">
      <li class="page-item">
        <a class="page-link page-nav" href="#">&lt;</a>
      </li>
      <li class="page-items ">
        <span class="page-link page-nav-active">1</span>
      </li>
      <li class="page-item"><a class="page-link page-nav" href="#">2</a></li>
      <li class="page-item"><a class="page-link page-nav" href="#">3</a></li>
      <li class="page-item"><a class="page-link page-nav" href="#">4</a></li>
      <li class="page-item"><a class="page-link page-nav" href="#">5</a></li>
      <li class="page-item">
        <a class="page-link page-nav" href="#">&gt;</a>
      </li>
    </ul>
  </div>
</div>


  </div>
</section>


@endsection
