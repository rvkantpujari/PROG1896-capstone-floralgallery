@extends('layout.accounts')
@section('title', 'Sign Up - FloralGallery')
@section('form-title', 'Sign Up')
@section('form')
    <form method="POST">
        @csrf
        <div class="w-full mt-4">
            <input
                class="block w-full px-4 py-2 mt-2 text-gray-700 placeholder-gray-500 bg-white border rounded-lg dark:bg-gray-800 dark:border-gray-600 dark:placeholder-gray-400 focus:border-blue-400 dark:focus:border-blue-300 focus:ring-opacity-40 focus:outline-none focus:ring focus:ring-blue-300"
                type="text"
                name="email"
                placeholder="Email Address"
                aria-label="Email Address"
            />
            @error('email')
                <span class="text-red-500 text-sm">{{$message}}</span>
            @enderror
        </div>

        <div class="w-full mt-4">
            <input
                class="block w-full px-4 py-2 mt-2 text-gray-700 placeholder-gray-500 bg-white border rounded-lg dark:bg-gray-800 dark:border-gray-600 dark:placeholder-gray-400 focus:border-blue-400 dark:focus:border-blue-300 focus:ring-opacity-40 focus:outline-none focus:ring focus:ring-blue-300"
                type="password"
                name="password"
                placeholder="Password"
                aria-label="Password"
            />
            @error('password')
                <span class="text-red-500 text-sm">{{$message}}</span>
            @enderror
        </div>

        <div class="w-full mt-4">
            <input
                class="block w-full px-4 py-2 mt-2 text-gray-700 placeholder-gray-500 bg-white border rounded-lg dark:bg-gray-800 dark:border-gray-600 dark:placeholder-gray-400 focus:border-blue-400 dark:focus:border-blue-300 focus:ring-opacity-40 focus:outline-none focus:ring focus:ring-blue-300"
                type="password"
                name="confirm_password"
                placeholder="Confirm Password"
                aria-label="Confirm Password"
            />
            @error('confirm_password')
                <span class="text-red-500 text-sm">{{$message}}</span>
            @enderror
        </div>

        <div class="flex items-center justify-content-end mt-4">
            <button
                class="px-6 py-2 text-sm font-medium tracking-wide text-white capitalize transition-colors duration-300 transform bg-blue-500 rounded-lg hover:bg-blue-400 focus:outline-none focus:ring focus:ring-blue-300 focus:ring-opacity-50"
            >
                Sign Up
            </button>
        </div>
    </form>
@endsection
@section('form-link-up')
    <span class="text-sm text-gray-600 dark:text-gray-200">
        Already have an account?
    </span>

    <a href="{{url('signin')}}" class="mx-2 text-sm font-bold text-blue-500 dark:text-blue-400 hover:no-underline hover:text-pink-500">
        Sign In
    </a>
@endsection
