@extends('layouts.admin.admin')
@section('title', 'Users')
@section('body')
<div class="container-fluid p-lg-4">
    <h1 class="display-6 page-title">User Management</h1>
    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
        <a href="{{route('create')}}"
            class="btn btn-add-users me-md-2 text-uppercase d-flex align-items-center px-4 rounded-1">
            <i class='bx bxs-plus-circle me-1'></i>
            ADD USER
        </a>
    </div>
    <div class="admin-table h-100 p-3 mt-4">
        <table class="table table-responsive caption-top">
            <caption class="fs-4 admin-table-caption">
                Users List
            </caption>
            <thead class="admin-table-head table-light">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Username</th>
                    <th scope="col">Email</th>
                    <th scope="col">Contact</th>
                    <th scope="col">Type</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
             @foreach($users as $user)
             <tr>
                <td>{{ $user->id }}</td>
                <td>{{ $user->first_name . ' ' . $user->last_name }}</td>
                <td>{{ $user->username }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->contact }}</td>
                <td>{{ $user->type }}</td>
                <td>
                    <div class="btn-group" role="group" aria-label="Basic example">
                        <a href="{{ route('user.make-admin', [$user->id]) }}" type="button" class="btn btn-users-actions"><i
                                class='bx bx-toggle-left'></i></a>
                        <a href="{{ route('user.delete', [$user->id]) }}" type="button" class="btn btn-users-actions"><i
                                class='bx bxs-trash-alt'></i></a>
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
