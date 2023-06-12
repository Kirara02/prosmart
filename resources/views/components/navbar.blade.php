<nav
    class="layout-navbar navbar  align-items-center bg-navbar-theme border border-dark"
    id="layout-navbar"
    >
    <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
        <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
        <i class="ti ti-menu-2 ti-sm"></i>
        </a>
    </div>

    <div class="navbar-nav-right d-flex align-items-center p-3" id="navbar-collapse">
        <h4>{{ $title }}</h4>

        <ul class="navbar-nav flex-row align-items-center ms-auto">
            <li class="nav-item">

            </li>

            <!-- User -->
            <li class="nav-item navbar-dropdown dropdown-user dropdown">
                <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
                <div class="avatar avatar-online">
                    <img src="../../assets/img/avatars/1.png" alt class="h-auto rounded-circle" />
                </div>
                </a>
                <ul class="dropdown-menu dropdown-menu-end">
                <li>
                    <a class="dropdown-item" href="pages-account-settings-account.html">
                    <div class="d-flex">
                        <div class="flex-shrink-0 me-3">
                        <div class="avatar avatar-online">
                            <img src="../../assets/img/avatars/1.png" alt class="h-auto rounded-circle" />
                        </div>
                        </div>
                        <div class="flex-grow-1">
                        <span class="fw-semibold d-block">John Doe</span>
                        <small class="text-muted">Admin</small>
                        </div>
                    </div>
                    </a>
                </li>
                <li>
                    <div class="dropdown-divider"></div>
                </li>
                <li>
                    <a class="dropdown-item" href="auth-login-cover.html" target="_blank">
                    <i class="ti ti-logout me-2 ti-sm"></i>
                    <span class="align-middle">Log Out</span>
                    </a>
                </li>
                </ul>
            </li>
            <!--/ User -->
        </ul>
    </div>

    <!-- Search Small Screens -->
    <div class="navbar-search-wrapper search-input-wrapper d-none">
        <input
        type="text"
        class="form-control search-input container-xxl border-0"
        placeholder="Search..."
        aria-label="Search..."
        />
        <i class="ti ti-x ti-sm search-toggler cursor-pointer"></i>
    </div>
</nav>
