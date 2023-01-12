@extends('layouts.layout')
@section('title', 'Home')
@section('content')
  <div class="container-fluid">
    <div class="row text-md-start text-center flex-column">
      <div class="col-lg col-sm mt-4">
        <h1 class="display-5 text-uppercase SoraBold">YOUR PERFECT HOME</h1>
        <h1 class="display-5">
          Right at your
          <span class="RockSalt text-uppercase d-inline-block mt-lg-0 mt-4" id="fingertips">fingertips</span>
        </h1>
      </div>
    </div>
  </div>
  {{-- about us --}}
  <section class="container-fluid my-5">
    <div class="row">
      <div class="col col-lg-4 w-lg-50">
        <div class="d-flex flex-column align-items-start flex-shrink-1">
          <h2 class="display-6 SoraBold">What's about us?</h2>
          <p class="fs-6 fw-normal" id="text">
            We came up with a concept. In different probable house problems, many of us struggling with interior design of our homes. Therefore, we
            created this website to provide a great solution for the people with the same issue. This website offers a variety of interior designs for
            many types of set up for your home from tradition to latest design with efficiency, space-saving and aesthetic looking interior design etc.
          </p>
          <a class="btn fs-6 mb-4 rounded-pill px-5 py-1 text-uppercase mx-md-0 d-flex align-items-center">check our services</a>
        </div>
      </div>
      <div class="col-md-auto col-12 d-flex flex-column gap-3 mb-3">
        <img src="/images/home-images/home-1.png" alt="N&K chairs" />
        <img src="/images/home-images/home-2.png" alt="N&K Sofa Set" />
      </div>
      <div class="col-md-auto col-lg-3 col-sm-1 gap-5">
        <img class="img-responsive" id="home-3" src="/images/home-images/home-3.png" alt="" />
      </div>
    </div>
  </section>
@endsection
