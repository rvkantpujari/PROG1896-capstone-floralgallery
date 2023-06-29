@extends("layouts.accounts")
@section('title', 'Verify Email - FloralGallery')
@section('form-title', 'Verify Email')
@section('form')
    <section class="container my-8">
        <div class="my-4 mx-2 text-sm text-gray-600">
            {{ __('Thanks for signing up! Before getting started, could you please verify your email address by clicking on the link we just emailed to you? If you didn\'t receive the email, we will gladly send you another.') }}
        </div>
    
        @if (session('status') == 'verification-link-sent')
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ __('A new verification link has been sent to the email address you provided during registration.') }}
            </div>
        @endif
    
        <div class="flex justify-between px-2">
            <form method="POST" action="{{ route('verification.send') }}">
                @csrf
                <button type="submit" class="py-[5px] px-[10px] rounded text-white bg-black">Resend Verification Email</button>
            </form>
        
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit" class="py-[5px] px-[10px] rounded text-white bg-red-500">Logout</button>
            </form>
        </div>
    </section>
@endsection
@section('form-link-up')
    <span class="text-sm text-gray-600 dark:text-gray-200">
        Want to verify later?
    </span>

    <a href="{{url('/')}}" class="mx-2 text-sm font-bold text-blue-500 dark:text-blue-400 hover:no-underline hover:text-pink-500">
        Continue
    </a>
@endsection
