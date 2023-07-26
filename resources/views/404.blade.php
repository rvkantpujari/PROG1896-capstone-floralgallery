@extends('layouts.app')

@section('title', '404 : Page Not Found - FloralGallery')

@section('main-content')
    <section class="container mx-auto py-12 px-8">
        <div class="w-full md:max-w-7xl mx-auto md:py-12 flex flex-col lg:flex-row lg:justify-around lg:items-center md:gap-8 lg:gap-12">
            <div class="w-full lg:w-1/2 md:px-12 lg:px-4">
                <p class="text-sm font-medium text-blue-500 dark:text-blue-400">404 error</p>
                <h1 class="mt-3 text-2xl font-semibold text-gray-800 md:text-3xl">Page not found</h1>
                <p class="mt-4 text-gray-500 dark:text-gray-600">Sorry 😥, the page you are looking for doesn't exist.<br><br>Here are some helpful links:</p>
                <div class="w-full flex items-center mt-6 gap-x-3">
                    <button class="flex items-center justify-center w-1/2 px-5 py-2 text-sm text-gray-700 transition-colors duration-200 bg-white border rounded-lg gap-x-2 sm:w-auto hover:bg-black hover:text-white">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 rtl:rotate-180">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 15.75L3 12m0 0l3.75-3.75M3 12h18" />
                        </svg>
                        <a href="{{url()->previous()}}">Go back</a>
                    </button>

                    <a href="{{route('home')}}" class="w-1/2 px-5 py-2 text-sm tracking-wide text-white transition-colors duration-200 bg-blue-500 rounded-lg shrink-0 sm:w-auto hover:bg-blue-600 dark:hover:bg-blue-500 dark:bg-blue-600">
                        Go to Homepage
                    </a>
                </div>
            </div>

            <div class="relative w-full lg:w-1/2 mt-8 lg:mt-0 md:px-12 lg:px-4 drop-shadow-md">
                <img class="w-full h-80 md:h-96 lg:h-[32rem] rounded-lg object-cover" src="{{asset('assets/images/pexels-carlos-jairo-6332857.jpg')}}" alt="Flowers Window">
            </div>
        </div>
    </section>
@endsection