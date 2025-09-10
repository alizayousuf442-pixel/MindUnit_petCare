@extends('user.master')
@section('content')

<!-- Hero Section -->
<section class="hero-wrap hero-wrap-2" style="background-image: url('{{ asset('images/bg_2.jpg') }}');" data-stellar-background-ratio="0.5">
  <div class="overlay"></div>
  <div class="container">
    <div class="row no-gutters slider-text align-items-end">
      <div class="col-md-9 ftco-animate pb-5">
        <p class="breadcrumbs mb-2">
          <span class="mr-2"><a href="{{ url('/') }}">Home <i class="ion-ios-arrow-forward"></i></a></span> 
          <span>Shop food for pets <i class="ion-ios-arrow-forward"></i></span>
        </p>
        <h1 class="mb-0 bread">Shop & Adopt Pets</h1>
      </div>
    </div>
  </div>
</section>

<!-- Pet Food Section -->
<section class="ftco-section bg-light">
  <div class="container">
    <div class="row justify-content-center pb-5 mb-3">
      <div class="col-md-7 heading-section text-center ftco-animate">
        <h2>Pet Food Store</h2>
        <p>High-quality food for your beloved pets. Choose from our variety of premium pet foods.</p>
      </div>
    </div>
    <div class="row">
      @foreach($foods as $food)
      <div class="col-md-3 ftco-animate mb-4">
        <div class="block-7 border rounded shadow-sm">
          <div class="img" style="background-image: url('{{ asset($food->image) }}'); height: 250px; background-size: cover; background-position: center;"></div>
          <div class="text-center p-4">
            <span class="excerpt d-block font-weight-bold">{{ $food->name }}</span>
            <span class="price d-block mt-2"><sup>$</sup>{{ $food->price }}</span>
            <ul class="mt-3 mb-3 list-unstyled">
              <li><i class="fa fa-check mr-2"></i>High-quality ingredients</li>
              <li><i class="fa fa-check mr-2"></i>Nutritious & Healthy</li>
              <li><i class="fa fa-check mr-2"></i>Recommended by vets</li>
            </ul>
            <form action="{{ route('cart.add', $food->id) }}" method="POST">
              @csrf
              <button type="submit" class="btn btn-primary d-block py-2">Add to Cart</button>
            </form>
          </div>
        </div>
      </div>
      @endforeach
    </div>
  </div>
</section>

@endsection