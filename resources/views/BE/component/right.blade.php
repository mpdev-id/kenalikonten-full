<section class="grow headerkanan">
    <div class="h-[60px] px-5 bg-neutral-100 justify-between items-center inline-flex w-full shadow">
        <div class="text-zinc-800 text-2xl font-medium font-['Poppins']">@yield('title')</div>
        <div class="justify-start items-center gap-2 flex">
            <div class="text-black text-sm font-normal font-['Poppins']">{{ Auth::user()->name }}</div>
            <div class="justify-start items-center gap-0.5 flex">
                <img class="w-10 h-10 rounded-full border-2 border-white" src="{{ asset('FE/dist/images/teams/7.png') }}" />
                <div class="w-6 h-6 relative origin-top-left -rotate-90"></div>
            </div>
        </div>
    </div>  