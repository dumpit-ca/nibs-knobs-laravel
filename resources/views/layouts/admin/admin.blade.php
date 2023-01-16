<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="{{ asset('/css/main.css') }}">
  {{-- Favicon --}}
  <link rel="shortcut icon" href="{{ asset('/images/n&k-icon.png') }}" type="image/x-icon">
  {{-- Icons --}}
  <script src="https://kit.fontawesome.com/1d56e9de16.js" crossorigin="anonymous"></script>
  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">
  {{-- Title --}}
  <title>Admin | @yield('title')</title>

</head>

<body>
  @include('layouts.sidebar')
  <div class="container-fluid my-2 mx-0 px-3 row-spacing-4">
    @yield('body')
  </div>
  <script src="{{ asset('/js/app.js') }}"></script>
  @yield('script')
</body>

</html>
