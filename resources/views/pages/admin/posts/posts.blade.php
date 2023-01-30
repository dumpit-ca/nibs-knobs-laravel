@extends('layouts.admin.admin')
@section('title', 'Dashboard')
@section('body')
<div class="container-fluid p-lg-4">
    <h1 class="display-6 page-title">Post Management</h1>
    <div class="admin-table h-100 p-3 mt-4">
        <table class="table table-responsive caption-top">
            <caption class="fs-4 admin-table-caption">
                Posts
            </caption>
            <thead class="admin-table-head table-light">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Username</th>
                    <th scope="col">Post Title</th>
                    <th scope="col">Date/Time Posted</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($posts as $post)
                    <tr>
                        <td>{{ $post->id }}</td>
                        <td>&#64;{{ App\User::find($post->user_id)->username }}</td>
                        <td>{{ $post->title }}</td>
                        <td>{{ $post->created_at }}</td>
                        {{-- <td>{{ Carbon\Carbon::createFromFormat('Y-m-d H', $post->created_at)->toDateTimeString() }}</td> --}}
                        <td>
                            <div class="d-grid gap-3 d-md-block">
                                <a href="{{route('post.view', [$post->id])}}" class=" btn btn-actions text-decoration-none">
                                    <i class="fa-solid fa-eye"></i>
                                    View
                                </a>
                                <a class="btn btn-actions" type="button" href="{{ route('post.delete', [$post->id]) }}">
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
@endsection
