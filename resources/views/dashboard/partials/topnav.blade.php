<form class="form-inline mr-auto" action="">
    <ul class="navbar-nav mr-3">
        <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a></li>
    </ul>
</form>
<ul class="navbar-nav navbar-right">
    <li class="dropdown"><a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
            <div class="d-sm-none d-lg-inline-block">Hi, {{ auth()->user()->name }}</div>
        </a>
        <div class="dropdown-menu dropdown-menu-right">
            <div class="dropdown-title">Welcome, {{ auth()->user()->name }}</div>
            <a href="#" class="dropdown-item has-icon">
                <i class="far fa-user"></i> Profile Settings
            </a>
            <div class="dropdown-divider"></div>
            <form action="{{ route('dashboard.auth.logout') }}" method="POST" class="dropdown-item">
                @csrf
                <button type="submit" class="btn has-icon text-danger">
                    <i class="fas fa-sign-out-alt"></i> Logout
                </button>
            </form>
        </div>
    </li>
</ul>
