@extends('template.frontend')
@section('title','kenalikonten.com')
@section('content')
<section
  class="flex flex-wrap justify-normal lg:w-[1024px] mx-auto max-[768px]:mx-4  p-4 sm:p-0 transition-all ease-in-out duration-700 my-[32px] ">

  <div class="lg:w-[661px] mx-auto">
    <h1 class="text-[32px] color-[#333] font-semibold max-[640px]:text-[28px] text-center">
      Daftar Donatur
    </h1>
    <p class="font-normal text-[16px] py-4 text-center">
      Daftar donasi yang masuk dari para donatur untuk pengembangan
      gerakan Kenali Konten
      <span class="text-[#FF1F39] font-semibold">hoaks</span> dan <span
        class="text-[#58BF18] font-semibold">fakta</span>.
    </p>
  </div>
<div class="sm:w-[936px] flex flex-wrap mx-auto max-[1240px]:flex-col mt-5 mb-10 overscroll-none p-3 gap-y-2 transition-all ease-in-out duration-700">
 @for ($i = 0; $i < 10; $i++) <div class="max-[1279px]:min-w-full lg:w-[279px] h-[300px] rounded-2xl bg-[#FFF] shadow-xl sm:mr-4 flex flex-col gap-3 cursor-grab swiper-slide">
  <div class="mx-auto mt-9">
   <svg width="41" height="40" viewBox="0 0 41 40" fill="none" xmlns="http://www.w3.org/2000/svg">
    <rect x="0.5" width="40" height="40" rx="8" fill="#FFE4E1" />
    <path d="M24.875 20C28 20 30.5 22.5 30.5 25.625C30.5 26.725 30.1875 27.7625 29.6375 28.625L33.4875 32.5L31.75 34.2375L27.85 30.4C26.9875 30.9375 25.9625 31.25 24.875 31.25C21.75 31.25 19.25 28.75 19.25 25.625C19.25 22.5 21.75 20 24.875 20ZM24.875 22.5C24.0462 22.5 23.2513 22.8292 22.6653 23.4153C22.0792 24.0013 21.75 24.7962 21.75 25.625C21.75 26.4538 22.0792 27.2487 22.6653 27.8347C23.2513 28.4208 24.0462 28.75 24.875 28.75C25.7038 28.75 26.4987 28.4208 27.0847 27.8347C27.6708 27.2487 28 26.4538 28 25.625C28 24.7962 27.6708 24.0013 27.0847 23.4153C26.4987 22.8292 25.7038 22.5 24.875 22.5ZM13 32.5C12.337 32.5 11.7011 32.2366 11.2322 31.7678C10.7634 31.2989 10.5 30.663 10.5 30V10C10.5 9.33696 10.7634 8.70107 11.2322 8.23223C11.7011 7.76339 12.337 7.5 13 7.5H14.25V16.25L17.375 14.375L20.5 16.25V7.5H28C28.663 7.5 29.2989 7.76339 29.7678 8.23223C30.2366 8.70107 30.5 9.33696 30.5 10V19.7625C28.9886 18.3086 26.9722 17.4975 24.875 17.5C22.7201 17.5 20.6535 18.356 19.1298 19.8798C17.606 21.4035 16.75 23.4701 16.75 25.625C16.75 28.5125 18.2625 31.0625 20.5375 32.5H13Z" fill="#FF7366" />
   </svg>
  </div>
  <div class="py-3 transition-all ease-in-out duration-700">
   <h2 class="text-center">Tim Relawan</h2>
   <h1 class="text-center text-[20px] font-semibold ">Pencari Fakta</h1>
  </div>
  <div class="w-[245px] max-[1024px]:w-full mx-auto">
   <p class="text-center">
    Tim yang akan mencari sumber keaslian konten yang dikirim pengguna
   </p>
  </div>
  <div class="mx-auto">
   <a href="#" class="text-[16px] text-[#FF7366] flex flex-row items-center hover:font-bold">
    Daftar
    <img class="w-6" src="{{ asset('FE') }}/dist/images/ic-arrow-right.png" alt="Detail">
   </a>
  </div>
</div>
@endfor
</div>



</section>



@endsection

@push('javascript')

@endpush