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
<body class="bg-gray-200">
<!-- Navigation menu Start -->
    <div class="bg-white border-b-2 border-gray-400">
        <nav class="flex items-center justify-between flex-wrap container p-2">
            <div class="flex items-center flex-shrink-0 text-gray-700 mr-6">
                <span class="font-semibold text-xl tracking-tight">MIU Pharmacy Club</span>
            </div>
            <div class="block lg:hidden">
                <button class="flex items-center px-3 py-2 border rounded text-gray-600 border-gray-600 hover:text-gray-800 hover:border-gray-900">
                    <svg class="fill-current h-3 w-3" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>Menu</title><path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"/></svg>
                </button>
            </div>
            <div class="w-full block flex-grow lg:flex lg:items-center lg:w-auto">
                <div class="text-sm lg:flex-grow">
                    <a href="#responsive-header" class="block mt-4 lg:inline-block lg:mt-0 text-gray-700 hover:text-gray-900 mr-4">
                        Donors
                    </a>
                    <a href="#responsive-header" class="block mt-4 lg:inline-block lg:mt-0 text-gray-700 hover:text-gray-900 mr-4">
                        Members
                    </a>
                    <a href="#responsive-header" class="block mt-4 lg:inline-block lg:mt-0 text-gray-700 hover:text-gray-900">
                        Blog
                    </a>
                </div>
                <div>
                    <a href="#" class="inline-block text-sm px-4 py-2 leading-none border-2 rounded text-gray-700 border-gray-600 hover:border-gray-900 hover:text-gray-900 hover:bg-white mt-4 lg:mt-0">Login</a>
                </div>
            </div>
        </nav>
    </div>
<!-- Navigation menu End -->

<!-- Body Start -->
    <div class="container">
        <div class="flex flex-wrap mt-3 -mx-2">
            <!-- Left Sidebar Start -->
            <div class="w-full md:w-1/4 px-2 mb-3 md:mb-0">
                <div class="bg-white">
                    <div class="max-w-sm rounded overflow-hidden shadow pt-3">
                        <img class="h-16 w-16 md:h-48 md:w-48 rounded-full mx-auto" src="https://tailwindcss.com/img/card-top.jpg" alt="Sunset in the mountains">
                        <div class="px-6 py-4 text-center">
                            <div class="font-bold text-xl mb-1">{{Auth::user()->name}}</div>
                            <p class="text-gray-700 text-base">Last Visit: {{date('d-M-Y')}}</p>
                        </div>
                    </div>
                </div>
                <div class="mt-3">
                    <p class="text-xs text-center text-gray-600">MIU Pharmacy Club © {{date('Y')}}</p>
                    <p class="text-sm text-center text-gray-600">Developed with ❤ by <a href="https://faysal.me">Faysal Ahamed</a></p>
                </div>
            </div>
            <!-- Left Sidebar End -->
            <!-- Middle Start -->
            <div class="w-full md:w-2/4 px-2">
                <div class="bg-white mb-4">
                    <div class="rounded overflow-hidden py-2">
                        <div class="px-6 py-4">
                            <div class="font-bold text-xl mb-1">Can coffee make you a better developer?</div>
                            <p class="text-gray-700 text-base">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus quia, nulla! Maiores et perferendis eaque, exercitationem praesentium nihil.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="bg-white mb-4">
                    <div class="rounded overflow-hidden py-2">
                        <div class="px-6 py-4">
                            <div class="font-bold text-xl mb-1">Can coffee make you a better developer?</div>
                            <p class="text-gray-700 text-base">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus quia, nulla! Maiores et perferendis eaque, exercitationem praesentium nihil.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="bg-white mb-4">
                    <div class="rounded overflow-hidden py-2">
                        <div class="px-6 py-4">
                            <div class="font-bold text-xl mb-1">Can coffee make you a better developer?</div>
                            <p class="text-gray-700 text-base">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus quia, nulla! Maiores et perferendis eaque, exercitationem praesentium nihil.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="bg-white mb-4">
                    <div class="rounded overflow-hidden py-2">
                        <div class="px-6 py-4">
                            <div class="font-bold text-xl mb-1">Can coffee make you a better developer?</div>
                            <p class="text-gray-700 text-base">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus quia, nulla! Maiores et perferendis eaque, exercitationem praesentium nihil.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Middle End -->
            <!-- Right Sidebar Start -->
            <div class="w-full md:w-1/4 px-2 mb-3 md:mb-0">
                <div class="bg-white">
                    <div class="max-w-sm rounded overflow-hidden shadow pt-3">
                        <div class="px-6 py-4 text-center">
                            <div class="font-bold text-xl mb-1">Find Member</div>
                            <form class="px-8 pt-2 pb-8 mb-4">
                                <div class="mb-4">
                                    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="search" type="text" placeholder="Name / ID">
                                </div>
                                <button class="w-full bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="button">
                                    Search
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Right Sidebar End -->
        </div>
    </div>
</body>
</html>
