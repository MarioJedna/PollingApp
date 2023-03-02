<nav>
    @guest
        <a href="{{ route('register') }}">Registration</a>
        <a href="{{ route('login') }}">Log in</a>
    @endguest

    @auth

        logged in as {{ auth()->user()->name }} &nbsp;

        <form action="{{ route('logout') }}" method="post">
            @csrf
            <button>Logout</button>
        </form>
    @endauth
</nav>
