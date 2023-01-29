@extends('layouts.front')
@section('title', 'Profile')
@section('content')
<div class="container-fluid p-lg-5 p-3 vh-100">
    <div class="row">
        <div class="col-md-4">
            <aside class="profile-card card">
                <img src="{{asset('/images/home-images/profile-header.png')}}" class="card-img-top" alt="...">
                <div class="position-relative mx-auto d-block mb-5">
                    <div class="profile-img position-absolute top-50 start-0 translate-middle"></div>
                </div>
                <div class="card-body text-center">
                    <h5 class="profile-name card-title">Jhon Louie</h5>
                    <p class="card-text text-muted"><small>@thejldeleon</small></p>
                    <p class="card-text fs-6">✨ A Certified Minimalist ✨</p>
                    <a href="{{route('profile')}}" class="btn btn-view-post px-5 fs-6">View my Posts</a>
                </div>
            </aside>
        </div>
        <div class="col-md-8 overflow-auto">
            <div class="posts p-3 mb-4 mt-md-0 mt-4">
                <div class="d-flex align-items-center mb-3">
                    <div class="me-3">
                        <img src="{{asset('/images/img-placeholder.png')}}" alt="" class="profile-img-posts img-fluid">
                    </div>
                    <div class="profile">
                        <p class="fs-6 card-title m-0" id="profile-name">Jhon Louie <span
                                class="fs-6 fw-normal">@thejldeleon</span>
                        </p>
                        <p class="fs-6 card-text text-muted m-0">will post something</p>
                    </div>
                </div>
                <div class="card-body">
                    <p class="card-title fs-5 mb-4">Title of post</p>
                </div>
                <img src="{{asset('/images/home-images/home-2.png')}}" class="img-fluid mb-4" alt="...">
                <div class="card-body">
                    <p class="card-text">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore magna
                        aliqua. Duis at consectetur lorem donec. Dolor magna eget est lorem. Vel eros donec ac odio
                        tempor. Volutpat odio
                        facilisis mauris sit amet massa vitae tortor.
                    </p>
                </div>
                {{-- <a href="#" class="btn btn-comment mt-3">
                    <i class='bx bx-message-rounded me-1 fs-6'></i>
                    <span class="fs-6 fw-normal">Comment</span>
                </a> --}}
                <div class="my-4">
                    <button class="btn view-comment fs-6 d-flex align-items-center" type="button"
                        data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="false"
                        aria-controls="collapseExample">
                        <i class='bx bx-message-rounded me-1 fs-6'></i>
                        See comments
                    </button>
                </div>
            </div>
            <div class="collapse my-3" id="collapseExample">
                <div class="comment p-3">
                    <div class="d-flex align-items-center mb-3">
                        <div class="me-3">
                            <img src="{{asset('/images/img-placeholder.png')}}" alt=""
                                class="profile-img-posts img-fluid">
                        </div>
                        <div class="profile">
                            <p class="fs-6 card-title m-0" id="profile-name">Cass <span
                                    class="fs-6 fw-normal">@cassoy</span>
                            </p>
                            <p class="fs-6 card-text text-muted m-0">10 hours ago</p>
                        </div>
                    </div>
                    <div class="mt-3">
                        <p class="fs-6">Just finished redecorating my living room and I am absolutely in love with the
                            outcome! Interior design is truly an art
                            form, it has the power to completely transform a space and make it feel like a whole new
                            place.</p>
                    </div>
                </div>
            </div>
            <div class="collapse my-3" id="collapseExample">
                <div class="comment p-3">
                    <div class="d-flex align-items-center mb-3">
                        <div class="me-3">
                            <img src="{{asset('/images/img-placeholder.png')}}" alt=""
                                class="profile-img-posts img-fluid">
                        </div>
                        <div class="profile">
                            <p class="fs-6 card-title m-0" id="profile-name">Jhon Louie <span
                                    class="fs-6 fw-normal">@thejldeleon</span>
                            </p>
                            <p class="fs-6 card-text text-muted m-0">will post something</p>
                        </div>
                    </div>
                    <div class="mt-3">
                        <p class="fs-6">Just finished redecorating my living room and I am absolutely in love with the
                            outcome! Interior design is truly an art
                            form, it has the power to completely transform a space and make it feel like a whole new
                            place.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
