@extends('layouts.master')
@section('tile','Home')
@section('content')

<div class="container mt-5 ">
    <div class="row ">
        <div class="col-md-6 mx-auto">
            <form class="alert-secondary p-3" action="{!! route('registerdata') !!}" method="post">
                @csrf
                <h3 class="text-center text-success">Register</h3>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Name</label>
                    <input type="text" class="form-control" name="name">
                  </div>
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Email address</label>
                  <input type="email" class="form-control" name="email1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                  <label for="exampleInputPassword1" class="form-label">Password</label>
                  <input type="password" class="form-control" name="password">
                </div>
                <div class="mb-3 form-check">
                  <input type="checkbox" class="form-check-input" id="exampleCheck1">
                  <label class="form-check-label" for="exampleCheck1">Remember me</label>
                </div>
                <button type="submit" class="btn btn-primary">register</button>
            </form>
        </div>
    </div>
</div>
@endsection
<script>
  
</script>