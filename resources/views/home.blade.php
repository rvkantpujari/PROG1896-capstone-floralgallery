@extends('layout.default')

@section('title', 'FlowerGallery - Flowers for all occasions')

@section('main-content')
    <!-- Carousel -->
    <article x-data="slider" class="relative w-full flex flex-shrink-0 overflow-hidden shadow-2xl">
        <template x-for="(image, index) in images">
            <figure
                class="h-screen"
                x-show="currentIndex == index + 1"
                x-transition:enter="transition transform duration-300"
                x-transition:enter-start="opacity-0"
                x-transition:enter-end="opacity-100"
                x-transition:leave="transition transform duration-300"
                x-transition:leave-start="opacity-100"
                x-transition:leave-end="opacity-0"
            >
                <img
                    :src="image"
                    alt="Image"
                    class="absolute inset-0 z-10 h-full w-full object-cover object-center lg:object-left opacity-70"
                />
            </figure>
        </template>

        <button
            @click="back()"
            class="absolute left-14 top-1/2 -translate-y-1/2 w-11 h-11 flex justify-center items-center rounded-full shadow-md z-10 bg-gray-100 hover:bg-gray-200 collapse md:collapse lg:visible"
        >
            <svg
                class="w-8 h-8 font-bold transition duration-500 ease-in-out transform motion-reduce:transform-none text-gray-500 hover:text-gray-600 hover:-translate-x-0.5"
                fill="none"
                stroke="currentColor"
                viewBox="0 0 24 24"
                xmlns="http://www.w3.org/2000/svg"
            >
                <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    stroke-width="2.5"
                    d="M15 19l-7-7 7-7"
                ></path>
            </svg>
        </button>

        <button
            @click="next()"
            class="absolute -my-10 right-14 top-1/2 translate-y-1/2 w-11 h-11 flex justify-center items-center rounded-full shadow-md z-10 bg-gray-100 hover:bg-gray-200 collapse md:collapse lg:visible"
        >
            <svg
                class="w-8 h-8 font-bold transition duration-500 ease-in-out transform motion-reduce:transform-none text-gray-500 hover:text-gray-600 hover:translate-x-0.5"
                fill="none"
                stroke="currentColor"
                viewBox="0 0 24 24"
                xmlns="http://www.w3.org/2000/svg"
            >
                <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    stroke-width="2.5"
                    d="M9 5l7 7-7 7"
                ></path>
            </svg>
        </button>
    </article>

    <!-- Products -->
    <section class="text-gray-600 body-font m-24 lg:mx-40 lg:mx24">
        <div class="container px-5 mx-auto lg:mb-28">
            <div class="flex flex-wrap flex-row w-full mb-16 justify-between">
                <div class="lg:w-1/2 w-full mb-6 lg:mb-0">
                    <h1 class="sm:text-3xl text-2xl font-medium title-font mb-2 text-gray-900">
                        Flowers 🌺
                    </h1>
                    <div class="h-1 w-20 bg-pink-500 rounded"></div>
                </div>
                <span>
                    {{-- <a href="{{url('/search')}}" class="lg:w-1/2 text-right w-full leading-relaxed text-gray-500 hover:text-blue-600">
                        More Products
                    </a> --}}
                    <form method="get" action="{{url('/search')}}">
                        <button type="submit" class="hover:text-pink-500">
                            More Products
                        </button>
                    </form>
                </span>
            </div>
        </div>
        <div class="container px-5 mx-auto">
            <div class="flex flex-wrap -m-16">
                <div class="lg:w-1/4 md:w-1/2 p-4 w-full hover:font-bold">
                    <a href="#" class="block relative h-48 rounded overflow-hidden hover:scale-105">
                        <img
                            alt="ecommerce"
                            class="object-cover object-center w-full h-full block"
                            src="/assets/images/flower-56414_640.jpg"
                        />
                    </a>
                    <div class="mt-4">
                        <h3
                            class="text-gray-500 text-xs tracking-widest title-font mb-1"
                        >
                            Flower
                        </h3>
                        <h2
                            class="text-gray-900 title-font text-lg font-medium"
                        >
                            Anemone Flower
                        </h2>
                        <p class="mt-1">$16.00</p>
                    </div>
                </div>
                <div class="lg:w-1/4 md:w-1/2 p-4 w-full hover:font-bold">
                    <a
                        href="#"
                        class="block relative h-48 rounded overflow-hidden hover:scale-105"
                    >
                        <img
                            alt="ecommerce"
                            class="object-cover object-center w-full h-full block"
                            src="/assets/images/flower-729512_640.jpg"
                        />
                    </a>
                    <div class="mt-4">
                        <h3
                            class="text-gray-500 text-xs tracking-widest title-font mb-1"
                        >
                            Flower
                        </h3>
                        <h2
                            class="text-gray-900 title-font text-lg font-medium"
                        >
                            Purple Daisy
                        </h2>
                        <p class="mt-1">$8.50</p>
                    </div>
                </div>
                <div class="lg:w-1/4 md:w-1/2 p-4 w-full hover:font-bold">
                    <a
                        href="#"
                        class="block relative h-48 rounded overflow-hidden hover:scale-105"
                    >
                        <img
                            alt="ecommerce"
                            class="object-cover object-center w-full h-full block"
                            src="/assets/images/lotus-978659_640.jpg"
                        />
                    </a>
                    <div class="mt-4">
                        <h3
                            class="text-gray-500 text-xs tracking-widest title-font mb-1"
                        >
                            Flower
                        </h3>
                        <h2
                            class="text-gray-900 title-font text-lg font-medium"
                        >
                            Lotus
                        </h2>
                        <p class="mt-1">$11.00</p>
                    </div>
                </div>
                <div class="lg:w-1/4 md:w-1/2 p-4 w-full hover:font-bold">
                    <a
                        href="#"
                        class="block relative h-48 rounded overflow-hidden hover:scale-105"
                    >
                        <img
                            alt="ecommerce"
                            class="object-cover object-center w-full h-full block"
                            src="/assets/images/rose-3063284_640.jpg"
                        />
                    </a>
                    <div class="mt-4">
                        <h3
                            class="text-gray-500 text-xs tracking-widest title-font mb-1"
                        >
                            Flower
                        </h3>
                        <h2
                            class="text-gray-900 title-font text-lg font-medium"
                        >
                            Golden Rose
                        </h2>
                        <p class="mt-1">$16.00</p>
                    </div>
                </div>
                <div class="lg:w-1/4 md:w-1/2 p-4 w-full hover:font-bold">
                    <a
                        href="#"
                        class="block relative h-48 rounded overflow-hidden hover:scale-105"
                    >
                        <img
                            alt="ecommerce"
                            class="object-cover object-center w-full h-full block"
                            src="/assets/images/lotus-978659_640.jpg"
                        />
                    </a>
                    <div class="mt-4">
                        <h3
                            class="text-gray-500 text-xs tracking-widest title-font mb-1"
                        >
                            Flower
                        </h3>
                        <h2
                            class="text-gray-900 title-font text-lg font-medium"
                        >
                            Lotus
                        </h2>
                        <p class="mt-1">$11.00</p>
                    </div>
                </div>
                <div class="lg:w-1/4 md:w-1/2 p-4 w-full hover:font-bold">
                    <a
                        href="#"
                        class="block relative h-48 rounded overflow-hidden hover:scale-105"
                    >
                        <img
                            alt="ecommerce"
                            class="object-cover object-center w-full h-full block"
                            src="/assets/images/rose-729509_640.jpg"
                        />
                    </a>
                    <div class="mt-4">
                        <h3
                            class="text-gray-500 text-xs tracking-widest title-font mb-1"
                        >
                            Flower
                        </h3>
                        <h2
                            class="text-gray-900 title-font text-lg font-medium"
                        >
                            Pink Rose
                        </h2>
                        <p class="mt-1">$16.00</p>
                    </div>
                </div>
                <div class="lg:w-1/4 md:w-1/2 p-4 w-full hover:font-bold">
                    <a
                        href="#"
                        class="block relative h-48 rounded overflow-hidden hover:scale-105"
                    >
                        <img
                            alt="ecommerce"
                            class="object-cover object-center w-full h-full block"
                            src="/assets/images/rose-3063284_640.jpg"
                        />
                    </a>
                    <div class="mt-4">
                        <h3
                            class="text-gray-500 text-xs tracking-widest title-font mb-1"
                        >
                            Flower
                        </h3>
                        <h2
                            class="text-gray-900 title-font text-lg font-medium"
                        >
                            Golden Rose
                        </h2>
                        <p class="mt-1">$16.00</p>
                    </div>
                </div>
                <div class="lg:w-1/4 md:w-1/2 p-4 w-full hover:font-bold">
                    <a
                        href="#"
                        class="block relative h-48 rounded overflow-hidden hover:scale-105"
                    >
                        <img
                            alt="ecommerce"
                            class="object-cover object-center w-full h-full block"
                            src="/assets/images/flower-729512_640.jpg"
                        />
                    </a>
                    <div class="mt-4">
                        <h3
                            class="text-gray-500 text-xs tracking-widest title-font mb-1"
                        >
                            Flower
                        </h3>
                        <h2
                            class="text-gray-900 title-font text-lg font-medium"
                        >
                            Purple Daisy
                        </h2>
                        <p class="mt-1">$8.50</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Newsletter -->
    <div class="text-center text-3xl font-semibold lg:mt-40">
        Newsletter
    </div>
    <section
        class="mt-12 mb-20 flex flex-col mx-8 max-w-4xl lg:mx-auto overflow-hidden bg-white rounded-lg shadow-lg dark:bg-gray-800 md:flex-row md:h-48"
    >
        <div
            class="md:flex md:items-center md:justify-center md:w-1/2 bg-[#1e3050]"
        >
            <div class="px-6 py-6 md:px-8 md:py-0">
                <h2
                    class="text-lg font-bold text-gray-700 dark:text-white md:text-gray-100"
                >
                    Sign Up For
                    <span
                        class="text-blue-600 capitalize dark:text-blue-400 md:text-blue-300"
                        >Latest products</span
                    >
                    Updates
                </h2>

                <p
                    class="mt-2 text-sm text-gray-600 dark:text-gray-400 md:text-gray-400"
                >
                    Be the first to get notified. FREE!!! 😎
                </p>
            </div>
        </div>

        <div
            class="flex items-center justify-center pb-6 md:py-0 md:w-1/2 bg-white"
        >
            <form>
                <div
                    class="mt-8 lg:mt-0 flex flex-col p-1.5 overflow-hidden border rounded-lg lg:flex-row focus-within:ring focus-within:ring-opacity-40 focus-within:ring-pink-300 outline-none focus:border-white"
                >
                    <input
                        class="px-6 py-2 text-gray-700 placeholder-gray-500 bg-white outline-none"
                        type="text"
                        name="email"
                        placeholder="Enter your email"
                        aria-label="Enter your email"
                    />

                    <button
                        class="px-4 py-3 text-sm font-medium tracking-wider text-gray-100 uppercase transition-colors duration-300 transform bg-gray-700 rounded-md hover:bg-gray-600 focus:bg-gray-600 focus:outline-none"
                    >
                        subscribe
                    </button>
                </div>
            </form>
        </div>
    </section>
@endsection

@section('js-scripts')
    <!-- JavaScript -->
    <script>
        document.addEventListener("alpine:init", () => {
            Alpine.data("slider", () => ({
                currentIndex: 1,
                images: [
                    "assets/images/andrew-small-EfhCUc_fjrU-unsplash.jpg",
                    "assets/images/pawel-czerwinski-Gmxbaiph-YE-unsplash.jpg",
                    "assets/images/pawel-czerwinski-rxdNnhMPRGE-unsplash.jpg",
                ],
                back() {
                    if (this.currentIndex > 1) {
                        this.currentIndex = this.currentIndex - 1;
                    }
                },
                next() {
                    if (this.currentIndex < this.images.length) {
                        this.currentIndex = this.currentIndex + 1;
                    } else if (this.currentIndex <= this.images.length) {
                        this.currentIndex =
                            this.images.length - this.currentIndex + 1;
                    }
                },
            }));
        });
    </script>
@endsection