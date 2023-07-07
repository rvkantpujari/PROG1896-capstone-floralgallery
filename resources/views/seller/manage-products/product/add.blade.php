@extends('seller.layouts.app')

@section('title', 'Add New Product - FlowerGallery')

@section('main-content')
    <div class="w-full">
        <h1 class="text-center lg:text-left text-[26px] font-semibold m-8"><a href="{{url()->previous()}}">Manage Products</a> > <span class="text-pink-500">Add Product</span></h1>
        <div class="lg:w-4/5 mx-8 my-16 lg:mx-auto lg:my-20 p-4 bg-white shadow-md rounded-lg lg:p-0">
            <!-- Add New Product Form -->
            <div class="flex flex-col md:px-8 md:py-4 lg:py-0 lg:px-4 lg:pb-12 lg:flex-row lg:justify-center">
                <form method="POST" action="{{ route('seller.product.add') }}">
                    @csrf
                </form>
            </div>
        </div>
    </div>
@endsection