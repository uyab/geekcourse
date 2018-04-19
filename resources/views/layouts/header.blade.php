<nav class="navbar border-bottom {{ $headerClass ?? '' }}">
    <a class="navbar-brand" href="#">GeekCourse</a>
    @auth
        <form action="{{ route('logout') }}" method="POST">
            @csrf
            <button type="submit" class="btn btn-outline-primary">Logout</button>
        </form>
    @else
        <a href="{{ route('login') }}" class="btn btn-primary">Login</a>
    @endauth
</nav>
