@extends("seller.layouts.accounts")
@section('title', 'Seller Reset Password - FloralGallery')
@section('form-title', 'Seller - Reset Password')
@section('form')
    <form method="POST" action="{{ route('seller.password.store') }}" class="my-8 mx-2">
        @csrf

        <!-- Password Reset Token -->
        <input type="hidden" name="token" value="{{ $request->route('token') }}">

        <!-- Email Address -->
        <div class="w-full mt-2">
            <input
                class="block w-full px-[15px] py-2 mt-2 text-gray-700 placeholder-gray-500 bg-white border rounded-lg dark:bg-gray-800 dark:border-gray-600 dark:placeholder-gray-400 focus:border-blue-400 dark:focus:border-blue-300 focus:ring-opacity-40 focus:outline-none focus:ring focus:ring-blue-300"
                type="text" name="email" placeholder="Email Address" aria-label="Email Address"
                value="{{old('email', $request->email)}}" readonly
            />
            @error('email')
                <span class="text-red-500 text-sm">{{$message}}</span>
            @enderror
        </div>

        <!-- Password -->
        <div class="w-full mt-2">
            <input
                class="block w-full px-[15px] py-2 mt-2 text-gray-700 placeholder-gray-500 bg-white border rounded-lg dark:bg-gray-800 dark:border-gray-600 dark:placeholder-gray-400 focus:border-blue-400 dark:focus:border-blue-300 focus:ring-opacity-40 focus:outline-none focus:ring focus:ring-blue-300"
                type="password" name="password" placeholder="Password" aria-label="Password"
                value="{{old('password')}}" autocomplete="new-password"
            />
            @error('password')
                <span class="text-red-500 text-sm">{{$message}}</span>
            @enderror
        </div>

        <!-- Password Confirmation -->
        <div class="w-full mt-2">
            <input
                class="block w-full px-[15px] py-2 mt-2 text-gray-700 placeholder-gray-500 bg-white border rounded-lg dark:bg-gray-800 dark:border-gray-600 dark:placeholder-gray-400 focus:border-blue-400 dark:focus:border-blue-300 focus:ring-opacity-40 focus:outline-none focus:ring focus:ring-blue-300"
                type="password" name="password_confirmation" placeholder="Confirm Password"
                aria-label="Password" value="{{old('password_confirmation')}}" autocomplete="new-password"
            />
            @error('password_confirmation')
                <span class="text-red-500 text-sm">{{$message}}</span>
            @enderror
        </div>

        <div class="flex items-center justify-end mt-4">
            <button class="px-6 py-2 text-sm font-medium tracking-wide text-white capitalize transition-colors duration-300 transform bg-blue-500 rounded-lg hover:bg-blue-400 focus:outline-none focus:ring focus:ring-blue-300 focus:ring-opacity-50">
                Reset Password
            </button>
        </div>
    </form>
@endsection
@section('form-link-up')
    <span class="text-sm text-gray-600 dark:text-gray-200">
        Already have an account?
    </span>

    <a href="{{route('seller.login')}}" class="mx-2 text-sm font-bold text-blue-500 dark:text-blue-400 hover:no-underline hover:text-pink-500">
        Sign In
    </a>
@endsection