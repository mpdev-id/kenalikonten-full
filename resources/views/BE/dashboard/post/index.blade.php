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
      <div class="overflow-hidden">
        <table class="min-w-[1280px] text-left text-sm font-light">

          <thead class="border-b font-medium bg-emerald-500 bg-red-100 ">
            <tr class="p-2">
              <th scope="col" class="w-[40px] px-1 py-4">No</th>
              <th class="w-[950px] p-2 ">Judul Postingan</th>
              <th class="w-[150px] p-2 ">Status Validasi</th>
              <th class="w-[150px] p-2 flex items-baseline" id="tanggalDonasiHeader">Tanggal Post
                <svg class="flex items-center" width="20" height="20" viewBox="0 0 20 20"
                  fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path
                    d="M13.75 8.75H6.25L10 3.75L13.75 8.75ZM6.25 11.25H13.75L10 16.25L6.25 11.25Z"
                    fill="#333333" />
                </svg>
              </th>
              <th class="w-[20px] p-2 text-center">Action</th>
            </tr>
          </thead>
          <tbody>
            @forelse ($posts as $post)
            <tr class="border-b boder-2 ">
              <td class="whitespace-nowrap p-2 p-2 font-medium">{{ $loop->iteration }}</td>

              <td class="whitespace-nowrap p-2">
                <div class="w-fit text-zinc-800 text-sm font-normal font-['Poppins']">{{$post->title
                  }}
              </td>

              <td class="whitespace-nowrap p-2">
                <div
                  class="w-fit  text-sm font-normal font-['Poppins'] {{$post->status=='fakta'?'text-rose-600':'text-lime-600'}}">
                  {{$post->status}}
              </td>

              <td class="whitespace-nowrap p-2">
                <div class="w-fit text-zinc-800 text-sm font-normal font-['Poppins']">
                  {{$post->created_at->format('d-m-Y') }}
              </td>

              <td class="whitespace-nowrap p-2 flex items-center">
                
                <a id="tambahpost" href="#">
                  <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                      d="M3 17.4595V20.4995C3 20.7795 3.22 20.9995 3.5 20.9995H6.54C6.67 20.9995 6.8 20.9495 6.89 20.8495L17.81 9.93951L14.06 6.18951L3.15 17.0995C3.05 17.1995 3 17.3195 3 17.4595ZM20.71 7.03951C20.8027 6.947 20.8762 6.83711 20.9264 6.71614C20.9766 6.59517 21.0024 6.46548 21.0024 6.33451C21.0024 6.20355 20.9766 6.07386 20.9264 5.95289C20.8762 5.83192 20.8027 5.72203 20.71 5.62951L18.37 3.28951C18.2775 3.19681 18.1676 3.12326 18.0466 3.07308C17.9257 3.0229 17.796 2.99707 17.665 2.99707C17.534 2.99707 17.4043 3.0229 17.2834 3.07308C17.1624 3.12326 17.0525 3.19681 16.96 3.28951L15.13 5.11951L18.88 8.86951L20.71 7.03951Z"
                      fill="#FF7366" />
                  </svg>
                </a>

                  {{-- <form  action="{{ route('dashboard.post.delete', $post->id) }}" method="POST">
                  @csrf
                  @method('DELETE') --}}
                  <button type="submit" onclick="confirmDeletion({{ $post->id }})">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                      xmlns="http://www.w3.org/2000/svg">
                      <path
                        d="M7 21C6.45 21 5.97933 20.8043 5.588 20.413C5.19667 20.0217 5.00067 19.5507 5 19V6H4V4H9V3H15V4H20V6H19V19C19 19.55 18.8043 20.021 18.413 20.413C18.0217 20.805 17.5507 21.0007 17 21H7ZM9 17H11V8H9V17ZM13 17H15V8H13V17Z"
                        fill="#FF7366" />
                    </svg>
                  </button>
                {{-- </form> --}}

                <form  action="{{ route('dashboard.post.status', $post->id) }}" method="POST">
                  @csrf
                  @method('POST')
                  <button type="submit">
                  @if ($post->public_status == 'visible')
                   
                    <svg xmlns="http://www.w3.org/2000/svg" height="16" width="18" viewBox="0 0 576 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2023 Fonticons, Inc.--><path d="M288 32c-80.8 0-145.5 36.8-192.6 80.6C48.6 156 17.3 208 2.5 243.7c-3.3 7.9-3.3 16.7 0 24.6C17.3 304 48.6 356 95.4 399.4C142.5 443.2 207.2 480 288 480s145.5-36.8 192.6-80.6c46.8-43.5 78.1-95.4 93-131.1c3.3-7.9 3.3-16.7 0-24.6c-14.9-35.7-46.2-87.7-93-131.1C433.5 68.8 368.8 32 288 32zM144 256a144 144 0 1 1 288 0 144 144 0 1 1 -288 0zm144-64c0 35.3-28.7 64-64 64c-7.1 0-13.9-1.2-20.3-3.3c-5.5-1.8-11.9 1.6-11.7 7.4c.3 6.9 1.3 13.8 3.2 20.7c13.7 51.2 66.4 81.6 117.6 67.9s81.6-66.4 67.9-117.6c-11.1-41.5-47.8-69.4-88.6-71.1c-5.8-.2-9.2 6.1-7.4 11.7c2.1 6.4 3.3 13.2 3.3 20.3z" fill="#FF7366"/></svg>
                    @else
                    <svg xmlns="http://www.w3.org/2000/svg" height="20" width="20" viewBox="0 0 640 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2023 Fonticons, Inc.--><path d="M38.8 5.1C28.4-3.1 13.3-1.2 5.1 9.2S-1.2 34.7 9.2 42.9l592 464c10.4 8.2 25.5 6.3 33.7-4.1s6.3-25.5-4.1-33.7L525.6 386.7c39.6-40.6 66.4-86.1 79.9-118.4c3.3-7.9 3.3-16.7 0-24.6c-14.9-35.7-46.2-87.7-93-131.1C465.5 68.8 400.8 32 320 32c-68.2 0-125 26.3-169.3 60.8L38.8 5.1zM223.1 149.5C248.6 126.2 282.7 112 320 112c79.5 0 144 64.5 144 144c0 24.9-6.3 48.3-17.4 68.7L408 294.5c8.4-19.3 10.6-41.4 4.8-63.3c-11.1-41.5-47.8-69.4-88.6-71.1c-5.8-.2-9.2 6.1-7.4 11.7c2.1 6.4 3.3 13.2 3.3 20.3c0 10.2-2.4 19.8-6.6 28.3l-90.3-70.8zM373 389.9c-16.4 6.5-34.3 10.1-53 10.1c-79.5 0-144-64.5-144-144c0-6.9 .5-13.6 1.4-20.2L83.1 161.5C60.3 191.2 44 220.8 34.5 243.7c-3.3 7.9-3.3 16.7 0 24.6c14.9 35.7 46.2 87.7 93 131.1C174.5 443.2 239.2 480 320 480c47.8 0 89.9-12.9 126.2-32.5L373 389.9z" fill="#FF7366" /></svg>
                    @endif

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


  @push('javascript')
  <script>
    document.addEventListener("DOMContentLoaded", function() {
      const header = document.getElementById('tanggalDonasiHeader');
      
      header.addEventListener('click', function() {
          const svg = header.querySelector('svg');
          
          // Check if the current URL already contains the sort query parameter
          const urlParams = new URLSearchParams(window.location.search);
          const sortOrder = urlParams.get('sort');

          // Toggle ascending and descending based on the current sort order
          let newSortOrder = 'asc'; // default value
          if (sortOrder === 'asc') {
              newSortOrder = 'desc';
          }

          // Update the URL with the new sort order
          if (urlParams.has('sort')) {
              urlParams.set('sort', newSortOrder);
          } else {
              urlParams.append('sort', newSortOrder);
          }

          const newUrl = `${window.location.pathname}?${urlParams.toString()}`;
          window.location.href = newUrl;
      });
  });
 // Your JavaScript function
