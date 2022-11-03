{{-- Side bar --}}
<div id="layoutSidenav_nav">
    <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
        <div class="sb-sidenav-menu">
            <div class="nav">
                <div class="sb-sidenav-menu-heading">Core</div>
                <a class="nav-link" href="{{ route('admin.dashboard') }}">
                    <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                    Dashboard
                </a>

                <div class="sb-sidenav-menu-heading">Database</div>

                <a class="nav-link" href="{{ route('user.index') }}">
                    <div class="sb-nav-link-icon"><i class="fa-solid fa-user"></i></div>
                    Users
                </a>

                <a class="nav-link" href="{{ route('type.index') }}">
                    <div class="sb-nav-link-icon"><i class="fa-solid fa-list"></i></div>
                    Product types
                </a>

                <a class="nav-link" href="{{ route('product.index') }}">
                    <div class="sb-nav-link-icon"><i class="fa-solid fa-hotdog"></i></div>
                    Products
                </a>

                <a class="nav-link" href="{{ route('bill.index') }}">
                    <div class="sb-nav-link-icon"><i class="fa-solid fa-money-bills"></i></div>
                    Bills
                </a>

                <a class="nav-link" href="{{ route('slide.index') }}">
                    <div class="sb-nav-link-icon"><i class="fa-solid fa-image"></i></div>
                    Slide
                </a>

                {{-- <div class="sb-sidenav-menu-heading">Addons</div>
                <a class="nav-link" href="charts.html">
                    <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                    Charts
                </a>
                <a class="nav-link" href="tables.html">
                    <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                    Tables
                </a> --}}
            </div>
        </div>
        <div class="sb-sidenav-footer">
            <div class="small">Logged in as:</div>
            {{ auth('admin')->user()->name }}
        </div>
    </nav>
</div>
