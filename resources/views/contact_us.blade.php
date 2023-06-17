@extends('layout.default')

@section('title', 'Contact Us - FlowerGallery')

@section('main-content')
    <!-- Contact Us -->
    <div
        class="mt-16 text-center text-3xl font-semibold capitalize flex flex-col justify-center items-center gap-y-2"
    >
        Contact Us
        <div class="h-1 w-20 bg-pink-500 rounded"></div>
    </div>
    <section class="text-gray-600 body-font relative mx-4 lg:mx-24">
        <div
            class="container px-5 pt-16 pb-24 mx-auto flex sm:flex-nowrap flex-wrap"
        >
            <div
                class="lg:w-2/3 md:w-1/2 bg-gray-300 rounded-lg overflow-hidden sm:mr-10 p-10 flex items-end justify-start relative"
            >
                <iframe
                    class="absolute inset-0"
                    style="filter: grayscale(1) contrast(1.2) opacity(0.4)"
                    title="Map"
                    marginheight="0"
                    marginwidth="0"
                    scrolling="no"
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d92638.70722039227!2d-80.62911999938002!3d43.48231347520816!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x882bf1565ffe672b%3A0x5037b28c7231d90!2sWaterloo%2C%20ON!5e0!3m2!1sen!2sca!4v1686263820502!5m2!1sen!2sca"
                    width="100%"
                    height="100%"
                    frameborder="0"
                ></iframe>

                <div class="bg-white relative flex flex-wrap py-6 rounded shadow-md">
                    <div class="lg:w-1/2 px-6">
                        <h2 class="title-font font-semibold text-gray-900 tracking-widest text-xs">
                            ADDRESS
                        </h2>
                        <p class="mt-1 text-blue-600">
                            123, High Street, Waterloo, ON
                        </p>
                    </div>
                    <div class="lg:w-1/2 px-6 mt-4 lg:mt-0">
                        <h2 class="title-font font-semibold text-gray-900 tracking-widest text-xs">
                            EMAIL
                        </h2>
                        <a class="text-indigo-500 leading-relaxed">
                            <a href="mailto:contact@floralgallery.com" class="text-blue-600">
                                contact@floralgallery.com
                            </a>
                        </a>
                        <h2 class="title-font font-semibold text-gray-900 tracking-widest text-xs mt-4">
                            PHONE
                        </h2>
                        <p class="leading-relaxed">
                            <a href="tel:+1 (705) 123-4567" class="text-blue-600">
                                +1 (705) 123-4567
                            </a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="lg:w-1/3 md:w-1/2 bg-white flex flex-col md:ml-auto w-full md:py-8 mt-8 md:mt-0">
                <h2 class="text-gray-900 text-3xl font-semibold lg:text-2xl mb-1 title-font">
                    Feedback
                </h2>
                <p class="leading-relaxed mb-5 text-gray-600">
                    Please fill up the form to provide your valuable
                    feedback.
                </p>
                <form method="POST">
                    @csrf
                    <div class="relative mb-4">
                        <label for="name" class="leading-7 text-sm text-gray-600">Name</label>
                        <input type="text" id="name" name="name" class="w-full bg-white rounded border border-gray-300 focus:border-pink-300 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out"/>
                        @error('name')
                            <span class="text-red-500 text-sm">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="relative mb-4">
                        <label for="email" class="leading-7 text-sm text-gray-600">Email</label>
                        <input type="text" id="email" name="email" class="w-full bg-white rounded border border-gray-300 focus:border-pink-300 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out"/>
                        @error('email')
                            <span class="text-red-500 text-sm">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="relative mb-4">
                        <label for="message" class="leading-7 text-sm text-gray-600">Message</label>
                        <textarea id="message" name="message" class="w-full bg-white rounded border border-gray-300 focus:border-pink-300 h-32 text-base outline-none text-gray-700 py-1 px-3 resize-none leading-6 transition-colors duration-200 ease-in-out"></textarea>
                        @error('message')
                            <span class="text-red-500 text-sm">{{$message}}</span>
                        @enderror
                    </div>
                    <span class="flex justify-between mt-8 lg:justify-start">
                        <span></span>
                        <button class="text-white bg-pink-400 border-0 py-2 px-6 focus:outline-none hover:bg-black rounded text-lg">
                            Submit
                        </button>
                    </span>
                </form>
            </div>
        </div>
    </section>
@endsection
