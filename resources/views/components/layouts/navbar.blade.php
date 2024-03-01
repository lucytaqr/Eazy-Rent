<nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow-lg fixed-top">
    <div class="container">
        <a class="navbar-brand" href="#">EazyRent!</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText"
            aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse text-right" id="navbarText">
            <ul class="navbar-nav mx-auto">
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('dashboard') ? 'active' : '' }}"
                        href="{{ route('dashboard.index') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('dashboard/booking') ? 'active' : '' }}"
                        href="{{ route('dashboard.booking') }}">Bukti Booking</a>
                </li>
            </ul>
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <div class="dropdown">
                    <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle"
                        id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false"> <img src="{{ 'https://ui-avatars.com/api/?name=' . Auth::user()->username }}
                                " alt="" width="32" height="32" class="rounded-circle me-2"> <strong
                            class="text-white">{{ Auth::user()->username }}</strong>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-dark text-small shadow  m-phone dropdown-phone"
                        aria-labelledby="dropdownUser1">
                        <form action="{{ route('logout') }}" method="POST">
                            @csrf
                            <button class="dropdown-item" style="cursor:pointer">Sign Out</button>
                        </form>
                    </ul>
                </div>
            </ul>
        </div>
    </div>
</nav>
