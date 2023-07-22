@extends('layouts.app')

@section('title', 'Your Cart - FlowerGallery')

@section('main-content')
    <!-- Product Details -->
    <section class="container py-8">
        <div class="mx-auto max-w-6xl px-4 py-8 md:py-12 lg:px-8">
            <div class="mx-auto">
                <header class="pb-4 text-center text-2xl md:text-3xl font-semibold capitalize flex flex-col justify-center items-center gap-y-2">
                    Your Cart
                    <div class="h-1 w-20 bg-pink-500 rounded"></div>
                </header>

                <div class="py-12 px-8">
                    <div class="flex gap-x-4 py-6">
                        <div class="flex flex-col md:flex-row gap-6">
                            <img src="https://source.unsplash.com/TaRar4WWmKY"
                                alt="" class="h-28 w-28 rounded object-cover" />

                            <div class="mt-1 font-semibold">
                                <h3 class="text-md md:text-lg text-gray-900 font-semibold">Rose</h3>

                                <div class="mt-0.5 space-y-px text-[14px] md:text-[16px] text-pink-400">
                                    Flower
                                </div>
                            </div>
                        </div>

                        <div class="flex flex-1 items-center justify-end gap-4">
                            <div class="flex flex-col md:flex-row gap-x-8 gap-y-6">
                                <button class="p-2 text-gray-600 transition self-center border border-gray-600 rounded md:order-3 hover:text-red-600 hover:border-red-600">
                                    <span class="sr-only">Remove item</span>

                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="h-4 w-4">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0"
                                        />
                                    </svg>
                                </button>

                                <form class="md:order-2">
                                    <label for="Line2Qty" class="sr-only"> Quantity </label>

                                    <div x-data="{ productQuantity: 1 }">
                                        <label for="Quantity" class="sr-only"> Quantity </label>
                                        <div class="flex items-center border border-gray-200 rounded">
                                            <button type="button" x-on:click="productQuantity--" :disabled="productQuantity === 1" class="w-10 h-10 leading-10 font-semibold text-[22px] text-gray-600 transition hover:opacity-75">&minus;</button>
                                            <input type="number" id="product_quantity" x-model="productQuantity" class="h-10 w-16 border-transparent text-center [-moz-appearance:_textfield] sm:text-sm [&::-webkit-outer-spin-button]:m-0 [&::-webkit-outer-spin-button]:appearance-none [&::-webkit-inner-spin-button]:m-0 [&::-webkit-inner-spin-button]:appearance-none"/>
                                            <button type="button" x-on:click="productQuantity++" class="w-10 h-10 leading-10 font-semibold text-[22px] text-gray-600 transition hover:opacity-75">&plus;</button>
                                        </div>
                                    </div>
                                </form>

                                <div class="self-center font-semibold md:order-1">
                                    CA$125
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="flex gap-x-4 py-6">
                        <div class="flex flex-col md:flex-row gap-6">
                            <img src="https://source.unsplash.com/_2oDf30N6BY"
                                alt="" class="h-28 w-28 rounded object-cover" />

                            <div class="mt-1 font-semibold">
                                <h3 class="text-md text-gray-900 font-semibold">Lavender</h3>

                                <div class="mt-0.5 space-y-px text-[14px] md:text-[16px] text-pink-400">
                                    Flower
                                </div>
                            </div>
                        </div>

                        <div class="flex flex-1 items-center justify-end gap-4">
                            <div class="flex flex-col md:flex-row gap-x-8 gap-y-6">
                                <button class="p-2 text-gray-600 transition self-center border border-gray-600 rounded md:order-3 hover:text-red-600 hover:border-red-600">
                                    <span class="sr-only">Remove item</span>

                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="h-4 w-4">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0"
                                        />
                                    </svg>
                                </button>

                                <form class="md:order-2">
                                    <label for="Line2Qty" class="sr-only"> Quantity </label>

                                    <div x-data="{ productQuantity: 1 }">
                                        <label for="Quantity" class="sr-only"> Quantity </label>
                                        <div class="flex items-center border border-gray-200 rounded">
                                            <button type="button" x-on:click="productQuantity--" :disabled="productQuantity === 1" class="w-10 h-10 leading-10 font-semibold text-[22px] text-gray-600 transition hover:opacity-75">&minus;</button>
                                            <input type="number" id="product_quantity" x-model="productQuantity" class="h-10 w-16 border-transparent text-center [-moz-appearance:_textfield] sm:text-sm [&::-webkit-outer-spin-button]:m-0 [&::-webkit-outer-spin-button]:appearance-none [&::-webkit-inner-spin-button]:m-0 [&::-webkit-inner-spin-button]:appearance-none"/>
                                            <button type="button" x-on:click="productQuantity++" class="w-10 h-10 leading-10 font-semibold text-[22px] text-gray-600 transition hover:opacity-75">&plus;</button>
                                        </div>
                                    </div>
                                </form>

                                <div class="self-center font-semibold md:order-1">
                                    CA$125
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="mt-8 flex justify-end border-t border-gray-100 pt-8">
                        <div class="w-screen max-w-lg space-y-4">
                            <dl class="space-y-0.5 py-2 mx-2 md:mx-6 text-gray-700 text-md font-bold">
                                <div class="flex justify-between">
                                    <dt>Subtotal</dt>
                                    <dd>CA$250</dd>
                                </div>

                                <div class="flex justify-between">
                                    <dt>GST</dt>
                                    <dd>CA$25</dd>
                                </div>

                                <div class="flex justify-between text-xl font-semibold">
                                    <dt>Total</dt>
                                    <dd>CA$275</dd>
                                </div>
                            </dl>

                            <div class="flex justify-end">
                                <span class="inline-flex items-center justify-center rounded-full bg-indigo-100 px-3.5 py-1.5 text-indigo-700">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="-ms-1 me-1.5 h-4 w-4">
                                        <path
                                            stroke-linecap="round" stroke-linejoin="round"
                                            d="M16.5 6v.75m0 3v.75m0 3v.75m0 3V18m-9-5.25h5.25M7.5 15h3M3.375 5.25c-.621 0-1.125.504-1.125 1.125v3.026a2.999 2.999 0 010 5.198v3.026c0 .621.504 1.125 1.125 1.125h17.25c.621 0 1.125-.504 1.125-1.125v-3.026a2.999 2.999 0 010-5.198V6.375c0-.621-.504-1.125-1.125-1.125H3.375z"
                                        />
                                    </svg>

                                    <p class="whitespace-nowrap text-xs">2 Discounts Applied</p>
                                </span>
                            </div>

                            <div class="flex justify-end gap-4">
                                <button class="rounded-md bg-pink-400 px-5 py-3 text-md text-gray-100 font-semibold hover:transition hover:scale-105 hover:bg-pink-500">
                                    Checkout
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
