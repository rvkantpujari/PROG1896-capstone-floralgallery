@extends('layouts.app')

@section('title', 'Store Dashboard - FlowerGallery')

@section('main-content')
    @include('layouts.dashboard.sidebar')
    {{-- Add Main Section Here!!! --}}
@endsection

@section('js-scripts')
    <script>
        function openSidebar() {
            document.querySelector('.sidebarMenu').classList.remove('md:invisible');
            document.querySelector('.sidebarBtn').classList.remove('md:visible');
            document.querySelector('.sidebarBtn').classList.add('md:hidden');
            
            document.querySelector('.sidebarMenu').classList.remove('invisible');
            document.querySelector('.sidebarBtn').classList.remove('visible');
            document.querySelector('.sidebarBtn').classList.add('hidden');
        }
        
        function closeSidebar() {
            document.querySelector('.sidebarMenu').classList.add('md:invisible');
            document.querySelector('.sidebarBtn').classList.add('md:visible');
            document.querySelector('.sidebarBtn').classList.remove('md:hidden');
            
            document.querySelector('.sidebarMenu').classList.add('invisible');
            document.querySelector('.sidebarBtn').classList.add('visible');
            document.querySelector('.sidebarBtn').classList.remove('hidden');
        }
    </script>
@endsection