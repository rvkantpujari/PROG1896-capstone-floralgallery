@extends('layouts.app')

@section('title', (isset($store_name) ? Str::limit($store_name, 35) : 'Search Results').' - FloralGallery')

@section('main-content')
    <!-- Search Results -->
    @isset($search)
        <section class="text-gray-600 body-font mx-auto lg:max-w-7xl px-6 pt-8 pb-4">
            <div class="container">
                <div class="flex flex-wrap">
                    <div class="w-full">
                        <h1 class="text-2xl font-medium title-font text-gray-900">
                            Search results for: {{$search}}
                        </h1>
                        <div class="h-1 w-20 bg-pink-500 rounded"></div>
                    </div>
                </div>
            </div>
        </section>
    @endisset

    @isset($store_name)
        <section class="body-font mx-auto lg:max-w-7xl px-6 pt-12 pb-4 flex flex-wrap">
            <div class="w-full">
                <div class="text-center text-2xl font-semibold capitalize flex flex-col justify-center items-center gap-y-2">
                    <span>Store <span class="text-pink-500">{{Str::limit($store_name, 50)}}</span><span class="text-black"></span></span>
                    <div class="h-1 w-24 bg-pink-500 rounded"></div>
                </div>
            </div>
        </section>
    @endisset

    <!-- Products -->
    <section class="container md:mx-auto lg:mx-0 bg-white">
        <main class="lg:mx-auto lg:max-w-7xl lg:px-6 lg:p-4">
            <section aria-labelledby="products-heading" class="py-6 px-4">
                <h2 id="products-heading" class="sr-only">Products</h2>
                <div class="grid gap-y-10 gap-x-4 lg:gap-x-8 md:grid-cols-12">
                    <!-- Filters Mobile -->
                    <div class="space-y-2 md:hidden">
                        <form method="POST" action={{route('search.filter')}}>
                            @csrf
                            
                            @isset($search)
                                <input type="hidden" name="searchKeywords" value="{{$search}}">
                            @endisset

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
                                    <span class="pl-2 text-lg font-semibold">Category</span>
                                    <div class="p-6 border-gray-300" id="filter-section-0">
                                        <div class="space-y-3 text-md">
                                            @foreach ($categories as $category)
                                                <div class="flex items-center">
                                                    @if(Request()->product_category)
                                                        <input id="filter-category-mobile-{{$category->category}}" {{ in_array($category->category, Request()->product_category) ? "checked" : "" }} name="product_category[]" value="{{$category->category}}" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-pink-400 focus:ring-pink-500">
                                                        <label for="filter-category-mobile-{{$category->category}}" class="ml-3 text-gray-600">{{$category->category}}</label>
                                                    @else
                                                        <input id="filter-category-mobile-{{$category->category}}" name="product_category[]" value="{{$category->category}}" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-pink-400 focus:ring-pink-500">
                                                        <label for="filter-category-mobile-{{$category->category}}" class="ml-3 text-gray-600">{{$category->category}}</label>
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

                    <!-- Filters Desktop and Tablet -->
                    <form method="POST" action={{route('search.filter')}} class="hidden md:block md:col-span-3">
                        @csrf
                        
                        @isset($search)
                            <input type="hidden" name="searchKeywords" value="{{$search}}">
                        @endisset

                        <div class="py-6">
                            <!-- Category section -->
                            <h3 class="-my-6 flow-root">
                                <span class="flex w-full items-center justify-between py-3 bg-white" aria-controls="filter-section-0" aria-expanded="false">
                                    <span class="font-semibold text-lg text-gray-900">Category</span>
                                </span>
                            </h3>
                            <div class="pt-6 mt-4 border-t border-gray-300" id="filter-section-0">
                                <div class="space-y-4 text-md">
                                    @foreach ($categories as $category)
                                        <div class="flex items-center text-gray-600 hover:text-gray-800">
                                            @isset($search_category)
                                                <input id="filter-category-{{$category->category}}" {{ $category->category === $search_category ? "checked" : "" }} name="product_category[]" value="{{$category->category}}" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-pink-400 focus:ring-pink-500">
                                                <label for="filter-category-{{$category->category}}" class="ml-3">{{$category->category}}</label>
                                            @else
                                                <input id="filter-category-{{$category->category}}" name="product_category[]" value="{{$category->category}}" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-pink-400 focus:ring-pink-500">
                                                <label for="filter-category-{{$category->category}}" class="ml-3">{{$category->category}}</label>
                                            @endisset
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        <div class="py-6">
                            <!-- Price section -->
                            <h3 class="-my-6 flow-root">
                                <span class="flex w-full items-center justify-between py-3 bg-white" aria-controls="filter-section-1" aria-expanded="false">
                                    <span class="font-semibold text-lg text-gray-900">Price</span>
                                </span>
                            </h3>
                            <div class="pt-6 mt-4 border-t" id="filter-section-1">
                                <div class="space-y-4">
                                    <div class="flex items-center">
                                        <div class="border-gray-200">
                                            <div class="flex justify-between md:flex-col lg:flex-row gap-4">
                                                <label for="FilterPriceFrom" class="flex items-center gap-2">
                                                    <span class="text-md font-semibold text-gray-600">Min: </span>
                                                    @if (Request()->price_min)
                                                        <input type="text" id="FilterPriceFrom" placeholder="CAD$" min="0" name="price_min" value="{{Request()->price_min}}"
                                                            class="w-full rounded-md border-gray-200 shadow-sm sm:text-sm" />
                                                    @else
                                                        <input type="text" id="FilterPriceFrom" placeholder="CAD$" min="0" name="price_min"
                                                            class="w-full rounded-md border-gray-200 shadow-sm sm:text-sm" />
                                                    @endif
                                                </label>
                            
                                                <label for="FilterPriceTo" class="flex items-center gap-2">
                                                    <span class="text-md font-semibold text-gray-600">Max: </span>
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
                        <!-- Your content -->
                        <div class="flex flex-wrap">
                            @if (!empty($products))
                                @foreach ($products as $product)
                                    <div class="lg:w-1/3 md:w-1/2 p-4 w-full">
                                        <a href="{{route('product.view', ['product_id' => $product->product_id])}}" class="block relative h-48 rounded overflow-hidden shadow-sm hover:shadow-lg">
                                            <img
                                                alt="{{$product->product_name}}" title="{{$product->product_name}}"
                                                class="object-cover object-center w-full h-full flex justify-center items-center hover:scale-110 hover:duration-500"
                                                src="{{URL::asset($product->product_img1)}}" loading="lazy"
                                            />
                                        </a>
                                        <div class="mt-4 px-2">
                                            <div class="flex justify-between">
                                                <h3 class="text-pink-400 text-sm tracking-widest font-semibold title-font mb-1">{{$product->category}}</h3>
                                                <p class="font-semibold">CAD$ {{$product->product_price}}</p>
                                            </div>
                                            <h2 class="text-black title-font text-lg font-semibold">{{$product->product_name}}</h2>
                                        </div>
                                    </div>
                                @endforeach
                            @else
                                <div class="lg:w-1/3 md:w-1/2 w-full p-4 text-xl">
                                    😥
                                </div>
                            @endif
                        </div>
                        {{-- @if ($products->links()->paginator->hasPages()) --}}
                            <div class="my-4 py-8 px-2">
                                {{ $products->links('pagination::tailwind') }}
                            </div>
                        {{-- @endif --}}
                    </div>
                </div>
            </section>
        </main>
    </section>
@endsection
