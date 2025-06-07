<div class="d-flex flex-column flex-shrink-0 p-3 bg-white border-end shadow-sm vh-100" style="width: 260px;">
    <!-- Brand -->
    <a href="#" class="d-flex align-items-center mb-4 text-decoration-none">
        <i class="fas fa-layer-group text-primary fs-4 me-2"></i>
        <span class="fs-5 fw-semibold text-dark">My Admin</span>
    </a>

    <hr>

    <!-- Navigation -->
    <ul class="nav nav-pills flex-column mb-auto">
        <li class="nav-item mb-2">
            <a href="#" class="nav-link d-flex align-items-center {{ request()->is('dashboard') ? 'active bg-primary text-white' : 'text-dark' }}">
                <i class="fas fa-home me-3 opacity-75"></i> Dashboard
            </a>
        </li>
        <li class="nav-item mb-2">
            <a href="#" class="nav-link d-flex align-items-center {{ request()->is('absensi*') ? 'active bg-primary text-white' : 'text-dark' }}">
                <i class="fas fa-clock me-3 opacity-75"></i> Absensi
            </a>
        </li>
        <li class="nav-item mb-2">
            <a href="#" class="nav-link d-flex align-items-center {{ request()->is('pengguna*') ? 'active bg-primary text-white' : 'text-dark' }}">
                <i class="fas fa-users me-3 opacity-75"></i> Pengguna
            </a>
        </li>
        <li class="nav-item mt-4">
            <a href="#" class="nav-link d-flex align-items-center text-danger">
                <i class="fas fa-sign-out-alt me-3"></i> Keluar
            </a>
        </li>
    </ul>
</div>