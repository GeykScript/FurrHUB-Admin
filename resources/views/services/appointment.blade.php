<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name', 'FurrHUB') }}</title>
    <link rel="icon" href="{{ asset('logo/logo1.png') }}" type="image/png">
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link rel="icon" href="{{ asset('logo/logo1.png') }}" type="image/png">

    <link href="https://fonts.bunny.net/css?family=poppins:400,500,600&display=swap" rel="stylesheet" />
    @vite(['resources/css/app.css', 'resources/js/app.js', 'resources/css/welcome-page.css', 'resources/js/carousel.jsx'])

</head>


<!-- bg-[#60E1FF] blue -->
<!-- F0A02C  orange-->
<!-- 38B6FF -->
<!-- nav part -->


<header class="fixed top-0 flex bg-[#F0A02C] flex-row justify-start items-center w-full xl:px-10 px-5 py-1 ">
    <div class="flex flex-row items-center justify-start w-full ">
        <a href="{{route ('dashboard')}}" class="hover:cursor-pointer focus:outline-none">
            <img src="{{ asset('logo/logo1.png') }}" alt="furrhub-logo" class="h-[60px] w-[150px] md:h-[130px] md:w-[300px] hidden lg:block " />
        </a>
        <div class="flex flex-col  lg:flex-row flex-col-reverse items-center justify-between w-full">
            <div></div>

            <div class="flex flex-row lg:gap-20 lg:text-lg text-sm gap-10">
                <a href="{{route ('dashboard')}}" class="hover:underline hover:text-gray-700 text-gray-800 flex"><i data-lucide="house"></i><span class="md:block hidden"> Home</span></a>
                <a href="#" class="hover:underline hover:text-gray-700 text-gray-800 flex"><i data-lucide="paw-print"></i><span class="md:block hidden"> My Pets</span></a>
                <a href="#" class="hover:underline hover:text-gray-700 text-gray-800 flex"><i data-lucide="notebook-pen"></i><span class="md:block hidden">Appointments</span></a>
                <a href="#" class="hover:underline hover:text-gray-700 text-gray-800 flex"><i data-lucide="philippine-peso"></i><span class="md:block hidden">Price Lists</span></a>
            </div>


            <div class="flex flex-row gap-3 ml-auto xl:ml-0">
                <div class="flex flex-row text-black text-[12px] lg:text-[20px] font-semibold px-3 lg:px-0">
                    <nav class="flex flex-row gap-1 md:gap-1 align-center">
                        @if (Route::has('login'))

                        @auth
                        <x-dropdown align="right" width="48">
                            <x-slot name="trigger">
                                <button class="inline-flex items-center px-3 py-2 border border-transparent text-md leading-4 font-medium rounded-md  hover:text-gray-800 focus:outline-none transition ease-in-out duration-150">
                                    <div class="flex flex-row items-center justify-center">
                                        <p class="">{{ Auth::user()->first_name}} {{ Auth::user()->last_name}}</p>
                                        <img src="{{ asset ('logo/user.svg')}}" alt="user" class="h-[25px] w-[30px] lg:h-[40px] lg:w-[43px]" />

                                    </div>

                                    <div class="ms-1">
                                        <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                        </svg>
                                    </div>
                                </button>
                            </x-slot>

                            <x-slot name="content">
                                <x-dropdown-link :href="route('profile.edit')">
                                    {{ __('Profile') }}
                                </x-dropdown-link>

                                <!-- Authentication -->
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf

                                    <x-dropdown-link :href="route('logout')"
                                        onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                        {{ __('Log Out') }}
                                    </x-dropdown-link>
                                </form>
                            </x-slot>
                        </x-dropdown>
                        @else <a class="pt-1   hover:text-white" href="{{ route('login') }}">Log in </a>
                        <p class="pt-1">|</p>
                        @if (Route::has('register'))
                        <a class="pt-1 hover:text-white" href="{{ route('register') }}">Sign up</a>
                        @endif
                        @endauth

                        @endif
                    </nav>
                </div>
            </div>
        </div>
    </div>
</header>

<div class="lg:pt-[100px] pt-[80px] lg:mb-10"></div>

<body class="font-sans antialiased bg-white-400 dark:text-black/50 min-h-screen flex flex-col">
    <div class="bg-white flex-grow">
        <div class="rounded-2xl  md:h-full ">
            <img src="{{asset('images/welcome-booking.jpg')}}" alt="" class="w-full lg:h-full h-[160px]  object-cover" />
        </div>
        <div class="relative xl:p-12 p-2">
            <div class="flex flex-row xl:text-4xl text-lg font-bold xl:px-[10rem]">
                <i data-lucide="paw-print" class="xl:w-[5rem] xl:h-[5rem] w-[4rem] h-[4rem] mt-3 xl:mt-0 text-orange-500"> </i>
                <div class="items-center justify-center xl:p-4 p-3">

                    @if (Route::has('login'))
                    @auth
                    <p class="xl:text-3xl font-normal">Hello, <span class="font-bold">{{ Auth::user()->first_name}} </span> </p>
                    @endauth
                    @endif
                    <h1 class="items-center text-orange-500">Welcome to FurrHUB Services!</h1>
                </div>
            </div>

        </div>
    </div>

    <!-- Footer -->
</body>


<x-footer bgColor=" bg-gradient-to-r from-orange-600" />

</html>