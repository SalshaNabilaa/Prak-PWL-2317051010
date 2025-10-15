<nav class="navbar navbar-expand-lg navbar-dark">
    <div class="container-fluid">
        <a class="navbar-brand fw-semibold" href="/">Aplikasi User</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" 
                data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" 
                aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">

                {{-- Menu User --}}
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('user') ? 'fw-bold text-light' : '' }}" href="/user">
                        List User
                    </a>
                </li>

                {{-- Menu Mata Kuliah --}}
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('matakuliah') ? 'fw-bold text-light' : '' }}" href="/matakuliah">
                        List Mata Kuliah
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>
