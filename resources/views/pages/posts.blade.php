@extends('layouts.front')
@section('title', 'Posts')
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
        <div class="col-md-8">
            <div class="posts-card card mb-3">
                <div class="row g-0">
                    <div class="col-md-3 p-3 my-auto">
                        <form action="/target" class="dropzone dz-max-files-reached" id="my-great-dropzone"></form>
                    </div>
                    <div class="col-md-7">
                        <div class="card-body">
                            <div class="d-flex align-items-center mb-4">
                                <div class="me-3">
                                    <div class="profile-img-posts"></div>
                                </div>
                                <div class="profile">
                                    <p class="fs-6 card-title m-0" id="profile-name">Jhon Louie <span
                                            class="fs-6 fw-normal">@thejldeleon</span>
                                    </p>
                                    <p class="fs-6 card-text text-muted m-0">will post something</p>
                                </div>

                            </div>
                            <div class="form-floating">
                                <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2"
                                    style="height: 100px"></textarea>
                                <label for="floatingTextarea2">wanna share something?</label>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2 mb-3 position-relative">
                        <button class="btn btn-post position-absolute" type="submit"><i
                                class='bx bxs-send'></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
