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
          <span>Shop & Adopt Pets <i class="ion-ios-arrow-forward"></i></span>
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

<!-- Pet Adoption Section -->
<section class="ftco-section">
  <div class="container">
    <div class="row justify-content-center pb-5 mb-3">
      <div class="col-md-7 heading-section text-center ftco-animate">
        <h2>Adopt a Pet</h2>
        <p>Give a loving home to these adorable pets. Adoption is caring!</p>
      </div>
    </div>
    <div class="row">
      @foreach($pets as $pet)
      <div class="col-md-3 ftco-animate mb-4">
        <div class="block-7 border rounded shadow-sm">
          <div class="img" style="background-image: url('{{ asset($pet->image) }}'); height: 250px; background-size: cover; background-position: center;"></div>
          <div class="text-center p-4">
            <span class="excerpt d-block font-weight-bold">{{ $pet->name }} - {{ $pet->type }}</span>
            <span class="price d-block mt-2">{{ $pet->age }} Years Old</span>
            <ul class="mt-3 mb-3 list-unstyled">
              <li><i class="fa fa-heart mr-2"></i>Vaccinated</li>
              <li><i class="fa fa-heart mr-2"></i>Friendly & Playful</li>
              <li><i class="fa fa-heart mr-2"></i>Ready for adoption</li>
            </ul>
            <form action="{{ route('cart.add', $pet->id) }}" method="POST">
              @csrf
              <input type="hidden" name="type" value="adopt">
              <button type="submit" class="btn btn-success d-block py-2">Adopt Now</button>
            </form>
          </div>
        </div>
      </div>
      @endforeach
    </div>
  </div>
</section>

<!-- Free Consultation / Contact CTA -->
<section class="ftco-appointment ftco-section ftco-no-pt ftco-no-pb img" style="background-image: url('{{ asset('images/bg_3.jpg') }}');">
  <div class="overlay"></div>
  <div class="container">
    <div class="row d-md-flex justify-content-end">
      <div class="col-md-12 col-lg-6 half p-3 py-5 pl-lg-5 ftco-animate">
        <h2 class="mb-4">Contact Us for Guidance</h2>
        <form action="#" class="appointment">
          <div class="row">
            <div class="col-md-12">
              <div class="form-group">
                <div class="form-field">
                  <div class="select-wrap">
                    <div class="icon"><span class="fa fa-chevron-down"></span></div>
                    <select class="form-control">
                      <option value="">Select services</option>
                      <option value="">Cat Sitting</option>
                      <option value="">Dog Walk</option>
                      <option value="">Pet Spa</option>
                      <option value="">Pet Grooming</option>
                      <option value="">Pet Daycare</option>
                    </select>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6"><input type="text" class="form-control" placeholder="Your Name"></div>
            <div class="col-md-6"><input type="text" class="form-control" placeholder="Phone / Email"></div>
            <div class="col-md-6"><input type="text" class="form-control appointment_date" placeholder="Date"></div>
            <div class="col-md-6"><input type="text" class="form-control appointment_time" placeholder="Time"></div>
            <div class="col-md-12"><textarea class="form-control" placeholder="Message"></textarea></div>
            <div class="col-md-12">
              <input type="submit" value="Send Message" class="btn btn-primary py-3 px-4">
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</section>

@endsection
