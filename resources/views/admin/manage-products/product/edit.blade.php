@extends('admin.layouts.app')

@section('title', 'Admin - Edit Product | FloralGallery')

@section('main-content')
    <!-- Edit Product -->
    <div class="w-full">
        <h1 class="text-center lg:text-left text-[24px] md:text-[26px] font-semibold m-8 pt-4"><a href="{{route('admin.products')}}">Manage Products</a> <span class="hidden md:inline">></span> <br class="md:hidden"> <span class="text-pink-500">Edit Product</span></h1>

        <form id="send-verification" method="post" action="{{ route('verification.send') }}">
            @csrf
        </form>
        <form method="POST" action="{{route('admin.product.update', ['id' => $product->id])}}" enctype="multipart/form-data" class="bg-white shadow-md mx-8 my-16 lg:mx-12 lg:my-20 md:px-8 md:py-4 lg:p-0 lg:px-4 lg:pb-12">
            @csrf
            @method('patch')

            <div class="w-full flex flex-col lg:flex-row lg:justify-center">

                <div class="lg:w-3/5 py-4 px-8 lg:min-h-[50vh]">
                    
                    <h2 class="pt-8 text-base font-semibold leading-7 text-gray-900">
                        Edit Product
                    </h2>

                    <p class="mt-1 text-sm leading-6 text-gray-600">
                        Update Product information below such as product name, description, price information etc.
                    </p>

                    <div class="mt-10 grid grid-cols-6 gap-x-2 gap-y-4 md:grid-cols-12">
                        
                        <div class="col-span-6 md:col-span-6 lg:col-span-6">
                            <label for="store_name" class="block text-sm font-medium leading-6 text-gray-500">
                                Store Name
                            </label>
                            <div class="mt-2">
                                <input type="text" name="store_name" id="store_name" placeholder="Store Name"
                                    class="block w-full rounded-md border-0 py-1.5 px-4 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-pink-300 outline-none focus:border-white sm:text-sm sm:leading-6"
                                    value="{{$product->store_name}}" readonly
                                />
                            </div>
                        </div>

                        <div class="col-span-6 md:col-span-6 lg:col-span-6">
                            <label for="product_seller" class="block text-sm font-medium leading-6 text-gray-500">
                                Seller Name
                            </label>
                            <div class="mt-2">
                                <input type="text" name="product_seller" id="product_seller" placeholder="Seller Name"
                                    class="block w-full rounded-md border-0 py-1.5 px-4 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-pink-300 outline-none focus:border-white sm:text-sm sm:leading-6"
                                    value="{{$product->first_name}} {{$product->last_name}}" readonly
                                />
                            </div>
                        </div>

                        <div class="col-span-6 md:col-span-12 lg:col-span-12">
                            <input type="hidden" name="id" id="product_id"
                                    class="block w-full rounded-md border-0 py-1.5 px-4 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-pink-300 outline-none focus:border-white sm:text-sm sm:leading-6"
                                    value="{{$product->id}}"
                            />
                            <label for="product_name" class="block text-sm font-medium leading-6 text-gray-500">
                                Product Name
                            </label>
                            <div class="mt-2">
                                <input type="text" name="product_name" id="product_name" autofocus
                                    class="block w-full rounded-md border-0 py-1.5 px-4 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-pink-300 outline-none focus:border-white sm:text-sm sm:leading-6"
                                    value="{{old('product_name', $product->product_name)}}"
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
                                    value="{{old('product_price', $product->product_price)}}"
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
                                    value="{{old('product_dimensions', $product->product_dimensions)}}"
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
                                    @foreach ($categories as $key => $category)
                                        <option value="{{$category->id}}" {{$product->category==$category->category ? "selected='selected'":""}}>{{$category->category}}</option>
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
                                >{{old('product_desc', $product->product_desc)}}</textarea>
                                <span class="text-gray-500 text-sm float-right"><span id="product_desc_length">0</span>/1000</span>
                            </div>
                            @error('product_desc')
                                <span class="text-red-500 text-sm">{{$message}}</span>
                            @enderror
                        </div>

                        <div class="col-span-6 md:col-span-12 mt-4">
                            <label for="product_status" class="block text-sm font-medium leading-6 text-gray-500">
                                Product Status
                            </label>
                            <span class="flex flex-wrap gap-x-6 gap-y-2 md:gap-6 mt-2">
                                @if ($product->product_status === 'draft')
                                    <div class="mt-2 flex items-center gap-x-2">
                                        <input type="radio" name="product_status" id="draft_status" value="draft" checked
                                            class="block rounded-md border-0 py-1.5 px-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 checked:text-pink-500 focus:ring-2 focus:ring-inset focus:ring-pink-300 outline-none focus:border-white sm:text-sm sm:leading-6"
                                        />
                                        <label for="draft_status">Draft</label>
                                    </div>
                                @endif
                                <div class="mt-2 flex items-center gap-x-2">
                                    <input type="radio" name="product_status" id="published_status" value="published"
                                        class="block rounded-md border-0 py-1.5 px-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 checked:text-pink-500 focus:ring-2 focus:ring-inset focus:ring-pink-300 outline-none focus:border-white sm:text-sm sm:leading-6"
                                        {{$product->product_status === 'published' ? 'checked' : ''}}
                                    />
                                    <label for="published_status">Publish</label>
                                </div>
                                <div class="mt-2 flex items-center gap-x-2">
                                    <input type="radio" name="product_status" id="private_status" value="private"
                                        class="block rounded-md border-0 py-1.5 px-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 checked:text-pink-500 focus:ring-2 focus:ring-inset focus:ring-pink-300 outline-none focus:border-white sm:text-sm sm:leading-6"
                                        {{$product->product_status === 'private' ? 'checked' : ''}}
                                    />
                                    <label for="private_status">Private</label>
                                </div>
                                <div class="mt-2 flex items-center gap-x-2">
                                    <input type="radio" name="product_status" id="deleted_status" value="deleted"
                                        class="block rounded-md border-0 py-1.5 px-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 checked:text-pink-500 focus:ring-2 focus:ring-inset focus:ring-pink-300 outline-none focus:border-white sm:text-sm sm:leading-6"
                                        {{$product->product_status === 'deleted' ? 'checked' : ''}}
                                    />
                                    <label for="deleted_status">Delete</label>
                                </div>
                            </span>
                        </div>

                        <input type="hidden" name="seller_id" id="seller_id" value="{{$product->seller_id}}"/>
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
                                    <span class="pt-2 text-center text-sm text-black font-semibold" id="files_count" hidden></span>
                                    <span class="text-red-500 text-xs mt-2" id="error_product_images" hidden>(Maximum 4 allowed.)</span>
                                </label>
                                <div class="mt-2">
                                    <label for="product_images" class="flex flex-col items-center justify-center w-full h-36 border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-gray-50 hover:bg-gray-100">
                                        <div class="flex flex-col items-center justify-center py-2">
                                            <svg class="w-8 h-8 mb-4 text-gray-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 16">
                                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 13h3a3 3 0 0 0 0-6h-.025A5.56 5.56 0 0 0 16 6.5 5.5 5.5 0 0 0 5.207 5.021C5.137 5.017 5.071 5 5 5a4 4 0 0 0 0 8h2.167M10 15V6m0 0L8 8m2-2 2 2"/>
                                            </svg>
                                            <p class="mb-2 text-sm text-gray-500 text-center"><span class="font-semibold">Click here to browse</span> images.</p>
                                            <p class="text-xs text-gray-500">PNG or JPG (Min: 100KB &amp; Max. 5MB)</p>
                                        </div>
                                        <input type="file" id="product_images" name="product_images[]" multiple class="hidden" />
                                    </label>
                                    
                                    @error('product_images.*')
                                        <span class="text-red-500 text-sm">{{$message}}</span>
                                    @enderror

                                    <div class="flex flex-row flex-wrap gap-4 mt-8">
                                        @if ($product->product_img1)
                                            <img src="{{asset($product->product_img1)}}" loading="lazy" class="h-[10vh] w-[30vw] md:h-[10vh] md:w-[16vw] lg:h-[12vh] lg:w-[10vw] object-cover rounded-md border-solid border-2 border-pink-300 hover:shadow-lg hover:border-pink-400 product_preview_image" alt="Product Image 1" id="preview_product_image1">
                                        @else
                                            <img src="" loading="lazy" class="h-[10vh] w-[30vw] md:h-[10vh] md:w-[16vw] lg:h-[12vh] lg:w-[10vw] object-cover rounded-md border-solid border-2 border-pink-300 hover:shadow-lg hover:border-pink-400 product_preview_image" alt="Product Image 1" id="preview_product_image1" hidden>
                                        @endif
                                        @if ($product->product_img2)
                                            <img src="{{asset($product->product_img2)}}" loading="lazy" class="h-[10vh] w-[30vw] md:h-[10vh] md:w-[16vw] lg:h-[12vh] lg:w-[10vw] object-cover rounded-md border-solid border-2 border-pink-300 hover:shadow-lg hover:border-pink-400 product_preview_image" alt="Product Image 2" id="preview_product_image2">
                                        @else
                                            <img src="" loading="lazy" class="h-[10vh] w-[30vw] md:h-[10vh] md:w-[16vw] lg:h-[12vh] lg:w-[10vw] object-cover rounded-md border-solid border-2 border-pink-300 hover:shadow-lg hover:border-pink-400 product_preview_image" alt="Product Image 2" id="preview_product_image2" hidden>
                                        @endif
                                        @if ($product->product_img3)
                                            <img src="{{asset($product->product_img3)}}" loading="lazy" class="h-[10vh] w-[30vw] md:h-[10vh] md:w-[16vw] lg:h-[12vh] lg:w-[10vw] object-cover rounded-md border-solid border-2 border-pink-300 hover:shadow-lg hover:border-pink-400 product_preview_image" alt="Product Image 3" id="preview_product_image3">
                                        @else
                                            <img src="" loading="lazy" class="h-[10vh] w-[30vw] md:h-[10vh] md:w-[16vw] lg:h-[12vh] lg:w-[10vw] object-cover rounded-md border-solid border-2 border-pink-300 hover:shadow-lg hover:border-pink-400 product_preview_image" alt="Product Image 3" id="preview_product_image3" hidden>
                                        @endif
                                        @if ($product->product_img4)
                                            <img src="{{asset($product->product_img4)}}" loading="lazy" class="h-[10vh] w-[30vw] md:h-[10vh] md:w-[16vw] lg:h-[12vh] lg:w-[10vw] object-cover rounded-md border-solid border-2 border-pink-300 hover:shadow-lg hover:border-pink-400 product_preview_image" alt="Product Image 4" id="preview_product_image4">
                                        @else
                                            <img src="" loading="lazy" class="h-[10vh] w-[30vw] md:h-[10vh] md:w-[16vw] lg:h-[12vh] lg:w-[10vw] object-cover rounded-md border-solid border-2 border-pink-300 hover:shadow-lg hover:border-pink-400 product_preview_image" alt="Product Image 4" id="preview_product_image4" hidden>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                        <script>
                            document.getElementById('product_images').addEventListener('change', previewImage);
                            let filesCount = document.getElementById('files_count');
                            filesCount.style.display = "none";
                            let productPreviewImages = document.querySelectorAll('.product_preview_image');
                            function previewImage(event) {
                                let files = event.target.files;
                                filesCount.innerHTML = files.length + ' file' + (files.length == 1 ? '' : 's') + ' selected';
                                filesCount.style.display = "inline";
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
                                    fileSizeErrorMsg.style.display = "inline";
                                }
                            }
                        </script>
                    </div>
                    
                </div>
                
            </div>
            <div class="py-8 flex justify-end md:justify-start md:gap-x-4">
                <div class="px-8 flex flex-row gap-x-12 items-center md:justify-between">
                    <a href="{{route('admin.products')}}" class="rounded-md px-[20px] py-[8px] text-sm text-white bg-black font-semibold shadow-sm hover:bg-gray-800 focus-visible:outline-offset-2">
                        Cancel
                    </a>
                    <button type="submit" class="rounded-md px-[20px] py-[8px] text-sm text-white bg-pink-600 font-semibold shadow-sm hover:bg-pink-500 focus-visible:outline-offset-2 focus-visible:outline-pink-600">
                        Save
                    </button>
                </div>
            </div>
        </form>
    </div>
    <script>
        addEventListener("load", (event) => {
            let charCount = document.getElementById('product_desc_length');
            let productDesc = document.getElementById('product_desc');
            charCount.innerHTML = productDesc.value.length;
            productDesc.addEventListener('keyup', (e) => {
                if(productDesc.value.length < 200) {
                    charCount.innerHTML = '🙁 ' + productDesc.value.length;
                } else if(productDesc.value.length >= 200 && productDesc.value.length <= 1000) {
                    charCount.innerHTML = '😇 ' + productDesc.value.length;
                } else {
                    charCount.innerHTML = '😢 ' + productDesc.value.length;
                }
            })
        });
    </script>
@endsection