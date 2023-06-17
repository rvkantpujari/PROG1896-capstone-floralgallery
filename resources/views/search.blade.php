@extends('layout.default')

@section('title', 'Search Results - FlowerGallery')

@section('main-content')
    <!-- Search Results -->
    @isset($search)
        <section class="text-gray-600 body-font mx-12 my-12 lg:mx-40">
            <div class="container px-5 mx-auto lg:mb-28">
                <div class="flex flex-wrap w-full mb-16">
                    <div class="lg:w-1/2 w-full mb-6 lg:mb-0">
                        <h1 class="sm:text-3xl text-2xl font-medium title-font mb-2 text-gray-900">
                                Search Results for: {{$search}}
                        </h1>
                        <div class="h-1 w-20 bg-pink-500 rounded"></div>
                    </div>
                </div>
            </div>
        </section>
    @endisset

    <section class="mt-32 mb-20 text-gray-600 body-font lg:mx-32 mx-auto">
        <div
            class="w-full container px-5 flex flex-col lg:flex-row gap-x-8"
        >
            <div class="lg:w-1/4 space-y-2 -mt-12 mx-8 md:mx-32 lg:mx-0">
                <form>
                    <details class="my-2 overflow-hidden rounded border border-gray-300 [&_summary::-webkit-details-marker]:hidden">
                        <summary class="flex cursor-pointer items-center justify-between gap-2 bg-white p-4 text-gray-900 transition duration-300">
                            <span class="text-sm font-medium">
                                Availability
                            </span>

                            <span class="transition group-open:-rotate-180">
                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    fill="none"
                                    viewBox="0 0 24 24"
                                    stroke-width="1.5"
                                    stroke="currentColor"
                                    class="h-4 w-4"
                                >
                                    <path
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        d="M19.5 8.25l-7.5 7.5-7.5-7.5"
                                    />
                                </svg>
                            </span>
                        </summary>

                        <div class="border-t border-gray-200 bg-white">
                            <header
                                class="flex items-center justify-between p-4"
                            >
                                <span class="text-sm text-gray-700">
                                    0 Selected
                                </span>

                                <button
                                    type="reset"
                                    class="text-sm text-gray-900 underline underline-offset-4"
                                >
                                    Reset
                                </button>
                            </header>

                            <ul
                                class="space-y-1 border-t border-gray-200 p-4"
                            >
                                <li>
                                    <label
                                        for="FilterInStock"
                                        class="inline-flex items-center gap-2"
                                    >
                                        <input
                                            type="checkbox"
                                            id="FilterInStock"
                                            class="h-5 w-5 rounded border-gray-300"
                                        />

                                        <span
                                            class="text-sm font-medium text-gray-700"
                                        >
                                            In Stock (5+)
                                        </span>
                                    </label>
                                </li>

                                <li>
                                    <label
                                        for="FilterPreOrder"
                                        class="inline-flex items-center gap-2"
                                    >
                                        <input
                                            type="checkbox"
                                            id="FilterPreOrder"
                                            class="h-5 w-5 rounded border-gray-300"
                                        />

                                        <span
                                            class="text-sm font-medium text-gray-700"
                                        >
                                            Pre Order (3+)
                                        </span>
                                    </label>
                                </li>

                                <li>
                                    <label
                                        for="FilterOutOfStock"
                                        class="inline-flex items-center gap-2"
                                    >
                                        <input
                                            type="checkbox"
                                            id="FilterOutOfStock"
                                            class="h-5 w-5 rounded border-gray-300"
                                        />

                                        <span
                                            class="text-sm font-medium text-gray-700"
                                        >
                                            Out of Stock (10+)
                                        </span>
                                    </label>
                                </li>
                            </ul>
                        </div>
                    </details>

                    <details class="my-2 overflow-hidden rounded border border-gray-300 [&_summary::-webkit-details-marker]:hidden">
                        <summary class="flex cursor-pointer items-center justify-between gap-2 bg-white p-4 text-gray-900 transition duration-300">
                            <span class="text-sm font-medium"> Price </span>

                            <span class="transition group-open:-rotate-180">
                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    fill="none"
                                    viewBox="0 0 24 24"
                                    stroke-width="1.5"
                                    stroke="currentColor"
                                    class="h-4 w-4"
                                >
                                    <path
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        d="M19.5 8.25l-7.5 7.5-7.5-7.5"
                                    />
                                </svg>
                            </span>
                        </summary>

                        <div class="border-t border-gray-200 bg-white">
                            <header
                                class="flex items-center justify-between p-4"
                            >
                                <span class="text-sm text-gray-700">
                                    The highest price is $600
                                </span>

                                <button
                                    type="button"
                                    class="text-sm text-gray-900 underline underline-offset-4"
                                >
                                    Reset
                                </button>
                            </header>

                            <div class="border-t border-gray-200 p-4">
                                <div class="flex justify-between gap-4">
                                    <label
                                        for="FilterPriceFrom"
                                        class="flex items-center gap-2"
                                    >
                                        <span class="text-sm text-gray-600"
                                            >$</span
                                        >

                                        <input
                                            type="number"
                                            min="0"
                                            id="FilterPriceFrom"
                                            placeholder="From"
                                            class="w-full rounded-md border-gray-200 shadow-sm sm:text-sm"
                                        />
                                    </label>

                                    <label
                                        for="FilterPriceTo"
                                        class="flex items-center gap-2"
                                    >
                                        <span class="text-sm text-gray-600"
                                            >$</span
                                        >

                                        <input
                                            type="number"
                                            min="0"
                                            id="FilterPriceTo"
                                            placeholder="To"
                                            class="w-full rounded-md border-gray-200 shadow-sm sm:text-sm"
                                        />
                                    </label>
                                </div>
                            </div>
                        </div>
                    </details>

                    <button
                        type="submit"
                        class="rounded-full bg-blue-500 text-white px-10 py-2 my-4"
                    >
                        Apply
                    </button>
                </form>
            </div>
            <div
                class="mt-12 mx-12 md:mx-16 lg:mx-0 lg:-mt-16 lg:w-3/4 flex flex-wrap"
            >
                <div class="lg:w-1/3 md:w-1/2 p-4 w-full hover:font-bold">
                    <a
                        href="#"
                        class="block relative h-48 rounded overflow-hidden hover:scale-105"
                    >
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
                            Purple Flower
                        </h2>
                        <p class="mt-1">$16.00</p>
                    </div>
                </div>
                <div class="lg:w-1/3 md:w-1/2 p-4 w-full hover:font-bold">
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
                            Pink Flower
                        </h2>
                        <p class="mt-1">$16.00</p>
                    </div>
                </div>
                <div class="lg:w-1/3 md:w-1/2 p-4 w-full hover:font-bold">
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
                <div class="lg:w-1/3 md:w-1/2 p-4 w-full hover:font-bold">
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
                <div class="lg:w-1/3 md:w-1/2 p-4 w-full hover:font-bold">
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
                <div class="lg:w-1/3 md:w-1/2 p-4 w-full hover:font-bold">
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
                <div class="lg:w-1/3 md:w-1/2 p-4 w-full hover:font-bold">
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
                <div class="lg:w-1/3 md:w-1/2 p-4 w-full hover:font-bold">
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
                            Pink Flower
                        </h2>
                        <p class="mt-1">$16.00</p>
                    </div>
                </div>
            </div>
        </div>
    </section>    
@endsection
