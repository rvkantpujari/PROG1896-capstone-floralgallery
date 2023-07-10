@extends('seller.layouts.app')

@section('title', 'Add New Product - FlowerGallery')

@section('main-content')
    <!-- Add New Product -->
    <div class="w-full">
        <h1 class="text-center lg:text-left text-[24px] md:text-[26px] font-semibold m-8"><a href="{{route('seller.products')}}">Manage Products</a> <span class="hidden md:inline">></span> <br class="md:hidden"> <span class="text-pink-500">Add Product</span></h1>

        <form id="send-verification" method="post" action="{{ route('verification.send') }}">
            @csrf
        </form>

        <form method="POST" action="{{route('seller.product.store')}}" enctype="multipart/form-data" class="bg-white shadow-md mx-8 my-16 lg:mx-12 lg:my-20 md:px-8 md:py-4 lg:p-0 lg:px-4 lg:pb-12">
            @csrf
            <div class="w-full flex flex-col lg:flex-row lg:justify-center">
                <div class="lg:w-3/5 py-4 px-8 lg:min-h-[50vh]">
                    
                    <h2 class="pt-8 text-base font-semibold leading-7 text-gray-900">
                        Add Product
                    </h2>

                    <p class="mt-1 text-sm leading-6 text-gray-600">
                        Enter Product information below such as product name, description, price information etc.
                    </p>

                    <div class="mt-10 grid grid-cols-6 gap-x-2 gap-y-4 md:grid-cols-12">                            
                        <div class="col-span-6 md:col-span-12 lg:col-span-12">
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
                        <div class="col-span-6 md:col-span-12 lg:col-span-12">
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

                <div class="lg:w-2/5 py-4 px-8 lg:min-h-[50vh]">
                    
                    <h2 class="pt-8 text-base font-semibold leading-7 text-gray-900">
                        Upload Product Images
                    </h2>

                    <p class="mt-1 text-sm leading-6 text-gray-600">
                        Upload at least one image of the product you want to sell.
                    </p>

                    
                    <div class="mt-10 grid grid-cols-6 gap-x-2 gap-y-4 md:grid-cols-12">                            
                        <div class="col-span-6 md:col-span-12 lg:col-span-12">
                            <div class="col-span-6 md:col-span-12 lg:col-span-12">
                                <label for="product_name" class="block text-sm font-medium leading-6 text-gray-500">
                                    Product Image(s)
                                </label>
                                <div class="mt-2">
                                    <input type="file" name="product_images[]" id="product_images" multiple
                                        class="block w-full rounded-md border-0 py-1.5 px-4 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-pink-300 outline-none focus:border-white sm:text-sm sm:leading-6"
                                    />
                                    <span class="text-red-500 text-xs mt-2" id="error_product_images" hidden>Maximum 4 images allowed.</span>
                                    <div class="flex flex-row flex-wrap gap-4 mt-8">
                                        <img src="" class="h-[10vh] w-[30vw] md:h-[10vh] md:w-[16vw] lg:h-[12vh] lg:w-[10vw] object-cover rounded-md border-solid border-2 border-pink-300 product_preview_image" alt="Product Image 1" id="preview_product_image1" hidden>
                                        <img src="" class="h-[10vh] w-[30vw] md:h-[10vh] md:w-[16vw] lg:h-[12vh] lg:w-[10vw] object-cover rounded-md border-solid border-2 border-pink-300 product_preview_image" alt="Product Image 2" id="preview_product_image2" hidden>
                                        <img src="" class="h-[10vh] w-[30vw] md:h-[10vh] md:w-[16vw] lg:h-[12vh] lg:w-[10vw] object-cover rounded-md border-solid border-2 border-pink-300 product_preview_image" alt="Product Image 3" id="preview_product_image3" hidden>
                                        <img src="" class="h-[10vh] w-[30vw] md:h-[10vh] md:w-[16vw] lg:h-[12vh] lg:w-[10vw] object-cover rounded-md border-solid border-2 border-pink-300 product_preview_image" alt="Product Image 4" id="preview_product_image4" hidden>
                                    </div>
                                </div>
                                @error('product_images.*')
                                    <span class="text-red-500 text-sm">{{$message}}</span>
                                @enderror
                            </div>
                        </div>
                        <script>
                            document.getElementById('product_images').addEventListener('change', previewImage);
                            let productPreviewImages = document.querySelectorAll('.product_preview_image');
                            function previewImage(event) {
                                let files = event.target.files;
                                let fileSizeErrorMsg = document.getElementById('error_product_images');
                                // Hide image previews
                                productPreviewImages.forEach(img => {
                                    img.style.display = "none";
                                });
                                // Load image previews
                                if(files.length > 0 && files.length < 5) {
                                    fileSizeErrorMsg.style.display = "none";
                                    let counter = 0;
                                    for(let counter = 0; counter < files.length; counter++)
                                    {
                                        let src = URL.createObjectURL(files[counter]);
                                        let preview = document.getElementById("preview_product_image"+(counter+1));
                                        preview.src = src;
                                        preview.style.display = "block";
                                    }
                                }
                                else {
                                    fileSizeErrorMsg.style.display = "block";
                                }
                            }
                        </script>
                    </div>
                    
                </div>
            </div>
            <div class="py-8 flex justify-end md:justify-start md:gap-x-4">
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
@endsection