<!-- Footer -->
<footer class="text-gray-600 bg-white body-font">
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
                © {{now()->year}} All rights reserved.
            </p>
            <span class="flex sm:mt-0 mt-2 justify-center sm:justify-start lg:pr-12 text-white">
                Designed &amp; Developed with ❤
            </span>
        </div>
    </div>
</footer>