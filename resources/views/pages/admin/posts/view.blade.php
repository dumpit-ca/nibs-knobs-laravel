@extends('layouts.admin.admin')
@section('title', 'Dashboard')
@section('body')
<div class="container-fluid p-lg-4 view-posts">
    <h1 class="display-6 page-title">View Post</h1>
    <div class="row mt-5">
        <div class="col-md-4 d-flex flex-column">
            <img src="/uploads/posts/{{ $post->image }}" class="img-fluid" alt="Post image">
                <div class="row my-3">
                    <label for="" class="col-md-3 col-form-label fs-6">Post Title:</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control"value="{{ $post->title }}"  disabled>
                    </div>
                </div>
                <div class="row my-3">
                    <label for="" class="col-md-3 col-form-label fs-6">Caption:</label>
                    <div class="col-sm-9">
                        <textarea class="form-control" style="height: 100px" disabled>{!! $post->content !!}</textarea>
                    </div>
                </div>
        </div>
        <div class="col-md-8">
            <div class="admin-table h-100 p-3">
                <table class="table table-responsive caption-top">
                    <caption class="fs-4 admin-table-caption">
                        Post Comments
                    </caption>
                    <thead class="admin-table-head table-light">
                        <tr>
                            <th scope="col">Username</th>
                            <th scope="col">Comments</th>
                            <th scope="col">Date and Time Posted</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                       @foreach($comments as $comment)
                        <tr>
                            <td>&#64;{{ App\User::find($comment->user_id)->username }}</td>
                            <td>{{ $comment->content }}</td>
                            <td>{{ $comment->created_at }}</td>
                            <td>
                                <div class="d-grid gap-3 d-md-block">
                                    <a class="btn btn-actions" href="{{route('comment.delete', [$comment->id])}}" type="button">
                                        <i class='bx bxs-trash'></i>
                                        Delete
                                    </a>
                                </div>
                            </td>
                    </tr>
                       @endforeach
                    </tbody>
                </table>
            </div>
            <nav class="mt-4" aria-label="Page navigation example">
                <ul class="pagination justify-content-end">
                    <li class="page-item">
                        <a class="page-link" href="#" aria-label="Previous">
                            <i class='bx bx-chevron-left'></i>
                        </a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item">
                        <a class="page-link" href="#" aria-label="Next">
                            <i class='bx bx-chevron-right'></i>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</div>
@endsection
