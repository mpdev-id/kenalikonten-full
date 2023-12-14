@forelse($validations as $valid)
    <div class="max-[1279px]:min-w-full p-4 lg:w-[279px] max-[1279px]:h-[540px] rounded-2xl bg-[#FFF] gap-y-2 shadow-xl sm:mr-4 flex flex-col cursor-pointer transition-all ease-in-out duration-1000 ">
      <div class="mx-auto">
        <img class="w-full h-96 xl:h-44 object-scale-down rounded" src="{{ asset($valid->foto) }}" />
    </div>
     <div class="w-16 h-7 px-3 py-1 {{ $valid->status == 'hoax' ?'bg-rose-600': 'bg-lime-600' }}  bg-opacity-20 rounded-2xl justify-start items-center gap-2.5 inline-flex text-center ">
      <div class="{{ $valid->status == 'hoax' ?'text-rose-600': 'text-lime-600' }} text-sm font-normal font-['Poppins'] text-center">{{ $valid->status == 'hoax' ?'Hoax': 'Fakta' }}</div>
   </div>
     <div class="xl:w-[245px] min-[1024px]:w-full mx-auto flex flex-col gap-y-2">
      <div class="text-zinc-500 text-sm font-normal">{{ \Carbon\Carbon::parse($valid->created_at)->locale('id')->diffForHumans() }}</div>
        <h2 class=" text-zinc-800 text-lg font-semibold font-semibold">
          {{ strlen($valid->title) > 30 ? substr($valid->title, 0, 30) . '...' : $valid->title }}

        </h2>
     </div>

     <div class="mx-auto xl:pb-2 transition ease-in-out duration-700">
      <a href="{{ route('index.content', $valid->slug) }}" class="text-[16px] text-[#FF7366] flex flex-row items-center hover:font-bold">
       Baca Selengkapnya
       <img class="w-6" src="{{ asset('FE') }}/dist/images/ic-arrow-right.png" alt="Detail">
      </a>
     </div>
   </div>
   @empty
   <div class="h-full flex outline-none placeholder-stone-300 text-base font-normal w-full max-w-full transition-all ease-in-out duration-700 bg-white-900 rounded">
    <span class="mx-auto">
     data tidak tersedia
    </span>
   </div>

   @endforelse

   {{-- @if ($validations->count() > 5) --}}
  {{-- <div class="mt-[30px] mx-auto">
  <button id="load-more" class="w-[250px] px-5 bg-[#FF7366] shadow-xl font-semibold rounded-full py-3 text-[#fff] ">
    <span id="load-more-text">Lihat lebih banyak</span>  
    <span id="loading-indicator" class="hidden ml-2 animate-ping"> Memuat </span>
  </button>
  </div>     --}}
  {{-- @endif  --}}