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


<header class="fixed top-0 z-50 flex bg-[#F0A02C] flex-row justify-start items-center w-full xl:px-10 px-5 py-1">
    <div class="flex flex-row items-center justify-start w-full ">
        <a href="{{route ('dashboard')}}" class="hover:cursor-pointer focus:outline-none">
            <img src="{{ asset(path: 'logo/logo1.png') }}" alt="furrhub-logo" class="h-[60px] w-[150px] md:h-[130px] md:w-[300px] hidden lg:block " />
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
        <div class="relative xl:p-12 p-2 flex flex-col items-center">
            <div class="text-center mb-6">
                @if (Route::has('login'))
                @auth
                <p class="xl:text-3xl text-lg font-normal">Hello, <span class="font-bold text-orange-500">{{ Auth::user()->first_name }}</span></p>
                <h1 class="items-center text-3xl text-orange-500">Welcome to FurrHUB Services!</h1>
                @endauth
                @endif
            </div>
            <section class="max-w-2xl mx-auto bg-white p-6 rounded-lg mt-6 text-center">
                <h2 class="text-5xl font-semibold text-blue-600 flex justify-center items-center mb-4 pb-8">My Pets <span class="ml-2 text-yellow-400"></span></h2>
                <div class="flex justify-center space-x-4">
                    <!-- Pet items dynamically added here -->
                    <button class="border-4 border-black rounded-3xl p-4 w-32 h-32 flex items-center justify-center bg-yellow-400 hover:bg-[#F0A02C]">
                        <svg class="w-10 h-10 text-black" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
                        </svg>
                    </button>
                </div>
            </section>

            <!-- My Appointments Section -->
            <div class="max-w-2xl mx-auto bg-white p-6 rounded-lg mt-6 text-center">
                <!-- Header -->
                <h2 class="text-4xl font-semibold text-blue-600 flex justify-center items-center mb-4">My Appointments</h2>

                <!-- Appointment Categories -->
                <div class="flex flex-wrap items-center justify-center bg-orange-100 p-3 rounded-full gap-2">
                    <!-- Always visible items -->
                    <span class="bg-green-500 text-white px-4 py-1 text-sm rounded-full">Grooming</span>
                    <span class="text-gray-700 px-3 py-1 text-sm">Wellness & Laboratory</span>

                    <!-- More Button for Mobile (hidden on larger screens) -->
                    <div class="relative md:hidden">
                        <button id="more-btn" class="border border-gray-500 px-4 py-1 rounded-full text-sm">More...</button>
                        <div id="dropdown-menu" class="absolute hidden bg-white shadow-lg rounded-lg mt-2 w-48 text-left">
                            <ul class="text-sm text-gray-800">
                                <li class="px-4 py-2 hover:bg-gray-100 cursor-pointer">Vaccination & Pharmacy</li>
                                <li class="px-4 py-2 hover:bg-gray-100 cursor-pointer">Microchipping</li>
                                <li class="px-4 py-2 hover:bg-gray-100 cursor-pointer">Pet Insurance</li>
                            </ul>
                        </div>
                    </div>

                    <!-- Extra items (Hidden on Mobile) -->
                    <div class="hidden md:flex gap-2">
                        <span class="text-gray-700 px-3 py-1 text-sm">Vaccination & Pharmacy</span>
                        <span class="text-gray-700 px-3 py-1 text-sm">Microchipping</span>
                        <span class="text-gray-700 px-3 py-1 text-sm">Pet Insurance</span>
                    </div>
                </div>

                <!-- No Appointments Text -->
                <p class="text-gray-700 text-lg mt-6 mb-20">No Appointments Found</p>
            </div>

            <!-- Why Choose Us Section -->
            <section class="bg-orange-500 py-16 px-8 text-white w-screen pb-20">
                <div class="max-w-7xl mx-auto flex flex-col lg:flex-row items-center lg:items-start">
                    <!-- Left Section: Title -->
                    <div class="lg:w-1/3 text-center lg:text-left mb-12 lg:mb-0">
                        <h2 class="text-6xl font-bold flex items-center gap-4 leading-tight">
                            <span class="relative">
                                <span class="absolute -top-3 -left-6 text-yellow-400 text-7xl"></span>
                                Why choose us?
                            </span> 
                        </h2>
                    </div>
                    <!-- Right Section: Features Grid -->
                    <div class="lg:w-2/3 grid grid-cols-1 sm:grid-cols-2 gap-8">
                        <div class="flex items-center gap-4">
                            <div class="w-10 h-10 bg-yellow-400 rounded-full flex items-center justify-center">
                                <img src="https://img.icons8.com/ios-filled/50/000000/checkmark.png" alt="Check" class="w-6 h-6">
                            </div>
                            <span class="text-lg font-semibold">Comfort and Safety</span>
                        </div>
                        <div class="flex items-center gap-4">
                            <div class="w-10 h-10 bg-yellow-400 rounded-full flex items-center justify-center">
                                <img src="https://img.icons8.com/ios-filled/50/000000/checkmark.png" alt="Check" class="w-6 h-6">
                            </div>
                            <span class="text-lg font-semibold">Expertise You Can Trust</span>
                        </div>
                        <div class="flex items-center gap-4">
                            <div class="w-10 h-10 bg-yellow-400 rounded-full flex items-center justify-center">
                                <img src="https://img.icons8.com/ios-filled/50/000000/checkmark.png" alt="Check" class="w-6 h-6">
                            </div>
                            <span class="text-lg font-semibold">Family-Oriented Care</span>
                        </div>
                        <div class="flex items-center gap-4">
                            <div class="w-10 h-10 bg-yellow-400 rounded-full flex items-center justify-center">
                                <img src="https://img.icons8.com/ios-filled/50/000000/checkmark.png" alt="Check" class="w-6 h-6">
                            </div>
                            <span class="text-lg font-semibold">Customer Satisfaction Guaranteed</span>
                        </div>
                    </div>
                </div>
            </section>

            <section class="text-center py-10 pt-20">
                <h2 class="text-4xl font-bold text-blue-600 flex justify-center items-center">
                    Our Services
                    <span class="ml-2 text-yellow-400"></span>
                </h2>
                <p class="text-black max-w-xl mx-auto mt-2">
                    A happy pet is always well-groomed and healthy! Your fur babies deserve the best treatment, and our mission is to ensure they get it here at Pet Express.
                </p>

                <!-- Service Icons -->
                <div class="grid grid-cols-2 md:grid-cols-3 gap-6 justify-center items-center mt-8">
                    <a href="#" class="flex flex-col items-center space-y-2">
                        <div class="w-40 h-40 bg-green-500 rounded-full flex justify-center items-center border-4 border-gray-800 hover:scale-110 transition">
                            <img src="{{ asset(path: 'public/furrhub-appointment/grooming.png') }}" alt="Grooming" class="w-16">
                        </div>
                        <span class="text-sm font-semibold text-black">GROOMING</span>
                    </a>

                    <a href="#" class="flex flex-col items-center space-y-2">
                        <div class="w-40 h-40 bg-pink-500 rounded-full flex justify-center items-center border-4 border-gray-800 hover:scale-110 transition">
                            <img src="wellness-icon.svg" alt="Wellness & Lab" class="w-16">
                        </div>
                        <span class="text-sm font-semibold text-black">WELLNESS & LABORATORY</span>
                    </a>

                    <a href="#" class="flex flex-col items-center space-y-2">
                        <div class="w-40 h-40 bg-green-400 rounded-full flex justify-center items-center border-4 border-gray-800 hover:scale-110 transition">
                            <img src="vaccination-icon.svg" alt="Vaccination" class="w-16">
                        </div>
                        <span class="text-sm font-semibold text-black">VACCINATION & PHARMACY</span>
                    </a>

                    <a href="#" class="flex flex-col items-center space-y-2">
                        <div class="w-40 h-40 bg-purple-500 rounded-full flex justify-center items-center border-4 border-gray-800 hover:scale-110 transition">
                            <img src="microchip-icon.svg" alt="Microchipping" class="w-16">
                        </div>
                        <span class="text-sm font-semibold text-black">MICROCHIPPING</span>
                    </a>

                    <a href="#" class="flex flex-col items-center space-y-2">
                        <div class="w-40 h-40 bg-blue-500 rounded-full flex justify-center items-center border-4 border-gray-800 hover:scale-110 transition">
                            <img src="insurance-icon.svg" alt="Pet Insurance" class="w-16">
                        </div>
                        <span class="text-sm font-semibold text-black">PET INSURANCE</span>
                    </a>
                </div>
            </section>

        </div>
    </div>
    <script>
                document.getElementById("more-btn").addEventListener("click", function() {
                    document.getElementById("dropdown-menu").classList.toggle("hidden");
                });
            </script>
    <!-- Footer -->
</body>


<x-footer bgColor=" bg-gradient-to-r from-orange-600" />

</html>