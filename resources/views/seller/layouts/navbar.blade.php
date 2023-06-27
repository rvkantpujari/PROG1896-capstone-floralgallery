<!-- Navbar -->
<nav x-data="{ isOpen: false }" class="relative bg-white shadow md:px-8 lg:px-12">
    <div class="container px-4 py-4 mx-auto pb-6 mt-1">
        <div class="lg:flex lg:items-center lg:justify-between">
            <div class="flex items-center justify-between mt-1">
                <a href="{{route('home')}}" class="text-2xl font-semibold subpixel-antialiased">
                    <span class="text-pink-500">Floral</span
                    ><span class="text-black">Gallery</span>
                </a>

                <!-- Mobile menu button -->
                <div class="flex lg:hidden">
                    <button
                        x-cloak
                        @click="isOpen = !isOpen"
                        type="button"
                        class="text-gray-600 hover:text-gray-600 dark:hover:text-gray-400 focus:outline-none focus:text-gray-600 dark:focus:text-gray-400"
                        aria-label="toggle menu"
                    >
                        <svg
                            x-show="!isOpen" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor"stroke-width="2" class="sidebarBtn w-6 h-6"
                            onclick="openSidebar()"
                        >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                d="M4 8h16M4 16h16"
                            />
                        </svg>

                        <svg
                            x-show="isOpen" xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" 
                            viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"
                            onclick="closeSidebar()"
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
        </div>
    </div>
</nav>