<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
    <div class="position-sticky pt-3 sidebar-sticky">
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="{{route('categories.index')}}">
                    <i class="fa-solid fa-layer-group"></i>
                    Categories
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('styles.index')}}">
                    <i class="fa-solid fa-palette"></i>
                    Styles
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('calligraphies.index')}}">
                    <i class="fa-solid fa-pen-nib"></i>
                    Calligraphies
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('feedback.index')}}">
                    <i class="fa-solid fa-comment"></i>
                    Feedback
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('gallery.index')}}">
                    <i class="fa-solid fa-image"></i>
                    Gallery Images
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('users.index')}}">
                    <i class="fa-solid fa-user"></i>
                    Users
                </a>
            </li>
            <hr>
            <li class="nav-item">
                <strong class="px-3 py-2">Username</strong>
                <a class="nav-link" href="#">
                    <i class="fa-solid fa-right-from-bracket"></i>
                    Logout
                </a>
            </li>
        </ul>
    </div>
</nav>
