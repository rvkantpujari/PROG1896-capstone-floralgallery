@extends('layouts.app')

@section('title', 'View Product - FlowerGallery')

@section('main-content')
    <!-- Product Details -->
    <section class="container">
        <div class="bg-white">
            <main class="mx-auto max-w-7xl px-6 lg:px-4 lg:pt-8">
                <section class="text-gray-600 body-font overflow-hidden">
                    <div class="container px-5 pt-12 pb-24 mx-auto">
                        <div class="lg:w-full mx-auto flex flex-wrap gap-x-10">
                            <div class="md:mx-auto">
                                <img src="{{asset($product->product_img1)}}" alt="{{$product->product_name}}" title="{{$product->product_name}}"
                                    class="lg:w-[34vw] lg:h-96 md:h-[40vh] md:w-full w-96 h-80 object-cover object-center rounded" id="large-product-image"
                                />
                                <div class="mt-2 lg:w-full flex justify-center gap-x-2">
                                    @if ($product->product_img2)
                                        <img alt="{{$product->product_name}}"
                                            class="lg:w-[8vw] lg:h-28 md:w-[28vw] md:h-64 w-[25vw] h-32 object-cover object-center rounded product-img hover:border-1 hover:shadow-lg hover:shadow-pink-200"
                                            src="{{asset($product->product_img1)}}" loading="lazy"
                                        />
                                    @endif
                                    @if ($product->product_img2)
                                        <img alt="{{$product->product_name}}"
                                            class="lg:w-[8vw] lg:h-28 md:w-[28vw] md:h-64 w-[25vw] h-32 object-cover object-center rounded product-img hover:border-1 hover:shadow-lg hover:shadow-pink-200"
                                            src="{{asset($product->product_img2)}}" loading="lazy"
                                        />
                                    @endif
                                    @if ($product->product_img3)
                                        <img alt="{{$product->product_name}}"
                                            class="lg:w-[8vw] lg:h-28 md:w-[28vw] md:h-64 w-[25vw] h-32 object-cover object-center rounded product-img hover:border-1 hover:shadow-lg hover:shadow-pink-200"
                                            src="{{asset($product->product_img3)}}" loading="lazy"
                                        />
                                    @endif
                                    @if ($product->product_img4)
                                        <img alt="{{$product->product_name}}"
                                            class="lg:w-[8vw] lg:h-28 md:w-[28vw] md:h-64 w-[25vw] h-32 object-cover object-center rounded product-img hover:border-1 hover:shadow-lg hover:shadow-pink-200"
                                            src="{{asset($product->product_img4)}}" loading="lazy"
                                        />
                                    @endif
                                </div>
                            </div>
                            <div class="lg:w-1/2 w-full lg:py-6 lg:mt-0 mt-12">
                                <h2 class="text-sm title-font text-gray-500 tracking-widest">
                                    {{ Str::upper(Str::limit($product->category, 80)) }}
                                </h2>
                                <h1 class="text-gray-900 text-3xl title-font font-medium mb-1 capitalize">
                                    {{ $product->product_name }}
                                </h1>
                                <div class="flex mb-4">
                                    Product by&nbsp;<span class="font-semibold text-pink-500" title="{{$product->store_name}}">{{Str::limit($product->store_name, 50)}}</span>
                                </div>
                                <p class="leading-relaxed lg:min-h-[10vh] md:min-h-[5vh]">{{$product->product_desc}}</p>
                                <div class="flex mt-4 items-center pb-5 border-b-2 border-gray-100 mb-5">
                                    <div class="flex m-2 items-center">
                                        <span class="mr-3">Quantity</span>
                                        <div x-data="{ productQuantity: 1 }">
                                            <label for="Quantity" class="sr-only"> Quantity </label>
                                            <div class="flex items-center border border-gray-200 rounded">
                                                <button type="button" x-on:click="productQuantity--" :disabled="productQuantity === 0" class="w-10 h-10 leading-10 font-semibold text-[22px] text-gray-600 transition hover:opacity-75">&minus;</button>
                                                <input type="number" id="product_quantity" x-model="productQuantity" class="h-10 w-16 border-transparent text-center [-moz-appearance:_textfield] sm:text-sm [&::-webkit-outer-spin-button]:m-0 [&::-webkit-outer-spin-button]:appearance-none [&::-webkit-inner-spin-button]:m-0 [&::-webkit-inner-spin-button]:appearance-none"/>
                                                <button type="button" x-on:click="productQuantity++" class="w-10 h-10 leading-10 font-semibold text-[22px] text-gray-600 transition hover:opacity-75">&plus;</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="flex">
                                    <span class="title-font font-semibold text-2xl text-gray-900">
                                        CAD$ {{$product->product_price}}
                                    </span>
                                    <button class="flex ml-auto text-white bg-pink-400 border-0 py-2 px-6 focus:outline-none hover:bg-pink-500 rounded">
                                        Add to Cart
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </main>
        </div>
    </section>
    <script defer>
        addEventListener("load", (event) => {
            let largeProductImage = document.getElementById('large-product-image')
            let productImages = document.querySelectorAll('.product-img')
            
            productImages.forEach(img => {
                img.addEventListener('mouseover', (e) => {
                    largeProductImage.src = e.target.src;
                });

                img.addEventListener('touchstart', (e) => {
                    largeProductImage.src = e.target.src;
                });
            });
        });
    </script>
@endsection
