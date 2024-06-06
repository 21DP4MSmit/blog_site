 <!-- ======= Header ======= -->
 <header id="header" class="header fixed-top d-flex align-items-center">

<div class="d-flex align-items-center justify-content-between">
  <a href="{{ url('panel/dashboard') }}" class="logo d-flex align-items-center">
    <span class="d-none d-lg-block">Blogger</span>
  </a>
  <i class="bi bi-list toggle-sidebar-btn"></i>
</div>

<nav class="header-nav ms-auto">
  <ul class="d-flex align-items-center">

    <li class="nav-item d-block d-lg-none">
      <a class="nav-link nav-icon search-bar-toggle " href="#">
        <i class="bi bi-search"></i>
      </a>
    </li>


    <li class="nav-item dropdown pe-3">

      <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
        <img src="{{ Auth::user()->getProfile() }}" alt="Profile" class="rounded-circle" style="width: 36px;height: 36px;object-fit: cover;">
        <span class="d-none d-md-block dropdown-toggle ps-2">{{ Auth::user()->name }}</span>
      </a>

      <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile" style="padding: 0px;">
        <li>
          <a class="dropdown-item d-flex align-items-center" href="{{ url('panel/account-settings') }}">
            <i class="bi bi-gear"></i>
            <span>Account Settings</span>
          </a>
        </li>

        <li>
          <hr class="dropdown-divider">
        </li>

        <li>
          <a class="dropdown-item d-flex align-items-center" href="{{ url('logout') }}">
            <i class="bi bi-box-arrow-right"></i>
            <span>Sign Out</span>
          </a>
        </li>

      </ul>
    </li>

  </ul>
</nav>

</header>