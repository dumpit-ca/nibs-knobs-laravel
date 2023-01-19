@extends('layouts.front')
@section('title', 'Home')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-4">
            <div class="profile-card card">
                <img src="{{asset('/images/home-images/profile-header.png')}}" class="card-img-top" alt="...">
                <div class="position-relative mx-auto d-block mb-5">
                    <div class="profile-img position-absolute top-50 start-0 translate-middle"></div>
                </div>
                <div class="card-body text-center">
                    <h5 class="profile-name card-title">Jhon Louie</h5>
                    <p class="card-text text-muted"><small>@thejldeleon</small></p>
                    <p class="card-text fs-6">✨ A Certified Minimalist ✨</p>
                    <a href="#" class="btn btn-view-post px-5 fs-6">View my Posts</a>
                </div>
            </div>
        </div>
        <div class="col-md-8 overflow-visible">
            <div class="posts-card card mb-3">
                <div class="row g-0">
                    <div class="col-md-3">
                        <form action="/file-upload" class="dropzone" id="my-awesome-dropzone"></form>
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                                additional
                                content. This content is a little bit longer.</p>
                            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
