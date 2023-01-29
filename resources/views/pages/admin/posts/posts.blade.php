@extends('layouts.admin.admin')
@section('title', 'Dashboard')
@section('body')
<div class="container-fluid p-lg-4">
    <h1 class="display-6 page-title">Post Management</h1>
    <div class="admin-table h-100 p-3">
        <table class="table table-responsive caption-top">
            <caption class="fs-4 admin-table-caption">
                Posts
            </caption>
            <thead class="admin-table-head table-light">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Post Title</th>
                    <th scope="col">Date Posted</th>
                    <th scope="col">Time</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Juan Dela Cruz</td>
                    <td>Interior Design is my PASSION</td>
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
@endsection
