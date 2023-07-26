@extends('admin.layouts.app')

@section('title', 'Admin - Add Province | FloralGallery')

@section('main-content')
    {{-- Add Main Section Here!!! --}}
    <div class="w-full">
        <h1 class="text-center lg:text-left text-[26px] font-semibold m-8 pt-4"><a href="{{route('admin.provinces')}}">Manage Provinces</a> > <span class="text-pink-500">Add Province</span></h1>
        <div class="lg:w-4/5 mx-8 my-16 lg:mx-auto lg:my-20 md:px-8 md:py-4 lg:py-0 lg:px-12 lg:pb-12 p-4 bg-white shadow-md rounded-lg lg:p-0">
            <!-- Profile -->
            <form method="post" action="{{ route('admin.province.store') }}">
                @csrf
                
                <div class="p-8 lg:min-h-[20vh]">
                    <h2 class="pt-8 text-base font-semibold leading-7 text-gray-900">
                        Province Information
                    </h2>

                    <p class="mt-1 text-sm leading-6 text-gray-600">
                        Add Province information such as name and tax information.
                    </p>

                    <div class="mt-10 grid grid-cols-6 md:grid-cols-12 lg:grid-cols-12 gap-x-2 gap-y-4">
                        <div class="col-span-6 md:col-span-6 lg:col-span-6">
                            <label for="province" class="block text-sm font-medium leading-6 text-gray-500">
                                Province name
                            </label>
                            <div class="mt-2">
                                <input type="text" name="province" id="province" autofocus
                                    class="block w-full rounded-md border-0 py-1.5 px-4 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-pink-300 outline-none focus:border-white sm:text-sm sm:leading-6"
                                />
                            </div>
                            @error('province')
                                <span class="text-red-500 text-sm">{{$message}}</span>
                            @enderror
                        </div>

                        <div class="col-span-6 md:col-span-6 lg:col-span-6">
                            <label for="province_code" class="block text-sm font-medium leading-6 text-gray-500">
                                Province Code
                            </label>
                            <div class="mt-2">
                                <input type="text" id="province_code" name="province_code"
                                    class="block w-full rounded-md border-0 py-1.5 px-4 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-pink-300 outline-none focus:border-white sm:text-sm sm:leading-6"
                                />
                            </div>
                            @error('province_code')
                                <span class="text-red-500 text-sm">{{$message}}</span>
                            @enderror
                        </div>

                        <div class="col-span-6 md:col-span-12 lg:col-span-12">
                            <label for="is_hst_applicable" class="block text-sm font-medium leading-6 text-gray-500">
                                Is HST applicable?
                            </label>
                            <span class="flex items-center gap-x-4">
                                <div class="mt-2 flex items-center gap-x-2">
                                    <input type="radio" id="hst_applicable" name="is_hst_applicable" value="1"
                                        class="is_hst_applicable block rounded-md border-0 py-1.5 px-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 checked:text-pink-500 focus:ring-2 focus:ring-inset focus:ring-pink-300 outline-none focus:border-white sm:text-sm sm:leading-6"
                                    />
                                    <label for="hst_applicable">Yes</label>
                                </div>
                                <div class="mt-2 flex items-center gap-x-2">
                                    <input type="radio" id="hst_not_applicable" name="is_hst_applicable" value="0" checked
                                        class="is_hst_applicable block rounded-md border-0 py-1.5 px-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 checked:text-pink-500 focus:ring-2 focus:ring-inset focus:ring-pink-300 outline-none focus:border-white sm:text-sm sm:leading-6"
                                    />
                                    <label for="hst_not_applicable">No</label>
                                </div>
                            </span>
                        </div>

                        <div class="col-span-6 md:col-span-6 lg:col-span-6" id="div_pst">
                            <label for="pst" class="block text-sm font-medium leading-6 text-gray-500">
                                PST
                            </label>
                            <div class="mt-2">
                                <input type="text" id="pst" name="pst"
                                    class="block w-full rounded-md border-0 py-1.5 px-4 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-pink-300 outline-none focus:border-white sm:text-sm sm:leading-6"
                                />
                            </div>
                            @error('pst')
                                <span class="text-red-500 text-sm">{{$message}}</span>
                            @enderror
                        </div>

                        <div class="col-span-6 md:col-span-6 lg:col-span-6" id="div_gst">
                            <label for="gst" class="block text-sm font-medium leading-6 text-gray-500">
                                GST
                            </label>
                            <div class="mt-2">
                                <input type="text" id="gst" name="gst"
                                    class="block w-full rounded-md border-0 py-1.5 px-4 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-pink-300 outline-none focus:border-white sm:text-sm sm:leading-6"
                                />
                            </div>
                            @error('gst')
                                <span class="text-red-500 text-sm">{{$message}}</span>
                            @enderror
                        </div>

                        <div class="col-span-6 md:col-span-4 lg:col-span-12" id="div_hst">
                            <label for="hst" class="block text-sm font-medium leading-6 text-gray-500">
                                HST
                            </label>
                            <div class="mt-2">
                                <input type="text" id="hst" name="hst"
                                    class="block w-full rounded-md border-0 py-1.5 px-4 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-pink-300 outline-none focus:border-white sm:text-sm sm:leading-6"
                                />
                            </div>
                            @error('hst')
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
                        <a href="{{ route('admin.provinces')}}" class="rounded-md px-[20px] py-[8px] text-sm text-white bg-black font-semibold shadow-sm hover:bg-gray-800 focus-visible:outline-offset-2">
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
    <script defer>
        document.addEventListener('DOMContentLoaded', () => {
            $('#div_hst').hide();
            let rad = document.querySelectorAll('.is_hst_applicable');
            let prev = null;
            for (let i = 0; i < rad.length; i++) {
                rad[i].addEventListener('change', function() {
                    if (this !== prev)
                        prev = this;

                    if(this.value == 1) {
                        $('#div_hst').show();
                        $('#div_gst').hide();
                        $('#div_pst').hide();
                    } else {
                        $('#div_hst').hide();
                        $('#div_gst').show();
                        $('#div_pst').show();
                    }
                });
            }
        }, false);
    </script>
@endsection