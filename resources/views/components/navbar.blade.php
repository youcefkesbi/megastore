<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <span class="navbar-brand">LOGO</span>
        <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="myCollapse">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a href="" class="nav-link">
                        Welcome, {{ Auth::user()->name }}
                    </a>
                </li>
                <li class="nav-item">
                    <a href="" class="nav-link btn btn-danger text-white">
                        Logout
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>