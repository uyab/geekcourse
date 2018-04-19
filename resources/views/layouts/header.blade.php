<nav class="navbar border-bottom {{ $headerClass ?? '' }}">
    <a class="navbar-brand" href="#">GeekCourse</a>
    @auth

        <ul class="nav">
            <li class="nav-item">
                <a class="nav-link" href="#">Manage Course</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">My Wishlist</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">My Enrolled Course</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">My Profile Page</a>
            </li>
        </ul>

        <form action="{{ route('logout') }}" method="POST">
            @csrf
            <button type="submit" class="btn btn-outline-primary">Logout</button>
        </form>
    @else
        <a href="{{ route('login') }}" class="btn btn-primary">Login</a>
    @endauth
</nav>
