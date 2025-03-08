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

<header class="fixed top-0 left-0 w-full z-50 flex flex-col flex-col-reverse md:flex-row justify-between items-center lg:px-10 bg-[#F0A02C] shadow-lg  shadow-[0_8px_10px_rgba(0,0,0,0.2)] ">
    <div class="flex h-[90px] w-[220px] lg:h-[120px] lg-w-[240px] hidden md:block">
        <a href="{{route('dashboard')}}" class="border-none focus:outline-none focus:ring-0 focus:border-transparent">
            <img src="{{ asset('logo/furrhub.png') }}" alt="furrhub-logo" class="h-[100px]  lg:h-[120px] lg:w-[290px] object-cover" /></a>
    </div>

    <div class="flex flex-row lg:w-[60rem] w-auto p-2 justify-around lg:gap-10">
        <form class="flex items-center w-full 2xl:w-[58rem]  p-2 rounded-lg">
            <input type="search" placeholder="Search" aria-label="Search"
                class="w-full h-[40px] lg:h-[50px]   px-4 text-[13px] lg:text-[18px] rounded-l-lg outline-none border-none focus:outline-none focus:ring-0 focus:border-transparent" />
            <button type="submit"
                class="bg-[#35B5D3] h-[40px] lg:h-[50px] lg:w-[80px] w-[50px] flex items-center justify-center rounded-r-lg">
                <img src="{{ asset('logo/search-white.svg') }}" alt="search" class="h-[22px] w-[22px] lg:h-[30px] lg:w-[30px]" />
            </button>
        </form>

        <div class="flex flex-row text-white  font-semibold mt-4">
            <a href="{{route('shoppingCart')}}" class="flex flex-row gap-0 align-center">
                <img src="{{ asset ('logo/cart.svg')}}" alt="user" class="h-[27px] w-[30px] lg:h-[35px] lg:w-[43px]" />
                <div class="bg-[#F23D3D] h-[20px] w-[35px]  lg:h-[27px] lg:w-[45px] rounded-full flex justify-center items-center">
                    <p class="xl:text-[16px] text-[10px] ">0</p>
                </div>
            </a>
            <!-- <p class="pt-1 text-">Cart</p> -->
        </div>
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
</header>


<div class="pt-[100px]"></div>



<!-- catergory part -->

<body class="font-sans antialiased bg-white-400 dark:text-black/50">
    <div class="bg-white">
      

        <div class="md:px-[3rem]  px-2">
            <div class="flex flex-row items-center justify-between md:px-10 px-2 mt-5 h-20  rounded-lg bg-gradient-to-r from-orange-600  to-orange-400    ">
                <div class="flex flex-row items-center md:gap-5 gap-1 ">
                    <div> <i data-lucide="paw-print" class="md:w-10 md:h-10 w-6 h-6 text-white mx-auto"></i></div>
                    <h1 class="md:text-4xl text-md font-bold text-white ">View Products!</h1>

                </div>

            </div>
        </div>
       


      

    

    </div>

</body>
<!-- Footer -->
<x-footer bgColor=" bg-gradient-to-r from-orange-600" />

</html>