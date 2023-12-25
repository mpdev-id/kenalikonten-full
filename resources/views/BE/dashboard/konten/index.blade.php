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
    <div class="w-[1260px] h-[660px] overflow-auto">


    <table class="min-w-[1280px] text-left text-sm font-light">
     <thead class="border-b font-medium bg-emerald-500 bg-red-100 ">
      <tr class="p-2 ">
       <th scope="col" class="w-[30px] px-1">No</th>
       <th class="w-[180px] p-2 ">Status</th>
       <th class="w-[230px] p-2 ">Screenshoot 1</th>
       <th class="w-[230px] p-2 ">Screenshoot 2</th>
       <th class="w-[230px] p-2 ">Link Konten </th>
       <th class="w-[230px] p-2 ">Detail info </th>
       <th class="w-[230px] p-2 ">Email </th>
       <th class="w-[150px] p-2 sticky right-0  z-10">Tanggal </th>
       <th class="w-[100px] p-2 sticky right-0  z-10">Action </th>
      </tr>
     </thead>
     <tbody>
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
        @endif" name="status" id="status">
            {{-- <option  value="{{ $item->status }}">{{ $item->status }}</option> --}}
            @foreach ($data['status'] as $status)
            <option value="{{ $status }}" {{ $item->status === $status ? 'selected':''}}>
            @if ($status=='not_validate')
                belum divalidasi 
            @elseif ($status=='validated')
                tervalidasi
            @else
                sedang diperiksa
            @endif</option>
                
            @endforeach
        </select>
       </td>
       {{-- ss1 --}}
       <td class="w-[230px] p-2">
        <img class="w-8 shadow" src="{{ asset($item->foto) }}" alt="{{ $item->name }} foto">
       </td>
       {{-- ss2 --}}
       <td class="w-[230px] p-2">
           <img class="w-8 shadow" src="{{ asset($item->foto) }}" alt="{{ $item->name }} foto">
    </td>
    {{-- link --}}
    <td class="w-[230px] p-2">
        <span class="text-zinc-800 text-sm font-normal font-Poppins text-wrap">{{ $item->link }}</span>
       </td>
       {{-- detail --}}
       <td class="w-[230px] p-2">
        <span class="text-zinc-800 text-sm font-normal font-Poppins text-wrap">{{ $item->detail }}</span>
       </td>
       {{-- email --}}
       <td class="w-[230px] p-2">
        <span class="text-zinc-800 text-sm font-normal font-Poppins text-wrap">{{ $item->email }}</span>
       </td>
       {{-- tanggal --}}
        <td class="w-[150px] p-2 sticky right-0  z-10">
            <span class="text-zinc-800 text-sm font-normal font-Poppins">{{ $item->created_at->format('d-M-Y') }}</span>
        </td>

        {{-- action --}}
        <td class="w-[100px] p-2 px-6 flex justify-center sticky right-0  z-10">

        <button onclick="editModal('{{ $item->id }}')">
         <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M3 17.4595V20.4995C3 20.7795 3.22 20.9995 3.5 20.9995H6.54C6.67 20.9995 6.8 20.9495 6.89 20.8495L17.81 9.93951L14.06 6.18951L3.15 17.0995C3.05 17.1995 3 17.3195 3 17.4595ZM20.71 7.03951C20.8027 6.947 20.8762 6.83711 20.9264 6.71614C20.9766 6.59517 21.0024 6.46548 21.0024 6.33451C21.0024 6.20355 20.9766 6.07386 20.9264 5.95289C20.8762 5.83192 20.8027 5.72203 20.71 5.62951L18.37 3.28951C18.2775 3.19681 18.1676 3.12326 18.0466 3.07308C17.9257 3.0229 17.796 2.99707 17.665 2.99707C17.534 2.99707 17.4043 3.0229 17.2834 3.07308C17.1624 3.12326 17.0525 3.19681 16.96 3.28951L15.13 5.11951L18.88 8.86951L20.71 7.03951Z" fill="#FF7366" />
         </svg>
        </button>
        <form method="post" action="{{ route('dashboard.anggota-tim.delete', $item->id) }}">
         @csrf
         @method('DELETE')
         <input type="hidden" value="{{ $item->id }}" name="id" hidden>
         <button type="submit">
          <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
           <path d="M7 21C6.45 21 5.97933 20.8043 5.588 20.413C5.19667 20.0217 5.00067 19.5507 5 19V6H4V4H9V3H15V4H20V6H19V19C19 19.55 18.8043 20.021 18.413 20.413C18.0217 20.805 17.5507 21.0007 17 21H7ZM9 17H11V8H9V17ZM13 17H15V8H13V17Z" fill="#FF7366" />
          </svg>
         </button>
        </form>
       </td>
      </tr>
      @empty
      Belum ada Konten Masuk
      @endforelse
     </tbody>
    </table>

   </div>
  </div>
 </div>
