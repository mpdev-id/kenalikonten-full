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
    <div class="w-[1280px] h-100vh overflow-auto">
   
        <div class="my-4">
            <input name="id" type="hidden"
              class="w-full rounded-lg bg-[#FFF] py-3 px-2 outline-none placeholder-slate-400 text-slate-[#BDBDBD] text-slate-[16px]"
              hidden>
            <span class="text-[#000] mb-2">Judul Konten<span class="text-[#FF1F39]">*</span></span>
            <input name="title" type="text" placeholder="Masukan Judul Konten"
              class="w-full rounded-lg bg-[#FFF] py-3 px-2 outline-none placeholder-slate-400 text-slate-[#BDBDBD] text-slate-[16px]"
              value="{{ old('title') }}">
            @error('title')
            <span class="text-red-500">*{{ $message }}</span>
            @enderror
          </div>

          
          <div class="my-4">
            <span class="text-[#000] mb-2">Foto utama Konten<span class="text-[#FF1F39]">*</span></span>
            <div class="nftmax-ptabs__sauthor-img nftmax-ptabs__pthumb" id="fotos">
             <label for="foto">
              <img class="rounded max-w-[40%]" loading="lazy" src="" alt="foto" id="preview_foto" hidden>
              <span class="nftmax-wc__form-main">
              </span></label>
             <input value="{{ old('foto') }}" id="foto" type="file" name="foto">
            </div>
        </div>

        <div class="my-4">
            <label for="content" class="text-[#000] mb-2">Konten<span class="text-[#FF1F39]">*</span></label>
            <textarea class="shadow-sm shadow" type="text" name="content" data-target-tinymce>
            </textarea>
            @error('content')
            <span class="text-red-500">*{{ $message }}</span>
            @enderror
        </div>
        
        <div class="my-4">
          <label for="status" class="text-[#000] mb-2">Status Konten<span class="text-[#FF1F39]">*</span></label>
          <select name="status" id="status" class="w-full rounded-lg bg-white py-3 px-2 outline-none placeholder-slate-400 text-slate-[#BDBDBD] text-base" required>
              <option value="" disabled selected>Status Konten</option> 
              <option value="hoax">Hoax</option> <!-- Placeholder tidak memerlukan value -->
              <option value="fakta">Fakta</option> <!-- Placeholder tidak memerlukan value -->
          </select>
          @error('status')
          <span class="text-red-500">*{{ $message }}</span>
          @enderror
      </div>
   </div>
  </div>
 </div>
</div>
@endsection


@push('javascript')
<script src="https://cdn.tiny.cloud/1/wm933glxqpu4y39cp0hcfxwb0gpa7cc5kak0qiqk0hzvae45/tinymce/6/tinymce.min.js" referrerpolicy="origin">
</script>

<script>
    
"use strict";
tinymce.init({
    selector: '[data-target-tinymce]',
    plugins: 'print preview   searchreplace autolink autosave save directionality visualblocks visualchars fullscreen image link media template codesample table charmap hr pagebreak nonbreaking anchor toc insertdatetime advlist lists wordcount',
    branding: false,
    menubar: 'file edit view insert format tools table tc help',
    toolbar: 'undo redo | bold italic underline strikethrough | fontselect fontsizeselect formatselect | alignleft aligncenter alignright alignjustify | outdent indent |  numlist bullist checklist | forecolor backcolor casechange permanentpen formatpainter removeformat | pagebreak | charmap emoticons | fullscreen  preview save print | insertfile image media pageembed template link anchor codesample | a11ycheck ltr rtl | showcomments addcomment',
});

</script>


@endpush