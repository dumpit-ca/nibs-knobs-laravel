<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="{{ asset('/css/admin.css') }}">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <script src="https://kit.fontawesome.com/1d56e9de16.js" crossorigin="anonymous"></script>
    <link rel="shortcut icon" href="{{ asset('/images/n&k-icon.png') }}" type="image/x-icon">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Admin | @yield('title')</title>

</head>

<body>
    <!-- CONTENTS -->
    <main class="d-flex flex-column flex-fill">
        <div class="container-fluid d-flex flex-column flex-grow-1 px-0 overflow-hidden">
            {{-- SIDEBAR --}}
            @include('components.admin.sidenav')

            {{-- CONTENT --}}
            <section class="container-fluid flex-fill mx-0 p-3 row-spacing-4 home-section overflow-auto">
                <div class="home-content">
                    <i class='bx bx-menu me-auto'></i>
                    @include('components.admin.top')
                </div>
                <div class="my-5">
                    @yield('body')
                </div>
            </section>
        </div>
    </main>
    <script src="{{ asset('/js/app.js') }}"></script>
    <script src="{{ asset('/js/admin.js') }}"></script>
    @yield('script')
</body>

</html>
