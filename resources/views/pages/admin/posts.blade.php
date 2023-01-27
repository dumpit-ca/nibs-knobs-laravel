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
                            <button class="btn btn-actions" type="button">
                                <i class="fa-solid fa-eye"></i>
                                View
                            </button>
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
</div>
@endsection
