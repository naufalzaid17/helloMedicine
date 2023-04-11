<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
    <div class="position-sticky pt-3">
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link {{ Request::is('dashAdmin') ? 'active' : '' }}" aria-current="page" href="/dashAdmin">
                    <span data-feather="home"></span>
                    Dashboard
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('dashAdmin/edukasiDash*') ? 'active' : ''}}" href="/dashAdmin/edukasiDash">
                    <span data-feather="file"></span>
                    Edukasi
                </a>
            </li>
            
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <span data-feather="user"></span>
                    Account
                </a>
            </li>
</nav>
