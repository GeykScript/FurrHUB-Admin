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
                @else
                <img src="{{ asset ('logo/user.svg')}}" alt="user" class="h-[25px] w-[30px] lg:h-[40px] lg:w-[43px]" />
                <a class="pt-1   hover:text-white" href="{{ route('login') }}">Log in </a>
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


<div class="lg:pt-[150px] pt-[100px]"></div>

<!-- product menu -->

<body class="font-sans antialiased bg-white-400 dark:text-black/50">
    <div class="bg-white">
        <div class="flex flex-row justify-start items-center lg:px-10 px-2 gap-5 text-gray-600 text-semibold lg:text-lg mt-3 mb-3">
            @if (Route::has('login'))
            @auth
            <a href="{{route('dashboard')}}" class="hover:text-orange-500">Home</a>
            <h1>
                < </h1>
                    <h1 class="text-orange-500 font-semibold">Product name</h1>
                    @else
                    <a href=" {{route('welcome')}}" class="hover:text-orange-500">Home</a>
                    <h1>
                        < </h1>
                            <h1 class="text-orange-500 font-semibold">Product name</h1>
                            @endauth
                            @endif
        </div>

        <!-- product details -->
        <div class="grid grid-cols-1 lg:grid-cols-5    gap-5 lg:px-10 p-4  2xl:px-20 ">
            <div class="lg:col-span-2 col-span-5 p-4 rounded-lg shadow-xl border-2 border-gray-100">
                <div class="swiper progress-slide-carousel swiper-container relative w-full h-full">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide w-full h-full">
                            <img src="{{ asset('images/products/dog.jpg') }}" alt="carousel-pet-services"
                                class="w-full h-64 md:h-96 lg:h-full rounded-md object-cover md:object-contain" />
                        </div>
                        <div class="swiper-slide w-full h-full">
                            <img src="{{ asset('images/products/cat-foods.webp') }}" alt="carousel-pet-services"
                                class="w-full h-64 md:h-96 lg:h-full rounded-md object-cover md:object-contain" />
                        </div>
                        <div class="swiper-slide w-full h-full">
                            <img src="{{ asset('images/products/dog.jpg') }}" alt="carousel-pet-services"
                                class="w-full h-64 md:h-96 lg:h-full rounded-md object-cover md:object-contain" />
                        </div>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>

            <!-- product details -->
            <div class="lg:col-span-3  col-span-5  rounded-lg shadow-xl border-2 border-gray-100 lg:p-20 p-4">
                <div class="">
                    <h1 class="lg:text-4xl text-xl font-bold text-gray-700 text-wrap">Pedigree 18 Pouch Variety Pack</h1>
                    <div class="flex flex-row gap-5 lg:mt-5  mt-2 lg:text-lg  text-sm text-gray-700">
                        <h1>FurrHUB</h1>
                        <h1>|</h1>
                        <h1>PSN: <span>xxxxxxxxxxxx</span></h1>
                    </div>
                    <hr class="lg:border-2 border-1 border-gray-400 mt-2">
                    <div class="flex justify-end gap-1 mt-3 font-semibold lg:text-xl text-orange-400">
                        <h1>1020</h1>
                        <h1>Sold</h1>
                    </div>
                    <div class="lg:text-lg  text-gray-700 flex lg:gap-2 gap-1  mt-2">
                        <h1>Expiration Date:</h1>
                        <h1>MM/DD/YY</h1>
                    </div>
                    <div class="flex flex-row lg:gap-2 gap-1 mt-5 lg:text-4xl text-xl text-orange-500 font-semibold bg-orange-200 p-4  rounded-lg">
                        <h1 class="lg:text-5xl text-xl">₱</h1>
                        <h1 class="lg:mt-1">350</h1>
                    </div>
                    <div class="flex flex-row gap-5 mt-5 lg:text-lg text-gray-700">
                        <h1 class="font-semibold">Stock: </h1>
                        <li class="text-green-500 font-semibold">In stock</li>
                    </div>
                    <div class="flex flex-row gap-5 mt-5 lg:text-lg text-gray-700 items-center">
                        <h1 class="font-semibold">Quantity:</h1>
                        <div class="flex justify-start col-span-1">
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
                    </div>
                    <div class="flex justify-end px-4 font-semibold lg:text-lg text-sm text-sky-500 mt-3">
                        <h1 class="hover:text-sky-600 hover:cursor-pointer">Add to Wishlists?</h1>
                    </div>
                    <div class="flex flex-row items-center lg:gap-5 gap-2 mt-3 lg:text-lg text-gray-700 grid grid-cols-1 lg:grid-cols-6  px-2">
                        <div class="col-span-3 w-full border-2 border-orange-500 hover:bg-orange-500 hover:text-white text-orange-500 font-bold py-2 px-4 rounded-lg flex justify-center items-center gap-2">
                            <i data-lucide="shopping-basket"></i>
                            <button class=""> Add to Cart </button>
                        </div>
                        <div class="col-span-3">
                            <button class="w-full bg-orange-500 hover:bg-orange-600 text-white font-bold py-2 px-4 rounded-lg ">
                                <a href=" #">Buy Now</a>
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- product details -->
            <div class="col-span-5 mt-2 ">
                <h1 class="lg:text-3xl text-xl font-bold text-gray-700 text-wrap">Product Details</h1>
                <h1 class="text-wrap mt-1 px-2">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ipsa eligendi odit tempora suscipit deleniti quod quaerat, labore quidem sed libero! Porro autem libero quidem nam. Architecto ipsa est voluptate aut.</h1>
                <h1 class="text-wrap mt-1 px-2">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ipsa eligendi odit tempora suscipit deleniti quod quaerat, labore quidem sed libero! Porro autem libero quidem nam. Architecto ipsa est voluptate aut.</h1>
            </div>

            <!-- product reviews -->
            <h1 class="lg:text-2xl text-md font-bold text-gray-700 text-wrap">Customer Reviews</h1>
            <div class="col-span-5  rounded-lg shadow-xl border-2 border-gray-100">
                <div class="flex flex-col gap-1 p-4">
                    <div class="flex flex-row gap-2">
                        <i data-lucide="circle-user"></i>
                        <h1 class="lg:text-sm text-sm font-bold text-gray-700 text-wrap">John Doe</h1>
                    </div>
                    <p class="px-7">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit animi quo optio saepe deleniti laudantium distinctio, quidem labore veniam iure magni! Laudantium impedit modi fugiat. Harum sunt aliquam pariatur sapiente!</p>
                    <div class="flex flex-row gap-2 mt-2">
                        <div class="grid grid-cols-3 lg:grid-cols-12 gap-2">
                            <img src="{{ asset('images/products/dog.jpg') }}" alt="reviews-photos" class="lg:h-[10rem] lg:w-[10rem]  w-[5rem] h-[5rem] object-contain" />
                            <img src="{{ asset('images/products/dog.jpg') }}" alt="reviews-photos" class="lg:h-[10rem] lg:w-[10rem]  w-[5rem] h-[5rem] object-contain" />
                            <img src="{{ asset('images/products/dog.jpg') }}" alt="reviews-photos" class="lg:h-[10rem] lg:w-[10rem]  w-[5rem] h-[5rem] object-contain" />
                            <img src="{{ asset('images/products/dog.jpg') }}" alt="reviews-photos" class="lg:h-[10rem] lg:w-[10rem]  w-[5rem] h-[5rem] object-contain" />
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-span-5  rounded-lg shadow-xl border-2 border-gray-100">
                <div class="flex flex-col gap-1 p-4">
                    <div class="flex flex-row gap-2">
                        <i data-lucide="circle-user"></i>
                        <h1 class="lg:text-sm text-sm font-bold text-gray-700 text-wrap">John Doe</h1>
                    </div>
                    <p class="px-7">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit animi quo optio saepe deleniti laudantium distinctio, quidem labore veniam iure magni! Laudantium impedit modi fugiat. Harum sunt aliquam pariatur sapiente!</p>
                
                </div>
            </div>
        </div>

        <!-- related products -->
        <div class="md:px-[3rem]  px-2">
            <div class="flex flex-row items-center justify-between md:px-10 px-2 mt-5 h-20  rounded-lg bg-gradient-to-r from-orange-600  to-orange-400    ">
                <div class="flex flex-row items-center md:gap-5 gap-1 ">
                    <div> <i data-lucide="paw-print" class="md:w-10 md:h-10 w-6 h-6 text-white mx-auto"></i></div>
                    <h1 class="md:text-4xl text-md font-bold text-white ">You also may like</h1>
                </div>
            </div>
        </div>
        <div class="md:px-[3rem] mt-3 px-[1rem]">
            <div class="grid grid-cols-2 lg:grid-cols-6 gap-4  ">
                <div class="group relative  xl:min-w-[230px] min-w-[150px]    p-4 bg-white rounded-lg shadow-lg border-2 border-gray-100  hover:cursor-pointer transition-transform duration-300 ease-in-out transform hover:scale-105 hover:opacity-90">
                    <a href="{{route('product.view')}}" class="foucs:outline-none">
                        <img src="{{ asset('images/products/dog.jpg') }}" alt="Best-Product" class="aspect-square w-full rounded-lg bg-gray-500 object-cover  lg:aspect-auto lg:h-74">
                        <div class="mt-2 flex justify-between flex flex-col gap-1">
                            <p class="text-sm font-normal text-gray-500 text-end">120 sold</p>
                            <h5 class="font-normal text-wrap text-orange-500 text-sm">FurrHUB</h5>
                            <h4 class="font-semibold text-wrap text-black text-md">Pedigree 18 Pouch Variety Pack</h4>
                            <div class="flex justify-between">
                                <h4 class="font-bold text-wrap text-orange-500 text-lg"><span class="text-xl">₱</span> 350.00</h4>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="group relative  xl:min-w-[230px] min-w-[150px]    p-4 bg-white rounded-lg shadow-lg border-2 border-gray-100  hover:cursor-pointer transition-transform duration-300 ease-in-out transform hover:scale-105 hover:opacity-90">
                    <a href="{{route('product.view')}}" class="foucs:outline-none">
                        <img src="{{ asset('images/products/cat-foods.webp') }}" alt="Best-Product" class="aspect-square w-full rounded-lg bg-gray-500 object-cover  lg:aspect-auto lg:h-74">
                        <div class="mt-2 flex justify-between flex flex-col gap-1">
                            <p class="text-sm font-normal text-gray-500 text-end">120 sold</p>
                            <h5 class="font-normal text-wrap text-orange-500 text-sm">FurrHUB</h5>
                            <h4 class="font-semibold text-wrap text-black text-md">Royal Canin Cat Food</h4>
                            <div class="flex justify-between">
                                <h4 class="font-bold text-wrap text-orange-500 text-lg"><span class="text-xl">₱</span> 350.00</h4>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="group relative  xl:min-w-[230px] min-w-[150px]    p-4 bg-white rounded-lg shadow-lg border-2 border-gray-100  hover:cursor-pointer transition-transform duration-300 ease-in-out transform hover:scale-105 hover:opacity-90">
                    <a href="{{route('product.view')}}" class="foucs:outline-none">
                        <img src="{{ asset('images/products/dog.jpg') }}" alt="Best-Product" class="aspect-square w-full rounded-lg bg-gray-500 object-cover  lg:aspect-auto lg:h-74">
                        <div class="mt-2 flex justify-between flex flex-col gap-1">
                            <p class="text-sm font-normal text-gray-500 text-end">120 sold</p>
                            <h5 class="font-normal text-wrap text-orange-500 text-sm">FurrHUB</h5>
                            <h4 class="font-semibold text-wrap text-black text-md">Pedigree 18 Pouch Variety Pack</h4>
                            <div class="flex justify-between">
                                <h4 class="font-bold text-wrap text-orange-500 text-lg"><span class="text-xl">₱</span> 350.00</h4>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="group relative  xl:min-w-[230px] min-w-[150px]    p-4 bg-white rounded-lg shadow-lg border-2 border-gray-100  hover:cursor-pointer transition-transform duration-300 ease-in-out transform hover:scale-105 hover:opacity-90">
                    <a href="{{route('product.view')}}" class="foucs:outline-none">
                        <img src="{{ asset('images/products/cat-foods.webp') }}" alt="Best-Product" class="aspect-square w-full rounded-lg bg-gray-500 object-cover  lg:aspect-auto lg:h-74">
                        <div class="mt-2 flex justify-between flex flex-col gap-1">
                            <p class="text-sm font-normal text-gray-500 text-end">120 sold</p>
                            <h5 class="font-normal text-wrap text-orange-500 text-sm">FurrHUB</h5>
                            <h4 class="font-semibold text-wrap text-black text-md">Royal Canin Cat Food</h4>
                            <div class="flex justify-between">
                                <h4 class="font-bold text-wrap text-orange-500 text-lg"><span class="text-xl">₱</span> 350.00</h4>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="group relative  xl:min-w-[230px] min-w-[150px]    p-4 bg-white rounded-lg shadow-lg border-2 border-gray-100  hover:cursor-pointer transition-transform duration-300 ease-in-out transform hover:scale-105 hover:opacity-90">
                    <a href="{{route('product.view')}}" class="foucs:outline-none">
                        <img src="{{ asset('images/products/dog.jpg') }}" alt="Best-Product" class="aspect-square w-full rounded-lg bg-gray-500 object-cover  lg:aspect-auto lg:h-74">
                        <div class="mt-2 flex justify-between flex flex-col gap-1">
                            <p class="text-sm font-normal text-gray-500 text-end">120 sold</p>
                            <h5 class="font-normal text-wrap text-orange-500 text-sm">FurrHUB</h5>
                            <h4 class="font-semibold text-wrap text-black text-md">Pedigree 18 Pouch Variety Pack</h4>
                            <div class="flex justify-between">
                                <h4 class="font-bold text-wrap text-orange-500 text-lg"><span class="text-xl">₱</span> 350.00</h4>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="group relative  xl:min-w-[230px] min-w-[150px]    p-4 bg-white rounded-lg shadow-lg border-2 border-gray-100  hover:cursor-pointer transition-transform duration-300 ease-in-out transform hover:scale-105 hover:opacity-90">
                    <a href="{{route('product.view')}}" class="foucs:outline-none">
                        <img src="{{ asset('images/products/cat-foods.webp') }}" alt="Best-Product" class="aspect-square w-full rounded-lg bg-gray-500 object-cover  lg:aspect-auto lg:h-74">
                        <div class="mt-2 flex justify-between flex flex-col gap-1">
                            <p class="text-sm font-normal text-gray-500 text-end">120 sold</p>
                            <h5 class="font-normal text-wrap text-orange-500 text-sm">FurrHUB</h5>
                            <h4 class="font-semibold text-wrap text-black text-md">Royal Canin Cat Food</h4>
                            <div class="flex justify-between">
                                <h4 class="font-bold text-wrap text-orange-500 text-lg"><span class="text-xl">₱</span> 350.00</h4>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>

        <!-- banner -->
        <x-authenticity-banner />

    </div>
    </div>

</body>
<!-- Footer -->
<x-footer bgColor=" bg-gradient-to-r from-orange-600" />

</html>