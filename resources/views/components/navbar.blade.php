<nav
    class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme"
    id="layout-navbar"
    >
    <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
        <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
            <i class="ti ti-menu-2 ti-sm"></i>
        </a>
    </div>

    <div class="navbar-nav-right d-flex align-items-center p-3" id="navbar-collapse">
        <h4 class="nav-item mt-3">{{ $title }}</h4>

        <ul class="navbar-nav flex-row align-items-center ms-auto">
            <li class="nav-item mx-3">
                <input type="text" class="form-control" placeholder="search fitur">
            </li>


            <!-- Notification2-->
            <li class="nav-item navbar-dropdown dropdown-user dropdown">
                <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
                  <i class="menu-icon tf-icons ti ti-bell" id="countNotif"></i>
                </a>
                <ul class="dropdown-menu dropdown-menu-media dropdown-menu-end" style="width: 300px; max-height: 400px; overflow-y: auto;">
                  <li class="dropdown-menu-header">
                    <div class="dropdown-header d-flex">
                      <h4 class="notification-title mb-0 me-auto">Notifications</h4>
                      <div class="badge rounded-pill badge-light-primary">6 New</div>
                    </div>
                  </li>
                  <ul id="notif-all">

                  </ul>
                </ul>
              </li>
             <!-- /Notification2-->

            <!-- User -->
            <li class="nav-item navbar-dropdown dropdown-user dropdown">
                <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
                <div class="avatar avatar-online">
                    <img src="{{ asset('/') }}assets/logo/logo_prosmart_kotak.png" alt class="h-auto rounded-circle" />
                </div>
                </a>
                <ul class="dropdown-menu dropdown-menu-end">
                <li>
                    <a class="dropdown-item" href="{{ url('/dashboard') }}">
                    <div class="d-flex">
                        <div class="flex-shrink-0 me-3">
                        <div class="avatar avatar-online">
                            <img src="{{ asset('/') }}assets/logo/logo_prosmart_kotak.png" alt class="h-auto rounded-circle"/>
                        </div>
                        </div>
                        <div class="flex-grow-1">
                        <span class="fw-semibold d-block">Administrator </span>
                        <small class="text-muted">admin</small>
                        </div>
                    </div>
                    </a>
                </li>
                <li>
                    <div class="dropdown-divider"></div>
                </li>
                <li>
                    <form action="{{ route('logout') }}" method="POST" id="logout-form">
                        @csrf
                        <div class="dropdown-item">
                        <i class="ti ti-logout me-2 ti-sm"></i>
                        <button type="button" class="btn align-middle logout">Log Out</button>
                    </form>
                    </a>
                </li>
                </ul>
            </li>
            <!--/ User -->
        </ul>
    </div>
</nav>

