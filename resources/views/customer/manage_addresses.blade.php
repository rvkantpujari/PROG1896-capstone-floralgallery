@extends('layouts.app')

@section('title', 'Manage Addresses - FlowerGallery')

@section('main-content')
    <!-- Product Details -->
    <section class="container py-8">
        <div class="mx-auto max-w-7xl px-4 py-8 md:py-12 lg:px-8">
            <header class="pb-4 text-center text-2xl md:text-3xl font-semibold capitalize flex flex-col justify-center items-center gap-y-2">
                Your Addresses
                <div class="h-1 w-20 bg-pink-500 rounded"></div>
            </header>

            @livewire('customer.addresses')
        </div>
    </section>
@endsection

@section('js-scripts')
    <script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
@endsection
