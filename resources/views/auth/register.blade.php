@extends('layouts.front')
@section('title', 'Register')
@section('content')
<div class="container-fluid p-0 registration">
    <div class="row align-items-center g-lg-5 vh-100">
        <div class="col-lg-7 text-center text-lg-start">
            <h1 class="RockSalt text-center display-1 lh-2 mb-3 transform">Nibs &amp; <br> Knobs</h1>
        </div>
        <div class="col-lg-5">
            <form class="row p-5 p-md-5" data-bitwarden-watching="1">
                <h1 class="display-6 mb-3 register-header">Register Account</h1>
                <div class="col-md-6 mb-3">
                    <label for="inputFirstName" class="form-label">First Name</label>
                    <input type="text" class="form-control" placeholder="First Name">
                </div>
                <div class="col-md-6 mb-3">
                    <label for="inputLastName" class="form-label">Last Name</label>
                    <input type="text" class="form-control" placeholder="Last Name">
                </div>
                <div class="col-md-6 mb-3">
                    <label for="inputUsername" class="form-label">Username</label>
                    <input type="text" class="form-control" placeholder="Username">
                </div>
                <div class="col-md-6 mb-3">
                    <label for="inputNumber" class="form-label">Contact Number</label>
                    <input type="text" class="form-control" placeholder="Contact Number">
                </div>
                <div class="col-12 mb-3">
                    <label for="inputEmailAddress" class="form-label">Email Address</label>
                    <input type="text" class="form-control" placeholder="Email Address">
                </div>
                <div class="col-12 mb-3">
                    <label for="inputAddress" class="form-label">Address</label>
                    <input type="text" class="form-control" placeholder="Address">
                </div>
                <div class="col-md-6 mb-3">
                    <label for="inputUsername" class="form-label">Password</label>
                    <input type="text" class="form-control" placeholder="Username">
                </div>
                <div class="col-md-6 mb-3">
                    <label for="inputNumber" class="form-label">Repeat Password:</label>
                    <input type="text" class="form-control" placeholder="Contact Number">
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
                    <button class="btn btn-register px-5 fs-6" type="button">Register Account</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
