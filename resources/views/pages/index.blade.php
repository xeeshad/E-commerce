{{--Here we want access from layouts and then master--}}
@extends('layouts.master')

@section('content')
<!--Start Sidebar+ Content -->
<div class='container margin-top-20'>
  <div class="row">
    <div class="col-md-4">
      @include('partials.product-sidebar')

    </div>
    <div class="col-md-8">
      <div class="widget">
        <h3>Feature product</h3>
        <div class="row">

          <div class="col-md-3">
            <div class="card">
              <img class="card-img-top feature-img" src="{{asset('Images/Product/'.'seclo40.png')}}" alt="Card image">
              <div class="card-body">
                <h4 class="card-title">Seclo40</h4>
                <p class="card-text">50tk/-</p>
                <a href="#" class="btn btn-outline-warning">Add to cart</a>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="card">
              <img class="card-img-top feature-img" src="{{asset('Images/Product/'.'seclo40.png')}}" alt="Card image">
              <div class="card-body">
                <h4 class="card-title">Seclo40</h4>
                <p class="card-text">50tk/-</p>
                <a href="#" class="btn btn-outline-warning">Add to cart</a>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="card">
              <img class="card-img-top feature-img" src="{{asset('Images/Product/'.'seclo40.png')}}" alt="Card image">
              <div class="card-body">
                <h4 class="card-title">Seclo40</h4>
                <p class="card-text">50tk/-</p>
                <a href="#" class="btn btn-outline-warning">Add to cart</a>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="card">
              <img class="card-img-top feature-img" src="{{asset('Images/Product/'.'seclo40.png')}}" alt="Card image">
              <div class="card-body">
                <h4 class="card-title">Seclo40</h4>
                <p class="card-text">50tk/-</p>
                <a href="#" class="btn btn-outline-warning">Add to cart</a>
              </div>
            </div>
          </div>


        </div>
      </div>
      <div class="widget">

      </div>

   </div>

    </div>
  </div>
</div>


<!--End Sidebar+ Content -->


@endsection
