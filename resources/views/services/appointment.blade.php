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


<header class="fixed top-0 z-50 flex bg-[#F0A02C] flex-row justify-start items-center w-full xl:px-10 px-5 py-1  shadow-lg  shadow-[0_8px_10px_rgba(0,0,0,0.2)]">
    <div class="flex flex-row items-center justify-start w-full ">
        <a href="{{route ('dashboard')}}" class="hover:cursor-pointer focus:outline-none">
            <img src="{{ asset('logo/furrhub.png') }}" alt="furrhub-logo" class="h-[60px] w-full md:h-[130px] md:w-[250px] hidden xl:block " />
        </a>
        <div class="flex flex-col  lg:flex-row flex-col-reverse items-center justify-between w-full">
            <div></div>

            <div class="flex flex-row lg:gap-20 lg:text-lg text-sm gap-10">
                <a href="{{route ('dashboard')}}" class="hover:text-white text-gray-800 flex"><i data-lucide="house"></i><span class="md:block hidden"> Home</span></a>
                <a href="#" class="hover:text-white text-gray-800 flex"><i data-lucide="paw-print"></i><span class="md:block hidden"> My Pets</span></a>
                <a href="#" class="hover:text-white text-gray-800 flex"><i data-lucide="notebook-pen"></i><span class="md:block hidden">Appointments</span></a>
                <a href="#" class="hover:text-white text-gray-800 flex"><i data-lucide="philippine-peso"></i><span class="md:block hidden">Price Lists</span></a>
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

<div class="lg:pt-[80px] pt-[70px] lg:mb-10"></div>

