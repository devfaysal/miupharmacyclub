@extends('v2.layouts.app')
@section('content')
<!-- Body Start -->
    <div class="container">
        <div class="flex flex-wrap mt-3 -mx-2">
            <!-- Left Sidebar Start -->
            <div class="w-full md:w-1/4 px-2 mb-3 md:mb-0">
                <div class="bg-white">
                    <div class="max-w-sm rounded overflow-hidden shadow pt-3">
                        <img class="h-16 w-16 md:h-40 md:w-40 border-8 rounded-full mx-auto" src="https://tailwindcss.com/img/card-top.jpg" alt="Profile Image">
                        <div class="px-6 py-4 text-center">
                            <div class="font-bold text-xl mb-1">{{Auth::user()->name}}</div>
                            <p class="text-gray-700 text-sm">{{Auth::user()->designation}}, {{Auth::user()->current_organization}}</p>
                            <p class="text-gray-700 text-xs mt-2">Last Visit: {{date('d-M-Y')}}</p>
                            <a href="" class="w-40 mx-auto my-2 bg-white hover:bg-gray-100 text-gray-800 font-semibold block py-1 border border-gray-400 rounded shadow">View Profile</a>
                        </div>
                    </div>
                </div>
                @include('v2.layouts.credit')
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
                <div class="bg-white mb-4">
                    <div class="max-w-sm rounded overflow-hidden shadow pt-3">
                        <div class="px-6 py-4 text-center">
                            <div class="font-bold text-xl mb-1">Find Member</div>
                            <form class="px-8 pt-2 mb-4">
                                <div class="mb-4">
                                    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="search" type="text" placeholder="Name / ID">
                                </div>
                                <button class="w-full bg-white hover:bg-gray-100 text-gray-800 font-semibold py-2 px-4 border border-gray-400 rounded shadow" type="submit">
                                    Search
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="bg-white">
                    <div class="max-w-sm rounded overflow-hidden shadow pt-3">
                        <div class="px-6 py-4 text-center">
                            <div class="font-bold text-xl mb-1">Upcoming Events</div>
                            <div class="my-3">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Right Sidebar End -->
        </div>
    </div>
@endsection