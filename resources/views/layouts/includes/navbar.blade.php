<nav class="navbar navbar-expand-lg sticky-top mb-5">
    <div class="container">
        <!-- Brand -->
        <a class="navbar-brand" href="/">MyApp</a>

        <!-- Toggler untuk mobile -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Navbar content -->
        <div class="collapse navbar-collapse" id="navbarContent">
            <!-- Kiri -->
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                @guest
                    <li class="nav-item"><a class="nav-link" href="{{ url('/') }}">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ url('/helps') }}">Helps</a></li>
                @endguest

                @auth
                    <li class="nav-item"><a class="nav-link" href="{{ route('dashboard') }}">Dashboard</a></li>

                    <!-- Dropdown Role & Permission -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="roleDropdown" role="button"
                            data-bs-toggle="dropdown">
                            Role & Permission
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="roleDropdown">
                            <li><a class="dropdown-item" href="{{ route('roles.index') }}">Role</a></li>
                            <li><a class="dropdown-item" href="{{ route('permissions.index') }}">Permission</a></li>
                            <li><a class="dropdown-item" href="{{ route('role-permissions.index') }}">Permission Role</a>
                            </li>
                        </ul>
                    </li>
                @endauth
            </ul>

            <!-- Kanan -->
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                @guest
                    <li class="nav-item"><a class="btn btn-warning btn-sm me-2" href="{{ route('login') }}">Login</a></li>
                    <li class="nav-item"><a class="btn btn-success btn-sm" href="{{ route('register') }}">Register</a></li>
                @endguest

                @auth
                    <!-- Dropdown user -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                            data-bs-toggle="dropdown">
                            {{ auth()->user()->name }}
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="userDropdown">
                            <li><a class="dropdown-item" href="#">Profile</a></li>
                            <li>
                                <form action="{{ route('logout') }}" method="POST">
                                    @csrf
                                    <button type="submit" class="dropdown-item">Logout</button>
                                </form>
                            </li>
                        </ul>
                    </li>
                @endauth
            </ul>
        </div>
    </div>
</nav>
