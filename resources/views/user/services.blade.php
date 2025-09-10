@extends('user.master')
@section('content')

<!-- Hero Section -->
<section class="hero-wrap hero-wrap-2" style="background-image: url('{{ asset('images/bg_2.jpg') }}');">
  <div class="overlay"></div>
  <div class="container">
    <div class="row no-gutters slider-text align-items-end">
      <div class="col-md-9 ftco-animate pb-5">
        <h1 class="mb-0 bread">Shop & Adopt Pets</h1>
      </div>
    </div>
  </div>
</section>

<!-- Pet Food Section -->
<section class="ftco-section bg-light">
  <div class="container">
    <div class="row justify-content-center pb-5 mb-3">
      <div class="col-md-7 text-center ftco-animate">
        <h2>Pet Food Store</h2>
      </div>
    </div>
    <div class="row">
      @foreach($foods as $food)
      <div class="col-md-3 ftco-animate mb-4">
        <div class="block-7 border rounded shadow-sm">
          <div class="img" style="background-image: url('{{ asset($food['image']) }}'); height: 250px;"></div>
          <div class="text-center p-4">
            <span class="excerpt d-block font-weight-bold">{{ $food['name'] }}</span>
            <span class="price"><sup>$</sup>{{ $food['price'] }}</span>
            <form action="#" method="POST">
              @csrf
              <button type="submit" class="btn btn-primary d-block mt-3">Add to Cart</button>
            </form>
          </div>
        </div>
      </div>
      @endforeach
    </div>
  </div>
</section>

<!-- Pet Adoption Section -->
<section class="ftco-section">
  <div class="container">
    <div class="row justify-content-center pb-5 mb-3">
      <div class="col-md-7 text-center ftco-animate">
        <h2>Adopt a Pet</h2>
      </div>
    </div>
    <div class="row">
      @foreach($pets as $pet)
      <div class="col-md-3 ftco-animate mb-4">
        <div class="block-7 border rounded shadow-sm">
          <div class="img" style="background-image: url('{{ asset($pet['image']) }}'); height: 250px;"></div>
          <div class="text-center p-4">
            <span class="excerpt d-block font-weight-bold">{{ $pet['name'] }} - {{ $pet['type'] }}</span>
            <span class="price">{{ $pet['age'] }} Years Old</span>
            <form action="#" method="POST">
              @csrf
              <input type="hidden" name="type" value="adopt">
              <button type="submit" class="btn btn-success d-block mt-3">Adopt Now</button>
            </form>
          </div>
        </div>
      </div>
      @endforeach
    </div>
  </div>
</section>

@endsection
