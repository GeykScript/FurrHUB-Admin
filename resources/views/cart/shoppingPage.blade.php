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

<header class="flex bg-sky-400  flex-row justify-start items-center w-full xl:px-10 px-5 py-1 ">
    <div class="flex flex-row items-center justify-start w-full ">
        <a href="{{route ('dashboard')}}">
            <img src="{{ asset('logo/logo1.png') }}" alt="furrhub-logo" class="h-[60px] w-[150px] md:h-[130px] md:w-[300px] " />
        </a>
        <div class="flex flex-row items-center justify-between w-full">
            <div class="flex flex-row  items-center justify-evenly ml-1 md:ml-5 xl:text-lg ">

                <div class="xl:ml-6 ml-3 text-sm xl:text-lg "> </div>
            </div>
            <div>
                <a href="{{ route('dashboard') }}">
                    <i data-lucide="circle-chevron-left" class="w-6 h-6  md:w-10 md:h-10 text-gray-700"></i>
                </a>
            </div>
        </div>
    </div>
</header>

<body class="font-sans antialiased bg-white-400 dark:text-black/50 min-h-screen flex flex-col">
    <div class="bg-white flex-grow">
        <div class="relative xl:p-12 p-2">
            <div class="flex flex-row xl:text-5xl text-xl font-bold xl:px-[10rem]">
                <i data-lucide="shopping-bag" class="xl:w-[5rem] xl:h-[5rem] w-[2rem] h-[2rem] mt-3 xl:mt-0 text-orange-500"> </i>
                <div class="items-center justify-center p-4">
                    <h1 class="items-center text-orange-500">Shopping Cart</h1>
                </div>
            </div>

            <div class="xl:px-[10rem] xl:py-10 px-5 py-5">
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

                <div class="grid grid-rows-1 xl:grid-cols-5 xl:gap-5 gap-4 bg-white p-4 border-b border-gray-300 text-gray-900 text-xl items-center">
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
                <div class="grid grid-rows-1 xl:grid-cols-5 xl:gap-5 gap-4 bg-white p-4 border-b border-gray-300 text-gray-900 text-xl items-center">
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

                <div class="grid grid-rows-1 xl:grid-cols-5 xl:gap-5 gap-4 bg-white p-4 border-b border-gray-300 text-gray-900 text-xl items-center">
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
                            <div id="Quantity-inputs"  class="relative flex items-center max-w-[10rem] bg-white border border-gray-200 rounded-xl">
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


            </div>

        </div>
    </div>

    <!-- Footer -->
</body>

<!-- Footer -->
<x-footer bgColor=" bg-gradient-to-r from-orange-600" />

</html>