<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <title>@yield('title','kenalikonten.com')</title>
    <meta charset="UTF-8">
    <meta name="viewport"
      content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link  rel="icon" href="{{ asset('FE/dist/icons/favicon.ico') }}" type="image/x-icon">
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
      rel="stylesheet">
    @vite('resources/css/app.css')
    <script script src="https://cdn.tailwindcss.com/3.3.5"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
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
        /* Ganti dengan warna latar belakang yang diinginkan */
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
      /* Animasi putar untuk indikator sedang memuat */
      @keyframes spin {
        0% {
          transform: rotate(0deg);
        }
        100% {
          transform: rotate(360deg);
        }
      }
      /* Tambahkan gaya untuk indikator sedang memuat */
      .animate-spin {
        animation: spin 1s linear infinite;
      }
    </style>
  </head>
  <body class="font-[poppins] bg-[#F7F7F7] ">
    <!-- Tambahkan preloader -->
    <div id="preloader" class="flex flex-col gap-y-8 h-[100vh]">
      <img src="{{ asset('FE') }}/dist/images/logo-main.png" />
      <div id="loading"></div>
    </div>
    <!-- navbar -->
    {{-- <div id="blur-background"
      class="fixed top-0 left-0 w-full h-full hidden bg-slate-700 opacity-50 bg-cover">
    
    </div> --}}
    
    <div class=" max-w-md min-h-screen flex justify-center items-center mx-auto flex-col">
  @if ($errors->any())
  <div class="alert alert-danger">
      <ul>
          @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
          @endforeach
      </ul>
  </div>
@endif
  <div class="w-[300px] bg-pink-200 w-full p-4 m-5 flex items-center">
    <form action="{{ route('index.login.auth') }}" method="post">
      @csrf
      
      <!-- Username Field -->
      <div class="mb-4 bg">
          <label for="username" class="block text-sm font-medium text-gray-600">Username:</label>
          <input type="text" name="username" id="username" class="mt-1 p-2 min-w-full border rounded-md @error('username') border-red-500 @enderror" value="{{ old('username') }}" required>
          @error('username')
              <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
          @enderror
      </div>
      
      <!-- Password Field -->
      <div class="mb-4">
          <label for="password" class="block text-sm font-medium text-gray-600">Password:</label>
          <input type="password" name="password" id="password" class="mt-1 p-2 w-full border rounded-md @error('password') border-red-500 @enderror" required>
          @error('password')
              <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
          @enderror
      </div>
      
      <!-- Submit Button -->
      <div class="mb-4">
          <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Login</button>
      </div>
  </form>
    </div>
    </div>
      
  </body>
  </html>
  @yield('content')
  @stack('javascript')
  <script>
    // Tambahkan script untuk menghilangkan preloader setelah halaman selesai dimuat
    document.addEventListener("DOMContentLoaded", function () {
      // Hilangkan preloader
      document.getElementById("preloader").style.display = "none";
      // Tampilkan konten setelah halaman dimuat
      document.getElementById("content").style.display = "block";
    });
  </script>
  {{-- @include('FE.component.footer') --}}