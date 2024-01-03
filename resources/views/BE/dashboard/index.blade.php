@extends('template.backend')
@section('title','dashboard')
@section('content')
<section class="p-5 conten">
    <div class="flex flex-col max-w-9xl content-body gap-4">
        
        <!-- dashboard total -->
        <section class="inline-flex justify-between w-full gap-4">
            <div
                class="w-[340px] h-[150px] bg-white rounded-lg border border-neutral-300 justify-center items-center gap-3 inline-flex">
                <div class="w-20 h-20 relative">
                    <div class="w-20 h-20 left-0 top-0 absolute bg-red-400 rounded-full"></div>
                    <div class="w-[58.18px] h-[58.18px] left-[10.91px] top-[10.91px] absolute">
                        <svg width="60" height="60" viewBox="0 0 60 60" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M16.0606 8.18164C13.971 8.18164 11.967 9.01172 10.4895 10.4893C9.01189 11.9668 8.18181 13.9708 8.18181 16.0604V43.9392C8.18181 46.0288 9.01189 48.0328 10.4895 49.5104C11.967 50.9879 13.971 51.818 16.0606 51.818H43.9394C46.029 51.818 48.033 50.9879 49.5105 49.5104C50.9881 48.0328 51.8182 46.0288 51.8182 43.9392V16.0604C51.8182 13.9708 50.9881 11.9668 49.5105 10.4893C48.033 9.01172 46.029 8.18164 43.9394 8.18164H16.0606ZM15.4545 20.9089C15.4545 18.5671 17.3551 16.6665 19.697 16.6665H40.303C42.6448 16.6665 44.5454 18.5671 44.5454 20.9089V24.5453C44.5454 25.6704 44.0985 26.7495 43.3029 27.5451C42.5073 28.3407 41.4282 28.7877 40.303 28.7877H19.697C18.5718 28.7877 17.4927 28.3407 16.6971 27.5451C15.9015 26.7495 15.4545 25.6704 15.4545 24.5453V20.9089ZM19.697 20.3029C19.5362 20.3029 19.3821 20.3667 19.2684 20.4804C19.1548 20.594 19.0909 20.7482 19.0909 20.9089V24.5453C19.0909 24.8798 19.3624 25.1513 19.697 25.1513H40.303C40.4638 25.1513 40.6179 25.0875 40.7316 24.9738C40.8452 24.8602 40.9091 24.706 40.9091 24.5453V20.9089C40.9091 20.7482 40.8452 20.594 40.7316 20.4804C40.6179 20.3667 40.4638 20.3029 40.303 20.3029H19.697ZM17.2727 32.4241H28.1818C28.664 32.4241 29.1265 32.6156 29.4675 32.9566C29.8084 33.2976 30 33.76 30 34.2422C30 34.7245 29.8084 35.1869 29.4675 35.5279C29.1265 35.8689 28.664 36.0604 28.1818 36.0604H17.2727C16.7905 36.0604 16.328 35.8689 15.9871 35.5279C15.6461 35.1869 15.4545 34.7245 15.4545 34.2422C15.4545 33.76 15.6461 33.2976 15.9871 32.9566C16.328 32.6156 16.7905 32.4241 17.2727 32.4241ZM15.4545 41.515C15.4545 41.0328 15.6461 40.5703 15.9871 40.2293C16.328 39.8883 16.7905 39.6968 17.2727 39.6968H28.1818C28.664 39.6968 29.1265 39.8883 29.4675 40.2293C29.8084 40.5703 30 41.0328 30 41.515C30 41.9972 29.8084 42.4596 29.4675 42.8006C29.1265 43.1416 28.664 43.3332 28.1818 43.3332H17.2727C16.7905 43.3332 16.328 43.1416 15.9871 42.8006C15.6461 42.4596 15.4545 41.9972 15.4545 41.515ZM37.8788 32.4241H40.303C42.6448 32.4241 44.5454 34.3247 44.5454 36.6665V39.0907C44.5454 40.2159 44.0985 41.295 43.3029 42.0906C42.5073 42.8862 41.4282 43.3332 40.303 43.3332H37.8788C36.7536 43.3332 35.6745 42.8862 34.8789 42.0906C34.0833 41.295 33.6364 40.2159 33.6364 39.0907V36.6665C33.6364 34.3247 35.537 32.4241 37.8788 32.4241ZM37.2727 36.6665C37.2727 36.5058 37.3366 36.3516 37.4502 36.2379C37.5639 36.1243 37.718 36.0604 37.8788 36.0604H40.303C40.4638 36.0604 40.6179 36.1243 40.7316 36.2379C40.8452 36.3516 40.9091 36.5058 40.9091 36.6665V39.0907C40.9091 39.2515 40.8452 39.4056 40.7316 39.5193C40.6179 39.6329 40.4638 39.6968 40.303 39.6968H37.8788C37.718 39.6968 37.5639 39.6329 37.4502 39.5193C37.3366 39.4056 37.2727 39.2515 37.2727 39.0907V36.6665Z" fill="white"/>
                            </svg>
                                
                    </div>
                </div>
                <div class="flex-col justify-start items-center gap-1 inline-flex">
                    <div class="text-zinc-800 text-[40px] font-semibold font-['Poppins']">{{ $data['kontenmasuk'] }}</div>
                    <div class="text-zinc-800 text-base font-normal font-['Poppins']">Total Konten Masuk
                    </div>
                </div>
            </div>
    
            <div
                class="w-[340px] h-[150px] bg-white rounded-lg border border-neutral-300 justify-center items-center gap-3 inline-flex">
                <div class="w-20 h-20 relative">
                    <div class="w-20 h-20 left-0 top-0 absolute bg-red-400 rounded-full"></div>
                    <div class="w-[58.18px] h-[58.18px] left-[11px] top-[11px] absolute">
                        <svg width="59" height="59" viewBox="0 0 59 59" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M50.9075 24.2416V21.8175L36.3625 7.27246H12.1208C9.43001 7.27246 7.2725 9.42997 7.2725 12.1208V46.0591C7.2725 47.345 7.7833 48.5782 8.69254 49.4874C9.60178 50.3967 10.835 50.9075 12.1208 50.9075H26.6658V46.3743L47.0046 26.0355C48.0712 24.9689 49.4288 24.3871 50.9075 24.2416ZM33.9383 10.9087L47.2712 24.2416H33.9383V10.9087ZM55.3922 34.3989L53.0165 36.7746L48.0712 31.8293L50.4469 29.4536C50.9075 28.9688 51.7075 28.9688 52.1923 29.4536L55.3922 32.6535C55.877 33.1383 55.877 33.9383 55.3922 34.3989ZM46.3743 33.5262L51.3196 38.4715L36.4595 53.3316H31.5142V48.3863L46.3743 33.5262Z" fill="white"/>
                            </svg>
                            
                    </div>
                </div>
                <div class="flex-col justify-start items-center gap-1 inline-flex">
                    <div class="text-zinc-800 text-[40px] font-semibold font-['Poppins']">{{ $data['validated'] }}</div>
                    <div class="text-zinc-800 text-base font-normal font-['Poppins']">Konten Divalidasi
                    </div>
                </div>
            </div>
    
            <div
                class="w-[340px] h-[150px] bg-white rounded-lg border border-neutral-300 justify-center items-center gap-3 inline-flex">
                <div class="w-20 h-20 relative">
                    <div class="w-20 h-20 left-0 top-0 absolute bg-red-400 rounded-full"></div>
                    <div class="w-[58.18px] h-[58.18px] left-[10.83px] top-[11px] absolute">
                        <svg width="59" height="59" viewBox="0 0 59 59" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M24.6477 8.87012C26.7227 5.11751 32.1165 5.11751 34.1916 8.87012L52.9692 42.8109C54.9812 46.4471 52.351 50.9076 48.196 50.9076H10.6457C6.48822 50.9076 3.858 46.4471 5.87006 42.8109L24.6477 8.87255V8.87012ZM31.8402 41.2109C31.8504 40.8866 31.7954 40.5635 31.6784 40.2609C31.5614 39.9583 31.3847 39.6822 31.1589 39.4492C30.9331 39.2161 30.6628 39.0309 30.3641 38.9043C30.0653 38.7778 29.7441 38.7126 29.4196 38.7126C29.0951 38.7126 28.774 38.7778 28.4752 38.9043C28.1764 39.0309 27.9061 39.2161 27.6803 39.4492C27.4545 39.6822 27.2779 39.9583 27.1609 40.2609C27.0438 40.5635 26.9888 40.8866 26.9991 41.2109C27.019 41.8396 27.2827 42.4359 27.7345 42.8736C28.1863 43.3113 28.7906 43.5561 29.4196 43.5561C30.0486 43.5561 30.653 43.3113 31.1048 42.8736C31.5565 42.4359 31.8203 41.8396 31.8402 41.2109ZM31.2123 22.1739C31.1495 21.7174 30.9156 21.3017 30.558 21.011C30.2004 20.7203 29.7458 20.5762 29.286 20.608C28.8262 20.6397 28.3957 20.8448 28.0814 21.1819C27.7671 21.5189 27.5925 21.9628 27.593 22.4236L27.6027 33.3348L27.6197 33.5821C27.6825 34.0386 27.9164 34.4543 28.2739 34.745C28.6315 35.0357 29.0862 35.1798 29.546 35.1481C30.0057 35.1164 30.4363 34.9112 30.7506 34.5742C31.0649 34.2371 31.2394 33.7932 31.239 33.3324L31.2293 22.4188L31.2123 22.1739Z" fill="white"/>
                            </svg>
                            
                    </div>
                </div>
                <div class="flex-col justify-start items-center gap-1 inline-flex">
                    <div class="text-zinc-800 text-[40px] font-semibold font-['Poppins']">{{ $data['notreply'] }}</div>
                    <div class="text-zinc-800 text-base font-normal font-['Poppins']">Konten Belum
                        Dibalas</div>
                </div>
            </div>
        </section>

        <!-- data data -->
        <section class="datadata flex flex-row gap-4">

            <!-- kiri -->
            <section class="kiri">
                <div class="w-[454px] h-[562px] p-3 bg-white rounded-lg border border-neutral-300 flex-col justify-start items-start gap-5 inline-flex relative">
                    <div class="text-zinc-800 text-xl font-medium font-['Poppins'] sticky bg-white w-full top-0">Konten Masuk Terbaru</div>
                
                    @forelse ($data['issues'] as $issue)
                    <div class="flex-col justify-start items-end gap-4 flex">
                        <div class="justify-start items-center gap-10 inline-flex">
                            <div class="justify-start items-center gap-2 flex">
                                <div data-tooltip-target="tooltip-ss1-{{ $loop->index }}" class="relative">
                                    <img  loading="lazy" class="w-[83px] h-[50px]" src="{{ $issue->screenshoot1 }}" />
                                   <div id="tooltip-ss1-{{ $loop->index }}" role="tooltip"
                                        class="absolute w-96 z-[100] invisible inline-block px-3 py-2 text-sm font-medium text-white bg-white-900 rounded-lg shadow-sm opacity-0 tooltip ">
                                        <a onclick="openNewWindow({{ asset($issue->screenshoot1) }}">
                                            <img loading="lazy" class="w-full shadow" src="{{ asset($issue->screenshoot1) }}"
                                                alt="{{ $issue->detail }}">
                                        </a>
                                    </div>
                                </div>
                                <div class="flex-col justify-center items-start gap-0.5 inline-flex">
                                    <div class="text-zinc-800 text-base font-normal font-['Poppins']">{{ $issue->email }}</div>
                                    <div class="text-zinc-500 text-sm font-normal font-['Poppins']"> {{ \Carbon\Carbon::parse($issue->created_at)->locale('id')->diffForHumans() }}</div>
                                </div>
                            </div>
                            <div class="w-[145px] text-yellow-500 text-base font-normal font-['Poppins'] ">
                                    <div class="w-[164px]  h-8 px-1 pr-3 py-0.5 rounded-lg border border-0 justify-end items-center inline-flex @if ($issue->status=='not_validate')
                                        text-red-600
                                    @elseif ($issue->status=='validated')
                                        text-lime-600
                                    @else
                                        text-yellow-500
                                    @endif status-dropdown">
                                    @if ($issue->status=='not_validate')
                                        belum divalidasi
                                    @elseif ($issue->status=='validated')
                                        tervalidasi
                                    @else
                                        sedang diperiksa
                                    @endif
    </div>
                            </div>
                        </div>
                    </div>
                    
                    @empty
                    
                    @endforelse
                    
                    <a href="{{ route('dashboard.konten-masuk.index') }}" class="text-red-400 text-sm font-normal font-['Poppins'] -mt-3">Lihat lebih banyak</a>
                </div>
            </section>

            <!-- kanan -->
            <section class="kanan grid grid-rows-2 gap-4 w-full">
            
                <div class="min-w-full h-[280px] px-3 bg-white rounded-lg border border-neutral-300 flex-col justify-center items-center gap-3 inline-flex">
                    <div class="self-stretch justify-between items-center inline-flex">
                        <div class="text-zinc-800 text-xl font-medium font-['Poppins']">Total Konten Masuk</div>
                        <div class="justify-start items-center gap-1 flex">
                            <div class="text-zinc-800 text-sm font-normal font-['Poppins']">2023</div>
                            <div class="w-4 h-4 relative origin-top-left -rotate-90"></div>
                        </div>
                    </div>
                    <div class="w-[30vw] ">
                        <canvas class="w-auto" id="myChart"></canvas>
                    </div>
                </div>

                <div class="min-w-full h-[280px] px-3 bg-white rounded-lg border border-neutral-300 flex-col justify-center items-center gap-3 inline-flex">
                    <div class="self-stretch justify-between items-center inline-flex">
                        <div class="text-zinc-800 text-xl font-medium font-['Poppins']">Total Konten Masuk</div>
                        <div class="justify-start items-center gap-1 flex">
                            <div class="text-zinc-800 text-sm font-normal font-['Poppins']">2023</div>
                            <div class="w-4 h-4 relative origin-top-left -rotate-90"></div>
                        </div>
                    </div>
                    <div class="w-[559px] h-[200px] relative">
                        <div class="w-[534px] h-[180px] left-[13px] top-0 absolute">
                        </div>
                        <div class="w-[559px] h-4 left-0 top-[184px] absolute">
                            <div class="left-0 top-0 absolute text-center text-zinc-800 text-sm font-normal font-['Roboto']">Jan</div>
                            <div class="left-[49.64px] top-0 absolute text-center text-zinc-800 text-sm font-normal font-['Roboto']">Feb</div>
                            <div class="left-[97.77px] top-0 absolute text-center text-zinc-800 text-sm font-normal font-['Roboto']">Mar</div>
                            <div class="left-[147.41px] top-0 absolute text-center text-zinc-800 text-sm font-normal font-['Roboto']">Apr</div>
                            <div class="left-[194.05px] top-0 absolute text-center text-zinc-800 text-sm font-normal font-['Roboto']">May</div>
                            <div class="left-[243.18px] top-0 absolute text-center text-zinc-800 text-sm font-normal font-['Roboto']">Jun</div>
                            <div class="left-[294.82px] top-0 absolute text-center text-zinc-800 text-sm font-normal font-['Roboto']">Jul</div>
                            <div class="left-[340.45px] top-0 absolute text-center text-zinc-800 text-sm font-normal font-['Roboto']">Aug</div>
                            <div class="left-[389.59px] top-0 absolute text-center text-zinc-800 text-sm font-normal font-['Roboto']">Sep</div>
                            <div class="left-[438.73px] top-0 absolute text-center text-zinc-800 text-sm font-normal font-['Roboto']">Oct</div>
                            <div class="left-[486.36px] top-0 absolute text-center text-zinc-800 text-sm font-normal font-['Roboto']">Nov</div>
                            <div class="left-[535px] top-0 absolute text-center text-zinc-800 text-sm font-normal font-['Roboto']">Dec</div>
                        </div>
                        <div class="w-[535px] h-[120.96px] left-[12.50px] top-[59.04px] absolute">
                        </div>
                        <div class="w-[540px] h-[115.52px] left-[10px] top-[56.54px] absolute">
                            <div class="w-[5px] h-[5px] left-0 top-[16.56px] absolute bg-white rounded-full border-2 border-red-400"></div>
                            <div class="w-[5px] h-[5px] left-[48.64px] top-[39.96px] absolute bg-white rounded-full border-2 border-red-400"></div>
                            <div class="w-[5px] h-[5px] left-[97.27px] top-[110.16px] absolute bg-white rounded-full border-2 border-red-400"></div>
                            <div class="w-[5px] h-[5px] left-[145.91px] top-0 absolute bg-white rounded-full border-2 border-red-400"></div>
                            <div class="w-[5px] h-[5px] left-[194.55px] top-[68.76px] absolute bg-white rounded-full border-2 border-red-400"></div>
                            <div class="w-[5px] h-[5px] left-[243.18px] top-[84.96px] absolute bg-white rounded-full border-2 border-red-400"></div>
                            <div class="w-[5px] h-[5px] left-[291.82px] top-[92.16px] absolute bg-white rounded-full border-2 border-red-400"></div>
                            <div class="w-[5px] h-[5px] left-[340.45px] top-[85.68px] absolute bg-white rounded-full border-2 border-red-400"></div>
                            <div class="w-[5px] h-[5px] left-[389.09px] top-[89.64px] absolute bg-white rounded-full border-2 border-red-400"></div>
                            <div class="w-[5px] h-[5px] left-[437.73px] top-[110.52px] absolute bg-white rounded-full border-2 border-red-400"></div>
                            <div class="w-[5px] h-[5px] left-[486.36px] top-[101.52px] absolute bg-white rounded-full border-2 border-red-400"></div>
                            <div class="w-[5px] h-[5px] left-[535px] top-[99.36px] absolute bg-white rounded-full border-2 border-red-400"></div>
                        </div>
                        <div class="w-[555px] h-[126.52px] left-0 top-[41.04px] absolute">
                            <div class="left-0 top-[16.56px] absolute text-center text-zinc-800 text-sm font-normal font-['Roboto']">290</div>
                            <div class="left-[49.14px] top-[39.96px] absolute text-center text-zinc-800 text-sm font-normal font-['Roboto']">225</div>
                            <div class="left-[101.77px] top-[110.16px] absolute text-center text-zinc-800 text-sm font-normal font-['Roboto']">30</div>
                            <div class="left-[145.91px] top-0 absolute text-center text-zinc-800 text-sm font-normal font-['Roboto']">336</div>
                            <div class="left-[194.55px] top-[68.76px] absolute text-center text-zinc-800 text-sm font-normal font-['Roboto']">145</div>
                            <div class="left-[243.18px] top-[84.96px] absolute text-center text-zinc-800 text-sm font-normal font-['Roboto']">100</div>
                            <div class="left-[295.82px] top-[92.16px] absolute text-center text-zinc-800 text-sm font-normal font-['Roboto']">80</div>
                            <div class="left-[344.45px] top-[85.68px] absolute text-center text-zinc-800 text-sm font-normal font-['Roboto']">98</div>
                            <div class="left-[393.09px] top-[89.64px] absolute text-center text-zinc-800 text-sm font-normal font-['Roboto']">87</div>
                            <div class="left-[441.73px] top-[110.52px] absolute text-center text-zinc-800 text-sm font-normal font-['Roboto']">29</div>
                            <div class="left-[490.36px] top-[101.52px] absolute text-center text-zinc-800 text-sm font-normal font-['Roboto']">54</div>
                            <div class="left-[539px] top-[99.36px] absolute text-center text-zinc-800 text-sm font-normal font-['Roboto']">60</div>
                        </div>
                    </div>
                </div>

            </section>

    </section>
    
</div>
</section>
@endsection
@push('javascript')
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script>
 $(document).ready(function() {
  // Mengatur event hover pada semua elemen span dengan data-tooltip-target
  $('[data-tooltip-target]').hover(
   function() {
    const targetId = $(this).data('tooltip-target');
    const tooltip = $('#' + targetId);
    tooltip.removeClass('invisible');
    tooltip.addClass('opacity-100');
   }
   , function() {
    const targetId = $(this).data('tooltip-target');
    const tooltip = $('#' + targetId);
    tooltip.removeClass('opacity-100');
    tooltip.addClass('invisible');
   }
  );
 });
</script>
<script>
    function openNewWindow(url) {
  var newWindow = window.open(url, '_blank', 'height=800,width=1440');
  newWindow.focus();
 }
</script>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    var ctx = document.getElementById('myChart').getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'line',
        data: {
            labels: $data['bulan'],
            datasets: [{
                label: 'Total Konten Masuk',
                data: [290, 225, 80, 336, 145, 100, 80, 98, 87, 29, 54, 60],
                backgroundColor: 'rgba(255, 99, 132, 0.2)',
                borderColor: 'rgba(255, 99, 132, 1)',
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero: true
                    }
                }]
            }
        }
    });
</script>

@endpush
