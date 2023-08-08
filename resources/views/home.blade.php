@extends('layouts.app')

@section('title', 'FloralGallery - Flowers For All Occasions')

@section('main-content')
    <!-- Floral Category Section -->
    <section class="mx-auto py-12 lg:py-20 px-6 lg:px-12 space-y-4">
        <div class="grid grid-cols-1 gap-4 lg:grid-cols-4 lg:items-stretch">
            <div class="lg:col-span-2 grid p-8 bg-gray-100 rounded place-content-center">
                <div class="max-w-md mx-auto text-center lg:text-left">
                    <header>
                        <h1 class="text-2xl md:text-3xl font-semibold tracking-tight text-gray-900">Floral Products 🌺</h1>
                        <p class="mt-4 flex text-gray-700">
                            Explore Our Flowers &amp; Bouquets. Let Nature's Elegance Blossom in Every Corner!
                        </p>
                    </header>
                </div>
            </div>

            <div class="lg:col-span-2 lg:py-8">
                <ul class="grid grid-cols-2 lg:grid-cols-4 gap-4">
                    <li class="col-span-2 md:col-span-1 lg:col-span-2">
                        <a href="#" class="relative block group">
                            <div class="block relative h-56 rounded-xl overflow-hidden">
                                <img src="{{asset('assets/featured categories/andrew-small-EfhCUc_fjrU-unsplash.jpg')}}" alt=""
                                    class="absolute inset-0 h-full w-full object-cover opacity-0 hover:duration-500 group-hover:opacity-100"/>

                                <img src="{{asset('assets/featured categories/pawel-czerwinski-Gmxbaiph-YE-unsplash.jpg')}}" alt=""
                                    class="absolute inset-0 h-full w-full object-cover opacity-100 hover:duration-500 group-hover:opacity-0"/>
                            </div>
                    
                            <div class="absolute inset-0 flex flex-col items-start justify-end p-6">
                                <span class="mt-1.5 inline-block bg-black px-5 py-3 text-xs font-medium uppercase tracking-wide text-white hover:scale-110">
                                    Shop Flowers
                                </span>
                            </div>
                        </a>
                    </li>
                    <li class="col-span-2 md:col-span-1 lg:col-span-2">
                        <a href="#" class="relative block group">
                            <div class="block relative h-56 rounded-xl overflow-hidden">
                                <img src="{{asset('assets/featured categories/debby-hudson-VO7p_CgTylQ-unsplash.jpg')}}" alt=""
                                    class="absolute inset-0 h-full w-full object-cover object-top opacity-0 hover:duration-500 group-hover:opacity-100"/>

                                <img src="{{asset('assets/featured categories/uljana-borodina-NFj6pEUdmpY-unsplash.jpg')}}" alt=""
                                    class="absolute inset-0 h-full w-full object-cover object-center opacity-100 hover:duration-500 group-hover:opacity-0"/>
                            </div>
                    
                            <div class="absolute inset-0 flex flex-col items-start justify-end p-6">
                                <span class="mt-1.5 inline-block bg-black px-5 py-3 text-xs font-medium uppercase tracking-wide text-white hover:scale-110">
                                    Shop Bouquets
                                </span>
                            </div>
                        </a>
                    </li>
                </ul>
            </div>
        </div>

        <div class="grid grid-cols-1 gap-4 lg:grid-cols-4 lg:items-stretch">
            <div class="lg:col-span-2 grid p-8 bg-gray-100 rounded place-content-center md:order-2">
                <div class="max-w-md mx-auto text-center lg:text-right">
                    <header>
                        <h1 class="text-2xl md:text-3xl font-semibold tracking-tight text-gray-900">Gardnening Products 🌻</h1>
                        <p class="mt-4 flex text-gray-700">
                            Transform Your Garden Dreams into Reality: Explore Our Gardening Products!
                        </p>
                    </header>
                </div>
            </div>

            <div class="lg:col-span-2 lg:py-8 md:order-2 lg:order-1">
                <ul class="grid grid-cols-2 lg:grid-cols-4 gap-4">
                    <li class="col-span-2 md:col-span-1 lg:col-span-2">
                        <a href="#" class="relative block group">
                            <div class="block relative h-56 rounded-xl overflow-hidden">
                                <img src="{{asset('assets/featured categories/pexels-gary-barnes-6231714.jpg')}}" alt=""
                                    class="absolute inset-0 h-full w-full object-cover opacity-0 hover:duration-500 group-hover:opacity-100"/>

                                <img src="{{asset('assets/featured categories/pexels-gary-barnes-6231726.jpg')}}" alt=""
                                    class="absolute inset-0 h-full w-full object-cover opacity-100 hover:duration-500 group-hover:opacity-0"/>
                            </div>
                    
                            <div class="absolute inset-0 flex flex-col items-start justify-end p-6">
                                <span class="mt-1.5 inline-block bg-black px-5 py-3 text-xs font-medium uppercase tracking-wide text-white hover:scale-110">
                                    Shop Gardnening Tools
                                </span>
                            </div>
                        </a>
                    </li>
                    <li class="col-span-2 md:col-span-1 lg:col-span-2">
                        <a href="#" class="relative block group">
                            <div class="block relative h-56 rounded-xl overflow-hidden">
                                <img src="{{asset('assets/featured categories/pexels-cottonbro-studio-4503741.jpg')}}" alt=""
                                    class="absolute inset-0 h-full w-full object-cover object-center opacity-0 hover:duration-500 group-hover:opacity-100"/>

                                <img src="{{asset('assets/featured categories/pexels-rov-camato-1201798.jpg')}}" alt=""            
                                    class="absolute inset-0 h-full w-full object-cover object-center opacity-100 hover:duration-500 group-hover:opacity-0"/>
                            </div>
                    
                            <div class="absolute inset-0 flex flex-col items-start justify-end p-6">
                                <span class="mt-1.5 inline-block bg-black px-5 py-3 text-xs font-medium uppercase tracking-wide text-white hover:scale-110">
                                    Shop Pots and Containers
                                </span>
                            </div>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </section>

    <!-- Why FloralGallery -->
    <section class="py-12 body-font">
        <div class="py-12 lg:py-4 text-center text-3xl font-semibold capitalize flex flex-col justify-center items-center gap-y-2">
            <span>Why <span class="text-pink-500">Floral</span><span class="text-black">Gallery</span>?</span>
            <div class="h-1 w-32 bg-pink-500 rounded"></div>
        </div>
        <div class="container px-12 py-4 mx-auto flex flex-wrap">
            <div class="flex relative pt-6 pb-12 items-center md:w-2/3 mx-auto">
                <div class="h-full w-6 absolute inset-0 flex items-center justify-center">
                    <div class="h-full w-1 bg-gray-200 pointer-events-none"></div>
                </div>
                <div class="flex-shrink-0 w-6 h-6 rounded-full mt-10 sm:mt-0 inline-flex items-center justify-center bg-pink-500 text-white relative z-10 title-font font-medium text-sm">1</div>
                <div class="flex-grow md:pl-8 pl-4 flex sm:items-center items-start flex-col sm:flex-row">
                    <div class="flex-shrink-0 w-24 h-24 bg-pink-100 text-pink-500 rounded-full inline-flex items-center justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-12 h-12">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z" />
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                        </svg>
                    </div>
                    <div class="flex-grow mt-6 md:pl-6 sm:mt-0">
                        <h2 class="font-semibold title-font text-gray-900 mb-1 text-lg md:text-xl">What You See Is What You Get</h2>
                        <p class="leading-relaxed">
                            Love the product on your screen? That's exactly what our local florist will prepare freshly for your order or your money back!
                        </p>
                    </div>
                </div>
            </div>
            <div class="flex relative pb-12 sm:items-center md:w-2/3 mx-auto">
                <div class="h-full w-6 absolute inset-0 flex items-center justify-center">
                    <div class="h-full w-1 bg-gray-200 pointer-events-none"></div>
                </div>
                <div class="flex-shrink-0 w-6 h-6 rounded-full mt-10 sm:mt-0 inline-flex items-center justify-center bg-pink-500 text-white relative z-10 title-font font-medium text-sm">2</div>
                    <div class="flex-grow md:pl-8 pl-4 flex sm:items-center items-start flex-col sm:flex-row">
                    <div class="flex-shrink-0 w-24 h-24 bg-pink-100 text-pink-500 rounded-full inline-flex items-center justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-12 h-12">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6.115 5.19l.319 1.913A6 6 0 008.11 10.36L9.75 12l-.387.775c-.217.433-.132.956.21 1.298l1.348 1.348c.21.21.329.497.329.795v1.089c0 .426.24.815.622 1.006l.153.076c.433.217.956.132 1.298-.21l.723-.723a8.7 8.7 0 002.288-4.042 1.087 1.087 0 00-.358-1.099l-1.33-1.108c-.251-.21-.582-.299-.905-.245l-1.17.195a1.125 1.125 0 01-.98-.314l-.295-.295a1.125 1.125 0 010-1.591l.13-.132a1.125 1.125 0 011.3-.21l.603.302a.809.809 0 001.086-1.086L14.25 7.5l1.256-.837a4.5 4.5 0 001.528-1.732l.146-.292M6.115 5.19A9 9 0 1017.18 4.64M6.115 5.19A8.965 8.965 0 0112 3c1.929 0 3.716.607 5.18 1.64" />
                        </svg>
                    </div>
                    <div class="flex-grow mt-6 md:pl-6 sm:mt-0">
                        <h2 class="font-semibold title-font text-gray-900 mb-1 text-lg md:text-xl">Always unique</h2>
                        <p class="leading-relaxed">
                            We work with talented and unique artisans, and we're passionate about supporting our skilled family of florists.
                        </p>
                    </div>
                </div>
            </div>
            <div class="flex relative pb-4 sm:items-center md:w-2/3 mx-auto">
                <div class="h-full w-6 absolute inset-0 flex items-center justify-center">
                    <div class="h-full w-1 bg-gray-200 pointer-events-none"></div>
                </div>
                <div class="flex-shrink-0 w-6 h-6 rounded-full mt-10 sm:mt-0 inline-flex items-center justify-center bg-pink-500 text-white relative z-10 title-font font-medium text-sm">3</div>
                    <div class="flex-grow md:pl-8 pl-4 flex sm:items-center items-start flex-col sm:flex-row">
                    <div class="flex-shrink-0 w-24 h-24 bg-pink-100 text-pink-500 rounded-full inline-flex items-center justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-12 h-12">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 18.75a1.5 1.5 0 01-3 0m3 0a1.5 1.5 0 00-3 0m3 0h6m-9 0H3.375a1.125 1.125 0 01-1.125-1.125V14.25m17.25 4.5a1.5 1.5 0 01-3 0m3 0a1.5 1.5 0 00-3 0m3 0h1.125c.621 0 1.129-.504 1.09-1.124a17.902 17.902 0 00-3.213-9.193 2.056 2.056 0 00-1.58-.86H14.25M16.5 18.75h-2.25m0-11.177v-.958c0-.568-.422-1.048-.987-1.106a48.554 48.554 0 00-10.026 0 1.106 1.106 0 00-.987 1.106v7.635m12-6.677v6.677m0 4.5v-4.5m0 0h-12" />
                        </svg>
                    </div>
                    <div class="flex-grow mt-6 md:pl-6 sm:mt-0">
                        <h2 class="font-semibold title-font text-gray-900 mb-1 text-lg md:text-xl">Hand-delivered with care &amp; attention</h2>
                        <p class="leading-relaxed">
                            Every order is professionally arranged, wrapped and safely delivered within set timeframe.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Display Full Width Card -->
    <div class="mx-auto mb-20 px-8 lg:px-20 bg-white">
        <div class="py-12 lg:py-12 text-center text-3xl font-semibold capitalize flex flex-col justify-center items-center gap-y-2">
            Our Vision
            <div class="h-1 w-20 bg-pink-500 rounded"></div>
        </div>
        <div class="relative p-8 lg:p-0 rounded-lg block md:flex items-center bg-gray-100 shadow-xl" style="min-height: 19rem;">
            <div class="relative w-full md:w-2/5 h-full overflow-hidden rounded-t-lg md:rounded-r-none md:rounded-l-lg" style="min-height: 19rem;">
                <div class="absolute inset-0 w-full h-full bg-pink-500 opacity-75"></div>
                    <img class="absolute inset-0 w-full h-full object-cover object-center" src="{{asset('assets/images/aaron-burden-DjsBoWp7HV0-unsplash.jpg')}}" alt="">
                </div>
            <div class="w-full md:w-3/5 h-full flex items-center bg-gray-100 rounded-lg">
                <div class="px-4 py-8 md:pr-8 md:pl-16 md:py-12 lg:pr-12 lg:pl-12">
                    <p class="text-gray-600 text-lg">At <span class="font-semibold"><span class="text-pink-500">Floral</span><span class="text-black">Gallery</span></span>, our vision is to curate a virtual haven where sellers from every corner of Canada can showcase their finest floral creations, while customers discover a gallery of possibilities to celebrate life's moments. Through innovation and collaboration, we strive to be the premier destination that unites sellers and seekers in a tapestry of blossoms, enriching lives with the enchantment and elegance of nature's artistry.</p>
                </div>
                <svg class="hidden md:block absolute inset-y-0 h-full w-24 fill-current text-gray-100 -ml-12" viewBox="0 0 100 100" preserveAspectRatio="none">
                    <polygon points="50,0 100,0 50,100 0,100" />
                </svg>
            </div>
        </div>
    </div>

    <!-- Newsletter -->
    <div class="pb-20 lg:pt-12 lg:pb-32">
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