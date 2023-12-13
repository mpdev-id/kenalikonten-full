@extends('template.frontend')
@section('title','kenalikonten.com')
@section('content')
{{-- content --}}
<section class="flex flex-wrap justify-between items-center mt-8 max-w-5xl mx-auto transition-all ease-in-out duration-700">
 <div class="text-center flex flex-col gap-y-3 w-full">
  <h2 class="text-4xl font-semibold">Daftar Konten Tervalidasi</h2>
  <p class="text-base font-normal md:w-[661px] mx-auto">
   Seluruh konten atau berita yang dikirim pembaca dan telah divalidasi oleh tim Kenali Konten, terkurasi pada halaman ini.
  </p>
  <div class="m-4 h-[46px] px-7 py-2.5 bg-white rounded-xl justify-between items-center inline-flex">
   <div class="text-stone-300 text-base font-normal w-full overflow-hidden">
    <input id="cari" type="text" placeholder="Ketik judul atau apapun yang ingin kamu cari" class="h-full flex outline-none placeholder-stone-300 text-base font-normal w-full max-w-full transition-all ease-in-out duration-700" />
   </div>
   <div for="cari" class="w-8 h-6 relative bg-white-900">
    <div class="w-6 h-6 left-0 top-0 absolute">
     <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
      <g clip-path="url(#clip0_46_15751)">
       <path fill-rule="evenodd" clip-rule="evenodd" d="M10.5 2C9.1446 2.00012 7.80887 2.32436 6.60427 2.94569C5.39966 3.56702 4.3611 4.46742 3.57525 5.57175C2.78939 6.67609 2.27902 7.95235 2.08672 9.29404C1.89442 10.6357 2.02576 12.004 2.46979 13.2846C2.91382 14.5652 3.65766 15.7211 4.63925 16.6557C5.62084 17.5904 6.81171 18.2768 8.11252 18.6576C9.41333 19.0384 10.7864 19.1026 12.117 18.8449C13.4477 18.5872 14.6975 18.015 15.762 17.176L19.414 20.828C19.6026 21.0102 19.8552 21.111 20.1174 21.1087C20.3796 21.1064 20.6304 21.0012 20.8158 20.8158C21.0012 20.6304 21.1064 20.3796 21.1087 20.1174C21.111 19.8552 21.0102 19.6026 20.828 19.414L17.176 15.762C18.164 14.5086 18.7792 13.0024 18.9511 11.4157C19.123 9.82905 18.8448 8.22602 18.1482 6.79009C17.4517 5.35417 16.3649 4.14336 15.0123 3.29623C13.6597 2.44911 12.096 1.99989 10.5 2ZM4.00001 10.5C4.00001 8.77609 4.68483 7.12279 5.90382 5.90381C7.1228 4.68482 8.7761 4 10.5 4C12.2239 4 13.8772 4.68482 15.0962 5.90381C16.3152 7.12279 17 8.77609 17 10.5C17 12.2239 16.3152 13.8772 15.0962 15.0962C13.8772 16.3152 12.2239 17 10.5 17C8.7761 17 7.1228 16.3152 5.90382 15.0962C4.68483 13.8772 4.00001 12.2239 4.00001 10.5Z" fill="#BDBDBD" />
      </g>
      <defs>
       <clipPath id="clip0_46_15751">
        <rect width="24" height="24" fill="white" />
       </clipPath>
      </defs>
     </svg>
    </div>
   </div>
  </div>
 </div>

 <div id="loadDisiniDong" class="sm:w-[936px] flex flex-wrap mx-auto max-[1240px]:flex-col mt-5 mb-10 overscroll-none p-3 gap-y-3 transition-all ease-in-out duration-1000 ">

  @forelse($validations as $key=>$valid)
  <div class="max-[1279px]:min-w-full p-4 lg:w-[279px] max-[1279px]:h-[540px] rounded-2xl bg-[#FFF] gap-y-2 shadow-xl sm:mr-4 flex flex-col cursor-pointer transition-all ease-in-out duration-1000">
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
          Belum tersedia
    </span> 
</div>
  @endforelse
 </div>

@if ($validations->count() > 0)
<div class="mt-[30px] mx-auto">
 <button id="load-more" class="w-[250px] px-5 bg-[#FF7366] shadow-xl font-semibold rounded-full py-3 text-[#fff] ">
  <span id="load-more-text">Lihat lebih banyak</span>  
  <span id="loading-indicator" class="hidden ml-2 animate-ping"> Memuat </span>
 </button>
</div>    
@endif 

</section>
@endsection


@push('javascript')
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script>
  $(document).ready(function () {
      let page = 2; // Halaman berikutnya untuk dimuat
      let isLoading = false;

      $('#load-more').on('click', function () {
          if (isLoading) {
              return; // Jangan izinkan permintaan lagi jika sedang memuat
          }
          // Tampilkan pesan "sedang memuat..." dan sembunyikan tombol "Lihat lebih banyak"
          $('#load-more-text').hide();
          $('#loading-indicator').removeClass('hidden');
          isLoading = true;

          $.ajax({
              url: '{{ route('index.valid.load-more') }}',
              method: 'GET',
              data: { page: page },
              success: function (data) {
                  if (data.trim() !== '') {
                      // Tambahkan hasil load lebih banyak ke konten yang ada
                      $('#loadDisiniDong').append(data);
                      page++; // Pindah ke halaman berikutnya
                  } else {
                      // Semua data telah dimuat, sembunyikan tombol "Lihat lebih banyak"
                      $('#load-more').hide();
                  }
              },
              complete: function () {
                  // Sembunyikan pesan "sedang memuat..." dan tampilkan kembali tombol "Lihat lebih banyak"
                  $('#load-more-text').show();
                  $('#loading-indicator').addClass('hidden');
                  isLoading = false;
              }
          });
      });
  });
</script>
{{-- loadmore --}}
<script>
  $(document).ready(function () {
       $('#cari').on('keyup', function () {
           let query = $(this).val();
           $.ajax({
               url: '{{ route('index.valid.cari-validasi') }}',
   
               method: 'GET',
               data: { search: query },
               success: function (data) {
                  $('#loadDisiniDong').html(data);
                  $('#load-more').hide();
               }
           });
       });
  });
 </script>
@endpush

