<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>@yield('title')</title>
        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link
            href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap"
            rel="stylesheet"
        />
        <link
            rel="stylesheet"
            href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
            integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
            crossorigin="anonymous"
        />
        @vite('resources/css/app.css')
        <script src="https://unpkg.com/alpinejs@3.2.3/dist/cdn.min.js" defer></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    </head>
    <body class="bg-gradient-to-r from-pink-500 to-blue-500">
        <main class="mt-48">
            <div
                class="w-120 max-w-sm mx-auto overflow-hidden bg-white rounded-lg shadow-lg"
            >
                <div class="px-4 pt-16 pb-4">
                    <div class="flex justify-center mx-auto">
                        <a
                            href="{{url('/')}}"
                            class="text-2xl font-semibold subpixel-antialiased hover:no-underline hover:duration-300"
                        >
                            <span class="text-pink-500">Floral</span
                            ><span class="text-black">Gallery</span>
                        </a>
                    </div>

                    <h3 class="mt-3 text-xl font-medium text-gray-900 flex justify-center">
                        <span>
                            @yield('form-title')
                        </span>
                    </h3>
                    @yield('form')
                </div>

                <div class="flex items-center justify-center py-4 text-center bg-gray-50 dark:bg-gray-700">
                    @yield('form-link-up')
                </div>
            </div>
        </main>
    </body>
</html>