@extends('layouts.app')

@section('title', 'Checkout Order - FloralGallery')

@section('main-content')
    <!-- Checkout Details -->
    <section class="py-4">
        <div class="mx-auto max-w-7xl p-4 md:py-12 lg:px-2">
            <div class="mx-auto">
                <header class="pb-4 text-center text-2xl md:text-3xl font-semibold capitalize flex flex-col justify-center items-center gap-y-2">
                    Checkout
                    <div class="h-1 w-20 bg-pink-500 rounded"></div>
                </header>

                <div class="mx-auto px-4">
                    @livewire('customer.order-checkout')
                </div>
            </div>
        </div>
    </section>
@endsection
