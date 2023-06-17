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

            <div class="flex flex-col mb-8 divide-y border-t border-b">
                <!-- product - start -->
                <div class="py-8">
                    <div class="flex flex-col md:flex-row flex-wrap gap-4 py-2.5 lg:gap-6 w-full">
                        <div class="-my-2.5 w-84">
                            <a
                                href="#"
                                class="group relative block h-56 w-full md:w-64 lg:h-40 lg:w-60 overflow-hidden rounded-lg bg-gray-100"
                            >
                                <img
                                    src="./assets/images/lotus-978659_640.jpg"
                                    loading="lazy"
                                    alt="Lotus"
                                    class="h-full w-full object-cover object-center transition duration-200 group-hover:scale-110"
                                />
                            </a>
                        </div>

                        <div class="flex flex-1 mt-4 md:mt-0 md:flex-col justify-between">
                            <div>
                                <div class="text-[18px] md:text-[20px] font-semibold">
                                    Product
                                </div>
                                <a
                                    href="#"
                                    class="mb-1 inline-block text-[24px] font-semibold text-pink-500 hover:text-pink-600 transition duration-100"
                                >
                                    Lotus
                                </a>
                            </div>

                            <div>
                                <span class="mb-1 block font-semibold text-gray-800 text-[20px] md:text-lg lg:text-xl">
                                    $11.00 <span class="text-sm text-gray-500">/ pc</span>
                                </span>

                                <span class="flex items-center gap-1 text-sm text-gray-500">
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

                        <div class="flex w-full justify-between border-t pt-4 md:pt-0 md:w-auto border-none lg:pt-0">
                            <div class="flex flex-col justify-around md:justify-between">
                                <div class="flex h-12 w-28 overflow-hidden rounded border">
                                    <input
                                        type="text"
                                        value="1"
                                        class="w-full px-4 py-2 outline-none ring-inset ring-indigo-300 transition duration-100 focus:ring"
                                    />

                                    <div class="flex flex-col divide-y border-l">
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
                                    class="flex gap-2 select-none mt-8 md:mt-0 font-semibold text-white bg-red-500 md:bg-red-400 hover:bg-red-500 px-[16px] py-2 rounded-md transition duration-100"
                                >
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                                    </svg>
                                    Delete
                                </button>
                            </div>

                            {{-- <div class="ml-4 pt-3 sm:pt-2 md:ml-8 lg:ml-16"> --}}
                            <div class="ml-4 pt-2 md:pt-2 md:ml-8 lg:ml-16">
                                <span class="block font-semibold text-gray-800 text-[22px]">
                                    $11.00
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- product - end -->
                
                <!-- product - start -->
                <div class="py-8">
                    <div class="flex flex-col md:flex-row flex-wrap gap-4 py-2.5 lg:gap-6 w-full">
                        <div class="-my-2.5 w-84">
                            <a
                                href="#"
                                class="group relative block h-56 w-full md:w-64 lg:h-40 lg:w-60 overflow-hidden rounded-lg bg-gray-100"
                            >
                                <img
                                    src="./assets/images/rose-3063284_640.jpg"
                                    loading="lazy"
                                    alt="Lotus"
                                    class="h-full w-full object-cover object-center transition duration-200 group-hover:scale-110"
                                />
                            </a>
                        </div>

                        <div class="flex flex-1 mt-4 md:mt-0 md:flex-col justify-between">
                            <div>
                                <div class="text-[18px] md:text-[20px] font-semibold">
                                    Product
                                </div>
                                <a
                                    href="#"
                                    class="mb-1 inline-block text-[24px] font-semibold text-pink-500 hover:text-pink-600 transition duration-100"
                                >
                                    Golden Rose
                                </a>
                            </div>

                            <div>
                                <span class="mb-1 block font-semibold text-gray-800 text-[20px] md:text-lg lg:text-xl">
                                    $16.00 <span class="text-sm text-gray-500">/ pc</span>
                                </span>

                                <span class="flex items-center gap-1 text-sm text-gray-500">
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

                        <div class="flex w-full justify-between border-t pt-4 md:pt-0 md:w-auto border-none lg:pt-0">
                            <div class="flex flex-col justify-around md:justify-between">
                                <div class="flex h-12 w-28 overflow-hidden rounded border">
                                    <input
                                        type="text"
                                        value="1"
                                        class="w-full px-4 py-2 outline-none ring-inset ring-indigo-300 transition duration-100 focus:ring"
                                    />

                                    <div class="flex flex-col divide-y border-l">
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
                                    class="flex gap-2 select-none mt-8 md:mt-0 font-semibold text-white bg-red-500 md:bg-red-400 hover:bg-red-500 px-[16px] py-2 rounded-md transition duration-100"
                                >
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                                    </svg>
                                    Delete
                                </button>
                            </div>

                            {{-- <div class="ml-4 pt-3 sm:pt-2 md:ml-8 lg:ml-16"> --}}
                            <div class="ml-4 pt-2 md:pt-2 md:ml-8 lg:ml-16">
                                <span class="block font-semibold text-gray-800 text-[22px]">
                                    $16.00
                                </span>
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
