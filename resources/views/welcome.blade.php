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
  @vite(['resources/css/app.css', 'resources/js/app.js', 'resources/css/welcome-page.css', 'resources/js/carousel.jsx'],'resources/js/components/heart.jsx')

</head>


<!-- bg-[#60E1FF] blue -->
<!-- F0A02C  orange-->
<!-- 38B6FF -->
<!-- nav part -->

<header class="fixed top-0 left-0 w-full z-50 flex flex-col flex-col-reverse md:flex-row justify-between items-center lg:px-10 bg-[#F0A02C] shadow-lg">
  <div class="flex h-[90px] w-[220px] lg:h-[120px] lg-w-[240px] hidden md:block">
    <a href="#" class="border-none focus:outline-none focus:ring-0 focus:border-transparent">
      <img src="{{ asset('logo/furrhub.png') }}" alt="furrhub-logo" class="h-[100px]  lg:h-[120px] lg:w-[290px] object-cover" /></a>
  </div>

  <div class="flex flex-row w-auto p-2 justify-around lg:gap-10">
    <form class="flex items-center w-auto 2xl:w-[58rem]  p-2 rounded-lg">
      <input type="search" placeholder="Search" aria-label="Search"
        class="w-full h-[40px] lg:h-[50px]   px-4 text-[13px] lg:text-[18px] rounded-l-lg outline-none border-none focus:outline-none focus:ring-0 focus:border-transparent" />
      <button type="submit"
        class="bg-[#35B5D3] h-[40px] lg:h-[50px] lg:w-[80px] w-[50px] flex items-center justify-center rounded-r-lg">
        <img src="{{ asset('logo/search-white.svg') }}" alt="search" class="h-[22px] w-[22px] lg:h-[30px] lg:w-[30px]" />
      </button>
    </form>

    <div class="flex flex-row text-white  font-semibold mt-4">
      <a href="{{ route('login') }}" class="flex flex-row gap-0 align-center">
        <img src="{{ asset ('logo/cart.svg')}}" alt="user" class="h-[27px] w-[30px] lg:h-[35px] lg:w-[43px]" />
        <div class="bg-[#F23D3D] h-[20px] w-[35px]  lg:h-[25px] lg:w-[45px] rounded-full flex justify-center items-center">
          <p class="xl:text-[16px] text-[10px] ">0</p>
        </div>
      </a>
      <!-- <p class="pt-1 text-">Cart</p> -->
    </div>
  </div>

  <div class="flex flex-row gap-3 ml-auto xl:ml-0">
    <div class="flex flex-row text-black text-[12px] lg:text-[20px] font-semibold px-3 lg:px-0">
      <nav class="flex flex-row gap-1 md:gap-3 align-center">
        @if (Route::has('login'))
        <img src="{{ asset ('logo/user.svg')}}" alt="user" class="h-[25px] w-[30px] lg:h-[40px] lg:w-[43px]" />
        @auth
        <a class="pt-1" href="{{ url('/dashboard') }}"> Dashboard</a>
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


<!-- carousel part -->
<div class="w-full relative mt-2 ">
  <div class="swiper progress-slide-carousel swiper-container relative ">
    <div class="swiper-wrapper">
      <div class="swiper-slide">
        <a href="{{ route('login') }}" target="_blank" class="">
          <div class="rounded-2xl h-[15rem] md:h-full ">
            <img src="{{ asset('images/Furrhub-carousel/1.jpg') }}" alt="carousel-pet-services" class="w-[100%] h-[100%] object-cover " />
          </div>
        </a>
      </div>
      <div class="swiper-slide">
        <a href="{{ route('login') }}" target="_blank" class="">
          <div class="rounded-2xl h-[15rem] md:h-full ">
            <img src="{{ asset('images/Furrhub-carousel/2.jpg') }}" alt="carousel-pet-services" class="w-[100%] h-[100%] object-cover " />
          </div>
        </a>
      </div>
      <div class="swiper-slide">
        <a href="{{ route('login') }}" target="_blank" class="">
          <div class="rounded-2xl h-[15rem] md:h-full ">
            <img src="{{ asset('images/Furrhub-carousel/3.jpg') }}" alt="carousel-pet-services" class="w-[100%] h-[100%] object-cover " />
          </div>
        </a>
      </div>
      <div class="swiper-slide">
        <a href="{{ route('login') }}" target="_blank" class="">
          <div class="rounded-2xl h-[15rem] md:h-full ">
            <img src="{{ asset('images/Furrhub-carousel/4.jpg') }}" alt="carousel-pet-services" class="w-[100%] h-[100%] object-cover " />
          </div>
        </a>
      </div>
      <div class="swiper-slide">
        <a href="{{ route('login') }}" target="_blank" class="">
          <div class="rounded-2xl h-[15rem] md:h-full ">
            <img src="{{ asset('images/Furrhub-carousel/5.jpg') }}" alt="carousel-pet-services" class="w-[100%] h-[100%] object-cover " />
          </div>
        </a>
      </div>
      <div class="swiper-slide">
        <a href="{{ route('login') }}" target="_blank" class="">
          <div class="rounded-2xl h-[15rem] md:h-full ">
            <img src="{{ asset('images/Furrhub-carousel/6.jpg') }}" alt="carousel-pet-services" class="w-[100%] h-[100%] object-cover " />
          </div>
        </a>
      </div>
    </div>
    <div class="swiper-pagination"></div>
  </div>
</div>

<!-- catergory part -->

<body class="font-sans antialiased bg-white-400 dark:text-black/50">

  <div class="bg-white">
    <div class="w-full overflow-x-auto flex justify-center mt-4 custom-scrollbar lg:p-4">
      <div class="w-full flex xl:gap-8 gap-2 sm:justify-center whitespace-nowrap scrollbar">

        <div class="flex flex-col items-center space-y-2 min-w-[80px] sm:min-w-[100px] lg:p-2">
          <a href="{{ route('login') }}" class="hover:text-[#F0A02C] flex flex-col items-center space-y-2">
            <div class="w-16 h-16 sm:w-20 sm:h-20 xl:w-24 xl:h-24  rounded-lg ">
              <img src="{{asset('images/Furrhub-Product-Categories/Food.png')}}" alt="Food-category" class="transition-transform duration-300 hover:scale-110 " />
            </div>
            <p class="text-sm sm:text-sm font-medium text-center">Food</p>
          </a>
        </div>

        <div class="flex flex-col items-center space-y-2 min-w-[80px] sm:min-w-[100px] lg:p-2">
          <a href="{{ route('login') }}" class="hover:text-[#F0A02C] flex flex-col items-center space-y-2">
            <div class="w-16 h-16 sm:w-20 sm:h-20 xl:w-24 xl:h-24  rounded-lg">
              <img src="{{asset('images/Furrhub-Product-Categories/Treats.png')}}" alt="Treats-category" class="transition-transform duration-300 hover:scale-110 " />
            </div>
            <p class="text-sm sm:text-sm font-medium text-center">Treats</p>
          </a>
        </div>

        <div class="flex flex-col items-center space-y-2 min-w-[80px] sm:min-w-[100px] lg:p-2">
          <a href="{{ route('login') }}" class="hover:text-[#F0A02C] flex flex-col items-center space-y-2">
            <div class="w-16 h-16 sm:w-20 sm:h-20 xl:w-24 xl:h-24  rounded-lg">
              <img src="{{asset('images/Furrhub-Product-Categories/Toys.png')}}" alt="Toys-category" class="transition-transform duration-300 hover:scale-110 " />
            </div>
            <p class="text-sm sm:text-sm font-medium text-center">Toys</p>
          </a>
        </div>

        <div class="flex flex-col items-center space-y-2 min-w-[80px] sm:min-w-[100px] lg:p-2 text-wrap">
          <a href="{{ route('login') }}" class="hover:text-[#F0A02C] flex flex-col items-center space-y-2">
            <div class="w-16 h-16 sm:w-20 sm:h-20 xl:w-24 xl:h-24  rounded-lg">
              <img src="{{asset('images/Furrhub-Product-Categories/Grooming Supplies.png')}}" alt="Grooming Supplies-category" class="transition-transform duration-300 hover:scale-110 " />
            </div>
            <p class="text-sm sm:text-sm font-medium text-center text-wrap">Grooming Supplies</p>
          </a>
        </div>

        <div class="flex flex-col items-center space-y-2 min-w-[80px] sm:min-w-[100px] lg:p-2 text-wrap">
          <a href="{{ route('login') }}" class="hover:text-[#F0A02C] flex flex-col items-center space-y-2">
            <div class="w-16 h-16 sm:w-20 sm:h-20 xl:w-24 xl:h-24  rounded-lg">
              <img src="{{asset('images/Furrhub-Product-Categories/Accessories.png')}}" alt="Accessories-category" class="transition-transform duration-300 hover:scale-110 " />
            </div>
            <p class="text-sm sm:text-sm font-medium text-center text-wrap"> Accessories</p>
          </a>
        </div>

        <div class="flex flex-col items-center space-y-2 min-w-[80px] sm:min-w-[100px] lg:p-2">
          <a href="{{ route('login') }}" class="hover:text-[#F0A02C] flex flex-col items-center space-y-2">
            <div class="w-16 h-16 sm:w-20 sm:h-20 xl:w-24 xl:h-24  rounded-lg">
              <img src="{{asset('images/Furrhub-Product-Categories/Health Needs.png')}}" alt="Health Needs-category" class="transition-transform duration-300 hover:scale-110 " />
            </div>
            <p class="text-sm sm:text-sm font-medium text-center text-wrap">Health Needs</p>
          </a>
        </div>

        <div class="flex flex-col items-center space-y-2 min-w-[80px] sm:min-w-[100px] lg:p-2">
          <a href="{{ route('login') }}" class="hover:text-[#F0A02C] flex flex-col items-center space-y-2">
            <div class="w-16 h-16 sm:w-20 sm:h-20 xl:w-24 xl:h-24  rounded-lg">
              <img src="{{asset('images/Furrhub-Product-Categories/Essentials.png')}}" alt="Essentials-category" class="transition-transform duration-300 hover:scale-110 " />
            </div>
            <p class="text-sm sm:text-sm font-medium text-center">Essentials</p>
          </a>
        </div>
      </div>
    </div>

    <!-- best seller part -->
    <div class="w-full overflow-x-auto flex justify-start  custom-scrollbar2 lg:p-4">
      <div class="w-full flex flex-col xl:gap-1 gap-2 whitespace-nowrap scrollbar lg:p-5  custom-scrollbar2  "> <!--xl-gap-10  mt-3-->
        <div class="flex flex-row items-center justify-between md:px-10 px-2 mt-5 h-20  rounded-lg ">
          <h1 class="md:text-5xl text-lg font-bold text-gray-600  ">Best Seller Products</h1>
          <a href="" class="md:text-lg text-sm flex flex-row items-center ">See All <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
              <path stroke-linecap="round" stroke-linejoin="round" d="m12.75 15 3-3m0 0-3-3m3 3h-7.5M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
            </svg>
          </a>
        </div>

        <div class="p-4 mt-1 flex gap-4 overflow-x-auto sm:flex-wrap lg:grid lg:grid-cols-6 xl:gap-x-2 custom-scrollbar2 ">

          <div class="group relative min-w-[230px] p-4 bg-white rounded-lg shadow-lg border-2 border-gray-100">
            <img src="{{ asset('images/products/dog.jpg') }}" alt="Best-Product" class="aspect-square w-full rounded-lg bg-gray-500 object-cover group-hover:opacity-75 lg:aspect-auto lg:h-74">
            <div class="mt-2 flex justify-between flex flex-col gap-1">
              <p class="text-sm font-normal text-gray-500 text-end">120 sold</p>
              <h5 class="font-normal text-wrap text-orange-500 text-sm">FurrHUB</h5>
              <h4 class="font-semibold text-wrap text-black text-md">Pedigree 18 Pouch Variety Pack</h4>
              <div class="flex justify-between">
                <h4 class="font-bold text-wrap text-orange-500 text-md"><span class="text-lg">₱</span> 350.00</h4>

                <button x-data="{ filled: false }" @click="filled = !filled" class="text-white text-sm font-semibold rounded-lg p-1 col-span-1">
                  <svg xmlns="http://www.w3.org/2000/svg" :fill="filled ? 'red' : 'white'" viewBox="0 0 24 24" stroke-width="1.5" stroke="red" class="size-8">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12Z" />
                  </svg>
                </button>

              </div>
              <div class="grid grid-cols-6 gap-1 h-10">
                <button class="bg-[#F0A02C] hover:bg-orange-400 text-white text-sm font-semibold rounded-lg p-1 col-span-3  md:col-span-3">Add to Cart</button>
                <button class="bg-transparent  text-[#F0A02C] font-semibold hover:text-white py-2 px-4 border-2 border-[#F0A02C] hover:bg-[#F0A02C] rounded text-sm font-semibold rounded-lg p-1 col-span-3 md:col-span-3">Buy Now</button>
              </div>
            </div>
          </div>

          <div class="group relative min-w-[230px] p-4 bg-white rounded-lg shadow-lg border-2 border-gray-100">
            <img src="{{ asset('images/products/cat-foods.webp') }}" alt="Best-Product" class="aspect-square w-full rounded-lg bg-gray-500 object-cover group-hover:opacity-75 lg:aspect-auto lg:h-74">
            <div class="mt-2 flex justify-between flex flex-col gap-1">
              <p class="text-sm font-normal text-gray-500 text-end">120 sold</p>
              <h5 class="font-normal text-wrap text-orange-500 text-sm">FurrHUB</h5>
              <h4 class="font-semibold text-wrap text-black text-md"> Royal Canin Cat Food</h4>
              <div class="flex justify-between">
                <h4 class="font-bold text-wrap text-orange-500 text-md"><span class="text-lg">₱</span> 350.00</h4>
                <button x-data="{ filled: false }" @click="filled = !filled" class="text-white text-sm font-semibold rounded-lg p-1 col-span-1">
                  <svg xmlns="http://www.w3.org/2000/svg" :fill="filled ? 'red' : 'white'" viewBox="0 0 24 24" stroke-width="1.5" stroke="red" class="size-8">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12Z" />
                  </svg>
                </button>
              </div>
              <div class="grid grid-cols-6 gap-1 h-10">
                <button class="bg-[#F0A02C] hover:bg-orange-400 text-white text-sm font-semibold rounded-lg p-1 col-span-3  md:col-span-3">Add to Cart</button>
                <button class="bg-transparent  text-[#F0A02C] font-semibold hover:text-white py-2 px-4 border-2 border-[#F0A02C] hover:bg-[#F0A02C] rounded text-sm font-semibold rounded-lg p-1 col-span-3 md:col-span-3">Buy Now</button>
              </div>
            </div>
          </div>

          <div class="group relative min-w-[230px] p-4 bg-white rounded-lg shadow-lg border-2 border-gray-100">
            <img src="{{ asset('images/products/dog.jpg') }}" alt="Best-Product" class="aspect-square w-full rounded-lg bg-gray-500 object-cover group-hover:opacity-75 lg:aspect-auto lg:h-74">
            <div class="mt-2 flex justify-between flex flex-col gap-1">
              <p class="text-sm font-normal text-gray-500 text-end">120 sold</p>
              <h5 class="font-normal text-wrap text-orange-500 text-sm">FurrHUB</h5>
              <h4 class="font-semibold text-wrap text-black text-md">Pedigree 18 Pouch Variety Pack</h4>
              <div class="flex justify-between">
                <h4 class="font-bold text-wrap text-orange-500 text-md"><span class="text-lg">₱</span> 350.00</h4>
                <button x-data="{ filled: false }" @click="filled = !filled" class="text-white text-sm font-semibold rounded-lg p-1 col-span-1">
                  <svg xmlns="http://www.w3.org/2000/svg" :fill="filled ? 'red' : 'white'" viewBox="0 0 24 24" stroke-width="1.5" stroke="red" class="size-8">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12Z" />
                  </svg>
                </button>
              </div>
              <div class="grid grid-cols-6 gap-1 h-10">
                <button class="bg-[#F0A02C] hover:bg-orange-400 text-white text-sm font-semibold rounded-lg p-1 col-span-3  md:col-span-3">Add to Cart</button>
                <button class="bg-transparent  text-[#F0A02C] font-semibold hover:text-white py-2 px-4 border-2 border-[#F0A02C] hover:bg-[#F0A02C] rounded text-sm font-semibold rounded-lg p-1 col-span-3 md:col-span-3">Buy Now</button>
              </div>
            </div>
          </div>

          <div class="group relative min-w-[230px] p-4 bg-white rounded-lg shadow-lg border-2 border-gray-100">
            <img src="{{ asset('images/products/cat-foods.webp') }}" alt="Best-Product" class="aspect-square w-full rounded-lg bg-gray-500 object-cover group-hover:opacity-75 lg:aspect-auto lg:h-74">
            <div class="mt-2 flex justify-between flex flex-col gap-1">
              <p class="text-sm font-normal text-gray-500 text-end">120 sold</p>
              <h5 class="font-normal text-wrap text-orange-500 text-sm">FurrHUB</h5>
              <h4 class="font-semibold text-wrap text-black text-md"> Royal Canin Cat Food</h4>
              <div class="flex justify-between">
                <h4 class="font-bold text-wrap text-orange-500 text-md"><span class="text-lg">₱</span> 350.00</h4>
                <button x-data="{ filled: false }" @click="filled = !filled" class="text-white text-sm font-semibold rounded-lg p-1 col-span-1">
                  <svg xmlns="http://www.w3.org/2000/svg" :fill="filled ? 'red' : 'white'" viewBox="0 0 24 24" stroke-width="1.5" stroke="red" class="size-8">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12Z" />
                  </svg>
                </button>
              </div>
              <div class="grid grid-cols-6 gap-1 h-10">
                <button class="bg-[#F0A02C] hover:bg-orange-400 text-white text-sm font-semibold rounded-lg p-1 col-span-3  md:col-span-3">Add to Cart</button>
                <button class="bg-transparent  text-[#F0A02C] font-semibold hover:text-white py-2 px-4 border-2 border-[#F0A02C] hover:bg-[#F0A02C] rounded text-sm font-semibold rounded-lg p-1 col-span-3 md:col-span-3">Buy Now</button>
              </div>
            </div>
          </div>

          <div class="group relative min-w-[230px] p-4 bg-white rounded-lg shadow-lg border-2 border-gray-100">
            <img src="{{ asset('images/products/dog.jpg') }}" alt="Best-Product" class="aspect-square w-full rounded-lg bg-gray-500 object-cover group-hover:opacity-75 lg:aspect-auto lg:h-74">
            <div class="mt-2 flex justify-between flex flex-col gap-1">
              <p class="text-sm font-normal text-gray-500 text-end">120 sold</p>
              <h5 class="font-normal text-wrap text-orange-500 text-sm">FurrHUB</h5>
              <h4 class="font-semibold text-wrap text-black text-md">Pedigree 18 Pouch Variety Pack</h4>
              <div class="flex justify-between">
                <h4 class="font-bold text-wrap text-orange-500 text-md"><span class="text-lg">₱</span> 350.00</h4>
                <button x-data="{ filled: false }" @click="filled = !filled" class="text-white text-sm font-semibold rounded-lg p-1 col-span-1">
                  <svg xmlns="http://www.w3.org/2000/svg" :fill="filled ? 'red' : 'white'" viewBox="0 0 24 24" stroke-width="1.5" stroke="red" class="size-8">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12Z" />
                  </svg>
                </button>
              </div>
              <div class="grid grid-cols-6 gap-1 h-10">
                <button class="bg-[#F0A02C] hover:bg-orange-400 text-white text-sm font-semibold rounded-lg p-1 col-span-3  md:col-span-3">Add to Cart</button>
                <button class="bg-transparent  text-[#F0A02C] font-semibold hover:text-white py-2 px-4 border-2 border-[#F0A02C] hover:bg-[#F0A02C] rounded text-sm font-semibold rounded-lg p-1 col-span-3 md:col-span-3">Buy Now</button>
              </div>
            </div>
          </div>

          <div class="group relative min-w-[230px] p-4 bg-white rounded-lg shadow-lg border-2 border-gray-100">
            <img src="{{ asset('images/products/cat-foods.webp') }}" alt="Best-Product" class="aspect-square w-full rounded-lg bg-gray-500 object-cover group-hover:opacity-75 lg:aspect-auto lg:h-74">
            <div class="mt-2 flex justify-between flex flex-col gap-1">
              <p class="text-sm font-normal text-gray-500 text-end">120 sold</p>
              <h5 class="font-normal text-wrap text-orange-500 text-sm">FurrHUB</h5>
              <h4 class="font-semibold text-wrap text-black text-md"> Royal Canin Cat Food</h4>
              <div class="flex justify-between">
                <h4 class="font-bold text-wrap text-orange-500 text-md"><span class="text-lg">₱</span> 350.00</h4>
                <button x-data="{ filled: false }" @click="filled = !filled" class="text-white text-sm font-semibold rounded-lg p-1 col-span-1">
                  <svg xmlns="http://www.w3.org/2000/svg" :fill="filled ? 'red' : 'white'" viewBox="0 0 24 24" stroke-width="1.5" stroke="red" class="size-8">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12Z" />
                  </svg>
                </button>
              </div>
              <div class="grid grid-cols-6 gap-1 h-10">
                <button class="bg-[#F0A02C] hover:bg-orange-400 text-white text-sm font-semibold rounded-lg p-1 col-span-3  md:col-span-3">Add to Cart</button>
                <button class="bg-transparent  text-[#F0A02C] font-semibold hover:text-white py-2 px-4 border-2 border-[#F0A02C] hover:bg-[#F0A02C] rounded text-sm font-semibold rounded-lg p-1 col-span-3 md:col-span-3">Buy Now</button>
              </div>
            </div>
          </div>


        </div>
      </div>
    </div>



  </div>

</body>
<!-- Footer -->
<x-footer bgColor="bg-sky-300" />


</html>