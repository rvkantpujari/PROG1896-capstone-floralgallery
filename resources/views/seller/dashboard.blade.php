@extends('seller.layouts.app')

@section('title', 'Seller Dashboard - FlowerGallery')

@section('main-content')
    {{-- Add Main Section Here!!! --}}
    <h1>Hi, {{Auth::guard('seller')->user()->first_name}}. This is Seller Dashboard.</h1>
    @if(Auth::user()->email_verified_at == null)
        <div role="alert" class="h-auto md:h-[8vh] lg:h-[12vh] w-auto rounded border-b-4 md:border-s-4 md:border-b-0 border-red-500 bg-red-50 mx-4 px-6 py-4 text-justify absolute top-40 md:top-24 md:right-0 transition duration-300"
            x-data="{ show: true }" x-show="show" x-transition
            x-init="setTimeout(() => show = false, 5000)"
        >
            <div class="flex items-center gap-2 text-red-800">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="h-5 w-5">
                    <path fill-rule="evenodd" d="M9.401 3.003c1.155-2 4.043-2 5.197 0l7.355 12.748c1.154 2-.29 4.5-2.599 4.5H4.645c-2.309 0-3.752-2.5-2.598-4.5L9.4 3.003zM12 8.25a.75.75 0 01.75.75v3.75a.75.75 0 01-1.5 0V9a.75.75 0 01.75-.75zm0 8.25a.75.75 0 100-1.5.75.75 0 000 1.5z" clip-rule="evenodd"/>
                </svg>
                <strong class="block font-medium"> Access Restrictions!! </strong>
            </div>
            
            <p class="mt-2 text-sm text-red-700">
                To access all features conveniently, go to 
                <a href={{route('seller.profile.edit')}} class="text-black">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 inline">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M17.982 18.725A7.488 7.488 0 0012 15.75a7.488 7.488 0 00-5.982 2.975m11.963 0a9 9 0 10-11.963 0m11.963 0A8.966 8.966 0 0112 21a8.966 8.966 0 01-5.982-2.275M15 9.75a3 3 0 11-6 0 3 3 0 016 0z" />
                    </svg>
                    Profile
                </a> and verify your email.
            </p>
        </div>
    @endif
@endsection