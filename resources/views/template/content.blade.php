<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <title>@yield('title','kenalikonten.com')</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link
            href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
            rel="stylesheet">
        <script script src="https://cdn.tailwindcss.com/3.3.5"></script>
         {{-- @vite('resources/css/app.css') --}}
        <link rel="stylesheet"
            href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
        <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
        <style>
            /* Tambahkan gaya untuk preloader */
            #preloader {
                position: fixed;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                background: #fff;
                display: flex;
                justify-content: center;
                align-items: center;
                z-index: 1000;
            }

            /* Animasi loading */
            #loading {
                border: 2px solid #f3f3f3;
                border-top: 4px solid #FF7366;
                border-radius: 50%;
                width: 50px;
                height: 50px;
                animation: spin 2s linear infinite;
            }

            @keyframes spin {
                0% {
                    transform: rotate(0deg);
                }

                100% {
                    transform: rotate(360deg);
                }
            }

            #preloader img {
                width: 120px;
                /* Sesuaikan ukuran gambar preloader */
                height: auto;
            }

        </style>
        @stack('css')

    </head>

    <body class="font-[poppins]  bg-neutral-100 flex flex-row">
        <!-- Tambahkan preloader -->
        <div id="preloader" class="flex flex-col gap-y-8 h-[100vh]">
            <!-- Gunakan gambar "./dist/images/logo-main.png" sebagai bagian dari preloader -->
            <img src="{{ asset('FE') }}/dist/images/logo-main.png" />
            <div id="loading"></div>
        </div>
        <!-- left atas-->
        {{-- <!-- @include('BE.component.left') --> --}}
        <!-- right atas -->
        <!-- @include('BE.component.right') -->

        <!-- start content -->
        <section class="p-5 conten">
            <div class="flex flex-col max-w-7xl content-body gap-4 mx-auto">
                @yield('content')

            </div>
            @yield('modal')
        </section>
        @include('BE.component.footer')
        @stack('javascript')
    </body>

</html>