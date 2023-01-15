<nav class="col-2 d-flex flex-column px-0 sidebar sticky-top" id="sidebar">
  {{-- Branding --}}
  <a class="navbar-brand w-100 text-center pt-4 pb-2">
    <img src="/images/main/logo2.png" class="img img-fluid w-25">
    <h6 class="text-light mt-3">Headaway Salon</h6>
  </a>

  <hr class="w-100 px-0 mx-0 border-light">

  {{-- LINKS --}}
  <div class="d-flex flex-column mx-auto" style="color: #707070!important; width: 90%;">

    <div class="sidebar-item active">
      <i class="fas fa-tachometer-alt mr-2"></i>Dashboard
    </div>
    <a class="sidebar-item active" href="{{ route('admin.dashboard') }}">
      <i class="fas fa-tachometer-alt mr-2"></i>Dashboard
    </a>
    <a class="sidebar-item d-block inactive" href="{{ route('admin.dashboard') }}">
      <i class="fas fa-tachometer-alt mr-2"></i>Dashboard
    </a>

    <div class="sidebar-item active">
      <i class="fas fa-percent mr-2"></i>Sales Order
    </div>
    <a class="sidebar-item active" href="{{ route('admin.sales-order.index') }}">
      <i class="fas fa-percent mr-2"></i>Sales Order
    </a>
    <a class="sidebar-item d-block inactive" href="{{ route('admin.sales-order.index') }}">
      <i class="fas fa-percent mr-2"></i>Sales Order
    </a>

    <div class="sidebar-item active">
      <i class="far fa-calendar mr-2"></i>Daily Sales Report
    </div>
    <a class="sidebar-item active" href="{{ route('admin.daily-sales.index') }}">
      <i class="far fa-calendar mr-2"></i>Daily Sales Report
    </a>
    <a class="sidebar-item d-block inactive" href="{{ route('admin.daily-sales.index') }}">
      <i class="far fa-calendar mr-2"></i>Daily Sales Report
    </a>

    <div class="sidebar-item active">
      <i class="fas fa-wine-bottle mr-2"></i>Products
    </div>
    <a class="sidebar-item active" href="{{ route('admin.products.index') }}">
      <i class="fas fa-wine-bottle mr-2"></i>Products
    </a>
    <a class="sidebar-item d-block inactive" href="{{ route('admin.products.index') }}">
      <i class="fas fa-wine-bottle mr-2"></i>Products
    </a>

    <div class="sidebar-item active">
      <i class="fas fa-shopping-basket mr-2"></i>Purchase Order
    </div>
    <a class="sidebar-item active" href="{{ route('admin.purchase-order.index') }}">
      <i class="fas fa-shopping-basket mr-2"></i>Purchase Order
    </a>
    <a class="sidebar-item d-block inactive" href="{{ route('admin.purchase-order.index') }}">
      <i class="fas fa-shopping-basket mr-2"></i>Purchase Order
    </a>

    <div class="sidebar-item active">
      <i class="fas fa-truck mr-2"></i>Receive Order
    </div>
    <a class="sidebar-item active" href="{{ route('admin.receiving-order.index') }}">
      <i class="fas fa-truck mr-2"></i>Receive Order
    </a>
    <a class="sidebar-item d-block inactive" href="{{ route('admin.receiving-order.index') }}">
      <i class="fas fa-truck mr-2"></i>Receive Order
    </a>

    <div class="sidebar-item active">
      <i class="fas fa-truck-loading mr-2"></i>Suppliers
    </div>
    <a class="sidebar-item active" href="{{ route('admin.inventory.suppliers.index') }}">
      <i class="fas fa-truck-loading mr-2"></i>Suppliers
    </a>
    ss="sidebar-item d-block inactive" href="{{ route('admin.inventory.suppliers.index') }}">
    <i class="fas fa-truck-loading mr-2"></i>Suppliers
    </a>

    {{-- @if (\Request::is('admin/superadmin/users')) --}}
    <div class="sidebar-item active">
      <i class="fas fa-users mr-2"></i>Users
    </div>
    <a class="sidebar-item active" href="{{ route('admin.users.index') }}">
      <i class="fas fa-users mr-2"></i>Users
    </a>
    <a class="sidebar-item d-block inactive" href="{{ route('admin.users.index') }}">
      <i class="fas fa-users mr-2"></i>Users
    </a>
  </div>

  <div class="h-100">
    <small class="text-white w-100 text-center mb-2" style="position: absolute; bottom: 0;">©2021 Headaway Salon</small>
  </div>
</nav>

{{-- NAVBAR (TOP) --}}
<div class="col-10 px-0">
  <nav class="navbar navbar-expand py-0 dark-shadow" style="background-color: #FFF;">
    {{-- Hamburger Menu --}}
    <button class="btn" id="sidebar-trigger" data-target="#sidebar"><i class="fas fa-list-ul fa-lg"></i></button>

    {{-- Navbar contents --}}
    <div class="ml-auto">
      <label>
        <div class="dropdown">
          <a href='' role="button" class="nav-link dropdown-toggle text-dark dynamic-size-lg-h6" style="font-size: 1.25rem;" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Admin
          </a>

          <div class="dropdown-menu dropdown-menu-right">
            <a class="dropdown-item" href="{{ route('home') }}">Home page</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="{{ route('logout') }}">Log out</a>
          </div>
        </div>
      </label>
    </div>
  </nav>

  <div class="container-fluid my-2 mx-0 px-3 row-spacing-4">
    @yield('body')
  </div>
</div>
</div>
