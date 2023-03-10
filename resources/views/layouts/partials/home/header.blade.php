<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container">
        <a class="navbar-brand" href="/">
            <span class="fs-1 navbar-title">Scratchy Nib</span>
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Categories
                    </a>
                    <ul class="dropdown-menu animate slideIn m-0">
                        <li><a class="dropdown-item" href="{{ url('/#Traditional') }}">Traditional Calligraphy</a></li>
                        <li><a class="dropdown-item" href="{{ url('/#Contemporary') }}">Contemporary Calligraphy</a></li>
                        <li><a class="dropdown-item" href="{{ url('/#Hand-lettering') }}">Hand-lettering & Design</a></li>
                        <li><a class="dropdown-item" href="{{ url('/#Modern') }}">Modern Calligraphy</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="{{ route('home.category') }}"><i class="fa-solid fa-right"></i> More </a></li>
                    </ul>
                </li>
                <li class="nav-item {{ request()->routeIs('home.gallery') ? 'nav-active' : '' }}"><a href="/gallery" class="nav-link">Gallery</a></li>
                <li class="nav-item {{ request()->routeIs('home.contact') ? 'nav-active' : '' }}"><a href="/contact" class="nav-link">Contact</a></li>
                <li class="nav-item {{ request()->routeIs('home.about') ? 'nav-active' : '' }}"><a href="/about" class="nav-link">About</a></li>
                @guest()
                    <li class="nav-item"><a href="/login" class="nav-link">Login</a></li>
                @endguest
                @auth()
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            {{ Auth::user()->name }}
                        </a>
                        <ul class="dropdown-menu animate slideIn m-0">
                            <li><a class="dropdown-item" href="{{ route('profile.edit') }}">Profile</a></li>
                            @if( Auth::user()-> role_id == 1)
                                <li><a class="dropdown-item" href="{{ route('admin.index') }}">Admin dashboard</a></li>
                            @endif
                            <li>
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <button class="dropdown-item" type="submit">Log Out</button>
                                </form>
                            </li>
                        </ul>
                    </li>
                @endauth

            </ul>
        </div>
    </div>
</nav>
