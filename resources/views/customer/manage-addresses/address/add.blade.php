@extends('layouts.app')

@section('title', 'Add Delivery Address - FlowerGallery')

@section('main-content')
    <div class="py-20">
        <h2 class="pb-12 font-semibold leading-7 text-gray-900 text-3xl text-center flex flex-col gap-4">
            Add Address
            <div class="h-1 w-24 bg-pink-500 rounded self-center"></div>
        </h2>
        <div class="max-w-5xl mx-auto px-6 lg:px-8 space-y-6">
            <div class="p-4 bg-white shadow-md rounded-lg lg:p-0">
                <div class="max-w-3xl mx-auto flex flex-col md:px-8 md:py-12 lg:px-8 lg:py-16 lg:flex-row lg:justify-center">
                    <form method="post" action="{{route('customer.address.add')}}">
                        @csrf                            
                        <div class="py-12 px-8 w-full lg:min-h-[45vh]">
                            
                            <h2 class="text-base font-semibold leading-7 text-gray-900">
                                Delivery Address Information
                            </h2>
                
                            <p class="mt-1 text-sm leading-6 text-gray-600">
                                Manage your address information such as street name, city etc.
                            </p>
                
                            <div class="mt-8 grid grid-cols-6 gap-x-2 gap-y-4 md:grid-cols-12">
                
                                <div class="col-span-6 md:col-span-12">
                                    <label for="full_name" class="block text-sm font-medium leading-6 text-gray-500">
                                        Full name
                                    </label>
                                    <div class="mt-2">
                                        <input type="text" name="full_name" id="full_name" autocomplete="given-name"
                                            class="block w-full rounded-md border-0 py-1.5 px-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-pink-300 outline-none focus:border-white sm:text-sm sm:leading-6"
                                        />
                                    </div>
                                    @error('full_name')
                                        <span class="text-red-500 text-sm">{{$message}}</span>
                                    @enderror
                                </div>

                                <div class="col-span-3 md:col-span-3">
                                    <label for="unit" class="block text-sm font-medium leading-6 text-gray-500">
                                        House / Unit no.
                                    </label>
                                    <div class="mt-2">
                                        <input type="text" name="unit" id="unit"
                                            class="block w-full rounded-md border-0 py-1.5 px-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-pink-300 outline-none focus:border-white sm:text-sm sm:leading-6"
                                        />
                                    </div>
                                    @error('unit')
                                        <span class="text-red-500 text-sm">{{$message}}</span>
                                    @enderror
                                </div>
                
                                <div class="col-span-3 md:col-span-3">
                                    <label for="street_number" class="block text-sm font-medium leading-6 text-gray-500">
                                        Street number
                                    </label>
                                    <div class="mt-2">
                                        <input type="text" name="street_number" id="street_number"
                                            class="block w-full rounded-md border-0 py-1.5 px-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-pink-300 outline-none focus:border-white sm:text-sm sm:leading-6"
                                        />
                                    </div>
                                    @error('street_number')
                                        <span class="text-red-500 text-sm">{{$message}}</span>
                                    @enderror
                                </div>

                                <div class="col-span-6 md:col-span-6">
                                    <label for="street_name" class="block text-sm font-medium leading-6 text-gray-500">
                                        Street name
                                    </label>
                                    <div class="mt-2">
                                        <input type="text" name="street_name" id="street_name"
                                            class="block w-full rounded-md border-0 py-1.5 px-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-pink-300 outline-none focus:border-white sm:text-sm sm:leading-6"
                                        />
                                    </div>
                                    @error('street_name')
                                        <span class="text-red-500 text-sm">{{$message}}</span>
                                    @enderror
                                </div>
                                
                                <div class="col-span-6 md:col-span-4">
                                    <label for="city" class="block text-sm font-medium leading-6 text-gray-500">
                                        City
                                    </label>
                                    <div class="mt-2">
                                        <input type="text" name="city" id="city"
                                            class="block w-full rounded-md border-0 py-1.5 px-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-pink-300 outline-none focus:border-white sm:text-sm sm:leading-6"
                                        />
                                    </div>
                                    @error('city')
                                        <span class="text-red-500 text-sm">{{$message}}</span>
                                    @enderror
                                </div>
                                
                                <div class="col-span-6 md:col-span-4">
                                    <label for="postal_code" class="block text-sm font-medium leading-6 text-gray-500">
                                        Postal Code
                                    </label>
                                    <div class="mt-2">
                                        <input type="text" name="postal_code" id="postal_code" placeholder="A1B 2C3"
                                            class="block w-full rounded-md border-0 py-1.5 px-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-pink-300 outline-none focus:border-white sm:text-sm sm:leading-6"
                                        />
                                    </div>
                                    @error('postal_code')
                                        <span class="text-red-500 text-sm">{{$message}}</span>
                                    @enderror
                                </div>

                                <div class="col-span-6 md:col-span-4">
                                    <label for="province" class="block text-sm font-medium leading-6 text-gray-500">
                                        Province
                                    </label>
                                    <div class="mt-2">
                                        <select name="province" id="province" class="block w-full rounded-md border-0 py-1.5 px-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-pink-300 outline-none focus:border-white sm:text-sm sm:leading-6">
                                            <option value="-1" selected disabled>Select Province</option>
                                            @foreach ($provinces as $province)
                                                <option type="text" name="province_{{$province->province_id}}" 
                                                    id="province_{{$province->province_id}}" value="{{$province->province_id}}">
                                                    {{$province->province}}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                    @error('province')
                                        <span class="text-red-500 text-sm">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                
                        <div class="flex justify-end md:gap-x-4">
                            @if (session('status') === 'profile-updated')
                                <p x-data="{ show: true }" x-show="show" x-transition
                                    x-init="setTimeout(() => show = false, 2000)"
                                    class="text-sm text-gray-600">
                                    Saved.
                                </p>
                            @endif
                
                            <div class="px-8 flex flex-row gap-x-12 items-center md:justify-between">
                                <a href="{{route('customer.addresses')}}" class="rounded-md px-[20px] py-[8px] text-sm text-white bg-black font-semibold shadow-sm hover:bg-gray-800 focus-visible:outline-offset-2">
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
    </div>
@endsection