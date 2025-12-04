<nav>
    
    <div class="left-region">
        <img id="logo" src="{{ URL::asset('img/logo.png') }}">
    </div>
    <div class="right-region">
        <a href="{{ URL::route('index') }}">Home</a>
        <a href="{{ URL::route('conferences.index') }}">Conferences</a>
        @guest
        <a href="{{ URL::route('auth.login') }}">Log in</a>
        @endguest
        @auth
        <a href="{{ route('auth.logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit()">Logout</a>
        <form id="logout-form" action="{{ route('auth.logout') }}" method="POST" style="display: none;">
            @csrf
        </form>
        @endauth
    </div>
</nav>