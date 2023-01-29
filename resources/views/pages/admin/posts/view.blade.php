@extends('layouts.admin.admin')
@section('title', 'Dashboard')
@section('body')
<div class="container-fluid p-lg-4 view-posts">
    <h1 class="display-6 page-title">View Post</h1>
    <div class="row mt-5">
        <div class="col-md-4 d-flex flex-column">
            <img src="https://placehold.jp/350x200.png" class="img-fluid" alt="Post image">
            <div class="d-grid gap-2 d-md-block my-4">
                <button class="btn btn-delete px-5 text-uppercase" type="button">DELETE PHOTO</button>
            </div>
            <form action="">
                <div class="row my-3">
                    <label for="" class="col-md-3 col-form-label fs-6">Post Title:</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control">
                    </div>
                </div>
                <div class="row my-3">
                    <label for="" class="col-md-3 col-form-label fs-6">Caption:</label>
                    <div class="col-sm-9">
                        <textarea class="form-control" style="height: 100px"></textarea>
                    </div>
                </div>
                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                    <button class="btn btn-cancel me-md-2 text-uppercase fs-6 px-4" type="button">CANCEL</button>
                    <button class="btn btn-save text-uppercase fs-6 px-4 " type="button">SAVE
                        CHANGES</button>
                </div>
            </form>
        </div>
        <div class="col-md-8">
            <div class="admin-table h-100 p-3">
                <table class="table table-responsive caption-top">
                    <caption class="fs-4 admin-table-caption">
                        Posts
                    </caption>
                    <thead class="admin-table-head table-light">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Username</th>
                            <th scope="col">Comments</th>
                            <th scope="col">Date Posted</th>
                            <th scope="col">Time</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>@thejldeleon</td>
                            <td>Great! You’re use of Design Elements is Superb</td>
                            <td>12/10/2023</td>
                            <td>02:32 PM</td>
                            <td>
                                <div class="d-grid gap-3 d-md-block">
                                    <a href="{{route('view')}}" class=" btn btn-actions text-decoration-none">
                                        <i class="fa-solid fa-eye"></i>
                                        View
                                    </a>
                                    <button class="btn btn-actions" type="button">
                                        <i class='bx bxs-trash'></i>
                                        Delete
                                    </button>
                                </div>
                            </td>
                        </tr>
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
