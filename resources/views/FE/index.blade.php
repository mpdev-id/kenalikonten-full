@extends('template.frontend')
@section('title','kenalikonten.com')
@section('content')
<!-- hero -->
<section
  class="flex flex-wrap justify-around items-center mt-[90px] max-w-4xl mx-auto transition-all ease-in-out duration-700">
  @if($errors->any())
  <div class="text-red-500">
    **Terdapat kesalahan dalam pengisian form. Mohon periksa kembali.
  </div>
  @endif
  @if(session('success'))
  <div class="alert alert-success">
    {{ session('success') }}
  </div>
  @endif

  @if(session('error'))
  <div class="alert alert-danger">
    {{ session('error') }}
  </div>
  @endif
  <div class="text-center">
    <div
      class="text-[#151F33] text-7xl sm:text-9xl font-bold transition-all ease-in-out duration-700">
      68%
    </div>
    <div
      class="font-bold max-[1023px]:hidden only-[600px]:block text-3xl lg:text-[32px] lg:block left-0 transition-all ease-in-out duration-1000">
      Media Sosial Jadi <span class="text-[#FF7366]">Sumber Hoaks</span><br> Terbesar
      Tahun {{ date('Y') }}
    </div>
  </div>
  <div>
    <img class="w-[150.939px] sm:w-[231.94px] transition-all ease-in-out duration-1000"
      loading="lazy" src="{{ asset('FE') }}/dist/icons/hero-right.svg" alt="">
  </div>
  <div
    class="font-bold text-xl mx-2 sm:text-3xl  text-center w-full pt-2 min-[1023px]:hidden transition-all ease-in-out duration-700">
    Media Sosial Jadi <span class="text-[#FF7366] ">Sumber Hoaks</span><br> Terbesar Tahun {{ date('Y') }}
    </span>
  </div>
</section>
<!-- upload -->
<section class="upload flex justify-center mt-[60px] min-[1280px]:mt-[90px] md:m-4">
  <div
    class="flex flex-row max-sm:flex-wrap justify-normal gap-[20px] h-auto max-sm:w-auto md:w-[824px] mx-3 px-[24px] py-[28px] bg-[#fff] shadow-xl rounded-[8px] transition-all ease-in-out duration-1000">
    <div class="w-2/4">
      <img loading="lazy" src="{{ asset('FE') }}/dist/icons/favicon.svg" alt="logo"
        class="w-[139px]">
    </div>
    <div class="">
      <p class="font-normal text-[16px] w-auto">
        Kenali Konten adalah website untuk memvalidasi keaslian konten yang tersebar di situs
        maupun media sosial. Kirimkan screenshoot konten, berita, dan tautan
        informasi lainnya yang kamu baca. Selanjutnya biarkan tim Kenali Konten yang
        memvalidasi konten tersebut
        <span class="text-[#FF1F39] font-semibold">hoaks</span> atau <span
          class="text-[#58BF18] font-semibold">fakta</span>.
      </p>
      <div class="flex flex-wrap mt-5 gap-x-5 max-md:justify-center max-md:gap-y-5">
        <button id="modalKirimKonten"
          class="w-[250px] px-5 bg-[#FF7366] shadow-xl font-semibold rounded-full py-3 text-[#fff] ">
          Coba Sekarang
        </button>
        <a href="{{route('index.valid')}}"
          class="w-[250px] px-5 py-3 bg-[#fff] shadow-xl font-semibold rounded-full  text-[#FF7366] border-solid border-[1.5px] border-[#FF7366]">
          Lihat Konten Tervalidasi
        </a>
      </div>
    </div>
  </div>
