<nav class="navbar navbar-expand-lg bg-white border-bottom">
    <div class="container-fluid px-3">
        <span class="navbar-brand fw-semibold text-dark">MegaStore Admin</span>
        <button
            type="button"
            class="navbar-toggler"
            data-bs-toggle="collapse"
            data-bs-target="#adminNavbar"
            aria-controls="adminNavbar"
            aria-expanded="false"
            aria-label="Toggle navigation"
        >
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="adminNavbar">
            <ul class="navbar-nav ms-auto align-items-lg-center gap-lg-2">
                <li class="nav-item">
                    <span class="nav-link text-secondary">Hi, {{ Auth::user()->name ?? 'Admin' }}</span>
                </li>
                <li class="nav-item">
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" class="btn btn-outline-secondary btn-sm">Log out</button>
                    </form>
                </li>
            </ul>
        </div>
    </div>
</nav>