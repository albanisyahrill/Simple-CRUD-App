<ul
        class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion"
        id="accordionSidebar"
      >
        <!-- Sidebar - Brand -->
        <a
          class="sidebar-brand d-flex align-items-center justify-content-center"
          href="dashboard"
        >
          <div class="sidebar-brand-icon">
            <i class="fa-solid fa-jug-detergent"></i>
          </div>
          <div class="sidebar-brand-text mx-3">Laundry</div>
        </a>

        <!-- Divider -->
        <hr class="sidebar-divider my-0" />

        <!-- Nav Item - Dashboard -->
        <li class="nav-item active">
          <a class="nav-link" href="{{ route('dashboard') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a
          >
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider" />

        <!-- Heading -->
        <div class="sidebar-heading">Interface</div>

        <!-- Nav Item - Dashboard -->
        <li class="nav-item active">
          <a class="nav-link" href="{{ route('transaction') }}">
            <i class="fa-solid fa-cart-shopping"></i>
            <span>Pemesanan</span></a
          >
        </li>

        <!-- Nav Item - Dashboard -->
        <li class="nav-item active">
          <a class="nav-link" href="{{ route('history') }}">
            <i class="fa-solid fa-wallet"></i>
            <span>Riwayat</span></a
          >
        </li>

        <!-- Nav Item - Dashboard -->
        <li class="nav-item active">
          <a class="nav-link" href="{{ route('revenue') }}">
            <i class="fa-solid fa-clock-rotate-left"></i>
            <span>Penghasilan</span></a
          >
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider d-none d-md-block" />

        <!-- Sidebar Toggler (Sidebar) -->
        <div class="text-center d-none d-md-inline">
          <button class="rounded-circle border-0" id="sidebarToggle"></button>
        </div>
      </ul>