<!-- Navbar -->
<nav x-data="{ isOpen: false }" class="relative bg-white shadow md:px-8 lg:px-12">
    <div class="container px-4 py-4 mx-auto pb-6 mt-1">
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
                class="absolute inset-x-0 z-20 w-full px-4 py-4 transition-all duration-300 ease-in-out bg-white lg:mt-0 lg:p-0 lg:top-0 lg:relative lg:bg-transparent lg:w-auto lg:opacity-100 lg:translate-x-0 lg:flex lg:items-center"
            >
                <form action="{{route('search')}}" method="post">
                    @csrf
                    <div class="pt-2 relative text-gray-600 lg:ml-8 order-last mx-6 md:mx-10">
                        <input
                            class="w-full lg:w-96 border-2 border-gray-300 bg-white h-10 px-5 rounded-lg text-sm focus-within:ring focus-within:ring-opacity-40 focus-within:ring-pink-300 outline-none focus:border-white"
                            type="search" name="search" title="Search Flowers"
                            placeholder="Search Flowers"
                        />

                        <button type="submit" class="absolute top-0 right-4 mt-5">
                            <svg
                                class="text-gray-600 h-4 w-4 fill-current"
                                xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink"
                                version="1.1"
                                id="Capa_1"
                                x="0px"
                                y="0px"
                                viewBox="0 0 56.966 56.966"
                                style="enable-background: new 0 0 56.966 56.966;"
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
                
                <div class="flex flex-col lg:flex-row items-end lg:mx-8 mx-4">

                    <a href="{{route('home')}}" class="px-3 py-2 mx-3 mt-2 text-black transition-colors duration-300 transform rounded-md lg:mt-0 {{Request::routeIs('home') ? 'active' : ''}} hover:text-white hover:bg-gray-700">
                        Home
                    </a>

                    <a href="{{route('about_us')}}" class="px-3 py-2 mx-3 mt-2 text-black transition-colors duration-300 transform rounded-md lg:mt-0 {{Request::routeIs('about_us') ? 'active' : ''}} hover:text-white hover:bg-gray-700">
                        About Us
                    </a>

                    <a href="{{route('contact_us')}}" class="px-3 py-2 mx-3 mt-2 text-black transition-colors duration-300 transform rounded-md lg:mt-0 {{Request::routeIs('contact_us') ? 'active' : ''}} hover:text-white hover:bg-gray-700">
                        Contact Us
                    </a>

                    @auth('admin')

                        <a href="{{route('admin.dashboard')}}" class="flex gap-2 px-3 py-2 mx-3 mt-2 text-black transition-colors duration-300 transform rounded-md lg:mt-0 dark:text-black hover:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 7.125C2.25 6.504 2.754 6 3.375 6h6c.621 0 1.125.504 1.125 1.125v3.75c0 .621-.504 1.125-1.125 1.125h-6a1.125 1.125 0 01-1.125-1.125v-3.75zM14.25 8.625c0-.621.504-1.125 1.125-1.125h5.25c.621 0 1.125.504 1.125 1.125v8.25c0 .621-.504 1.125-1.125 1.125h-5.25a1.125 1.125 0 01-1.125-1.125v-8.25zM3.75 16.125c0-.621.504-1.125 1.125-1.125h5.25c.621 0 1.125.504 1.125 1.125v2.25c0 .621-.504 1.125-1.125 1.125h-5.25a1.125 1.125 0 01-1.125-1.125v-2.25z" />
                            </svg>
                            Dashboard
                        </a>

                    @elseauth('seller')

                        <a href="{{route('seller.dashboard')}}" class="flex gap-2 px-3 py-2 mx-3 mt-2 text-black transition-colors duration-300 transform rounded-md lg:mt-0 dark:text-black hover:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 7.125C2.25 6.504 2.754 6 3.375 6h6c.621 0 1.125.504 1.125 1.125v3.75c0 .621-.504 1.125-1.125 1.125h-6a1.125 1.125 0 01-1.125-1.125v-3.75zM14.25 8.625c0-.621.504-1.125 1.125-1.125h5.25c.621 0 1.125.504 1.125 1.125v8.25c0 .621-.504 1.125-1.125 1.125h-5.25a1.125 1.125 0 01-1.125-1.125v-8.25zM3.75 16.125c0-.621.504-1.125 1.125-1.125h5.25c.621 0 1.125.504 1.125 1.125v2.25c0 .621-.504 1.125-1.125 1.125h-5.25a1.125 1.125 0 01-1.125-1.125v-2.25z" />
                            </svg>
                            Dashboard
                        </a>

                    @else

                        @guest

                            <a href="{{route('cart')}}" class="flex gap-2 px-3 py-2 mx-3 mt-2 text-black transition-colors duration-300 transform rounded-md lg:mt-0 {{Request::routeIs('cart') ? 'active' : ''}} hover:text-white hover:bg-gray-700">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 10.5V6a3.75 3.75 0 10-7.5 0v4.5m11.356-1.993l1.263 12c.07.665-.45 1.243-1.119 1.243H4.25a1.125 1.125 0 01-1.12-1.243l1.264-12A1.125 1.125 0 015.513 7.5h12.974c.576 0 1.059.435 1.119 1.007zM8.625 10.5a.375.375 0 11-.75 0 .375.375 0 01.75 0zm7.5 0a.375.375 0 11-.75 0 .375.375 0 01.75 0z" />
                                </svg>
                                Cart
                            </a>

                            <a href="{{route('login')}}" class="flex gap-2 px-3 py-2 mx-3 mt-2 text-black transition-colors duration-300 transform rounded-md lg:mt-0 dark:text-black hover:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                                    <path fill-rule="evenodd" d="M7.5 6a4.5 4.5 0 119 0 4.5 4.5 0 01-9 0zM3.751 20.105a8.25 8.25 0 0116.498 0 .75.75 0 01-.437.695A18.683 18.683 0 0112 22.5c-2.786 0-5.433-.608-7.812-1.7a.75.75 0 01-.437-.695z" clip-rule="evenodd"/>
                                </svg>
                                Sign In
                            </a>

                        @endguest

                    @endauth
                    

                    @auth

                        <!-- Profile Dropdown -->
                        <div class="flex items-center mt-4 lg:mt-0">
                            <div
                                x-data="{ isOpen: true }"
                                class="relative inline-block"
                            >
                                <button @click="isOpen = !isOpen" class="relative z-10 flex items-center p-2 text-black transition-colors duration-300 transform rounded-md lg:mt-0 dark:text-black hover:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
                                    <span class="mx-1">
                                        {{ Str::upper(Str::limit(Auth::user()->first_name, 10)) }}
                                    </span>
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
                                    class="absolute right-0 z-20 w-64 py-2 mt-2 overflow-hidden origin-top-right bg-white rounded-md shadow-xl"
                                >
                                    <a
                                        href="#" title="{{Auth::user()->first_name}} {{Auth::user()->last_name}}"
                                        class="flex items-center p-3 -mt-2 text-gray-600 transition-colors duration-300 transform hover:bg-gray-700 hover:text-gray-200"
                                    >
                                        <img
                                            class="flex-shrink-0 object-cover mx-1 rounded-full w-9 h-9"
                                            src="https://ui-avatars.com/api/?name={{Auth::user()->first_name}}+{{Auth::user()->last_name}}"
                                            alt="{{Auth::user()->first_name}}"
                                        />
                                        <div class="mx-1">
                                            <h1 class="text-lg md:text-md lg:text-sm font-semibold">
                                                {{ Str::upper(Str::limit(Auth::user()->first_name, 16)) }}
                                            </h1>
                                            <span class="text-sm font-medium text-pink-400">
                                                {{ Str::lower(Str::limit(Auth::user()->email, 22)) }}
                                            </span>
                                        </div>
                                    </a>

                                    <hr class="border-gray-300" />

                                    <a href="{{route('profile.edit')}}" class="block px-4 py-3 text-sm capitalize transition-colors duration-300 transform text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-700 dark:hover:text-white">
                                        Manage profile
                                    </a>

                                    <a href="#" class="block px-4 py-3 text-sm capitalize transition-colors duration-300 transform text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-700 dark:hover:text-white">
                                        Order History
                                    </a>

                                    <hr class="border-gray-300" />

                                    <form method="POST" action="{{ route('logout') }}">
                                        @csrf
                                        <a href="route('logout')" onclick="event.preventDefault(); this.closest('form').submit();"
                                            class="block px-4 py-3 -mb-2 text-sm capitalize transition-colors duration-300 transform text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-700 dark:hover:text-white">
                                            Sign Out
                                        </a>
                                    </form>
                                </div>
                            </div>
                        </div>
                    @endauth
                </div>
            </div>
        </div>
    </div>
</nav>