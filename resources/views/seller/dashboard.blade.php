@extends('seller.layouts.app')

@section('title', 'Seller Dashboard - FloralGallery')

@section('main-content')
    {{-- Add Main Section Here!!! --}}
    <section class="container m-8 pt-4">
        <h1 class="text-[26px] font-semibold">Dashboard</h1>
        <div class="pt-8">
            @if(Auth::user()->email_verified_at == null)
                <div class="w-full md:w-3/5 lg:w-2/5 mx-auto py-20">
                    <article class="rounded-xl border-2 border-gray-100 bg-white shadow-lg">
                        <div class="flex items-start gap-4 md:p-4 p-6 lg:p-8">
                            <div>
                                <h3 class="flex items-center gap-2 font-medium text-xl hover:underline">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3.75m-9.303 3.376c-.866 1.5.217 3.374 1.948 3.374h14.71c1.73 0 2.813-1.874 1.948-3.374L13.949 3.378c-.866-1.5-3.032-1.5-3.898 0L2.697 16.126zM12 15.75h.007v.008H12v-.008z" />
                                    </svg>
                                    Attention Required
                                </h3>
                            
                                <p class="mt-2 line-clamp-2 text-sm text-gray-700">
                                    To access all features conveniently, please <strong>verify</strong> your email.
                                </p>
                                
                                <p class="mt-4 text-xs">
                                    <a href="{{route('seller.profile.edit')}}" title="Verify Email" class="inline-block border border-pink-300 bg-pink-400 text-white rounded px-4 py-2 text-sm font-medium hover:bg-green-50 hover:border-green-300 hover:text-green-800 focus:relative">
                                        Verify Email
                                    </a>                 
                                </p>
                            </div>
                        </div>
                    
                        <div class="flex justify-end">
                            <strong class="-mb-[2px] -me-[2px] inline-flex items-center gap-1 rounded-ee-xl rounded-ss-xl bg-red-600 px-3 py-1.5 text-white">
                                <span class="text-[14px] font-medium">Not Verified!</span>
                            </strong>
                        </div>
                    </article>
                </div>
            @else
                <h2>Hi, {{Auth::guard('seller')->user()->first_name}}. This is Seller Dashboard.</h2>
            @endif
        </div>
    </section>
@endsection