</section>
<!-- youtube -->
<section
  class="flex flex-row max-[1240px]:flex-col justify-between items-center align-center w-auto max-sm:gap-y-4 lg:w-[824px] mt-[215px] min-[1280px]:my-[300px] mx-auto p-3 transition-all ease-in-out duration-700">
  <div
    class="flex flex-col max-[1280px]:p-4 max-[1240px]:m-0 max-[1240px]:w-full w-[400px] max-[839px]:w-full sm:pr-[40px] max-[728px]:w-full">
    <h1
      class="text-[18px] sm:text-[32px] color-[#333] font-semibold leading-none transition-all ease-in-out duration-700">
      Eits! Baru baca judul, tapi udah langsung percaya aja?
    </h1>
    <p class="my-4">Jangan dulu terbawa emosi ketika baru membaca judul berita. Tonton
      ini dulu biar kamu paham apa yang mesti dilakukan sebelum percaya pada suatu
      berita</p>
    <div class="mt-3">
      <a href="https://www.youtube.com/watch?v=0RktiyVNu7U" target="_blank"
        class="w-[228px] px-5 bg-[#FF7366] shadow-xl rounded-full py-3 text-[#fff] font-semibold transition-all ease-in-out duration-700">
        Tonton di Youtube
      </a>
    </div>
  </div>
  <div
    class="max-[1240px]:min-w-full max-[1280px]:p-4 w-[400px] mt-8 sm:mt-4 transition-all ease-in-out duration-700">
    <iframe class="rounded-[8px] min-w-full min-[1280px]:h-52 min-[600px]:h-96  max-[414px]:h-52"
      id="ytplayer"
      src="https://www.youtube.com/embed/0RktiyVNu7U?autoplay=1&mute=0&disablekb=1&loop=1&start=1&controls=0"
      title="YouTube: Sebelum percaya judulnya, pause dulu" frameborder="0"
      allowfullscreen></iframe>
  </div>
</section>

