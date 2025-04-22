<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FurrHub - Pet Service Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="icon" href="{{ asset('logo/logo1.png') }}" type="image/png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script src="//unpkg.com/alpinejs" defer></script>
</head>
<body class="bg-gray-100">
    <div class="flex h-screen">
        <!-- Sidebar -->
        <div class="w-90 bg-white border-r shadow-sm">
            <div class="p-4">
                <div class="flex items-center mb-8">
                    <img src="{{ asset('logo/logo1.png') }}" alt="FurrHub Logo" class="h-[70px] w-[150px] lg:h-[125px] lg:w-[300px]" />
                </div>
                
                <nav class="font-bold">
                    <ul>
                        <li class="mb-2 border border-gray shadow-sm rounded-lg">
                            <a href="{{ route('welcome') }}" class="block p-3 flex items-center text-lg text-black hover:bg-gray-300 rounded transition duration-200">
                                <svg class="w-10 h-10 pr-2 ml-2" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z"></path>
                                </svg>
                                DASHBOARD
                            </a>
                        </li>
                        <li class="mb-2 border border-gray shadow-sm rounded-lg">
                            <a href="{{ route('users.manage') }}" class="block p-3 flex text-lg items-center text-black hover:bg-gray-100 rounded transition duration-200">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="w-10 h-10 pr-2 ml-2"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.-->
                                <path d="M406.5 399.6C387.4 352.9 341.5 320 288 320l-64 0c-53.5 0-99.4 32.9-118.5 79.6C69.9 362.2 48 311.7 48 256C48 141.1 141.1 48 256 48s208 93.1 208 208c0 55.7-21.9 106.2-57.5 143.6zm-40.1 32.7C334.4 452.4 296.6 464 256 464s-78.4-11.6-110.5-31.7c7.3-36.7 39.7-64.3 78.5-64.3l64 0c38.8 0 71.2 27.6 78.5 64.3zM256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zm0-272a40 40 0 1 1 0-80 40 40 0 1 1 0 80zm-88-40a88 88 0 1 0 176 0 88 88 0 1 0 -176 0z"/>
                            </svg>
                                USER
                            </a>
                        </li>
                        <li class="mb-2 border border-gray shadow-sm rounded-lg">
                            <a href="#" class="block p-3 text-lg flex items-center text-black hover:bg-gray-300 rounded transition duration-200">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512" class="w-10 h-10 pr-2 ml-1"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.-->
                                    <path d="M88.2 309.1c9.8-18.3 6.8-40.8-7.5-55.8C59.4 230.9 48 204 48 176c0-63.5 63.8-128 160-128s160 64.5 160 128s-63.8 128-160 128c-13.1 0-25.8-1.3-37.8-3.6c-10.4-2-21.2-.6-30.7 4.2c-4.1 2.1-8.3 4.1-12.6 6c-16 7.2-32.9 13.5-49.9 18c2.8-4.6 5.4-9.1 7.9-13.6c1.1-1.9 2.2-3.9 3.2-5.9zM208 352c114.9 0 208-78.8 208-176S322.9 0 208 0S0 78.8 0 176c0 41.8 17.2 80.1 45.9 110.3c-.9 1.7-1.9 3.5-2.8 5.1c-10.3 18.4-22.3 36.5-36.6 52.1c-6.6 7-8.3 17.2-4.6 25.9C5.8 378.3 14.4 384 24 384c43 0 86.5-13.3 122.7-29.7c4.8-2.2 9.6-4.5 14.2-6.8c15.1 3 30.9 4.5 47.1 4.5zM432 480c16.2 0 31.9-1.6 47.1-4.5c4.6 2.3 9.4 4.6 14.2 6.8C529.5 498.7 573 512 616 512c9.6 0 18.2-5.7 22-14.5c3.8-8.8 2-19-4.6-25.9c-14.2-15.6-26.2-33.7-36.6-52.1c-.9-1.7-1.9-3.4-2.8-5.1C622.8 384.1 640 345.8 640 304c0-94.4-87.9-171.5-198.2-175.8c4.1 15.2 6.2 31.2 6.2 47.8l0 .6c87.2 6.7 144 67.5 144 127.4c0 28-11.4 54.9-32.7 77.2c-14.3 15-17.3 37.6-7.5 55.8c1.1 2 2.2 4 3.2 5.9c2.5 4.5 5.2 9 7.9 13.6c-17-4.5-33.9-10.7-49.9-18c-4.3-1.9-8.5-3.9-12.6-6c-9.5-4.8-20.3-6.2-30.7-4.2c-12.1 2.4-24.8 3.6-37.8 3.6c-61.7 0-110-26.5-136.8-62.3c-16 5.4-32.8 9.4-50 11.8C279 439.8 350 480 432 480z"/>
                                </svg>
                                MESSAGES
                            </a>
                        </li>
                        <li class="mb-2 border border-gray shadow-sm rounded-lg">
                            <a href="{{ route('services_offer') }}" class="block p-3 flex text-lg items-center text-black hover:bg-gray-300 rounded transition duration-200">
                                <svg class="w-10 h-10 pr-2 ml-2" fill="currentColor" viewBox="0 0 20 20" >
                                    <path d="M10 12a2 2 0 100-4 2 2 0 000 4z"></path>
                                    <path fill-rule="evenodd" d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z" clip-rule="evenodd"></path>
                                </svg>
                                SERVICES
                            </a>
                        </li>
                        <li class="mb-2 border border-gray shadow-sm rounded-lg">
                        <a href="{{ route('service_logs') }}" class="block p-3 flex text-lg items-center text-lg text-black hover:bg-gray-300 rounded transition duration-200">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="w-10 h-10 pr-2 ml-2"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.--><path d="M96 0C43 0 0 43 0 96L0 416c0 53 43 96 96 96l288 0 32 0c17.7 0 32-14.3 32-32s-14.3-32-32-32l0-64c17.7 0 32-14.3 32-32l0-320c0-17.7-14.3-32-32-32L384 0 96 0zm0 384l256 0 0 64L96 448c-17.7 0-32-14.3-32-32s14.3-32 32-32zm32-240c0-8.8 7.2-16 16-16l192 0c8.8 0 16 7.2 16 16s-7.2 16-16 16l-192 0c-8.8 0-16-7.2-16-16zm16 48l192 0c8.8 0 16 7.2 16 16s-7.2 16-16 16l-192 0c-8.8 0-16-7.2-16-16s7.2-16 16-16z"/></svg>
                                SERVICE HISTORY
                            </a>
                        </li>
                        <li class="mb-2 border border-gray shadow-sm rounded-lg">
                            <a href="#" class="block p-3 text-lg flex items-center text-white bg-[#F0A02C] rounded transition duration-200">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" class="w-10 h-10 pr-2 ml-2" fill="white"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.--><path d="M253.3 35.1c6.1-11.8 1.5-26.3-10.2-32.4s-26.3-1.5-32.4 10.2L117.6 192 32 192c-17.7 0-32 14.3-32 32s14.3 32 32 32L83.9 463.5C91 492 116.6 512 146 512L430 512c29.4 0 55-20 62.1-48.5L544 256c17.7 0 32-14.3 32-32s-14.3-32-32-32l-85.6 0L365.3 12.9C359.2 1.2 344.7-3.4 332.9 2.7s-16.3 20.6-10.2 32.4L404.3 192l-232.6 0L253.3 35.1zM192 304l0 96c0 8.8-7.2 16-16 16s-16-7.2-16-16l0-96c0-8.8 7.2-16 16-16s16 7.2 16 16zm96-16c8.8 0 16 7.2 16 16l0 96c0 8.8-7.2 16-16 16s-16-7.2-16-16l0-96c0-8.8 7.2-16 16-16zm128 16l0 96c0 8.8-7.2 16-16 16s-16-7.2-16-16l0-96c0-8.8 7.2-16 16-16s16 7.2 16 16z"/></svg>
                                MANAGE PRODUCTS
                            </a>
                        </li>
                        <li class="mb-2 border border-gray shadow-sm rounded-lg">
                            <a href="{{ route('orders') }}" class="block p-3 flex text-lg items-center text-black hover:bg-gray-300 rounded transition duration-200">
                                <svg class="w-10 h-10 pr-2 ml-2" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M3 1a1 1 0 000 2h1.22l.305 1.222a.997.997 0 00.01.042l1.358 5.43-.893.892C3.74 11.846 4.632 14 6.414 14H15a1 1 0 000-2H6.414l1-1H14a1 1 0 00.894-.553l3-6A1 1 0 0017 3H6.28l-.31-1.243A1 1 0 005 1H3zM16 16.5a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0zM6.5 18a1.5 1.5 0 100-3 1.5 1.5 0 000 3z"></path>
                                </svg>
                                ORDERS
                            </a>
                        </li>
                        <li class="mb-2 border border-gray shadow-sm rounded-lg">
                            <a href="{{ route('appointments') }}" class="block p-3 flex items-center text-lg text-black hover:bg-gray-300 rounded transition duration-200">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="w-10 h-10 pr-2 ml-2"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.--><path d="M152 24c0-13.3-10.7-24-24-24s-24 10.7-24 24l0 40L64 64C28.7 64 0 92.7 0 128l0 16 0 48L0 448c0 35.3 28.7 64 64 64l320 0c35.3 0 64-28.7 64-64l0-256 0-48 0-16c0-35.3-28.7-64-64-64l-40 0 0-40c0-13.3-10.7-24-24-24s-24 10.7-24 24l0 40L152 64l0-40zM48 192l352 0 0 256c0 8.8-7.2 16-16 16L64 464c-8.8 0-16-7.2-16-16l0-256z"/></svg>
                                APPOINTMENTS
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
            <div class="absolute bottom-0 w-64 p-6 ml-9">
                <button class="w-full bg-[#4B4B4B] text-white font-bold py-2 rounded hover:bg-gray-300 transition duration-200 focus:outline-none focus:ring-2 focus:ring-gray-400">Log Out</button>
            </div>
        </div>

        <!-- Main Content -->
        <div class="flex-1 bg-gray-50">
        <div class="bg-[#F0A02C] shadow-sm h-26">
                <div class="max-w-full mx-auto px-4 py-3 flex justify-between items-center">
                    <div class="flex items-center">
                        <svg fill="white" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" class="h-20 w-20 pl-2"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><path d="m22 2.25h-3.25v-1.5c-.014-.404-.344-.726-.75-.726s-.736.322-.75.725v.001 1.5h-4.5v-1.5c-.014-.404-.344-.726-.75-.726s-.736.322-.75.725v.001 1.5h-4.5v-1.5c-.014-.404-.344-.726-.75-.726s-.736.322-.75.725v.001 1.5h-3.25c-1.104 0-2 .895-2 1.999v17.75c0 1.105.895 2 2 2h20c1.105 0 2-.895 2-2v-17.75c0-1.104-.896-1.999-2-1.999zm.5 19.75c0 .276-.224.499-.499.5h-20.001c-.276 0-.5-.224-.5-.5v-17.75c.001-.276.224-.499.5-.499h3.25v1.5c.014.404.344.726.75.726s.736-.322.75-.725v-.001-1.5h4.5v1.5c.014.404.344.726.75.726s.736-.322.75-.725v-.001-1.5h4.5v1.5c.014.404.344.726.75.726s.736-.322.75-.725v-.001-1.5h3.25c.276 0 .499.224.499.499z"></path><path d="m5.25 9h3v2.25h-3z"></path><path d="m5.25 12.75h3v2.25h-3z"></path><path d="m5.25 16.5h3v2.25h-3z"></path><path d="m10.5 16.5h3v2.25h-3z"></path><path d="m10.5 12.75h3v2.25h-3z"></path><path d="m10.5 9h3v2.25h-3z"></path><path d="m15.75 16.5h3v2.25h-3z"></path><path d="m15.75 12.75h3v2.25h-3z"></path><path d="m15.75 9h3v2.25h-3z"></path></g></svg>
                        <div id="datetime" class="text-2xl text-white font-bold mr-6 ml-4"></div>
                    </div>
                    <div class="flex items-center">
                        <div class="flex items-center">
                        <span class="text-2xl text-black font-bold">John Doe</span>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="w-10 h-10 pr-2 ml-2"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.-->
                            <path d="M406.5 399.6C387.4 352.9 341.5 320 288 320l-64 0c-53.5 0-99.4 32.9-118.5 79.6C69.9 362.2 48 311.7 48 256C48 141.1 141.1 48 256 48s208 93.1 208 208c0 55.7-21.9 106.2-57.5 143.6zm-40.1 32.7C334.4 452.4 296.6 464 256 464s-78.4-11.6-110.5-31.7c7.3-36.7 39.7-64.3 78.5-64.3l64 0c38.8 0 71.2 27.6 78.5 64.3zM256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zm0-272a40 40 0 1 1 0-80 40 40 0 1 1 0 80zm-88-40a88 88 0 1 0 176 0 88 88 0 1 0 -176 0z"/>
                        </svg>
                        <div x-data="{ open: false }" class="relative ml-4">
                            <button @click="open = !open" class="focus:outline-none">
                                <svg class="w-6 h-6 text-black" fill="none" stroke="currentColor" stroke-width="2"
                                    viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"></path>
                                </svg>
                            </button>
                            <div x-show="open" @click.outside="open = false"
                                class="absolute right-1 mt-2 w-48 bg-white rounded-md shadow-lg z-50">
                                <a href="#" class="block px-4 py-2 text-lg text-black hover:bg-gray-300">Profile</a>
                                <a href="#" class="block px-4 py-2 text-lg text-black hover:bg-gray-300">Settings</a>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Products Content -->
            <div class="p-6">
                <div class="flex items-center mb-4">
                    <nav class="flex" aria-label="Breadcrumb">
                        <ol class="inline-flex items-center space-x-1 md:space-x-3">
                            <li class="inline-flex items-center">
                                <a href="#" class="text-gray-700 hover:text-[#F0A02C] text-lg">HOME</a>
                            </li>
                        </ol>
                    </nav>
                </div>

                <div class="bg-white p-6 rounded-lg shadow-sm">
                    <div class="flex items-center mb-6">
                        <div class="flex-1">
                            <h1 class="text-3xl font-bold text-[#F0A02C]">
                                <i class="fas fa-box mr-2"></i>PRODUCTS
                            </h1>
                        </div>
                        <div class="flex space-x-2">
                            <div class="relative">
                                <input type="text" placeholder="Search..." class="pl-10 pr-4 py-2 border rounded-lg w-64">
                                <i class="fas fa-search absolute left-3 top-3 text-gray-400"></i>
                            </div>
                            <button class="px-2 py-1 text-gray-600 border rounded-lg hover:bg-gray-100">
                                Generate Report: 
                                <i class="fas fa-file-pdf mx-1"></i>
                                <i class="fas fa-file-excel mx-1"></i>
                            </button>
                            <button class="px-4 py-2 bg-[#F0A02C] text-white rounded-lg">
                                <a href="{{ route('add-products') }}" class="fas fa-plus mr-1">Add Product</a> 
                            </button>
                        </div>
                    </div>

                    <div class="overflow-x-auto">
                        <table class="min-w-full bg-white border border-gray-200">
                            <thead>
                                <tr class="bg-gray-100">
                                    <th class="py-3 px-4 text-left">ID</th>
                                    <th class="py-3 px-4 text-left">Product Image</th>
                                    <th class="py-3 px-4 text-left">Name</th>
                                    <th class="py-3 px-4 text-left">Category</th>
                                    <th class="py-3 px-4 text-left">Description</th>
                                    <th class="py-3 px-4 text-left">Price</th>
                                    <th class="py-3 px-4 text-left">Sold</th>
                                    <th class="py-3 px-4 text-left">Discount</th>
                                    <th class="py-3 px-4 text-left">Stock</th>
                                    <th class="py-3 px-4 text-left">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="border-b hover:bg-gray-50">
                                    <td class="py-3 px-4">1</td>
                                    <td class="py-3 px-4">
                                        <img src="/api/placeholder/50/50" alt="Pedigree" class="w-10 h-10 object-cover">
                                    </td>
                                    <td class="py-3 px-4">Pedigree</td>
                                    <td class="py-3 px-4">Food</td>
                                    <td class="py-3 px-4 text-sm text-gray-500">Lorem ipsum dolor sit amet consectetur adipisicing elit.</td>
                                    <td class="py-3 px-4">₱150</td>
                                    <td class="py-3 px-4">1020</td>
                                    <td class="py-3 px-4">10%</td>
                                    <td class="py-3 px-4">In stock</td>
                                    <td class="py-3 px-4">
                                        <div class="flex space-x-2">
                                            <button class="text-blue-500 hover:text-blue-700">
                                                <a href="{{ route('edit-product') }}" class="fas fa-edit"></a>
                                            </button>
                                            <button class="text-red-500 hover:text-red-700">
                                                <i class="fas fa-trash"></i>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                                <tr class="border-b hover:bg-gray-50">
                                    <td class="py-3 px-4">2</td>
                                    <td class="py-3 px-4">
                                        <img src="/api/placeholder/50/50" alt="Pedigree" class="w-10 h-10 object-cover">
                                    </td>
                                    <td class="py-3 px-4">Pedigree</td>
                                    <td class="py-3 px-4">Food</td>
                                    <td class="py-3 px-4 text-sm text-gray-500">Lorem ipsum dolor sit amet consectetur adipisicing elit.</td>
                                    <td class="py-3 px-4">₱150</td>
                                    <td class="py-3 px-4">1020</td>
                                    <td class="py-3 px-4">10%</td>
                                    <td class="py-3 px-4">In stock</td>
                                    <td class="py-3 px-4">
                                        <div class="flex space-x-2">
                                            <button class="text-blue-500 hover:text-blue-700">
                                                <a href="{{ route('edit-product') }}" class="fas fa-edit"></a>
                                            </button>
                                            <button class="text-red-500 hover:text-red-700">
                                                <i class="fas fa-trash"></i>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                                <tr class="border-b hover:bg-gray-50">
                                    <td class="py-3 px-4">3</td>
                                    <td class="py-3 px-4">
                                        <img src="/api/placeholder/50/50" alt="Pedigree" class="w-10 h-10 object-cover">
                                    </td>
                                    <td class="py-3 px-4">Pedigree</td>
                                    <td class="py-3 px-4">Food</td>
                                    <td class="py-3 px-4 text-sm text-gray-500">Lorem ipsum dolor sit amet consectetur adipisicing elit.</td>
                                    <td class="py-3 px-4">₱150</td>
                                    <td class="py-3 px-4">1020</td>
                                    <td class="py-3 px-4">10%</td>
                                    <td class="py-3 px-4">In stock</td>
                                    <td class="py-3 px-4">
                                        <div class="flex space-x-2">
                                            <button class="text-blue-500 hover:text-blue-700">
                                                <a href="{{ route('edit-product') }}" class="fas fa-edit"></a>
                                            </button>
                                            <button class="text-red-500 hover:text-red-700">
                                                <i class="fas fa-trash"></i>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <div class="mt-4 flex justify-end">
                        <button class="text-green-500 hover:text-green-700 flex items-center ml-auto">
                            <i class="fas fa-trash-restore mr-1"></i> Restore Deleted Products
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        function updateDateTime() {
            const now = new Date();
            
            // Format date
            const months = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];
            const month = months[now.getMonth()];
            const day = now.getDate();
            const year = now.getFullYear();
            
            // Format time
            let hours = now.getHours();
            const minutes = now.getMinutes().toString().padStart(2, '0');
            const ampm = hours >= 12 ? 'PM' : 'AM';
            
            hours = hours % 12;
            hours = hours ? hours : 12; // Convert 0 to 12
            
            // Create formatted strings
            const dateString = `${month} ${day}, ${year}`;
            const timeString = `${hours}:${minutes} ${ampm}`;
            
            // Update DOM
            document.getElementById('datetime').innerHTML = `${dateString}<br>${timeString}`;
        }

        // Update immediately 
        updateDateTime();
    </script>
</body>
</html>