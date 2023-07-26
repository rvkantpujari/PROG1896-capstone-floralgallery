@extends('layouts.app')

@section('title', 'FloralGallery - Flowers For All Occasions')

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

    <section class="container mx-auto">
        <div class="bg-white">
            <main class="mx-auto max-w-7xl px-6 lg:px-4">
                <div class="flex items-baseline justify-between border-b border-gray-200 pb-2 pt-24">
                    <h1 class="text-3xl font-semibold tracking-tight text-gray-900">Explore Products 🌺</h1>
                </div>
        
                <section aria-labelledby="products-heading" class="pb-24 pt-6">
                    <h2 id="products-heading" class="sr-only">Products</h2>
                    <div class="grid gap-y-10 gap-x-8 md:grid-cols-12">
                        <!-- Filters Mobile -->
                        <div class="space-y-2 md:hidden">
                            <form method="POST" action={{route('home.filter.search')}}>
                                @csrf
                                <div x-data="{ isOpen: false }" class="overflow-hidden rounded border border-gray-300">
                                    <button x-on:click="isOpen = !isOpen" type="button" 
                                        class="flex w-full cursor-pointer items-center justify-between gap-2 bg-white p-4 text-gray-900 transition">
                                        <span class="text-sm font-semibold">Filters</span>

                                        <span class="transition" :class="{ '-rotate-180': isOpen }">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                stroke-width="1.5" stroke="currentColor" class="h-4 w-4">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                                            </svg>
                                        </span>
                                    </button>
                                    <div x-cloak x-show="isOpen" x-on:keydown.escape.window="isOpen = false" class="m-4 pt-6 border-t border-gray-200 bg-white">
                                        <span class="pl-2 text-md font-semibold">Category</span>
                                        <div class="p-6 border-gray-300" id="filter-section-0">
                                            <div class="space-y-4 text-sm">
                                                @foreach ($categories as $category)
                                                    <div class="flex items-center">
                                                        @if(Request()->product_category)
                                                            <input id="filter-category-mobile-{{$category->category}}" {{ in_array($category->category, Request()->product_category) ? "checked" : "" }} name="product_category[]" value="{{$category->category}}" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-pink-400 focus:ring-pink-500">
                                                            <label for="filter-category-mobile-{{$category->category}}" class="ml-3 text-sm text-gray-600">{{$category->category}}</label>
                                                        @else
                                                            <input id="filter-category-mobile-{{$category->category}}" name="product_category[]" value="{{$category->category}}" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-pink-400 focus:ring-pink-500">
                                                            <label for="filter-category-mobile-{{$category->category}}" class="ml-3 text-sm text-gray-600">{{$category->category}}</label>
                                                        @endif
                                                    </div>
                                                @endforeach
                                            </div>
                                        </div>
                                        <span class="pl-2 text-md font-semibold">Price</span>
                                        <div class="p-6 border-gray-300">
                                            <!-- Price section -->
                                            <div class="space-y-4">
                                                <div class="flex items-center">
                                                    <div class="border-gray-200">
                                                        <div class="flex justify-between gap-4">
                                                            <label for="FilterPriceFrom" class="flex items-center gap-2">
                                                                <span class="text-sm font-semibold text-gray-600">Min: </span>
                                                                @if (Request()->price_min)
                                                                    <input type="text" id="FilterPriceFrom" placeholder="CAD$" min="0" name="price_min" value="{{Request()->price_min}}"
                                                                        class="w-full rounded-md border-gray-200 shadow-sm sm:text-sm" />
                                                                @else
                                                                    <input type="text" id="FilterPriceFrom" placeholder="CAD$" min="0" name="price_min"
                                                                        class="w-full rounded-md border-gray-200 shadow-sm sm:text-sm" />
                                                                @endif
                                                            </label>
                                        
                                                            <label for="FilterPriceTo" class="flex items-center gap-2">
                                                                <span class="text-sm font-semibold text-gray-600">Max: </span>
                                                                @if (Request()->price_max)
                                                                    <input type="text" id="FilterPriceTo" placeholder="CAD$" min="0" name="price_max" value="{{Request()->price_max}}"
                                                                        class="w-full rounded-md border-gray-200 shadow-sm sm:text-sm" />
                                                                @else
                                                                    <input type="text" id="FilterPriceTo" placeholder="CAD$" min="0" name="price_max"
                                                                        class="w-full rounded-md border-gray-200 shadow-sm sm:text-sm" />
                                                                @endif
                                                            </label>
                                                        </div>
                                                        <div class="flex justify-between mt-2">
                                                            @error('price_min')
                                                                <span class="text-red-500 text-sm">{{$message}}</span>
                                                            @enderror
                                                            @error('price_max')
                                                                <span class="text-red-500 text-sm">{{$message}}</span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <input type="submit" value="Apply" class="mt-4 px-[16px] py-[8px] bg-pink-500 text-white font-semibold rounded cursor-pointer">
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>

                        <!-- Filters Desktop & Tablet -->
                        <form method="POST" action={{route('home.filter.search')}} class="hidden md:block md:col-span-3">
                            @csrf
                            <div class="py-6">
                                <!-- Category section -->
                                <h3 class="-my-3 flow-root">
                                    <span class="flex w-full items-center justify-between bg-white py-3 text-md text-gray-400 hover:text-gray-500" aria-controls="filter-section-0" aria-expanded="false">
                                        <span class="font-semibold text-gray-900">Category</span>
                                    </span>
                                </h3>
                                <div class="pt-6 mt-4 border-t border-gray-300" id="filter-section-0">
                                    <div class="space-y-4 text-sm">
                                        @foreach ($categories as $category)
                                            <div class="flex items-center">
                                                @if(Request()->product_category)
                                                    <input id="filter-category-{{$category->category}}" {{ in_array($category->category, Request()->product_category) ? "checked" : "" }} name="product_category[]" value="{{$category->category}}" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-pink-400 focus:ring-pink-500">
                                                    <label for="filter-category-{{$category->category}}" class="ml-3 text-sm text-gray-600">{{$category->category}}</label>
                                                @else
                                                    <input id="filter-category-{{$category->category}}" name="product_category[]" value="{{$category->category}}" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-pink-400 focus:ring-pink-500">
                                                    <label for="filter-category-{{$category->category}}" class="ml-3 text-sm text-gray-600">{{$category->category}}</label>
                                                @endif
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                            <div class="py-6">
                                <!-- Price section -->
                                <h3 class="-my-3 flow-root">
                                    <button type="button" class="flex w-full items-center justify-between bg-white py-3 text-md text-gray-400 hover:text-gray-500" aria-controls="filter-section-1" aria-expanded="false">
                                        <span class="font-semibold text-gray-900">Price</span>
                                    </button>
                                </h3>
                                <div class="pt-6 mt-4 border-t" id="filter-section-1">
                                    <div class="space-y-4">
                                        <div class="flex items-center">
                                            <div class="border-gray-200">
                                                <div class="flex justify-between md:flex-col lg:flex-row gap-4">
                                                    <label for="FilterPriceFrom" class="flex items-center gap-2">
                                                        <span class="text-sm font-semibold text-gray-600">Min: </span>
                                                        @if (Request()->price_min)
                                                            <input type="text" id="FilterPriceFrom" placeholder="CAD$" min="0" name="price_min" value="{{Request()->price_min}}"
                                                                class="w-full rounded-md border-gray-200 shadow-sm sm:text-sm" />
                                                        @else
                                                            <input type="text" id="FilterPriceFrom" placeholder="CAD$" min="0" name="price_min"
                                                                class="w-full rounded-md border-gray-200 shadow-sm sm:text-sm" />
                                                        @endif
                                                    </label>
                                
                                                    <label for="FilterPriceTo" class="flex items-center gap-2">
                                                        <span class="text-sm font-semibold text-gray-600">Max: </span>
                                                        @if (Request()->price_max)
                                                            <input type="text" id="FilterPriceTo" placeholder="CAD$" min="0" name="price_max" value="{{Request()->price_max}}"
                                                                class="w-full rounded-md border-gray-200 shadow-sm sm:text-sm" />
                                                        @else
                                                            <input type="text" id="FilterPriceTo" placeholder="CAD$" min="0" name="price_max"
                                                                class="w-full rounded-md border-gray-200 shadow-sm sm:text-sm" />
                                                        @endif
                                                    </label>
                                                </div>
                                                <div class="flex justify-between mt-2">
                                                    @error('price_min')
                                                        <span class="text-red-500 text-sm">{{$message}}</span>
                                                    @enderror
                                                    @error('price_max')
                                                        <span class="text-red-500 text-sm">{{$message}}</span>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="py-6">
                                <input type="submit" value="Apply" class="px-[16px] py-[8px] bg-pink-500 text-white font-semibold rounded cursor-pointer">
                            </div>
                        </form>
            
                        <!-- Product grid -->
                        <div class="md:col-span-9">
                            <div class="flex flex-wrap">
                                @if ($products)
                                    @foreach ($products as $product)
                                        <div class="lg:w-1/3 md:w-1/2 p-4 w-full">
                                            <a href="{{route('product.view', ['product_id' => $product->product_id])}}" class="block relative h-48 rounded overflow-hidden hover:shadow-lg">
                                                <img src="{{asset($product->product_img1)}}" alt="{{$product->product_name}}" title="{{$product->product_name}}"
                                                    loading="lazy" class="object-cover object-center w-full h-full block hover:scale-110 hover:duration-500"/>
                                            </a>
                                            <div class="mt-4 px-2">
                                                <div class="flex justify-between">
                                                    <h3 class="text-pink-400 text-sm tracking-widest font-semibold title-font mb-1">{{$product->category}}</h3>
                                                    <p class="font-semibold">CAD$ {{$product->product_price}}</p>
                                                </div>
                                                <h2 class="text-black title-font text-lg font-semibold">{{Str::limit($product->product_name, 24)}}</h2>
                                            </div>
                                        </div>
                                    @endforeach
                                @else
                                    <div class="lg:w-1/3 md:w-1/2 w-full p-4 text-xl">
                                        😥
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
                </section>
            </main>
        </div>
    </section>

    <!-- Newsletter -->
    <div class="pb-20 lg:mt-4">
        <div class="text-center text-3xl font-semibold">
            Newsletter
        </div>
        <section class="mt-12 flex flex-col mx-8 max-w-4xl lg:mx-auto overflow-hidden bg-white rounded-lg shadow-lg dark:bg-gray-800 md:flex-row md:h-48">
            <div class="md:flex md:items-center md:justify-center md:w-1/2 bg-[#1e3050]">
                <div class="px-6 py-6 md:px-8 md:py-0">
                    <h2 class="text-lg font-bold text-gray-700 dark:text-white md:text-gray-100">
                        Sign Up For
                        <span class="text-blue-600 capitalize dark:text-blue-400 md:text-blue-300">
                            Latest products
                        </span>
                        Updates
                    </h2>
                    <p class="mt-2 text-sm text-gray-600 dark:text-gray-400 md:text-gray-400">
                        Be the first to get notified. FREE!!! 😎
                    </p>
                </div>
            </div>
    
            <div class="flex items-center justify-center pb-6 md:py-0 md:w-1/2 bg-white">
                <form>
                    <div class="mt-8 lg:mt-0 flex flex-col p-1.5 overflow-hidden rounded-lg lg:flex-row focus-within:ring focus-within:ring-opacity-40 focus-within:ring-pink-300 outline-none border focus:border-white">
                        <input
                            class="px-6 py-2 text-gray-700 placeholder-gray-500 bg-white outline-none border-white"
                            type="text" name="email" placeholder="Enter your email" aria-label="Enter your email"
                        />
    
                        <button class="px-4 py-3 text-sm font-medium tracking-wider text-gray-100 uppercase transition-colors duration-300 transform bg-gray-700 rounded-md hover:bg-gray-600 focus:bg-gray-600 focus:outline-none">
                            subscribe
                        </button>
                    </div>
                </form>
            </div>
        </section>
    </div>
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