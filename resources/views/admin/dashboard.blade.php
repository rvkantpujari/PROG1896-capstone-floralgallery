@extends('admin.layouts.app')

@section('title', 'Admin Dashboard - FlowerGallery')

@section('main-content')
    {{-- Add Main Section Here!!! --}}
    <div class="w-full md:block" id="main">
        <h1 class="text-[26px] font-semibold m-8 pt-4">Dashboard</h1>
        <div class="flex flex-col justify-center">
            @include('admin.dashboard.top_cards')
            @include('admin.dashboard.joined_analytics')
        </div>
    </div>
@endsection