</div>
@endsection

@push('css')
<style>
    /* Custom scroll bar styling */
::-webkit-scrollbar {
    width: 2px; /* Set width to 417px */
    height: 2px; /* Set height to 2px */
}

/* Track */
::-webkit-scrollbar-track {
    background: #f1f1f1; /* Color of the track */
}

/* Handle */
::-webkit-scrollbar-thumb {
    background: #f44336; /* Color of the scroll thumb, but you want red-400 */
}

/* Handle on hover */
::-webkit-scrollbar-thumb:hover {
    background: #b71c1c; /* Darker color when hovering */
}

</style>
    
@endpush

 @push('javascript')
 <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
 <script>
  // preview image uplaod
  document.addEventListener("DOMContentLoaded", function() {
   const bestMomentInput = document.getElementById('foto');
   const bestMomentPreview = document.getElementById('preview_foto');
   bestMomentInput.addEventListener('change', (event) => {
    handleImageUpload(event, 'preview_foto2');
   });
   const modal = document.getElementById("modalKirim");
   const modalKirimKonten = document.getElementById("modalKirimKonten");
   const closeModalBtn = document.getElementById("closeModalBtn");
   modalKirimKonten.addEventListener("click", function() {
    toggleModal(true);
    clear();
    gambarTim.setAttribute("hidden", "true");
    // $('#title').text("Tambah Anggota Tim");
   });
   closeModalBtn.addEventListener("click", function() {
    toggleModal(false);
    clear();
   });

   // Event listener saat pengguna mengetik di input
   $('#modalKirim input[name="quote"]').on('input', function() {
    let currentLength = $(this).val().length;
    let maxLength = parseInt($(this).attr('maxlength'));
    let remainingChars = maxLength - currentLength;
    $('#charCount').text(remainingChars + ' karakter tersisa');
    if (currentLength >= maxLength) {
     $(this).addClass('bg-green-200');
    } else {
     $(this).removeClass('bg-green-200');
    }
   });

  });

  function toggleModal(isOpen) {
   const modal = document.getElementById("modalKirim");
   const action = isOpen ? "add" : "remove";
   modal.classList[action]("opacity-100", "translate-y-0");
   if (!isOpen) {
    modal.classList.add("opacity-0", "translate-y-4");
    setTimeout(() => {
     modal.classList.add("hidden");
     modal.classList.remove("opacity-0", "translate-y-4");
    }, 500);
   } else {
    modal.classList.remove("hidden");
   }
  }

  function clear() {
   $('#title').text("Tambah Anggota Tim");
   $('#modalKirim input[name="id"]').val("");
   $('#modalKirim input[name="name"]').val("");
   $('#modalKirim input[name="quote"]').val("");
   $('#modalKirim select[name="team_id"]').val("");
   $('#modalKirim input[name="foto"]').val("");
   const gambarTim = document.getElementById("preview_foto");
   gambarTim.setAttribute("hidden", "true"); // Menyembunyikan gambar saat modal ditutup
  }

  function editModal(teamId) {
   $('#title').text("Edit Anggota Tim");
   toggleModal(true);
   $.ajax({
    type: "GET"
    , url: "{{ route('dashboard.anggota-tim.edit', '') }}/" + teamId
    , dataType: "json"
    , success: function(anggotaData) {
     // console.info(anggotaData);
     fillForm(anggotaData);
    }
    , error: function(xhr, status, error) {
     console.error('Gagal memuat data tim:', status);
    }
   });
  }

  function fillForm(anggotaData) {
   // Mengambil referensi modal
   const modal = document.getElementById("modalKirim");
   // Menghapus kelas 'hidden' dan menambahkan kelas untuk menampilkan modal
   $(modal).removeClass("hidden").addClass("opacity-100 translate-y-0");
   // Mengisi nilai formulir dengan data tim
   $('#modalKirim input[name="id"]').val(anggotaData.id);
   $('#modalKirim input[name="quote"]').val(anggotaData.quote);
   $('#modalKirim input[name="name"]').val(anggotaData.name);
   $('#modalKirim select[name="team_id"]').val(anggotaData.team_id);
   // $('#modalKirim input[name="foto"]').val(anggotaData.foto);
   // console.log("Data tim:", anggotaData);
   // Mengambil referensi elemen gambar tim
   const gambarTim = document.getElementById("preview_foto");
   // Menetapkan sumber gambar sesuai dengan URL yang diterima dari data tim
   gambarTim.src = anggotaData.foto;
   gambarTim.removeAttribute("hidden");
   // console.log(anggotaData);
  }

 </script>
 @endpush
