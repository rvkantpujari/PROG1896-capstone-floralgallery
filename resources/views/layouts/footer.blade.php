<!-- Footer -->
<footer class="text-gray-600 bg-white body-font">
    <div class="container py-12 lg:pl-24 mx-auto flex md:items-center lg:items-start md:flex-row md:flex-nowrap flex-wrap flex-col lg:pt-12 lg:pb-16 border-t-2">
        <div class="lg:w-1/4 md:w-1/3 w-full flex-shrink-0 md:mx-0 mx-auto text-center md:text-left md:mt-0 mt-10">
            <a href="{{route('home')}}" class="flex title-font font-medium items-center md:justify-start justify-center text-gray-900 text-3xl">
                <span class="text-pink-500 font-semibold">Floral</span>
                <span class="text-black font-semibold">Gallery</span>
            </a>
            <p class="mt-2 text-gray-500 capitalize tracking-wider">
                Flowers for all occasions
            </p>
        </div>
        <div class="lg:w-3/4 md:w-2/3 flex flex-grow flex-wrap gap-y-4 md:-ml-12 -mb-10 text-center lg:text-left lg:pl-20 order-first md:order-last">
            <div class="lg:w-1/3 md:w-1/3 w-full px-4 md:px-2">
                <h2 class="title-font font-semibold uppercase text-gray-900 tracking-widest text-sm mb-3">
                    Quick Links
                </h2>
                <nav class="list-none mt-6 mb-10 flex flex-col gap-y-2">
                    <li>
                        <a href="{{route('about_us')}}" class="text-gray-600 hover:text-gray-800">
                            About Us
                        </a>
                    </li>
                    <li>
                        <a href="{{route('contact_us')}}" class="text-gray-600 hover:text-gray-800">
                            Contact Us
                        </a>
                    </li>
                    <li>
                        <a href="#" class="text-gray-600 hover:text-gray-800">
                            Privacy Policy
                        </a>
                    </li>
                </nav>
            </div>
            <div class="lg:w-1/3 md:w-1/3 w-full px-4 md:px-2">
                <h2 class="title-font font-semibold uppercase text-gray-900 tracking-widest text-sm mb-3">
                    Connect with Us
                </h2>
                <nav class="list-none mt-6 mb-10 flex flex-col gap-y-2">
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
            <div class="lg:w-1/3 md:w-1/3 w-full px-4 md:px-2">
                <h2 class="title-font font-semibold uppercase text-gray-900 tracking-widest text-sm mb-3">
                    For Members
                </h2>
                <nav class="list-none mt-6 mb-10 flex flex-col gap-y-2">
                    @auth('admin')
                        <li>
                            <form method="POST" action="{{ route('admin.logout') }}">
                                @csrf
                                <a href="{{route('admin.logout')}}"  onclick="event.preventDefault(); this.closest('form').submit();"
                                    class="text-gray-600 hover:text-gray-800">
                                    Logout
                                </a>
                            </form>
                        </li>
                    @elseauth('seller')
                        <li>
                            <form method="POST" action="{{route('seller.logout')}}">
                                @csrf
                                <a href="{{route('seller.logout')}}"  onclick="event.preventDefault(); this.closest('form').submit();"
                                    class="text-gray-600 hover:text-gray-800">
                                    Logout
                                </a>
                            </form>
                        </li>
                    @else
                        @auth
                            <li>
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <a href="{{route('logout')}}"  onclick="event.preventDefault(); this.closest('form').submit();"
                                        class="text-gray-600 hover:text-gray-800">
                                        Logout
                                    </a>
                                </form>
                            </li>
                        @endauth
                        @guest
                            <li class="flex flex-col gap-y-2">
                                <a href="{{route('admin.login')}}" class="text-gray-600 hover:text-gray-800">
                                    Admin Sign In
                                </a>
                                <a href="{{route('seller.login')}}" class="text-gray-600 hover:text-gray-800">
                                    Seller Sign In
                                </a>
                            </li>
                        @endguest
                    @endauth
                </nav>
            </div>
        </div>
    </div>
    <div class="bg-[#1e3050]">
        <div class="container py-4 flex flex-wrap flex-col md:flex-row md:justify-around lg:flex-row lg:justify-between">
            <p class="text-white text-sm text-center sm:text-left lg:pl-12">
                © {{now()->year}} All rights reserved.
            </p>
            <span class="flex sm:mt-0 mt-2 justify-center sm:justify-start lg:pr-12 text-white">
                Designed &amp; Developed with ❤
            </span>
        </div>
    </div>
</footer>