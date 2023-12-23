<section class="grow-0 w-[180px] min-h-screen py-4 bg-white border-r border-neutral-300 flex-col justify-start items-center gap-[52px] inline-flex">
    <div class="w-[83px] h-[45px] justify-center items-center inline-flex">
        <img class="w-[83px] h-[45px]" src="{{ url('FE') }}/dist/images/logo-main.png" />
    </div>
    <div class="self-stretch h-[228px] flex-col justify-start items-start gap-3 flex">
        <div class="self-stretch h-9 px-3 {{ request()->is('dashboard') ? '   border-r-2 border-red-400' : '' }}  justify-start items-center gap-2 inline-flex  hover:border-r-2 hover:border-red-400 ">
            <div class="w-6 h-6 relative"></div>
            <a href="{{ route('dashboard.home') }}" class="{{ request()->is('dashboard') ? '  text-red-400 text-base font-normal ' : 'text-neutral-400 text-base font-normal' }} text-base font-normal font-['Poppins']"> Beranda</a>
        </div>
        <div class="self-stretch h-9 px-3 {{ request()->is('konten-masuk') ? '   border-r-2 border-red-400' : '' }} justify-start items-center gap-2 inline-flex  hover:border-r-2 hover:border-red-400 ">
            <div class="w-6 h-6 relative"></div>
            <a href="{{ route('dashboard.konten-masuk') }}" class="{{ request()->is('*/konten-masuk') ? '  text-red-400 text-base font-normal ' : 'text-neutral-400 text-base font-normal' }} hover:text-red-400">Konten Masuk</a>
        </div>
        <div class="self-stretch h-9 px-3 {{ request()->is('*/jenis-tim') ? '   border-r-2 border-red-400' : '' }} justify-start items-center gap-2 inline-flex  hover:border-r-2 hover:border-red-400 ">
            <div class="w-6 h-6 relative"></div>
            <a href="{{ route('dashboard.jenis-tim.index') }}" class="{{ request()->is('*/jenis-tim') ? '  text-red-400 text-base font-normal ' : 'text-neutral-400 text-base font-normal' }} hover:text-red-400">Jenis Tim</a>
        </div>
        <div class="self-stretch h-9 px-3 {{ request()->is('*/anggota-tim') ? '   border-r-2 border-red-400' : '' }} justify-start items-center gap-2 inline-flex  hover:border-r-2 hover:border-red-400 ">
            <div class="w-6 h-6 relative"></div>
            <a href="{{ route('dashboard.anggota-tim.index') }}" class="{{ request()->is('*/anggota-tim') ? '  text-red-400 text-base font-normal ' : 'text-neutral-400 text-base font-normal' }} hover:text-red-400">Anggota Tim</a>
        </div>
        <div class="self-stretch h-9 px-3 {{ request()->is('*/loker-tim') ? '   border-r-2 border-red-400' : '' }} justify-start items-center gap-2 inline-flex  hover:border-r-2 hover:border-red-400 ">
            <div class="w-6 h-6 relative"></div>
            <a href="{{ route('dashboard.loker-tim.index') }}" class="{{ request()->is('*/loker-tim') ? '  text-red-400 text-base font-normal ' : 'text-neutral-400 text-base font-normal' }} hover:text-red-400">Loker Tim</a>
        </div>
        <div class="self-stretch h-9 px-3 {{ request()->is('*/donatur') ? '   border-r-2 border-red-400' : '' }} justify-start items-center gap-2 inline-flex  hover:border-r-2 hover:border-red-400 ">
            <div class="w-6 h-6 relative"></div>
            <a href="{{ route('dashboard.donatur') }}" class="{{ request()->is('*/donatur') ? '  text-red-400 text-base font-normal ' : 'text-neutral-400 text-base font-normal' }} hover:text-red-400">Donatur</a>
        </div>
        <div class="self-stretch h-9 px-3 {{ request()->is('*/post') ? '   border-r-2 border-red-400' : '' }} justify-start items-center gap-2 inline-flex  hover:border-r-2 hover:border-red-400 ">
            <div class="w-6 h-6 relative"></div>
            <a href="{{ route('dashboard.post') }}" class="{{ request()->is('*/post') ? '  text-red-400 text-base font-normal ' : 'text-neutral-400 text-base font-normal' }} hover:text-red-400">Post</a>
        </div>
    </div>
</section>