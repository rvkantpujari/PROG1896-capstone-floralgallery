@extends('seller.layouts.app')

@section('title', 'Seller - Manage Profile | FloralGallery')

@section('main-content')
    <div class="w-full py-20">
        <h2 class="pb-12 font-semibold leading-7 text-gray-900 text-3xl text-center flex flex-col gap-4">
            Manage Profile
            <div class="h-1 w-24 bg-pink-500 rounded self-center"></div>
        </h2>
        <div class="px-6 lg:px-12">
            <div class="p-4 bg-white shadow-md rounded-lg lg:p-0">
                @include('seller.profile.partials.update-profile')
            </div>
        </div>
    </div>
@endsection