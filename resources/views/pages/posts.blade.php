@extends('layouts.front')
@section('title', 'Posts')
@section('content')
<div class="container p-lg-5 p-3">
    <div class="row">
        <div class="col-md-4">
            <aside class="profile-card card border-0">
                <img src="{{asset('/images/home-images/profile-header.png')}}" class="card-img-top" alt="...">
                <div class="position-relative mx-auto d-block mb-5">
                    <img src="{{ $user->image ? '/uploads/user/'. $user->image : asset('/images/img-placeholder.png') }}" alt=""
                        class="profile-img position-absolute top-50 start-0 translate-middle">
                </div>
                <div class="card-body text-center">
                    <h5 class="profile-name card-title">{{ $user->first_name }}</h5>
                    <p class="card-text text-muted"><small>&#64;{{ $user->username }}</small></p>
                    <p class="card-text fs-6">{{ $user->bio }}</p>
                    <a href="{{ route('profile') }}" class="btn btn-view-post px-5 fs-6">View my Posts</a>
                </div>
            </aside>
        </div>
        <div class="col-md-8">
            <div class="create-posts p-4 mb-4 mt-md-0 mt-4">
                <div class="d-flex align-items-center mb-3">
                    <div class="me-3">
                        <img src="{{ $user->image ? '/uploads/user/'. $user->image : asset('/images/img-placeholder.png') }}" alt="" class="profile-img-posts img-fluid">
                    </div>
                    <div class="profile">
                        <p class="fs-6 card-title m-0" id="profile-name">{{ $user->first_name }} <span
                                class="fs-6 fw-normal">&#64;{{ $user->username }}</span>
                        </p>
                        <p class="fs-6 card-text text-muted m-0">will post something</p>
                    </div>
                </div>
                <form action="{{ route('post.create') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-floating mb-3">
                        <input type="file" name="image" class="form-control" id="floatingInput">
                        <label for="floatingInput">Post Image</label>
                        <span class="badge badge-danger w-100 validation-message">{{$errors->first('image')}}</span>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" name="title" class="form-control" id="floatingInput"
                            placeholder="Post Title" max="100">
                        <label for="floatingInput">Post Title</label>
                        <span class="badge badge-danger w-100 validation-message">{{$errors->first('title')}}</span>
                    </div>
                    <div class=" form-floating mb-3">
                        <select id="select" name="category" class="form-control form-select">
                            <option value="" selected>Choose a Category</option>
                            <option value="Bedroom">Bedroom</option>
                            <option value="Kitchen">Kitchen</option>
                            <option value="Living Room">Living Room</option>
                            <option value="Bathroom">Bathroom</option>
                            <option value="Space Saving">Space Saving</option>
                            <option value="Home Office">Home Office</option>
                        </select>
                        <label for="select">Category</label>
                        <span class="badge badge-danger w-100 validation-message">{{$errors->first('category')}}</span>
                    </div>
                    <div class="my-4">
                        <textarea name="content" class="form-control" maxlength="255" max="255"></textarea>
                    </div>
                    <div class="d-grid gap-2 d-md-flex justify-content-md-start">
                        <button class="btn btn-primary me-md-2 px-5" type="submit">Post Entry</button>
                    </div>
                </form>
            </div>


            @foreach($posts as $post)

            <div class="posts p-3 mb-4 mt-md-0 mt-4">
                <div class="d-flex align-items-center mb-3">
                    <div class="me-3">
                        @php $poster = App\User::find($post->user_id) @endphp
                        <img src="{{ $poster->image ? '/uploads/user/'. $poster->image : asset('/images/img-placeholder.png') }}" alt="user profile image"
                            class="profile-img-posts img-fluid">
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
                            <li><a class="dropdown-item" href="{{ route('profile.delete',['id' => $post->id]) }}">Delete
                                    Post</a></li>
                        </ul>
                    </div>
                    @endif

                </div>
                <div class="card-body">
                    <p class="card-title fs-5 mb-4">{{ $post->title }}</p>
                </div>
                <img src="uploads/posts/{{ $post->image }}" class="img-fluid mb-4 user-post" alt="...">
                <div class="card-body">
                    {{ $post->content  }}
                </div>
                <form action="{{ route('comment.create', ['id'=> $post->id]) }}" method="POST" class="mt-4">
                    @csrf
                    <div class="d-flex align-items-center gap-3">
                        {{-- see comments buttons --}}
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
