@extends('layouts.front')
@section('title', 'Login')
@section('content')
  <div class="container-fluid login-body">
    <div class="row p-0 justify-content-center">
      <div class="col-md-7 p-0 d-lg-block d-none">
        <img class="img-fluid" src="{{ asset('/images/admin-images/admin-login.png') }}" alt="N&K Admin" />
      </div>
      <div class="col-md-4 col mt-md-0 mt-5 text-center d-flex flex-column justify-content-center mx-auto">
        <h1 class="display-5 mb-5 RockSalt" id="NK-Login">
          Nibs &amp; <br />
          Knobs
        </h1>
        <p class="fs-3 text-uppercase SoraBold m-0">YOUR PERFECT HOME</p>
        <p class="fs-3 mb-5">
          end at your
          <span class="RockSalt text-uppercase d-inline-block mt-lg-0 mt-3" id="fingertips">fingertips</span>
        </p>
        <div class="mb-3 text-start">
          <label for="exampleFormControlInput1" class="form-label user-label">Email</label>
          <input type="text" class="form-control" id="user-email" />
        </div>
        <div class="mb-3 text-start">
          <label for="exampleFormControlInput1" class="form-label user-label">Password</label>
          <input type="password" class="form-control" />
        </div>
        <div class="d-grid gap-2 col-12 mx-auto mt-3">
          <button class="btn rounded-pill text-uppercase" type="button">LOGIN</button>
        </div>
      </div>
    </div>
  </div>
@endsection
