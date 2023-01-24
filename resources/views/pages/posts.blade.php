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
            <div class="create-posts p-4 mb-4">
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
                <div class="d-grid gap-2 d-md-flex justify-content-md-start">
                    <button class="btn btn-primary me-md-2 px-5" type="button">Post Entry</button>
                </div>
            </div>
            <div class="posts">
                <img src="..." class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                        card's
                        content.</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
