<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="{{ asset('/css/main.css') }}" nonce="{{ csp_nonce() }}">
    {{-- Favicon --}}
    <link rel="shortcut icon" href="{{ asset('/images/n&k-icon.png') }}" type="image/x-icon" nonce="{{ csp_nonce() }}">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    {{-- Title --}}
    <title>N&K | @yield('title')</title>
</head>

<body>
    @include('components.front.navbar')
    <script src="{{ asset('/js/app.js') }}" nonce="{{ csp_nonce() }}"></script>
    @yield('content')
    @yield('script')

</body>

</html>
