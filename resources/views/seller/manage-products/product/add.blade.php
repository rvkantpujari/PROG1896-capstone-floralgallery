@extends('seller.layouts.app')

@section('title', 'Add New Product - FlowerGallery')

@section('main-content')
<div class="w-full">
        <h1 class="text-center lg:text-left text-[24px] md:text-[26px] font-semibold m-8"><a href="{{url()->previous()}}">Manage Products</a> <span class="hidden md:inline">></span> <br class="md:hidden"> <span class="text-pink-500">Add Product</span></h1>
        {{-- <div class="lg:w-4/5 mx-8 my-16 lg:mx-auto lg:my-20 p-4 bg-white shadow-md rounded-lg lg:p-0">
            <!-- Add New Product Form -->
            <div class="flex flex-col md:px-8 md:py-4 lg:py-0 lg:px-4 lg:pb-12 lg:flex-row lg:justify-center">
                <form method="POST" action="{{ route('seller.product.store') }}">
                    @csrf

                    <div class="py-4 px-8 w-full lg:min-h-[20vh]">
                        
                        <h2 class="pt-8 text-base font-semibold leading-7 text-gray-900">
                            Add Product
                        </h2>

                        <p class="mt-1 text-sm leading-6 text-gray-600">
                            Enter Product information below such as product name, description, price information etc.
                        </p>

                        <div class="mt-10 grid grid-cols-6 gap-x-2 gap-y-4 md:grid-cols-12">                            
                            <div class="col-span-6 md:col-span-6 lg:col-span-12">
                                <label for="product_name" class="block text-sm font-medium leading-6 text-gray-500">
                                    Product Name
                                </label>
                                <div class="mt-2">
                                    <input type="text" name="product_name" id="product_name" autofocus
                                        class="block w-full rounded-md border-0 py-1.5 px-4 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-pink-300 outline-none focus:border-white sm:text-sm sm:leading-6"
                                    />
                                </div>
                                @error('product_name')
                                    <span class="text-red-500 text-sm">{{$message}}</span>
                                @enderror
                            </div>
                            <div class="col-span-6 md:col-span-4 lg:col-span-4">
                                <label for="product_price" class="block text-sm font-medium leading-6 text-gray-500">
                                    Product Price
                                </label>
                                <div class="mt-2">
                                    <input type="text" name="product_price" id="product_price" placeholder="CAD$"
                                        class="block w-full rounded-md border-0 py-1.5 px-4 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-pink-300 outline-none focus:border-white sm:text-sm sm:leading-6"
                                    />
                                </div>
                                @error('product_price')
                                    <span class="text-red-500 text-sm">{{$message}}</span>
                                @enderror
                            </div>
                            <div class="col-span-6 md:col-span-4 lg:col-span-4">
                                <label for="product_dimensions" class="block text-sm font-medium leading-6 text-gray-500">
                                    Product Dimensions
                                </label>
                                <div class="mt-2">
                                    <input type="text" name="product_dimensions" id="product_dimensions" placeholder="12cm X 10cm"
                                        class="block w-full rounded-md border-0 py-1.5 px-4 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-pink-300 outline-none focus:border-white sm:text-sm sm:leading-6"
                                    />
                                </div>
                                @error('product_dimensions')
                                    <span class="text-red-500 text-sm">{{$message}}</span>
                                @enderror
                            </div>
                            <div class="col-span-6 md:col-span-4 lg:col-span-4">
                                <label for="category_id" class="block text-sm font-medium leading-6 text-gray-500">
                                    Product Category
                                </label>
                                <div class="mt-2">
                                    <select name="category_id" id="category_id" class="block w-full rounded-md border-0 py-1.5 px-4 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-pink-300 outline-none focus:border-white sm:text-sm sm:leading-6">
                                        <option value="0" selected disabled>Select Product Category</option>
                                        @foreach ($categories as $category)
                                            <option value="{{$category->id}}">{{$category->category}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                @error('category_id')
                                    <span class="text-red-500 text-sm">{{$message}}</span>
                                @enderror
                            </div>
                            <div class="col-span-6 md:col-span-6 lg:col-span-12">
                                <label for="product_desc" class="block text-sm font-medium leading-6 text-gray-500">
                                    Product Description
                                </label>
                                <div class="mt-2">
                                    <textarea name="product_desc" id="product_desc" cols="30" rows="4"
                                        class="block w-full rounded-md border-0 py-1.5 px-4 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-pink-300 outline-none focus:border-white sm:text-sm sm:leading-6"
                                    ></textarea>
                                </div>
                                @error('product_desc')
                                    <span class="text-red-500 text-sm">{{$message}}</span>
                                @enderror
                            </div>
                            <input type="hidden" name="seller_id" id="seller_id" value="{{auth()->user()->id}}"/>
                        </div>
                    </div>

                    <div class="py-8 flex justify-end md:gap-x-4">
                        <div class="px-8 flex flex-row gap-x-12 items-center md:justify-between">
                            <a href="{{route('seller.products')}}" class="rounded-md px-[20px] py-[8px] text-sm text-white bg-black font-semibold shadow-sm hover:bg-gray-800 focus-visible:outline-offset-2">
                                Cancel
                            </a>
                            <button type="submit" class="rounded-md px-[20px] py-[8px] text-sm text-white bg-pink-600 font-semibold shadow-sm hover:bg-pink-500 focus-visible:outline-offset-2 focus-visible:outline-pink-600">
                                Save
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div> --}}

        <!-- Profile -->
        <div class="w-full/2 flex flex-col mx-8 my-16 bg-white shadow-md lg:mx-12 lg:my-20 md:px-8 md:py-4 lg:p-0 lg:px-4 lg:pb-12 lg:flex-row lg:justify-center">
            <form id="send-verification" method="post" action="{{ route('verification.send') }}">
                @csrf
            </form>

            <form class="w-3/5" method="POST" action="{{route('seller.product.store')}}">
                @csrf

                <div class="py-4 px-8 w-full lg:min-h-[20vh]">
                    
                    <h2 class="pt-8 text-base font-semibold leading-7 text-gray-900">
                        Add Product
                    </h2>

                    <p class="mt-1 text-sm leading-6 text-gray-600">
                        Enter Product information below such as product name, description, price information etc.
                    </p>

                    <div class="mt-10 grid grid-cols-6 gap-x-2 gap-y-4 md:grid-cols-12">                            
                        <div class="col-span-6 md:col-span-6 lg:col-span-12">
                            <label for="product_name" class="block text-sm font-medium leading-6 text-gray-500">
                                Product Name
                            </label>
                            <div class="mt-2">
                                <input type="text" name="product_name" id="product_name" autofocus
                                    class="block w-full rounded-md border-0 py-1.5 px-4 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-pink-300 outline-none focus:border-white sm:text-sm sm:leading-6"
                                />
                            </div>
                            @error('product_name')
                                <span class="text-red-500 text-sm">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="col-span-6 md:col-span-4 lg:col-span-4">
                            <label for="product_price" class="block text-sm font-medium leading-6 text-gray-500">
                                Product Price
                            </label>
                            <div class="mt-2">
                                <input type="text" name="product_price" id="product_price" placeholder="CAD$"
                                    class="block w-full rounded-md border-0 py-1.5 px-4 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-pink-300 outline-none focus:border-white sm:text-sm sm:leading-6"
                                />
                            </div>
                            @error('product_price')
                                <span class="text-red-500 text-sm">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="col-span-6 md:col-span-4 lg:col-span-4">
                            <label for="product_dimensions" class="block text-sm font-medium leading-6 text-gray-500">
                                Product Dimensions
                            </label>
                            <div class="mt-2">
                                <input type="text" name="product_dimensions" id="product_dimensions" placeholder="12cm X 10cm"
                                    class="block w-full rounded-md border-0 py-1.5 px-4 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-pink-300 outline-none focus:border-white sm:text-sm sm:leading-6"
                                />
                            </div>
                            @error('product_dimensions')
                                <span class="text-red-500 text-sm">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="col-span-6 md:col-span-4 lg:col-span-4">
                            <label for="category_id" class="block text-sm font-medium leading-6 text-gray-500">
                                Product Category
                            </label>
                            <div class="mt-2">
                                <select name="category_id" id="category_id" class="block w-full rounded-md border-0 py-1.5 px-4 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-pink-300 outline-none focus:border-white sm:text-sm sm:leading-6">
                                    <option value="0" selected disabled>Select Product Category</option>
                                    @foreach ($categories as $category)
                                        <option value="{{$category->id}}">{{$category->category}}</option>
                                    @endforeach
                                </select>
                            </div>
                            @error('category_id')
                                <span class="text-red-500 text-sm">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="col-span-6 md:col-span-6 lg:col-span-12">
                            <label for="product_desc" class="block text-sm font-medium leading-6 text-gray-500">
                                Product Description
                            </label>
                            <div class="mt-2">
                                <textarea name="product_desc" id="product_desc" cols="30" rows="4"
                                    class="block w-full rounded-md border-0 py-1.5 px-4 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-pink-300 outline-none focus:border-white sm:text-sm sm:leading-6"
                                ></textarea>
                            </div>
                            @error('product_desc')
                                <span class="text-red-500 text-sm">{{$message}}</span>
                            @enderror
                        </div>
                        <input type="hidden" name="seller_id" id="seller_id" value="{{auth()->user()->id}}"/>
                    </div>
                </div>

                <div class="py-8 flex justify-end md:gap-x-4">
                    <div class="px-8 flex flex-row gap-x-12 items-center md:justify-between">
                        <a href="{{route('seller.products')}}" class="rounded-md px-[20px] py-[8px] text-sm text-white bg-black font-semibold shadow-sm hover:bg-gray-800 focus-visible:outline-offset-2">
                            Cancel
                        </a>
                        <button type="submit" class="rounded-md px-[20px] py-[8px] text-sm text-white bg-pink-600 font-semibold shadow-sm hover:bg-pink-500 focus-visible:outline-offset-2 focus-visible:outline-pink-600">
                            Save
                        </button>
                    </div>
                </div>
            </form>

            @if (session()->has('update-personal-info'))
                <script>
                    swal("Updated!! 😀🎉", "{{session('update-personal-info')}}", "success", {
                        button:true,
                        button:"OK",
                    });
                </script>
            @endif

            {{-- </div>
            <div class="flex md:px-8 md:py-4 lg:px-0 lg:pb-24 lg:flex-row lg:justify-center"> --}}
            
            <form class="w-2/5" method="post" action="{{ route('seller.password.update') }}">
                @csrf
                @method('put')
                
                <div class="py-4 px-8 w-full lg:min-h-[20vh]">
                    
                    <h2 class="pt-8 text-base font-semibold leading-7 text-gray-900">
                        Update Password
                    </h2>

                    <p class="mt-1 text-sm leading-6 text-gray-600">
                        Ensure your account is using a long, random password to stay secure.
                    </p>

                    {{-- <div class="mt-10 grid grid-cols-6 gap-x-2 gap-y-4 md:grid-cols-10 lg:grid-cols-12"> --}}

                        <label class="mt-10 flex justify-center h-32 px-4 transition bg-white border-2 border-gray-300 border-dashed rounded-md appearance-none cursor-pointer hover:border-gray-400 focus:outline-none">
                            <span class="flex items-center space-x-2">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-gray-600" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12" />
                                </svg>
                                <span class="font-medium text-gray-600 w-full">
                                    Drop files to Attach, or
                                    <span class="text-blue-600 underline">browse</span>
                                </span>
                            </span>
                            <input type="file" name="file_upload" class="hidden">
                        </label>
                    {{-- </div> --}}
                </div>

                <div class="py-8 flex justify-end md:gap-x-4">
                    @if (session('status') === 'profile-updated')
                        <p x-data="{ show: true }" x-show="show" x-transition
                            x-init="setTimeout(() => show = false, 2000)"
                            class="text-sm text-gray-600">
                            Saved.
                        </p>
                    @endif

                    <div class="px-8 flex flex-row gap-x-12 items-center md:justify-between">
                        <a href="{{url()->previous()}}" class="rounded-md px-[20px] py-[8px] text-sm text-white bg-black font-semibold shadow-sm hover:bg-gray-800 focus-visible:outline-offset-2">
                            Cancel
                        </a>
                        <button type="submit" class="rounded-md px-[20px] py-[8px] text-sm text-white bg-pink-600 font-semibold shadow-sm hover:bg-pink-500 focus-visible:outline-offset-2 focus-visible:outline-pink-600">
                            Save
                        </button>
                    </div>
                </div>
            </form>

            @if (session()->has('success-password-updated'))
                <script>
                    swal("Updated!! 💪🏻😀🎉", "{{session('success-password-updated')}}", "success", {
                        button:true,
                        button:"OK",
                    });
                </script>
            @endif
        </div>
        
    </div>
@endsection