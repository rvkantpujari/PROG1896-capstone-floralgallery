<!-- Profile -->
<div class="flex flex-col md:px-8 md:py-4 lg:py-0 lg:px-4 lg:pb-12 lg:flex-row lg:justify-center">
    <form id="send-verification" method="post" action="{{ route('verification.send') }}">
        @csrf
    </form>

    <form method="post" action="{{ route('seller.profile.update') }}">
        @csrf
        @method('patch')
        
        <div class="py-4 px-8 w-full lg:min-h-[20vh]">
            
            <h2 class="pt-8 text-base font-semibold leading-7 text-gray-900">
                Personal Information
            </h2>

            <p class="mt-1 text-sm leading-6 text-gray-600">
                Manage your personal information such as name and contact information.
            </p>

            <div class="mt-10 grid grid-cols-6 gap-x-2 gap-y-4 md:grid-cols-12">

                <div class="col-span-6 md:col-span-6 lg:col-span-6">
                    <label for="first_name" class="block text-sm font-medium leading-6 text-gray-500">
                        First name
                    </label>
                    <div class="mt-2">
                        <input type="text" name="first_name" id="first_name" autocomplete="given-name"
                            class="block w-full rounded-md border-0 py-1.5 px-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-pink-300 outline-none focus:border-white sm:text-sm sm:leading-6"
                            value="{{old('first_name', $user->first_name)}}"
                        />
                    </div>
                    @error('first_name')
                        <span class="text-red-500 text-sm">{{$message}}</span>
                    @enderror
                </div>

                <div class="col-span-6 md:col-span-6 lg:col-span-6">
                    <label for="last_name" class="block text-sm font-medium leading-6 text-gray-500">
                        Last name
                    </label>
                    <div class="mt-2">
                        <input type="text" name="last_name" id="last_name" autocomplete="family-name"
                            class="block w-full rounded-md border-0 py-1.5 px-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-pink-300 outline-none focus:border-white sm:text-sm sm:leading-6"
                            value="{{old('last_name', $user->last_name)}}"
                        />
                    </div>
                    @error('last_name')
                        <span class="text-red-500 text-sm">{{$message}}</span>
                    @enderror
                </div>
                
                <div class="col-span-6 md:col-span-6 lg:col-span-6">
                    <label for="store_name" class="block text-sm font-medium leading-6 text-gray-500">
                        Store name
                    </label>
                    <div class="mt-2">
                        <input type="text" name="store_name" id="store_name" autocomplete="name"
                            class="block w-full rounded-md border-0 py-1.5 px-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-pink-300 outline-none focus:border-white sm:text-sm sm:leading-6"
                            value="{{old('store_name', $user->store_name)}}"
                        />
                    </div>
                    @error('store_name')
                        <span class="text-red-500 text-sm">{{$message}}</span>
                    @enderror
                </div>
                
                <div class="col-span-6 md:col-span-6 lg:col-span-6">
                    <label for="email" class="block text-sm font-medium leading-6 text-gray-500">
                        Email
                    </label>
                    <div class="mt-2">
                        <input type="text" id="email" name="email" autocomplete="email"
                            class="block w-full rounded-md border-0 py-1.5 px-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-pink-300 outline-none focus:border-white sm:text-sm sm:leading-6"
                            value="{{old('email', $user->email)}}" readonly
                        />
                    </div>
                    @error('email')
                        <span class="text-red-500 text-sm">{{$message}}</span>
                    @enderror

                    @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && ! $user->hasVerifiedEmail())
                        <div>
                            <p class="text-sm mt-2 text-gray-800">
                                Your email address is unverified.

                                <button form="send-verification" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                    Click here to re-send the verification email.
                                </button>
                            </p>

                            @if (session('status') === 'verification-link-sent')
                                <p class="mt-2 font-medium text-sm text-green-600">
                                    A new verification link has been sent to your email address.
                                </p>
                            @endif
                        </div>
                    @endif
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
                <a href="{{url()->previous()}}" class="rounded-md px-[20px] py-[8px] text-sm text-white bg-black font-semibold shadow-sm hover:bg-gray-800 focus-visible:outline-offset-2">
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
    
    <form method="post" action="{{ route('seller.password.update') }}">
        @csrf
        @method('put')
        
        <div class="py-4 px-8 w-full lg:min-h-[20vh]">
            
            <h2 class="pt-8 text-base font-semibold leading-7 text-gray-900">
                Update Password
            </h2>

            <p class="mt-1 text-sm leading-6 text-gray-600">
                Ensure your account is using a long, random password to stay secure.
            </p>

            <div class="mt-10 grid grid-cols-6 gap-x-2 gap-y-4 md:grid-cols-10 lg:grid-cols-12">

                <div class="col-span-6 md:col-span-12 lg:col-span-12">
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
                
                <div class="col-span-6 md:col-span-6 lg:col-span-6">
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
                
                <div class="col-span-6 md:col-span-6 lg:col-span-6">
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