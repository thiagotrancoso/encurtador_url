<div id="layoutSidenav_nav">
    <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
        <div class="sb-sidenav-menu">
            <div class="nav">
                <a href="{{ route('admin.all-links') }}" class="nav-link {{ menu_active('admin.all-links') }}">
                    <div class="sb-nav-link-icon"><i class="fas fa-circle"></i></div>
                    Todos os links
                </a>

                <a href="{{ route('admin.shortened-url.create') }}" class="nav-link {{ menu_active('admin.shortened-url.create') }}">
                    <div class="sb-nav-link-icon"><i class="fas fa-circle"></i></div>
                    Encurtar URL
                </a>
            </div>
        </div>
    </nav>
</div>
