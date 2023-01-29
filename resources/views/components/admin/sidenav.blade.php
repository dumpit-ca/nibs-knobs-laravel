<div class="sidebar close">
    <div class="d-flex flex-column align-items-center justify-content-center position-relative logo-details px-3 my-4">
        <div class="fs-6 logo_name RockSalt" id="brand-logo">Nibs& <br> Knobs</div>
    </div>
    <ul class="nav-links">
        <li>
            <a href="{{route('dashboard')}}">
                <i class='bx bxs-dashboard'></i>
                <span class="link_name fs-6">Dashboard</span>
            </a>
            <ul class="sub-menu blank">
                <li><a class="link_name fs-6" href="{{route('dashboard')}}">Dashboard</a></li>
            </ul>
        </li>
        <li>
            <a href="{{route('posts')}}">
                <i class='bx bxs-chat'></i>
                <span class="link_name fs-6">Posts</span>
            </a>
            <ul class="sub-menu blank">
                <li><a class="link_name fs-6" href="{{route('posts')}}">Posts</a></li>
            </ul>
        </li>
        <li>
            <div class="icon-link">
                <a href="#">
                    <i class='bx bxs-cog'></i>
                    <span class="link_name fs-6">Settings</span>
                </a>
                <i class='bx bxs-chevron-down arrow'></i>
            </div>
            <ul class="sub-menu">
                <li><a class="fs-6" href="{{route('users')}}">User Management</a></li>
            </ul>
        </li>
    </ul>
</div>
