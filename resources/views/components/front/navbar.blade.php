<nav class="navbar navbar-expand-lg px-3">
    <div class="container-fluid">
        <a href="{{ route('home') }}" class="navbar-brand"><img src="{{ asset('/images/nk-logo.png') }}" alt=""></a>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a href="{{ route('home') }}" class="nav-link active" aria-current="page">
                        <i class='fs-5 bx bxs-home'></i>
                    </a>
                </li>
                <li class=" nav-item">
                    <a href="#" class="nav-link active" aria-current="page">
                        <i class='fs-5 bx bx-search-alt'></i>
                    </a>
                </li>
                <li class=" nav-item">
                    <a href="#" class="nav-link active" aria-current="page">
                        <i class='fs-5 bx bxs-book-bookmark'></i>
                    </a>
                </li>
                <li class=" nav-item">
                    <a class="nav-link" href="{{ route('login') }}">Login</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{ route('register') }}">Register</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
