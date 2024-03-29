@extends('layouts.front')
@section('title', 'Profile')
@section('content')
<div class="container p-lg-5 p-3 vh-100">
    <div class="row">
        <div class="col-md-4">
            <aside class="profile-card card border-0">
                <img src="{{asset('/images/home-images/profile-header.png')}}" class="card-img-top" alt="...">
                <div class="position-relative mx-auto d-block mb-5">
                    <img src="{{ $user->image ? '/uploads/user/'. $user->image : asset('/images/img-placeholder.png') }}"
                        alt="" class="profile-img position-absolute top-50 start-0 translate-middle">
                </div>
                <div class="card-body text-center">
                    <h5 class="profile-name card-title">{{ $user->first_name }}</h5>
                    <p class="card-text text-muted"><small>&#64;{{ $user->username }}</small></p>
                    <p class="card-text fs-6">{{ $user->bio }}</p>
                    <a href="{{ route('home') }}" class="btn btn-view-post px-5 fs-6">Go Back to Home</a>
                </div>
            </aside>
        </div>
        <div class="col-md-8">
            @foreach($posts as $post)

            <div class="posts p-3 mb-4 mt-md-0 mt-4">
                <div class="d-flex align-items-center mb-3">
                    @php $poster = App\User::find($post->user_id) @endphp
                    <div class="me-3">
                        <img src="{{ $poster->image ? '/uploads/user/'. $poster->image : asset('/images/img-placeholder.png') }}"
                            alt="user profile image" class="profile-img-posts img-fluid">
                    </div>
                    <div class="profile me-auto">
                        <p class="fs-6 card-title m-0" id="profile-name">{{ $poster->first_name }} <span
                                class="fs-6 fw-normal">&#64;{{ $poster->username }} </span>
                        </p>
                        <p class="fs-6 card-text text-muted m-0">{{ $post->created_at }}</p>
                    </div>

                    @if(Auth::user()->id == $post->user_id)
                    <div class="btn-group">
                        <i class="bx bx-dots-horizontal-rounded btn-icon fs-4" data-bs-toggle="dropdown"
                            aria-expanded="false"></i>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="{{ route('profile.delete', [$post->id]) }}">Delete Post</a>
                            </li>
                        </ul>
                    </div>
                    @endif

                </div>
                <div class="card-body">
                    <p class="card-title fs-5 mb-4">{{ $post->title }}</p>
                </div>
                <img src="uploads/posts/{{ $post->image }}" class="img-fluid mb-4 user-post" alt="...">
                <div class="card-body">
                    {{ $post->content }}
                </div>
                <form action="{{ route('comment.create', ['id'=> $post->id]) }}" method="POST" class="mt-4">
                    @csrf
                    <div class="d-flex align-items-center gap-3">
                        <a href="{{route('post.show', ['id'=> $post->id])}}"
                            class="btn view-comment fs-6 d-flex align-items-center" type="button">
                            <i class='bx bx-message-rounded me-1 fs-6'></i>
                            Comments
                        </a>
                        <div class="my-3 w-100">
                            <input type="text" name="content" class="form-control" placeholder="Add a comment...">
                        </div>
                        <div class="">
                            <button type="submit" class="btn btn-comment"><i class='bx bx-send'></i></button>
                        </div>
                    </div>

                </form>
            </div>
            @endforeach
        </div>
        {{ $posts->links() }}
    </div>
</div>
@endsection