<body class="font-sans antialiased bg-white-400 dark:text-black/50 min-h-screen flex flex-col">
    <div class="bg-white flex-grow">
        <div class="rounded-2xl  md:h-full ">
            <img src="{{asset('images/welcome-booking.jpg')}}" alt="" class="w-full lg:h-full h-[160px]  object-cover" />
        </div>

        <!-- welcome to furrhub services -->
        <div class="relative xl:p-6 p-2 items-start mt-2">
            <div class="flex flex-row xl:text-5xl text-lg font-bold xl:px-[10rem] gap-2">
                <i data-lucide="paw-print" class="xl:w-[5rem] xl:h-[5rem] w-[4rem] h-[4rem] mt-3 xl:mt-0 text-orange-500"> </i>
                <div class="items-center justify-center xl:p-1 p-3">

                    @if (Route::has('login'))
                    @auth
                    <p class="xl:text-4xl font-normal">Hello, <span class="font-bold">{{ Auth::user()->first_name}} </span> </p>
                    @endauth
                    @endif
                    <h1 class="items-center text-orange-500">Welcome to FurrHUB Services!</h1>
                </div>
            </div>
        </div>

        <div class="relative xl:p-12 p-2 flex flex-col items-center">
            <div class="flex justify-center mt-1">
                <div class="w-full max-w-5xl">
                    <div class="grid grid-cols-1 gap-4 text-center">
                        <div class="flex items-center justify-center">
                            <i data-lucide="bone" class="w-[50px] h-[50px] text-sky-600"></i>
                            <h1 class="xl:text-4xl  text-3xl font-bold text-sky-600 ">My Pets</h1>
                        </div>
                        <div class="flex items-center text-center">
                            <h1 class="xl:text-lg">Your pets have no appointment today.</h1>
                        </div>
                    </div>
                    <!---pet images-->
                    <div class="grid grid-cols-2 gap-2  md:grid-cols-3 lg:grid-cols-3 lg:gap-6 mt-6 justify-center">
                        <div class="flex flex-col justify-center items-center text-center p-4 hover:cursor-pointer transition-transform duration-300 ease-in-out transform hover:scale-105 hover:opacity-90">
                            <img src="{{ asset('images/services/max.jpg') }}" alt="Max" class="w-32 h-32 object-cover rounded-lg">
                            <h1 class="mt-2 font-semibold">Max</h1>
                        </div>
                        <div class="flex flex-col justify-center items-center text-center p-4 hover:cursor-pointer transition-transform duration-300 ease-in-out transform hover:scale-105 hover:opacity-90">
                            <img src="{{ asset('images/services/jazz.jpg') }}" alt="Max" class="w-32 h-32 object-cover rounded-lg">
                            <h1 class="mt-2 font-semibold ">Jazz</h1>
                        </div>
                        <!--add new pet-->
                        <div class="flex flex-col justify-center items-center text-center p-4  hover:cursor-pointer transition-transform duration-300 ease-in-out transform hover:scale-105 ">
                            <div class="w-[110px] h-[110px] flex justify-center items-center border-2 border-gray-500 bg-sky-400 hover:bg-sky-300 rounded-xl transition duration-200">
                                <i data-lucide="plus" class="w-[30px] h-[30px]"></i>
                            </div>
                            <h1 class="mt-2 font-semibold">Add Pet</h1>
                        </div>
                    </div>
                </div>
            </div>

            <!-- My Appointments Section -->
            <div class="bg-white  rounded-lg mt-5 text-center w-full md:max-w-6xl md:mx-auto">
                <!-- Title -->
                <div class="flex items-center gap-2 justify-center">
                    <i data-lucide="notebook-pen" class="w-[40px] h-[40px] sm:w-[50px] sm:h-[50px] text-sky-600"></i>
                    <h2 class="text-2xl sm:text-4xl font-semibold text-sky-600">My Appointments</h2>
                </div>

                <!-- Appointment Categories -->
                <div class="grid grid-cols-1 sm:grid-cols-4 gap-2 sm:gap-4 bg-orange-200 p-4 rounded-xl lg:mt-10 mt-3">
                    <button class="text-sm sm:text-lg font-semibold text-gray-700 px-4 py-2 rounded-lg hover:bg-orange-400">
                        Grooming
                    </button>
                    <button class="text-sm sm:text-lg font-semibold text-gray-700 px-4 py-2 rounded-lg hover:bg-yellow-400">
                        Wellness & Laboratory
                    </button>
                    <button class="text-sm sm:text-lg font-semibold text-gray-700 px-4 py-2 rounded-lg hover:bg-green-400">
                        Veterinary
                    </button>
                    <button class="text-sm sm:text-lg font-semibold text-gray-700 px-4 py-2 rounded-lg hover:bg-sky-400">
                        Pet Insurance
                    </button>
                </div>

                <!-- No Appointments Text -->
                <p class="text-gray-700 text-sm sm:text-lg mt-8 mb-12">No Appointments Found.</p>
            </div>
        </div>
    </div>
    <!-- Why Choose Us Section -->
    <section class="bg-orange-500 py-16 px-6 text-white w-full pb-20">
        <div class="max-w-7xl mx-auto flex flex-col lg:flex-row items-center lg:items-start">
            <!-- Left Section: Title -->
            <div class="lg:w-1/3 text-center lg:text-left mb-12 lg:mb-0">
                <h2 class="text-4xl sm:text-6xl font-bold flex items-center gap-4 leading-tight">
                    <span class="relative">
                        <span class="absolute -top-3 -left-6 text-yellow-400 text-7xl"></span>
                        Why choose us?
                    </span>
                </h2>
            </div>
            <!-- Right Section: Features Grid -->
            <div class="lg:w-2/3 grid grid-cols-1 sm:grid-cols-2 gap-6">
                <div class="flex items-center gap-4">
                    <div class="w-10 sm:w-12 h-10 sm:h-12 bg-yellow-400 rounded-full flex items-center justify-center">
                        <i data-lucide="circle-check-big" class="text-gray-700 w-8 sm:w-10 h-8 sm:h-10"></i>
                    </div>
                    <span class="text-base sm:text-lg font-semibold leading-relaxed">Safety & Comfort First, Always</span>
                </div>
                <div class="flex items-center gap-4">
                    <div class="w-10 sm:w-12 h-10 sm:h-12 bg-yellow-400 rounded-full flex items-center justify-center">
                        <i data-lucide="circle-check-big" class="text-gray-700 w-8 sm:w-10 h-8 sm:h-10"></i>
                    </div>
                    <span class="text-base sm:text-lg font-semibold leading-relaxed">Expertise You Can Trust</span>
                </div>
                <div class="flex items-center gap-4">
                    <div class="w-10 sm:w-12 h-10 sm:h-12 bg-yellow-400 rounded-full flex items-center justify-center">
                        <i data-lucide="circle-check-big" class="text-gray-700 w-8 sm:w-10 h-8 sm:h-10"></i>
                    </div>
                    <span class="text-base sm:text-lg font-semibold leading-relaxed">A Warm, Family-Friendly Atmosphere</span>
                </div>
                <div class="flex items-center gap-4">
                    <div class="w-10 sm:w-12 h-10 sm:h-12 bg-yellow-400 rounded-full flex items-center justify-center">
                        <i data-lucide="circle-check-big" class="text-gray-700 w-8 sm:w-10 h-8 sm:h-10"></i>
                    </div>
                    <span class="text-base sm:text-lg font-semibold leading-relaxed">Your Satisfaction, Our Priority</span>
                </div>
            </div>
        </div>
    </section>

    <!-- discover services -->
    <div class="lg:px-12">
        <div class="flex flex-col items-center justify-center mt-10">
            <div class="flex flex-col items-center justify-center">
                <h1 class="text-4xl font-bold text-sky-600 text-center">Discover Our Services</h1>
                <p class="text-lg text-gray-700 mt-2 text-center">We offer a wide range of services and learnings for your pets.</p>
            </div>
            <div class="grid grid-cols-6 lg:p-4 p-2 lg:gap-4 gap-2 bg-gray-100 mt-10 rounded-lg">
                <div class="col-span-6 lg:col-span-3 flex flex-col items-center">
                    <a href="#" class="focus:outline-none">
                        <img src="{{asset('images/services/learn-now.jpg')}}" alt="" class="rounded-md lg:w-full transition-transform duration-300 hover:scale-105">
                    </a>
                </div>
                <div class="lg:col-span-1 col-span-2 flex flex-col items-center">
                    <a href="#" class="focus:outline-none">
                        <img src="{{asset('images/services/1.jpg')}}" alt="Pet Insurance" class="lg:w-full lg:h-full rounded-md transition-transform duration-300 hover:scale-105 object-cover">
                    </a>
                    <p class="text-center text-gray-700 font-semibold mt-2">Veterinary</p>
                </div>
                <div class="lg:col-span-1 col-span-2 flex flex-col items-center">
                    <a href="#" class="focus:outline-none">
                        <img src="{{asset('images/services/2.jpg')}}" alt="Veterinary" class="lg:w-full lg:h-full rounded-md transition-transform duration-300 hover:scale-105 object-cover">
                    </a>
                    <p class="text-center text-gray-700 font-semibold mt-2">Grooming</p>
                </div>
                <div class="lg:col-span-1 col-span-2 flex flex-col items-center">
                    <a href="#" class="focus:outline-none">
                        <img src="{{asset('images/services/3.jpg')}}" alt="Grooming" class="lg:w-full lg:h-full rounded-md transition-transform duration-300 hover:scale-105 object-cover">
                    </a>
                    <p class="text-center text-gray-700 font-semibold mt-2">Wellness & Laboratory</p>
                </div>

            </div>
        </div>
    </div>



</body>

<x-footer bgColor=" bg-gradient-to-r from-orange-600" />

</html>