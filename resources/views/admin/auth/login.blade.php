@extends("admin.layouts.accounts")
@section('title', 'Admin Sign In - FloralGallery')
@section('form-title', 'Admin - Sign In')
@section('form')
    <form method="POST" action="{{ route('admin.login') }}" class="my-8 mx-2">
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

        <!-- Password -->
        <div class="w-full mt-2">
            <input
                class="block w-full px-[15px] py-2 mt-2 text-gray-700 placeholder-gray-500 bg-white border rounded-lg dark:bg-gray-800 dark:border-gray-600 dark:placeholder-gray-400 focus:border-blue-400 dark:focus:border-blue-300 focus:ring-opacity-40 focus:outline-none focus:ring focus:ring-blue-300"
                type="password"
                name="password"
                placeholder="Password"
                aria-label="Password"
                value="{{old('password')}}"
            />
            @error('password')
                <span class="text-red-500 text-sm">{{$message}}</span>
            @enderror
        </div>

        <!-- Remember Me -->
        <div class="mt-[16px] ml-2 flex gap-2">
            <input id="remember_me"
                class="block p-[16px] mt-2 rounded-md text-gray-700 focus:ring-opacity-40 focus:outline-none focus:ring focus:ring-blue-300"
                type="checkbox"
                name="remember"
            /> Remember Me
        </div>

        <div class="flex items-center justify-between mt-4">
            @if (Route::has('password.request'))
            <a href="{{ route('admin.password.request') }}" class="text-sm text-black hover:text-gray-500">
                Forget Password?
            </a>
            @endif

            <button class="px-6 py-2 text-sm font-medium tracking-wide text-white capitalize transition-colors duration-300 transform bg-blue-500 rounded-lg hover:bg-blue-400 focus:outline-none focus:ring focus:ring-blue-300 focus:ring-opacity-50">
                Sign In
            </button>
        </div>
    </form>
@endsection
@section('form-link-up')
    <span class="text-sm text-gray-600 dark:text-gray-200">
        Don't have an account?
    </span>

    <a href="{{route('admin.register')}}" class="mx-2 text-sm font-bold text-blue-500 dark:text-blue-400 hover:no-underline hover:text-pink-500">
        Sign Up
    </a>
@endsection
