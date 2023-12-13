<nav class="shadow sticky top-0 bg-[#F7F7F7] z-10">
    <div class="max-w-7xl mx-auto">
      <div class="flex justify-between items-center h-20 px-4 sm:px-8 md:px-16 lg:px-20 xl:px-32">
        <!-- logo -->
        <a href="{{ route('index.home') }}" rel="noopener noreferrer">
          <img class="w-20" loading="lazy" src="{{ asset('FE') }}/dist/images/logo-main.png" alt="My Happy SVG" />
        </a>
        <!-- Mobile menu button and menu for small screens -->
        <div class="xl:hidden">
          <button id="mobile-menu-button" class="transition duration-500 ease-in-out">
            <!-- Example menu icon -->
            <svg id="menu-icon" fill="none" stroke="currentColor" stroke-linecap="round"
              stroke-linejoin="round" stroke-width="0" viewBox="0 0 24 24"
              class="w-6 h-6 transition duration-500 ease-in-out">
              <path
                d="M5 22.5H25C25.6875 22.5 26.25 21.9375 26.25 21.25C26.25 20.5625 25.6875 20 25 20H5C4.3125 20 3.75 20.5625 3.75 21.25C3.75 21.9375 4.3125 22.5 5 22.5ZM5 16.25H25C25.6875 16.25 26.25 15.6875 26.25 15C26.25 14.3125 25.6875 13.75 25 13.75H5C4.3125 13.75 3.75 14.3125 3.75 15C3.75 15.6875 4.3125 16.25 5 16.25ZM3.75 8.75C3.75 9.4375 4.3125 10 5 10H25C25.6875 10 26.25 9.4375 26.25 8.75C26.25 8.0625 25.6875 7.5 25 7.5H5C4.3125 7.5 3.75 8.0625 3.75 8.75Z"
                fill="#333333" />
            </svg>
          </button>
          <!-- Menu  Mobile menu (hidden by default) -->
          <div id="mobile-menu"
            class="hidden absolute top-20 left-0 right-0 bg-[#F7F7F7] py-4 shadow-2xl rounded-b-3xl ">
            <ul
              class="flex flex-col px-6 gap-y-8 sm:px-8 md:px-16 lg:px-20 xl:px-32 transition-all ease-in-out delay-800">
              <li
                class="hover:cursor-pointer font-medium text-base mt-8 transition-all ease-in-out delay-300 {{ request()->is('/') ? ' text-[#FF7366] ' : 'text-[#333]' }}">
               <a href="{{ route('index.home') }}"> Beranda</a> 
              </li>
              <li
                class="hover:cursor-pointer {{ request()->is('validasi') ? ' text-[#FF7366] ' : 'text-[#333]' }} hover:text-[#FF7366]  font-medium text-base transition-all ease-in-out delay-300">
                <a href="{{ route('index.valid') }}">  Konten Tervalidasi</a>
              </li>
              <li
                class="hover:cursor-pointer {{ request()->is('donatur') ? ' text-[#FF7366] ' : 'text-[#333]' }} hover:text-[#FF7366]  font-medium text-base transition-all ease-in-out delay-300">
                <a href="{{ route('index.donatur') }}"> Donatur</a>
              </li>
              <li class="hover:cursor-pointer text-base">
                <div class="bg-[#FF7366] text-white px-5 py-3 rounded-full shadow-xl w-fit font-semibold ">
                  Donasi
                </div>
              </li>
            </ul>
          </div>
        </div>
        <!-- Menu for medium and larger screens -->
        <ul class="hidden xl:flex flex-row gap-x-8 items-center">
          <li
            class="hover:cursor-pointer font-medium text-base transition-all ease-in-out duration-400 {{ request()->is('/') ? ' text-[#FF7366] underline underline-offset-[33px] decoration-[3px]' : 'text-[#333]' }}">
            <a href="{{ route('index.home') }}"> Beranda </a>
          </li>
          <li
            class="hover:cursor-pointer hover:underline hover:underline-offset-[33px] hover:decoration-[3px] text-[#333] hover:text-[#FF7366] font-medium text-base transition-all ease-in-out duration-400 {{ request()->is(['validasi','validasi/*']) ? ' text-[#FF7366] underline underline-offset-[33px] decoration-[3px] ' : 'text-[#333]' }}">
            <a href="{{ route('index.valid') }}">Konten Tervalidasi</a>
          </li>
          <li
            class="hover:cursor-pointer hover:underline hover:underline-offset-[33px] hover:decoration-[3px] text-[#333] hover:text-[#FF7366] font-medium text-base transition-all ease-in-out duration-400 {{ request()->is('donatur') ? ' text-[#FF7366] underline underline-offset-[33px] decoration-[3px] ' : 'text-[#333]' }}">
            <a href="{{ route('index.donatur') }}">Donatur</a>
          </li>
          <div
            class="hover:cursor-pointer text-base transition-all ease-in-out duration-400">
            <div class="bg-[#FF7366] text-white px-5 py-3 rounded-full shadow-xl font-semibold ">
              Donasi
            </div>
          </div>
        </ul>
      </div>
    </div>
    <script>
      // Toggle menu mobile dan ubah ikon menu
      const mobileMenuButton = document.getElementById('mobile-menu-button');
      const mobileMenu = document.getElementById('mobile-menu');
      const menuIcon = document.getElementById('menu-icon');
      const blurBackground = document.getElementById('blur-background');
      mobileMenuButton.addEventListener('click', () => {
        mobileMenu.classList.toggle('hidden');
        blurBackground.classList.toggle('hidden');
        // Ubah ikon menjadi "X" atau kembali ke ikon menu
        if (mobileMenu.classList.contains('hidden')) {
          menuIcon.innerHTML = '<path d="M5 22.5H25C25.6875 22.5 26.25 21.9375 26.25 21.25C26.25 20.5625 25.6875 20 25 20H5C4.3125 20 3.75 20.5625 3.75 21.25C3.75 21.9375 4.3125 22.5 5 22.5ZM5 16.25H25C25.6875 16.25 26.25 15.6875 26.25 15C26.25 14.3125 25.6875 13.75 25 13.75H5C4.3125 13.75 3.75 14.3125 3.75 15C3.75 15.6875 4.3125 16.25 5 16.25ZM3.75 8.75C3.75 9.4375 4.3125 10 5 10H25C25.6875 10 26.25 9.4375 26.25 8.75C26.25 8.0625 25.6875 7.5 25 7.5H5C4.3125 7.5 3.75 8.0625 3.75 8.75Z" fill="#333333" class="transition duration-500 ease-in-out"/>'; // Ganti dengan path ikon menu
        } else {
          menuIcon.innerHTML = '<path d="M22.8748 7.1375C22.7591 7.02162 22.6218 6.92968 22.4706 6.86696C22.3194 6.80423 22.1572 6.77194 21.9935 6.77194C21.8298 6.77194 21.6677 6.80423 21.5165 6.86696C21.3653 6.92968 21.2279 7.02162 21.1123 7.1375L14.9998 13.2375L8.88729 7.125C8.77156 7.00927 8.63418 6.91747 8.48297 6.85484C8.33177 6.79221 8.1697 6.75997 8.00604 6.75997C7.84238 6.75997 7.68032 6.79221 7.52911 6.85484C7.37791 6.91747 7.24052 7.00927 7.12479 7.125C7.00906 7.24072 6.91726 7.37811 6.85463 7.52932C6.792 7.68052 6.75977 7.84258 6.75977 8.00625C6.75977 8.16991 6.792 8.33197 6.85463 8.48318C6.91726 8.63438 7.00906 8.77177 7.12479 8.8875L13.2373 15L7.12479 21.1125C7.00906 21.2282 6.91726 21.3656 6.85463 21.5168C6.792 21.668 6.75977 21.8301 6.75977 21.9937C6.75977 22.1574 6.792 22.3195 6.85463 22.4707C6.91726 22.6219 7.00906 22.7593 7.12479 22.875C7.24052 22.9907 7.37791 23.0825 7.52911 23.1452C7.68032 23.2078 7.84238 23.24 8.00604 23.24C8.1697 23.24 8.33177 23.2078 8.48297 23.1452C8.63418 23.0825 8.77156 22.9907 8.88729 22.875L14.9998 16.7625L21.1123 22.875C21.228 22.9907 21.3654 23.0825 21.5166 23.1452C21.6678 23.2078 21.8299 23.24 21.9935 23.24C22.1572 23.24 22.3193 23.2078 22.4705 23.1452C22.6217 23.0825 22.7591 22.9907 22.8748 22.875C22.9905 22.7593 23.0823 22.6219 23.1449 22.4707C23.2076 22.3195 23.2398 22.1574 23.2398 21.9937C23.2398 21.8301 23.2076 21.668 23.1449 21.5168C23.0823 21.3656 22.9905 21.2282 22.8748 21.1125L16.7623 15L22.8748 8.8875C23.3498 8.4125 23.3498 7.6125 22.8748 7.1375Z" fill="#333333" class="transition duration-500 ease-in-out"/>';
        }
      });
    </script>
    <script>
      // Tambahkan script untuk menghilangkan preloader setelah halaman selesai dimuat
      document.addEventListener("DOMContentLoaded", function () {
        // Hilangkan preloader
        document.getElementById("preloader").style.display = "none";
        // Tampilkan konten setelah halaman dimuat
        document.getElementById("content").style.display = "block";
      });
    </script>

     @if(request()->is('content/*'))
       <!-- kembali -->
       <div class="max-w-full h-12 px-4 sm:px-8 md:px-16 lg:px-20 xl:px-32 bg-zinc-100  text-red-400 flex items-center">
        <div class="flex w-[1024px] items-center mx-auto ">
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

  </nav>