@extends('layouts.front')
@section('title', 'Home')
@section('content')
<div class="container-fluid px-4 py-md-5 py-0">
    <div class="row row-cols-md-2 row-cols-1 py-5">
        <div class="col-10 col-sm-8 col-lg-6">
            <img src="/images/home-images/header.png" alt="" class="d-lg-block d-none mx-lg-auto img-fluid">
        </div>
        <div class="col-lg-6 d-flex flex-column">
            <p class="subheader text-uppercase fs-5">ABOUT US</p>
            <h1 class="display-6">
                The
                <span class="text-uppercase">NIBS &amp; KNOBS</span>
                Culture: <br>
                Get to know the hype in Interior Design
            </h1>
            <p class="fs-6">We came up with a concept.
                In different probable house problems, many of us struggling with interior design of our homes.
                Therefore, we created this website to provide a great solution for the people with the same issue.
                This website offers a wide community to share insights, create forums on the wonders of Interior Design.
            </p>
            <div class="author-card border-0 mb-3" style="max-width: 276px">
                <div class="d-flex align-items-center">
                    <div class="me-3">
                        <div class="profile-img"></div>
                    </div>
                    <div>
                        <h5 class="fs-6 card-title lh-2">Cassandra Dumpit</h5>
                        <p class="card-text lh-2">Lead Product Developer</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid px-4 py-md-5 py-0">
    <h1 class="display-6 mb-3">Check <span class="fw-bold">what's happening!</span></h1>
    <div class="row row-cols-md-2 row-cols-1 py-3">
        <div class="col-12 col-sm-8 col-lg-8">
            <div class="recent-card card mb-3 p-3">
                <div class="row g-0">
                    <div class="col-md-3 d-flex justify-content-center align-items-center">
                        <img src="{{asset('/images/home-images/recent.png')}}" class="img-fluid" alt="">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <div class="author-card border-0 mb-3" style="max-width: 276px">
                                <div class="d-flex align-items-center">
                                    <div class="me-3">
                                        <div class="profile-img"></div>
                                    </div>
                                    <div class="profile">
                                        <p class="fs-5 card-title m-0" id="profile-name">Jhon Louie <span
                                                class="fs-6 fw-normal">@thejldeleon</span>
                                        </p>
                                        <p class="fs-6 card-text text-muted m-0">Few minutes ago</p>
                                    </div>

                                </div>
                            </div>
                            <p class="card-text">Just finished a home renovation and loving the new minimalistic
                                interior design. Less is definitely more when it comes
                                to creating a peaceful and stylish living space #interiordesign #homedecor #renovation
                            </p>
                            <a href="#" class="btn btn-comment">
                                <i class='bx bx-message-rounded me-1 fs-6'></i>
                                <span>Comment</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @if(!Auth::check())

        <div class="col-md-10 mx-auto col-lg-4">
            <form class="p-4 p-md-5 rounded-3 login-form" data-bitwarden-watching="1" method="POST" action="{{ route('login') }}" >
                @csrf
                <h1 class="fs-2 fw-bold">Continue Exploring</h1>
                <p class="fs-5 mb-2">Login your account now!</p>
                <div class="form-floating mb-3" >
                    <input type="text" class="form-control" name="email" id="floatingInput" placeholder="Email" max="50">
                    <label for="floatingInput" >Email</label>
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                </div>
                <div class="form-floating mb-3">
                    <input type="password" class="form-control" name="password" id="floatingPassword" placeholder="Password" min="8" max="50">
                    <label for="floatingPassword">Password</label>
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                </div>
                <div class="d-grid gap-2 d-md-flex justify-content-md-start">
                    <button class="btn btn-login px-5 w-100" type="submit"> Login Account</button>
                    <a href="{{route('register')}}" class="btn btn-register px-5 w-100">Register Account</a>
                </div>
            </form>
        </div>
        @endif
    </div>
</div>
@endsection
