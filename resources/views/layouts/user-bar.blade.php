<div>
    <div class="dropdown d-inline-block">
        <button type="button" class="btn header-item bg-soft-light border-start border-end" id="page-header-user-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <img class="rounded-circle header-profile-user" src="/assets/images/users/avatar-1.jpg" alt="Header Avatar">
            <span class="d-none d-xl-inline-block ms-1 fw-medium">{{auth()->user()->name}}</span>
            <i class="mdi mdi-chevron-down d-none d-xl-inline-block"></i>
        </button>
        <div class="dropdown-menu dropdown-menu-end">
            <!-- item-->
            <a class="dropdown-item" href="apps-contacts-profile.php"><i class="mdi mdi-face-profile font-size-16 align-middle me-1"></i> Profile</a>
           <a class="dropdown-item" href="auth-lock-screen.php"><i class="mdi mdi-lock font-size-16 align-middle me-1"></i> Lock_screen</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="/logout"><i class="mdi mdi-logout font-size-16 align-middle me-1"></i> Logout</a>
        </div>
    </div>
</div>
