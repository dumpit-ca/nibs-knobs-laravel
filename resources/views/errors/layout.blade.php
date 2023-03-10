@extends('layouts.front')

{{-- @section('css')
    @cspMetaTag(App\Http\Policies\CspPolicies::class)
@endsection --}}

@section('title')
    @yield('title')
@endsection

@section('content')
<div class="container justify-content-center p-5 m-5">
    <div class="row">
        <div class="col-12">
            @yield('code')
            @yield('message')
        </div>
    </div>
</div>
@endsection