<!-- tim -->
<section
  class="flex flex-wrap max-[1279px]:h-fit mt-[188px] bg-[#FFE4E1] pt-[53px] p-4 transition-all ease-in-out duration-700">
  <div class="flex flex-wrap justify-center items-center w-[1024px] mx-auto swiper h-fit">
    <div class="w-[661px] text-center my-4 transition-all ease-in-out duration-700">
      <h1
        class="text-[32px] color-[#333] font-semibold leading-none w-[360px] md:w-[461px] mx-auto">
        Jadi bagian dari tim <span class="text-[#39BFBF]"> gerakan </span> Kenali Konten
      </h1>
      <p class="mt-5">Gabung dan gerak bersama dengan menjadi tim relawan gerakan Kenali
        Konten. Kembangkan platform dan komunitas agar masyarakat bisa teredukasi untuk
        membedakan berita atau konten yang hoaks dan fakta.</p>
    </div>
    <div
      class="sm:w-[936px] flex max-[1240px]:flex-col mt-5 mb-10 overscroll-none swiper-wrapper p-3 gap-y-2 transition-all ease-in-out duration-700">
      @forelse ($teams as $team)
          

      <div
        class="max-[1279px]:min-w-full lg:w-[279px] h-[300px] rounded-2xl bg-[#FFF] shadow-xl sm:mr-4 flex flex-col gap-3 cursor-grab swiper-slide">
        <div class="mx-auto mt-9">
          <div class="w-10 h-10 bg-red-100 rounded-lg flex justify-center items-center">
            <img src="{{ asset('').$team->icon }}" alt="{{ $team->name }} logo">
          </div>
          {{-- <svg width="41" height="40" viewBox="0 0 41 40" fill="none"
            xmlns="http://www.w3.org/2000/svg">
            <rect x="0.5" width="40" height="40" rx="8" fill="#FFE4E1" />
            <path
              d="M24.875 20C28 20 30.5 22.5 30.5 25.625C30.5 26.725 30.1875 27.7625 29.6375 28.625L33.4875 32.5L31.75 34.2375L27.85 30.4C26.9875 30.9375 25.9625 31.25 24.875 31.25C21.75 31.25 19.25 28.75 19.25 25.625C19.25 22.5 21.75 20 24.875 20ZM24.875 22.5C24.0462 22.5 23.2513 22.8292 22.6653 23.4153C22.0792 24.0013 21.75 24.7962 21.75 25.625C21.75 26.4538 22.0792 27.2487 22.6653 27.8347C23.2513 28.4208 24.0462 28.75 24.875 28.75C25.7038 28.75 26.4987 28.4208 27.0847 27.8347C27.6708 27.2487 28 26.4538 28 25.625C28 24.7962 27.6708 24.0013 27.0847 23.4153C26.4987 22.8292 25.7038 22.5 24.875 22.5ZM13 32.5C12.337 32.5 11.7011 32.2366 11.2322 31.7678C10.7634 31.2989 10.5 30.663 10.5 30V10C10.5 9.33696 10.7634 8.70107 11.2322 8.23223C11.7011 7.76339 12.337 7.5 13 7.5H14.25V16.25L17.375 14.375L20.5 16.25V7.5H28C28.663 7.5 29.2989 7.76339 29.7678 8.23223C30.2366 8.70107 30.5 9.33696 30.5 10V19.7625C28.9886 18.3086 26.9722 17.4975 24.875 17.5C22.7201 17.5 20.6535 18.356 19.1298 19.8798C17.606 21.4035 16.75 23.4701 16.75 25.625C16.75 28.5125 18.2625 31.0625 20.5375 32.5H13Z"
              fill="#FF7366" />
          </svg> --}}
        </div>
        <div class="py-3 transition-all ease-in-out duration-700">
          <h2 class="text-center">{{ $team->name }}</h2>
          <h1 class="text-center text-[20px] font-semibold ">{{ $team->title }}</h1>
        </div>
        <div class="w-[245px] max-[1024px]:w-full mx-auto">
          <p class="text-center">
            {{ strlen($team->information) > 45 ? substr($team->information, 0, 45) . '...' : $team->information }}
          </p>
        </div>
        <div class="mx-auto">
          <a href="{{ $team->link_join }}" target="_blank" class="text-[16px] text-[#FF7366] flex flex-row items-center hover:font-bold">
            Daftar
            <img class="w-6" src="{{ asset('FE') }}/dist/images/ic-arrow-right.png" alt="Detail {{ $team->title }}">
          </a>
        </div>
    </div>
    @empty
    <div class="h-full flex outline-none placeholder-stone-300 text-base font-normal w-full max-w-full transition-all ease-in-out duration-700 bg-white-900 rounded">
      <span class="mx-auto">
       belum tersedia
      </span>
     </div>
  
    @endforelse
  </div>
  @if ($teams->count()>3)
  <div class="mx-auto flex gap-x-6 pb-[55px] ">
    <a class="prev max-[1280px]:hidden block">
      <img class="w-8 " src="{{ asset('FE') }}/dist/images/ic-arrow-slide-left.png" alt="">
    </a>
    <a class="next max-[1280px]:hidden block">
      <img class="w-8 " src="{{ asset('FE') }}/dist/images/ic-arrow-slide-right.png" alt="">
    </a>
  </div>
  @endif 
      
  </div>
</section>
<!-- contact us -->
<section
  class="flex flex-wrap max-[640px]:flex-col justify-normal w-auto lg:w-[824px] mt-[188px] mx-auto max-[768px]:mx-4 max-[768px]:mx-6 p-4 sm:p-0 transition-all ease-in-out duration-700 min-[1280px]:mt-[200px]">
  <div class="sm:w-[400px] sm:pr-[40px] md:mt-4">
    <img class="w-[200px] sm:w-[300px]" src="{{ asset('FE') }}/dist/images/img-collabs.png" alt=""
      srcset="{{ asset('FE') }}/dist/images/img-collabs.png">
  </div>
  <div class="md:w-[400px] w-auto">
    <h1 class="text-[32px] color-[#333] font-semibold max-[640px]:text-[28px]">
      Gerak bareng dengan kolaborasi bersama kami
    </h1>
    <p class="font-normal text-[16px] py-4">
      Tim Kenali Konten menerima kerjasama dan kolaborasi dalam bentuk apapun sebagai
      upaya mengedukasi masyarakat perihal
      <span class="text-[#FF1F39] font-semibold">hoaks</span> dan <span
        class="text-[#58BF18] font-semibold">fakta</span>.
    </p>
    <button class="px-5 bg-[#FF7366] shadow-xl rounded-full py-3  text-[#fff] font-semibold">
      Hubungi Kami
    </button>
  </div>
