<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    {{-- Bootstrap --}}
    <link rel="stylesheet" href="{{ asset('/css/main.css') }}" nonce="{{ csp_nonce() }}">
    {{-- Favicon --}}
    <link rel="shortcut icon" href="{{ asset('/images/n&k-icon.png') }}" type="image/x-icon" nonce="{{ csp_nonce() }}">
    {{-- Icons --}}
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet' nonce="{{ csp_nonce() }}">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    {{-- Title --}}
    <title>N&K | @yield('title')</title>
    <script src="https://cdn.tiny.cloud/1/p7ytnikufjkn2i9om5ow07ipse88x7sehf9qx0ovuwqlyven/tinymce/6/tinymce.min.js"
        referrerpolicy="origin" nonce="{{ csp_nonce() }}"></script>

</head>

<body>
    @include('components.front.navbar')
    <script src="{{ asset('/js/app.js') }}" nonce="{{ csp_nonce() }}"></script>
    @yield('content')
    @yield('script')
</body>

</html>
