@extends('layout.default')

@section('title', 'Manage Profile - FlowerGallery')

@section('main-content')
    <!-- Profile -->
    <div class="px-20 py-8 md:px-40 md:py-8 flex justify-center">
        <form method="POST" action={{route('personal_info')}} class="border-b pb-20" enctype="multipart/form-data" id="personal_info">
            @csrf
            <div class="space-y-12 flex flex-col lg:flex-row gap-x-8">
                <div class="border-b border-gray-900/10 py-8 flex flex-col">
                    <h2 class="font-semibold leading-7 text-gray-900 text-3xl">
                        Manage Profile
                    </h2>

                    <div class="mt-10 flex flex-col w-80">
                        <div class="col-span-full">
                            <label for="photo" class="block text-sm font-medium leading-6 text-gray-900">
                                Photo
                            </label>
                            <div class="mt-2 flex justify-center items-center gap-x-3">
                                <svg
                                    class="h-48 w-48 md:h-32 md:w-32 text-gray-300"
                                    viewBox="0 0 24 24"
                                    fill="currentColor"
                                    aria-hidden="true"
                                >
                                    <path
                                        fill-rule="evenodd"
                                        d="M18.685 19.097A9.723 9.723 0 0021.75 12c0-5.385-4.365-9.75-9.75-9.75S2.25 6.615 2.25 12a9.723 9.723 0 003.065 7.097A9.716 9.716 0 0012 21.75a9.716 9.716 0 006.685-2.653zm-12.54-1.285A7.486 7.486 0 0112 15a7.486 7.486 0 015.855 2.812A8.224 8.224 0 0112 20.25a8.224 8.224 0 01-5.855-2.438zM15.75 9a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0z"
                                        clip-rule="evenodd"
                                    />
                                </svg>
                            </div>
                        </div>

                        <div class="col-span-full ">
                            <label for="cover-photo" class="block text-sm font-medium leading-6 text-gray-900">
                                Change photo
                            </label>
                            <div
                                class="mt-2 flex justify-center rounded-lg border border-dashed border-gray-900/25 px-6 py-10"
                            >
                                <div class="text-center">
                                    <svg
                                        class="mx-auto h-12 w-12 text-gray-300"
                                        viewBox="0 0 24 24"
                                        fill="currentColor"
                                        aria-hidden="true"
                                    >
                                        <path
                                            fill-rule="evenodd"
                                            d="M1.5 6a2.25 2.25 0 012.25-2.25h16.5A2.25 2.25 0 0122.5 6v12a2.25 2.25 0 01-2.25 2.25H3.75A2.25 2.25 0 011.5 18V6zM3 16.06V18c0 .414.336.75.75.75h16.5A.75.75 0 0021 18v-1.94l-2.69-2.689a1.5 1.5 0 00-2.12 0l-.88.879.97.97a.75.75 0 11-1.06 1.06l-5.16-5.159a1.5 1.5 0 00-2.12 0L3 16.061zm10.125-7.81a1.125 1.125 0 112.25 0 1.125 1.125 0 01-2.25 0z"
                                            clip-rule="evenodd"
                                        />
                                    </svg>
                                    <div
                                        class="mt-4 flex text-sm leading-6 text-gray-600"
                                    >
                                        <label
                                            for="file_upload"
                                            class="relative cursor-pointer rounded-md bg-white font-semibold text-pink-600 focus-within:outline-none focus-within:ring-2 focus-within:ring-pink-600 focus-within:ring-offset-2 hover:text-pink-500"
                                        >
                                            <span>Upload a file</span>
                                            <input
                                                id="file_upload"
                                                name="file_upload"
                                                type="file"
                                                class="sr-only"
                                            />
                                        </label>
                                        <p class="pl-1">or drag and drop</p>
                                    </div>
                                    <p
                                        class="text-xs leading-5 text-gray-600"
                                    >
                                        PNG or JPG up to 4 MB
                                    </p>
                                </div>
                            </div>
                            @error('file_upload')
                                <span class="text-red-500 text-sm">{{$message}}</span>
                            @enderror
                        </div>
                    </div>
                </div>

                <div class="border-b border-gray-900/10 py-8">
                    <h2 class="text-base font-semibold leading-7 text-gray-900">
                        Personal Information
                    </h2>
                    <p class="mt-1 text-sm leading-6 text-gray-600">
                        Manage your personal information such as name and mailing address.
                    </p>

                    <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 md:grid-cols-6">
                        <input type="text" name="_personal_info" id="_personal_info" hidden>
                        <div class="col-span-3">
                            <label for="first_name" class="block text-sm font-medium leading-6 text-gray-900">
                                First name
                            </label>
                            <div class="mt-2">
                                <input type="text" name="first_name" id="first_name" autocomplete="given-name"
                                    class="block w-full rounded-md border-0 py-1.5 px-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-pink-300 outline-none focus:border-white sm:text-sm sm:leading-6"
                                />
                            </div>
                            @error('first_name')
                                <span class="text-red-500 text-sm">{{$message}}</span>
                            @enderror
                        </div>

                        <div class="col-span-3">
                            <label for="last_name" class="block text-sm font-medium leading-6 text-gray-900">
                                Last name
                            </label>
                            <div class="mt-2">
                                <input type="text" name="last_name" id="last_name"autocomplete="family-name"
                                    class="block w-full rounded-md border-0 py-1.5 px-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-pink-300 outline-none focus:border-white sm:text-sm sm:leading-6"
                                />
                            </div>
                            @error('last_name')
                                <span class="text-red-500 text-sm">{{$message}}</span>
                            @enderror
                        </div>

                        <div class="col-span-3">
                            <label for="street_address" class="block text-sm font-medium leading-6 text-gray-900">
                                Street address
                            </label>
                            <div class="mt-2">
                                <input type="text" name="street_address" id="street_address" autocomplete="street-address"
                                    class="block w-full rounded-md border-0 py-1.5 px-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-pink-300 outline-none focus:border-white sm:text-sm sm:leading-6"
                                />
                            </div>
                            @error('street_address')
                                <span class="text-red-500 text-sm">{{$message}}</span>
                            @enderror
                        </div>

                        <div class="col-span-3">
                            <label for="city" class="block text-sm font-medium leading-6 text-gray-900">
                                City
                            </label>
                            <div class="mt-2">
                                <input type="text" name="city" id="city" autocomplete="address-level2"
                                    class="block w-full rounded-md border-0 py-1.5 px-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-pink-300 outline-none focus:border-white sm:text-sm sm:leading-6"
                                />
                            </div>
                            @error('city')
                                <span class="text-red-500 text-sm">{{$message}}</span>
                            @enderror
                        </div>

                        <div class="col-span-3">
                            <label for="region" class="block text-sm font-medium leading-6 text-gray-900">
                                Province / Territory
                            </label>
                            <div class="mt-2">
                                <select name="province" id="province" class="block w-full rounded-md border-0 py-2 px-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-pink-300 sm:max-w-xs sm:text-sm sm:leading-6">
                                    <option value="" selected disabled>Select Province</option>
                                    <option value="Alberta">Alberta</option>
                                    <option value="British Columbia">British Columbia</option>
                                    <option value="Manitoba">Manitoba</option>
                                    <option value="New Brunswick">New Brunswick</option>
                                    <option value="Newfoundland and Labrador">Newfoundland and Labrador</option>
                                    <option value="Nova Scotia">Nova Scotia</option>
                                    <option value="Ontario">Ontario</option>
                                    <option value="Prince Edward Island">Prince Edward Island</option>
                                    <option value="Quebec">Quebec</option>
                                    <option value="Saskatchewan">Saskatchewan</option>
                                </select>
                            </div>
                            @error('province')
                                <span class="text-red-500 text-sm">{{$message}}</span>
                            @enderror
                        </div>

                        <div class="col-span-3">
                            <label for="postal_code" class="block text-sm font-medium leading-6 text-gray-900">
                                ZIP / Postal code
                            </label>
                            <div class="mt-2">
                                <input type="text" name="postal_code" id="postal_code" autocomplete="postal_code"
                                    class="block w-full rounded-md border-0 py-1.5 px-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-pink-300 outline-none focus:border-white sm:text-sm sm:leading-6"
                                />
                            </div>
                            @error('postal_code')
                                <span class="text-red-500 text-sm">{{$message}}</span>
                            @enderror
                        </div>
                    </div>
                </div>
            </div>

            <div class="mt-6 flex items-center justify-end gap-x-8">
                <button type="button" class="text-sm font-semibold leading-6 text-gray-900">
                    Cancel
                </button>
                <button type="submit" class="rounded-md bg-pink-600 px-[20px] py-2 text-sm font-semibold text-white shadow-sm hover:bg-pink-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-pink-600">
                    Save
                </button>
            </div>
        </form>
    </div>

    <div class="px-20 py-8 md:px-40 md:py-8 flex justify-center">
        <form method="POST" action={{route('account_info')}} class="pb-20" id="account_info">
            @csrf
            <div class="space-y-12 flex flex-col lg:flex-row gap-x-8">
                <div class="border-b border-gray-900/10 py-8 flex flex-col">
                    <h2 class="text-base font-semibold leading-7 text-gray-900">
                        Account Information
                    </h2>
                    <p class="mt-1 text-sm leading-6 text-gray-600">
                        Manage your account credentials such as email, password.
                    </p>
                </div>

                <div class="border-b border-gray-900/10 pb-8">
                    <div class="grid grid-cols-1 gap-x-6 gap-y-8 md:grid-cols-6">
                        <div class="col-span-6">
                            <label for="email" class="block text-sm font-medium leading-6 text-gray-900">
                                Email address
                            </label>
                            <div class="mt-2">
                                <input type="text" id="email" name="email" autocomplete="email"
                                    class="block w-full rounded-md border-0 py-1.5 px-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-pink-300 outline-none focus:border-white sm:text-sm sm:leading-6"
                                />
                            </div>
                            @error('email')
                                <span class="text-red-500 text-sm">{{$message}}</span>
                            @enderror
                        </div>

                        <div class="col-span-6 lg:col-span-3">
                            <label for="password" class="block text-sm font-medium leading-6 text-gray-900">
                                Password
                            </label>
                            <div class="mt-2">
                                <input type="password" name="password" id="password" autocomplete="password"
                                    class="block w-full rounded-md border-0 py-1.5 px-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-pink-300 outline-none focus:border-white sm:text-sm sm:leading-6"
                                />
                            </div>
                            @error('password')
                                <span class="text-red-500 text-sm">{{$message}}</span>
                            @enderror
                        </div>

                        <div class="col-span-6 lg:col-span-3">
                            <label for="confirm_password" class="block text-sm font-medium leading-6 text-gray-900">
                                Confirm Password
                            </label>
                            <div class="mt-2">
                                <input type="password" name="confirm_password" id="confirm_password" autocomplete="confirm_password"
                                    class="block w-full rounded-md border-0 py-1.5 px-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-pink-300 outline-none focus:border-white sm:text-sm sm:leading-6"
                                />
                                @error('confirm_password')
                                    <span class="text-red-500 text-sm">{{$message}}</span>
                                @enderror
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="mt-6 flex items-center justify-end gap-x-8">
                <button type="button" class="text-sm font-semibold leading-6 text-gray-900">
                    Cancel
                </button>
                <button type="submit" class="rounded-md bg-pink-600 px-[20px] py-2 text-sm font-semibold text-white shadow-sm hover:bg-pink-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-pink-600">
                    Save
                </button>
            </div>
        </form>
    </div>
@endsection
