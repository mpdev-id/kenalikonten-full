@extends('template.backend')
@section('title','dashboard')
@section('content')
<!-- TW Elements is free under AGPL, with commercial license required for specific uses. See more details: https://tw-elements.com/license/ and contact us for queries at tailwind@mdbootstrap.com -->
@if($errors->any())
<div class="text-red-500 flex flex-row">
 *Terdapat kesalahan dalam pengisian form. Mohon periksa kembali.
 {{ $errors }}
</div>
@endif
<div class="flex flex-col">
 <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
  <div class="inline-block min-w-full py-2 sm:px-6 lg:px-8">
    <div class="w-[1280px] h-[600px] overflow-auto">
    <table class="min-w-[1400px] text-left text-sm font-light">
     <thead class=" top-0 border-b font-medium bg-emerald-500 bg-red-100 sticky z-[100]">
      <tr class="p-2 ">
       <th scope="col" class="w-[30px] px-1">No</th>
       <th class="w-[180px] p-2 ">Status</th>
       <th class="w-[230px] p-2 ">Screenshoot 1</th>
       <th class="w-[230px] p-2 ">Screenshoot 2</th>
       <th class="w-[230px] p-2 ">Link Konten </th>
       <th class="w-[230px] p-2 ">Detail info </th>
       <th class="w-[230px] p-2 ">Email </th>
       <th class="w-[150px] p-2 sticky right-20 z-10 " id="tanggalIssue">Tanggal </th>
       <th class="w-[100px] p-2 sticky right-0 z-10">Action </th>
      </tr>
     </thead>
     <tbody id="data">
      @forelse ($data['semua'] as $item)
      <tr class="border-b border-0">
        {{-- no --}}
       <td class="whitespace-nowrap px-1 font-medium">{{ $loop->iteration }}</td>
       {{-- status --}}
       <td class="w-[180px] p-2">
        <select class="w-[164px] h-8 px-1.5 py-0.5 rounded-lg border border-0 justify-between items-center inline-flex @if ($item->status=='not_validate')
            text-red-600
        @elseif ($item->status=='validated')
            text-lime-600
        @else
            text-yellow-500
        @endif status-dropdown" data-item-id="{{ $item->id }}" name="status" id="status">
            {{-- <option  value="{{ $item->status }}">{{ $item->status }}</option> --}}
            @foreach ($data['status'] as $status)
            <option value="{{ $status }}" {{ $item->status === $status ? 'selected':''}}>
                @if ($status=='not_validate')
                    belum divalidasi 
                @elseif ($status=='validated')
                    tervalidasi
                @else
                    sedang diperiksa
                @endif
            </option>
            @endforeach
        </select>
        </td>
    {{-- ss1 --}}
    <td class="w-[230px] p-2">
        <div data-tooltip-target="tooltip-ss1-{{ $loop->index }}" class="relative">
            <img loading="lazy" class="w-10 shadow" src="{{ asset($item->screenshoot1) }}" alt="screenshoot1">
            <div id="tooltip-ss1-{{ $loop->index }}" role="tooltip" class="absolute w-96 z-[10000] invisible inline-block px-3 py-2 text-sm font-medium text-white bg-white-900 rounded-lg shadow-sm opacity-0 tooltip ">
            <a href="{{ asset($item->screenshoot1) }}" target="_blank">
                <img loading="lazy" class="w-full shadow" src="{{ asset($item->screenshoot1) }}" alt="screenshoot1">
            </a> 
            </div>
        </div>
    </td>

    {{-- ss2 --}}
    <td class="w-[230px] p-2">
        @if ($item->screenshoot2)
            
        <div data-tooltip-target="tooltip-ss2-{{ $loop->index }}" class="relative">
            <img loading="lazy" class="w-10 shadow" src="{{ asset($item->screenshoot2) }}" alt="screenshoot2">
            <div id="tooltip-ss2-{{ $loop->index }}" role="tooltip" class="absolute w-96 z-[10000] invisible inline-block px-3 py-2 text-sm font-medium text-white bg-white-900 rounded-lg shadow-sm opacity-0 tooltip ">
                <a href="{{ asset($item->screenshoot1) }}" target="_blank">
                <img loading="lazy" class="w-full shadow" src="{{ asset($item->screenshoot2) }}" alt="screenshoot2">
                </a>
            </div>
        </div>
        @else
            <span class="font-medium text-gray-700"> - </span>
        @endif
    </td>
    {{-- link --}}
    <td class="w-[230px] p-2">
        <a href="{{  $item->link }}" target="_blank">
            <span class="text-red-600 text-sm font-normal font-Poppins text-wrap">{{ Str::of($item->link)->limit(20) }}</span>
        </a>
       </td>
        {{-- detail --}}
        <td class="w-[260px] p-2">
            <span data-tooltip-target="tooltip-no-arrow-{{ $loop->index }}" class="text-zinc-800 text-sm font-normal font-Poppins text-wrap">{{ Str::of($item->detail)->limit(45) }}</span>
            <div id="tooltip-no-arrow-{{ $loop->index }}" role="tooltip" class="absolute z-[10000] invisible inline-block px-3 py-2 text-sm font-medium text-white bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip ">
                {{ $item->detail }}
            </div>
        </td>
       {{-- email --}}
       <td class="w-[230px] p-2">
        <span class="text-zinc-800 text-sm font-normal font-Poppins text-wrap">{{ $item->email }}</span>
       </td>
       {{-- tanggal --}}
        <td class="w-[150px] p-2 sticky right-20  z-10 bg-neutral-100 ">
            <span class="text-zinc-800 text-sm font-normal font-Poppins">{{ $item->created_at->format('d-M-Y') }}</span>
        </td>

        {{-- action --}}
        <td class="w-[100px] p-2 flex justify-center align-center mt-3 sticky right-0  z-10 bg-neutral-100 ">

        <a onclick="openNewWindow('{{ route('dashboard.konten-masuk.reply') }}'); return true;">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M9.99991 9.00026V7.41026C9.99991 6.52026 8.91991 6.07026 8.28991 6.70026L3.69991 11.2903C3.60721 11.3828 3.53366 11.4927 3.48348 11.6136C3.4333 11.7346 3.40747 11.8643 3.40747 11.9953C3.40747 12.1262 3.4333 12.2559 3.48348 12.3769C3.53366 12.4979 3.60721 12.6077 3.69991 12.7003L8.28991 17.2903C8.91991 17.9203 9.99991 17.4803 9.99991 16.5903V14.9003C14.9999 14.9003 18.4999 16.5003 20.9999 20.0003C19.9999 15.0003 16.9999 10.0003 9.99991 9.00026Z" fill="#FF7366"/>
                </svg>
                
        </a>
       
       </td>
      </tr>
      @empty
      <td class="text-center p-4" colspan="10">

          Belum ada Konten Masuk
        </td>
      @endforelse
     </tbody>
    </table>

   </div>
  </div>
 </div>
