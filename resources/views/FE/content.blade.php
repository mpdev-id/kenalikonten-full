@extends('template.frontend')
@section('title','kenalikonten.com')
@section('content')
{{-- content --}}
<section class="flex flex-col justify-between mt-8 max-w-5xl mx-auto transition-all ease-in-out duration-700 ">
  <div class="m-4 h-full px-7 rounded-xl items-center">
    <h2 class="text-4xl font-semibold py-2">{{ $content->title??'' }}</h2>
    
    <div class="text-zinc-500 text-base font-normal font-['Poppins'] md:w-[661px]">
      {{ \Carbon\Carbon::parse($content->created_at)->locale('id')->diffForHumans() }} • <span id="estimated-reading-time"></span> membaca 
      


    </div>
    <div class="bg-white my-2 rounded">
      <img class="w-full object-contain md:object-scale-down" src="{{ asset($content->foto??'') }}" />
    </div>
    <div id="content" class="max-w-6xl text-wrap">
      {!! $content->content !!}
    </div>

  </div>



 @if(request()->is('content/*'))
 <!-- kembali -->
 <div class="max-w-full text-red-400 flex items-center mt-10">
  <div class="flex items-center ">
   <a href="{{ route('index.valid') }}" class="flex flex-row items-center">
    <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
     <g id="mingcute:arrow-right-line">
     <g id="Group">
     <path id="Vector" d="M6.96975 13.773L2.727 9.53024C2.5864 9.38959 2.50741 9.19886 2.50741 8.99999C2.50741 8.80111 2.5864 8.61038 2.727 8.46974L6.96975 4.22699C7.1112 4.09037 7.30065 4.01477 7.4973 4.01648C7.69395 4.01819 7.88206 4.09707 8.02111 4.23612C8.16017 4.37518 8.23905 4.56329 8.24076 4.75994C8.24246 4.95658 8.16687 5.14603 8.03025 5.28749L5.06775 8.24999L15 8.24999C15.1989 8.24999 15.3897 8.329 15.5303 8.46966C15.671 8.61031 15.75 8.80107 15.75 8.99999C15.75 9.1989 15.671 9.38966 15.5303 9.53032C15.3897 9.67097 15.1989 9.74999 15 9.74999L5.06775 9.74999L8.03025 12.7125C8.10188 12.7817 8.15902 12.8644 8.19833 12.9559C8.23763 13.0474 8.25832 13.1459 8.25919 13.2454C8.26005 13.345 8.24108 13.4438 8.20337 13.536C8.16566 13.6281 8.10997 13.7119 8.03955 13.7823C7.96913 13.8527 7.88539 13.9084 7.79322 13.9461C7.70104 13.9838 7.60228 14.0028 7.5027 14.0019C7.40312 14.0011 7.3047 13.9804 7.2132 13.9411C7.12169 13.9018 7.03894 13.8446 6.96975 13.773Z" fill="#FF7366"/>
     </g>
     </g>
     </svg>
      kembali
   </a>   
  </div>
 </div>
@endif
</section>
@endsection


@push('javascript')
<script>
  function estimateReadingTime() {
  const contentText = document.getElementById("content").textContent; // Replace "#content" with your content element ID
  const wordsPerMinute = 200; // Adjust this value based on the average reading speed
  const readingTimeInMinutes = Math.ceil(contentText.split(/\s+/).length / wordsPerMinute);
  const readingTimeString = readingTimeInMinutes === 1 ? `${readingTimeInMinutes} menit` : `${readingTimeInMinutes} menit`;
  document.getElementById("estimated-reading-time").textContent = ` ${readingTimeString}`;
}

estimateReadingTime();

</script>

@endpush
