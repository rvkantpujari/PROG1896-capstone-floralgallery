@extends('admin.layouts.app')

@section('title', 'Admin Dashboard - FlowerGallery')

@section('main-content')
    {{-- Add Main Section Here!!! --}}
    <div class="w-full">
        <h1 class="text-[26px] font-semibold m-8 pt-4">Dashboard</h1>
        @include('admin.dashboard.top_cards')
    </div>
@endsection