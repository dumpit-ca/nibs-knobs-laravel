<nav class="navbar navbar-expand-lg px-3">
  <div class="container-fluid">
    <a href="{{ route('home') }}" class="navbar-brand"><img src="{{ asset('/images/nk-logo.png') }}" alt=""></a>
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
      aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a href="{{ route('home') }}" class="nav-link active" aria-current="page" ">
              <i class="fa-solid fa-house me-1"></i>
              Home
          </a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            <i class="fa-solid fa-compass me-1"></i>
              Explore
          </a>
          <ul class="dropdown-menu">
            <li> <a href="{{ route('gallery') }}" class="dropdown-item" aria-current="page">Gallery</a></li>
            <li><a href="{{ route('kitchen') }}" class="dropdown-item">Kitchen</a></li>
            <li><a href="{{ route('bedroom') }}" class="dropdown-item">Bedroom</a></li>
            <li><a href="{{ route('livingroom') }}" class="dropdown-item">Living Room</a></li>
            <li><a href="{{ route('bathroom') }}" class="dropdown-item">Bathroom</a></li>
            <li><a href="{{ route('spacesaving') }}" class="dropdown-item">Space Saving</a></li>
            <li><a href="{{ route('homeoffice') }}" class="dropdown-item">Home Office</a></li>
          </ul>
        </li>
        <li class="nav-item">
           <a href="{{ route('consult') }}" class="nav-link active" aria-current="page" ">
            <i class="fa-solid fa-calendar me-1"></i>
            Consult</a>
        </li>
        <li class="nav-item">
          <a href="{{ route('contact') }}" class="nav-link">
            <i class="fa-solid fa-circle-question me-1"></i>
            Contact</a>
        </li>
      </ul>
      <ul class="navbar-nav ms-auto">
        <!-- Authentication Links -->
        {{-- @guest --}}
        <li class="nav-item">
          <a class="nav-link" href="{{ route('login') }}">Login</a>
        </li>
        {{-- @if (Route::has('register')) --}}
        <li class="nav-item">
          <a class="nav-link" href="{{ route('register') }}">Register</a>
        </li>
        {{-- @endif
        @else --}}
        {{-- <li class="nav-item dropdown">
          <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
            {{ Auth::user()->name }} <span class="caret"></span>
          </a>

          <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
              Logout
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
              @csrf
            </form>
          </div>
        </li> --}}
        {{-- @endguest --}}
      </ul>
    </div>
  </div>
</nav>
{{-- <a href="{{ url('consult') }}" class="btn fs-6 mb-4 rounded-pill px-5 py-1 text-uppercase mx-md-0">BOOK A CONSULTANCY</a> --}}
