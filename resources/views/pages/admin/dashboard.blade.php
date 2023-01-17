@extends('layouts.admin.admin')
@section('title', 'Dashboard')
@section('body')
<div class="container-fluid p-lg-4">
    <h1 class="display-6 SoraBold">Dashboard</h1>
    <div class="row row-cols-md-2 row-cols-1 my-4 gy-4">
        <div class="col-md-6 col">
            <div class="stats-card card shadow py-3">
                <div class="d-flex flex-column text-start align-items-start px-3">
                    <p class="fs-3 card-title stats-card-title m-0">Statistics</p>
                    <p class="fs-6 card-title stats-card-subheader m-0">This Month</p>
                </div>
                <div class="row row-cols-2 px-3 gy-2" style="height: 340px">
                    <div class="col">
                        <div class="card-body w-100 d-flex align-items-center gap-2">
                            <img src="/images/admin-images/dashboard/sales-icon.png" class="img-fluid"
                                alt="N&K Sales icon" />
                            <div class="d-flex flex-column statistics">
                                <p class="display-6 statistics-title m-0">1031</p>
                                <p class="text-small statistics-subheader m-0">Total Consultations</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
