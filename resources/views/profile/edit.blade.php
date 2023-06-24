@extends('layouts.app')

@section('title', 'Manage Profile - FlowerGallery')

@section('main-content')
    <div class="py-20">
        <h2 class="pb-12 font-semibold leading-7 text-gray-900 text-3xl text-center flex flex-col gap-4">
            Manage Profile
            <div class="h-1 w-24 bg-pink-500 rounded self-center"></div>
        </h2>
        <div class="max-w-7xl mx-auto px-6 lg:px-8 space-y-6">
            <div class="p-4 bg-white shadow-md rounded-lg lg:p-0">
                @include('profile.partials.update-profile')
            </div>

            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                @include('profile.partials.delete-user-form')
            </div>
        </div>
    </div>
@endsection