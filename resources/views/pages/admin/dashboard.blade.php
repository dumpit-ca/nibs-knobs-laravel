@extends('layouts.admin.admin')
@section('title', 'Dashboard')
@section('body')
<div class="container-fluid p-lg-4 dashboard">
    <h1 class="display-6">Dashboard</h1>
    <div class="row row-cols-md-2 row-cols-1 my-4 gy-4">
        <div class="col-md-6 col">
            <div class="stats-card card shadow py-4 text-center">
                <div class="d-flex flex-column text-start align-items-start px-3">
                    <p class="fs-3 card-title stats-card-title m-0">Monthly Statistics</p>
                </div>
                <div class="row row-cols-md-2 row-cols-1 px-3 gy-2 my-3 justify-content-center">
                    <div class="col-md-4">
                        <div class="d-flex align-items-center justify-content-center gap-2 total p-4">
                            <div class="icon d-flex align-items-center justify-content-center p-3"><i
                                    class='bx bx-trending-up display-6'></i></div>
                            <div class="d-flex flex-column statistics">
                                <p class="display-6 stats-number m-0">1031</p>
                                <p class="text-small stats-category m-0">Total Posts</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="d-flex align-items-center justify-content-center gap-2 total p-4">
                            <div class="icon d-flex align-items-center justify-content-center p-3"><i
                                    class='bx bxs-user display-6'></i></i></div>
                            <div class="d-flex flex-column statistics">
                                <p class="display-6 stats-number m-0">120</p>
                                <p class="text-small stats-category m-0">Site Users</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 col">
            <canvas class="p-4" id="chart"></canvas>
        </div>
    </div>
    <div class="admin-table h-100 p-3 mt-4">
        <table class="table table-responsive caption-top">
            <caption class="fs-4 admin-table-caption">
                Posts
            </caption>
            <thead class="admin-table-head-dashboard">
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
</div>
@endsection