function confirmDeletion(postId) {
    const userInput = prompt('anda akan menghapus postingan secara permanen,\nketikan HAPUS KONTEN untuk melanjutkan');

    // Check if the user input matches "HAPUS KONTEN"
    if (userInput === 'HAPUS KONTEN') {
        // Construct the delete URL using the post ID
        const deleteUrl = `/dashboard/konten-post/delete/${postId}`;
        
        // Create a form dynamically for submission
        const form = document.createElement('form');
        form.method = 'POST'; // We're POSTing because Laravel will handle the DELETE via _method override
        form.action = deleteUrl;

        // Add CSRF token
        const csrfTokenInput = document.createElement('input');
        csrfTokenInput.type = 'hidden';
        csrfTokenInput.name = '_token';
        csrfTokenInput.value = '{{ csrf_token() }}';

        // Add method override for DELETE request
        const methodInput = document.createElement('input');
        methodInput.type = 'hidden';
        methodInput.name = '_method';
        methodInput.value = 'DELETE';

        // Append inputs to the form
        form.appendChild(csrfTokenInput);
        form.appendChild(methodInput);

        // Append form to the body and submit
        document.body.appendChild(form);
        form.submit();
    } else {
        // If not matched, alert the user
        alert('Input tidak valid. Operasi dibatalkan.');
    }
}


  </script>
  
  @endpush