@extends('user.master')
@section('content')

<!-- Hero Section -->
<section class="hero-wrap hero-wrap-2" style="background-image: url('{{ asset('images/bg_2.jpg') }}');">
  <div class="overlay"></div>
  <div class="container">
    <div class="row no-gutters slider-text align-items-end">
      <div class="col-md-9 ftco-animate pb-5">
        <h1 class="mb-0 bread">Your Cart</h1>
      </div>
    </div>
  </div>
</section>

<!-- Cart Section -->
<section class="ftco-section bg-light">
  <div class="container">
    @if(session('cart') && count(session('cart')) > 0)
      <div class="row mb-5">
        <div class="col-md-12 ftco-animate">
          <div class="table-responsive">
            <table class="table table-bordered">
              <thead class="thead-dark">
                <tr>
                  <th>Item</th>
                  <th>Type</th>
                  <th>Price</th>
                  <th>Quantity</th>
                  <th>Total</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                @php $grandTotal = 0; @endphp
                @foreach(session('cart') as $item)
                  @php $total = $item['price'] * $item['quantity']; @endphp
                  <tr>
                    <td>{{ $item['name'] }}</td>
                    <td>{{ ucfirst($item['type']) }}</td>
                    <td>${{ $item['price'] }}</td>
                    <td>{{ $item['quantity'] }}</td>
                    <td>${{ $total }}</td>
                    <td>
                      <form action="{{ route('cart.remove', $item['id']) }}" method="POST">
                        @csrf
                        <button type="submit" class="btn btn-danger btn-sm">Remove</button>
                      </form>
                    </td>
                  </tr>
                  @php $grandTotal += $total; @endphp
                @endforeach
                <tr>
                  <td colspan="4" class="text-right font-weight-bold">Grand Total:</td>
                  <td colspan="2" class="font-weight-bold">${{ $grandTotal }}</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12 text-right">
          <a href="{{ url('/shop') }}" class="btn btn-primary">Continue Shopping</a>
          <a href="#" class="btn btn-success">Checkout</a>
        </div>
      </div>
    @else
      <div class="row">
        <div class="col-md-12 text-center ftco-animate">
          <h3>Your cart is empty!</h3>
          <a href="{{ url('/shop') }}" class="btn btn-primary mt-3">Shop Now</a>
        </div>
      </div>
    @endif
  </div>
</section>

@endsection
