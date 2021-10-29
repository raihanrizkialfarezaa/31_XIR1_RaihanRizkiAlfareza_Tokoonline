<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div>
       <a href="{{ route('dashboard') }}"><div class="sidebar-brand-text mx-3" style="color: white">Admin</div></a>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item {{ Request::is('admin') ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('dashboard') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>
    <li class="nav-item {{ Request::is('admin/product*') ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('product.index') }}">
            <i class="fas fa-fw fa-tshirt"></i>
            <span>Product</span></a>
    </li>
    <li class="nav-item {{ Request::is('admin/liga*') ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('liga.index') }}">
            <i class="fas fa-fw fa-futbol"></i>
            <span>Liga</span></a>
    </li>
    <li class="nav-item {{ Request::is('admin/status*') ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('status.index') }}">
            <i class="fas fa-fw fa-battery-full"></i>
            <span>Status</span></a>
    </li>
    <li class="nav-item {{ Request::is('admin/pesanan*') ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('pesanan.index') }}">
            <i class="fas fa-fw fa-dollar-sign"></i>
            <span>Pesanan</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>