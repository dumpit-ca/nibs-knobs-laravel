@extends('layouts.admin.admin')
@section('title', 'Create User')
@section('body')
<div class="container-fluid">
    <h1 class="display-6 page-title">Add User</h1>
    <div class="w-100 mt-5">
        <p class="form-title p-2">
            Account Details
        </p>
    </div>
    <form action="" class="row gx-3 my-5">
        <div class="col-md-4">
            <label class="form-label">User Type</label>
            <input type="text" class="form-control">
        </div>
        <div class="col-md-4">
            <label class="form-label">User Role</label>
            <input type="text" class="form-control">
        </div>
    </form>
    <form action="" class="row gx-3 gy-5">
        <div class="col-md-4">
            <label class="form-label">First Name</label>
            <input type="text" class="form-control">
        </div>
        <div class="col-md-4">
            <label class="form-label">Middle Name</label>
            <input type="text" class="form-control">
        </div>
        <div class="col-md-4">
            <label class="form-label">Last Name</label>
            <input type="text" class="form-control">
        </div>

        <div class="col-md-4">
            <label class="form-label">Username</label>
            <input type="text" class="form-control">
        </div>
        <div class="col-md-4">
            <label class="form-label">Email</label>
            <input type="text" class="form-control">
        </div>
        <div class="col-md-4">
            <label class="form-label">Contact Number</label>
            <input type="text" class="form-control">
        </div>
        <div class="col-md-6">
            <label class="form-label">Password</label>
            <input type="password" class="form-control">
        </div>
        <div class="col-md-6">
            <label class="form-label">Repeat Password</label>
            <input type="password" class="form-control">
        </div>
    </form>
    <div class="d-grid gap-3 d-md-block my-5">
        <button class="btn btn-cancel me-md-2 me-0" type="button">CANCEL</button>
        <button class="btn btn-submit text-uppercase px-3" type="button">SUBMIT NEW USER</button>
    </div>
</div>
@endsection
