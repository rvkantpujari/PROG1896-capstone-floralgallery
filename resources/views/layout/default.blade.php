<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="shortcut icon" href="{{url('favicon.ico')}}" type="image/x-icon">
        <title>@yield('title')</title>
        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link
            href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap"
            rel="stylesheet"
        />
        <script src="https://cdn.tailwindcss.com"></script>
        <script src="https://unpkg.com/alpinejs@3.2.3/dist/cdn.min.js" defer></script>
        <style>
            .active {
                font-weight: bold;
            }
        </style>
    </head>
    <body>
        @section('header')
            <!-- Header -->
            <header class="pt-1 pb-2 bg-[#1e3050] flex flex-col gap-y-4 lg:flex-row justify-around">
                <span class="text-md text-pink-500 text-center">Delivery FREE for all Orders above $50</span>
                <span class="contact-details text-white flex flex-col gap-2 items-center flex-y-4 lg:flex-row lg:gap-x-8">
                    <a href="tel:+1 (705) 123-4567" class="flex gap-2 lg:gap-x-2">
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke-width="1.5"
                            stroke="currentColor"
                            class="w-6 h-6"
                        >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                d="M10.5 1.5H8.25A2.25 2.25 0 006 3.75v16.5a2.25 2.25 0 002.25 2.25h7.5A2.25 2.25 0 0018 20.25V3.75a2.25 2.25 0 00-2.25-2.25H13.5m-3 0V3h3V1.5m-3 0h3m-3 18.75h3"
                            />
                        </svg>
                        +1 (705) 123-4567
                    </a>
                    <a
                        href="mailto:contact@floralgallery.com"
                        class="flex gap-2 lg:gap-x-2"
                    >
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke-width="1.5"
                            stroke="currentColor"
                            class="w-6 h-6"
                        >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75"
                            />
                        </svg>

                        contact@floralgallery.com
                    </a>
                </span>
            </header>
        @show
        @section('navbar')
            <!-- Navbar -->
            <nav x-data="{ isOpen: false }" class="relative bg-white shadow bg-gray-800 md:px-24 lg:px-32">
                <div class="container px-6 py-4 mx-auto pb-6 mt-1">
                    <div class="lg:flex lg:items-center lg:justify-between">
                        <div class="flex items-center justify-between mt-1">
                            <a
                                href="{{route('home')}}"
                                class="text-2xl font-semibold subpixel-antialiased"
                            >
                                <span class="text-pink-500">Floral</span
                                ><span class="text-black">Gallery</span>
                            </a>

                            <!-- Mobile menu button -->
                            <div class="flex lg:hidden">
                                <button
                                    x-cloak
                                    @click="isOpen = !isOpen"
                                    type="button"
                                    class="text-dark-900 text-gray-200 hover:text-gray-600 dark:hover:text-gray-400 focus:outline-none focus:text-gray-600 dark:focus:text-gray-400"
                                    aria-label="toggle menu"
                                >
                                    <svg
                                        x-show="!isOpen"
                                        xmlns="http://www.w3.org/2000/svg"
                                        class="w-6 h-6"
                                        fill="none"
                                        viewBox="0 0 24 24"
                                        stroke="currentColor"
                                        stroke-width="2"
                                    >
                                        <path
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            d="M4 8h16M4 16h16"
                                        />
                                    </svg>

                                    <svg
                                        x-show="isOpen"
                                        xmlns="http://www.w3.org/2000/svg"
                                        class="w-6 h-6"
                                        fill="none"
                                        viewBox="0 0 24 24"
                                        stroke="currentColor"
                                        stroke-width="2"
                                    >
                                        <path
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            d="M6 18L18 6M6 6l12 12"
                                        />
                                    </svg>
                                </button>
                            </div>
                        </div>

                        <!-- Mobile Menu open: "block", Menu closed: "hidden" -->
                        <div
                            x-cloak
                            :class="[isOpen ? 'translate-x-0 opacity-100 ' : 'opacity-0 -translate-x-full']"
                            class="absolute inset-x-0 z-20 w-full px-6 py-4 transition-all duration-300 ease-in-out bg-white bg-gray-800 lg:mt-0 lg:p-0 lg:top-0 lg:relative lg:bg-transparent lg:w-auto lg:opacity-100 lg:translate-x-0 lg:flex lg:items-center"
                        >
                            <form action="{{route('search')}}" method="post">
                                @csrf
                                <div
                                    class="pt-2 relative text-gray-600 lg:ml-8 order-last"
                                >
                                    <input
                                        class="w-10/12 lg:w-80 border-2 border-gray-300 bg-white h-10 px-5 pr-16 rounded-lg text-sm focus-within:ring focus-within:ring-opacity-40 focus-within:ring-pink-300 outline-none focus:border-white"
                                        type="search"
                                        name="search"
                                        placeholder="Search Flowers"
                                    />

                                    <button
                                        type="submit"
                                        class="md:absolute lg:absolute right-0 top-0 mt-5 mr-4 mb-4 ml-2"
                                    >
                                        <svg
                                            class="text-gray-600 h-4 w-4 fill-current"
                                            xmlns="http://www.w3.org/2000/svg"
                                            xmlns:xlink="http://www.w3.org/1999/xlink"
                                            version="1.1"
                                            id="Capa_1"
                                            x="0px"
                                            y="0px"
                                            viewBox="0 0 56.966 56.966"
                                            style="
                                                enable-background: new 0 0 56.966
                                                    56.966;
                                            "
                                            xml:space="preserve"
                                            width="512px"
                                            height="512px"
                                        >
                                            <path
                                                d="M55.146,51.887L41.588,37.786c3.486-4.144,5.396-9.358,5.396-14.786c0-12.682-10.318-23-23-23s-23,10.318-23,23  s10.318,23,23,23c4.761,0,9.298-1.436,13.177-4.162l13.661,14.208c0.571,0.593,1.339,0.92,2.162,0.92  c0.779,0,1.518-0.297,2.079-0.837C56.255,54.982,56.293,53.08,55.146,51.887z M23.984,6c9.374,0,17,7.626,17,17s-7.626,17-17,17  s-17-7.626-17-17S14.61,6,23.984,6z"
                                            />
                                        </svg>
                                    </button>
                                </div>
                            </form>

                            <!-- <div
                                class="flex flex-col -mx-6 lg:flex-row lg:items-center lg:mx-8"
                            > -->
                            <div
                                class="flex flex-col lg:flex-row items-end lg:mx-8 mx-4"
                            >
                                <a
                                    href="{{route('home')}}"
                                    class="px-3 py-2 mx-3 mt-2 text-black transition-colors duration-300 transform rounded-md lg:mt-0 {{Request::routeIs('home') ? 'active' : ''}} hover:text-white hover:bg-gray-700"
                                >
                                    Home
                                </a>
                                <a
                                    href="{{route('about_us')}}"
                                    class="px-3 py-2 mx-3 mt-2 text-black transition-colors duration-300 transform rounded-md lg:mt-0 {{Request::routeIs('about_us') ? 'active' : ''}} hover:text-white hover:bg-gray-700"
                                >
                                    About Us
                                </a>
                                <a
                                    href="{{route('contact_us')}}"
                                    class="px-3 py-2 mx-3 mt-2 text-black transition-colors duration-300 transform rounded-md lg:mt-0 {{Request::routeIs('contact_us') ? 'active' : ''}} hover:text-white hover:bg-gray-700"
                                >
                                    Contact Us
                                </a>
                                <a
                                    href="{{route('cart')}}"
                                    class="flex gap-2 px-3 py-2 mx-3 mt-2 text-black transition-colors duration-300 transform rounded-md lg:mt-0 {{Request::routeIs('cart') ? 'active' : ''}} hover:text-white hover:bg-gray-700"
                                >
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 10.5V6a3.75 3.75 0 10-7.5 0v4.5m11.356-1.993l1.263 12c.07.665-.45 1.243-1.119 1.243H4.25a1.125 1.125 0 01-1.12-1.243l1.264-12A1.125 1.125 0 015.513 7.5h12.974c.576 0 1.059.435 1.119 1.007zM8.625 10.5a.375.375 0 11-.75 0 .375.375 0 01.75 0zm7.5 0a.375.375 0 11-.75 0 .375.375 0 01.75 0z" />
                                    </svg>
                                    Cart
                                </a>
                                <a
                                    href="{{route('signin')}}"
                                    class="flex gap-2 px-3 py-2 mx-3 mt-2 text-black transition-colors duration-300 transform rounded-md lg:mt-0 dark:text-black hover:text-white hover:bg-gray-100 dark:hover:bg-gray-700"
                                >
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                                        <path fill-rule="evenodd" d="M7.5 6a4.5 4.5 0 119 0 4.5 4.5 0 01-9 0zM3.751 20.105a8.25 8.25 0 0116.498 0 .75.75 0 01-.437.695A18.683 18.683 0 0112 22.5c-2.786 0-5.433-.608-7.812-1.7a.75.75 0 01-.437-.695z" clip-rule="evenodd"/>
                                    </svg>
                                    Sign In
                                </a>

                                <!-- Profile Dropdown --
                                <div class="flex items-center mt-4 lg:mt-0">
                                    <div
                                        x-data="{ isOpen: true }"
                                        class="relative inline-block"
                                    >
                                        <button
                                            @click="isOpen = !isOpen"
                                            class="relative z-10 flex items-center p-2 text-black transition-colors duration-300 transform rounded-md lg:mt-0 dark:text-black hover:text-white hover:bg-gray-100 dark:hover:bg-gray-700"
                                        >
                                            <span class="mx-1">Jane Doe</span>
                                            <svg
                                                class="w-5 h-5 mx-1"
                                                viewBox="0 0 24 24"
                                                fill="none"
                                                xmlns="http://www.w3.org/2000/svg"
                                            >
                                                <path
                                                    d="M12 15.713L18.01 9.70299L16.597 8.28799L12 12.888L7.40399 8.28799L5.98999 9.70199L12 15.713Z"
                                                    fill="currentColor"
                                                ></path>
                                            </svg>
                                        </button>

                                        <div
                                            x-show="!isOpen"
                                            @click.away="isOpen = true"
                                            x-transition:enter="transition ease-out duration-100"
                                            x-transition:enter-start="opacity-0 scale-90"
                                            x-transition:enter-end="opacity-100 scale-100"
                                            x-transition:leave="transition ease-in duration-100"
                                            x-transition:leave-start="opacity-100 scale-100"
                                            x-transition:leave-end="opacity-0 scale-90"
                                            class="absolute right-0 z-20 w-56 py-2 mt-2 overflow-hidden origin-top-right bg-white rounded-md shadow-xl"
                                        >
                                            <a
                                                href="#"
                                                class="flex items-center p-3 -mt-2 text-gray-600 transition-colors duration-300 transform hover:bg-gray-700 hover:text-gray-200"
                                            >
                                                <img
                                                    class="flex-shrink-0 object-cover mx-1 rounded-full w-9 h-9"
                                                    src="https://images.unsplash.com/photo-1523779917675-b6ed3a42a561?ixid=MnwxMjA3fDB8MHxzZWFyY2h8N3x8d29tYW4lMjBibHVlfGVufDB8fDB8fA%3D%3D&ixlib=rb-1.2.1&auto=format&fit=face&w=500&q=200"
                                                    alt="jane avatar"
                                                />
                                                <div class="mx-1">
                                                    <h1
                                                        class="text-lg md:text-md lg:text-sm font-semibold"
                                                    >
                                                        Jane Doe
                                                    </h1>
                                                </div>
                                            </a>

                                            <hr class="border-gray-300" />

                                            <a
                                                href="./profile.html"
                                                class="block px-4 py-3 text-sm capitalize transition-colors duration-300 transform text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-700 dark:hover:text-white"
                                            >
                                                Manage profile
                                            </a>

                                            <a
                                                href="#"
                                                class="block px-4 py-3 text-sm capitalize transition-colors duration-300 transform text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-700 dark:hover:text-white"
                                            >
                                                Order History
                                            </a>

                                            <hr class="border-gray-300" />

                                            <a
                                                href="#"
                                                class="block px-4 py-3 text-sm capitalize transition-colors duration-300 transform text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-700 dark:hover:text-white"
                                            >
                                                Sign Out
                                            </a>
                                        </div>
                                    </div>
                                </div> -->
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
        @show
        @section('main-content')
            Main Content Comes Here!!!            
        @show
        @section('footer')
            <!-- Footer -->
            <footer class="text-gray-600 body-font">
                <div class="container py-8 lg:pl-24 lg:py-24 mx-auto flex md:items-center lg:items-start md:flex-row md:flex-nowrap flex-wrap flex-col lg:p-12 border-t-2">
                    <div class="md:w-1/3 lg:w-1/3 w-full flex-shrink-0 md:mx-0 mx-auto text-center md:text-left md:mt-0 mt-10">
                        <a href="{{route('home')}}" class="flex title-font font-medium items-center md:justify-start justify-center text-gray-900 text-3xl">
                            <span class="text-pink-500 font-semibold">Floral</span>
                            <span class="text-black font-semibold">Gallery</span>
                        </a>
                        <p class="mt-2 text-gray-500 capitalize tracking-wider">
                            Flowers for all occasions
                        </p>
                    </div>
                    <div class="md:w-1/3 md:ml-12 lg:ml-0 flex-grow flex flex-wrap md:pr-20 -mb-10 md:text-left text-center order-first">
                        <div class="lg:w-1/2 md:w-1/2 w-full px-4">
                            <h2 class="title-font font-semibold uppercase text-gray-900 tracking-widest text-sm mb-3">
                                Quick Links
                            </h2>
                            <nav class="list-none mb-10">
                                <li>
                                    <a
                                        href="{{route('about_us')}}"
                                        class="text-gray-600 hover:text-gray-800"
                                    >
                                        About Us
                                    </a>
                                </li>
                                <li>
                                    <a
                                        href="{{route('contact_us')}}"
                                        class="text-gray-600 hover:text-gray-800"
                                    >
                                        Contact Us
                                    </a>
                                </li>
                                <li>
                                    <a
                                        href="#"
                                        class="text-gray-600 hover:text-gray-800"
                                    >
                                        Privacy Policy
                                    </a>
                                </li>
                            </nav>
                        </div>
                        <div class="lg:w-1/2 md:w-1/2 w-full px-4">
                            <h2
                                class="title-font font-semibold uppercase text-gray-900 tracking-widest text-sm mb-3"
                            >
                                Connect with Us
                            </h2>
                            <nav class="list-none mb-10">
                                <li>
                                    <a class="text-gray-600 hover:text-gray-800">
                                        Facebook
                                    </a>
                                </li>
                                <li>
                                    <a class="text-gray-600 hover:text-gray-800">
                                        Twitter
                                    </a>
                                </li>
                                <li>
                                    <a class="text-gray-600 hover:text-gray-800">
                                        Instagram
                                    </a>
                                </li>
                            </nav>
                        </div>
                    </div>
                </div>
                <div class="bg-[#1e3050]">
                    <div class="container py-4 flex flex-wrap flex-col md:flex-row md:justify-around lg:flex-row lg:justify-between">
                        <p class="text-white text-sm text-center sm:text-left lg:pl-12">
                            © 2023 All rights reserved.
                        </p>
                        <span class="flex sm:mt-0 mt-2 justify-center sm:justify-start lg:pr-12 text-white">
                            Designed &amp; Developed with ❤
                        </span>
                    </div>
                </div>
            </footer>
        @show
        @section('js-scripts')
        @show
    </body>
</html>