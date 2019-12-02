<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <script src="{{ asset('js/app.js') }}" defer></script>
    
    <!-- Styles -->
    <style>
        body{
            padding: 0;
            margin: 0;
            width: 100%;
        }
        .billboard{
            background-color: black;
            position: fixed; 
            width: 100%;
            z-index: 9999;
        }
        .navbar{
            padding: 20px;
        }
        .list_navbar{
            list-style-type: none;
        }
        .link_navbar{
            text-decoration: none;
            color: #fef8f1;
            margin-left: 50px;
            letter-spacing: 1px;
            font-family: 'LatoBold', arial;
            font-weight: bold;
            font-size: 16px;
        }
        .nama{
            text-decoration: none;
            color: #fef8f1;
            margin-left: 50px;
            letter-spacing: 1px;
            font-family: 'LatoBold', arial;
            font-weight: bold;
            font-size: 16px;
            float: left;
            margin-top: 0px;
        }
        .navbar_kiri{
            float: left;
        }
        .navbar_kanan{
            float: right;
        }
        .navbar::after{
            content: "";
            clear: both;
            display: table;
        }
    </style>
</head>
<body>
    <header class="billboard">
        <nav class="navbar wrapper">
            <img class="navbar_kiri" src="img/logo.png" alt="" title="">
            <ul class="list_navbar">
                <li class="navbar_kiri"><a class="link_navbar" href="{{ url('/') }}">Home</a></li>
                <li class="navbar_kiri"><a class="link_navbar" href="#service">Services</a></li>
                @guest
                <li class="navbar_kanan"><a class="link_navbar" href="{{ route('register') }}">Register</a></li>
                @if (Route::has('login'))
                <li class="navbar_kanan"><a class="link_navbar" href="{{ route('login') }}">Login</a></li>
                @endif
                @else
                <li class="navbar_kanan">
                    <p id="navbarDropdown" class="nama">{{ Auth::user()->name }}</p>
                    <div class="navbar_kanan" aria-labelledby="navbarDropdown">
                        <a class="link_navbar" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                </li>
                @endguest
            </ul>
        </nav>
    </header>
    <main class="py-4">
        @yield('content')
    </main>
</body>
</html>