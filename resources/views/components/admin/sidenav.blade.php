<div class="sidebar close">
    <div class="d-flex flex-column align-items-center justify-content-center position-relative logo-details px-3 my-4">
        <div class="fs-6 logo_name RockSalt" id="brand-logo">Nibs& <br> Knobs</div>
        {{-- <p class="fs-6 text-uppercase logo_name subheader text-start mt-3 border-bottom">ADMIN PORTAL</p> --}}
    </div>
    <ul class="nav-links">
        <li>
            <a href="{{route('dashboard')}}">
                <i class='bx bxs-dashboard'></i>
                <span class="link_name fs-6">Dashboard</span>
            </a>
            <ul class="sub-menu blank">
                <li><a class="link_name fs-6" href="#">Dashboard</a></li>
            </ul>
        </li>
        <li>
            <a href="#">
                <i class='bx bxs-contact'></i>
                <span class="link_name fs-6">Contact Us</span>
            </a>
            <ul class="sub-menu blank">
                <li><a class="link_name fs-6" href="#">Contact Us</a></li>
            </ul>
        </li>
        <li>
            <div class="icon-link">
                <a href="#">
                    <i class='bx bxs-bar-chart-square'></i>
                    <span class="link_name fs-6">Designs</span>
                </a>
                <i class='bx bxs-chevron-down arrow'></i>
            </div>
            <ul class="sub-menu">
                {{-- <li><a class="link_name" href="#"></a></li> --}}
                <li><a href="#">Kitchen</a></li>
                <li><a href="#">Bedroom</a></li>
                <li><a href="#">Living Room</a></li>
                <li><a href="#">Bathroom</a></li>
                <li><a href="#">Space-Saving</a></li>
                <li><a href="#">Home Office</a></li>
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
                {{-- <li><a class="link_name" href="#"></a></li> --}}
                <li><a class="fs-6" href="#">User Management</a></li>
            </ul>
        </li>
    </ul>
</div>
