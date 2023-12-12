@extends('template.frontend')
@section('title','kenalikonten.com')
@section('content')
<section
  class="flex flex-wrap justify-between items-center gap-[20px] mt-8 max-w-5xl mx-auto transition-all ease-in-out duration-700">
  <div class="text-center flex flex-col gap-y-3 w-full">
    <h2 class="text-4xl font-semibold">Tim Kenali Konten</h2>
    <p class="text-base font-normal md:w-[661px] mx-auto">
      Para relawan yang bergerak bersama untuk edukasi ke masyarakat agar sadar
      dan peduli membedakan konten hoaks dan fakta.
    </p>

  </div>
  <div class="tab fakta  sm:px-8 w-full bg-white shadow-xl relative mb-1 rounded-xl ">
    <input type="radio" name="faq" id="fakta" class="appearance-none peer">
    <label for="fakta"
      class="flex items-center gap-x-3 cursor-pointer font-semibold text-lg after:content-[url(/dist/images/down.png)] after:items-center  after:absolute after:right-8 after:text-4xl  after:text-gray-400 hover:after:text-gray-950 peer-checked:after:transform peer-checked:after:rotate-180 ">
      <svg width="40" height="40" viewBox="0 0 40 40" fill="none"
        xmlns="http://www.w3.org/2000/svg">
        <rect width="40" height="40" rx="8" fill="#FFE4E1" />
        <path
          d="M24.375 20C27.5 20 30 22.5 30 25.625C30 26.725 29.6875 27.7625 29.1375 28.625L32.9875 32.5L31.25 34.2375L27.35 30.4C26.4875 30.9375 25.4625 31.25 24.375 31.25C21.25 31.25 18.75 28.75 18.75 25.625C18.75 22.5 21.25 20 24.375 20ZM24.375 22.5C23.5462 22.5 22.7513 22.8292 22.1653 23.4153C21.5792 24.0013 21.25 24.7962 21.25 25.625C21.25 26.4538 21.5792 27.2487 22.1653 27.8347C22.7513 28.4208 23.5462 28.75 24.375 28.75C25.2038 28.75 25.9987 28.4208 26.5847 27.8347C27.1708 27.2487 27.5 26.4538 27.5 25.625C27.5 24.7962 27.1708 24.0013 26.5847 23.4153C25.9987 22.8292 25.2038 22.5 24.375 22.5ZM12.5 32.5C11.837 32.5 11.2011 32.2366 10.7322 31.7678C10.2634 31.2989 10 30.663 10 30V10C10 9.33696 10.2634 8.70107 10.7322 8.23223C11.2011 7.76339 11.837 7.5 12.5 7.5H13.75V16.25L16.875 14.375L20 16.25V7.5H27.5C28.163 7.5 28.7989 7.76339 29.2678 8.23223C29.7366 8.70107 30 9.33696 30 10V19.7625C28.4886 18.3086 26.4722 17.4975 24.375 17.5C22.2201 17.5 20.1535 18.356 18.6298 19.8798C17.106 21.4035 16.25 23.4701 16.25 25.625C16.25 28.5125 17.7625 31.0625 20.0375 32.5H12.5Z"
          fill="#FF7366" />
      </svg>
      <h3>Tim Pencari Fakta</h3>
    </label>
    <div
      class="answer content mt-5 h-0 transition ease-in-out delay-600 overflow-hidden peer-checked:h-full ">
      <div class="grid grid-cols-2 w-[504px] gap-2 m-auto pb-5 ">
        <div
          class=" w-[246px] h-[263px] flex flex-col justify-center items-center text-center shadow-xl rounded-lg border-[#EFEFEF] border-2 ">
          <img src="/dist/images/img-collabs.png" alt="" class="rounded-full w-[117px] mb-4">
          <h3 class="font-semibold">Andi Hidayat</h3>
          <p class="px-3">Berjuang agar lebih baik di masa depan yang akan datang</p>
        </div>
      </div>
    </div>
  </div>
  <div class="tab sosmed  sm:px-8 w-full bg-white shadow-xl relative mb-1 rounded-xl ">
    <input type="radio" name="faq" id="kontenSosmed" class="appearance-none peer">
    <label for="kontenSosmed"
      class="flex items-center gap-x-3 cursor-pointer font-semibold text-lg after:content-[url(/dist/images/down.png)] after:items-center  after:absolute after:right-8 after:text-4xl  after:text-gray-400 hover:after:text-gray-950 peer-checked:after:transform peer-checked:after:rotate-180 ">
      <svg width="40" height="40" viewBox="0 0 40 40" fill="none"
        xmlns="http://www.w3.org/2000/svg">
        <rect width="40" height="40" rx="8" fill="#FFE4E1" />
        <path
          d="M12.3333 8C11.1841 8 10.0819 8.45655 9.2692 9.2692C8.45655 10.0819 8 11.1841 8 12.3333V27.6667C8 28.8159 8.45655 29.9181 9.2692 30.7308C10.0819 31.5435 11.1841 32 12.3333 32H27.6667C28.8159 32 29.9181 31.5435 30.7308 30.7308C31.5435 29.9181 32 28.8159 32 27.6667V12.3333C32 11.1841 31.5435 10.0819 30.7308 9.2692C29.9181 8.45655 28.8159 8 27.6667 8H12.3333ZM12 15C12 13.712 13.0453 12.6667 14.3333 12.6667H25.6667C26.9547 12.6667 28 13.712 28 15V17C28 17.6188 27.7542 18.2123 27.3166 18.6499C26.879 19.0875 26.2855 19.3333 25.6667 19.3333H14.3333C13.7145 19.3333 13.121 19.0875 12.6834 18.6499C12.2458 18.2123 12 17.6188 12 17V15ZM14.3333 14.6667C14.2449 14.6667 14.1601 14.7018 14.0976 14.7643C14.0351 14.8268 14 14.9116 14 15V17C14 17.184 14.1493 17.3333 14.3333 17.3333H25.6667C25.7551 17.3333 25.8399 17.2982 25.9024 17.2357C25.9649 17.1732 26 17.0884 26 17V15C26 14.9116 25.9649 14.8268 25.9024 14.7643C25.8399 14.7018 25.7551 14.6667 25.6667 14.6667H14.3333ZM13 21.3333H19C19.2652 21.3333 19.5196 21.4387 19.7071 21.6262C19.8946 21.8138 20 22.0681 20 22.3333C20 22.5985 19.8946 22.8529 19.7071 23.0404C19.5196 23.228 19.2652 23.3333 19 23.3333H13C12.7348 23.3333 12.4804 23.228 12.2929 23.0404C12.1054 22.8529 12 22.5985 12 22.3333C12 22.0681 12.1054 21.8138 12.2929 21.6262C12.4804 21.4387 12.7348 21.3333 13 21.3333ZM12 26.3333C12 26.0681 12.1054 25.8138 12.2929 25.6262C12.4804 25.4387 12.7348 25.3333 13 25.3333H19C19.2652 25.3333 19.5196 25.4387 19.7071 25.6262C19.8946 25.8138 20 26.0681 20 26.3333C20 26.5986 19.8946 26.8529 19.7071 27.0404C19.5196 27.228 19.2652 27.3333 19 27.3333H13C12.7348 27.3333 12.4804 27.228 12.2929 27.0404C12.1054 26.8529 12 26.5986 12 26.3333ZM24.3333 21.3333H25.6667C26.9547 21.3333 28 22.3787 28 23.6667V25C28 25.6188 27.7542 26.2123 27.3166 26.6499C26.879 27.0875 26.2855 27.3333 25.6667 27.3333H24.3333C23.7145 27.3333 23.121 27.0875 22.6834 26.6499C22.2458 26.2123 22 25.6188 22 25V23.6667C22 22.3787 23.0453 21.3333 24.3333 21.3333ZM24 23.6667C24 23.5783 24.0351 23.4935 24.0976 23.431C24.1601 23.3685 24.2449 23.3333 24.3333 23.3333H25.6667C25.7551 23.3333 25.8399 23.3685 25.9024 23.431C25.9649 23.4935 26 23.5783 26 23.6667V25C26 25.0884 25.9649 25.1732 25.9024 25.2357C25.8399 25.2982 25.7551 25.3333 25.6667 25.3333H24.3333C24.2449 25.3333 24.1601 25.2982 24.0976 25.2357C24.0351 25.1732 24 25.0884 24 25V23.6667Z"
          fill="#FF7366" />
      </svg>
      <h3>Tim Konten Media Sosial</h3>
    </label>
    <div
      class="answer content mt-5 h-0 transition ease-in-out delay-600 overflow-hidden peer-checked:h-full">
      <div class="grid grid-cols-2 w-[504px] gap-2 m-auto pb-5">
        <div
          class=" w-[246px] h-[263px] flex flex-col justify-center items-center text-center shadow-xl rounded-lg border-[#EFEFEF] border-2 ">
          <img src="/dist/images/img-collabs.png" alt="" class="rounded-full w-[117px] mb-4">
          <h3 class="font-semibold">Andi Hidayat</h3>
          <p class="px-3">Berjuang agar lebih baik di masa depan yang akan datang</p>
        </div>
      </div>
    </div>
  </div>
  <div class="tab copyWriter  sm:px-8 w-full bg-white shadow-xl relative mb-1 rounded-xl ">
    <input type="radio" name="faq" id="copyWriter" class="appearance-none peer">
    <label for="copyWriter"
      class="flex items-center gap-x-3 cursor-pointer font-semibold text-lg after:content-[url(/dist/images/down.png)] after:items-center  after:absolute after:right-8 after:text-4xl  after:text-gray-400 hover:after:text-gray-950 peer-checked:after:transform peer-checked:after:rotate-180 ">
      <svg width="40" height="40" viewBox="0 0 40 40" fill="none"
        xmlns="http://www.w3.org/2000/svg">
        <rect width="40" height="40" rx="8" fill="#FFE4E1" />
        <path
          d="M10.1533 29.3332C9.54 29.3332 9.028 29.1278 8.61733 28.7172C8.20578 28.3056 8 27.7932 8 27.1798V12.8198C8 12.2065 8.20578 11.6945 8.61733 11.2838C9.028 10.8723 9.54 10.6665 10.1533 10.6665H29.8467C30.46 10.6665 30.972 10.8723 31.3827 11.2838C31.7942 11.6945 32 12.2065 32 12.8198V27.1798C32 27.7932 31.7947 28.3052 31.384 28.7158C30.9724 29.1274 30.46 29.3332 29.8467 29.3332H10.1533ZM11.6413 25.1798H28.3587V23.8465H11.6413V25.1798ZM11.6413 20.6665H28.3587V19.3332H11.6413V20.6665ZM11.6413 16.1532H23.3333V14.8198H11.64L11.6413 16.1532Z"
          fill="#FF7366" />
      </svg>
      <h3>Tim Copy Writer</h3>
    </label>
    <div
      class="answer content mt-5 h-0 transition ease-in-out delay-600 overflow-hidden peer-checked:h-full">
      <div class="grid grid-cols-2 w-[504px] gap-2 m-auto pb-6">
        <div
          class=" w-[246px] h-[263px] p-4 flex flex-col justify-center items-center shadow-xl rounded-lg border-[#EFEFEF] border-2 ">
        </div>
      </div>
    </div>
  </div>
  <div class="tab publicRelation  sm:px-8 w-full bg-white shadow-xl relative mb-1 rounded-xl ">
    <input type="radio" name="faq" id="publicRelation" class="appearance-none peer">
    <label for="publicRelation"
      class="flex items-center gap-x-3 cursor-pointer font-semibold text-lg after:content-[url(/dist/images/down.png)] after:items-center  after:absolute after:right-8 after:text-4xl  after:text-gray-400 hover:after:text-gray-950 peer-checked:after:transform peer-checked:after:rotate-180 ">
      <svg width="40" height="40" viewBox="0 0 40 40" fill="none"
        xmlns="http://www.w3.org/2000/svg">
        <rect width="40" height="40" rx="8" fill="#FFE4E1" />
        <path
          d="M16.3335 20.0002C19.2748 20.0002 21.6668 17.6082 21.6668 14.6668C21.6668 11.7255 19.2748 9.3335 16.3335 9.3335C13.3922 9.3335 11.0002 11.7255 11.0002 14.6668C11.0002 17.6082 13.3922 20.0002 16.3335 20.0002ZM18.3335 21.3335H14.3335C9.9215 21.3335 6.3335 24.9215 6.3335 29.3335V30.6668H26.3335V29.3335C26.3335 24.9215 22.7455 21.3335 18.3335 21.3335Z"
          fill="#FF7366" />
        <path
          d="M25.8054 18.7308C26.6175 17.3469 26.9682 15.7405 26.8068 14.1441C26.5681 11.7655 25.2401 9.66279 23.0694 8.22412L21.5961 10.4455C23.0881 11.4348 23.9961 12.8441 24.1534 14.4108C24.226 15.1389 24.1353 15.8741 23.8881 16.5628C23.6408 17.2515 23.2432 17.8764 22.7241 18.3921L21.1348 19.9815L23.2921 20.6148C28.9348 22.2681 29.0001 27.9428 29.0001 28.0001H31.6668C31.6668 25.6148 30.3921 20.9535 25.8054 18.7308Z"
          fill="#FF7366" />
      </svg>
      <h3>Tim Public Relation</h3>
    </label>
    <div
      class="answer content mt-5 h-0 transition ease-in-out delay-600 overflow-hidden peer-checked:h-full">
      <div class="grid grid-cols-2 w-[504px] gap-2 m-auto pb-6">
        <div
          class=" w-[246px] h-[263px] p-4 flex flex-col justify-center items-center shadow-xl rounded-lg border-[#EFEFEF] border-2 ">
        </div>
      </div>
    </div>
  </div>
  <div class="tab documentation  sm:px-8 w-full bg-white shadow-xl relative mb-1 rounded-xl ">
    <input type="radio" name="faq" id="documentation" class="appearance-none peer">
    <label for="documentation"
      class="flex items-center gap-x-3 cursor-pointer font-semibold text-lg after:content-[url(/dist/images/down.png)] after:items-center  after:absolute after:right-8 after:text-4xl  after:text-gray-400 hover:after:text-gray-950 peer-checked:after:transform peer-checked:after:rotate-180 ">
      <svg width="40" height="40" viewBox="0 0 40 40" fill="none"
        xmlns="http://www.w3.org/2000/svg">
        <rect width="40" height="40" rx="8" fill="#FFE4E1" />
        <path
          d="M18.9067 15.9107L23.216 8.44933C25.016 8.91422 26.6436 9.82356 28.0987 11.1773C29.5547 12.5311 30.6124 14.1089 31.272 15.9107H18.9067ZM15.8507 19.0133L11.564 11.4747C12.6956 10.3653 13.9831 9.50889 15.4267 8.90533C16.8702 8.30178 18.3947 8 20 8C20.3404 8 20.7293 8.02089 21.1667 8.06267C21.604 8.10444 21.9356 8.14756 22.1613 8.192L15.8507 19.0133ZM8.384 22.9733C8.25067 22.4062 8.15333 21.8836 8.092 21.4053C8.03067 20.9262 8 20.4578 8 20C8 18.5929 8.23867 17.2409 8.716 15.944C9.19244 14.6462 9.88889 13.4284 10.8053 12.2907L16.9227 22.9747H8.38267L8.384 22.9733ZM16.9213 31.6027C15.0191 31.1031 13.3218 30.168 11.8293 28.7973C10.3369 27.4267 9.29511 25.832 8.704 24.0133H21.24L16.92 31.6027H16.9213ZM20 32C19.6667 32 19.3067 31.9778 18.92 31.9333C18.5324 31.8889 18.2169 31.8444 17.9733 31.8L24.2533 21.1413L28.4613 28.5C27.3467 29.6093 26.0591 30.4702 24.5987 31.0827C23.1382 31.6942 21.6053 32 20 32ZM29.1947 27.7107L23.0773 16.9733H31.6173C31.7338 17.4889 31.8271 18.0031 31.8973 18.516C31.9658 19.0298 32 19.5244 32 20C32 21.4356 31.7618 22.7964 31.2853 24.0827C30.8098 25.368 30.1129 26.5769 29.1947 27.7093V27.7107Z"
          fill="#FF7366" />
      </svg>

      <h3>Tim Dokumentasi</h3>
    </label>
    <div
      class="answer content mt-5 h-0 transition ease-in-out delay-600 overflow-hidden peer-checked:h-full">
      <div class="grid grid-cols-2 w-[504px] gap-2 m-auto pb-6">
        <div
          class=" w-[246px] h-[263px] p-4 flex flex-col justify-center items-center shadow-xl rounded-lg border-[#EFEFEF] border-2 ">
        </div>
      </div>
    </div>
  </div>
  <div class="tab platformDev  sm:px-8 w-full bg-white shadow-xl relative mb-1 rounded-xl ">
    <input type="radio" name="faq" id="platformDev" class="appearance-none peer">
    <label for="platformDev"
      class="flex items-center gap-x-3 cursor-pointer font-semibold text-lg after:content-[url(/dist/images/down.png)] after:items-center  after:absolute after:right-8 after:text-4xl  after:text-gray-400 hover:after:text-gray-950 peer-checked:after:transform peer-checked:after:rotate-180 ">
      <svg width="40" height="40" viewBox="0 0 40 40" fill="none"
        xmlns="http://www.w3.org/2000/svg">
        <rect width="40" height="40" rx="8" fill="#FFE4E1" />
        <path
          d="M10.1533 29.3332C9.54 29.3332 9.028 29.1278 8.61733 28.7172C8.20578 28.3056 8 27.7932 8 27.1798V12.8198C8 12.2065 8.20578 11.6945 8.61733 11.2838C9.028 10.8723 9.54 10.6665 10.1533 10.6665H29.8467C30.46 10.6665 30.972 10.8723 31.3827 11.2838C31.7942 11.6945 32 12.2065 32 12.8198V27.1798C32 27.7932 31.7947 28.3052 31.384 28.7158C30.9724 29.1274 30.46 29.3332 29.8467 29.3332H10.1533ZM11.6413 25.1798H28.3587V23.8465H11.6413V25.1798ZM11.6413 20.6665H28.3587V19.3332H11.6413V20.6665ZM11.6413 16.1532H23.3333V14.8198H11.64L11.6413 16.1532Z"
          fill="#FF7366" />
      </svg>
      <h3>Tim Pengembang Platform</h3>
    </label>
    <div
      class="answer content mt-5 h-0 transition ease-in-out delay-600 overflow-hidden peer-checked:h-full">
      <div class="grid grid-cols-2 w-[504px] gap-2 m-auto pb-6">
        <div
          class=" w-[246px] h-[263px] p-4 flex flex-col justify-center items-center shadow-xl rounded-lg border-[#EFEFEF] border-2 ">
        </div>
      </div>
    </div>
  </div>
  <div class="tab leaderShip  sm:px-8 w-full bg-white shadow-xl relative mb-1 rounded-xl ">
    <input type="radio" name="faq" id="leaderShip" class="appearance-none peer">
    <label for="leaderShip"
      class="flex items-center gap-x-3 cursor-pointer font-semibold text-lg after:content-[url(/dist/images/down.png)] after:items-center  after:absolute after:right-8 after:text-4xl  after:text-gray-400 hover:after:text-gray-950 peer-checked:after:transform peer-checked:after:rotate-180 ">
      <svg width="40" height="40" viewBox="0 0 40 40" fill="none"
        xmlns="http://www.w3.org/2000/svg">
        <rect width="40" height="40" rx="8" fill="#FFE4E1" />
        <g clip-path="url(#clip0_117_1590)">
          <path
            d="M19.9999 6.6665C22.2098 6.6665 24.3652 7.35291 26.1682 8.63087C27.9711 9.90883 29.3326 11.7152 30.0646 13.8005C30.7965 15.8857 30.8626 18.1468 30.2539 20.2712C29.6452 22.3957 28.3917 24.2786 26.6665 25.6598V31.8065C26.6665 32.0435 26.6091 32.2769 26.4992 32.4868C26.3893 32.6967 26.2301 32.8769 26.0354 33.0119C25.8407 33.1468 25.6161 33.2326 25.381 33.2619C25.1458 33.2911 24.9071 33.263 24.6852 33.1798L19.9999 31.4252L15.3145 33.1825C15.0926 33.2657 14.8537 33.2938 14.6185 33.2645C14.3832 33.2352 14.1586 33.1493 13.9638 33.0141C13.769 32.879 13.6099 32.6987 13.5001 32.4886C13.3903 32.2785 13.333 32.0449 13.3332 31.8078V25.6612C11.6075 24.2801 10.3535 22.3971 9.74448 20.2724C9.13544 18.1477 9.20148 15.8862 9.93345 13.8007C10.6654 11.7151 12.0272 9.90848 13.8305 8.63046C15.6338 7.35243 17.7896 6.66616 19.9999 6.6665ZM19.9999 9.33317C17.8781 9.33317 15.8433 10.176 14.343 11.6763C12.8427 13.1766 11.9999 15.2114 11.9999 17.3332C11.9999 19.4549 12.8427 21.4897 14.343 22.99C15.8433 24.4903 17.8781 25.3332 19.9999 25.3332C22.1216 25.3332 24.1564 24.4903 25.6567 22.99C27.157 21.4897 27.9999 19.4549 27.9999 17.3332C27.9999 15.2114 27.157 13.1766 25.6567 11.6763C24.1564 10.176 22.1216 9.33317 19.9999 9.33317ZM19.9999 11.9998C21.4144 11.9998 22.7709 12.5617 23.7711 13.5619C24.7713 14.5621 25.3332 15.9187 25.3332 17.3332C25.3332 18.7477 24.7713 20.1042 23.7711 21.1044C22.7709 22.1046 21.4144 22.6665 19.9999 22.6665C18.5854 22.6665 17.2288 22.1046 16.2286 21.1044C15.2284 20.1042 14.6665 18.7477 14.6665 17.3332C14.6665 15.9187 15.2284 14.5621 16.2286 13.5619C17.2288 12.5617 18.5854 11.9998 19.9999 11.9998Z"
            fill="#FF7366" />
        </g>
        <defs>
          <clipPath id="clip0_117_1590">
            <rect width="32" height="32" fill="white" transform="translate(4 4)" />
          </clipPath>
        </defs>
      </svg>

      <h3>Leadership</h3>
    </label>
    <div
      class="answer content mt-5 h-0 transition ease-in-out delay-600 overflow-hidden peer-checked:h-full">
      <div class="grid grid-cols-2 w-[504px] gap-2 m-auto pb-6">
        <div
          class=" w-[246px] h-[263px] p-4 flex flex-col justify-center items-center shadow-xl rounded-lg border-[#EFEFEF] border-2 ">
        </div>
      </div>
    </div>
  </div>
</section>
@endsection

@section("modal")
       
@endsection

@push('javascript')
  
@endpush
