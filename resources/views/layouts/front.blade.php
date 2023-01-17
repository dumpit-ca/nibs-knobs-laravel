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
  <title>N&K | @yield('title')</title>

</head>

<body>
  @include('components.front.navbar')
  @yield('content')
  {{-- JQuery --}}
  {{-- <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script> --}}
  <script src="{{ asset('/js/app.js') }}"></script>
  <script>
    function bookedSuccess() {
      const Toast = Swal.mixin({
        toast: true,
        position: 'top-end',
        showConfirmButton: false,
        timer: 3000,
        timerProgressBar: true,
        didOpen: (toast) => {
          toast.addEventListener('mouseenter', Swal.stopTimer)
          toast.addEventListener('mouseleave', Swal.resumeTimer)
        }
      })

      Toast.fire({
        icon: 'success',
        title: 'Booked Succesfully'
      })
    }

    function contactSuccess() {
      const Toast = Swal.mixin({
        toast: true,
        position: 'top-end',
        showConfirmButton: false,
        timer: 3000,
        timerProgressBar: true,
        didOpen: (toast) => {
          toast.addEventListener('mouseenter', Swal.stopTimer)
          toast.addEventListener('mouseleave', Swal.resumeTimer)
        }
      })

      Toast.fire({
        icon: 'success',
        title: 'Message sent succesfully'
      })
    }
  </script>
  @yield('script')
</body>

</html>
