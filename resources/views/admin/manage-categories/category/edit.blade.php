@extends('admin.layouts.app')

@section('title', 'Admin - Edit Category | FloralGallery')

@section('main-content')
    {{-- Add Main Section Here!!! --}}
    <div class="w-full">
        <h1 class="text-center lg:text-left text-[26px] font-semibold m-8 pt-4"><a href="{{url()->previous()}}">Manage Categorys</a> > <span class="text-pink-500">Edit Category</span></h1>
        <div class="lg:w-4/5 mx-8 my-16 lg:mx-auto lg:my-20 p-4 bg-white shadow-md rounded-lg lg:p-0">
            <!-- Profile -->
            <div class="flex flex-col md:px-8 md:py-4 lg:py-0 lg:px-4 lg:pb-12 lg:flex-row lg:justify-center">
                <form method="post" action="{{ route('admin.category.update', ['id'=>$category->id]) }}">
                    @csrf
                    @method('patch')
                    
                    <div class="py-4 px-8 w-full lg:min-h-[20vh]">
                        
                        <h2 class="pt-8 text-base font-semibold leading-7 text-gray-900">
                            Update Category Information
                        </h2>

                        <p class="mt-1 text-sm leading-6 text-gray-600">
                            Manage your personal information such as name and contact information.
                        </p>

                        <div class="mt-10 grid grid-cols-6 gap-x-2 gap-y-4 md:grid-cols-12">
                            <input type="hidden" id="category_id" name="id" value="{{old('id', $category->id)}}" readonly
                                class="block w-full rounded-md border-0 py-1.5 px-4 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-pink-300 outline-none focus:border-white sm:text-sm sm:leading-6"
                            />

                            <div class="col-span-6 md:col-span-6 lg:col-span-12">
                                <label for="category" class="block text-sm font-medium leading-6 text-gray-500">
                                    Category name
                                </label>
                                <div class="mt-2">
                                    <input type="text" name="category" id="category" autofocus
                                        class="block w-full rounded-md border-0 py-1.5 px-4 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-pink-300 outline-none focus:border-white sm:text-sm sm:leading-6"
                                        value="{{old('category', $category->category)}}"
                                    />
                                </div>
                                @error('category')
                                    <span class="text-red-500 text-sm">{{$message}}</span>
                                @enderror
                            </div>
                            
                            <div class="col-span-6 md:col-span-12 lg:col-span-12">
                                <label for="category_desc" class="block text-sm font-medium leading-6 text-gray-500">
                                    Category Description
                                </label>
                                <div class="mt-2">
                                    <textarea name="category_desc" id="category_desc" cols="30" rows="4"
                                        class="block w-full rounded-md border-0 py-1.5 px-4 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-pink-300 outline-none focus:border-white sm:text-sm sm:leading-6"
                                    >{{old('category_desc', $category->category_desc)}}</textarea>
                                </div>
                                @error('category_desc')
                                    <span class="text-red-500 text-sm">{{$message}}</span>
                                @enderror
                            </div>
                        </div>
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
                            <a href="{{ route('admin.categories')}}" class="rounded-md px-[20px] py-[8px] text-sm text-white bg-black font-semibold shadow-sm hover:bg-gray-800 focus-visible:outline-offset-2">
                                Cancel
                            </a>
                            <button type="submit" class="rounded-md px-[20px] py-[8px] text-sm text-white bg-pink-600 font-semibold shadow-sm hover:bg-pink-500 focus-visible:outline-offset-2 focus-visible:outline-pink-600">
                                Save
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection