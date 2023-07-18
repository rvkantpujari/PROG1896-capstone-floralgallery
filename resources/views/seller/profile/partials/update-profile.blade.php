<!-- Profile -->
{{-- <div class="flex flex-col md:px-8 md:py-4 lg:py-0 lg:pb-12 lg:flex-row lg:justify-center"> --}}
<div class="flex flex-col lg:flex-row lg:justify-center">
    <form id="send-verification" method="post" action="{{ route('send.seller.verification') }}">
        @csrf
    </form>

    @if (session()->has('update-personal-info'))
        <script>
            swal("Updated!! 😀🎉", "{{session('update-personal-info')}}", "success", {
                button:true,
                button:"OK",
            });
        </script>
    @endif

    @if (session()->has('success-password-updated'))
        <script>
            swal("Updated!! 💪🏻😀🎉", "{{session('success-password-updated')}}", "success", {
                button:true,
                button:"OK",
            });
        </script>
    @endif

    <div class="w-full flex flex-col md:flex-row gap-x-12 px-6 py-8 md:p-12">
        <form method="post" action="{{route('seller.profile.update')}}" class="md:w-1/2">
            @csrf
            @method('patch')
            
            <div class="lg:min-h-[45vh] md:min-h-[42vh]">
                
                <h2 class="pt-8 text-base font-semibold leading-7 text-gray-900">
                    Personal Information
                </h2>
    
                <p class="mt-1 text-sm leading-6 text-gray-600">
                    Manage your personal information such as name and contact information.
                </p>
    
                <div class="mt-10 grid grid-cols-12 gap-x-2 gap-y-4 md:grid-cols-12">
                    <div class="col-span-12 md:col-span-6 lg:col-span-6">
                        <label for="first_name" class="block text-sm font-medium leading-6 text-gray-500">
                            First name
                        </label>
                        <div class="mt-2">
                            <input type="text" name="first_name" id="first_name" autocomplete="given-name"
                                class="block w-full rounded-md border-0 py-1.5 px-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-pink-300 outline-none focus:border-white sm:text-sm sm:leading-6"
                                value="{{old('first_name', $seller->first_name)}}"
                            />
                        </div>
                        @error('first_name')
                            <span class="text-red-500 text-sm">{{$message}}</span>
                        @enderror
                    </div>
    
                    <div class="col-span-12 md:col-span-6 lg:col-span-6">
                        <label for="last_name" class="block text-sm font-medium leading-6 text-gray-500">
                            Last name
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
                    
                    <div class="col-span-12 md:col-span-12 lg:col-span-6">
                        <label for="store_name" class="block text-sm font-medium leading-6 text-gray-500">
                            Store name
                        </label>
                        <div class="mt-2">
                            <input type="text" name="store_name" id="store_name" autocomplete="name"
                                class="block w-full rounded-md border-0 py-1.5 px-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-pink-300 outline-none focus:border-white sm:text-sm sm:leading-6"
                                value="{{old('store_name', $seller->store_name)}}"
                            />
                        </div>
                        @error('store_name')
                            <span class="text-red-500 text-sm">{{$message}}</span>
                        @enderror
                    </div>
                    
                    <div class="col-span-12 md:col-span-12 lg:col-span-6">
                        <label for="email" class="{{$seller->hasVerifiedEmail() ? 'flex gap-x-2' : 'block'}} text-sm font-medium leading-6 text-gray-500">
                                Email
                                @if ($seller->hasVerifiedEmail())
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-green-700">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12c0 1.268-.63 2.39-1.593 3.068a3.745 3.745 0 01-1.043 3.296 3.745 3.745 0 01-3.296 1.043A3.745 3.745 0 0112 21c-1.268 0-2.39-.63-3.068-1.593a3.746 3.746 0 01-3.296-1.043 3.745 3.745 0 01-1.043-3.296A3.745 3.745 0 013 12c0-1.268.63-2.39 1.593-3.068a3.745 3.745 0 011.043-3.296 3.746 3.746 0 013.296-1.043A3.746 3.746 0 0112 3c1.268 0 2.39.63 3.068 1.593a3.746 3.746 0 013.296 1.043 3.746 3.746 0 011.043 3.296A3.745 3.745 0 0121 12z" />
                                    </svg>
                                @endif
                        </label>
                        <div class="mt-2">
                            <input type="text" id="email" name="email" autocomplete="email" title="{{$seller->hasVerifiedEmail() ? 'Email Verified' : 'Verification Pending'}}"
                                class="{{$seller->hasVerifiedEmail() ? 'ring-green-500' : 'ring-red-400'}} block w-full rounded-md border-0 py-1.5 px-2 text-gray-900 shadow-sm ring-1 ring-inset placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-pink-300 outline-none focus:border-white sm:text-sm sm:leading-6"
                                value="{{old('email', $seller->email)}}"
                            />
                        </div>
                    </div>
                </div>
    
                <div class="col-span-12 my-8">
                    @if ($seller instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && ! $seller->hasVerifiedEmail())
                        <div class="text-center">
                            <p class="text-sm text-red-500 font-semibold">
                                Your email address is unverified.

                                <button form="send-verification" class="mt-2 underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                    <span class="hidden md:inline">Click</span><span class="md:hidden">Tap</span> here to re-send the verification email.
                                </button>
                            </p>

                            @if (session('status') === 'verification-link-sent')
                                <p class="font-medium text-sm text-green-600">
                                    A new verification link has been sent to your email address.
                                </p>
                            @endif
                        </div>
                    @endif
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
    
                <div class="flex flex-row gap-x-12 items-center md:justify-between">
                    <a href="{{url()->previous()}}" class="rounded-md px-[20px] py-[8px] text-sm text-white bg-black font-semibold shadow-sm hover:bg-gray-800 focus-visible:outline-offset-2">
                        Cancel
                    </a>
                    <button type="submit" class="rounded-md px-[20px] py-[8px] text-sm text-white bg-pink-600 font-semibold shadow-sm hover:bg-pink-500 focus-visible:outline-offset-2 focus-visible:outline-pink-600">
                        Save
                    </button>
                </div>
            </div>
        </form>
    
        {{-- </div>
        <div class="flex md:px-8 md:py-4 lg:px-0 lg:pb-24 lg:flex-row lg:justify-center"> --}}
        
        <form method="post" action="{{route('seller.password.update')}}" class="md:w-1/2 mt-12 mb-8 md:my-0">
            @csrf
            @method('put')
            
            <div class="lg:min-h-[45vh] md:min-h-[42vh]">
                
                <h2 class="pt-8 text-base font-semibold leading-7 text-gray-900">
                    Update Password
                </h2>
    
                <p class="mt-1 text-sm leading-6 text-gray-600">
                    Ensure your account is using a long, random password to stay secure.
                </p>
    
                <div class="mt-10 grid grid-cols-12 gap-x-2 gap-y-4 md:grid-cols-10 lg:grid-cols-12">
    
                    <div class="col-span-12 md:col-span-12 lg:col-span-12">
                        <label for="current_password" class="block text-sm font-medium leading-6 text-gray-500">
                            Current Password
                        </label>
                        <div class="mt-2">
                            <input type="password" name="current_password" id="current_password" autocomplete="current-password"
                                class="block w-full rounded-md border-0 py-1.5 px-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-pink-300 outline-none focus:border-white sm:text-sm sm:leading-6"
                            />
                        </div>
                        <x-input-error :messages="$errors->updatePassword->get('current_password')" class="mt-2" />
                    </div>
                    
                    <div class="col-span-12 md:col-span-12 lg:col-span-6">
                        <label for="password" class="block text-sm font-medium leading-6 text-gray-500">
                            New Password
                        </label>
                        <div class="mt-2">
                            <input type="password" name="password" id="password" autocomplete="new-password"
                                class="block w-full rounded-md border-0 py-1.5 px-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-pink-300 outline-none focus:border-white sm:text-sm sm:leading-6"
                            />
                        </div>
                        <x-input-error :messages="$errors->updatePassword->get('password')" class="mt-2" />
                    </div>
                    
                    <div class="col-span-12 md:col-span-12 lg:col-span-6">
                        <label for="password_confirmation" class="block text-sm font-medium leading-6 text-gray-500">
                            Confirm Password
                        </label>
                        <div class="mt-2">
                            <input type="password" name="password_confirmation" id="password_confirmation" autocomplete="new-password"
                                class="block w-full rounded-md border-0 py-1.5 px-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-pink-300 outline-none focus:border-white sm:text-sm sm:leading-6"
                            />
                        </div>
                        <x-input-error :messages="$errors->updatePassword->get('password_confirmation')" class="mt-2" />
                    </div>
                </div>
            </div>
    
            <div class="flex justify-end md:gap-x-4 pt-12 md:pt-0">
                @if (session('status') === 'profile-updated')
                    <p x-data="{ show: true }" x-show="show" x-transition
                        x-init="setTimeout(() => show = false, 2000)"
                        class="text-sm text-gray-600">
                        Saved.
                    </p>
                @endif
    
                <div class="flex flex-row gap-x-12 items-center md:justify-between">
                    <a href="{{url()->previous()}}" class="rounded-md px-[20px] py-[8px] text-sm text-white bg-black font-semibold shadow-sm hover:bg-gray-800 focus-visible:outline-offset-2">
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