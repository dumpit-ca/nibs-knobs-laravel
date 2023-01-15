@extends('layouts.front')

@section('content')
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-8">
        <div class="card">
          <div class="card-header">{{ __('Login') }}</div>

          <div class="card-body">
            <form method="POST" action="{{ route('login') }}">
              @csrf

              <div class="form-group row">
                <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                <div class="col-md-6">
                  <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                  @error('email')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
              </div>

              <div class="form-group row">
                <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                <div class="col-md-6">
                  <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                  @error('password')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
              </div>

              <div class="form-group row">
                <div class="col-md-6 offset-md-4">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                    <label class="form-check-label" for="remember">
                      {{ __('Remember Me') }}
                    </label>
                  </div>
                </div>
              </div>

              <div class="form-group row mb-0">
                <div class="col-md-8 offset-md-4">
                  <button type="submit" class="btn btn-primary">
                    {{ __('Login') }}
                  </button>

                  @if (Route::has('password.request'))
                    <a class="btn btn-link" href="{{ route('password.request') }}">
                      {{ __('Forgot Your Password?') }}
                    </a>
                  @endif
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection

{{-- <form action="">
  <div class="container-fluid login-body">
    <div class="row p-0">
      <div class="col-md-7 p-0 d-lg-block d-none">
        <img class="img-fluid" src="/images/admin-images/admin-login.png" alt="N&K Admin" />
      </div>
      <div class="col-md-4 col text-center d-flex flex-column justify-content-center mx-auto vh-100">
        <h1 class="display-5 mb-5 RockSalt" id="NK-Login">
          Nibs &amp; <br />
          Knobs
        </h1>
        <p class="fs-3 text-uppercase SoraBold m-0">YOUR PERFECT HOME</p>
        <p class="fs-3 mb-5">
          Right at your
          <span class="RockSalt text-uppercase d-inline-block mt-lg-0 mt-3" id="fingertips">fingertips</span>
        </p>
        <div class="mb-3 text-start">
          <label for="exampleFormControlInput1" class="form-label">Username</label>
          <input type="text" class="form-control" />
        </div>
        <div class="mb-3 text-start">
          <label for="exampleFormControlInput1" class="form-label">Password</label>
          <input type="password" class="form-control" />
        </div>
        <div class="d-grid gap-2 col-12 mx-auto mt-3">
          <button class="btn rounded-pill text-uppercase" type="button" ">LOGIN</button>
        </div>
      </div>
    </div>
  </div>
</form> --}}
