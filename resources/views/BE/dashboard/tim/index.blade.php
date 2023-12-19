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
      {{-- tambah data --}}
      <button id="modalKirimKonten" href="#" class="hover:shadow-lg w-[218px] h-12 px-5 py-3 bg-red-400 rounded-[50px] justify-center items-center gap-1 inline-flex">
      <div class="w-6 h-6 relative"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M18 13H13V18C13 18.55 12.55 19 12 19C11.45 19 11 18.55 11 18V13H6C5.45 13 5 12.55 5 12C5 11.45 5.45 11 6 11H11V6C11 5.45 11.45 5 12 5C12.55 5 13 5.45 13 6V11H18C18.55 11 19 11.45 19 12C19 12.55 18.55 13 18 13Z" fill="white" />
        </svg>
      </div>
      <div class="text-white text-base font-semibold font-['Poppins']" >Tambah Jenis Tim</div>
      </button>
      {{-- tambah data --}}
      <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
      <div class="inline-block min-w-full py-2 sm:px-6 lg:px-8">
        <div class="overflow-hidden">
        <table class="min-w-full text-left text-sm font-light ">
          <thead class="border-b font-medium bg-emerald-500 bg-red-100 ">
          <tr class="p-2">
            {{-- <th scope="col" class="px-1 py-4">No</th> --}}
            <div class="w-9 h-[60px] p-2 bg-red-100 justify-start items-center gap-0.5 inline-flex">
            <div class="text-zinc-800 text-sm font-semibold font-['Poppins']">No</div>
            </div>
            <div class="w-[450px] h-[60px] p-2 bg-red-100 justify-start items-center gap-0.5 inline-flex">
            <div class="text-zinc-800 text-sm font-semibold font-['Poppins']">Nama Jenis Tim</div>
            </div>
            <div class="w-[450px] h-[60px] p-2 bg-red-100 justify-start items-center gap-0.5 inline-flex">
            <div class="text-zinc-800 text-sm font-semibold font-['Poppins']">Icon</div>
            </div>
            <div class="w-[124px] h-[60px] p-2 bg-red-100 justify-start items-center gap-0.5 inline-flex">
            <div class="text-zinc-800 text-sm font-semibold font-['Poppins']">Action</div>
            </div>
          </tr>
          </thead>
          <tbody>
          @forelse ($teams as $item)
          <tr class="border-b boder-2">
            <td class="whitespace-nowrap px-1 py-4 font-medium">{{ $loop->iteration }}</td>
            <td class="whitespace-nowrap py-4">
            <div class="w-[434px] text-zinc-800 text-sm font-normal font-['Poppins']">{{
                      $item->name }}
            </td>
            <td class="p-2">
            <img class="w-8 shadow" src="{{ asset($item->icon) }}">
          </td>
            <td class="whitespace-nowrap px-6 py-4 flex">
            <button onclick="editModal('{{ $item->id }}')" >
              <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M3 17.4595V20.4995C3 20.7795 3.22 20.9995 3.5 20.9995H6.54C6.67 20.9995 6.8 20.9495 6.89 20.8495L17.81 9.93951L14.06 6.18951L3.15 17.0995C3.05 17.1995 3 17.3195 3 17.4595ZM20.71 7.03951C20.8027 6.947 20.8762 6.83711 20.9264 6.71614C20.9766 6.59517 21.0024 6.46548 21.0024 6.33451C21.0024 6.20355 20.9766 6.07386 20.9264 5.95289C20.8762 5.83192 20.8027 5.72203 20.71 5.62951L18.37 3.28951C18.2775 3.19681 18.1676 3.12326 18.0466 3.07308C17.9257 3.0229 17.796 2.99707 17.665 2.99707C17.534 2.99707 17.4043 3.0229 17.2834 3.07308C17.1624 3.12326 17.0525 3.19681 16.96 3.28951L15.13 5.11951L18.88 8.86951L20.71 7.03951Z" fill="#FF7366" />
              </svg>
            </button>
            {{-- {{ route('dashboard.jenis-tim.delete',$item->id) }} --}}
            {{-- <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded" onclick="editModal('{{ $item->id }}')">Edit</button> --}}
            <form method="post" action="{{ route('dashboard.jenis-tim.delete', $item->id) }}">
              @csrf
              @method('POST')
              <input type="hidden" value="{{ $item->id }}" name="id" hidden>
              <button>
              <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M7 21C6.45 21 5.97933 20.8043 5.588 20.413C5.19667 20.0217 5.00067 19.5507 5 19V6H4V4H9V3H15V4H20V6H19V19C19 19.55 18.8043 20.021 18.413 20.413C18.0217 20.805 17.5507 21.0007 17 21H7ZM9 17H11V8H9V17ZM13 17H15V8H13V17Z" fill="#FF7366" />
              </svg>
              </button>
            </form>
            </td>
          </tr>
          @empty
          @endforelse
          </tbody>
        </table>
        </div>
      </div>
      </div>
      </div>
      @endsection
      @section('modal')
      <!-- modal -->
      <div id="modalKirim" class="hidden fixed inset-0 bg-slate-600 bg-opacity-50 overflow-y-scroll h-screen flex items-center justify-center transition-all z-[1000] ">
      <div class="bg-[#F7F7F7] rounded-lg shadow-xl w-auto  sm:w-[600px] opacity-100 transform transition-all ease-in-out duration-700 p-8 m-4 ">
      <div class="flex justify-end">
        <button id="closeModalBtn">
        <svg class="bg-[#FFE4E1] w-[32px] h-[32px] rounded-full" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
          <path d="M18.3 5.70998C18.2075 5.61728 18.0976 5.54373 17.9766 5.49355C17.8556 5.44337 17.7259 5.41754 17.595 5.41754C17.464 5.41754 17.3343 5.44337 17.2134 5.49355C17.0924 5.54373 16.9825 5.61728 16.89 5.70998L12 10.59L7.10998 5.69998C7.0174 5.6074 6.90749 5.53396 6.78652 5.48385C6.66556 5.43375 6.53591 5.40796 6.40498 5.40796C6.27405 5.40796 6.1444 5.43375 6.02344 5.48385C5.90247 5.53396 5.79256 5.6074 5.69998 5.69998C5.6074 5.79256 5.53396 5.90247 5.48385 6.02344C5.43375 6.1444 5.40796 6.27405 5.40796 6.40498C5.40796 6.53591 5.43375 6.66556 5.48385 6.78652C5.53396 6.90749 5.6074 7.0174 5.69998 7.10998L10.59 12L5.69998 16.89C5.6074 16.9826 5.53396 17.0925 5.48385 17.2134C5.43375 17.3344 5.40796 17.464 5.40796 17.595C5.40796 17.7259 5.43375 17.8556 5.48385 17.9765C5.53396 18.0975 5.6074 18.2074 5.69998 18.3C5.79256 18.3926 5.90247 18.466 6.02344 18.5161C6.1444 18.5662 6.27405 18.592 6.40498 18.592C6.53591 18.592 6.66556 18.5662 6.78652 18.5161C6.90749 18.466 7.0174 18.3926 7.10998 18.3L12 13.41L16.89 18.3C16.9826 18.3926 17.0925 18.466 17.2134 18.5161C17.3344 18.5662 17.464 18.592 17.595 18.592C17.7259 18.592 17.8556 18.5662 17.9765 18.5161C18.0975 18.466 18.2074 18.3926 18.3 18.3C18.3926 18.2074 18.466 18.0975 18.5161 17.9765C18.5662 17.8556 18.592 17.7259 18.592 17.595C18.592 17.464 18.5662 17.3344 18.5161 17.2134C18.466 17.0925 18.3926 16.9826 18.3 16.89L13.41 12L18.3 7.10998C18.68 6.72998 18.68 6.08998 18.3 5.70998Z" fill="#333333" />
        </svg>
        </button>
      </div>
      <div class="text-center mb-7">
        <span class="text-xl sm:text-3xl font-semibold my-6 text-[#333] text-center" id="title">Tambah Jenis Tim</span>
      </div>
      <form action="{{ route('dashboard.jenis-tim.create') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="my-4">
        <span class="text-[#000] mb-2">Nama Tim<span class="text-[#FF1F39]">*</span></span>
        <input name="id" type="hidden" class="w-full rounded-lg bg-[#FFF] py-3 px-2 outline-none placeholder-slate-400 text-slate-[#BDBDBD] text-slate-[16px]" hidden>
        <input name="name" type="text" placeholder="Masukan Nama Tim" class="w-full rounded-lg bg-[#FFF] py-3 px-2 outline-none placeholder-slate-400 text-slate-[#BDBDBD] text-slate-[16px]" value="{{ old('name') }}">
        @error('name')
        <span class="text-red-500">*{{ $message }}</span>
        @enderror
        </div>

        <div class="my-4">
          <div class="nftmax-ptabs__sauthor-img nftmax-ptabs__pthumb" id="icons">
            <label for="icon">
                <img class="rounded w-50" loading="lazy" src="" alt="Foto Profil" id="preview_icon" hidden>
                {{-- <img class="rounded" src="" alt="Foto Profil" id="preview_icon2"> --}}
                <span class="nftmax-wc__form-main">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M16.5147 11.5C17.7284 12.7137 18.9234 13.9087 20.1296 15.115C19.9798 15.2611 19.8187 15.4109 19.6651 15.5683C17.4699 17.7635 15.271 19.9587 13.0758 22.1539C12.9334 22.2962 12.7948 22.4386 12.6524 22.5735C12.6187 22.6034 12.5663 22.6296 12.5213 22.6296C11.3788 22.6334 10.2362 22.6297 9.09365 22.6334C9.01498 22.6334 9 22.6034 9 22.536C9 21.4009 9 20.2621 9.00375 19.1271C9.00375 19.0746 9.02997 19.0109 9.06368 18.9772C10.4123 17.6249 11.7609 16.2763 13.1095 14.9277C14.2295 13.8076 15.3459 12.6913 16.466 11.5712C16.4884 11.5487 16.4997 11.5187 16.5147 11.5Z"
                            fill="white">
                        </path>
                        <path
                            d="M20.9499 14.2904C19.7436 13.0842 18.5449 11.8854 17.3499 10.6904C17.5634 10.4694 17.7844 10.2446 18.0054 10.0199C18.2639 9.76139 18.5261 9.50291 18.7884 9.24443C19.118 8.91852 19.5713 8.91852 19.8972 9.24443C20.7251 10.0611 21.5492 10.8815 22.3771 11.6981C22.6993 12.0165 22.7105 12.4698 22.3996 12.792C21.9238 13.2865 21.4443 13.7772 20.9686 14.2717C20.9648 14.2792 20.9536 14.2867 20.9499 14.2904Z"
                            fill="white">
                        </path>
                    </svg></span></label>
            <input value="{{ old('icon') }}" id="icon" type="file" name="icon">
        </div>
        </div>

        {{-- <div class="my-4">
          <img id="gambarTim" src="" alt="Gambar Tim">
        <span class="text-[#000] mb-2">icon<span class="text-[#FF1F39]">*</span></span>
        <div class="dz-image w-full">
          <img />
        </div>
        <input name="icon" type="file" accept="image" placeholder="Masukkan link atau tautan konten yang kamu baca" class="w-full rounded-lg bg-[#FFF] py-3 px-2 outline-none placeholder-slate-400 text-slate-[#BDBDBD] text-slate-[16px]" value="{{ old('icon') }}" required>
        @error('icon')
        <span class="text-red-500">*{{ $message }}</span>
        @enderror
        </div> --}}
        <button class="w-full px-5 bg-[#FF7366] shadow-xl rounded-full py-3 text-[#fff]">
        Simpan
        </button>
      </form>
      </div>
      @endsection
      @push('javascript')
      <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

     <script>
      // preview image uplaod
      
      document.addEventListener("DOMContentLoaded", function() {

        const bestMomentInput = document.getElementById('icon');
        const bestMomentPreview = document.getElementById('preview_icon');
        bestMomentInput.addEventListener('change', (event) => {
            handleImageUpload(event, 'preview_icon2');
        });

        const modal = document.getElementById("modalKirim");
        const modalKirimKonten = document.getElementById("modalKirimKonten");
        const closeModalBtn = document.getElementById("closeModalBtn");

        modalKirimKonten.addEventListener("click", function() {
          toggleModal(true);
          gambarTim.setAttribute("hidden", "true");
          $('#title').text("Tambah Jenis Tim");
          clear();
        });

        closeModalBtn.addEventListener("click", function() {
          toggleModal(false);
          clear();
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

function clear(){
  $('#modalKirim input[name="id"]').val("");
  $('#modalKirim input[name="name"]').val("");
  $('#modalKirim input[name="icon"]').val("");
}

function editModal(teamId) {
  $('#title').text("Edit Jenis Tim");
  toggleModal(true);
  $.ajax({
    type: "GET",
    url: "{{ route('dashboard.jenis-tim.edit', '') }}/" + teamId,
    dataType: "json",
    success: function(teamData) {
      // console.info(teamData);
      fillForm(teamData);
    },
    error: function(xhr, status, error) {
      console.error('Gagal memuat data tim:', status);
    }
  });
}

function fillForm(teamData) {
  // Mengambil referensi modal
  const modal = document.getElementById("modalKirim");

  // Menghapus kelas 'hidden' dan menambahkan kelas untuk menampilkan modal
  $(modal).removeClass("hidden").addClass("opacity-100 translate-y-0");

  // Mengisi nilai formulir dengan data tim
  
  $('#modalKirim input[name="id"]').val(teamData.id);
  $('#modalKirim input[name="name"]').val(teamData.name);
  // $('#modalKirim input[name="icon"]').val(teamData.icon);
  // console.log("Data tim:", teamData);

  // Mengambil referensi elemen gambar tim
  const gambarTim = document.getElementById("preview_icon");

  // Menetapkan sumber gambar sesuai dengan URL yang diterima dari data tim
  gambarTim.src = teamData.icon;
  gambarTim.removeAttribute("hidden");
  console.log(teamData);

}


</script>

      
      @endpush
