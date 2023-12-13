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
 @forelse ($donaturs as $donatur )
 <div
 class="tab {{ $donatur->id }} max-sm:px-5 sm:px-8 w-full bg-white shadow-xl relative rounded-xl max-lg:mx-4">
 <label for="donatur{{ $donatur->id }}"
   class="flex items-center justify-between gap-x-3 font-semibold text-lg -4xl hover:text-gray-950 h-20">
  
   <div class="flex items-center gap-x-3">
     <div class="w-10 h-10 bg-red-100 rounded-lg flex items-center">
       <div class="w-[30px] h-[30px] flex items-center mx-auto  transition-all ease-in-out duration-700">
         <img src="{{ asset($donatur->icon) }}" alt="">
        </div>
   </div>
    <h3>{{ $donatur->name }}</h3>
  </div>
  <div class="flex flex-col text-center">
    <div class="text-center text-zinc-800 text-sm font-normal font-['Poppins']  transition-all ease-in-out duration-700">{{ date_format($donatur->created_at, "Y-m-d") }}</div>
    <div class="text-center text-zinc-800 text-base font-semibold font-['Poppins']  transition-all ease-in-out duration-700">{{ $donatur->donation }}</div>

  </div>
  </label>
   
</div>
@empty

@endforelse
</div>



</section>



@endsection

@push('javascript')

@endpush