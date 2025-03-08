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
    @vite('resources/js/app.jsx')

</head>


<!-- bg-[#60E1FF] blue -->
<!-- F0A02C  orange-->
<!-- 38B6FF -->
<!-- nav part -->
<header class="fixed top-0 left-0 w-full z-50 flex flex-col flex-col-reverse md:flex-row justify-between items-center lg:px-10 bg-[#F0A02C] shadow-lg">
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

<body class="font-sans antialiased bg-white-600 dark:text-black/50 min-h-screen flex flex-col">
    <div class="bg-white flex-grow">
        <div class="relative xl:p-12 p-2">
            <!-- title cart part -->
            <div class="flex flex-row xl:text-5xl text-xl font-bold xl:px-[10rem]">
                <i data-lucide="shopping-bag" class="xl:w-[5rem] xl:h-[5rem] w-[2rem] h-[2rem] mt-3 xl:mt-0 text-orange-500"> </i>
                <div class="items-center justify-center p-4">
                    <h1 class="items-center text-orange-500">Shopping Cart</h1>
                </div>
            </div>

            <div class="xl:px-[10rem] xl:py-10 lg:px-5 lg:py-5 ">
                <!-- table head part -->
                <div class="w-full text-xl text-gray-500 dark:text-gray-400">
                    <div class="grid grid-cols-1 xl:grid-cols-5 gap-4 text-xl font-bold text-gray-800 uppercase border border-sky-300 bg-sky-200 p-4 hidden xl:grid rounded-xl">
                        <div class="flex justify-between pr-[20rem] col-span-2">
                            <div class="flex justify-center xl:justify-start">
                                <input id="checkbox-all-search" type="checkbox" class="rounded mt-4 border-2 border-sky-400 text-sky-600 shadow-sm focus:ring-sky-500 w-[1.3rem] h-[1.3rem] hover:cursor-pointer">
                                <label for="checkbox-all-search" class="sr-only">checkbox</label>
                            </div>
                            <div class="px-6 py-3 text-center xl:text-left">Product</div>
                        </div>

                        <div class="px-6 py-3 text-center col-span-1">Total Price</div>
                        <div class="px-6 py-3 text-center col-span-1">Quantity</div>
                        <div class="px-6 py-3 text-center col-span-1">Actions</div>
                    </div>
                </div>

                <!-- product part -->
                <div class="relative h-full mt-2">
                    <div class="grid grid-rows-1 xl:grid-cols-5 xl:gap-5 gap-4 bg-white p-4 border-b border-gray-300 text-gray-900 text-xl items-center  bg-[#FAFAFA] mt-2">
                        <div class="flex flex-col xl:flex-row items-center xl:gap-20 gap-2  col-span-2">
                            <div class="flex flex-row items-center gap-10">
                                <div class="flex justify-center xl:justify-start">
                                    <input id="checkbox-search-1" type="checkbox" class="rounded border-2 border-sky-400 text-sky-600 shadow-sm focus:ring-sky-500 w-[1.3rem] h-[1.3rem] hover:cursor-pointer">
                                    <label for="checkbox-table-search-1" class="sr-only">checkbox</label>
                                </div>
                                <img src="{{asset('images/products/dog.jpg')}}" alt="product" class="w-40 h-40 rounded-2">
                            </div>
                            <p class="lg:w-80 text-wrap text-center text-xl font-bold xl:text-left">Pedigree 18 Pouch Variety Pack</p>
                        </div>
                        <div class="flex justify-center font-bold col-span-1 items-center">
                            <p class="text-orange-500 text-xl">₱350.00</p>
                        </div>
                        <div class="flex justify-center col-span-1">
                            <form>
                                <div id="Quantity-inputs" class="relative flex items-center max-w-[10rem] bg-white border border-gray-200 rounded-xl">
                                    <button type="button" id="decrement-button" data-input-counter-decrement="quantity-input"
                                        class="bg-white hover:bg-gray-100 border-gray-100 border rounded-s-xl p-3 h-11 focus:outline-none">
                                        <i data-lucide="minus" class="text-gray-500"></i>

                                    </button>
                                    <input type="number" id="quantity-input" data-input-counter aria-describedby="helper-text-explanation"
                                        class="bg-white border-x-0 border-gray-100 h-11 text-center text-gray-900 text-xl focus:outline-none  focus:ring-0 focus:border-transparent block w-10 xl:w-full py-2.5 appearance-none [&::-webkit-inner-spin-button]:appearance-none [&::-webkit-outer-spin-button]:appearance-none"
                                        value="1" min="1" required />
                                    <button type="button" id="increment-button" data-input-counter-increment="quantity-input"
                                        class="bg-white hover:bg-gray-100 border-gray-100 border rounded-e-xl p-3 h-11 focus:outline-none">
                                        <i data-lucide="plus" class="text-gray-500"></i>

                                    </button>
                                </div>
                            </form>
                        </div>
                        <div class="flex justify-start md:justify-center col-span-1 ">
                            <a href="#" class="font-medium text-red-500 hover:text-red-400 flex gap-1"> <i data-lucide="trash-2"></i><span class="text-xs lg:text-lg p-1 md:p-0">Remove</span></a>
                        </div>
                    </div>
                    <div class="grid grid-rows-1 xl:grid-cols-5 xl:gap-5 gap-4 bg-white p-4 border-b border-gray-300 text-gray-900 text-xl items-center bg-[#FAFAFA] mt-2">
                        <div class="flex flex-col xl:flex-row items-center xl:gap-20 gap-2 col-span-2">
                            <div class="flex flex-row items-center gap-10">
                                <div class="flex justify-center xl:justify-start">
                                    <input id="checkbox-search-1" type="checkbox" class="rounded border-2 border-sky-400 text-sky-600 shadow-sm focus:ring-sky-500 w-[1.3rem] h-[1.3rem] hover:cursor-pointer">
                                    <label for="checkbox-table-search-1" class="sr-only">checkbox</label>
                                </div>
                                <img src="{{asset('images/products/cat-foods.webp')}}" alt="product" class="w-40 h-40 rounded-2">
                            </div>
                            <p class="lg:w-80  text-wrap text-center text-xl font-bold xl:text-left">Royal Canin Cat Food </p>
                        </div>
                        <div class="flex justify-center font-bold col-span-1 items-center">
                            <p class="text-orange-500 text-xl">₱350.00</p>
                        </div>
                        <div class="flex justify-center col-span-1">
                            <form>
                                <div id="Quantity-inputs" class="relative flex items-center max-w-[10rem] bg-white border border-gray-200 rounded-xl">
                                    <button type="button" id="decrement-button" data-input-counter-decrement="quantity-input"
                                        class="bg-white hover:bg-gray-100 border-gray-100 border rounded-s-xl p-3 h-11 focus:outline-none">
                                        <i data-lucide="minus" class="text-gray-500"></i>

                                    </button>
                                    <input type="number" id="quantity-input" data-input-counter aria-describedby="helper-text-explanation"
                                        class="bg-white border-x-0 border-gray-100 h-11 text-center text-gray-900 text-xl focus:outline-none  focus:ring-0 focus:border-transparent block w-10 xl:w-full py-2.5 appearance-none [&::-webkit-inner-spin-button]:appearance-none [&::-webkit-outer-spin-button]:appearance-none"
                                        value="1" min="1" required />
                                    <button type="button" id="increment-button" data-input-counter-increment="quantity-input"
                                        class="bg-white hover:bg-gray-100 border-gray-100 border rounded-e-xl p-3 h-11 focus:outline-none">
                                        <i data-lucide="plus" class="text-gray-500"></i>

                                    </button>
                                </div>
                            </form>
                        </div>
                        <div class="flex justify-start md:justify-center col-span-1 ">
                            <a href="#" class="font-medium text-red-500 hover:text-red-400 flex gap-1"> <i data-lucide="trash-2"></i><span class="text-xs lg:text-lg p-1 md:p-0">Remove</span></a>
                        </div>
                    </div>
                    <div class="grid grid-rows-1 xl:grid-cols-5 xl:gap-5 gap-4 bg-white p-4 border-b border-gray-300 text-gray-900 text-xl items-center bg-[#FAFAFA] mt-2">
                        <div class="flex flex-col xl:flex-row items-center xl:gap-20 gap-2 col-span-2">
                            <div class="flex flex-row items-center gap-10">
                                <div class="flex justify-center xl:justify-start">
                                    <input id="checkbox-search-1" type="checkbox" class="rounded border-2 border-sky-400 text-sky-600 shadow-sm focus:ring-sky-500 w-[1.3rem] h-[1.3rem] hover:cursor-pointer">
                                    <label for="checkbox-table-search-1" class="sr-only">checkbox</label>
                                </div>
                                <img src="{{asset('images/products/dog.jpg')}}" alt="product" class="w-40 h-40 rounded-2">
                            </div>
                            <p class="lg:w-80  text-wrap text-center text-xl font-bold xl:text-left">Pedigree 18 Pouch Variety Pack</p>
                        </div>
                        <div class="flex justify-center font-bold col-span-1 items-center">
                            <p class="text-orange-500 text-xl">₱350.00</p>
                        </div>
                        <div class="flex justify-center col-span-1">
                            <form>
                                <div id="Quantity-inputs" class="relative flex items-center max-w-[10rem] bg-white border border-gray-200 rounded-xl">
                                    <button type="button" id="decrement-button" data-input-counter-decrement="quantity-input"
                                        class="bg-white hover:bg-gray-100 border-gray-100 border rounded-s-xl p-3 h-11 focus:outline-none">
                                        <i data-lucide="minus" class="text-gray-500"></i>
                                    </button>
                                    <input type="number" id="quantity-input" data-input-counter aria-describedby="helper-text-explanation"
                                        class="bg-white border-x-0 border-gray-100 h-11 text-center text-gray-900 text-xl focus:outline-none  focus:ring-0 focus:border-transparent block w-10 xl:w-full py-2.5 appearance-none [&::-webkit-inner-spin-button]:appearance-none [&::-webkit-outer-spin-button]:appearance-none"
                                        value="1" min="1" required />
                                    <button type="button" id="increment-button" data-input-counter-increment="quantity-input"
                                        class="bg-white hover:bg-gray-100 border-gray-100 border rounded-e-xl p-3 h-11 focus:outline-none">
                                        <i data-lucide="plus" class="text-gray-500"></i>
                                    </button>
                                </div>
                            </form>
                        </div>
                        <div class="flex justify-start md:justify-center col-span-1 ">
                            <a href="#" class="font-medium text-red-500 hover:text-red-400 flex gap-1"> <i data-lucide="trash-2"></i><span class="text-xs lg:text-lg p-1 md:p-0">Remove</span></a>
                        </div>
                    </div>
                    <div class="grid grid-rows-1 xl:grid-cols-5 xl:gap-5 gap-4 bg-white p-4 border-b border-gray-300 text-gray-900 text-xl items-center bg-[#FAFAFA] mt-2">
                        <div class="flex flex-col xl:flex-row items-center xl:gap-20 gap-2 col-span-2">
                            <div class="flex flex-row items-center gap-10">
                                <div class="flex justify-center xl:justify-start">
                                    <input id="checkbox-search-1" type="checkbox" class="rounded border-2 border-sky-400 text-sky-600 shadow-sm focus:ring-sky-500 w-[1.3rem] h-[1.3rem] hover:cursor-pointer">
                                    <label for="checkbox-table-search-1" class="sr-only">checkbox</label>
                                </div>
                                <img src="{{asset('images/products/dog.jpg')}}" alt="product" class="w-40 h-40 rounded-2">
                            </div>
                            <p class="lg:w-80  text-wrap text-center text-xl font-bold xl:text-left">Pedigree 18 Pouch Variety Pack</p>
                        </div>
                        <div class="flex justify-center font-bold col-span-1 items-center">
                            <p class="text-orange-500 text-xl">₱350.00</p>
                        </div>
                        <div class="flex justify-center col-span-1">
                            <form>
                                <div id="Quantity-inputs" class="relative flex items-center max-w-[10rem] bg-white border border-gray-200 rounded-xl">
                                    <button type="button" id="decrement-button" data-input-counter-decrement="quantity-input"
                                        class="bg-white hover:bg-gray-100 border-gray-100 border rounded-s-xl p-3 h-11 focus:outline-none">
                                        <i data-lucide="minus" class="text-gray-500"></i>
                                    </button>
                                    <input type="number" id="quantity-input" data-input-counter aria-describedby="helper-text-explanation"
                                        class="bg-white border-x-0 border-gray-100 h-11 text-center text-gray-900 text-xl focus:outline-none  focus:ring-0 focus:border-transparent block w-10 xl:w-full py-2.5 appearance-none [&::-webkit-inner-spin-button]:appearance-none [&::-webkit-outer-spin-button]:appearance-none"
                                        value="1" min="1" required />
                                    <button type="button" id="increment-button" data-input-counter-increment="quantity-input"
                                        class="bg-white hover:bg-gray-100 border-gray-100 border rounded-e-xl p-3 h-11 focus:outline-none">
                                        <i data-lucide="plus" class="text-gray-500"></i>
                                    </button>
                                </div>
                            </form>
                        </div>
                        <div class="flex justify-start md:justify-center col-span-1 ">
                            <a href="#" class="font-medium text-red-500 hover:text-red-400 flex gap-1"> <i data-lucide="trash-2"></i><span class="text-xs lg:text-lg p-1 md:p-0">Remove</span></a>
                        </div>
                    </div>
                    <div class="grid grid-rows-1 xl:grid-cols-5 xl:gap-5 gap-4 bg-white p-4 border-b border-gray-300 text-gray-900 text-xl items-center bg-[#FAFAFA] mt-2">
                        <div class="flex flex-col xl:flex-row items-center xl:gap-20 gap-2 col-span-2">
                            <div class="flex flex-row items-center gap-10">
                                <div class="flex justify-center xl:justify-start">
                                    <input id="checkbox-search-1" type="checkbox" class="rounded border-2 border-sky-400 text-sky-600 shadow-sm focus:ring-sky-500 w-[1.3rem] h-[1.3rem] hover:cursor-pointer">
                                    <label for="checkbox-table-search-1" class="sr-only">checkbox</label>
                                </div>
                                <img src="{{asset('images/products/dog.jpg')}}" alt="product" class="w-40 h-40 rounded-2">
                            </div>
                            <p class="lg:w-80  text-wrap text-center text-xl font-bold xl:text-left">Pedigree 18 Pouch Variety Pack</p>
                        </div>
                        <div class="flex justify-center font-bold col-span-1 items-center">
                            <p class="text-orange-500 text-xl">₱350.00</p>
                        </div>
                        <div class="flex justify-center col-span-1">
                            <form>
                                <div id="Quantity-inputs" class="relative flex items-center max-w-[10rem] bg-white border border-gray-200 rounded-xl">
                                    <button type="button" id="decrement-button" data-input-counter-decrement="quantity-input"
                                        class="bg-white hover:bg-gray-100 border-gray-100 border rounded-s-xl p-3 h-11 focus:outline-none">
                                        <i data-lucide="minus" class="text-gray-500"></i>
                                    </button>
                                    <input type="number" id="quantity-input" data-input-counter aria-describedby="helper-text-explanation"
                                        class="bg-white border-x-0 border-gray-100 h-11 text-center text-gray-900 text-xl focus:outline-none  focus:ring-0 focus:border-transparent block w-10 xl:w-full py-2.5 appearance-none [&::-webkit-inner-spin-button]:appearance-none [&::-webkit-outer-spin-button]:appearance-none"
                                        value="1" min="1" required />
                                    <button type="button" id="increment-button" data-input-counter-increment="quantity-input"
                                        class="bg-white hover:bg-gray-100 border-gray-100 border rounded-e-xl p-3 h-11 focus:outline-none">
                                        <i data-lucide="plus" class="text-gray-500"></i>
                                    </button>
                                </div>
                            </form>
                        </div>
                        <div class="flex justify-start md:justify-center col-span-1 ">
                            <a href="#" class="font-medium text-red-500 hover:text-red-400 flex gap-1"> <i data-lucide="trash-2"></i><span class="text-xs lg:text-lg p-1 md:p-0">Remove</span></a>
                        </div>
                    </div>

                    <!-- fixed bottom part -->
                    <div class="sticky bottom-0 p-4 border-t-0 border-gray-300 shadow-[0_-2px_10px_rgba(0,0,0,0.2)] mt-5 bg-orange-200 rounded-lg xl:h-24">
                        <form action="" method="POST">
                            @csrf
                            <div class="grid grid-cols-1 xl:grid-cols-5 gap-4 xl:mt-3">
                                <div class="col-span-2 flex flex-row justify-between lg:pr-[10rem] ">
                                    <div class="flex flex-row items-center gap-2">
                                        <input id="checkbox-all-search" type="checkbox" class="rounded border-2 border-orange-400 text-orange-600 shadow-sm focus:ring-orange-500 w-[1.3rem] h-[1.3rem] hover:cursor-pointer">
                                        <label for="checkbox-all-search" class="sr-only">checkbox</label>
                                        <p class="xl:text-xl font-bold text-gray-800">Select All</p>
                                    </div>
                                    <div class="flex justify-start ">
                                        <button type="submit" class="font-medium text-red-500 hover:text-red-400 flex gap-1 items-center">
                                            <i data-lucide="trash-2"></i>
                                            <span class="text-xs lg:text-lg p-1 md:p-0 font-semibold hidden md:block">Remove</span>
                                        </button>
                                    </div>
                                </div>
                                <div class="flex flex-row items-center gap-2 col-span-1 xl:col-span-1">
                                    <p class="xl:text-xl  text-sm text-gray-800">Total</p>
                                    <p class="xl:text-xl  text-sm text-orange-500">(<span>3</span> items)</p>
                                </div>
                                <div class="flex flex-row items-center gap-2 col-span-1 xl:col-span-1 lg:justify-center">
                                    <p class="xl:text-3xl text-lg  font-bold text-orange-500">₱</p>
                                    <p class="xl:text-2xl text-lg font-bold text-orange-500">1050.00</p>
                                </div>

                                <div class="flex flex-row justify-center items-center  col-span-2 xl:col-span-1">
                                    <button type="submit" class="bg-orange-500 hover:bg-orange-400 text-white font-bold py-2 px-4 rounded-xl w-full xl:w-[15rem] xl:h-12">Checkout</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>


            </div>

        </div>
    </div>
</body>

<!-- Footer -->
<x-footer bgColor=" bg-gradient-to-r from-orange-600" />

</html>