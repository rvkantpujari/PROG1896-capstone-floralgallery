@extends('layout.default')

@section('title', 'Your Cart - FlowerGallery')

@section('main-content')
    <!-- Cart -->
    <div class="bg-white py-12 px-8 lg:py-12">
        <div class="mx-auto max-w-screen-lg px-4 md:px-8">
            <div class="mb-6 sm:mb-10 lg:mb-16">
                <h2
                    class="mb-4 text-center text-2xl font-bold text-gray-800 md:mb-6 lg:text-3xl"
                >
                    Your Cart
                </h2>
            </div>

            <div class="mb-5 flex flex-col mb-8 divide-y border-t border-b">
                <!-- product - start -->
                <div class="py-5 py-8">
                    <div class="flex flex-wrap gap-4 py-2.5 lg:gap-6">
                        <div class="-my-2.5">
                            <a
                                href="#"
                                class="group relative block h-40 w-40 md:w-64 lg:w-80 overflow-hidden rounded-lg bg-gray-100 sm:h-56 sm:w-40"
                            >
                                <img
                                    src="./assets/images/lotus-978659_640.jpg"
                                    loading="lazy"
                                    alt="Lotus"
                                    class="h-full w-full object-cover object-center transition duration-200 group-hover:scale-110"
                                />
                            </a>
                        </div>

                        <div class="flex flex-1 flex-col justify-between">
                            <div>
                                <div
                                    class="md:text-2xl lg:text-3xl font-bold"
                                >
                                    Product
                                </div>
                                <a
                                    href="#"
                                    class="mb-1 inline-block text-lg font-bold text-pink-500 transition duration-100 hover:text-gray-500 lg:text-2xl"
                                >
                                    Lotus
                                </a>
                            </div>

                            <div>
                                <span
                                    class="mb-1 block font-bold text-gray-800 md:text-lg lg:text-2xl"
                                >
                                    $11.00
                                </span>

                                <span
                                    class="flex items-center gap-1 text-sm text-gray-500"
                                >
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        class="h-5 w-5 text-green-500"
                                        fill="none"
                                        viewBox="0 0 24 24"
                                        stroke="currentColor"
                                    >
                                        <path
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            stroke-width="2"
                                            d="M5 13l4 4L19 7"
                                        />
                                    </svg>

                                    In stock
                                </span>
                            </div>
                        </div>

                        <div
                            class="flex w-full justify-between border-t pt-4 lg:w-auto border-none lg:pt-0"
                        >
                            <div class="flex flex-col items-start gap-2">
                                <div
                                    class="flex h-12 w-20 overflow-hidden rounded border"
                                >
                                    <input
                                        type="text"
                                        value="1"
                                        class="w-full px-4 py-2 outline-none ring-inset ring-indigo-300 transition duration-100 focus:ring"
                                    />

                                    <div
                                        class="flex flex-col divide-y border-l"
                                    >
                                        <button
                                            class="flex w-6 flex-1 select-none items-center justify-center bg-white leading-none transition duration-100 hover:bg-gray-100 active:bg-gray-200"
                                        >
                                            +
                                        </button>
                                        <button
                                            class="flex w-6 flex-1 select-none items-center justify-center bg-white leading-none transition duration-100 hover:bg-gray-100 active:bg-gray-200"
                                        >
                                            -
                                        </button>
                                    </div>
                                </div>

                                <button
                                    class="select-none text-sm font-semibold text-indigo-500 transition duration-100 hover:text-indigo-600 active:text-indigo-700"
                                >
                                    Delete
                                </button>
                            </div>

                            <div class="ml-4 pt-3 sm:pt-2 md:ml-8 lg:ml-16">
                                <span
                                    class="block font-bold text-gray-800 md:text-lg lg:text-2xl"
                                    >$11.00</span
                                >
                            </div>
                        </div>
                    </div>
                </div>
                <!-- product - end -->

                <!-- product - start -->
                <div class="py-5 py-8">
                    <div class="flex flex-wrap gap-4 py-2.5 lg:gap-6">
                        <div class="-my-2.5">
                            <a
                                href="#"
                                class="group relative block h-40 w-40 md:w-64 lg:w-80 overflow-hidden rounded-lg bg-gray-100 sm:h-56 sm:w-40"
                            >
                                <img
                                    src="./assets/images/rose-3063284_640.jpg"
                                    loading="lazy"
                                    alt="Lotus"
                                    class="h-full w-full object-cover object-center transition duration-200 group-hover:scale-110"
                                />
                            </a>
                        </div>

                        <div class="flex flex-1 flex-col justify-between">
                            <div>
                                <div
                                    class="md:text-2xl lg:text-3xl font-bold"
                                >
                                    Product
                                </div>
                                <a
                                    href="#"
                                    class="mb-1 inline-block text-lg font-bold text-pink-500 transition duration-100 hover:text-gray-500 lg:text-2xl"
                                >
                                    Golden Rose
                                </a>
                            </div>

                            <div>
                                <span
                                    class="mb-1 block font-bold text-gray-800 md:text-lg lg:text-2xl"
                                >
                                    $16.00
                                </span>

                                <span
                                    class="flex items-center gap-1 text-sm text-gray-500"
                                >
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        class="h-5 w-5 text-green-500"
                                        fill="none"
                                        viewBox="0 0 24 24"
                                        stroke="currentColor"
                                    >
                                        <path
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            stroke-width="2"
                                            d="M5 13l4 4L19 7"
                                        />
                                    </svg>
                                    In stock
                                </span>
                            </div>
                        </div>

                        <div
                            class="flex w-full justify-between border-t pt-4 lg:w-auto border-none lg:pt-0"
                        >
                            <div class="flex flex-col items-start gap-2">
                                <div
                                    class="flex h-12 w-20 overflow-hidden rounded border"
                                >
                                    <input
                                        type="text"
                                        value="1"
                                        class="w-full px-4 py-2 outline-none ring-inset ring-indigo-300 transition duration-100 focus:ring"
                                    />

                                    <div
                                        class="flex flex-col divide-y border-l"
                                    >
                                        <button
                                            class="flex w-6 flex-1 select-none items-center justify-center bg-white leading-none transition duration-100 hover:bg-gray-100 active:bg-gray-200"
                                        >
                                            +
                                        </button>
                                        <button
                                            class="flex w-6 flex-1 select-none items-center justify-center bg-white leading-none transition duration-100 hover:bg-gray-100 active:bg-gray-200"
                                        >
                                            -
                                        </button>
                                    </div>
                                </div>

                                <button
                                    class="select-none text-sm font-semibold text-indigo-500 transition duration-100 hover:text-indigo-600 active:text-indigo-700"
                                >
                                    Delete
                                </button>
                            </div>

                            <div class="ml-4 pt-3 sm:pt-2 md:ml-8 lg:ml-16">
                                <span
                                    class="block font-bold text-gray-800 md:text-lg lg:text-2xl"
                                    >$16.00</span
                                >
                            </div>
                        </div>
                    </div>
                </div>
                <!-- product - end -->
            </div>

            <!-- totals - start -->
            <div class="flex flex-col items-end gap-4">
                <div class="w-full rounded-lg bg-gray-100 p-4 sm:max-w-xs">
                    <div class="space-y-1">
                        <div
                            class="flex justify-between gap-4 text-gray-500"
                        >
                            <span>Subtotal</span>
                            <span>$27.00</span>
                        </div>

                        <div
                            class="flex justify-between gap-4 text-gray-500"
                        >
                            <span>Shipping</span>
                            <span>$4.99</span>
                        </div>
                    </div>

                    <div class="mt-4 border-t pt-4">
                        <div
                            class="flex items-start justify-between gap-4 text-gray-800"
                        >
                            <span class="text-lg font-bold">Total</span>

                            <span class="flex flex-col items-end">
                                <span class="text-lg font-bold"
                                    >$31.99 USD</span
                                >
                                <span class="text-sm text-gray-500"
                                    >including VAT</span
                                >
                            </span>
                        </div>
                    </div>
                </div>

                <button
                    class="inline-block rounded-lg bg-indigo-500 px-8 py-3 text-center text-sm font-semibold text-white outline-none ring-indigo-300 transition duration-100 hover:bg-indigo-600 focus-visible:ring active:bg-indigo-700 md:text-base"
                >
                    Check out
                </button>
            </div>
            <!-- totals - end -->
        </div>
    </div>
@endsection
