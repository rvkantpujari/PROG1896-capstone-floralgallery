@extends('admin.layouts.app')

@section('title', 'Admin - Edit Seller Profile | FlowerGallery')

@section('main-content')
    <!-- Manage Seller and Store Information -->
    <div class="w-full">
        <h1 class="text-center lg:text-left text-[24px] md:text-[26px] font-semibold m-8 pt-4"><a href="{{route('admin.seller.edit', ['id' => $seller->id])}}">Manage Sellers</a> <span class="hidden md:inline">></span> <br class="md:hidden"> <span class="text-pink-500">Edit Seller</span></h1>

        <form id="send-verification" method="post" action="{{ route('send.seller.verification') }}">
            @csrf
            <input type="hidden" name="seller_id" value={{$seller->id}}>
        </form>

        <form method="POST" class="bg-white shadow-md mx-8 my-16 lg:mx-12 lg:my-20 md:px-8 md:py-4 lg:p-0 lg:px-4 lg:pb-12">
            @csrf
            <div class="w-full flex flex-col lg:flex-row lg:justify-center p-8">
                <div class="lg:w-1/2 py-4 px-8 lg:min-h-[40vh]">
                    <h2 class="pt-8 text-base font-semibold leading-7 text-gray-900">
                        Personal Information
                    </h2>
        
                    <p class="mt-1 text-sm leading-6 text-gray-600">
                        Manage seller's personal information such as name and contact information.
                    </p>
        
                    <div class="mt-10 grid grid-cols-6 gap-x-2 gap-y-4 md:grid-cols-12">

                        <div class="col-span-6 md:col-span-6">
                            <label for="first_name" class="block text-sm font-medium leading-6 text-gray-500">
                                First Name
                            </label>
                            <div class="mt-2">
                                <input type="text" name="first_name" id="first_name" autocomplete="given-name" autofocus
                                    class="block w-full rounded-md border-0 py-1.5 px-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-pink-300 outline-none focus:border-white sm:text-sm sm:leading-6"
                                    value="{{old('first_name', $seller->first_name)}}"
                                />
                            </div>
                            @error('first_name')
                                <span class="text-red-500 text-sm">{{$message}}</span>
                            @enderror
                        </div>
        
                        <div class="col-span-6 md:col-span-6">
                            <label for="last_name" class="block text-sm font-medium leading-6 text-gray-500">
                                Last Name
                            </label>
                            <div class="mt-2">
                                <input type="text" name="last_name" id="last_name" autocomplete="family-name"
                                    class="block w-full rounded-md border-0 py-1.5 px-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-pink-300 outline-none focus:border-white sm:text-sm sm:leading-6"
                                    value="{{old('last_name', $seller->last_name)}}"
                                />
                            </div>
                            @error('last_name')
                                <span class="text-red-500 text-sm">{{$message}}</span>
                            @enderror
                        </div>

                        <div class="col-span-6 md:col-span-6">
                            <label for="email" class="flex gap-x-2 text-sm font-medium leading-6 text-gray-500">
                                Primary Email
                                <span class="{{$seller->hasVerifiedEmail() ? 'text-green-500' : 'text-red-400'}}">
                                    @if ($seller->hasVerifiedEmail())
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-green-700">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12c0 1.268-.63 2.39-1.593 3.068a3.745 3.745 0 01-1.043 3.296 3.745 3.745 0 01-3.296 1.043A3.745 3.745 0 0112 21c-1.268 0-2.39-.63-3.068-1.593a3.746 3.746 0 01-3.296-1.043 3.745 3.745 0 01-1.043-3.296A3.745 3.745 0 013 12c0-1.268.63-2.39 1.593-3.068a3.745 3.745 0 011.043-3.296 3.746 3.746 0 013.296-1.043A3.746 3.746 0 0112 3c1.268 0 2.39.63 3.068 1.593a3.746 3.746 0 013.296 1.043 3.746 3.746 0 011.043 3.296A3.745 3.745 0 0121 12z" />
                                        </svg>
                                    @else
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3.75m9-.75a9 9 0 11-18 0 9 9 0 0118 0zm-9 3.75h.008v.008H12v-.008z" />
                                        </svg>
                                    @endif
                                </span>
                            </label>
                            <div class="mt-2">
                                <input type="text" id="email" name="email" autocomplete="email" title="{{$seller->hasVerifiedEmail() ? 'Email Verified' : 'Verification Pending'}}"
                                    class="{{$seller->hasVerifiedEmail() ? 'ring-green-500' : 'ring-red-400'}} block w-full rounded-md border-0 py-1.5 px-2 text-gray-900 shadow-sm ring-1 ring-inset placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-pink-300 outline-none focus:border-white sm:text-sm sm:leading-6"
                                    value="{{old('email', $seller->email)}}"
                                />
                            </div>
                            @error('email')
                                <span class="text-red-500 text-sm">{{$message}}</span>
                            @enderror
                        </div>
                                                        
                        <div class="col-span-6 md:col-span-6">
                            <label for="phone" class="block text-sm font-medium leading-6 text-gray-500">
                                Phone
                            </label>
                            <div class="mt-2">
                                <input type="text" name="phone" id="phone" autocomplete="tel" placeholder="(XXX) XXX-XXXX"
                                    class="block w-full rounded-md border-0 py-1.5 px-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-pink-300 outline-none focus:border-white sm:text-sm sm:leading-6"
                                    value="{{old('phone', $seller->phone)}}"
                                />
                            </div>
                            @error('phone')
                                <span class="text-red-500 text-sm">{{$message}}</span>
                            @enderror
                        </div>

                        <div class="col-span-12">
                            @if ($seller instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && ! $seller->hasVerifiedEmail())
                                <div class="text-center">
                                    <p class="text-sm my-2 text-red-500 font-semibold">
                                        Your email address is unverified.

                                        <button form="send-verification" class="underline text-xs md:text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                            <span class="hidden md:inline">Click</span><span class="md:hidden">Tap</span> here to re-send the verification email.
                                        </button>
                                    </p>

                                    @if (session('status') === 'verification-link-sent')
                                        <p class="font-medium text-sm text-green-600">
                                            A new verification link has been sent to the seller's email address.
                                        </p>
                                    @endif
                                </div>
                            @endif
                        </div>
                    </div>
                </div>

                <div class="lg:w-1/2 py-4 px-8 lg:min-h-[40vh]">
                    <h2 class="pt-8 text-base font-semibold leading-7 text-gray-900">
                        Store Information
                    </h2>
        
                    <p class="mt-1 text-sm leading-6 text-gray-600">
                        Manage seller's store as well as account information.
                    </p>
        
                    <div class="mt-10 grid grid-cols-6 gap-x-2 gap-y-4 md:grid-cols-12">
        
                        <div class="col-span-6 md:col-span-12">
                            <label for="store_name" class="block text-sm font-medium leading-6 text-gray-500">
                                Store Name
                            </label>
                            <div class="mt-2">
                                <input type="text" name="store_name" id="store_name"
                                    class="block w-full rounded-md border-0 py-1.5 px-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-pink-300 outline-none focus:border-white sm:text-sm sm:leading-6"
                                    value="{{old('store_name', $seller->store_name)}}"
                                />
                            </div>
                            @error('store_name')
                                <span class="text-red-500 text-sm">{{$message}}</span>
                            @enderror
                        </div>
        
                        <div class="col-span-6 md:col-span-12">
                            <label for="status" class="block text-sm font-medium leading-6 text-gray-500">
                                Account Status
                            </label>
                            <span class="flex flex-wrap gap-x-6 gap-y-2 md:gap-6 mt-2">
                                <div class="mt-2 flex items-center gap-x-2">
                                    <input type="radio" name="status" id="pending_status"
                                        class="block rounded-md border-0 py-1.5 px-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-pink-300 outline-none focus:border-white sm:text-sm sm:leading-6"
                                        {{$seller->status === 'pending' ? 'checked' : ''}} value="pending"
                                    /> Pending
                                </div>
                                <div class="mt-2 flex items-center gap-x-2">
                                    <input type="radio" name="status" id="verified_status"
                                        class="block rounded-md border-0 py-1.5 px-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-pink-300 outline-none focus:border-white sm:text-sm sm:leading-6"
                                        {{$seller->status === 'verified' ? 'checked' : ''}} value="verified"
                                    /> Verified
                                </div>
                                <div class="mt-2 flex items-center gap-x-2">
                                    <input type="radio" name="status" id="suspended_status"
                                        class="block rounded-md border-0 py-1.5 px-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-pink-300 outline-none focus:border-white sm:text-sm sm:leading-6"
                                        {{$seller->status === 'suspended' ? 'checked' : ''}} value="suspended"
                                    /> Suspended
                                </div>
                                <div class="mt-2 flex items-center gap-x-2">
                                    <input type="radio" name="status" id="deleted_status"
                                        class="block rounded-md border-0 py-1.5 px-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-pink-300 outline-none focus:border-white sm:text-sm sm:leading-6"
                                        {{$seller->status === 'deleted' ? 'checked' : ''}} value="deleted"
                                    /> Deleted
                                </div>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex justify-end md:justify-start lg:justify-end md:gap-x-4 px-8 pb-12">
                <div class="px-8 flex flex-row gap-x-12 items-center md:justify-between">
                    <a href="{{route('admin.sellers')}}" class="rounded-md px-[20px] py-[8px] text-sm text-white bg-black font-semibold shadow-sm hover:bg-gray-800 focus-visible:outline-offset-2">
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