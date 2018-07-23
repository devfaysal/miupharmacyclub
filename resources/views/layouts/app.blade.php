<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light navbar-laravel fixed-top">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li><a class="nav-link btn btn-success" href="{{ route('login') }}"><i class="fas fa-user"></i> {{ __('Login') }}</a></li>
                            <li><a class="nav-link btn btn-info" href="{{ route('register') }}"><i class="fas fa-user-plus"></i> {{ __('Register') }}</a></li>
                        @else
                            @if (Auth::user()->hasRole('superadministrator'))
                            <li class="nav-item dropdown">
                                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                        Manage <span class="caret"></span>
                                    </a>
    
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        @if (Auth::user()->hasRole('superadministrator'))
                                            <a class="dropdown-item" href="{{route('students')}}">All students</a>
                                            <a class="dropdown-item" href="{{route('student-id.index')}}">Student ID</a>
                                            <a class="dropdown-item" href="{{route('batch.index')}}">Batch</a>
                                            <a class="dropdown-item" href="{{route('admin.index')}}">Manage Admin</a>
                                            <a class="dropdown-item" href="{{route('donation.index')}}">Manage Donation</a>
                                        @endif
                                    </div>
                                </li>
                            @endif
                            <li><a class="nav-link btn btn-info" href="{{route('home')}}"><i class="fas fa-users"></i> {{ __('All Members') }}</a></li>
                            <li><a class="nav-link btn btn-success" href="{{route('profile.index')}}"><i class="fas fa-user"></i> {{ Auth::user()->name }}</a></li>
                            <li><a class="nav-link btn btn-secondary" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();">
                                                <i class="fas fa-sign-out-alt"></i> {{ __('Logout') }}
                            </a></li>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                {{csrf_field()}}
                            </form>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
        <footer>
            @auth
            <p style="color:#fff; margin-bottom: 0;" class="text-center"><a style="color:#fff;" href="{{route('donor.list')}}">Donor List</a></p>
            @endauth
            <p style="color:#fff;" class="text-center">Developed with <span style="color:#fff; font-size: 20px;">&#10084;</span> by <a style="color:#fff;" target="_blank" href="http://faysal.me">Faysal Ahamed</a></p>
        </footer>
    </div>
    <!-- Javascript For Page-->
    @yield('javascript')
</body>
</html>