</section>
@endsection

@section("modal")
@if(session('success'))
<!-- sukses -->
<div id="modalSukses"
  class="fixed fixed inset-0 bg-slate-600 bg-opacity-50 overflow-y-scroll h-screen flex items-center justify-center transition-all z-[1000]">
  <div
    class="bg-[#F7F7F7] rounded-lg shadow-xl w-[400px] sm:w-[600px]  opacity-100 transform transition-transform duration-400 p-8">
    <div class="flex justify-end">
      <a href="{{route('index.home')}}" id="closeModalBtn">
        <svg class="bg-[#FFE4E1] w-[32px] h-[32px] rounded-full" xmlns="http://www.w3.org/2000/svg"
          width="24" height="24" viewBox="0 0 24 24" fill="none">
          <path
            d="M18.3 5.70998C18.2075 5.61728 18.0976 5.54373 17.9766 5.49355C17.8556 5.44337 17.7259 5.41754 17.595 5.41754C17.464 5.41754 17.3343 5.44337 17.2134 5.49355C17.0924 5.54373 16.9825 5.61728 16.89 5.70998L12 10.59L7.10998 5.69998C7.0174 5.6074 6.90749 5.53396 6.78652 5.48385C6.66556 5.43375 6.53591 5.40796 6.40498 5.40796C6.27405 5.40796 6.1444 5.43375 6.02344 5.48385C5.90247 5.53396 5.79256 5.6074 5.69998 5.69998C5.6074 5.79256 5.53396 5.90247 5.48385 6.02344C5.43375 6.1444 5.40796 6.27405 5.40796 6.40498C5.40796 6.53591 5.43375 6.66556 5.48385 6.78652C5.53396 6.90749 5.6074 7.0174 5.69998 7.10998L10.59 12L5.69998 16.89C5.6074 16.9826 5.53396 17.0925 5.48385 17.2134C5.43375 17.3344 5.40796 17.464 5.40796 17.595C5.40796 17.7259 5.43375 17.8556 5.48385 17.9765C5.53396 18.0975 5.6074 18.2074 5.69998 18.3C5.79256 18.3926 5.90247 18.466 6.02344 18.5161C6.1444 18.5662 6.27405 18.592 6.40498 18.592C6.53591 18.592 6.66556 18.5662 6.78652 18.5161C6.90749 18.466 7.0174 18.3926 7.10998 18.3L12 13.41L16.89 18.3C16.9826 18.3926 17.0925 18.466 17.2134 18.5161C17.3344 18.5662 17.464 18.592 17.595 18.592C17.7259 18.592 17.8556 18.5662 17.9765 18.5161C18.0975 18.466 18.2074 18.3926 18.3 18.3C18.3926 18.2074 18.466 18.0975 18.5161 17.9765C18.5662 17.8556 18.592 17.7259 18.592 17.595C18.592 17.464 18.5662 17.3344 18.5161 17.2134C18.466 17.0925 18.3926 16.9826 18.3 16.89L13.41 12L18.3 7.10998C18.68 6.72998 18.68 6.08998 18.3 5.70998Z"
            fill="#333333" />
        </svg>
      </a>
    </div>
    <div class="flex flex-col gap-7">
      <div
        class="text-zinc-800 text-center text-3xl font-semibold self-center whitespace-nowrap mt-7">
        Terkirim!
      </div>
      <img loading="lazy"
        src="https://cdn.builder.io/api/v1/image/assets/TEMP/914bb2b895804a3550404945f7409c29667ffa8c16ddac9a36e85b446ae6853f?"
        class="aspect-[0.95] object-contain object-center w-[250px] justify-center items-center overflow-hidden self-center max-w-full mt-7" />
      <div class="text-red-400 text-center text-base self-stretch mt-7 max-md:max-w-full">
        <span class="text-zinc-800">
          Tunggu balasan dari kami untuk validasi konten yang sudah kamu kirim atau
          cek halaman
        </span>
        <span class="text-red-400">Konten Tervalidasi</span>
        <span class="text-zinc-800">
          untuk konten-konten yang sudah divalidasi oleh tim Kenali Konten.
          <br />
          <br />
          Jangan sebar berita atau konten sebelum kamu mencari tahu kebenarannya.
        </span>
      </div>
      <a href="{{ route('index.home') }}"
        class="text-white text-base font-semibold whitespace-nowrap  shadow-lg bg-red-400 mt-7 px-16 py-3 rounded-[50px] max-md:max-w-full max-md:px-5 text-center">
        Saya Mengerti
      </a>
    </div>
    </form>
  </div>
  @endif

  <!-- modal -->
  <div id="modalKirim"
    class="hidden fixed inset-0 bg-slate-600 bg-opacity-50 overflow-y-scroll h-screen flex items-center justify-center transition-all z-[1000] ">
    <div
      class="bg-[#F7F7F7] rounded-lg shadow-xl w-auto  sm:w-[600px] opacity-100 transform transition-all ease-in-out duration-700 p-8 m-4 ">
      <div class="flex justify-end">
        <button id="closeModalBtn">
          <svg class="bg-[#FFE4E1] w-[32px] h-[32px] rounded-full"
            xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
            fill="none">
            <path
              d="M18.3 5.70998C18.2075 5.61728 18.0976 5.54373 17.9766 5.49355C17.8556 5.44337 17.7259 5.41754 17.595 5.41754C17.464 5.41754 17.3343 5.44337 17.2134 5.49355C17.0924 5.54373 16.9825 5.61728 16.89 5.70998L12 10.59L7.10998 5.69998C7.0174 5.6074 6.90749 5.53396 6.78652 5.48385C6.66556 5.43375 6.53591 5.40796 6.40498 5.40796C6.27405 5.40796 6.1444 5.43375 6.02344 5.48385C5.90247 5.53396 5.79256 5.6074 5.69998 5.69998C5.6074 5.79256 5.53396 5.90247 5.48385 6.02344C5.43375 6.1444 5.40796 6.27405 5.40796 6.40498C5.40796 6.53591 5.43375 6.66556 5.48385 6.78652C5.53396 6.90749 5.6074 7.0174 5.69998 7.10998L10.59 12L5.69998 16.89C5.6074 16.9826 5.53396 17.0925 5.48385 17.2134C5.43375 17.3344 5.40796 17.464 5.40796 17.595C5.40796 17.7259 5.43375 17.8556 5.48385 17.9765C5.53396 18.0975 5.6074 18.2074 5.69998 18.3C5.79256 18.3926 5.90247 18.466 6.02344 18.5161C6.1444 18.5662 6.27405 18.592 6.40498 18.592C6.53591 18.592 6.66556 18.5662 6.78652 18.5161C6.90749 18.466 7.0174 18.3926 7.10998 18.3L12 13.41L16.89 18.3C16.9826 18.3926 17.0925 18.466 17.2134 18.5161C17.3344 18.5662 17.464 18.592 17.595 18.592C17.7259 18.592 17.8556 18.5662 17.9765 18.5161C18.0975 18.466 18.2074 18.3926 18.3 18.3C18.3926 18.2074 18.466 18.0975 18.5161 17.9765C18.5662 17.8556 18.592 17.7259 18.592 17.595C18.592 17.464 18.5662 17.3344 18.5161 17.2134C18.466 17.0925 18.3926 16.9826 18.3 16.89L13.41 12L18.3 7.10998C18.68 6.72998 18.68 6.08998 18.3 5.70998Z"
              fill="#333333" />
          </svg>
        </button>
      </div>
      <div class="text-center mb-7">
        <span class="text-xl sm:text-3xl font-semibold my-6 text-[#333] text-center">Kirim konten
          yang kamu
          baca kepada tim Kenali Konten</span>
      </div>
      @if($errors->any())
      <div class="text-red-500">
        **Terdapat kesalahan dalam pengisian form. Mohon periksa kembali.
      </div>
      @endif
      <form action="{{ route('index.upload') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="my-4">
          <span class="text-[#000] mb-2">Screenshoot 1<span class="text-[#FF1F39]">*</span></span>
          <div class="dz-image w-full">
            <img />
          </div>
          <input name="screenshoot1" type="file"
            placeholder="Masukkan link atau tautan konten yang kamu baca"
            class="w-full rounded-lg bg-[#FFF] py-3 px-2 outline-none placeholder-slate-400 text-slate-[#BDBDBD] text-slate-[16px]"
            value="{{ old('screenshoot1') }}" required>
          @error('screenshoot1')
          <span class="text-red-500">*{{ $message }}</span>
          @enderror
        </div>
        <div class="my-4">
          <span class="text-[#000] mb-2">Screenshoot 2</span>
          <input name="screenshoot2" type="file"
            placeholder="Masukkan link atau tautan konten yang kamu baca"
            class="w-full rounded-lg bg-[#FFF] py-3 px-2 outline-none placeholder-slate-400 text-slate-[#BDBDBD] text-slate-[16px]"
            value="{{ old('screenshoot2') }}">
          @error('screenshoot2')
          <span class="text-red-500">*{{ $message }}</span>
          @enderror
        </div>
        <div class="my-4">
          <span class="text-[#000] mb-2">Link atau tautan sumber konten</span>
          <input name="link" type="url"
            placeholder="Masukkan link atau tautan konten yang kamu baca"
            class="w-full rounded-lg bg-[#FFF] py-3 px-2 outline-none placeholder-slate-400 text-slate-[#BDBDBD] text-slate-[16px]"
            value="{{ old('link') }}">
          @error('link')
          <span class="text-red-500">*{{ $message }}</span>
          @enderror
        </div>
        <div class="my-4">
          <span class="text-[#000] mb-2">Detail Info</span>
          <input name="detail" type="text" placeholder="Ketik info apapun"
            class="w-full rounded-lg bg-[#FFF] py-3 px-2 outline-none placeholder-slate-400 text-slate-[#BDBDBD] text-slate-[16px]"
            value="{{ old('detail') }}">
          @error('detail')
          <span class="text-red-500">*{{ $message }}</span>
          @enderror
        </div>
        <div class="my-4">
          <span class="text-[#000] mb-5">Email<span class="text-[#FF1F39]">*</span></span>
          <input name="email" type="email"
            placeholder="Masukkan email untuk balasan validasi konten"
            class="w-full rounded-lg bg-[#FFF] py-3 px-2 outline-none placeholder-slate-400 text-slate-[#BDBDBD] text-slate-[16px]"
            value="{{ old('email') }}" required>
          @error('email')
          <span class="text-red-500">*{{ $message }}</span>
          @enderror
        </div>
        <button class="w-full px-5 bg-[#FF7366] shadow-xl rounded-full py-3 text-[#fff]">
          Kirim Sekarang
        </button>
      </form>
    </div>
    @endsection
    @push('javascript')
    <!-- modal -->
    <script>
      document.addEventListener("DOMContentLoaded", function () {
      // Get modal and buttons
      const modal = document.getElementById("modalKirim");
      const modalSukses = document.getElementById("modalSukses");
      const modalKirimKonten = document.getElementById("modalKirimKonten");
      const closeModalBtn = document.getElementById("closeModalBtn");
      const submitBtn = document.getElementById("submitBtn");
      // Open modal with fade animation
      modalKirimKonten.addEventListener("click", function () {
        modal.classList.remove("hidden");
        modal.classList.add("opacity-100", "translate-y-0");
      });
      // Close modal with fade animation
      closeModalBtn.addEventListener("click", function () {
        modal.classList.remove("opacity-100", "translate-y-0");
        modal.classList.add("opacity-0", "translate-y-4");
        setTimeout(() => {
          modal.classList.add("hidden");
          modal.classList.remove("opacity-0", "translate-y-4");
        }, 500);
      });
      // Submit form (you can customize this part to handle form submission)
      submitBtn.addEventListener("click", function () {
        // Get form data
        const formData1 = new FormData(document.getElementById("uploadForm1"));
        const formData2 = new FormData(document.getElementById("uploadForm2"));
        const linkOrSource = document.querySelector("input[type='text']").value;
        const detailInfo = document.querySelector("textarea").value;
        const email = document.querySelector("input[type='email']").value;
        // Handle form data as needed (e.g., send it to the server)
        console.log("Form Data 1:", formData1);
        console.log("Form Data 2:", formData2);
        console.log("Link or Source:", linkOrSource);
        console.log("Detail Info:", detailInfo);
        console.log("Email:", email);
        // Close modal with fade animation (you may want to do this after successful form submission)
        modal.classList.remove("opacity-100", "translate-y-0");
        modal.classList.add("opacity-0", "translate-y-4");
        setTimeout(() => {
          modal.classList.add("hidden");
          modal.classList.remove("opacity-0", "translate-y-4");
        }, 300);
      });
    });
    </script>
    <!-- swiper -->
    <script type="module">
      if (window.innerWidth >= 1279) {
      import('https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.mjs').then((Swiper) => {
        const swiper = new Swiper.default('.swiper', {
          direction: 'horizontal',
          loop: false,
          slidesPerView: 'auto',
          navigation: {
            nextEl: '.next',
            prevEl: '.prev',
          },
        });
      });
    }
    </script>
    {{-- upload drop zone --}}
    <!-- Tambahkan script dan stylesheet Dropzone JS -->
    <script src="https://cdn.jsdelivr.net/npm/dropzone@5.9.2/dist/min/dropzone.min.js"></script>
    <link rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/dropzone@5.9.2/dist/min/dropzone.min.css" />
    <!-- Inisialisasi Dropzone JS -->
    <script>
      Dropzone.options.myDropzone = {
        paramName: "file", // Nama file yang diunggah
        maxFilesize: 5, // Ukuran maksimum file dalam MB
        acceptedFiles: "image/*", // Hanya menerima file gambar
        init: function () {
            this.on("success", function (file, response) {
                // Tangani respons sukses, misalnya, perbarui nilai input tersembunyi
                if (file.fieldname === "screenshoot1") {
                    document.getElementById("screenshoot1").value = response.filename;
                    let previewElement = file.previewElement;
                    let previewUrl = response.previewUrl; // Sesuaikan dengan atribut yang sesuai dengan respons upload Anda
                    previewElement.querySelector(".dz-image img").src = previewUrl;
                  } else if (file.fieldname === "screenshoot2") {
                    document.getElementById("screenshoot2").value = response.filename;
                    let previewElement = file.previewElement;
                    let previewUrl = response.previewUrl; // Sesuaikan dengan atribut yang sesuai dengan respons upload Anda
                }
            });
        },
    };
    </script>
    @endpush