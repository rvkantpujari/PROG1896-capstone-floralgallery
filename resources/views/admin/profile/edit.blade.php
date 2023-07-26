@extends('admin.layouts.app')

@section('title', 'Admin - Manage Profile | FloralGallery')

@section('main-content')
    <div class="py-20 mx-auto">
        <h2 class="pb-12 font-semibold leading-7 text-gray-900 text-3xl text-center flex flex-col gap-4">
            Manage Profile
            <div class="h-1 w-24 bg-pink-500 rounded self-center"></div>
        </h2>
        <div class="space-y-6 px-6 lg:px-12">
            <div class="p-4 bg-white shadow-md rounded-lg lg:p-0">
                @include('admin.profile.partials.update-profile')
            </div>
            {{-- <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                @include('admin.profile.partials.delete-user-form')
            </div> --}}
        </div>
    </div>
@endsection