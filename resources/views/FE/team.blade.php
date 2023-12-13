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
  @forelse ($teams as $team)
  <div
    class="tab {{ $team->id }} max-sm:px-5  sm:px-8 w-full bg-white shadow-xl relative mb-1 rounded-xl max-lg:m-4">
    <input type="radio" name="faq" id="team{{ $team->id }}" class="appearance-none peer">
    <label for="team{{ $team->id }}"
      class="flex items-center gap-x-3 cursor-pointer font-semibold text-lg after:content-[url({{ asset('/FE/dist/images/down.png') }})] after:items-center after:absolute after:right-8 after:text-4xl after:text-gray-400 hover:after:text-gray-950 peer-checked:after:transform peer-checked:after:rotate-180 ">
      <div class="w-10 h-10 bg-red-100 rounded-lg flex items-center">
        <div class="w-[30px] h-[30px] flex items-center mx-auto">
          <img src="{{ asset($team->icon) }}" alt="">
        </div>
      </div>
      <h3>{{ $team->name }}</h3>
    </label>
    <div
      class="answer content mt-5 h-0 transition ease-in-out delay-600 overflow-hidden peer-checked:h-full ">
      <div
        class="grid grid-cols-3 max-md:grid-cols-2 max-sm:grid-cols-1 max-sm:w-full lg:max-w-max gap-2 mx-auto pb-5 ">
        @foreach ($team->member as $member)
        <div
          class="w-[246px] h-[263px] flex flex-col max-lg:w-full justify-center items-center text-center shadow-xl rounded-lg border-[#EFEFEF] border-2">
          <img src="{{ url($member->foto) }}" alt="" class="rounded-full w-[117px] mb-4">
          <h3 class="font-semibold">{{ $member->name }}</h3>
          <p class="px-3">{{ $member->quote }}</p>
        </div>
        @endforeach
      </div>
    </div>
  </div>
  @empty
  <div class="tab sosmed  sm:px-8 w-full bg-white shadow-xl relative mb-1 rounded-xl ">
    <h3>belum ada tim</h3>
  </div>
  @endforelse
</section>
@endsection
@section("modal")
@endsection
@push('javascript')
@endpush