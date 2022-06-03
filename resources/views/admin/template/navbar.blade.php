<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
        <li class="nav-item dropdown">
            <a href="#" class="nav-link" data-toggle="dropdown">
                <i class="fas fa-user"></i>
            </a>

            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                <div class="p-3">
                    {{ auth()->user()->name }}
                </div>

                <div class="dropdown-divider"></div>

                <button href="#" class="dropdown-item"
                    onclick="event.preventDefault(); document.querySelector('#logout-form').submit();">
                    <i class="fas fa-sign-out-alt mr-2 text-muted"></i> Sair
                </button>
            </div>
        </li>

        <form method="post" id="logout-form" action="{{ route('auth.logout.action') }}">
            @csrf
        </form>
    </ul>
</nav>
