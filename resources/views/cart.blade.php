@extends('layouts.app')

@section('title', 'Your Cart - FlowerGallery')

@section('main-content')
    <!-- Product Details -->
    <section class="container py-8">
        <div class="mx-auto max-w-6xl px-4 py-8 md:py-12 lg:px-8">
            <div class="mx-auto">
                <header class="pb-4 text-center text-2xl md:text-3xl font-semibold capitalize flex flex-col justify-center items-center gap-y-2">
                    Your Cart
                    <div class="h-1 w-20 bg-pink-500 rounded"></div>
                </header>

                @livewire('customer.manage-cart')
            </div>
        </div>
    </section>
@endsection
