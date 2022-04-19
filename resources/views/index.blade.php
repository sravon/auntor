@extends('layouts.master')
@section('tile','Home')
@section('cart', $totalCart)
@section('content')
<section class="container-fluid bg-secondary">
    <div class="container pb-5">
        <div class="row">
            <div class="col-md-7 mx-auto">
                <h2 class="p-4 text-dark">Search Product</h2>
                <form action="{!! route('searchresult') !!}" method="post">
                    @csrf
                    <div class="d-flex">
                        <input type="text" class="w-100" name="search">
                        <button type="submit" class="btn btn-success">search</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
  </section>

  <section class="container-fluid mt-3">
    <div class="container">
      <div class="row">
        <div class="col-md-3">
            <div class="row">
                <h4 class="text-center text-warning">Category</h4>
                <div class="table-responsive">
                    <table class="table table-bordered">
                    @if (!empty($category))
                        @foreach ($category as $cat)
                            <tr>
                                <td>{{ $cat->cat_title }}</td>
                                <td></td>
                            </tr>
                        @endforeach
                    @endif
                    </table>
                </div>
            </div>
        </div>
        <div class="col-md-9">
            <h1 class="text-dark p-3">Popular Restaurants</h1>
            <div class="row">
                @if (!empty($products))
                    @foreach ($products as $item)
                        <div class="col-md-4">
                            <div class="card" style="width: 100%;">
                                <img class="card-img-top" src="{{ asset($item->product_image) }}" alt="Card image cap" style="height:200px">
                                <div class="card-body">
                                    <div class="row">
                                        <p class="h6 text-warning pull-left col-md-7">Tk <small class="text-dark">{{ $item->product_price; }}</small></p>
                                        <p class=" col-md-5 pull-right">4.2(420)</p>
                                    </div>
                                    <div style="min-height: 80px;">
                                        <p class="card-text h4 text-center text-secondary product_name">{{ $item->product_name; }}</p>
                                    </div>
                                    <div class="w-100 text-center">
                                        <a href="{{ route('addtocart',['id' => $item->product_id]) }}" class="text-light btn btn-warning ">add to cart</a>
                                        <a href="checkout.php?price={{ $item->product_price; }}" class="text-light btn btn-danger float-right">Buy Now</a>
                                    </div>
                                </div>
                            </div>
                            <br>
                        </div>
                    @endforeach
                @endif
                
            </div>
        </div>
    </div>
  </section>
@endsection
<script>
    // loaddata()
    // function loaddata(){
    //     alert('hi')
    // }
</script>