@extends('template.content')
@section('title','Konten')
@section('content')
@if($errors->any())
<div class="text-red-500 flex flex-row">
 *Terdapat kesalahan dalam pengisian form. Mohon periksa kembali.
 {{ $errors }}
</div>
@endif
<div class="flex flex-col">
 <div class=" sm:-mx-6 lg:-mx-8">
  <div class="inline-block min-w-full py-2 sm:px-6 lg:px-8">
    <div class="w-[1280px] h-full">
      <form method="post" action="{{ route('dashboard.konten-masuk.sendReply') }}"  enctype="multipart/form-data">
        @csrf
        @method('POST')
        <div class="my-4">
            <input name="id" type="hidden" value="{{ $data->id??'' }}"
              class="w-full rounded-lg bg-[#FFF] py-3 px-2 outline-none placeholder-slate-400 text-slate-[#BDBDBD] text-slate-[16px]"
              hidden>
            <input name="slug" type="hidden" value="{{ $data->slug??'' }}"
              class="w-full rounded-lg bg-[#FFF] py-3 px-2 outline-none placeholder-slate-400 text-slate-[#BDBDBD] text-slate-[16px]"
              hidden>
            <span class="text-[#000] mb-2">Judul Konten<span class="text-[#FF1F39]">*</span></span>
            <input name="title" type="text" placeholder="Masukan Judul Konten"
              class="w-full rounded-lg bg-[#FFF] py-3 px-2 outline-none placeholder-slate-400 text-slate-[#BDBDBD] text-slate-[16px]"
              value="{{ $data->title??old('title') }}">
            @error('title')
            <span class="text-red-500">*{{ $message }}</span>
            @enderror
          </div>
            <div class="my-4">
              <span class="text-[#000] mb-2">Foto utama Konten<span class="text-[#FF1F39]">*</span></span>
              {{-- @if($data->foto) --}}
              <img class="rounded max-w-[40%]" loading="lazy" src="{{ $data->foto??'' }}" alt="foto" id="preview_foto" {{ $data->foto??'hidden' }}>
              {{-- @endif --}}
              <div class="nftmax-ptabs__sauthor-img nftmax-ptabs__pthumb" id="fotos">
              <label for="foto">
                <img class="rounded max-w-[40%]" loading="lazy" src="" alt="foto" id="preview_foto" hidden>
                <span class="nftmax-wc__form-main">
                </span></label>
                {{ $data->foto??old('foto') }}
              <input value="{{ $data->foto??old('foto') }}" id="foto" type="file" name="foto">
              </div>
          </div>
        <div class="my-4">
            <label for="content" class="text-[#000] mb-2">Konten<span class="text-[#FF1F39]">*</span></label>
            <textarea class="shadow-sm shadow" type="text" name="content" data-target-tinymce> {{ $data->content??old('content') }}
            </textarea>
            @error('content')
            <span class="text-red-500">*{{ $message }}</span>
            @enderror
        </div>
        <div class="my-4">
          <label for="status" class="text-[#000] mb-2">Status Konten<span class="text-[#FF1F39]">*</span></label>
          <select name="status" id="status" class="w-full rounded-lg bg-white py-3 px-2 outline-none placeholder-slate-400 text-slate-[#BDBDBD] text-base" required>
              <option value="{{$data->status??''}}" {{ isset($data) && $data->status ?? 'selected' }}>{{ isset($data) && $data->status ? ucfirst($data->status) : 'Status Konten' }}</option>
              <option value="hoax" {{ isset($data) && $data->status == 'hoax' ? 'hidden' : '' }}>Hoax</option>
              <option value="fakta" {{ isset($data) && $data->status == 'fakta' ? 'hidden' : '' }}>Fakta</option>
          </select>
          @error('status')
          <span class="text-red-500">*{{ $message }}</span>
          @enderror
      </div>
      <div class="mt-5 flex justify-end">
        <button type="submit">
          <span class="text-white text-base font-semibold whitespace-nowrap  shadow-lg bg-red-400 mt-7 px-16 py-3 rounded-[50px] max-md:max-w-full max-md:px-5 text-center">
            Simpan 
          </span>
          </a>
        </button>
      </div>
    </form>
   </div>
  </div>
 </div>
</div>
@endsection
@push('javascript')
<script src="https://cdn.tiny.cloud/1/hi8bmxfm0rlxa2v6t9sjpewk9qk35661abursna2c3scoqyx/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
<script>
"use strict";
tinymce.init({
    selector: '[data-target-tinymce]',
    plugins: 'print preview   searchreplace autolink autosave save directionality visualblocks visualchars fullscreen image link media template codesample table charmap hr pagebreak nonbreaking anchor toc insertdatetime advlist lists wordcount',
    branding: false,
    menubar: 'file edit view insert format tools table tc help',
    toolbar: 'undo redo | bold italic underline strikethrough | fontselect fontsizeselect formatselect | alignleft aligncenter alignright alignjustify | outdent indent |  numlist bullist checklist | forecolor backcolor casechange permanentpen formatpainter removeformat | pagebreak | charmap emoticons | fullscreen  preview  print | insertfile image media pageembed template link anchor codesample | a11ycheck ltr rtl | showcomments addcomment',
});
</script>
<script>
  window.onload = function() {
      // Jika pengguna berhasil menambahkan konten
      @if(session('success'))
          window.close();
      @endif
  };
</script>
@endpush