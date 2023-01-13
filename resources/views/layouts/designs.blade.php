@extends('layouts.layout')
@php($subtitle = app()->view->getSections()['subtitle'])
@section('title', "$subtitle Gallery")
@section('content')
  <div class="container m-lg-5">
    <div class="row text-md-start text-center">
      <div class="col-lg col-sm mt-4">
        <h1 class="display-5 text-uppercase"><span class="SoraBold">@yield('subtitle')</span> DESIGNS</h1>
      </div>
    </div>
  </div>
  <div class="container my-5 gallery">
    <div class="row row-cols-md-3 row-cols-1 gx-3 gy-4">
      @foreach ($data as $d)
        <div class="col">
          <div class="design-card border-0 mx-md-0 mx-auto d-block">
            <img src="{{ asset("/images/$subtitle-images/{$d['image']}") }}" class="card-img-top img-fluid" />
            <div class="card-body mt-3">
              <h5 class="card-title">{{ $d['name'] }}</h5>
              <p class="card-text fs-6">{{ $d['dimensions'] }}</p>
            </div>
          </div>
        </div>
      @endforeach
    </div>
  </div>

  <!-- Pagination -->
  <div class="container-fluid d-flex justify-content-center align-items-center mb-5">
    <a href="#" class="btn-navigate btn-link text-decoration-none">Prev</a>
    <div class="btn-group" role="group" aria-label="Button group example">
      <button type="button" class="btn-explore btn-lg rounded m-2">1</button>
      <button type="button" class="btn-explore btn-lg rounded m-2">2</button>
      <button type="button" class="btn-explore btn-lg rounded m-2">3</button>
      <button type="button" class="btn-explore btn-lg rounded m-2">4</button>
      <button type="button" class="btn-explore btn-lg rounded m-2">5</button>
    </div>
    <a href="#" class="btn-navigate btn-link m-2 text-decoration-none">Next</a>
  </div>
@endsection
