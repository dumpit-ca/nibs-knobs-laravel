@extends('layouts.front')
@section('title', 'Register')
@section('content')
<div class="container-fluid p-0 registration">
    <div class="row align-items-center g-lg-5">
        <div class="col-lg-7 text-center text-lg-start">
            <h1 class="RockSalt text-center display-1 lh-2 mb-3 transform">Nibs &amp; <br> Knobs</h1>
        </div>
        <div class="col-lg-5">
            <form class="row p-5 p-md-5" data-bitwarden-watching="1" method="POST" action="{{ route('register') }}" aria-label="{{ __('Register') }}">
                @csrf
                <h1 class="display-6 mb-4 register-header">Register Account</h1>
                <div class="col-md-6 mb-4">
                    <label for="inputFirstName" class="form-label">First Name</label>
                    <input type="text" class="form-control" name="first_name" placeholder="First Name">
                    <span class="badge badge-danger w-100 validation-message">{{$errors->first('first_name')}}</span>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="inputLastName" class="form-label">Last Name</label>
                    <input type="text" class="form-control" name="last_name" placeholder="Last Name">
                    <span class="badge badge-danger w-100 validation-message">{{$errors->first('last_name')}}</span>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="inputUsername" class="form-label">Username</label>
                    <input type="text" class="form-control" name="username" placeholder="Username">
                    <span class="badge badge-danger w-100 validation-message">{{$errors->first('username')}}</span>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="inputNumber" class="form-label">Contact Number</label>
                    <input type="text" class="form-control" name="contact" placeholder="Contact Number">
                    <span class="badge badge-danger w-100 validation-message">{{$errors->first('contact')}}</span>
                </div>
                <div class="col-12 mb-3">
                    <label for="inputEmailAddress" class="form-label">Email Address</label>
                    <input type="text" class="form-control" name="email" placeholder="Email Address">
                    <span class="badge badge-danger w-100 validation-message">{{$errors->first('email')}}</span>
                </div>
                <div class="col-12 mb-3">
                    <label for="inputAddress" class="form-label">Address</label>
                    <input type="text" class="form-control" name="address" placeholder="Address">
                    <span class="badge badge-danger w-100 validation-message">{{$errors->first('address')}}</span>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="inputUsername" class="form-label">Password</label>
                    <input type="password" class="form-control" name="password" placeholder="********">
                    <span class="badge badge-danger w-100 validation-message">{{$errors->first('password')}}</span>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="inputNumber" class="form-label">Repeat Password:</label>
                    <input type="password" class="form-control" name="password_confirmation" placeholder="********">
                    <span class="badge badge-danger w-100 validation-message">{{$errors->first('password_confirmation')}}</span>
                </div>
                <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">
                        I agree to the website's
                        <a class="terms" href="#">Privary
                            Policy </a> &
                        <a class="terms" href="#"> Terms of Service</a>

                    </label>
                </div>
                <div class="d-grid d-md-block p-0 mb-5">
                    <button class="btn btn-register px-5 fs-6" type="submit">Register Account</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
