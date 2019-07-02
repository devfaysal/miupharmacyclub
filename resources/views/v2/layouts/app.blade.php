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

    <!-- Styles -->
    <link href="{{ asset('css/tailwind.css') }}" rel="stylesheet">
</head>
<body class="bg-gray-200 pb-8">
<!-- Navigation menu Start -->
    <div class="bg-white border-b-2 border-gray-400">
        <nav class="flex items-center justify-between flex-wrap container p-2">
            <div class="flex items-center flex-shrink-0 text-gray-700 mr-6">
                <a href="/" class="font-semibold text-xl tracking-tight">MIU Pharmacy Club</a>
            </div>
            <div class="block lg:hidden">
                <button id="nav-toggle" class="flex items-center px-3 py-2 border rounded text-gray-600 border-gray-600 hover:text-gray-800 hover:border-gray-900">
                    <svg class="fill-current h-3 w-3" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>Menu</title><path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"/></svg>
                </button>
            </div>
            <div id="nav" class="hidden w-full block flex-grow lg:flex lg:items-center lg:w-auto">
                <div class="text-sm lg:flex-grow">
                    <a href="/donations" class="block mt-4 lg:inline-block lg:mt-0 text-gray-700 hover:text-gray-900 mr-4">
                        Donations
                    </a>
                    <a href="/members" class="block mt-4 lg:inline-block lg:mt-0 text-gray-700 hover:text-gray-900 mr-4">
                        Members
                    </a>
                    <a href="#responsive-header" class="block mt-4 lg:inline-block lg:mt-0 text-gray-700 hover:text-gray-900">
                        Blog
                    </a>
                </div>
                <div class="py-2">
                    @guest
                        <a href="/login" class="miu-button">Login</a>
                    @else
                        <a href="{{ route('logout') }}" class="miu-button" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                        
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    @endguest
                </div>
            </div>
        </nav>
    </div>
<!-- Navigation menu End -->
<!-- Page Content Start -->
    @yield('content')
<!-- Page Content End -->

<!-- Footer Start -->
    <div class="container">
        @include('v2.layouts.credit')
    </div>
<!-- Footer End -->
<script>
    var button = document.querySelector('#nav-toggle');
    button.addEventListener('click', toggleClass);

    function toggleClass(){
        var element = document.querySelector('#nav');
        if(element.classList.contains('hidden')){
            element.classList.remove('hidden');
        }else{
            element.classList.add('hidden');
        }
    }
</script>
<!-- Javascript For Page Start-->
    @yield('javascript')
<!-- Javascript For Page End-->
</body>
</html>