@extends('layouts.front')
@section('title', 'Posts')
@section('content')
<div class="container-fluid p-lg-5 p-3">
    <div class="row">
        <div class="col-md-4">
            <aside class="profile-card card border-0">
                <img src="{{asset('/images/home-images/profile-header.png')}}" class="card-img-top" alt="...">
                <div class="position-relative mx-auto d-block mb-5">
                    <img src="{{asset('/images/img-placeholder.png')}}" alt=""
                        class="profile-img position-absolute top-50 start-0 translate-middle">
                </div>
                <div class="card-body text-center">
                    <h5 class="profile-name card-title">Jhon Louie</h5>
                    <p class="card-text text-muted"><small>@thejldeleon</small></p>
                    <p class="card-text fs-6">✨ A Certified Minimalist ✨</p>
                    <a href="{{route('profile')}}" class="btn btn-view-post px-5 fs-6">View my Posts</a>
                </div>
            </aside>
        </div>
        <div class="col-md-8">
            <div class="create-posts p-4 mb-4 mt-md-0 mt-4">
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
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="floatingInput" placeholder="Post Title">
                    <label for="floatingInput">Post Title</label>
                </div>
                <div class="my-4">
                    <textarea class="form-control"></textarea>
                </div>
                <div class="mb-3 input-file">
                    <input type="file" class="form-control" id="inputGroupFile01">
                </div>
                <div class="d-grid gap-2 d-md-flex justify-content-md-start">
                    <button class="btn btn-primary me-md-2 px-5" type="button">Post Entry</button>
                </div>
            </div>

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
                <a href="#" class="btn btn-comment mt-3">
                    <i class='bx bx-message-rounded me-1 fs-6'></i>
                    <span class="fs-6 fw-normal">Comment</span>
                </a>
            </div>

            <div class="posts p-3 mb-4">
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
                <img src="{{asset('/images/home-images/home-2.png')}}" class="img-fluid mb-4 mx-auto d-block" alt="...">
                <div class="card-body">
                    <p class="card-text">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore magna
                        aliqua. Duis at consectetur lorem donec. Dolor magna eget est lorem. Vel eros donec ac odio
                        tempor. Volutpat odio
                        facilisis mauris sit amet massa vitae tortor.
                    </p>
                </div>
                <a href="#" class="btn btn-comment mt-3">
                    <i class='bx bx-message-rounded me-1 fs-6'></i>
                    <span class="fs-6 fw-normal">Comment</span>
                </a>
            </div>
        </div>
    </div>
</div>
@endsection