</div>
@endsection


@push('javascript')
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script>
$(document).ready(function() {
    // Mengatur event hover pada semua elemen span dengan data-tooltip-target
    $('[data-tooltip-target]').hover(
        function() {
            const targetId = $(this).data('tooltip-target');
            const tooltip = $('#' + targetId);
            tooltip.removeClass('invisible');
            tooltip.addClass('opacity-100');
        },
        function() {
            const targetId = $(this).data('tooltip-target');
            const tooltip = $('#' + targetId);
            tooltip.removeClass('opacity-100');
            tooltip.addClass('invisible');
        }
    );
});
</script>
<script>
    $(document).ready(function() {
        // Event listener untuk perubahan status
        $('.status-dropdown').on('change', function() {
            const itemId = $(this).data('item-id'); // Dapatkan ID item dari data-item-id
            const newStatus = $(this).val(); // Dapatkan status yang baru dipilih
    
            // Kirim permintaan AJAX
            $.ajax({
                url: "{{ route('dashboard.konten-masuk.update', ':id') }}".replace(':id', itemId), // Rute dengan ID dinamis
                type: 'POST',
                data: {
                    _token: '{{ csrf_token() }}', // CSRF token
                    status: newStatus // Status baru yang dipilih
                },
                success: function(response) {
                    // Tambahkan kode di sini untuk menangani respons jika diperlukan
                    // $('#data');
                    return false;
                    console.log(response);
                },
                error: function(error) {
                    // Tambahkan kode di sini untuk menangani error jika diperlukan
                    console.log(error);
                }
            });
        });
    });

    // all data sort
    document.addEventListener("DOMContentLoaded", function() {
      const header = document.getElementById('tanggalIssue');
      
      header.addEventListener('click', function() {
          const svg = header.querySelector('svg');
          
          // Check if the current URL already contains the sort query parameter
          const urlParams = new URLSearchParams(window.location.search);
          const sortOrder = urlParams.get('all-sort');

          // Toggle ascending and descending based on the current sort order
          let newSortOrder = 'asc'; // default value
          if (sortOrder === 'asc') {
              newSortOrder = 'desc';
          }

          // Update the URL with the new sort order
          if (urlParams.has('all-sort')) {
              urlParams.set('all-sort', newSortOrder);
          } else {
              urlParams.append('all-sort', newSortOrder);
          }

          const newUrl = `${window.location.pathname}?${urlParams.toString()}`;
          window.location.href = newUrl;
      });
  });


        function openNewWindow(url) {
            var newWindow = window.open(url, '_blank', 'height=800,width=1440');
            newWindow.focus();
        }
      
    </script>
    

@endpush

@push('css')
<style>
 /* Custom scroll bar styling */
 ::-webkit-scrollbar {
  width: 2px;
  /* Set width to 417px */
  height: 2px;
  /* Set height to 2px */
 }

 /* Track */
 ::-webkit-scrollbar-track {
  background: #f1f1f1;
  /* Color of the track */
 }

 /* Handle */
 ::-webkit-scrollbar-thumb {
  background: #f44336;
  /* Color of the scroll thumb, but you want red-400 */
 }

 /* Handle on hover */
 ::-webkit-scrollbar-thumb:hover {
  background: #b71c1c;
  /* Darker color when hovering */
 }

</style> 
@endpush



