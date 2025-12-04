<head>
    <link rel="stylesheet" href="{{ asset('css/navbar.css') }}">
</head>


<nav>
    
    <div class="left-region">
        <img id="logo" src="{{ URL::asset('img/logo.png') }}">
    </div>
    <div class="right-region">
        <a href="{{ URL::route('index') }}">Home</a>
        <a href="{{ URL::route('conferences.index') }}">Conferences</a>
        @auth
        <a href="{{ URL::route('auth.login') }}">Log in</a>
        @endauth
        @guest
        <a href="{{ route('auth.logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit()">Logout</a>
        <form id="logout-form" action="{{ route('auth.logout') }}" method="POST" style="display: none;">
            @csrf
        </form>
        @endguest
    </div>
</nav>