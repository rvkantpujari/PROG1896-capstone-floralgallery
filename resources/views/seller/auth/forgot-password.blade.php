@extends("seller.layouts.accounts")
@section('title', 'Seller Forgot Password - FloralGallery')
@section('form-title', 'Seller - Forgot Password')
@section('form')
    <div class="text-center mt-4">
        Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.
    </div>

    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('seller.password.email') }}" class="my-8 mx-2">
        @csrf
        <!-- Email Address -->
        <div class="w-full mt-2">
            <input
                class="block w-full px-[15px] py-2 mt-2 text-gray-700 placeholder-gray-500 bg-white border rounded-lg dark:bg-gray-800 dark:border-gray-600 dark:placeholder-gray-400 focus:border-blue-400 dark:focus:border-blue-300 focus:ring-opacity-40 focus:outline-none focus:ring focus:ring-blue-300"
                type="text"
                name="email"
                placeholder="Email Address"
                aria-label="Email Address"
                value="{{old('email')}}"
            />
            @error('email')
                <span class="text-red-500 text-sm">{{$message}}</span>
            @enderror
        </div>

        <div class="flex justify-end mt-4">
            <button class="capitalize px-6 py-2 text-sm font-medium tracking-wide text-white transition-colors duration-300 transform bg-blue-500 rounded-lg hover:bg-blue-400 focus:outline-none focus:ring focus:ring-blue-300 focus:ring-opacity-50">
                Email password reset link
            </button>
        </div>
    </form>
@endsection
@section('form-link-up')
    <span class="text-sm text-gray-600 dark:text-gray-200">
        Want to try again?
    </span>

    <a href="{{route('seller.login')}}" class="mx-2 text-sm font-bold text-blue-500 dark:text-blue-400 hover:no-underline hover:text-pink-500">
        Sign In
    </a>
@endsection
