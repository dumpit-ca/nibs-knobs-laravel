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
    @yield('css')
</head>

<body>
    @include('components.front.navbar')
    <script src="{{ asset('/js/app.js') }}" nonce="{{ csp_nonce() }}" type="text/javascript"></script>
    @yield('content')
    @yield('script')

    <script type="text/javascript" nonce="{{ csp_nonce() }}">
        @if (Session::has('flash_error'))
        Swal.fire({
            {!! Session::has('has_icon') ? "icon: `error`," : "" !!}
            title: `{!! Session::get('flash_error') !!}`,
            {!! Session::has('message') ? 'html: `' . Session::get('message') . '`,' : '' !!}
            position: {!! Session::has('position') ? '`' . Session::get('position') . '`' : '`top`' !!},
            showConfirmButton: false,
            toast: {!! Session::has('is_toast') ? Session::get('is_toast') : true !!},
            {!! Session::has('has_timer') ? (Session::get('has_timer') ? (Session::has('duration') ? ('timer: ' . Session::get('duration')) . ',' : `timer: 10000,`) : '') : `timer: 10000,` !!}
            background: `#dc3545`,
            customClass: {
                title: `text-white`,
                content: `text-white`,
                popup: `px-3`
            },
        });
        @php(session()->forget('flash_error'))
        @elseif (Session::has('flash_info'))
        Swal.fire({
            {!! Session::has('has_icon') ? "icon: `info`," : "" !!}
            title: `{!! Session::get('flash_info') !!}`,
            {!! Session::has('message') ? 'html: `' . Session::get('message') . '`,' : '' !!}
            position: {!! Session::has('position') ? '`' . Session::get('position') . '`' : '`top`' !!},
            showConfirmButton: false,
            toast: {!! Session::has('is_toast') ? Session::get('is_toast') : true !!},
            {!! Session::has('has_timer') ? (Session::get('has_timer') ? (Session::has('duration') ? ('timer: ' . Session::get('duration')) . ',' : `timer: 10000,`) : '') : `timer: 10000,` !!}
            background: `#17a2b8`,
            customClass: {
                title: `text-white`,
                content: `text-white`,
                popup: `px-3`
            },
        });
        @php(session()->forget('flash_info'))
        @elseif (Session::has('flash_success'))
        Swal.fire({
            {!! Session::has('has_icon') ? "icon: `success`," : "" !!}
            title: `{!! Session::get('flash_success') !!}`,
            {!! Session::has('message') ? 'html: `' . Session::get('message') . '`,' : '' !!}
            position: {!! Session::has('position') ? '`' . Session::get('position') . '`' : '`top`' !!},
            showConfirmButton: false,
            toast: {!! Session::has('is_toast') ? Session::get('is_toast') : true !!},
            {!! Session::has('has_timer') ? (Session::get('has_timer') ? (Session::has('duration') ? ('timer: ' . Session::get('duration')) . ',' : `timer: 10000,`) : '') : `timer: 10000,` !!}
            background: `#28a745`,
            customClass: {
                title: `text-white`,
                content: `text-white`,
                popup: `px-3`
            },
        });
        @php(session()->forget('flash_success'))
        @endif
    </script>

</body>


</html>
