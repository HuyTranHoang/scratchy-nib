<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
    <div class="position-sticky pt-3 sidebar-sticky">
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link {{ request()->routeIs('admin.*') ? 'active' : '' }}" aria-current="page" href="{{route('admin.index')}}">
                    <i class="fa-solid fa-circle-three-quarters-stroke"></i>
                    Dashboard
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ request()->routeIs('categories.*') ? 'active' : '' }}" aria-current="page" href="{{route('categories.index')}}">
                    <i class="fa-solid fa-layer-group"></i>
                    Categories
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ request()->routeIs('styles.*') ? 'active' : '' }}" href="{{route('styles.index')}}">
                    <i class="fa-solid fa-palette"></i>
                    Styles
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ request()->routeIs('calligraphies.*') ? 'active' : '' }}" href="{{route('calligraphies.index')}}">
                    <i class="fa-solid fa-pen-nib"></i>
                    Calligraphies
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ request()->routeIs('feedback.*') ? 'active' : '' }}" href="{{route('feedback.index')}}">
                    <i class="fa-solid fa-comment"></i>
                    Feedback
                </a>
            </li>
{{--            <li class="nav-item">--}}
{{--                <a class="nav-link {{ request()->routeIs('gallery.*') ? 'active' : '' }}" href="{{route('gallery.index')}}">--}}
{{--                    <i class="fa-solid fa-image"></i>--}}
{{--                    Gallery Images--}}
{{--                </a>--}}
{{--            </li>--}}
            <li class="nav-item">
                <a class="nav-link {{ request()->routeIs('users.*') ? 'active' : '' }}" href="{{route('users.index')}}">
                    <i class="fa-solid fa-user"></i>
                    Users
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ request()->routeIs('roles.*') ? 'active' : '' }}" href="{{route('roles.index')}}">
                    <i class="fa-solid fa-pen-to-square"></i>
                    Roles
                </a>
            </li>
            <hr>

            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" data-bs-offset="50,0" aria-expanded="false">
                    <img style="height: 40px; width: 40px; border-radius: 50%" src="{{ asset('storage/' . Auth::user()->avatar) }}" alt="">
                    <strong class="py-2 text-success">{{ Auth::user() -> name }}</strong>
                </a>
                <ul class="dropdown-menu">
                    <li class="nav-item">
                        <a class="dropdown-item nav-link" href="{{ route('home.index') }}">
                            <i class="fa-solid fa-house"></i>
                            Back to homepage
                        </a>
                    </li>
                    <li class="nav-item">
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button class="dropdown-item fw-semibold nav-link" type="submit">
                                <i class="fa-solid fa-right-from-bracket"></i>
                                Logout
                            </button>
                        </form>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
</nav>
