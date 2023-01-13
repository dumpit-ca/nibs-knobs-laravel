<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="/css/main.css">
  {{-- Favicon --}}
  <link rel="shortcut icon" href="/images/n&k-icon.png" type="image/x-icon">
  {{-- Icons --}}
  <script src="https://kit.fontawesome.com/1d56e9de16.js" crossorigin="anonymous"></script>
  <title>N&K | @yield('title')</title>
</head>

<body>
  <nav class="navbar navbar-expand-lg px-3 d-flex align-content-center">
    <div class="container-fluid">
      <a href="{{ url('home') }}" class="navbar-brand"><img src="/images/nk-logo.png" alt=""></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
        aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a href="{{ url('home') }}" class="nav-link active" aria-current="page" ">
              <i class="fa-solid fa-house me-1"></i>
              Home</a>
          </li>
          <li class="nav-item dropdown">
            <a href="#" class="nav-link dropdown-toggle"  role="button" data-bs-toggle="dropdown" aria-expanded="false">
              <i class="fa-solid fa-compass me-1"></i>
              Explore
            </a>
            <ul class="dropdown-menu">
              <li><a href="#"class="dropdown-item" >Gallery</a></li>
              <li><a href="#" class="dropdown-item" >Kitchen</a></li>
              <li><a href="#" class="dropdown-item">Bedroom</a></li>
              <li><a href="#" class="dropdown-item">Living Room</a></li>
              <li><a href="#" class="dropdown-item">Bathroom</a></li>
              <li><a href="#" class="dropdown-item">Space Saving</a></li>
              <li><a href="#" class="dropdown-item">Home Office</a></li>
            </ul>
          </li>
           <li class="nav-item">
            <a href="{{ url('consult') }}" class="nav-link active" aria-current="page" ">
              <i class="fa-solid fa-calendar me-1"></i>
              Consult</a>
          </li>
          <li class="nav-item">
            <a href="{{ url('contact') }}" class="nav-link">
              <i class="fa-solid fa-circle-question me-1"></i>
              Contact</a>
          </li>
        </ul>
        <a href="{{ url('consult') }}" class="btn fs-6 mb-4 rounded-pill px-5 py-1 text-uppercase mx-md-0">BOOK A CONSULTANCY</a>
      </div>
    </div>
  </nav>
  <div class="container-fluid px-lg-5 px-3">
    @yield('content')
  </div>
  <script src="/js/app.js"></script>
  <script>
    function successMessage() {
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
  </script>
</body>

</html>
