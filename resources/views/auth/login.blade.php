@extends('layouts.front')
@section('title', 'Login')
@section('content')
<div class="container-fluid login-body">
    <div class="row p-0 justify-content-center">

        <div class="col-md-7 p-0 d-lg-block d-none">
            <img class="img-fluid" src="{{ asset('/images/auth-images/login.png') }}" alt="N&K Admin" />
        </div>

        <form method="POST" action="{{ route('login-post') }}"
            class="col-md-4 col mt-md-0 mt-5 text-center d-flex flex-column justify-content-center mx-auto">
            @csrf
            <div>

                <h1 class="display-5 mb-5 RockSalt transform">
                    Nibs &amp; <br />
                    Knobs
                </h1>

                <p class="fs-3 text-uppercase SoraBold m-0">YOUR PERFECT HOME</p>

                <p class="fs-3 mb-5">
                    Right at your
                    <span class="RockSalt text-uppercase d-inline-block mt-lg-0 mt-3 transform"
                        id="slogan">fingertips</span>
                </p>

                <div class="mb-3 text-start">
                    <label for="exampleFormControlInput1" class="form-label">{{ __('E-Mail Address') }}</label>
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                        name="email" pattern="^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$" value="{{ old('email') }}" required autocomplete="email" autofocus />
                    @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                    <span class="badge badge-danger w-100 validation-message">{{$errors->first('email')}}</span>
                </div>

                <div class="mb-3 text-start">
                    <label for="exampleFormControlInput1" class="form-label">{{ __('Password') }}</label>
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
                        name="password" pattern="^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?!.*['"])[\w!@#$%^&*()-_=+,.:;?\/]{8,}$" required autocomplete="current-password" />
                    @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                    <span class="badge badge-danger w-100 validation-message">{{$errors->first('password')}}</span>
                </div>

                <div class="mb-3 text-start">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="remember" id="remember">
                        <label class="form-check-label" for="remember">
                            {{ __('Remember Me') }}
                        </label>
                    </div>
                </div>

                <div class="d-grid gap-2 d-md-block text-start mt-4">
                    <button type="submit" class="btn btn-login">
                        Login
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
@endsection
