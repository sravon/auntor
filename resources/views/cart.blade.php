@extends('layouts.master')
@section('tile','cart')
@section('content')
@section('cart', $totalCart)
<section class="container-fluid bg-secondary">
    <div class="container pb-5">
        <div class="row">
            <div class="col-md-7 mx-auto">
                <h2 class="p-4 text-dark">Cart</h2>
            </div>
        </div>
    </div>
  </section>

  <section class="container-fluid mt-3">
    <div class="container">
      <div class="row">
        <div class="col-md-9 mx-auto">
            <h1 class="text-dark p-3 text-center">Cart</h1>
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">Image</th>
                            <th scope="col">Name</th>
                            <th scope="col">Price</th>
                            <th scope="col">Quantity</th>
                          </tr>
                        </thead>
                        <tbody>
                          @if (!empty($cart))
                            @php
                                $sum = 0;
                            @endphp
                              @foreach ($cart as $item)
                                @php
                                    $sum = $sum + $item->product_price
                                @endphp
                                <tr>
                                  <th scope="row">{{ $loop->iteration}}</th>
                                  <td>{{ $item->product_image}}</td>
                                  <td>{{ $item->product_name}}</td>
                                  <td>{{ $item->product_price}}</td>
                                  <td>{{ $item->quantity}}</td>
                                </tr>
                              @endforeach
                          @endif
                          
                        </tbody>
                    </table>
                    <h5>Total Price is {{ $sum }}</h5>
                    <a href="checkout.php?price={{$sum}}">Checkout Now</a>
                </div>
            </div>
        </div>
    </div>
  </section>
@endsection
<script>
    
</script>