<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ route('admin.dashboard') }}" class="brand-link">
        <img src="https://via.placeholder.com/100x100" alt="Encurtador" class="brand-image img-circle elevation-3">
        <span class="brand-text font-weight-light">Encurtador</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column nav-flat" data-widget="treeview" role="menu" data-accordion="true">
                <li class="nav-item">
                    <a href="{{ route('admin.dashboard') }}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('admin.all-links') }}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>
                            Todos os links
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('admin.shortened-url.create') }}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>
                            Encurtar URL
                        </p>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</aside>
