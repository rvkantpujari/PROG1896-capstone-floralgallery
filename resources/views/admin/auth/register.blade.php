@extends('admin.layouts.accounts')
@section('title', 'Admin Sign Up - FloralGallery')
@section('form-title', 'Admin - Sign Up')
@section('form')
    <form method="POST" action="{{ route('admin.register') }}" class="my-8 mx-2">
        @csrf
        <div class="grid grid-cols-6 gap-x-4 gap-y-0">
            <div class="w-full mt-2 col-span-3">
                <input
                    class="block w-full px-[15px] py-2 mt-2 text-gray-700 placeholder-gray-500 bg-white border rounded-lg dark:bg-gray-800 dark:border-gray-600 dark:placeholder-gray-400 focus:border-blue-400 dark:focus:border-blue-300 focus:ring-opacity-40 focus:outline-none focus:ring focus:ring-blue-300"
                    type="text"
                    name="first_name"
                    placeholder="First Name"
                    aria-label="First Name"
                    value="{{old('first_name')}}"
                />
                @error('first_name')
                    <span class="text-red-500 text-sm">{{$message}}</span>
                @enderror
            </div>

            <div class="w-full mt-2 col-span-3">
                <input
                    class="block w-full px-[15px] py-2 mt-2 text-gray-700 placeholder-gray-500 bg-white border rounded-lg dark:bg-gray-800 dark:border-gray-600 dark:placeholder-gray-400 focus:border-blue-400 dark:focus:border-blue-300 focus:ring-opacity-40 focus:outline-none focus:ring focus:ring-blue-300"
                    type="text"
                    name="last_name"
                    placeholder="Last Name"
                    aria-label="Last Name"
                    value="{{old('last_name')}}"
                />
                @error('last_name')
                    <span class="text-red-500 text-sm">{{$message}}</span>
                @enderror
            </div>

            <div class="w-full mt-2 col-span-6">
                <input
                    class="block w-full px-[15px] py-2 mt-2 text-gray-700 placeholder-gray-500 bg-white border rounded-lg dark:bg-gray-800 dark:border-gray-600 dark:placeholder-gray-400 focus:border-blue-400 dark:focus:border-blue-300 focus:ring-opacity-40 focus:outline-none focus:ring focus:ring-blue-300"
                    type="text"
                    name="email"
                    placeholder="Email Address"
                    aria-label="Email Address"
                    autocomplete="email"
                    value="{{old('email')}}"
                />
                @error('email')
                    <span class="text-red-500 text-sm">{{$message}}</span>
                @enderror
            </div>

            <div class="w-full mt-2 col-span-6">
                <input
                    class="block w-full px-[15px] py-2 mt-2 text-gray-700 placeholder-gray-500 bg-white border rounded-lg dark:bg-gray-800 dark:border-gray-600 dark:placeholder-gray-400 focus:border-blue-400 dark:focus:border-blue-300 focus:ring-opacity-40 focus:outline-none focus:ring focus:ring-blue-300"
                    type="password"
                    name="password"
                    placeholder="Password"
                    aria-label="Password"
                    autocomplete="new-password"
                />
                @error('password')
                    <span class="text-red-500 text-sm">{{$message}}</span>
                @enderror
            </div>

            <div class="w-full mt-2 col-span-6">
                <input
                    class="block w-full px-[15px] py-2 mt-2 text-gray-700 placeholder-gray-500 bg-white border rounded-lg dark:bg-gray-800 dark:border-gray-600 dark:placeholder-gray-400 focus:border-blue-400 dark:focus:border-blue-300 focus:ring-opacity-40 focus:outline-none focus:ring focus:ring-blue-300"
                    type="password"
                    name="password_confirmation"
                    placeholder="Confirm Password"
                    aria-label="Confirm Password"
                    autocomplete="new-password"
                />
                @error('password_confirmation')
                    <span class="text-red-500 text-sm">{{$message}}</span>
                @enderror
            </div>
        </div>

        <div class="flex items-center justify-content-end mt-4">
            <button type="submit"
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

    <a href="{{url('admin.login')}}" class="mx-2 text-sm font-bold text-blue-500 dark:text-blue-400 hover:no-underline hover:text-pink-500">
        Sign In
    </a>
@endsection