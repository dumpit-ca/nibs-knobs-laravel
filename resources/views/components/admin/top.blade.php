<div class="dropdown">
    <a class="dropdown-toggle text-decoration-none" href="#" role="button" data-bs-toggle="dropdown"
        aria-expanded="false">
        <i class='bx bxs-user'></i>
        @php $user = Auth::user(); @endphp
        {{-- User --}}
        {{ Auth::user()->first_name  }}
    </a>
    <ul class="dropdown-menu">
        <li><a class="dropdown-item" href="{{route('logout')}}">Logout</a></li>
    </ul>
</div>
