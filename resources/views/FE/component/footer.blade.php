 <!-- footer -->
 <footer class="mt-[188px] bg-[#39BFBF] flex flex-wrap transition-all ease-in-out duration-700">
    <div class="w-auto sm:w-[1280px] m-auto">
      <div
        class="w-auto lg:w-[936px] flex flex-col xl:flex-row justify-between mx-auto py-[60px] px-4 sm:px-8 xl:gap-y-0 gap-y-4">
       
        <div class="w-auto md:w-[400px]">
          <img class="sm:w-[167px] h-[90px] mb-2" src="{{ asset('FE') }}/dist/images/logo-main.png"
            alt="Logo kenalikonten" srcset="{{ asset('FE') }}/dist/images/logo-main.png">
          <p class="sm:pt-2 text-[#333] font-[16px]">Kenali Konten adalah sebuah gerakan
            independen dan tidak terafiliasi kandidat atau partai politik tertentu</p>
          <p class="py-3 sm:pt-2 text-[#fff]">© 2023 Kenali Konten</p>
        </div>
        
        <div class="w-[200px]">
          <ul>
            <h2 class="font-bold text-[18px] xl:pb-3">Eksplor</h2>
            <li class="pb-1 xl:pb-3">
              <a class="font-normal" href="{{route('team')}}">Tim Kami</a>
            </li>
            <li class="pb-1 xl:pb-3 transition-all ease-in-out duration-700">
              <a class="font-normal" href="#">TurunTangan Serang</a>
            </li>
          </ul>
        </div>

        <div class="w-[200px]">
          <ul>
            <li>
              <h2 class="font-bold text-[18px] xl:pb-3 transition-all ease-in-out duration-700">Media
                & Kontak</h2>
            </li>
            <li class=" pb-1 xl:pb-3 transition-all ease-in-out duration-500">
              <a class="font-normal" href="#">kenalikonten@gmail.com</a>
            </li>
            <li class=" pb-1 xl:pb-3 transition-all ease-in-out duration-600">
              <a class="font-normal" href="#">Instagram</a>
            </li>
            <li class=" pb-1 xl:pb-3 transition-all ease-in-out duration-700">
              <a class="font-normal" href="#">Twitter</a>
            </li>
            <li class=" pb-1 xl:pb-3 transition-all ease-in-out duration-800">
              <a class="font-normal" href="#">Tiktok</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </footer>