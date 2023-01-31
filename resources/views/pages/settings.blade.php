@extends('layouts.front')
@section('title', 'Settings')
@section('content')
<div class="container-fluid settings px-5">
    <div class="mt-4">
        <h4 class="fs-2 settings-header">My Information</h4>
        <h6 class="fs-6">Manage your profile settings</h6>
    </div>
    <div class="row g-5 mt-4 mb-5">
        <form action="{{ route('profile.settings.update') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="col-md-9">
                <div class="row">
                    <div class="col-md-4">
                        <h6 class="fs-6 profile-header">Your Profile Picture</h6>
                        <div class="change-profile-card card my-4" style="max-width: 550px;">
                            <div class="row g-0">
                                <div class="col-md-4">
                                    <img src="{{ $auth->image ? '/uploads/user/'. $auth->image : asset('/images/img-placeholder.png') }}" class="img-fluid rounded-pill"
                                        alt="user's profile img">
                                </div>
                                <div class="col-md-7">
                                    <div class="card-body d-flex flex-column align-items-center justify-content-center h-100">
                                        <div class="d-grid gap-2 w-75 mx-auto">
                                            <label for="inputImage" class="form-label">Upload Image</label>
                                            <input type="file" class="form-control" name="image" id="inputImage" >
                                            <span class="badge badge-danger w-100 validation-message">{{$errors->first('image')}}</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <p class="fs-6 text-muted fw-bold">Add your photo. The size recommended is 256x256px</p>
                    </div>
                    <div class="col-md-8">
                        <div class="row g-3">
                            <div class="col-md-4">
                                <label for="inputFirstName" class="form-label">First Name</label>
                                <input type="text" class="form-control" name="first_name" id="inputFirstName" value="{{ $auth->first_name }}">
                                <span class="badge badge-danger w-100 validation-message">{{$errors->first('first_name')}}</span>
                            </div>
                            <div class="col-md-4">
                                <label for="inputLastName" class="form-label">Last Name</label>
                                <input type="text" name="last_name" class="form-control" id="inputLastName" value="{{ $auth->last_name }}">
                                <span class="badge badge-danger w-100 validation-message">{{$errors->first('last_name')}}</span>

                            </div>
                            <div class="col-md-4">
                                <label for="inputUsername" class="form-label">Username</label>
                                <input type="text" name="username" class="form-control" id="inputUsername" value="{{ $auth->username }}">
                                <span class="badge badge-danger w-100 validation-message">{{$errors->first('username')}}</span>
                            </div>
                            <div class="col-md-6">
                                <label for="" class="form-label">Email</label>
                                <input type="email" name="email" id="" class="form-control" value="{{ $auth->email }}">
                                <span class="badge badge-danger w-100 validation-message">{{$errors->first('email')}}</span>

                            </div>
                            <div class="col-md-6">
                                <label for="" class="form-label">Contact Number</label>
                                <input type="text" name="contact" id="" class="form-control" value="{{ $auth->contact }}">
                            </div>
                            <div class="d-flex align-items-end gap-4">
                                <div class="col-md-6">
                                    <label for="" class="form-label">Address</label>
                                    <input type="text" name="address" id="" class="form-control" value="{{ $auth->address }}">
                                </div>
                                <div class="col-md-6">
                                    <label for="" class="form-label">Bio</label>
                                    <input type="text" name="bio" id="" class="form-control" value="{{ $auth->bio }}">
                                </div>
                            </div>
                            <div class=" d-flex align-items-end mt-3 row">
                                <div class="col-md-4">
                                    <button class="btn btn-save px-5" type="submit">Save Changes</button>
                                </div>
                            </div>

                        </div>
                    </div>
        </form>
                <div class="col-md-12 my-5">
                    <h4 class="fs-2 settings-header">Change Password</h4>
                    <h6 class="fs-6">Secure your account much further</h6>
                    <div class="d-flex flex-column">
                        <p class="fs-6">In order to protect your account, make sure your password:</p>
                        <ul>
                            <li>Is <span class="rules">longer than</span> <span class="text-uppercase rules">7
                                    CHARACTERS</span></li>
                            <li>Does not match or significantly contain your username;</li>
                            <li>and acquire the verification code through your email address to affix your new password
                            </li>
                        </ul>
                    </div>
                    <form action="" class="row g-3 align-items-end">
                        <div class="col-md-3">
                            <label for="" class="form-label">Input Old Password</label>
                            <input type="password" class="form-control" id="inputPassword4"
                                placeholder="Must be more than 7 characters">
                        </div>
                        <div class="col-md-3">
                            <label for="" class="form-label">New Password</label>
                            <input type="password" class="form-control" id="inputPassword4"
                                placeholder="Must be more than 7 characters">
                        </div>
                        <div class="col-md-3">
                            <label for="" class="form-label">Re-enter your new password:</label>
                            <input type="password" class="form-control" id="inputPassword4"
                                placeholder="Must be more than 7 characters">
                        </div>
                        <div class="col-md-3">
                            <button class="btn btn-save px-5" type="button">Verify Password</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-3 d-flex justify-content-center">
            <img src="{{asset('/images/settings.png')}}" alt="" class="img-fluid">
        </div>
    </div>
</div>
@endsection
